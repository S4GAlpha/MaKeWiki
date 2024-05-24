<html lang="it"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Dragon Ball Z</title>
    <script src="adBlock.js"></script><style type="text/css" id="operaUserStyle"></style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/anime_game_style.css">
    <style>
        #main {
          background-image: url(images/img/wikiPage/home/imageHome.jpg);
          background-size: cover; /* Copre l'intera area disponibile */
          background-position: top center; /* Posiziona l'immagine in alto e al centro */
          background-repeat: no-repeat; /* Non ripetere l'immagine */
        }

        #row {
            display: flex;
            background-color: rgba(0, 0, 0, 0.897); /* Colore di sfondo nero con trasparenza */
            padding: 20px;
            margin-top: 20%;
            width: 100%;
        }

        #column-all {
            transition: height 0.5s ease; /* Aggiungi una transizione per un effetto di animazione fluida */
            overflow: hidden; /* Assicurati che il contenuto eccedente non fuoriesca quando la colonna viene ridotta di dimensioni */
        }

        .heart-button {
            background: none;
            border: none;
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 10px;
            outline: none; /* Rimuove il bordo del pulsante quando viene cliccato */
        }

        .heart-button:focus {
            outline: none; /* Rimuove il bordo del pulsante quando viene focalizzato */
        }

        .heart-button svg {
            width: 30px;
            height: 30px;
            fill: grey;
            transition: fill 0.3s ease;
        }

        .heart-button.clicked svg {
            fill: red;
            animation: heart-pulse 0.6s ease forwards;
        }

        @keyframes heart-pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }

        .favorite-message {
            position: absolute;
            right: 50px;
            top: 50px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 10px;
            border-radius: 0px;
            display: none;
            animation: fadeOut 3s forwards;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            80% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        #customButton {
          cursor: pointer;
          border: none; /* Rimuovi il bordo */
        }

        #fileInput {
          display: none; /* Nascondi l'input file per impostazione predefinita */
        }

        #imageContainer {
          width: 100%; /* Imposta la larghezza al 100% del contenitore */
          height: 100%; /* Imposta l'altezza al 100% del contenitore */
        }

        #imageContainer img {
          cursor: pointer;
          width: 100%; /* Imposta la larghezza al 100% del contenitore */
          height: 100%; /* Imposta l'altezza al 100% del contenitore */
          object-fit: cover; /* Imposta l'immagine per coprire l'intero contenitore mantenendo le proporzioni */
        }


        /* Il tuo CSS esistente */
        .fixed-card {
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 300px;
      background-color: rgba(79, 2, 151, 0.5);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      z-index: 1000;
    }

    .fixed-card h3 {
      color: white;
      margin-top: 0;
    }

    .fixed-card p {
      color: white;
      margin-bottom: 10px;
    }

    .fixed-card label {
      color: white;
      display: block;
      margin-bottom: 5px;
    }

    .fixed-card input[type="range"] {
      width: 100%;
      margin-bottom: 10px;
    }

    .fixed-card a {
      background-color: rgba(79, 2, 151, 0.27);
      color: white;
      text-align: center;
      padding: 10px;
      border-radius: 5px;
      display: block;
      text-decoration: none;
    }

    .video-container {
      height: 80%;
      border: 1px solid #ddd;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      position: relative;
    }
    .video-container iframe {
      width: 100%;
      height: 100%;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      display: none;
    }
    .video-input {
      font-size: 14px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 80%;
      display: none;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 10;
    }
    </style>
<style type="text/css">:root [href^="//mage98rquewz.com/"], :root [href^="//x4pollyxxpush.com/"], :root zeus-ad, :root span[id^="ezoic-pub-ad-placeholder-"], :root ins.adsbygoogle[data-ad-slot], :root guj-ad, :root gpt-ad, :root div[id^="zergnet-widget"], :root div[id^="vuukle-ad-"], :root div[id^="taboola-stream-"], :root div[id^="sticky_ad_"], :root div[id^="pa_sticky_ad_box_middle_"], :root div[id^="optidigital-adslot"], :root div[id^="gpt_ad_"], :root div[id^="ezoic-pub-ad-"], :root div[id^="dfp-ad-"], :root div[id^="crt-"][style], :root div[id^="advads_ad_"], :root div[id^="adspot-"], :root div[id^="ads300_250-widget-"], :root div[id^="ads300_100-widget-"], :root div[id^="ads250_250-widget-"], :root div[id^="adrotate_widgets-"], :root ps-connatix-module, :root div[id^="ad_position_"], :root div[id^="ad-div-"], :root div[id^="_vdo_ads_player_ai_"], :root div[id*="ScriptRoot"], :root div[id*="MarketGid"], :root div[data-native_ad], :root div[data-native-ad], :root div[data-mini-ad-unit], :root div[data-insertion], :root div[data-id-advertdfpconf], :root div[data-google-query-id], :root hl-adsense, :root div[data-contentexchange-widget], :root div[data-content="Advertisement"], :root div[data-alias="300x250 Ad 2"], :root div[data-adzone], :root div[data-adunit-path], :root div[data-adname], :root div[data-ad-wrapper], :root div[data-ad-placeholder], :root div[class^="native-ad-"], :root div[data-dfp-id], :root div[class^="kiwi-ad-wrapper"], :root div[aria-label="Ads"], :root display-ads, :root display-ad-component, :root bottomadblock, :root atf-ad-slot, :root aside[id^="adrotate_widgets-"], :root ark-top-ad, :root amp-fx-flying-carpet, :root amp-embed[type="taboola"], :root amp-connatix-player, :root div[id^="google_dfp_"], :root ad-slot, :root a[href^="https://banners.livepartners.com/"], :root a[target="_blank"][onmousedown="this.href^='http://paid.outbrain.com/network/redir?"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"], :root a[href^="https://www.purevpn.com/"][href*="&utm_source=aff-"], :root a[href^="https://www.onlineusershielder.com/"], :root a[href^="https://www.nudeidols.com/cams/"], :root a[href^="https://financeads.net/tc.php?"], :root a[href^="https://www.mrskin.com/tour"], :root a[href^="https://www.kingsoffetish.com/tour?partner_id="], :root a[href^="https://www.infowarsstore.com/"] > img, :root a[href^="https://www.highperformancecpmgate.com/"], :root amp-ad, :root a[href^="https://www.highcpmrevenuenetwork.com/"], :root a[href^="https://lnkxt.bannerator.com/"], :root a[href^="https://www.geekbuying.com/dynamic-ads/"], :root a[href^="https://www.friendlyduck.com/AF_"], :root a[href^="https://www.financeads.net/tc.php?"], :root [href^="https://www.herbanomic.com/"] > img, :root a[href^="https://maymooth-stopic.com/"], :root a[href^="https://www.dql2clk.com/"], :root a[href^="https://www.nutaku.net/signup/landing/"], :root a[href^="https://www.dating-finder.com/signup/?ai_d="], :root a[href^="https://www.brazzersnetwork.com/landing/"], :root a[href^="https://www.adxsrve.com/"], :root [data-template-type="nativead"], :root a[href^="https://www.endorico.com/Smartlink/"], :root a[href^="https://www.adultempire.com/"][href*="?partner_id="], :root a[href^="https://voluum.prom-xcams.com/"], :root a[href^="https://twinrdsrv.com/"], :root a[href^="https://trk.nfl-online-streams.club/"], :root a[href^="https://tracking.avapartner.com/"], :root a[href^="https://track.wg-aff.com"], :root a[href^="https://track.ultravpn.com/"], :root a[href^="https://track.afcpatrk.com/"], :root a[href^="https://track.1234sd123.com/"], :root a[href^="https://torguard.net/aff.php"] > img, :root a[href^="https://tc.tradetracker.net/"] > img, :root a[href^="https://tatrck.com/"], :root a[href^="https://click.candyoffers.com/"], :root [href^="https://zstacklife.com/"] img, :root a[href^="https://t.aslnk.link/"], :root a[href^="https://t.adating.link/"], :root a[href^="https://safesurfingtoday.com/"][href*="?skip="], :root a[href^="https://land.brazzersnetwork.com/landing/"], :root a[href^="https://t.acam.link/"], :root a[href^="https://syndication.optimizesrv.com/"], :root a[href^="https://go.trackitalltheway.com/"], :root [href^="https://track.fiverr.com/visit/"] > img, :root a[href^="https://syndication.exoclick.com/"], :root a[href^="https://syndication.dynsrvtbg.com/"], :root div[data-alias="300x250 Ad 1"], :root a[href^="https://syndicate.contentsserved.com/"], :root a[href^="https://svb-analytics.trackerrr.com/"], :root a[href^="https://streamate.com/landing/click/"], :root a[href^="https://ad.doubleclick.net/"], :root a[href^="https://static.fleshlight.com/images/banners/"], :root a[href^="https://slkmis.com/"], :root a[href^="https://s.zlink3.com/"], :root a[href^="https://www.mrskin.com/account/"], :root a[href^="https://s.optzsrv.com/"], :root a[href^="https://quotationfirearmrevision.com/"], :root a[href^="https://pubads.g.doubleclick.net/"], :root a[href^="https://ak.oalsauwy.net/"], :root a[href^="https://softwa.cfd/"], :root a[href^="https://play1ad.shop/"], :root a[href^="https://prf.hn/click/"][href*="/camref:"] > img, :root a[href^="https://www.dating-finder.com/?ai_d="], :root a[href^="https://serve.awmdelivery.com/"], :root a[href^="https://prf.hn/click/"][href*="/adref:"] > img, :root app-ad, :root a[href^="https://postback1win.com/"], :root a[href^="https://a.adtng.com/"], :root a[href^="https://playnano.online/offerwalls/?ref="], :root a[href^="https://www.privateinternetaccess.com/"] > img, :root a[href^="https://mmwebhandler.aff-online.com/"], :root a[href^="https://www.bet365.com/"][href*="affiliate="], :root a[href^="https://pb-track.com/"], :root a[href^="https://pb-front.com/"], :root a[href^="https://paid.outbrain.com/network/redir?"], :root a[href^="https://ngineet.cfd/"], :root a[href^="https://ndt5.net/"], :root a[href^="http://eighteenderived.com/"], :root a[href^="https://natour.naughtyamerica.com/track/"], :root a[href^="https://mediaserver.entainpartners.com/renderBanner.do?"], :root a[href^="https://www.sugarinstant.com/?partner_id="], :root a[href^="https://m.do.co/c/"] > img, :root .nya-slot[style], :root a[href^="https://a.bestcontentweb.top/"], :root a[href^="https://lobimax.com/"], :root a[href^="https://lead1.pl/"], :root a[href^="https://landing1.brazzersnetwork.com"], :root a[href^="https://landing.brazzersnetwork.com/"], :root a[href^="https://join.virtuallust3d.com/"], :root a[href^="https://kiksajex.com/"], :root a[href^="https://juicyads.in/"], :root a[href^="https://www.mypornstarcams.com/landing/click/"], :root a[href^="https://snowdayonline.xyz/"], :root a[href^="https://mediaserver.gvcaffiliates.com/renderBanner.do?"], :root a[href^="https://join.dreamsexworld.com/"], :root a[href^="https://jaxofuna.com/"], :root a[href^="https://itubego.com/video-downloader/?affid="], :root a[href^="https://italarizege.xyz/"], :root a[href^="https://iqbroker.com/"][href*="?aff="], :root ad-shield-ads, :root a[href^="https://hot-growngames.life/"], :root a[href^="https://golinks.work/"], :root a[href^="https://go.xxxvjmp.com/"], :root a[href^="https://zirdough.net/"], :root [class^="tile-picker__CitrusBannerContainer-sc-"], :root a[href^="https://go.xxxiijmp.com"], :root a[href^="https://go.xtbaffiliates.com/"], :root .OUTBRAIN[data-widget-id^="FMS_REELD_"], :root [data-role="tile-ads-module"], :root a[href^="https://go.xlviirdr.com"], :root a[href^="https://go.xlviiirdr.com"], :root a[href^="https://ismlks.com/"], :root [href^="https://www.mypillow.com/"] > img, :root a[href^="https://go.xlirdr.com"], :root [data-css-class="dfp-inarticle"], :root a[href^="https://l.hyenadata.com/"], :root a[href^="https://go.tmrjmp.com"], :root a[href^="https://go.skinstrip.net"][href*="?campaignId="], :root a[href^="https://go.markets.com/visit/?bta="], :root a[href^="https://billing.purevpn.com/aff.php"] > img, :root a[href^="https://go.hpyrdr.com/"], :root a[href^="https://lijavaxa.com/"], :root a[href^="https://go.goaserv.com/"], :root a[href^="https://t.hrtye.com/"], :root a[href^="https://go.etoro.com/"] > img, :root a[href^="https://go.dmzjmp.com"], :root div[class^="Display_displayAd"], :root a[href^="https://www.bang.com/?aff="], :root #mgb-container > #mgb, :root a[href^="https://go.admjmp.com"], :root div[id^="div-gpt-"], :root a[href^="https://gml-grp.com/"], :root a[href^="https://get.surfshark.net/aff_c?"][href*="&aff_id="] > img, :root a[href^="https://gamingadlt.com/?offer="], :root a[href^="https://www.adskeeper.com"], :root [href^="https://www.reimageplus.com/"], :root a[data-redirect^="https://paid.outbrain.com/network/redir?"], :root [href^="https://clicks.affstrack.com/"] > img, :root a[href^="https://ak.hauchiwu.com/"], :root a[href^="https://engine.phn.doublepimp.com/"], :root a[href^="https://engine.blueistheneworanges.com/"], :root a[href^="https://eergortu.net/"], :root a[href^="https://dl-protect.net/"], :root a[href^="https://disobediencecalculatormaiden.com/"], :root a[href^="https://datingoffers30.info/"], :root a[href*=".foxqck.com/"], :root a[href^="https://ctosrd.com/"], :root a[href^="https://clixtrac.com/"], :root [href^="https://noqreport.com/"] > img, :root a[href^="https://clicks.pipaffiliates.com/"], :root a[href^="https://datewhisper.life/"], :root a[href^="https://get-link.xyz/"], :root a[href^="https://click.linksynergy.com/fs-bin/"] > img, :root a[href^="https://combodef.com/"], :root AD-TRIPLE-BOX, :root a[href^="https://click.hoolig.app/"], :root a[href^="https://track.totalav.com/"], :root img[src^="https://images.purevpnaffiliates.com"], :root a[href^="https://porntubemate.com/"], :root a[href^="https://clickadilla.com/"], :root a[href^="https://click.dtiserv2.com/"], :root a[href^="https://go.xlvirdr.com"], :root a[href^="http://www.iyalc.com/"], :root a[href^="https://claring-loccelkin.com/"], :root a[href^="https://s.ma3ion.com/"], :root a[href^="https://cams.imagetwist.com/in/?track="], :root a[href^="https://t.ajrkm1.com/"], :root [href="https://masstortfinancing.com"] img, :root a[href^="https://bongacams10.com/track?"], :root a[href*=".g2afse.com/"], :root [data-ad-name], :root a[href^="https://bodelen.com/"], :root a[href^="http://revolvemockerycopper.com/"], :root a[href^="https://awptjmp.com/"], :root a[href^="https://join.sexworld3d.com/track/"], :root a[href^="https://intenseaffiliates.com/redirect/"], :root a[href^="https://ads.ad4game.com/"], :root a[href^="https://aweptjmp.com/"], :root [class^="s2nPlayer"], :root a[href^="https://chaturbate.jjgirls.com/?track="], :root a[href^="https://ausoafab.net/"], :root a[href^="https://activate-game.com/"], :root .scroll-fixable.rail-right > .deals-rail, :root [data-wpas-zoneid], :root a[href^="https://a2.adform.net/"], :root a[href^="https://auesk.cfd/"], :root a[href^="https://ak.psaltauw.net/"], :root a[href^="https://adclick.g.doubleclick.net/"], :root div[id^="ad-position-"], :root a[href^="https://leg.xyz/?track="], :root a[href^="https://www.toprevenuegate.com/"], :root a[href^="https://bc.game/"], :root a[href^="https://a.bestcontentoperation.top/"], :root a[href^="https://adultfriendfinder.com/go/"], :root a[href^="https://ads.planetwin365affiliate.com/"], :root a[href^="https://ads.leovegas.com/"], :root [data-m-ad-id], :root a[href^="https://a-ads.com/"], :root div[id^="rc-widget-"], :root a[href^="http://eslp34af.click/"], :root a[href^="https://turnstileunavailablesite.com/"], :root a[href^="https://chaturbate.com/in/?"], :root [href^="https://freecourseweb.com/"] > .sitefriend, :root a[href^="https://prf.hn/click/"][href*="/creativeref:"] > img, :root a[href*="&maxads="], :root a[href^="http://www.adultempire.com/unlimited/promo?"][href*="&partner_id="], :root a[href^="https://1betandgonow.com/"], :root a[href^="https://www.googleadservices.com/pagead/aclk?"], :root a[href^="http://www.mrskin.com/tour"], :root a[href^="http://www.friendlyduck.com/AF_"], :root a[href^="https://getvideoz.click/"], :root a[href^="http://troopsassistedstupidity.com/"], :root a[href^="https://bongacams2.com/track?"], :root amp-ad-custom, :root a[href^="http://trk.globwo.online/"], :root a-ad, :root a[href^="https://offhandpump.com/"], :root a[href^="http://stickingrepute.com/"], :root #slashboxes > .deals-rail, :root a[href^="http://premonitioninventdisagree.com/"], :root a[href^="http://naggingirresponsible.com/"], :root a[href^="https://in.rabbtrk.com/"], :root div[data-ad-targeting], :root a[href^="https://hotplaystime.life/"], :root a[href^="http://www.h4trck.com/"], :root a[href^="https://81ac.xyz/"], :root a[href^="http://guestblackmail.com/"], :root a[href^="http://cam4com.go2cloud.org/aff_c?"], :root a[href^="https://ads.betfair.com/redirect.aspx?"], :root a[href^="https://ad.kubiccomps.icu/"], :root [href^="https://www.mypatriotsupply.com/"] > img, :root a[href^="https://trk.softonixs.xyz/"], :root a[href^="https://sexynearme.com/"], :root a[href^="https://myclick-2.com/"], :root a[href^="http://dragnag.com/"], :root a[style="width:100%;height:100%;z-index:10000000000000000;position:absolute;top:0;left:0;"], :root [id^="div-gpt-ad"], :root .ob_container .item-container-obpd, :root div[id^="yandex_ad"], :root a[href^="https://pb-imc.com/"], :root a[href^="http://deskfrontfreely.com/"], :root a[href^="https://track.adform.net/"], :root a[href^="http://avthelkp.net/"], :root a[href^="https://a.medfoodhome.com/"], :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[href^="https://engine.flixtrial.com/"], :root [data-type="ad-vertical"], :root a[href^="http://annulmentequitycereals.com/"], :root citrus-ad-wrapper, :root a[href^="https://go.grinsbest.com/"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"], :root a[href^="//startgaming.net/tienda/" i], :root a[href^="https://www.get-express-vpn.com/offer/"], :root a[href^="//s.st1net.com/splash.php"], :root a[href^="https://a.medfoodsafety.com/"], :root a[href^="//go.eabids.com/"], :root a[href^="https://go.nordvpn.net/aff"] > img, :root .\[\&_\.gdprAdTransparencyCogWheelButton\]\:\!pjra-z-\[5\], :root [href^="http://clicks.totemcash.com/"], :root a[href^="https://ad.zanox.com/ppc/"] > img, :root [data-d-ad-id], :root a[href*=".engine.adglare.net/"], :root [href^="https://www.profitablegatecpm.com/"], :root div[id^="lazyad-"], :root a[href^="http://com-1.pro/"], :root a[href*=".cfm?domain="][href*="&fp="], :root [data-dynamic-ads], :root a[href^="https://xbet-4.com/"], :root a[data-widget-outbrain-redirect^="http://paid.outbrain.com/network/redir?"], :root [data-ad-width], :root [data-block-type="ad"], :root [href^="https://join.playboyplus.com/track/"], :root a[data-url^="http://paid.outbrain.com/network/redir?"] + .author, :root a[href^="https://ab.advertiserurl.com/aff/"], :root a[data-oburl^="https://paid.outbrain.com/network/redir?"], :root a[href^="https://trk.sportsflix4k.club/"], :root a[href^="http://dragfault.com/"], :root [href^="https://cpa.10kfreesilver.com/"], :root a[href^="https://a.bestcontentfood.top/"], :root a[data-obtrack^="http://paid.outbrain.com/network/redir?"], :root a[data-href^="http://ads.trafficjunky.net/"], :root a[href^="https://go.xlivrdr.com"], :root [onclick^="location.href='https://1337x.vpnonly.site/"], :root [name^="google_ads_iframe"], :root [id^="section-ad-banner"], :root [data-advadstrackid], :root a[href^="http://muzzlematrix.com/"], :root [href^="https://zone.gotrackier.com/"], :root [href^="https://www.restoro.com/"], :root a[href^="https://bngpt.com/"], :root a[href^="https://www.sheetmusicplus.com/"][href*="?aff_id="], :root a[href^="http://adultfriendfinder.com/go/"], :root a[href^="https://fastestvpn.com/lifetime-special-deal?a_aid="], :root a[href^="https://tour.mrskin.com/"], :root a[href^="https://vo2.qrlsx.com/"], :root [href^="https://www.avantlink.com/click.php"] img, :root a[href^="https://losingoldfry.com/"], :root [href^="https://routewebtk.com/"], :root a[href^="https://t.ajump1.com/"], :root div[id^="div-ads-"], :root [href^="https://rapidgator.net/article/premium/ref/"], :root [href^="https://join.girlsoutwest.com/"], :root [href^="https://join3.bannedsextapes.com"], :root .vid-present > .van_vid_carousel__padding, :root div[id^="adngin-"], :root [data-rc-widget], :root span[data-ez-ph-id], :root [href^="https://track.aftrk1.com/"], :root a[href^="https://go.xxxijmp.com"], :root [href^="https://istlnkcl.com/"], :root div[data-adunit], :root app-large-ad, :root [href^="https://turtlebids.irauctions.com/"] img, :root [href^="https://wct.link/click?"], :root [href^="https://ilovemyfreedoms.com/landing-"], :root [href^="https://go.xlrdr.com"], :root a[href^="https://tm-offers.gamingadult.com/"], :root [href^="https://charmingdatings.life/"], :root [href^="https://glersakr.com/"], :root [href^="https://v.investologic.co.uk/"], :root a[href^="https://www.goldenfrog.com/vyprvpn?offer_id="][href*="&aff_id="], :root [id^="ad-wrap-"], :root a[href*="//jjgirls.com/sex/Chaturbate"], :root [data-id^="div-gpt-ad"], :root a[href^="https://tracker.loropartners.com/"], :root [href^="https://awbbjmp.com/"], :root a[href*=".adsrv.eacdn.com/"], :root [href^="https://antiagingbed.com/discount/"] > img, :root [href^="https://www.brighteonstore.com/products/"] img, :root a[href^="https://bngprm.com/"], :root [href^="https://shiftnetwork.infusionsoft.com/go/"] > img, :root a[href^="https://go.strpjmp.com/"], :root a[href^="https://go.bushheel.com/"], :root a[href^="https://ctjdwm.com/"], :root a[href^="https://camfapr.com/landing/click/"], :root [href="//sexcams.plus/"], :root [href^="http://www.mypillow.com/"] > img, :root [href^="https://www.targetingpartner.com/"], :root div[class^="Adstyled__AdWrapper-"], :root a[href^="https://startgaming.net/tienda/" i], :root .section-subheader > .section-hotel-prices-header, :root [href^="https://www.hostg.xyz/"] > img, :root a[href^="https://join.virtualtaboo.com/track/"], :root [id^="ad_sky"], :root #kt_player > a[target="_blank"], :root a[href^="http://bongacams.com/track?"], :root [href^="http://mypillow.com/"] > img, :root [href="https://ourgoldguy.com/contact/"] img, :root [href="https://www.masstortfinancing.com/"] > img, :root [href="https://jdrucker.com/gold"] > img, :root [href^="https://ad.admitad.com/"], :root [href^="https://mypillow.com/"] > img, :root [data-testid="ad_testID"], :root a[href^="http://handgripvegetationhols.com/"], :root [class^="amp-ad-"], :root a[href^="http://tc.tradetracker.net/"] > img, :root [data-ez-name], :root a[href^="https://black77854.com/"], :root [data-revive-zoneid] > iframe, :root [data-testid="adBanner-wrapper"], :root [href^="https://mylead.global/stl/"] > img, :root [href^="https://mypatriotsupply.com/"] > img, :root a[href^="https://go.hpyjmp.com"], :root [href^="https://mystore.com/"] > img, :root a[href^="https://witnessjacket.com/"], :root [data-mobile-ad-id], :root a[href^="https://fc.lc/ref/"], :root [data-adshim], :root topadblock, :root a[href^="//s.zlinkd.com/"], :root a[href^="https://bs.serving-sys.com"], :root [href^="https://goldcometals.com/clk.trk"], :root [data-desktop-ad-id], :root [href^="https://www.cloudways.com/en/?id"], :root a[href^="https://www.liquidfire.mobi/"], :root .grid > .container > #aside-promotion, :root DFP-AD, :root [id^="ad_slider"], :root [data-adbridg-ad-class], :root a[href^="https://linkboss.shop/"], :root [data-adblockkey], :root a[href^="https://go.cmtaffiliates.com/"], :root [href^="https://optimizedelite.com/"] > img, :root [data-name="adaptiveConstructorAd"], :root [onclick*="content.ad/"], :root [data-ad-manager-id], :root AMP-AD, :root [data-ad-cls], :root a[href^="https://6-partner.com/"], :root [href^="https://affiliate.fastcomet.com/"] > img, :root a[href^="https://go.mnaspm.com/"], :root [class^="adDisplay-module"], :root AD-SLOT, :root #kt_player > div[style="position: absolute; inset: 0px; z-index: 170;"], :root [data-freestar-ad][id], :root a[href^="https://go.xxxjmp.com"], :root #leader-companion > a[href], :root a[href^="http://www.adultdvdempire.com/?partner_id="][href*="&utm_"], :root [data-ad-module], :root a[href^="http://partners.etoro.com/"], :root a[href^=" https://www.friendlyduck.com/AF_"], :root a[href*="/jump/next.php?r="], :root app-advertisement, :root a[href^="https://getmatchedlocally.com/"], :root a[href^="https://clickins.slixa.com/"], :root [class^="div-gpt-ad"], :root a[href^="https://traffdaq.com/"], :root a[href^="https://cam4com.go2cloud.org/"], :root a[href^="http://li.blogtrottr.com/click?"], :root .ob_dual_right > .ob_ads_header ~ .odb_div { display: none !important; }</style><style type="text/css">:root [href^="//mage98rquewz.com/"], :root [href^="//x4pollyxxpush.com/"], :root zeus-ad, :root span[id^="ezoic-pub-ad-placeholder-"], :root ins.adsbygoogle[data-ad-slot], :root guj-ad, :root gpt-ad, :root div[id^="zergnet-widget"], :root div[id^="vuukle-ad-"], :root div[id^="taboola-stream-"], :root div[id^="sticky_ad_"], :root div[id^="pa_sticky_ad_box_middle_"], :root div[id^="optidigital-adslot"], :root div[id^="gpt_ad_"], :root div[id^="ezoic-pub-ad-"], :root div[id^="dfp-ad-"], :root div[id^="crt-"][style], :root div[id^="advads_ad_"], :root div[id^="adspot-"], :root div[id^="ads300_250-widget-"], :root div[id^="ads300_100-widget-"], :root div[id^="ads250_250-widget-"], :root div[id^="adrotate_widgets-"], :root ps-connatix-module, :root div[id^="ad_position_"], :root div[id^="ad-div-"], :root div[id^="_vdo_ads_player_ai_"], :root div[id*="ScriptRoot"], :root div[id*="MarketGid"], :root div[data-native_ad], :root div[data-native-ad], :root div[data-mini-ad-unit], :root div[data-insertion], :root div[data-id-advertdfpconf], :root div[data-google-query-id], :root hl-adsense, :root div[data-contentexchange-widget], :root div[data-content="Advertisement"], :root div[data-alias="300x250 Ad 2"], :root div[data-adzone], :root div[data-adunit-path], :root div[data-adname], :root div[data-ad-wrapper], :root div[data-ad-placeholder], :root div[class^="native-ad-"], :root div[data-dfp-id], :root div[class^="kiwi-ad-wrapper"], :root div[aria-label="Ads"], :root display-ads, :root display-ad-component, :root bottomadblock, :root atf-ad-slot, :root aside[id^="adrotate_widgets-"], :root ark-top-ad, :root amp-fx-flying-carpet, :root amp-embed[type="taboola"], :root amp-connatix-player, :root div[id^="google_dfp_"], :root ad-slot, :root a[href^="https://banners.livepartners.com/"], :root a[target="_blank"][onmousedown="this.href^='http://paid.outbrain.com/network/redir?"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"], :root a[href^="https://www.purevpn.com/"][href*="&utm_source=aff-"], :root a[href^="https://www.onlineusershielder.com/"], :root a[href^="https://www.nudeidols.com/cams/"], :root a[href^="https://financeads.net/tc.php?"], :root a[href^="https://www.mrskin.com/tour"], :root a[href^="https://www.kingsoffetish.com/tour?partner_id="], :root a[href^="https://www.infowarsstore.com/"] > img, :root a[href^="https://www.highperformancecpmgate.com/"], :root amp-ad, :root a[href^="https://www.highcpmrevenuenetwork.com/"], :root a[href^="https://lnkxt.bannerator.com/"], :root a[href^="https://www.geekbuying.com/dynamic-ads/"], :root a[href^="https://www.friendlyduck.com/AF_"], :root a[href^="https://www.financeads.net/tc.php?"], :root [href^="https://www.herbanomic.com/"] > img, :root a[href^="https://maymooth-stopic.com/"], :root a[href^="https://www.dql2clk.com/"], :root a[href^="https://www.nutaku.net/signup/landing/"], :root a[href^="https://www.dating-finder.com/signup/?ai_d="], :root a[href^="https://www.brazzersnetwork.com/landing/"], :root a[href^="https://www.adxsrve.com/"], :root [data-template-type="nativead"], :root a[href^="https://www.endorico.com/Smartlink/"], :root a[href^="https://www.adultempire.com/"][href*="?partner_id="], :root a[href^="https://voluum.prom-xcams.com/"], :root a[href^="https://twinrdsrv.com/"], :root a[href^="https://trk.nfl-online-streams.club/"], :root a[href^="https://tracking.avapartner.com/"], :root a[href^="https://track.wg-aff.com"], :root a[href^="https://track.ultravpn.com/"], :root a[href^="https://track.afcpatrk.com/"], :root a[href^="https://track.1234sd123.com/"], :root a[href^="https://torguard.net/aff.php"] > img, :root a[href^="https://tc.tradetracker.net/"] > img, :root a[href^="https://tatrck.com/"], :root a[href^="https://click.candyoffers.com/"], :root [href^="https://zstacklife.com/"] img, :root a[href^="https://t.aslnk.link/"], :root a[href^="https://t.adating.link/"], :root a[href^="https://safesurfingtoday.com/"][href*="?skip="], :root a[href^="https://land.brazzersnetwork.com/landing/"], :root a[href^="https://t.acam.link/"], :root a[href^="https://syndication.optimizesrv.com/"], :root a[href^="https://go.trackitalltheway.com/"], :root [href^="https://track.fiverr.com/visit/"] > img, :root a[href^="https://syndication.exoclick.com/"], :root a[href^="https://syndication.dynsrvtbg.com/"], :root div[data-alias="300x250 Ad 1"], :root a[href^="https://syndicate.contentsserved.com/"], :root a[href^="https://svb-analytics.trackerrr.com/"], :root a[href^="https://streamate.com/landing/click/"], :root a[href^="https://ad.doubleclick.net/"], :root a[href^="https://static.fleshlight.com/images/banners/"], :root a[href^="https://slkmis.com/"], :root a[href^="https://s.zlink3.com/"], :root a[href^="https://www.mrskin.com/account/"], :root a[href^="https://s.optzsrv.com/"], :root a[href^="https://quotationfirearmrevision.com/"], :root a[href^="https://pubads.g.doubleclick.net/"], :root a[href^="https://ak.oalsauwy.net/"], :root a[href^="https://softwa.cfd/"], :root a[href^="https://play1ad.shop/"], :root a[href^="https://prf.hn/click/"][href*="/camref:"] > img, :root a[href^="https://www.dating-finder.com/?ai_d="], :root a[href^="https://serve.awmdelivery.com/"], :root a[href^="https://prf.hn/click/"][href*="/adref:"] > img, :root app-ad, :root a[href^="https://postback1win.com/"], :root a[href^="https://a.adtng.com/"], :root a[href^="https://playnano.online/offerwalls/?ref="], :root a[href^="https://www.privateinternetaccess.com/"] > img, :root a[href^="https://mmwebhandler.aff-online.com/"], :root a[href^="https://www.bet365.com/"][href*="affiliate="], :root a[href^="https://pb-track.com/"], :root a[href^="https://pb-front.com/"], :root a[href^="https://paid.outbrain.com/network/redir?"], :root a[href^="https://ngineet.cfd/"], :root a[href^="https://ndt5.net/"], :root a[href^="http://eighteenderived.com/"], :root a[href^="https://natour.naughtyamerica.com/track/"], :root a[href^="https://mediaserver.entainpartners.com/renderBanner.do?"], :root a[href^="https://www.sugarinstant.com/?partner_id="], :root a[href^="https://m.do.co/c/"] > img, :root .nya-slot[style], :root a[href^="https://a.bestcontentweb.top/"], :root a[href^="https://lobimax.com/"], :root a[href^="https://lead1.pl/"], :root a[href^="https://landing1.brazzersnetwork.com"], :root a[href^="https://landing.brazzersnetwork.com/"], :root a[href^="https://join.virtuallust3d.com/"], :root a[href^="https://kiksajex.com/"], :root a[href^="https://juicyads.in/"], :root a[href^="https://www.mypornstarcams.com/landing/click/"], :root a[href^="https://snowdayonline.xyz/"], :root a[href^="https://mediaserver.gvcaffiliates.com/renderBanner.do?"], :root a[href^="https://join.dreamsexworld.com/"], :root a[href^="https://jaxofuna.com/"], :root a[href^="https://itubego.com/video-downloader/?affid="], :root a[href^="https://italarizege.xyz/"], :root a[href^="https://iqbroker.com/"][href*="?aff="], :root ad-shield-ads, :root a[href^="https://hot-growngames.life/"], :root a[href^="https://golinks.work/"], :root a[href^="https://go.xxxvjmp.com/"], :root a[href^="https://zirdough.net/"], :root [class^="tile-picker__CitrusBannerContainer-sc-"], :root a[href^="https://go.xxxiijmp.com"], :root a[href^="https://go.xtbaffiliates.com/"], :root .OUTBRAIN[data-widget-id^="FMS_REELD_"], :root [data-role="tile-ads-module"], :root a[href^="https://go.xlviirdr.com"], :root a[href^="https://go.xlviiirdr.com"], :root a[href^="https://ismlks.com/"], :root [href^="https://www.mypillow.com/"] > img, :root a[href^="https://go.xlirdr.com"], :root [data-css-class="dfp-inarticle"], :root a[href^="https://l.hyenadata.com/"], :root a[href^="https://go.tmrjmp.com"], :root a[href^="https://go.skinstrip.net"][href*="?campaignId="], :root a[href^="https://go.markets.com/visit/?bta="], :root a[href^="https://billing.purevpn.com/aff.php"] > img, :root a[href^="https://go.hpyrdr.com/"], :root a[href^="https://lijavaxa.com/"], :root a[href^="https://go.goaserv.com/"], :root a[href^="https://t.hrtye.com/"], :root a[href^="https://go.etoro.com/"] > img, :root a[href^="https://go.dmzjmp.com"], :root div[class^="Display_displayAd"], :root a[href^="https://www.bang.com/?aff="], :root #mgb-container > #mgb, :root a[href^="https://go.admjmp.com"], :root div[id^="div-gpt-"], :root a[href^="https://gml-grp.com/"], :root a[href^="https://get.surfshark.net/aff_c?"][href*="&aff_id="] > img, :root a[href^="https://gamingadlt.com/?offer="], :root a[href^="https://www.adskeeper.com"], :root [href^="https://www.reimageplus.com/"], :root a[data-redirect^="https://paid.outbrain.com/network/redir?"], :root [href^="https://clicks.affstrack.com/"] > img, :root a[href^="https://ak.hauchiwu.com/"], :root a[href^="https://engine.phn.doublepimp.com/"], :root a[href^="https://engine.blueistheneworanges.com/"], :root a[href^="https://eergortu.net/"], :root a[href^="https://dl-protect.net/"], :root a[href^="https://disobediencecalculatormaiden.com/"], :root a[href^="https://datingoffers30.info/"], :root a[href*=".foxqck.com/"], :root a[href^="https://ctosrd.com/"], :root a[href^="https://clixtrac.com/"], :root [href^="https://noqreport.com/"] > img, :root a[href^="https://clicks.pipaffiliates.com/"], :root a[href^="https://datewhisper.life/"], :root a[href^="https://get-link.xyz/"], :root a[href^="https://click.linksynergy.com/fs-bin/"] > img, :root a[href^="https://combodef.com/"], :root AD-TRIPLE-BOX, :root a[href^="https://click.hoolig.app/"], :root a[href^="https://track.totalav.com/"], :root img[src^="https://images.purevpnaffiliates.com"], :root a[href^="https://porntubemate.com/"], :root a[href^="https://clickadilla.com/"], :root a[href^="https://click.dtiserv2.com/"], :root a[href^="https://go.xlvirdr.com"], :root a[href^="http://www.iyalc.com/"], :root a[href^="https://claring-loccelkin.com/"], :root a[href^="https://s.ma3ion.com/"], :root a[href^="https://cams.imagetwist.com/in/?track="], :root a[href^="https://t.ajrkm1.com/"], :root [href="https://masstortfinancing.com"] img, :root a[href^="https://bongacams10.com/track?"], :root a[href*=".g2afse.com/"], :root [data-ad-name], :root a[href^="https://bodelen.com/"], :root a[href^="http://revolvemockerycopper.com/"], :root a[href^="https://awptjmp.com/"], :root a[href^="https://join.sexworld3d.com/track/"], :root a[href^="https://intenseaffiliates.com/redirect/"], :root a[href^="https://ads.ad4game.com/"], :root a[href^="https://aweptjmp.com/"], :root [class^="s2nPlayer"], :root a[href^="https://chaturbate.jjgirls.com/?track="], :root a[href^="https://ausoafab.net/"], :root a[href^="https://activate-game.com/"], :root .scroll-fixable.rail-right > .deals-rail, :root [data-wpas-zoneid], :root a[href^="https://a2.adform.net/"], :root a[href^="https://auesk.cfd/"], :root a[href^="https://ak.psaltauw.net/"], :root a[href^="https://adclick.g.doubleclick.net/"], :root div[id^="ad-position-"], :root a[href^="https://leg.xyz/?track="], :root a[href^="https://www.toprevenuegate.com/"], :root a[href^="https://bc.game/"], :root a[href^="https://a.bestcontentoperation.top/"], :root a[href^="https://adultfriendfinder.com/go/"], :root a[href^="https://ads.planetwin365affiliate.com/"], :root a[href^="https://ads.leovegas.com/"], :root [data-m-ad-id], :root a[href^="https://a-ads.com/"], :root div[id^="rc-widget-"], :root a[href^="http://eslp34af.click/"], :root a[href^="https://turnstileunavailablesite.com/"], :root a[href^="https://chaturbate.com/in/?"], :root [href^="https://freecourseweb.com/"] > .sitefriend, :root a[href^="https://prf.hn/click/"][href*="/creativeref:"] > img, :root a[href*="&maxads="], :root a[href^="http://www.adultempire.com/unlimited/promo?"][href*="&partner_id="], :root a[href^="https://1betandgonow.com/"], :root a[href^="https://www.googleadservices.com/pagead/aclk?"], :root a[href^="http://www.mrskin.com/tour"], :root a[href^="http://www.friendlyduck.com/AF_"], :root a[href^="https://getvideoz.click/"], :root a[href^="http://troopsassistedstupidity.com/"], :root a[href^="https://bongacams2.com/track?"], :root amp-ad-custom, :root a[href^="http://trk.globwo.online/"], :root a-ad, :root a[href^="https://offhandpump.com/"], :root a[href^="http://stickingrepute.com/"], :root #slashboxes > .deals-rail, :root a[href^="http://premonitioninventdisagree.com/"], :root a[href^="http://naggingirresponsible.com/"], :root a[href^="https://in.rabbtrk.com/"], :root div[data-ad-targeting], :root a[href^="https://hotplaystime.life/"], :root a[href^="http://www.h4trck.com/"], :root a[href^="https://81ac.xyz/"], :root a[href^="http://guestblackmail.com/"], :root a[href^="http://cam4com.go2cloud.org/aff_c?"], :root a[href^="https://ads.betfair.com/redirect.aspx?"], :root a[href^="https://ad.kubiccomps.icu/"], :root [href^="https://www.mypatriotsupply.com/"] > img, :root a[href^="https://trk.softonixs.xyz/"], :root a[href^="https://sexynearme.com/"], :root a[href^="https://myclick-2.com/"], :root a[href^="http://dragnag.com/"], :root a[style="width:100%;height:100%;z-index:10000000000000000;position:absolute;top:0;left:0;"], :root [id^="div-gpt-ad"], :root .ob_container .item-container-obpd, :root div[id^="yandex_ad"], :root a[href^="https://pb-imc.com/"], :root a[href^="http://deskfrontfreely.com/"], :root a[href^="https://track.adform.net/"], :root a[href^="http://avthelkp.net/"], :root a[href^="https://a.medfoodhome.com/"], :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[href^="https://engine.flixtrial.com/"], :root [data-type="ad-vertical"], :root a[href^="http://annulmentequitycereals.com/"], :root citrus-ad-wrapper, :root a[href^="https://go.grinsbest.com/"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"], :root a[href^="//startgaming.net/tienda/" i], :root a[href^="https://www.get-express-vpn.com/offer/"], :root a[href^="//s.st1net.com/splash.php"], :root a[href^="https://a.medfoodsafety.com/"], :root a[href^="//go.eabids.com/"], :root a[href^="https://go.nordvpn.net/aff"] > img, :root .\[\&_\.gdprAdTransparencyCogWheelButton\]\:\!pjra-z-\[5\], :root [href^="http://clicks.totemcash.com/"], :root a[href^="https://ad.zanox.com/ppc/"] > img, :root [data-d-ad-id], :root a[href*=".engine.adglare.net/"], :root [href^="https://www.profitablegatecpm.com/"], :root div[id^="lazyad-"], :root a[href^="http://com-1.pro/"], :root a[href*=".cfm?domain="][href*="&fp="], :root [data-dynamic-ads], :root a[href^="https://xbet-4.com/"], :root a[data-widget-outbrain-redirect^="http://paid.outbrain.com/network/redir?"], :root [data-ad-width], :root [data-block-type="ad"], :root [href^="https://join.playboyplus.com/track/"], :root a[data-url^="http://paid.outbrain.com/network/redir?"] + .author, :root a[href^="https://ab.advertiserurl.com/aff/"], :root a[data-oburl^="https://paid.outbrain.com/network/redir?"], :root a[href^="https://trk.sportsflix4k.club/"], :root a[href^="http://dragfault.com/"], :root [href^="https://cpa.10kfreesilver.com/"], :root a[href^="https://a.bestcontentfood.top/"], :root a[data-obtrack^="http://paid.outbrain.com/network/redir?"], :root a[data-href^="http://ads.trafficjunky.net/"], :root a[href^="https://go.xlivrdr.com"], :root [onclick^="location.href='https://1337x.vpnonly.site/"], :root [name^="google_ads_iframe"], :root [id^="section-ad-banner"], :root [data-advadstrackid], :root a[href^="http://muzzlematrix.com/"], :root [href^="https://zone.gotrackier.com/"], :root [href^="https://www.restoro.com/"], :root a[href^="https://bngpt.com/"], :root a[href^="https://www.sheetmusicplus.com/"][href*="?aff_id="], :root a[href^="http://adultfriendfinder.com/go/"], :root a[href^="https://fastestvpn.com/lifetime-special-deal?a_aid="], :root a[href^="https://tour.mrskin.com/"], :root a[href^="https://vo2.qrlsx.com/"], :root [href^="https://www.avantlink.com/click.php"] img, :root a[href^="https://losingoldfry.com/"], :root [href^="https://routewebtk.com/"], :root a[href^="https://t.ajump1.com/"], :root div[id^="div-ads-"], :root [href^="https://rapidgator.net/article/premium/ref/"], :root [href^="https://join.girlsoutwest.com/"], :root [href^="https://join3.bannedsextapes.com"], :root .vid-present > .van_vid_carousel__padding, :root div[id^="adngin-"], :root [data-rc-widget], :root span[data-ez-ph-id], :root [href^="https://track.aftrk1.com/"], :root a[href^="https://go.xxxijmp.com"], :root [href^="https://istlnkcl.com/"], :root div[data-adunit], :root app-large-ad, :root [href^="https://turtlebids.irauctions.com/"] img, :root [href^="https://wct.link/click?"], :root [href^="https://ilovemyfreedoms.com/landing-"], :root [href^="https://go.xlrdr.com"], :root a[href^="https://tm-offers.gamingadult.com/"], :root [href^="https://charmingdatings.life/"], :root [href^="https://glersakr.com/"], :root [href^="https://v.investologic.co.uk/"], :root a[href^="https://www.goldenfrog.com/vyprvpn?offer_id="][href*="&aff_id="], :root [id^="ad-wrap-"], :root a[href*="//jjgirls.com/sex/Chaturbate"], :root [data-id^="div-gpt-ad"], :root a[href^="https://tracker.loropartners.com/"], :root [href^="https://awbbjmp.com/"], :root a[href*=".adsrv.eacdn.com/"], :root [href^="https://antiagingbed.com/discount/"] > img, :root [href^="https://www.brighteonstore.com/products/"] img, :root a[href^="https://bngprm.com/"], :root [href^="https://shiftnetwork.infusionsoft.com/go/"] > img, :root a[href^="https://go.strpjmp.com/"], :root a[href^="https://go.bushheel.com/"], :root a[href^="https://ctjdwm.com/"], :root a[href^="https://camfapr.com/landing/click/"], :root [href="//sexcams.plus/"], :root [href^="http://www.mypillow.com/"] > img, :root [href^="https://www.targetingpartner.com/"], :root div[class^="Adstyled__AdWrapper-"], :root a[href^="https://startgaming.net/tienda/" i], :root .section-subheader > .section-hotel-prices-header, :root [href^="https://www.hostg.xyz/"] > img, :root a[href^="https://join.virtualtaboo.com/track/"], :root [id^="ad_sky"], :root #kt_player > a[target="_blank"], :root a[href^="http://bongacams.com/track?"], :root [href^="http://mypillow.com/"] > img, :root [href="https://ourgoldguy.com/contact/"] img, :root [href="https://www.masstortfinancing.com/"] > img, :root [href="https://jdrucker.com/gold"] > img, :root [href^="https://ad.admitad.com/"], :root [href^="https://mypillow.com/"] > img, :root [data-testid="ad_testID"], :root a[href^="http://handgripvegetationhols.com/"], :root [class^="amp-ad-"], :root a[href^="http://tc.tradetracker.net/"] > img, :root [data-ez-name], :root a[href^="https://black77854.com/"], :root [data-revive-zoneid] > iframe, :root [data-testid="adBanner-wrapper"], :root [href^="https://mylead.global/stl/"] > img, :root [href^="https://mypatriotsupply.com/"] > img, :root a[href^="https://go.hpyjmp.com"], :root [href^="https://mystore.com/"] > img, :root a[href^="https://witnessjacket.com/"], :root [data-mobile-ad-id], :root a[href^="https://fc.lc/ref/"], :root [data-adshim], :root topadblock, :root a[href^="//s.zlinkd.com/"], :root a[href^="https://bs.serving-sys.com"], :root [href^="https://goldcometals.com/clk.trk"], :root [data-desktop-ad-id], :root [href^="https://www.cloudways.com/en/?id"], :root a[href^="https://www.liquidfire.mobi/"], :root .grid > .container > #aside-promotion, :root DFP-AD, :root [id^="ad_slider"], :root [data-adbridg-ad-class], :root a[href^="https://linkboss.shop/"], :root [data-adblockkey], :root a[href^="https://go.cmtaffiliates.com/"], :root [href^="https://optimizedelite.com/"] > img, :root [data-name="adaptiveConstructorAd"], :root [onclick*="content.ad/"], :root [data-ad-manager-id], :root AMP-AD, :root [data-ad-cls], :root a[href^="https://6-partner.com/"], :root [href^="https://affiliate.fastcomet.com/"] > img, :root a[href^="https://go.mnaspm.com/"], :root [class^="adDisplay-module"], :root AD-SLOT, :root #kt_player > div[style="position: absolute; inset: 0px; z-index: 170;"], :root [data-freestar-ad][id], :root a[href^="https://go.xxxjmp.com"], :root #leader-companion > a[href], :root a[href^="http://www.adultdvdempire.com/?partner_id="][href*="&utm_"], :root [data-ad-module], :root a[href^="http://partners.etoro.com/"], :root a[href^=" https://www.friendlyduck.com/AF_"], :root a[href*="/jump/next.php?r="], :root app-advertisement, :root a[href^="https://getmatchedlocally.com/"], :root a[href^="https://clickins.slixa.com/"], :root [class^="div-gpt-ad"], :root a[href^="https://traffdaq.com/"], :root a[href^="https://cam4com.go2cloud.org/"], :root a[href^="http://li.blogtrottr.com/click?"], :root .ob_dual_right > .ob_ads_header ~ .odb_div { display: none !important; }</style></head>

<body>
  <div>
    <nav id="navbar" style="max-width: 190px; min-width: 80px; z-index: 10;">
      <ul class="navbar-items flexbox-col">
        <li class="navbar-logo flexbox-left" style="align-items: center; height: 80px;">
          <!--LOGO-->
          <img style="width: 80px; height: 80px;" src="images/img/OIG1.jpg" alt="Home Icon">
        </li>
        <li class="navbar-item flexbox-left">
          <a class="navbar-item-inner flexbox-left">
            <div class="navbar-item-inner-icon-wrapper flexbox">
              <!--SEARCH-->
              <img style="width: 20px; height: 20px;" src="images/navbar/search.png" alt="Home Icon">
            </div>
            <span class="link-text" style="color: #ffff">Search</span>
          </a>
        </li>
        <li class="navbar-item flexbox-left">
          <a class="navbar-item-inner flexbox-left" href="home.php">
            <div class="navbar-item-inner-icon-wrapper flexbox">
              <!--HOME-->
              <img style="width: 20px; height: 20px;" src="images/navbar/home.png" alt="Home Icon">
            </div>
            <span class="link-text" style="color: #ffff">Home</span>
          </a>
        </li>
        <li class="navbar-item flexbox-left">
          <a class="navbar-item-inner flexbox-left" href="fandom.php">
            <div class="navbar-item-inner-icon-wrapper flexbox">
              <!--NEWS-->
              <img style="width: 20px; height: 20px;" src="images/navbar/news.png" alt="Home Icon">
            </div>
            <span class="link-text" style="color: #ffff">Fandom</span>
          </a>
        </li>
        <li class="navbar-item flexbox-left">
          <a class="navbar-item-inner flexbox-left" href="anime.php">
            <div class="navbar-item-inner-icon-wrapper flexbox">
              <!--ANIME-->
              <img style="width: 20px; height: 20px;" src="images/navbar/anime.png" alt="Home Icon">
            </div>
            <span class="link-text" style="color: #ffff">Anime</span>
          </a>
        </li>
        <li class="navbar-item flexbox-left">
          <a class="navbar-item-inner flexbox-left" href="game.php">
            <div class="navbar-item-inner-icon-wrapper flexbox">
              <!--GAME-->
              <img style="width: 20px; height: 20px;" src="images/navbar/game.png" alt="Home Icon">
            </div>
            <span class="link-text" style="color: #ffff">Game</span>
          </a>
        </li>
        <!-- Additional navbar items -->
        
      </ul>
    </nav>

    <!-- Main -->
    <main id="main" class="flexbox-col">
      <div id="row" style="display: flex; text-align: center; margin-top: 0%;">
        <div class="inner-column" style="padding: 0px; width: 20%; margin-left: 30%; margin-top: 0%; pointer-events: none;">
          <img src="images/navbar/new-wiki.png" class="customButton centered-image" data-index="0" alt="" style="width: 20%; height: 50%; margin-top: 12%; display: none;">
          <form class="uploadForm" enctype="multipart/form-data" style="display: none;">
            <input type="file" class="fileInput" data-index="0" accept="image/*" style="display: none;">
          </form>
          <div class="imageContainer centered-image" data-index="0" style="width: 90%; height: 90%; margin-top: 6%; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bot-left-radius: 0px; border-bot-right-radius: 0px;"><img src="./uploaded_images/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg" style="width: 100%; height: 100%; border-top-left-radius: 10px; border-top-right-radius: 10px;"></div>
        </div>
        <div>
          <ul style="display: flex; align-items: center; justify-content: center; height: 70%;">
            <li>
              <h2 id="textTitle" style="margin-top: 10%; font-size: 30px; display: block; width: 100%; margin-left: 30px; border: none;" contenteditable="false">Dragon Ball Z</h2>
            </li>
          </ul>
          <ul>
            <li>
              <a id="textList" style="font-size: 12px; display: block; width: 92%; margin-left: 30px; border: none;" contenteditable="false">Don</a>
            </li>
          </ul>
        </div>
        <button class="heart-button" id="favoriteButton" style="display: none;">
          <svg style="outline: none;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path></svg>
        </button>
        <div class="favorite-message" id="favoriteMessage">Salvata wiki tra i preferiti</div>
      </div>

      <div id="row" style="display: flex; margin-top: 10%;">
        <div id="column-suggested" class="column-container" style="width: 25%; margin-left: 10%; margin-top: 0%;">
          <div class="inner-column" style="padding: 0px; margin-top: 0%;">
            <img src="images/img/adBlocker.png" alt="" class="centered-image" id="adblock-warning" style="border-radius: 10px; display: none;">
            <img src="images/img/logo.jpg" alt="" class="centered-image" id="ads" style="border-radius: 10px; display: block;">
          </div>
          <div class="inner-column" style="padding: 0px; margin-top: 5%; pointer-events: none;">
            <img src="images/navbar/new-wiki.png" class="customButton centered-image" data-index="1" alt="" style="width: 20%; height: 100%; display: none;">
            <form class="uploadForm" enctype="multipart/form-data" style="display: none;">
                <input type="file" class="fileInput" data-index="1" accept="image/*" style="display: none;">
            </form>
            <div class="imageContainer" data-index="1" style="border-top-left-radius: 10px; border-top-right-radius: 10px; border-bot-left-radius: 0px; border-bot-right-radius: 0px;"><img src="./uploaded_images/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg" style="width: 100%; height: 100%; border-top-left-radius: 10px; border-top-right-radius: 10px;"></div>
          </div>
          <div class="inner-column" style="margin-top: 0%; border-top-left-radius: 0px; border-top-right-radius: 0px;">
            <h2 id="animeI" style="display: block;">Info Anime</h2>
            <h2 id="gameI" style="display: none;">Info Game</h2>
            <ul>
              <li>
                <a id="description" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="false">
                  Super cali fragilistichespiralidoso</a>
              </li>
            </ul>
          </div>
        </div>

        <div id="anime" style="display: block; width: 100%; margin-right: 6%; text-align: center;">
          <div id="row" style="display: flex; margin-top: 0%; background-color: rgba(0, 0, 0, 0);">
            <div id="column-news" class="column-container" style="width: 55%; margin-left: 5%; margin-right: 6%; text-align: center;">
              <div class="inner-column" style="margin-top: 0%; padding: 10px; text-align: center; display: flex; justify-content: center;">
                  <div style="margin-left: 0px;">
                      <a id="collapseFirst">FORUM</a>
                  </div>
              </div>
              <div id="Forum">
                  <button id="new-comment">+</button>
              <div class="container-commento"></div><div class="container-commento"></div></div>
            </div>

            <div id="column-all" class="column-container" style="width: 35%; margin-top: 0%;">
              <div class="inner-column" style="margin-top: 0%; padding: 10px; text-align: center;">
                  <a id="collapseBegginerGuide">VIDEOS</a>
              </div>
              <div>
              <div id="begginerGuide" style="height: 100%; overflow-y: auto;">
                <div class="inner-column" style="margin-top: 5%; padding: 0px; height: 40%; margin-right: 10px;">
                  <div class="video-container" id="videoContainer1" style="display: block;">
                    <iframe id="video1" src="https://www.youtube.com/embed/cZnLYel9stA?si=v6cnV2Bk4BIzzs_p" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" style="display: block;"></iframe>
                    <input type="text" class="video-input" id="urlInput1" placeholder="Inserisci URL del video" style="display: none;" disabled="">
                  </div>
                  <ul>
                    <li>
                      <a id="textList1" style="font-size: 12px; display: block; width: 80%; margin-left: 10%; border: none;" contenteditable="false">
                        Inserisci qui titolo video
                      </a><br>
                    </li>
                  </ul>
                </div>

                <div class="inner-column" style="margin-top: 5%; padding: 0px; height: 40%; margin-right: 10px;">
                  <div class="video-container" id="videoContainer2" style="display: block;">
                    <iframe id="video2" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                    <input type="text" class="video-input" id="urlInput2" placeholder="Inserisci URL del video" disabled="">
                  </div>
                  <ul>
                    <li>
                      <a id="textList2" style="font-size: 12px; display: block; width: 80%; margin-left: 10%; border: none;" contenteditable="false">
                        Inserisci qui titolo video
                      </a><br>
                    </li>
                  </ul>
                </div>

                <div class="inner-column" style="margin-top: 5%; padding: 0px; height: 40%; margin-right: 10px;">
                  <div class="video-container" id="videoContainer3" style="display: block;">
                    <iframe id="video3" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                    <input type="text" class="video-input" id="urlInput3" placeholder="Inserisci URL del video" disabled="">
                  </div>
                  <ul>
                    <li>
                      <a id="textList3" style="font-size: 12px; display: block; width: 80%; margin-left: 10%; border: none;" contenteditable="false">
                        Inserisci qui titolo video
                      </a><br>
                    </li>
                  </ul>
                </div>

                <div class="inner-column" style="margin-top: 5%; padding: 0px; height: 40%; margin-right: 10px;">
                  <div class="video-container" id="videoContainer4" style="display: block;">
                    <iframe id="video4" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                    <input type="text" class="video-input" id="urlInput4" placeholder="Inserisci URL del video" disabled="">
                  </div>
                  <ul>
                    <li>
                      <a id="textList4" style="font-size: 12px; display: block; width: 80%; margin-left: 10%; border: none;" contenteditable="false">
                        Inserisci qui titolo video
                      </a><br>
                    </li>
                  </ul>
                </div>
                </div>
              </div>
            </div>
        </div>
        </div>
          
        <div id="game" style="display: none; width: 100%; margin-right: 6%; text-align: center;">
          <div id="row" style="display: flex; margin-top: 0%; background-color: rgba(0, 0, 0, 0);">
            <div id="column-news" class="column-container" style="width: 55%; margin-left: 5%; margin-right: 6%; text-align: center;">
              <div class="inner-column" style="margin-top: 0%; padding: 10px; text-align: center; justify-content: center; width: 100%; overflow-x: auto;">
                <div style="display: flex;">
                <div class="collapse" id="collapseFirst" style="margin-left: 0px; display: none;">
                    <ul>
                      <li>
                        <a id="collapseFirst" onclick="toggleDiv('first', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="false">
                          Nome scheda1
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseSecond" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                      <a id="collapseSecond" onclick="toggleDiv('second', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="false">
                          Nome scheda2
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseThird" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseThird" onclick="toggleDiv('third', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="false">
                          Nome scheda3
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseFour" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseFour" onclick="toggleDiv('four', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="false">
                          Nome scheda4
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseFive" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseFive" onclick="toggleDiv('five', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="false">
                          Nome scheda5
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div style="display: flex;">
                  <div class="collapse" id="collapseSix" style="margin-left: 0%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseSix" onclick="toggleDiv('six', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="false">
                          Nome scheda6
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseSeven" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseSeven" onclick="toggleDiv('seven', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="false">
                          Nome scheda7
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseEight" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseEigth" onclick="toggleDiv('eight', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="false">
                          Nome scheda8
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseNine" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseNine" onclick="toggleDiv('nine', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="false">
                          Nome scheda9
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseTen" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseTen" onclick="toggleDiv('ten', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="false">
                          Nome scheda0
                        </a>
                      </li>
                    </ul>
                  <div id="extwaiokist" style="display:none" v="pdbbg" q="6c230d98" c="813.7" i="820" u="0.078" s="05202423" sg="svr_09102316-ga_05202423-bai_05072421" d="1" w="false" e="" a="2" m="BMe=" vn="1gtra"><div id="extwaigglbit" style="display:none" v="pdbbg" q="6c230d98" c="813.7" i="820" u="0.078" s="05202423" sg="svr_09102316-ga_05202423-bai_05072421" d="1" w="false" e="" a="2" m="BMe="></div></div></div>
                </div>
              </div>

              <div id="first" class="card-content" style="display: none;"></div>
              <div id="second" class="card-content" style="display: none;"></div>
              <div id="third" class="card-content" style="display: none;"></div>
              <div id="four" class="card-content" style="display: none;"></div>
              <div id="five" class="card-content" style="display: none;"></div>
              <div id="six" class="card-content" style="display: none;"></div>
              <div id="seven" class="card-content" style="display: none;"></div>
              <div id="eight" class="card-content" style="display: none;"></div>
              <div id="nine" class="card-content" style="display: none;"></div>
              <div id="ten" class="card-content" style="display: none;"></div>
            </div>

            <div id="column-all" class="column-container" style="width: 35%; margin-top: 0%;">
              <div class="inner-column" style="margin-top: 0%; padding: 10px; text-align: center;">
                <a id="collapseVideo" onclick="toggleVideo()">VIDEOS</a>
                <a id="decollapseForum" onclick="toggleForum()" style="margin-left: 20px;">FORUM</a>
              </div>
              <div>
              <div id="video" style="height: 100%; overflow-y: auto;">

                <div class="inner-column" style="margin-top: 5%; padding: 0px; height: 40%; margin-right: 10px;">
                  <div class="video-container" id="videoContainer5" style="display: block;">
                    <iframe id="video5" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                    <input type="text" class="video-input" id="urlInput5" placeholder="Inserisci URL del video" disabled="">
                  </div>
                  <ul>
                    <li>
                      <a id="textList5" style="font-size: 12px; display: block; width: 80%; margin-left: 10%; border: none;" contenteditable="false">
                        Inserisci qui titolo video
                      </a><br>
                    </li>
                  </ul>
                </div>

                <div class="inner-column" style="margin-top: 5%; padding: 0px; height: 40%; margin-right: 10px;">
                  <div class="video-container" id="videoContainer6" style="display: block;">
                    <iframe id="video6" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                    <input type="text" class="video-input" id="urlInput6" placeholder="Inserisci URL del video" disabled="">
                  </div>
                  <ul>
                    <li>
                      <a id="textList6" style="font-size: 12px; display: block; width: 80%; margin-left: 10%; border: none;" contenteditable="false">
                        Inserisci qui titolo video
                      </a><br>
                    </li>
                  </ul>
                </div>

                <div class="inner-column" style="margin-top: 5%; padding: 0px; height: 40%; margin-right: 10px;">
                  <div class="video-container" id="videoContainer7" style="display: block;">
                    <iframe id="video7" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                    <input type="text" class="video-input" id="urlInput7" placeholder="Inserisci URL del video" disabled="">
                  </div>
                  <ul>
                    <li>
                      <a id="textList7" style="font-size: 12px; display: block; width: 80%; margin-left: 10%; border: none;" contenteditable="false">
                        Inserisci qui titolo video
                      </a><br>
                    </li>
                  </ul>
                </div>

                <div class="inner-column" style="margin-top: 5%; padding: 0px; height: 40%; margin-right: 10px;">
                  <div class="video-container" id="videoContainer8" style="display: block;">
                    <iframe id="video8" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                    <input type="text" class="video-input" id="urlInput8" placeholder="Inserisci URL del video" disabled="">
                  </div>
                  <ul>
                    <li>
                      <a id="textList8" style="font-size: 12px; display: block; width: 80%; margin-left: 10%; border: none;" contenteditable="false">
                        Inserisci qui titolo video
                      </a><br>
                    </li>
                  </ul>
                </div>
              </div>
              <div id="forum" style="display: none;">
                <button id="new-comment">+</button>
              </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </main>

    <div class="fixed-card" style="max-height: 800px; display: none;">
      <h3 style="text-align: center;">Menu WIKI</h3>
      <p style="font-size: 12px; text-align: center;">Seleziona da qui le modifiche che vuoi applicare alla pagina</p>
      <p style="font-size: 12px; text-align: center;"> Niente ---- ----- Anime ----- ---- Game</p>
      <input type="range" id="typeSlider" min="-1" max="1" value="-1" onchange="toggleOptions()">
      <div id="cardSlider" style="display: none;">
        <label style="font-size: 12px;" for="cardRange">Numero di schede desiderato: <span id="cardValue">0</span></label>
        <input type="range" id="cardRange" min="0" max="10" value="0" oninput="updateSlider()">
      </div>
      <div id="contentSlidersContainer" style="display: none; max-height: 230px; overflow-y: auto;">
        <!-- Slider dei contenuti verranno generati qui -->
      </div>
        <div>
          <a style="max-height: 76px; font-size: 12px; margin-top: 10px;" href="#" id="chooseImageLink">Choose Background Image</a>
          <input type="file" id="backgroundImageInput" style="display: none;" accept="image/*">
        </div>
      <a href="javascript:void(0);" id="saveButton" style="display: block; pointer-events: auto; max-height: 76px; font-size: 12px; margin-top: 10px;">Salva Wiki</a>
      <!-- Aggiungi il nuovo pulsante per caricare l'immagine di sfondo -->
      <div>
  </div>

    </div>

    <div id="newCommentModal" class="modal" style="display: none; position: fixed; z-index: 1; left: 0;	top: 0;	width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.4);">
      <div class="modal-content">
        <form action="back-wiki.php" method="post">            
          <input id="input-email" type="hidden" name="email" value="">
          <input id="input-wiki" type="hidden" name="wiki" value="">
          <span class="close">×</span>
          <h2>Aggiungi nuovo commento</h2>
          <textarea name="commit" id="text-commento" cols="60" rows="20"></textarea>
          <!-- Pulsanti per confermare o annullare la cancellazione -->
          <button type="submit" id="confirm-commit">Conferma</button>
          <button type="button" id="cancel-commit">Annulla</button>
        </form>
      </div>
    </div>
  </div>

  <script src="scripts/hoi4.js"></script>
  <script src="scripts/new-wikiSettings.js"></script>
  <script src="wikiSettings.js"></script>
  <script src="addImm.js"></script>
  <script src="menuWiki.js"></script>
  <script>
    // Funzione per mostrare l'input e aggiornare il video
    function showInputAndSetVideo(containerId, inputId, iframeId) {
      const container = document.getElementById(containerId);
      const input = document.getElementById(inputId);
      const iframe = document.getElementById(iframeId);

      // Mostra l'input per inserire l'URL
      input.style.display = 'block';
      input.focus();

      // Quando l'utente preme "Enter" nell'input, aggiorna l'iframe con l'URL del video
      input.addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
          const url = input.value;
          const videoId = url.split('v=')[1]?.split('&')[0] || url.split('youtu.be/')[1];
          if (videoId) {
            iframe.src = `https://www.youtube.com/embed/${videoId}`;
            iframe.style.display = 'block';
            input.style.display = 'none';
          } else {
            alert('Inserisci un URL di YouTube valido.');
          }
        }
      });
    }

    // Event listeners per mostrare l'input quando si clicca sul container
    document.getElementById('videoContainer1').addEventListener('click', () => showInputAndSetVideo('videoContainer1', 'urlInput1', 'video1'));
    document.getElementById('videoContainer2').addEventListener('click', () => showInputAndSetVideo('videoContainer2', 'urlInput2', 'video2'));
    document.getElementById('videoContainer3').addEventListener('click', () => showInputAndSetVideo('videoContainer3', 'urlInput3', 'video3'));
    document.getElementById('videoContainer4').addEventListener('click', () => showInputAndSetVideo('videoContainer4', 'urlInput4', 'video4'));
    document.getElementById('videoContainer5').addEventListener('click', () => showInputAndSetVideo('videoContainer5', 'urlInput5', 'video5'));
    document.getElementById('videoContainer6').addEventListener('click', () => showInputAndSetVideo('videoContainer6', 'urlInput6', 'video6'));
    document.getElementById('videoContainer7').addEventListener('click', () => showInputAndSetVideo('videoContainer7', 'urlInput7', 'video7'));
    document.getElementById('videoContainer8').addEventListener('click', () => showInputAndSetVideo('videoContainer8', 'urlInput8', 'video8'));
  </script>

<script>
    function toggleVideo() {
        document.getElementById('video').style.display = 'block';
        document.getElementById('forum').style.display = 'none';
    }

    function toggleForum() {
        document.getElementById('video').style.display = 'none';
        document.getElementById('forum').style.display = 'block';
    }
</script>



</body></html>