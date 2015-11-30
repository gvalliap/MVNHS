<div id="login" class="modal">
    <?php
        $fail = false;
        if($fail)
        echo "<p><font color='red'>The login information you entered does not match. Check it and try again.</font></p>";
    ?>
    <form class="row" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input id="user" type="text" name="user" class="validate">
            <label for="user">Email</label>
        </div>
        <div class="input-field col s12">
            <i class="material-icons prefix">label</i>
            <input id="pass" type="password" name="pass" class="validate">
            <label for="pass">Password</label>
        </div>
        <div style="text-align: center;">
            <button class="btn-large waves-effect waves-light center-align" type="submit" name="action" style="margin: auto;">Login
                <i class="material-icons left">send</i>
            </button>
            <a class="btn-large waves-effect waves-light center-align" href="forgotpass.php" style="margin: auto;"><i class="material-icons left">lock</i>Forgot password?</a>
        </div>
    </form>
</div>

<div id="register" class="modal">
    <h5 class="center">Come to the next NHS meeting and talk to one of the officers to sign up!</h5>
</div>
