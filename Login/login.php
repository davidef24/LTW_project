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

            if ($dbconn) {
                $email = $_POST['email'];
                $q1 = "select * from utente where email= $1";
                $result = pg_query_params($dbconn, $q1, array($email));
                if (!($tuple=pg_fetch_array($result, null, PGSQL_ASSOC))) {
                    //echo "<script>alert(\"Email o password non valide\");</script>";
                    echo "unregistered";
        
                }
                else {
                    $q2 = "select * from utente where email = $1";
                    $result = pg_query_params($dbconn, $q2, array($email));
                    $tuple=pg_fetch_array($result, null, PGSQL_ASSOC);
                    $saved_pwd= $tuple["pwd"];
                    $given_pwd= $_POST['password1'];
                    if (!(password_verify($given_pwd, $saved_pwd))){
                        echo "incorrect";
                        
                    }
                    else {
                        //welcome.php potrebbe essere una pagina
                        //o lastessa index.php che ci mostra in modo diverso la home del sito con una visione differente rispetto a chi non è registrato
                        $nome = $tuple['nome'];
                        session_start();
                        $_SESSION['nome']= $nome;
                        $_SESSION['timeout']= time();
                        $_SESSION['user-email']= $email;
                        echo "success";
                    }
                }
            }
?>