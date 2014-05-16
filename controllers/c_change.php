<?php
 
    // configuration for overall site
    require("../includes/config.php");
     
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["password"]))
        {
            apologize("You must provide a new password.");
        }
        else if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("You must match the new password and confirmation.");
        }
        
        // SQL statement to update password for user in users table
        $change_password = query("UPDATE users SET hash = ? WHERE id = ?", crypt($_POST["password"]), $_SESSION["id"]);
 
        if($change_password === false)
        {
            // error message to note that insert to SQL database failed
            apologize("Password could not be changed in database.");
        }
        else
        {
            // redirect to portfolio
            redirect("/");     
        }
    }
    else
    {
        // else render form
        render("../views/change_form.php", ["title" => "LearnIt - Change Password"]);
    }
 
?>