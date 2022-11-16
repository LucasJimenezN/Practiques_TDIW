<?php include "header.php"; ?>

<div class="container-login">
    <form action="resource_registre.php" method="post">

        <div class="singin">
            <label for="uname"><b>Usuario</b></label>
            <input type="text" placeholder="Aquí va el usuario" name="uname" required>
            <label for="uemail"><b>Correo</b></label>
            <input type="email" placeholder="Aquí va el correo electrónico" name="uemail" required>
            <label for="psw"><b>Contraseña</b></label>
            <input type="password" placeholder="Aquí va la contraseña" name="psw" required>
            <label for="psw"><b>Confirma contraseña</b></label>
            <input type="password" placeholder="Aquí va la confirmación de la contraseña" name="psw" required>
            <label for="town"><b>Población</b></label>
            <input type="text" placeholder="Aquí va la población" name="town">
            <label for="adress"><b>Dirección</b></label>
            <input type="text" placeholder="Aquí va la dirección" name="adress" required maxlength="30">
            <label for="postalCode"><b>Código postal</b></label>
            <input type="text" placeholder="Aquí va el código postal" name="postalCode" required minlength="5" maxlength="5">
            <button type="submit">Signin</button>
        </div>
    </form>
</div>

<?php include "footer.php" ?>

<!-- passwordhash -->
