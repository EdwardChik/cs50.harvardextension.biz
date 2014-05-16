<!-- logs in users with existing accounts in database -->
<form action="../controllers/c_login.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="username" placeholder="Username" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Log In</button>
        </div>
    </fieldset>
</form>

<!-- prompts user to register instead if appropriate -->
<div>
    If you do not have an account yet, please <a href="v_register.php">register</a> for a new one with LearnIt.
</div>