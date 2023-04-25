
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
    <link rel="stylesheet" href="../Stili/Footer.css">
    <link rel="stylesheet" href="../Homepage/StileMegaMenu.css">
    <script src= "../Jquery/jquery.js"></script>
    <title>Flight-Mates</title>
    <script>
        $(function(){
            $("#footer-placeholder").load("../Footer.html");
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
</head>
<body>
<!--<img src="Image/Image/Logo.png" alt="Imagine1" width="150" height="150" class="d-inline-block align-text-top"> -->
<nav class="navbarpers">
        <?php
            echo "<h1>Ciao, ".$_GET['nome']."</h1>";
        ?>
        <div class="nav-linkspers">
        <ul>
        <li class="drop_menu">
            <a class="nodecoration"  href="#">
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
        <li>
            <button type="button" id="logOut" class="btn bg-body" style="margin-top: 15px;">Esci</button>
        </li>
        </ul>
        </div>
        <img src="../Icone/Image/iconizer-menu-up.svg" class="menu-mobile"> 
    
</nav>
<br>
<br>
<br>
<img src="../Località/Giappone.png" height="1000" width="1519">
<div id="footer-placeholder">
</div>
</body>
<script>
    const menu_mobile=document.querySelector(".menu-mobile");
    const nav_links=document.querySelector(".nav-linkspers");
    menu_mobile.addEventListener('click',()=>{nav_links.classList.toggle('mobile-menu')});   
</script>
</html>