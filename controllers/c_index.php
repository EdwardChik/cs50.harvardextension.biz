<?php
 
    // configuration
    require("../includes/config.php"); 
 
    // if user is logged in
    if (session_status() === PHP_SESSION_ACTIVE)
    {   
        // array to store quiz questions
        $positions = [];
     
        // check database for quiz questions
//        $rows = query("SELECT symbol, shares FROM portfolios WHERE id = ?", $_SESSION["id"]);
         
        // if we found 1 or more portfolios for user
        if (count($rows) >= 1)
        {    
            // loop to load data into 2D array
            foreach ($rows as $row)
            {
                $stock = lookup($row["symbol"]);
                if ($stock !== false)
                {
                    $positions[] = [
                        "name" => $stock["name"],
                        "price" => number_format($stock["price"], 2, '.', ','),
                        // "shares" => $stock["shares"],
                        "symbol" => $stock["symbol"]
                    ];
                }
            }
        }
        else
        {
           $user = query("SELECT username FROM users WHERE id = ?", $_SESSION["id"]);
        }
 
        // render quizzes
        render("v_quizzes.php", ["positions" => $positions, "title" => "LearnIt - Quizzes"]);
    }
    else
    {
        // else render form
        render("v_login.php", ["title" => "LearnIt - Log In"]);
    }
?>