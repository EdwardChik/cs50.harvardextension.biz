<?php
 
    // configuration
    require("includes/config.php"); 
 
    // if user is already logged in    
    if (session_status() === PHP_SESSION_ACTIVE)
    {   
        // display list of available quizzes to take
        print("<p>These are the quizzes currently available in LearnIt:</p>");

        $quizzes = query("SELECT name FROM quizzes");
 
        // render available quizzes
        render("views/v_quizzes.php", ["quizzes" => $quizzes, "title" => "LearnIt - Available Quizzes"]);
    }
    else
    {
        // render login form
        render("../views/v_login.php", ["title" => "LearnIt - Log In"]);
    }
?>