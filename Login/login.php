<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: http://localhost:3000/Progetto_LTW/Homepage/homepage.html");
}
else {
    $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto_LTW 
                user=postgres password=Ibr@c@dabra") 
                or die('Could not connect: ' . pg_last_error());
}
?>
<!DOCTYPE html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrazione fatta</title>
        <link rel="stylesheet" href="../Stili/Colors_link_nav.css">
        <link rel="stylesheet" href="../bootstrap-5.2.3/bootstrap-5.2.3/dist/css/bootstrap.min.css">
        <script src="../bootstrap-5.2.3/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../bootstrap-5.2.3/bootstrap-5.2.3/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="signin.css">
        <script src="../bootstrap-5.2.3/bootstrap-5.2.3/dist/js/bootstrap.min.js"></script>
</head>
<html>
    <head></head>
    <body class="text-center">
        <?php
            if ($dbconn) {
                $email = $_POST['email'];
                $q1 = "select * from utente where email= $1";
                $result = pg_query_params($dbconn, $q1, array($email));
                if (!($tuple=pg_fetch_array($result, null, PGSQL_ASSOC))) {
                    echo    "<div class=\"container2\">
                                <h1 class=\"q1\"> 
                                    Non sembra che ti sia registrato/a
                                </h1> 
                                <a href=../Registrazione/registrazione.html>
                                    <button class=\"btn btn-success\">
                                        Clicca qui per farlo    
                                    </button>
                                </a> 
                            </div>";
                }
                else {
                    $q2 = "select * from utente where email = $1";
                    $result = pg_query_params($dbconn, $q2, array($email));
                    $tuple=pg_fetch_array($result, null, PGSQL_ASSOC);
                    $saved_pwd= $tuple["pwd"];
                    $given_pwd= $_POST['password1'];
                    if (!(password_verify($given_pwd, $saved_pwd))){
                        echo "<div class=\"container2\">
                                <h1 class=\"q1\"> 
                                    La password e' sbagliata!
                                </h1> 
                                <a href=../Login/login.html>
                                    <button class=\"btn btn-success\">
                                        Clicca qui per loggarti   
                                    </button>
                                </a> 
                            </div>";
                    }
                    else {
                        //welcome.php potrebbe essere una pagina
                        //o lastessa index.php che ci mostra in modo diverso la home del sito con una visione differente rispetto a chi non è registrato
                        $nome = $tuple['nome'];
                        header("Location: http://localhost:3000/Progetto_LTW/Homepage/welcome.php?nome=$nome");
                    }
                }
            }
        ?>
        <nav class="navbarpers">
        <a  class="nodecoration logo" href="#" class="logo">
            Flight-Mates
        </a>
        <div class="nav-linkspers">
        <ul>
        <li class="activepers">
        <a class="nodecoration"  href="#">
            <img src="../Icone/Image/iconizer-globe-central-south-asia.svg" alt="direct-flight" width="28" height="28" class="d-inline-block align-text-center">
            Destinazioni</a>
        </li>
        <li>
        <a class="nodecoration" href="#">
            <img src="../Icone/Image/iconizer-13869315071620553079.svg" alt="tourist" width="28" height="28" class="d-inline-block align-text-center">
            Utenti in volo</a>
        </li>
        <li>
        <a  class="nodecoration" href="#">
            <img src="../Icone/Image/iconizer-9685629051582823580.svg" alt="support" width="28" height="28" class="d-inline-block align-text-center">
            Assistenza</a>
        </li>
        <li>
        <a class="nodecoration" href="#">
            <img src="../Icone/Image/iconizer-514948881625157164.svg" alt="support" width="28" height="28" class="d-inline-block align-text-center">
            Chi siamo</a>
        </li>
        <li>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Ricerca" aria-label="Ricerca">
                <img src="../Icone/Image/iconizer-search.svg"  type="submit" alt="search" width="28" height="28">
                <div class="login-image">
                    <a href="../Login/login.html">
                        <img src="../Icone/Image/iconizer-person-circle.svg" href="./Login/login.html" alt="person-circle" width="28" height="28">
                    </a>
                </div>
            </form>
        </li>
        </ul>
        </div>
        <img src="../Icone/Image/iconizer-menu-up.svg" class="menu-mobile"> 
        </nav>
    </body>
</html>