<!DOCTYPE html>
<html class="csstransforms csstransforms3d csstransitions" lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Orange Bank, la banque sur mobile ouverte à tous | Orange Bank" />
    <meta property="og:description" content="La banque 100% digitale. Profitez de nos produits de prêt et d&#039;épargne attractifs et accessibles instantannément en quelques clics." />
    <meta property="og:url" content="https://orangebank.ci/" />
    <meta property="og:site_name" content="Orange Bank" />
    <meta property="og:image" content="https://orangebank.ci/wp-content/uploads/2020/05/20171101143911Orange_Bank_2017-1.png" />
    <meta property="og:image:secure_url" content="https://orangebank.ci/wp-content/uploads/2020/05/20171101143911Orange_Bank_2017-1.png" />
    <meta property="og:image:width" content="212" />
    <meta property="og:image:height" content="212" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content="Orange Bank Africa">
    <title>Orange Bank Africa - Portail Applicatif</title>
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link href="{{asset('/orangemetro_fichiers/css.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('/orangemetro_fichiers/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/orangemetro_fichiers/bootstrap_002.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/orangemetro_fichiers/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/orangemetro_fichiers/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/orangemetro_fichiers/font-awesome/css/font-awesome.css')}}" type="text/css">

    <!-- Scripts are at the bottom of the page -->
</head>
<body>

@if(!Auth::check())
  <script>window.location = "/portail/web/";</script>
@else

    <!-- BACKGROUND -->
    <img src="{{asset('/orangemetro_fichiers/background-1.jpg')}}" class="background bgwidth" alt="" style="width: 100%;" >
    <!-- /BACKGROUND -->

    <!-- LOGO -->
    <div class="header" wfd-id="131">
        <h1>
            <a data-scroll="scrollto" href="#start">
                <img src="{{asset('/orangemetro_fichiers/headerlogo.png')}}" class="header-logo" alt="" width="35" height="35">
                Portail Applicatif
            </a>
            |
            <a href="{{ url('signout') }}" class="nav-link">Déconnexion</a>
        </h1>
    </div>
    <!-- /LOGO -->


    <section id="content" style="width: 100%;" wfd-id="8">

        <section class="clearfix section isotope" style="position: relative; overflow: hidden; width: 816px; margin-top: 111.5px;" id="gallery" wfd-id="47">
            {{-- <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                <a href="{{ url('annuairedata') }}" data-lightbox="mlightboxvideo" > Annuaire
                    <img src="orangemetro_fichiers/ico_annuaire2.jpeg" alt="" class="bgwidth">
                </a>
            </div>

            <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                <a href="{{ url('helpdesk') }}" target="_blank" data-lightbox="mlightboxvideo" > HelpDesk SYSAID

                    <img src="orangemetro_fichiers/SysAid.png" alt="" class="bgwidth">
                </a>
            </div>

            <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                <a href="https://orangebank.ci/alerte-ethique/" target="_blank" data-lightbox="mlightboxvideo"> Alerte Ethique

                    <img src="orangemetro_fichiers/ico_alert.png" alt="" class="bgwidth">
                </a>
            </div>

            <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                <a href="https://ehrm.login.em2.oraclecloud.com" data-lightbox="mlightboxvideo" > HCM

                    <img src="orangemetro_fichiers/hcm.png" alt="" class="bgwidth">
                </a>
            </div> --}}

        </section>

        <section class="clearfix section isotope" style="" id="gallery" wfd-id="47">

            <h3 class="block-title">Bonjour {{ Str::before(Auth::user()->name, ' [OBA CI]') }}</h3>
            @foreach ( $applications as $application)
                @if($application['codeApp'] == 'all' )
                    <div class="col-6 tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                        <a href="{{ url($application['urlApp']) }}" data-lightbox="mlightboxvideo" > {{ $application['nomApp'] }}
                            <img src="orangemetro_fichiers/{{ $application['imageApp'] }}" alt="" class="bgwidth">
                        </a>
                    </div>
                @endif
                @if(Str::contains(Auth::user()->apps, $application['codeApp']))
                    <div class="col-6 tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                        <a href="{{ url($application['urlApp']) }}" data-lightbox="mlightboxvideo" > {{ $application['nomApp'] }}
                            <img src="orangemetro_fichiers/{{ $application['imageApp'] }}" alt="" class="bgwidth">
                        </a>
                    </div>
                @endif
            @endforeach
        </section>

    </section>

        <div class="fit-vids-style" id="fit-vids-style" style="display: none;" wfd-id="0">­<style>.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></div><script src="orangemetro_fichiers/jquery-latest.js" type="text/javascript"></script> <!-- jQuery Library -->
        <script src="orangemetro_fichiers/respond.js" type="text/javascript"></script> <!-- Responsive Library -->
        <script src="orangemetro_fichiers/jquery.js" type="text/javascript"></script> <!-- Isotope Layout Plugin -->
        <script src="orangemetro_fichiers/jquery_003.js" type="text/javascript"></script> <!-- jQuery Mousewheel -->
        <script src="orangemetro_fichiers/jquery_002.js" type="text/javascript"></script> <!-- malihu Scrollbar -->
        <script src="orangemetro_fichiers/tileshow.js" type="text/javascript"></script> <!-- Metromega Custom Tileshow Plugin -->
        <script src="orangemetro_fichiers/mlightbox.js" type="text/javascript"></script> <!-- Metromega Custom Lightbox Plugin -->
        <script src="orangemetro_fichiers/jquery_004.js" type="text/javascript"></script> <!-- jQuery TouchSwipe Plugin -->
        <script src="orangemetro_fichiers/jquery_005.js" type="text/javascript"></script> <!-- jQuery fitVids Plugin -->
        <script src="orangemetro_fichiers/lockscreen.js" type="text/javascript"></script> <!-- Metromega Lockscreen -->
        <script src="orangemetro_fichiers/bootstrap.js" type="text/javascript"></script> <!-- Bootstrap Library -->

        <script src="orangemetro_fichiers/script.js" type="text/javascript"></script> <!-- Metromega Script -->

@endif
</body>
</html>

