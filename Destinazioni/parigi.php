<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
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
    <link rel="stylesheet" href="../Stili/dest.css">
    <link rel="stylesheet" href="../Stili/Colors_link_nav.css">
    <link rel="stylesheet" href="../Login/modal-signin.css">
    <link rel="stylesheet" href="../Homepage/StileMegaMenu.css">
    <script type="text/javascript" src="check.js"></script>
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
            $(function(){
                $("#nav-placeholder").load("../Navbar/nav.php");
            });

            $(document).ready(function(){
                document.getElementById("dest-name").value =  document.getElementById("img-caption").innerText;
            })
    </script>
</head>
<body>
    <div id="cnt-griglia" style="overflow: hidden;">
    <div class="row">
         <div id="nav-placeholder"></div>
    </div>
    <div class="row" style="position: relative;">
            <img src="../Località/louvre.jpg" alt="imm" class="img-fluid" id="dest-img">
            <h1 id="img-caption">Parigi</h1>
        </div>
        <div class="row justify-content-center p-3" style="background-color: rgba(233, 236, 239, 1);">
            <div class="col-lg-8 col-md-8">           
                <p id="dest-paragraph" style="padding:7%"><b>Breve descrizione:</b> 
                Parigi è una delle città più visitate al mondo, grazie alla sua bellezza, cultura e storia. Situata al centro della Francia, sulla riva sinistra della Senna, offre una vasta gamma di attrazioni turistiche, tra cui monumenti, musei, parchi e negozi di alta moda. La Torre Eiffel, l'Arco di Trionfo, la Cattedrale di Notre-Dame e il Louvre sono solo alcune delle icone della città. La cucina francese, famosa in tutto il mondo, è particolarmente notevole a Parigi, con ristoranti stellati Michelin e bistrot di quartiere. I caffè accoglienti, la moda di lusso e la vita notturna vibrante completano l'esperienza parigina. Con la sua bellezza romantica, la cultura vibrante e la storia affascinante, Parigi è una città indimenticabile.<br>
                    <b>Ideale se cerchi:</b> musei e luoghi di culto, movida e divertimenti, reggie e palazzi storici. <br>
                    <b>Per quanto tempo: </b>una settimana. <br>
                    <b>Il periodo migliore: </b>tutto l'anno.
            </div>
                <?php
                    if(!isset($_SESSION['nome'])){
                        echo "<div class=\"col-lg-4 col-md-4 justify-content-center\" id=\"destra-paragr\">
                        <p id=\"form-paragraph-not-logged\" class=\"text-center\" style=\"color: red;\">Per compilare il form e cercare un compagno, devi aver effettuato l'accesso</p>
                        <a id=\"link-disabled\" role=\"link\" aria-disabled=\"true\"><button type=\"button\" id=\"login-button-dest\" data-bs-toggle=\"modal\" data-bs-target=\"#logPage\" class=\"btn bg-primary d-inline-block align-text-center\">Accedi</button></a>
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
</body>
</html>