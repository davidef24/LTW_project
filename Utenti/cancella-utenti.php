<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=Progetto_LTW 
    user=postgres password=password") 
    or die('Could not connect: ' . pg_last_error());
?>

<?php
    if ($dbconn){
        $query_delete=$_GET['query_delete'];
        $delete=pg_query($dbconn, $query_delete);
    }
?>