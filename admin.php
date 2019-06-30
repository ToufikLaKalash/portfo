<?php
require 'App/Form.php';
require 'App/DB.php';

$db = DB::getDB();

if(isset($_POST) && !empty($_POST)){
    $ini = parse_ini_file('App/Connexion.ini');
    $user = $_POST['user'];
    $pwd = $_POST['password'];

    if($user == $ini['admin_user'] && $pwd == $ini['admin_pass']){
        echo "<h3>Vous êtes bien connecté en tant qu'administrateur.</h3>";
        echo "<a href='index.php'>Revenir à l'accueil</a></h3>";

        // AJOUTER UN PROJET
        echo "<h4>Ajouter un projet</h4>";
        $addProjet = new Form();
        echo '<form action="App/add.php" method="post">';
        echo $addProjet->input('nomProjet', 'Le nom du projet');
        echo '<br>';
        echo $addProjet->input('dateProjet', 'La date du projet');
        echo '<br>';
        echo $addProjet->textarea('texteProjet', '5', '33', 'Le texte du projet');
        echo '<br>';
        echo $addProjet->submit('Créer le projet');
        echo '</form>';

        //AJOUTER UNE EXPERIENCE
        echo "<h4>Ajouter une expérience</h4>";
        $addExp = new Form();
        echo '<form action="App/add.php" method="post">';
        echo $addProjet->input('nomXP', 'Le nom de l\'expérience');
        echo '<br>';
        echo $addProjet->input('dateXP', 'La date du projet');
        echo '<br>';
        echo $addProjet->textarea('texteXP', '5', '33', 'Le texte de l\'expérience');
        echo '<br>';
        echo $addProjet->submit('Créer l\'expérience');
        echo '</form>';

        //MESSAGERIE
        echo "<h4>Messagerie</h4>";
        $rqt = $db->query("SELECT COUNT(*) AS nbMsg FROM messages;");
        $nb = $rqt->fetch();
        echo "<p>Vous avez {$nb['nbMsg']} messages :</p>";
        $rqt = $db->query("SELECT * FROM messages;");
        $msg = $rqt->fetchAll();
        foreach ($msg as $message){
            echo "<div class='messages' style='border: 1px solid black; margin-bottom: 15px;'>";
            echo "<p>Message de <strong>{$message['nom']}</strong></p>";
            echo "<p>Le <strong>{$message['date']}</strong></p>";
            echo "<p>Email: <strong>{$message['email']}</strong></p>";
            echo "<p>Message: {$message['message']}</p>";
            echo "</div>";
        }
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