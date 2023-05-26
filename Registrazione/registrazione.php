<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: http://localhost:3000/Homepage/homepage.html");
}
else {
    $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto_LTW 
                user=postgres password=password") 
                or die('Could not connect: ' . pg_last_error());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign up page</title>
        <link rel="stylesheet" href="./StileMegaMenu.css">
        <link rel="stylesheet" href="../Stili/Colors_link_nav.css">
        <script src="../bootstrap-5.2.3/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../bootstrap-5.2.3/bootstrap-5.2.3/dist/css/bootstrap.min.css"/>
        <script src="../bootstrap-5.2.3/bootstrap-5.2.3/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../Login/modal-signin.css">
        <link rel="stylesheet" href="../Homepage/StileMegaMenu.css">
        <script type="text/javascript" src="validate.js"></script>
        <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="signup.css">
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
            $(function(){
                $("#nav-placeholder").load("../Navbar/nav.php");
            });
        });
    </script>
    </head>
    <body class="text-center">
    <div id="nav-placeholder"></div>
<?php
            if ($dbconn) {
                $email = $_POST['email'];
                $q1="select * from utente where email=$1"; //$1 è un placeholder
                $result=pg_query_params($dbconn, $q1, array($email)); //sostituisce a $1 il valore che riceve in input dall'utente
                if ($tuple=pg_fetch_array($result, null, PGSQL_ASSOC)) {
                        echo "<div class=\"container2\">
                                <h1 class=\"q1\" style=\"color:red;\"> 
                                    Spiacente, l'indirizzo email e' già utilizzato
                                </h1> 
                                <a href=\"#\">
                                    <button class=\"btn btn-success\" id=\"log-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#logPage\">
                                        Clicca qui per loggarti
                                    </button>
                                </a> 
                            </div>";
                            
                }
                else {
                    //qui usiamo la stessa connessione per lanciare la nostra query
                    //rifacciamo i controlli anche lato server
                    $nome = $_POST['nome'];
                    $cognome = $_POST['cognome'];
                    $nascita = $_POST['nascita'];
                    $cellulare = $_POST['cellulare'];
                    $password = password_hash($_POST['password1'], PASSWORD_DEFAULT);
                    $q2 = "insert into utente values ($1,$2,$3,$4,$5,$6)";
                    $data = pg_query_params($dbconn, $q2,
                        array($email, $nome, $cognome, $password, $nascita, $cellulare));
                    if ($data) {
                        echo "
                        <div class=\"container2\"><h1 class=\"q1\"> 
                            Registrazione completata. Puoi iniziare a usare il sito <br/></h1>
                            <a href=\"#\"> 
                                <button class=\"btn btn-success\" data-bs-toggle=\"modal\" data-bs-target=\"#logPage\">
                                    Clicca qui per loggarti!
                                </button>
                            </a>
                        </div>";
                        
                    }
                }
            }
        ?>
        <!-- Modal -->
        <div class="modal fade" id="logPage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Inserisci le tue credenziali</h5>
                  </div>
                  <div class="modal-body">
                  <div role="alert" class="alert" id="avviso">Errore</div>
                      <form method="post" id="form-login" action="" name="registrazione" class="form-signin m-auto" onsubmit="return check_lr();">
                          <input placeholder="Email" type="text" id="email" name="email" maxlength="40" class="form-control" required>
                          <input placeholder="Password" id="pwd" type="password" name="password1" maxlength="40" class="form-control" required>
                          <i class="far fa-eye"></i>
                          <input type="submit" value="Accedi" id="accedi-btn" class="btn btn-primary" >     
                      </form>
                      
                  </div>
                  <div class="modal-footer">
                      <h5 class="modal-title">Non sei registrato?</h5>
                      <a href="../Registrazione/registrazione.html"><button class="btn btn-success" form="">Crea un nuovo account</button></a>
                  </div>
                </div>
              </div>
            </div>
    </body>
</html>