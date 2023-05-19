<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Palma di Maiorca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.2.3/bootstrap-5.2.3/dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.2.3/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src= "../Jquery/jquery.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../Stili/carousel.css">
    <link rel="stylesheet" href="../Stili/cropped-img.css">
    <link rel="stylesheet" href="../Stili/dest.css">
    <link rel="stylesheet" href="../Stili/Colors_link_nav.css">
    <link rel="stylesheet" href="../Login/modal-signin.css">
    <link rel="stylesheet" href="../Homepage/StileMegaMenu.css">
    <link rel="stylesheet" href="../Stili/Footer.css">
    <script type="text/javascript" src="check.js"></script>
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../Stili/Animation.css">
    <script  src="../Stili/animation.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script>
            $(function(){
                $("#nav-placeholder").load("../Navbar/nav.php");
            });

            $(document).ready(function(){
                document.getElementById("dest-name").value =  document.getElementById("img-caption").innerText;
            });
            $(function(){
                $("#footer-placeholder").load("../Footer/Footer.html");
            });
    </script>
</head>
<body>
    <script>
        AOS.init();
    </script>
    <div id="cnt-griglia" style="overflow: hidden;">
    <div class="row">
         <div id="nav-placeholder"></div>
    </div>
    <div class="row" style="position: relative;">
            <img src="../Località/palma-di-maiorca.jpg" alt="imm" class="img-fluid fadein" id="dest-img" height=300px>
            <h1 id="img-caption" data-aos="fade-up" data-aos-duration="800" data-aos-offset="200">Palma di Maiorca</h1>
        </div>
        <div class="row justify-content-center p-3" data-aos="fade-down" data-aos-offset="80" data-aos-duration="1500" style="background-color: rgba(233, 236, 239, 1);">
            <div class="col-lg-8 col-md-8">           
                <p id="dest-paragraph"><b>Breve descrizione:</b>
                Palma di Maiorca è la città principale dell'isola di Maiorca, la più grande delle Baleari, situata al largo della costa orientale della Spagna. È famosa per la sua architettura moresca, la Cattedrale di Santa Maria e la pittoresca zona del centro storico. La città offre numerose attrazioni turistiche, tra cui musei, gallerie d'arte, parchi, ristoranti e una vivace vita notturna. Palma di Maiorca è anche conosciuta per le sue spiagge di sabbia bianca e acque cristalline, tra cui Cala Major e Playa de Palma. Inoltre, l'isola è un paradiso per gli appassionati di sport acquatici, come il surf, lo snorkeling e la vela, grazie al clima mite e alle condizioni del mare favorevoli. <br>
                    <b>Ideale se cerchi:</b>Mare, relax, divertimento<br>
                    <b>Per quanto tempo: </b>una settimana<br>
                    <b>Il periodo migliore: </b>da marzo a ottobre.
            </div>
                <?php
                    if(!isset($_SESSION['nome'])){
                        echo "<div class=\"col-lg-4 col-md-4 justify-content-center\" id=\"destra-paragr\">
                        <p id=\"form-paragraph-not-logged\" class=\"text-center\" style=\"color: red;\">Per compilare il form e cercare un compagno, devi aver effettuato l'accesso</p>
                        <a id=\"link-disabled\" role=\"link\" aria-disabled=\"true\"><button type=\"button\" id=\"login-button-dest\" data-bs-toggle=\"modal\" data-bs-target=\"#logPage\" class=\"btn bg-primary d-inline-block align-text-center animation_button_loop animation_button_loop--move\">Accedi</button></a>
                    </div>";
                    }
                    else{
                        echo " <div class=\"col-lg-4 col-md-4\"><div id=\"form-cnt\">
                        <p id=\"form-paragraph\" class=\"text-center\">Prenota ora!</p>
                        <form method=\"post\" action=\"richiesta.php\" name=\"destinazione\" onsubmit=\"return check_dest();\" class=\"form-signin m-auto text-center\">
                        <input type=\"text\" name=\"destinazione\" id=\"dest-name\" maxlength=\"20\" class=\"form-control\" readonly>    
                        <select size=1 name=\"fascia_età\" class=\"form-select mb-3\">
                                <option selected value=\"\">Fascia di età</option>
                                <option value=\"18-23\">18-23</option>
                                <option value=\"24-29\">24-29</option>
                                <option value=\"30-44\">30-44</option>
                                <option value=\"45+\">45+</option>
                            </select>
                            <select size=1 name=\"periodo\" class=\"form-select mb-3\">
                                <option selected value=\"\">Periodo</option>
                                <option value=\"estate\">Estate</option>
                                <option value=\"primavera\">Primavera</option>
                                <option value=\"autunno\">Autunno</option>
                                <option value=\"inverno\">Inverno</option>
                            </select>
                            <select size=1 name=\"durata\" class=\"form-select mb-3\">
                                <option selected value=\"\">Durata</option>
                                <option value=\"weekend\">Weekend</option>
                                <option value=\"una-sett\">Una settimana</option>
                                <option value=\"due-sett\">Due settimane</option>
                                <option value=\"un-mese\">Un mese o più</option>
                            </select>
                            <input type=\"submit\" value=\"Invia\" class=\"btn btn-primary m-auto\">
                            <input type=\"reset\" value=\"Reset\" class=\"btn btn-danger m-auto\">
                            
                    </form>
                    </div></div>";
                    }
                ?>
        </div>
    </div>
    <?php
        if(!isset($_SESSION['nome'])){
            echo "<div class=\"modal fade\" id=\"logPage\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
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
          </div>";
        }
    ?>
    <div id="footer-placeholder"></div>
</body>
</html>