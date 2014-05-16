<?php
 
    // configuration
    require("../includes/config.php"); 
 
    // if user is logged in
    if (session_status() === PHP_SESSION_ACTIVE)
    {   
        // array to store quiz questions
        $quiz_questions = [];
     
        // check database for quiz questions
        $rows = query("SELECT description FROM questions WHERE id = ?", $quiz["id"]);

        // if we found 1 or more questions for quiz
        if (count($rows) >= 1)
        {    
            // loop to load data into 2D array
            foreach ($rows as $row)
            {
                $question = lookup($row["id"]);
                if ($question !== false)
                {
                    $quiz_questions[] = [
                        "question" => $question["question"],
                        "quiz" => $question["quiz_id"]
                        "answer" => $stock["answer"]
                    ];
                }
            }
        }
        else
        {
            apologize("Quiz questions could not be located.");
        }
 
        // render quizzes
        render("v_quizzes.php", ["questions" => $quiz_questions, "title" => "LearnIt - Quizzes"]);
    }
    else
    {
        // else render form
        render("v_login.php", ["title" => "LearnIt - Log In"]);
    }
?>