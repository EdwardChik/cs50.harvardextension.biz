<div>
    <p>The following quizzes are available for study in LearnIt:</p>
    <table>

    <!-- generates list of available quizzes in database -->
    <?php
        foreach ($quizzes as $quiz)
        {
            print("<tr>");
            print("<td>{$quiz["name"]}</td>");
            print("</tr>");
        }
    ?>
    </table>
</div>

<!-- allows user to log out -->
<div>
    <a href="v_logout.php">Log Out of LearnIt</a>
</div>