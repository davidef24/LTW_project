<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=Progetto_LTW 
    user=postgres password=password") 
    or die('Could not connect: ' . pg_last_error());
?>

<?php
    echo "<table id=\"tabella-richieste\" class=\"table table-hover table-striped flex-column\" style=\"max-width: 100%;\">
    <thead>
    <tr>
        <th scope=\"col\" class=\"data-richiesta data-richiesta-utente\">Data richiesta</th>
        <th scope=\"col\" class=\"email email-utente\">Email utente</th>
        <th scope=\"col\" class=\"telefono telefono-utente\">Telefono utente</th>
    </tr> </thead> <tbody>";
    if ($dbconn){
        $query = $_GET['query'];
        $result=pg_query($dbconn, $query);
        echo "Questi sono gli utenti che hanno selezionato le tue stesse preferenze, contattali! <br>";
        while ($tuple=pg_fetch_array($result, NULL, PGSQL_ASSOC)){
            echo '<tr>
                    <td class="data-richiesta data-richiesta-utente">' . $tuple["datarichiesta"] . '</td>
                    <td class="email email-utente">' . $tuple["email"] . '</td>
                    <td class="telefono telefono-utente">' . $tuple["telefono"] . '</td>';
        }
    }

    echo "
        </tbody>
</table>";
?>