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
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrazione fatta</title>
        <link rel="stylesheet" href="../Stili/Colors_link_nav.css">
        <link rel="stylesheet" href="../bootstrap-5.2.3/bootstrap-5.2.3/dist/css/bootstrap.min.css">
        <script src="../bootstrap-5.2.3/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../bootstrap-5.2.3/bootstrap-5.2.3/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="signup.css">
        <script src="../bootstrap-5.2.3/bootstrap-5.2.3/dist/js/bootstrap.min.js"></script>
    </head>
    <body class="text-center">
        <?php
            if ($dbconn) {
                $email = $_POST['email'];
                $q1="select * from utente where email=$1"; //$1 è un placeholder
                $result=pg_query_params($dbconn, $q1, array($email)); //sostituisce a $1 il valore che riceve in input dall'utente
                if ($tuple=pg_fetch_array($result, null, PGSQL_ASSOC)) {
                        echo "<div class=\"container2\">
                                <h1 class=\"q1\"> 
                                    Spiacente, l'indirizzo email non e' disponibile, se vuoi
                                </h1> 
                                <a href=../Login/login.html>
                                    <button class=\"btn btn-success\">
                                        Clicca qui per loggarti
                                    </button>
                                </a> 
                            </div>";
                }
                else {
                    //qui usiamo la stessa connessione per lanciare la nostra query
                    //rifacciamo i controlli anche lato server
                    $nome = $_POST['nome'];
                    $cognome = $_POST['cognome'];
                    $nascita = $_POST['nascita'];
                    $password = password_hash($_POST['password1'], PASSWORD_DEFAULT);
                    $q2 = "insert into utente values ($1,$2,$3,$4,$5)";
                    $data = pg_query_params($dbconn, $q2,
                        array($email, $nome, $cognome, $password, $nascita));
                    if ($data) {
                        echo "
                        <div class=\"container2\"><h1 class=\"q1\"> 
                            Registrazione completata. Puoi iniziare a usare il sito <br/></h1>
                            <a href=../login/index.html> 
                                <button class=\"btn btn-success\">
                                    Clicca qui per loggarti!
                                </button>
                            </a>
                        </div>";
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