<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
    <head>
    <title>Prova</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./StileMegaMenu.css">
    <link rel="stylesheet" href="../Stili/Colors_link_nav.css">
    <script src="../bootstrap-5.2.3/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../bootstrap-5.2.3/bootstrap-5.2.3/dist/css/bootstrap.min.css"/>
    <script src="../bootstrap-5.2.3/bootstrap-5.2.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Login/modal-signin.css">
    <link rel="stylesheet" href="../Homepage/StileMegaMenu.css">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../Stili/Animation.css">
    <script  src="../Stili/animation.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    </head>
    <style>
        .alert{
            position: relative;
            padding: 1rem;
            margin-bottom: 1rem;
            border: 0 solid transparent;
            background-color: red;
            color: white;
            display: none;
        }
    </style>
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

            $("#logOut").mouseenter(function(){
                $(this).removeClass("bg-body");
                $(this).addClass("bg-danger");                
            });

            $("#logOut").mouseleave(function(){
                $(this).removeClass("bg-danger");
                $(this).addClass("bg-body");                
            });

            $("#form-login").on("submit", function(event){
                event.preventDefault();
                var email = $('#email').val();
                var password = $('#pwd').val();
                $.ajax({
                  type: "POST",
                  url: "../Login/login.php",
                  data: { email: email, password1: password },
                  success: function(response) {
                    console.log(response);
                    if (response == "success") {
                      window.location.href = "http://localhost:3000/Homepage/welcome.php";
                    } else if(response == "unregistered") {
                      $('#avviso').show();
                      $('#avviso').text("Non esiste un utente registrato con questa email, registrati cliccando su \"Crea un nuovo Account\".");
                    }
                    else{
                      $('#avviso').show();
                      $('#avviso').text("Email o password non validi, riprova.");
                    }
                  }
                });
            });
        });
    </script>
    <script>
        var menu = document.getElementsByClassName("megamenu");
        for(var i=menu.childNodes.length-1;i>=0;i--){
            if(menu.childNodes[i].style.visibility =="hidden")
            {
                menu.removeChild(menu.childNodes[i]);
            }else
            {
                document.body.appendChild(menu.childNodes[i]);
            }
        }
    </script>
    <body>
        <script>
            AOS.init();
        </script>
    <nav class="navbarpers">
        <a  class="nodecoration logo" href="../Homepage/welcome.php"><img src="../Altro/LogoMakr-3hmd64.png" height="95" width="115" style="margin-left: 35px;"></a>
        <div class="nav-linkspers">
        <ul>
        <li class="drop_menu">
            <a class="nodecoration underline" href="#"><div class="change-color">
            <img src="../Icone/Image/iconizer-globe-central-south-asia.svg" alt="direct-flight" width="28" height="28" class="d-inline-block align-text-center">
            Destinazioni</div></a>
           <div class="megamenu">
                <ul class="content">
                    <li class="megamenu_item header_megamenu">
                        <h4>Località disponibili:</h4>
                    </li>
                    <li class="megamenu_item">
                        <div class="megamenu_link">
                            <div class="gallery">
                            <figure class="gallery-element-1">
                                    <a href="../Destinazioni/barcellona.php"><img src="../Località/menopesanti/Barcellona.jpg" class="gallery_image" alt="Barcellona"></a>
                                    <h4 class="text">Barcellona</h4>    
                                </figure>
                                <figure class="gallery-element-2">
                                    <a href="../Destinazioni/Palma di Maiorca.php"><img src="../Località/maiorca.jpg" alt="Costa Smeralda" class="gallery_image"></a>
                                    <h4 class="text">Palma di Maiorca</h4> 
                                  </figure>
                                <figure class="gallery-element-3">
                                    <a href="../Destinazioni/creta.php"><img src="../Località/Creta.jpeg" alt="Creta" class="gallery_image"></a>
                                    <h4 class="text">Creta</h4>
                                </figure>
                                <figure  class="gallery-element-4" >
                                    <a href="../Destinazioni/parigi.php"><img src="../Località/Parigi.jpg" alt="Francia" class="gallery_image"></a>
                                    <h4 class="text">Parigi</h4> 
                                </figure>
                                <figure  class="gallery-element-5">
                                    <a href="../Destinazioni/tokyo.php"><img src="../Località/menopesanti/Tokyo.jpg" alt="Tokyo" class="gallery_image"></a>
                                    <h4 class="text">Tokyo</h4>     
                                </figure>
                                <figure  class="gallery-element-6">
                                    <a href="../Destinazioni/roma.php"><img src="../Località/menopesanti/Roma.webp" alt="Roma" class="gallery_image"></a>
                                    <h4 class="text">Roma</h4>    
                                </figure>
                                <figure  class="gallery-element-7">
                                    <a href="../Destinazioni/New York.php"><img src="../Località/menopesanti/New-York Notte.jpeg" alt="New York" class="gallery_image"></a>
                                    <h4 class="text">New  York</h4>    
                                </figure>
                                <figure class="gallery-element-8" >
                                    <a href="../Destinazioni/madrid.php"><img src="../Località/madrid-2.jpg" alt="Ibiza" class="gallery_image"></a>
                                    <h4 class="text">Madrid</h4>    
                                </figure>
                                <figure  class="gallery-element-9">
                                    <a href="../Destinazioni/mykonos.php"><img src="../Località/Mykonos.jpg" alt="Mykonos" class="gallery_image"></a>
                                    <h4 class="text">Mykonos</h4>  
                                </figure>
                                <figure  class="gallery-element-10">
                                    <a href="../Destinazioni/berlino.php"><img src="../Altro/cropped_imgs/reichstag.jpeg" alt="Dolomiti" class="gallery_image"></a>
                                    <h4 class="text">Berlino</h4></a>
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
                <a class=\"nodecoration underline\" href=\"../Utenti/utenti.php\">
                    <img src=\"../Icone/Image/iconizer-13869315071620553079.svg\" alt=\"tourist\" width=\"28\" height=\"28\" class=\"d-inline-block align-text-center\">
                    Utenti</a>
                </li>";
            }
        ?>
        <li>
        <a  class="nodecoration underline" href="../Assistenza/assistenza.html">
            <img src="../Icone/Image/iconizer-9685629051582823580.svg" alt="support" width="28" height="28" class="d-inline-block align-text-center">
            Assistenza</a>
        </li>
        <li>
        <a class="nodecoration underline" href="../Riconoscimenti/riconoscimenti.html">
            <img src="../Icone/Image/iconizer-514948881625157164.svg" alt="support" width="28" height="28" class="d-inline-block align-text-center">
            Riconoscimenti</a>
        </li>
        <?php
            if(!isset($_SESSION['nome'])){
                echo "<li>
                            <a id=\"link-disabled\" role=\"link\" aria-disabled=\"true\"><button type=\"button\" id=\"b123\" data-bs-toggle=\"modal\" data-bs-target=\"#logPage\" class=\"btn bg-body d-inline-block align-text-center\" style=\"margin-top: 20%;\">Accedi</button></a> 
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
    <?php
        if(!isset($_SESSION['nome'])){
            echo "<!-- Modal -->
            <div class=\"modal fade\" id=\"logPage\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Inserisci le tue credenziali</h5>
                  </div>
                  <div class=\"modal-body\">
                  <div role=\"alert\" class=\"alert\" id=\"avviso\">Errore madornale</div>
                      <form method=\"post\" id=\"form-login\" action=\"\" name=\"registrazione\" class=\"form-signin m-auto\" onsubmit=\"return check_lr();\">
                          <input placeholder=\"Email\" type=\"text\" id=\"email\" name=\"email\" maxlength=\"40\" class=\"form-control\" required>
                          <input placeholder=\"Password\" id=\"pwd\" type=\"password\" name=\"password1\" maxlength=\"40\" class=\"form-control\" required>
                          <i class=\"far fa-eye\"></i>
                          <input type=\"submit\" value=\"Accedi\" id=\"accedi-btn\" class=\"btn btn-primary\" >     
                      </form>
                      
                  </div>
                  <div class=\"modal-footer\">
                      <h5 class=\"modal-title\">Non sei registrato?</h5>
                      <a href=\"../Registrazione/registrazione.html\"><button class=\"btn btn-success\" form=\"\">Crea un nuovo account</button></a>
                  </div>
                </div>
              </div>
            </div>";
        }
    ?>
</body>
    <script>
        const menu_mobile=document.querySelector(".menu-mobile");
        const nav_links=document.querySelector(".nav-linkspers");
        menu_mobile.addEventListener('click',()=>{nav_links.classList.toggle('mobile-menu')}); 
    </script>
</html>