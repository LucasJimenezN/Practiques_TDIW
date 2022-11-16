<a href="../index.php">HOME</a>


<div class="container-login">
    <form action="../controller/controller-login.php" method="post">

    <div class="login">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
    </div>

    <div class="no-login">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw"><a href="/../index.php?action=registrarse">No tienes cuenta?</a></span>
    </div>
    </form>
</div>
<?php include "view-footer.php"; ?>