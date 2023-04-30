<?php
     session_start();
     if(!isset($_SESSION['nome'])){
        header("Location: http://localhost:3000/Homepage/homepage.html");
     }
?>

<!DOCTYPE html>
<html lang="it">
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
    <title>Flight-Mates</title>
    <script>
        $(function(){
            $("#footer-placeholder").load("../Footer.html");
        });

        $(function(){
            $("#img-placeholder").load("../Carousel/v2.html");
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
            var città=["Barcellona", "Palma di Maiorca", "Madrid", "Berlino", "Tokyo", "New York"];
            $("#dove-andare").autocomplete({
                source: città,
                select: function(event, ui){
                    //var url= ui.item.value + ".html"
                    event.preventDefault();
                    window.location.href="../Homepage/homepage.html";
                }
            });
        });
    </script>
</head>
<body>
<nav class="navbarpers">
        <a  class="nodecoration logo" href="../Homepage/welcome.php"><img src="../Altro/LogoMakr-3hmd64.png" height="95" width="115" style="margin-left: 35px;"></a>
        <div class="nav-linkspers">
        <ul>
        <li class="drop_menu">
            <a class="nodecoration"  href="../Destinazioni/dest.php">
            <img src="../Icone/Image/iconizer-globe-central-south-asia.svg" alt="direct-flight" width="28" height="28" class="d-inline-block align-text-center">
            Destinazioni</a>
           <div class="megamenu">
                <ul class="content">
                    <li class="megamenu_item header_megamenu">
                        <h4>Località Popolari:</h4>
                    </li>
                    <li class="megamenu_item">
                        <div class="megamenu_link">
                            <div class="gallery">
                                <figure class="gallery-element-1">
                                    <a href=""><img src="../Località/lake-braies-in-south-tyrol-in-summer-royalty-free-image-1598602493.jpg" class="gallery_image" alt="Immagine1"> </a>
                                    <h4 class="text">Immagine1</h4>    
                                </figure>
                                <figure class="gallery-element-2">
                                    <a href=""><img src="../Località/cinque-terre-in-liguria-italia.jpg" alt="Immagine1" class="gallery_image"></a>
                                    <h4 class="text">Immagine2</h4> 
                                  </figure>
                                <figure class="gallery-element-3">
                                    <a href=""><img src="../Località/20191114131631Ovindoli.jpg" alt="Immagine1" class="gallery_image"></a>
                                    <h4 class="text">Immagine3</h4> 
                                </figure>
                                <figure  class="gallery-element-4" >
                                    <a href=""><img src="../Località/adf20f3d19afa1f7687c4af9ebb0a328--bella-italia-in-italia.jpg" alt="Immagine1" class="gallery_image"></a>
                                    <h4 class="text">Immagine4</h4> 
                                </figure>
                                <figure  class="gallery-element-5">
                                    <a href=""><img src="../Località/GettyImages-636865894.jpg" alt="Immagine1" class="gallery_image"> </a>
                                    <h4 class="text">Immagine5</h4>     
                                </figure>
                                <figure  class="gallery-element-6">
                                    <a href=""><img src="../Località/seceda.webp" alt="Immagine1" class="gallery_image"> </a>
                                    <h4 class="text">Immagine6</h4>    
                                </figure>
                                <figure  class="gallery-element-7">
                                    <a href=""><img src="../Località/Francia.png" alt="Immagine1" class="gallery_image"></a>
                                    <h4 class="text">Immagine7</h4>    
                                </figure>
                                <figure class="gallery-element-8" >
                                    <a href=""><img src="../Località/Braies-lake-shutterstock-The-Lost-Avocado.jpg" alt="Immagine1" class="gallery_image"> </a>
                                    <h4 class="text">Immagine8</h4>    
                                </figure>
                                <figure  class="gallery-element-9">
                                    <a href=""><img src="../Località/GettyImages-636865894.jpg" alt="Immagine1" class="gallery_image"> </a>
                                    <h4 class="text">Immagine9</h4>  
                                </figure>
                                <figure  class="gallery-element-10">
                                    <a href=""><img src="../Località/57ebc76e2596f0.79662011-299.jpg" alt="Immagine1" class="gallery_image"> </a>
                                    <h4 class="text">Immagine10</h4>  
                                </figure>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li>
        <a class="nodecoration" href="#">
            <img src="../Icone/Image/iconizer-13869315071620553079.svg" alt="tourist" width="28" height="28" class="d-inline-block align-text-center">
            Utenti</a>
        </li>
        <li>
        <a  class="nodecoration" href="../Assistenza/assistenza.html">
            <img src="../Icone/Image/iconizer-9685629051582823580.svg" alt="support" width="28" height="28" class="d-inline-block align-text-center">
            Assistenza</a>
        </li>
        <li>
        <a class="nodecoration" href="#">
            <img src="../Icone/Image/iconizer-514948881625157164.svg" alt="support" width="28" height="28" class="d-inline-block align-text-center">
            Riconoscimenti</a>
        </li>
        <li>
           <a href="logout.php"> <button type="button" id="logOut" class="btn bg-body" style="margin-top: 15px;">Esci</button></a>
        </li>
        </ul>
        </div>
        <img src="../Icone/Image/iconizer-menu-up.svg" class="menu-mobile"> 
    
    </nav>
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
                <img id="crpd-img" src="../Altro/cropped_imgs/tokyo-good.jpg"  class="w-100 h-100 shadow-1-strong rounded-4 mb-4">
                <h3 id="crpd-txt" class="carousel-caption" >TOKYO</h3>
            </div>
            <div style="position: relative;">
                <img id="crpd-img" src="../Altro/cropped_imgs/maiorca.jpg" class="w-100 h-100 shadow-1-strong rounded-4 mb-4">
                <h3 id="crpd-txt" class="carousel-caption">PALMA DI MAIORCA</h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 mb-4 mb-lg-0">
            <div style="position: relative;">
                <img id="crpd-img" src="../Altro/cropped_imgs/parigi.jpg" class="w-100 h-100 shadow-1-strong rounded-4 mb-4">
                <h3 id="crpd-txt" class="carousel-caption">PARIGI</h3>
            </div>
            <div style="position: relative;">
                <img id="crpd-img" src="../Altro/cropped_imgs/madrid-good.jpg" class="w-100 h-100 shadow-1-strong rounded-4 mb-4">
                <h3 id="crpd-txt" class="carousel-caption">MADRID</h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 mb-4 mb-lg-0">
            <div style="position: relative;"> 
                <img id="crpd-img" src="../Altro/cropped_imgs/ny.jpg" class="w-100 h-100 shadow-1-strong rounded-4 mb-4">
                <h3 id="crpd-txt" class="carousel-caption">NEW YORK</h3>
            </div>
            <div style="position: relative;">
                <img id="crpd-img" src="../Altro/cropped_imgs/reichstag.jpeg" class="w-100 h-100 shadow-1-strong rounded-4 mb-4">
                <h3 id="crpd-txt" class="carousel-caption">BERLINO</h3>
            </div>
        </div>
    </div>
    
</div>
<h1 id="div-header">Come funziona la nostra app?</h1>
<div style="overflow: hidden;">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-12 mb-4">
            <img src="https://meetravel.it/wp-content/uploads/brizy/imgs/leio-mclaren-jEgQpfkHEWY-unsplash-1-scaled-555x694x0x139x555x416x1643050549.jpg" class="w-100">
        </div>
        <div class="col-lg-4 col-sm-12 mb-4" style="position: relative;">
            <h1 id="par-header">1-Registra un account</h1>
            <p id="par-description">
                Dopo esserti registrato
            </p>
        </div>
    </div>
    <div class="row justify-content-center pt-5" style="background-color: rgba(233, 236, 239, 1);">
        <div class="col-lg-4 col-sm-12 mb-4" style="position: relative;">
            <h1 id="par-header">2-Scegli la meta, il periodo e l'età desiderata dei tuoi compagni di viaggio</h1>
            <p id="par-description">
                Ricerca tra le nostre mete quella fà più al tuo caso, che sia tra un viaggio di cultura o un'esperienza
                all'insegna del divertimento. 
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
            <h1 id="par-header">3-Aspetta che altre persone si aggiungano al tuo gruppo</h1>
            <p id="par-description">
                Che sia una semplice uscita, un’avventura o un Viaggione Proponilo in App, troverai sempre qualcuno con cui parlarne e pronto a partire con te
                E se non hai le idee chiare? Aggregati ad un viaggio in partenza! Ci sono centinaia di proposte in app… e crescono ogni giorno!
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
<script>
        const menu_mobile=document.querySelector(".menu-mobile");
        const nav_links=document.querySelector(".nav-linkspers");
        menu_mobile.addEventListener('click',()=>{nav_links.classList.toggle('mobile-menu')}); 
</script>
</html>