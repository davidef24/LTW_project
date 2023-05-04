<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=Progetto_LTW 
    user=postgres password=password") 
    or die('Could not connect: ' . pg_last_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.2.3/bootstrap-5.2.3/dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.2.3/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src= "../Jquery/jquery.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../Stili/carousel.css">
    <link rel="stylesheet" href="../Stili/cropped-img.css">
    <link rel="stylesheet" href="../Stili/Footer.css">
    <link rel="stylesheet" href="../Login/modal-signin.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../Stili/Colors_link_nav.css">
    <link rel="stylesheet" href="./StileMegaMenu.css">
    <link rel="stylesheet" href="./utenti.css">
    <title>Utenti</title>
    <script>
        $(function(){
            $("#nav-placeholder").load("../Navbar/nav.php");
        });

        $(function(){
            $("#footer-placeholder").load("../Footer.html");
        });

        $(function(){
            $("#img-placeholder").load("../Carousel/v2.html");
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#b123").mouseenter(function(){
                $(this).removeClass("bg-body");
                $(this).addClass("bg-success");                
            });

            $("#b123").mouseleave(function(){
                $(this).removeClass("bg-success");
                $(this).addClass("bg-body");                
            });

            $(".green-circle").click(function(){
                var query= "select u.telefono, u.email, r2.datarichiesta from richiesta r1, richiesta r2, utente u where r1.id_richiesta =" + $(this).attr('id') + " and r1.email != r2.email and r1.destinazione = r2.destinazione and r1.etàcompagni = r2.etàcompagni and r1.periodo = r2.periodo and r1.durata = r2.durata and r2.email = u.email";
                var httpRequest = new XMLHttpRequest();
                httpRequest.open("GET", "mostra-utenti.php?query=" + query, true);
                httpRequest.onload = function() {
                    if (httpRequest.status === 200) {
                    // Aggiorna il contenuto del div con i risultati della query
                        document.getElementById('zona-dinamica').innerHTML = httpRequest.responseText;
                    }
                };
                httpRequest.send();
            });

        });
    </script>
</head>
<body>
    <div id="nav-placeholder" style="position: relative;" class="row-cols-1"></div>
    <div class="container-legenda">
        <p class="p-2">Legenda:</p>
        <div class="legenda">
            <div><input type="button disabled" class="yellow-circle"></div>
            <p>Sei l'unico</p>
            <div><input type="button disabled" class="green-circle"></div>
            <p>Sono stati trovati compagni che hanno inserito i tuoi stessi parametri</p>
        </div>
    </div>
    <h1 style="font-family:'Archivo Black', sans-serif;">Storico richieste</h1>
    <table id="tabella-richieste" class="table table-hover table-striped flex-column" style="max-width: 100%;">
        <thead>
            <tr>
                <th scope="col" class="id">ID</th>
                <th scope="col" class="data-richiesta">Data richiesta</th>
                <th scope="col" class="destinazione">Destinazione</th>
                <th scope="col" class="durata">Durata</th>
                <th scope="col" class="periodo">Periodo</th>
                <th scope="col" class="età">Età compagni</th>
                <th scope="col" class="status">Stato</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($dbconn){
                    session_start();
                    $email=$_SESSION["user-email"];
                    $q1="select * from richiesta where email = $1 order by datarichiesta";
                    $result=pg_query_params($dbconn, $q1, array($email));
                    while ($tuple=pg_fetch_array($result, NULL, PGSQL_ASSOC)){
                        echo '<tr>
                                <td class="id">' . $tuple["id_richiesta"] . '</td>
                                <td class="data-richiesta">' . $tuple["datarichiesta"] . '</td>
                                <td class="destinazione">' . $tuple["destinazione"] . '</td>
                                <td class="durata">' . $tuple["durata"] . '</td>
                                <td class="periodo">' . $tuple["periodo"] . '</td>
                                <td class="età">' . $tuple["etàcompagni"] . '</td>';
                        $q2="select * 
                        from richiesta r1 join richiesta r2 on r1.email != r2.email
                        where r1.destinazione = r2.destinazione  and r1.periodo = r2.periodo 
                        and r1.etàcompagni = r2.etàcompagni and r1.email = $1 and r1.destinazione = $2 
                        and r1.periodo = $3 and r1.etàcompagni = $4";
                        $search=pg_query_params($dbconn, $q2, array($email, $tuple["destinazione"], $tuple["periodo"], $tuple["etàcompagni"]));
                        if ($match=pg_fetch_array($search, NULL, PGSQL_ASSOC)){
                            echo '<td class="status"><div>
                                        <input type="button" class="green-circle" id="'.$tuple["id_richiesta"].'">
                                    </div></td>';
                        }
                        else {
                            echo '<td class="status"><div>
                                        <input type="button disabled" class="yellow-circle">
                                    </div></td>';
                        }
                    }
                }
            ?>
        </tbody>
    </table>
    <hr/>
    <div id="zona-dinamica">
        <!---->
    </div>
</body>
</html>