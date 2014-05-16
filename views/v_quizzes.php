<div>
    <p>The following quizzes are available for study in LearnIt:</p>
    <table>
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
<div>
    <a href="v_logout.php">Log Out of LearnIt</a>
</div>