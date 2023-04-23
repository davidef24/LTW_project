
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
        <li>
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