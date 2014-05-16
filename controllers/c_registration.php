<?php
 
    // configuration
    require("../includes/config.php");
     
    // if submit button is pressed
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate form
        if (empty($_POST["username"]))
        {
            apologize("Please enter a username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        else if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("The password and confirmation must be identical.");
        }
         
        // SQL statement to insert user into users table
        $add_user = query("INSERT INTO users (username, hash) VALUES(?, ?)", $_POST["username"], crypt($_POST["password"]));
 
        if($add_user === false)
        {
            // error message to note that insert to SQL database failed
            apologize("Unfortunately, the registration attempt has failed.");
        }
        else
        {
            // validate that database contains  id of newly created account
            $rows = query("SELECT LAST_INSERT_ID() AS id");
  
            // store newly created account's ID as active user session
            $_SESSION["id"] = $rows[0]["id"];
 
            // redirect to quiz page
            redirect("/");
        }
    }
    else
    {
        // otherwise, display registration form
        render("v_registration.php", ["title" => "LearnIt - Register"]);
    }
 
?>