<?php
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        //header("Location: http://localhost:3000/Homepage/homepage.html");
        header("Location: http://localhost:3000/Users/loren/Desktop/LTW/Homepage/homepage.html");
    }
    else {
        $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto_LTW 
                    user=postgres password=password") 
                    or die('Could not connect: ' . pg_last_error());
    }
    if ($dbconn) {
            //qui usiamo la stessa connessione per lanciare la nostra query
            //rifacciamo i controlli anche lato server
            session_start();
            $fasciaetà = $_POST['fascia_età'];
            $periodo = $_POST['periodo'];
            $durata = $_POST['durata'];
            $destinazione = $_POST['destinazione'];
            $email = $_SESSION['user-email'];
            $data= date("d-m-Y");
            //query per ottenere id_richiesta come numero progressivo
            $q1="select id_richiesta from richiesta order by richiesta desc limit 1"; //$1 è un placeholder
            $result= pg_query($dbconn, $q1);
            if ($tuple=pg_fetch_array($result, null, PGSQL_ASSOC)){
                $id_richiesta= $tuple['id_richiesta'] + 1;
            }
            else{
                $id_richiesta = 0;
            }
                
            $q2 = "insert into richiesta values ($1,$2,$3,$4,$5,$6, $7)";
            $data = pg_query_params($dbconn, $q2,
                array($id_richiesta, $email, $destinazione, $periodo, $fasciaetà, $data, $durata));
            if ($data) {
                //header("Location: http://localhost:3000/Utenti/utenti.php");
                header("Location: http://localhost:3000/Users/loren/Desktop/LTW/Utenti/utenti.php");
            }
            else {
                echo "Richiesta non andata a buon fine";
            }
            
        }
?>
