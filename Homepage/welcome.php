
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Stili/Colors_link_nav.css">
    <link rel="stylesheet" href="../bootstrap-5.2.3/bootstrap-5.2.3/dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.2.3/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Flight-Mates</title>
</head>
<body>
<!--<img src="Image/Image/Logo.png" alt="Imagine1" width="150" height="150" class="d-inline-block align-text-top"> -->
<nav class="navbarpers">
        <?php
            echo "<h1>Ciao, ".$_GET['nome']."</h1>";
        ?>
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
        </ul>
        </div>
        <img src="../Icone/Image/iconizer-menu-up.svg" class="menu-mobile"> 
</nav>
<br>
<br>
<br>
<div id="Nazioni" class="carousel carousel-container carousel slide slide mx-auto" data-bs-ride="carousel" data-bs-interval="3000" style="width:100%">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="../Località/Spagna1.png" class="d-block w-100" alt="Spagna">
            <div class="carousel-caption">
                <h1>Spagna</h1>
                <p>Solare e vitale, la Spagna è uno dei paesi più amati dai turisti, che ne apprezzano la buona cucina, il clima e la simpatia degli abitanti. È il momento di conoscerla più in profondità per scoprire la varietà di attrazioni paesaggistiche e culturali delle regioni che la compongono. Per una settimana di mare, per una fuga romantica, per un city break a tutta cultura… la Spagna è sempre la meta giusta per la vacanza dei sogni! </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../Località/Francia.png" class="d-block w-100" alt="Francia">
            <div class="carousel-caption">
                <h1>Francia</h1>
                <p>Un paese straordinario e affascinante. È il luogo ideale per chi cerca una combinazione perfetta tra arte, cultura, gastronomia e paesaggi mozzafiato. Qui puoi ammirare alcuni dei monumenti più famosi al mondo.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../Località/Germania.png" class="d-block w-100" alt="Germania">
            <div class="carousel-caption">
                <h1>Germania</h1>
                <p>La Germania è un paese ricco di storia, cultura e bellezze naturali. È famosa per la birra ma offre anche molte altre attrazioni. Il paese è anche famoso per i suoi numerosi festival, tra cui l'Oktoberfest a Monaco, il Karneval di Colonia e il Weihnachtsmarkt, il mercatino di Natale, presente in molte città invernali.</p>
            </div>
        </div>
        <div class="carousel-item">
          <img src="../Località/Stati Uniti.png" class="d-block w-100" alt="Stati Uniti">
          <div class="carousel-caption">
            <h1>Stati Uniti</h1>
            <p>Un paese ricco di diversità, con un'enorme varietà di paesaggi, culture e attrazioni. Sono anche noti per la loro vivace scena musicale e cinematografica, che ha influenzato la cultura popolare in tutto il mondo. Inoltre, la popolazione degli Stati Uniti è incredibilmente diversa, con una mescolanza di culture, razze ed etnie che hanno influenzato la società e la cultura americana. Insomma, gli Stati Uniti offrono un'esperienza unica e ricca di possibilità, che vale la pena esplorare e scoprire.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../Località/Giappone.png" class="d-block w-100" alt="Giappone">
          <div class="carousel-caption">
            <h1>Giappone</h1>
            <p>Una nazione affascinante che ha molto da offrire ai visitatori. È una cultura unica, con una storia e una tradizione ricche, e una modernità che si riflette nella sua tecnologia all'avanguardia e nella sua scena artistica. Il Giappone è anche famoso per la sua cucina con piatti che hanno acquisito una grande popolarità in tutto il mondo.</p>
          </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#Nazioni" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#Nazioni" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</body>
<script>
    const menu_mobile=document.querySelector(".menu-mobile");
    const nav_links=document.querySelector(".nav-linkspers");
    menu_mobile.addEventListener('click',()=>{nav_links.classList.toggle('mobile-menu')});   
</script>
</html>