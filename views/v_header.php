<!DOCTYPE html>
 
<html>
 
    <head>
 
        <link href="../css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="../css/styles.css" rel="stylesheet"/>
 
        <?php if (isset($title)): ?>
            <title>CSCI E-50: LearnIt <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>CSCI E-50: LearnIt</title>
        <?php endif ?>
 
        <script src="../js/jquery-1.10.2.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/scripts.js"></script>
 
    </head>
 
    <body>
 
        <div class="container">
 
            <div id="top">
                <a href="/"><img alt="CSCI E-50: LearnIt" src="../img/logo.gif"/></a>
            </div>
 
            <div>
                <a href="/">Quizzes</a> |  
                <a href="../controllers/c_change.php">Change Your Password</a>
            </div>
 
            <div id="middle">
            