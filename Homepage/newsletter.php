<?php
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        header("Location: http://localhost:3000/Homepage/welcome.php");
        //header("Location: http://localhost:3000/Users/loren/Desktop/LTW/Homepage/welcome.php");
    }
    $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto_LTW 
                user=postgres password=password") 
                or die('Could not connect: ' . pg_last_error());
?>

<?php
    if ($dbconn){
        $email=$_POST["floatingInput"];
        $q1="select * from newsletter where email = $1";
        $result=pg_query_params($dbconn, $q1, array($email));
        if ($tuple=pg_fetch_array($result, null, PGSQL_ASSOC)) echo "<script>alert(\"L'indirizzo email digitato riceve già le nostre news\");</script>";
        else{
            $q2="insert into newsletter values ($1)";
            $data=pg_query_params($dbconn, $q2, array($email));
            if ($data) echo "<script>alert(\"Grazie per esserti registrato al nostro servizio. Riceverai tutte le notizie all'indirizzo email inserito\");</script>";
        }
    }
?>

<script>
    setTimeout(function() {
        window.location.href="http://localhost:3000/Homepage/welcome.php";
        //window.location.href="http://localhost:3000/Users/loren/Desktop/LTW/Homepage/welcome.php";
    }, 0);
</script>