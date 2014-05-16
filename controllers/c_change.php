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
<div>
    or <a href="../views/v_login.php">Or, log in to your existing account</a>
</div>