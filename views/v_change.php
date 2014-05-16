<!-- allows user to change password for an existing account -->
<form action="../controllers/c_change.php" method="post">
    <fieldset>
        <div class="form-group">
            <p>Enter a new password:</p>
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <p>Confirm the new password:</p>
            <input class="form-control" name="confirmation" placeholder="Password Confirm" type="password"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Change Your Password</button>
        </div>
    </fieldset>
</form>

<!-- users can log in instead -->
<div>
    or <a href="v_login.php">Or, log in to your existing account</a>
</div>