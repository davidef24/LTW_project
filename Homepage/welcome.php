<?php
     session_start();
     if(!isset($_SESSION['nome'])){
        //header("Location: http://localhost:3000/Homepage/homepage.html");
        header("Location: http://localhost:3000/Users/loren/Desktop/LTW/Homepage/homepage.html");
     }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
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
    <title>Flight-Mates</title>
    <script>
        $(function(){
            $("#footer-placeholder").load("../Footer.html");
        });

        $(function(){
            $("#img-placeholder").load("../Carousel/v2.html");
        });
        $(function(){
            $("#nav-placeholder").load("../Navbar/nav.php");
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#logOut").mouseenter(function(){
                $(this).removeClass("bg-body");
                $(this).addClass("bg-danger");                
            });

            $("#logOut").mouseleave(function(){
                $(this).removeClass("bg-danger");
                $(this).addClass("bg-body");                
            });

        });
    </script>
    <script>
        $(function(){
            var città=["Barcellona", "Parigi", "Berlino", "Tokyo", "New York", "Mykonos", "Roma", "Palma di Maiorca", "Creta", "Madrid"];
            $("#dove-andare").autocomplete({
                source: città,
                select: function(event, ui){
                    var url= ui.item.value + ".php";
                    event.preventDefault();
                    window.location.href="../Destinazioni/"+ url;
                },
                open: function(event, ui) {
                    $(".ui-autocomplete").hide();
                    $(".ui-autocomplete").fadeIn(280);
                }
            });
       });
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
        .ui-autocomplete {
          background-color: #fff;
          /*border: 1px solid #ccc;*/
          padding: 5px;
          list-style: none;
          max-height: 200px;
          overflow-y: auto;
          font-family: 'Montserrat', sans-serif;
          border-radius: 10px;
          /*box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);*/
        }

        .ui-menu-item {
          padding: 5px;
          font-size: 20px;
          font-weight: 700;
        }
    </style>
</head>
<body>
<div id="nav-placeholder"></div>
<div class="img-container">
    <img src="../Altro/tutti insieme.png" id="img-1">
    <form method="post" action="" name="shortcut" class="align-items-center form-dove-andare">
        <div class="col-12">
            <div class="input-group mb-3">
                <input type="text" id="dove-andare" class="form-control-lg rounded-pill" placeholder="Dove vuoi andare?" style="width: 1000px; display: flex; border: rgb(252, 252, 252);">
            </div>
        </div>
        <h1 id="img-text">Bentornato <?php echo $_SESSION['nome']?>, pronto per una nuova avventura?</h1>
    </form>
</div>

<div class="cnt" style="background-color: rgba(233, 236, 239, 1); overflow: hidden;" id="div-header">
    <h1 style="text-align: center; color: rgb(255, 157, 0); font-weight: 900;" id="div-header">Le nostre mete più popolari</h1> <br>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-4 col-sm-12 mb-4 mb-lg-0"> 
            <div style="position: relative;">
                <a href="../Destinazioni/tokyo.php"><img id="crpd-img" src="../Altro/cropped_imgs/tokyo-good.jpg"  class="w-100 h-100 shadow-1-strong rounded-4 mb-4">
                <h3 id="crpd-txt" class="carousel-caption" >TOKYO</h3></a>
            </div>
            <div style="position: relative;">
            <a href="../Destinazioni/Palma di Maiorca.php"><img id="crpd-img" src="../Altro/cropped_imgs/maiorca.jpg" class="w-100 h-100 shadow-1-strong rounded-4 mb-4">
                <h3 id="crpd-txt" class="carousel-caption">PALMA DI MAIORCA</h3></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 mb-4 mb-lg-0">
            <div style="position: relative;">
                <a href="../Destinazioni/parigi.php"><img id="crpd-img" src="../Altro/cropped_imgs/parigi.jpg" class="w-100 h-100 shadow-1-strong rounded-4 mb-4">
                <h3 id="crpd-txt" class="carousel-caption">PARIGI</h3></a>
            </div>
            <div style="position: relative;">
                <a href="../Destinazioni/madrid.php"><img id="crpd-img" src="../Altro/cropped_imgs/madrid-good.jpg" class="w-100 h-100 shadow-1-strong rounded-4 mb-4">
                <h3 id="crpd-txt" class="carousel-caption">MADRID</h3></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 mb-4 mb-lg-0">
            <div style="position: relative;"> 
            <a href="../Destinazioni/New York.php"><img id="crpd-img" src="../Altro/cropped_imgs/ny.jpg" class="w-100 h-100 shadow-1-strong rounded-4 mb-4">
                <h3 id="crpd-txt" class="carousel-caption">NEW YORK</h3></a>
            </div>
            <div style="position: relative;">
                <a href="../Destinazioni/berlino.php"><img id="crpd-img" src="../Altro/cropped_imgs/reichstag.jpeg" class="w-100 h-100 shadow-1-strong rounded-4 mb-4">
                <h3 id="crpd-txt" class="carousel-caption">BERLINO</h3></a>
            </div>
        </div>
    </div>
    
</div>
<h1 id="div-header">Come funziona la nostra app?</h1>
<div style="overflow: hidden;">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-12 mb-4">
        <img src="../Altro/registrazione-img.png" class="w-100">
        </div>
        <div class="col-lg-4 col-sm-12 mb-4" style="position: relative;">
            <h1 id="par-header">1-Registra un account</h1>
            <p id="par-description">
            Dopo esserti registrato potrai compilare i form per inviare una proposta di viaggio.
            </p>
        </div>
    </div>
    <div class="row justify-content-center pt-5" style="background-color: rgba(233, 236, 239, 1);">
        <div class="col-lg-4 col-sm-12 mb-4" style="position: relative;">
            <h1 id="par-header">2-Scegli la meta, il periodo e l'età desiderata dei tuoi compagni di viaggio</h1>
            <p id="par-description">
            Esplorando le varie destinazioni, compila il form di richiesta che appare sulla destra della descrizione
            </p>
        </div>
        <div class="col-lg-4 col-sm-12 mb-4">
            <img src="https://meetravel.it/wp-content/uploads/brizy/imgs/sam-manns-V5Owjg-ZNto-unsplash-scaled-616x416x31x0x555x416x1643051663.jpg" class="w-100">
        </div>
    </div>
    <div class="row justify-content-center pt-5">
        <div class="col-lg-4 col-sm-12 mb-4">
            <img src="https://meetravel.it/wp-content/uploads/brizy/imgs/leio-mclaren-jEgQpfkHEWY-unsplash-1-scaled-555x694x0x139x555x416x1643050549.jpg" class="w-100">
        </div>
        <div class="col-lg-4 col-sm-12 mb-4" style="position: relative;">
            <h1 id="par-header">3-Controlla la pagina Utenti</h1>
            <p id="par-description">
            Non appena verrà trovato un utente che abbia fatto una richiesta con i tuoi stessi parametri, cliccando sul bottone accanto alla riga relativa alla richiesta ti verranno mostrati i contatti dell'utente
            </p>
        </div>
    </div>
    <div class="row justify-content-center pt-5" style="background-color: rgba(233, 236, 239, 1);">
        <div class="col-lg-4 col-sm-12 mb-4" style="position: relative;">
            <h1 id="par-header">4-Parti e vivi un'esperienza unica</h1>
            <p id="par-description">
                Che sia una semplice uscita, un’avventura o un Viaggione Proponilo in App, troverai sempre qualcuno con cui parlarne e pronto a partire con te
                E se non hai le idee chiare? Aggregati ad un viaggio in partenza! Ci sono centinaia di proposte in app… e crescono ogni giorno!
            </p>
        </div>
        <div class="col-lg-4 col-sm-12 mb-4">
            <img src="https://meetravel.it/wp-content/uploads/brizy/imgs/leio-mclaren-jEgQpfkHEWY-unsplash-1-scaled-555x694x0x139x555x416x1643050549.jpg" class="w-100">
        </div>
    </div>
</div>
<div id="footer-placeholder"></div>
</body>
</html>