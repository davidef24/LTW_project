<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
     header("Location: http://localhost:3000/Homepage/homepage.html");
    //header("Location: http://localhost:3000/Users/loren/Desktop/LTW/Homepage/homepage.html");
}
else {
    $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto_LTW 
                user=postgres password=password") 
                or die('Could not connect: ' . pg_last_error());
}
/*
?>
<!DOCTYPE html>
<head>
    <title>Login page</title>
    <meta charset="UTF-8">
    <meta content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./StileMegaMenu.css">
    <link rel="stylesheet" href="../Stili/Colors_link_nav.css">
    <script src="../bootstrap-5.2.3/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../bootstrap-5.2.3/bootstrap-5.2.3/dist/css/bootstrap.min.css"/>
    <script src="../bootstrap-5.2.3/bootstrap-5.2.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Login/modal-signin.css">
    <link rel="stylesheet" href="../Homepage/StileMegaMenu.css">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<html>
    <body class="text-center"> */
        //<?php
            if ($dbconn) {
                $email = $_POST['email'];
                $q1 = "select * from utente where email= $1";
                $result = pg_query_params($dbconn, $q1, array($email));
                if (!($tuple=pg_fetch_array($result, null, PGSQL_ASSOC))) {
                    echo "<script>alert(\"Email o password non valide\");</script>";
                }
                else {
                    $q2 = "select * from utente where email = $1";
                    $result = pg_query_params($dbconn, $q2, array($email));
                    $tuple=pg_fetch_array($result, null, PGSQL_ASSOC);
                    $saved_pwd= $tuple["pwd"];
                    $given_pwd= $_POST['password1'];
                    if (!(password_verify($given_pwd, $saved_pwd))){
                        echo "<script>alert(\"Email o password non valide\");</script>";
                    }
                    else {
                        //welcome.php potrebbe essere una pagina
                        //o lastessa index.php che ci mostra in modo diverso la home del sito con una visione differente rispetto a chi non è registrato
                        $nome = $tuple['nome'];
                        session_start();
                        $_SESSION['nome']= $nome;
                        $_SESSION['timeout']= time();
                        $_SESSION['user-email']= $email;
                        header("Location: http://localhost:3000/Homepage/welcome.php");
                        //header("Location: http://localhost:3000/Users/loren/Desktop/LTW/Homepage/welcome.php");
                    }
                }
            }
        ?>
     <!--   
    </body>
    <script>
        const menu_mobile=document.querySelector(".menu-mobile");
        const nav_links=document.querySelector(".nav-linkspers");
        menu_mobile.addEventListener('click',()=>{nav_links.classList.toggle('mobile-menu')}); 
    </script>
</html> -->