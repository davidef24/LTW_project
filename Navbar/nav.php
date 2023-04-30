<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
    <head>
    <title>Prova</title>
    <meta charset="UTF-8">
    <meta content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./StileMegaMenu.css">
    <link rel="stylesheet" href="../Stili/Colors_link_nav.css">
    <script src="../bootstrap-5.2.3/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../bootstrap-5.2.3/bootstrap-5.2.3/dist/css/bootstrap.min.css"/>
    <script src="../bootstrap-5.2.3/bootstrap-5.2.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Login/modal-signin.css">
    <link rel="stylesheet" href="../Homepage/StileMegaMenu.css">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
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
        });
    </script>
    <script>
        function myFunction(x) {
            if (x.matches) { // If media query matches
                document.getElementById("link-disabled").setAttribute("href", "../Login/login.html");
            } else {
                document.getElementById("link-disabled").removeAttribute("href");
            }
        }
        var x = window.matchMedia("(max-width: 950px)")
        myFunction(x)
        x.addListener(myFunction) 
    </script>
    <body>
    <nav class="navbarpers">
        <a  class="nodecoration logo" href="../Homepage/welcome.php"><img src="../Altro/LogoMakr-3hmd64.png" height="95" width="115" style="margin-left: 35px;"></a>
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
                                    <a href="../Destinazioni/dest.php"><img src="../Località/lake-braies-in-south-tyrol-in-summer-royalty-free-image-1598602493.jpg" class="gallery_image" alt="Immagine1"> </a>
                                    <h4 class="text">BARCELLONA</h4>    
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
        <?php
            if(isset($_SESSION['nome'])){
                echo "<li>
                <a class=\"nodecoration\" href=\"#\">
                    <img src=\"../Icone/Image/iconizer-13869315071620553079.svg\" alt=\"tourist\" width=\"28\" height=\"28\" class=\"d-inline-block align-text-center\">
                    Utenti</a>
                </li>";
            }
        ?>
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
        <?php
            if(!isset($_SESSION['nome'])){
                echo "<li>
                    <a id=\"link-disabled\" role=\"link\" aria-disabled=\"true\"><button type=\"button\" id=\"b123\" data-bs-toggle=\"modal\" data-bs-target=\"#logPage\" class=\"btn bg-body d-inline-block align-text-center\" style=\"margin-top: 20%;\">Accedi</button></a>
                   <!-- Modal -->
                   <div class=\"modal fade\" id=\"logPage\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                     <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                       <div class=\"modal-content\">
                         <div class=\"modal-header\">
                           <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Inserisci le tue credenziali</h5>
                         </div>
                         <div class=\"modal-body\">
                             <form method=\"post\" action=\"../Login/login.php\" name=\"registrazione\" class=\"form-signin m-auto\" onsubmit=\"return check_lr();\">
                                 <input placeholder=\"Email\" type=\"text\" name=\"email\" maxlength=\"40\" class=\"form-control\" required autofocus>
                                 <input placeholder=\"Password\" type=\"password\" name=\"password1\" maxlength=\"40\" class=\"form-control\" required>
                                 <i class=\"far fa-eye\"></i>
                                 <input type=\"submit\" value=\"Accedi\" class=\"btn btn-primary\" >     
                             </form>
                         </div>
                         <div class=\"modal-footer\">
                             <h5 class=\"modal-title\">Non sei registrato?</h5>
                             <a href=\"../Registrazione/registrazione.html\"><button class=\"btn btn-success\" form=\"\">Crea un nuovo account</button></a>
                         </div>
                       </div>
                     </div>
                   </div>
             </li>";
            }
            else  echo "<li>
                            <a href=\"../Homepage/logout.php\"> <button type=\"button\" id=\"logOut\" class=\"btn bg-body\" style=\"margin-top: 15px;\">Esci</button></a>
                        </li>";
        ?>
        </ul>
        </div>
        <img src="../Icone/Image/iconizer-menu-up.svg" class="menu-mobile"> 
    </nav>
</body>
    <script>
        const menu_mobile=document.querySelector(".menu-mobile");
        const nav_links=document.querySelector(".nav-linkspers");
        menu_mobile.addEventListener('click',()=>{nav_links.classList.toggle('mobile-menu')}); 
    </script>
</html>