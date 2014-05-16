<!-- creates a new account -->
<form action="../controllers/c_registration.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="username" placeholder="Username" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password" />
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmation" placeholder="Confirm Password" type="password" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Register</button>
        </div>
    </fieldset>
</form>

<!-- prompt user to log in rather than register if they have an existing account -->
<div>
    If you already have an account with LearnIt, please <a href="v_login.php">log in</a> to access the resource.
</div>