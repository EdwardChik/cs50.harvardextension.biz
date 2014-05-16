<?php
 
    // configuration
    require("../includes/config.php"); 
 
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("Please provide a username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("Please provide a password.");
        }
 
        // query database for user
        $rows = query("SELECT * FROM users WHERE username = ?", $_POST["username"]);
 
        // if user is found, check entered password against database value
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];
 
            // compare hash of input password against hashed password in database
            if (crypt($_POST["password"], $row["hash"]) == $row["hash"])
            {
                // enable user as active session
                $_SESSION["id"] = $row["id"];
 
                // redirect to quizzes
                redirect("/");
            }
        }
 
        // notify user that username and password combination did not validate
        apologize("Please double check your username and password.");
    }
    else
    {
        // display login form
        render("v_login.php", ["title" => "LearnIt - Log In"]);
    }
 
?>