<?php

if(isset($_POST) && !empty($_POST)){
    $ini = parse_ini_file('App/Connexion.ini');
    $user = $_POST['user'];
    $pwd = $_POST['password'];

    if($user == $ini['admin_user'] && $pwd == $ini['admin_pass']){
        echo "<h3>Vous êtes bien connecté en tant qu'administrateur.</h3>";
    }else{
        echo "<h3>Mauvais identifiants !</h3><br>";
        echo "<a href='admin.php'>Réessayer</a>";
    }
}else{
    ?>
    <form action="#" method="post">
        <input type="text" name="user" placeholder="USER" required>
        <input type="password" name="password" placeholder="PASSWORD" required>
        <button type="submit">Se connecter</button>
    </form>
    <?php
}