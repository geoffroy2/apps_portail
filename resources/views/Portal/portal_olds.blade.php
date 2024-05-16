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

        <!-- MAIN CONTENT SECTION -->
    <section id="content" style="width: 5252px;" wfd-id="8">

        <section class="clearfix section isotope" id="gallery" style="position: relative; overflow: hidden; width: 1360px; margin-top: 111.5px;" wfd-id="47">


            {{-- @foreach ( $applications as $application)
                @if ($application->codeApp == null || $application->codeApp == "")
                    <div class="col-6 tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                        <a href="{{ url($application->urlApp) }}" data-lightbox="mlightboxvideo" > {{ $application->nomApp }}
                            <img src="orangemetro_fichiers/{{ $application->imageApp }}" alt="" class="bgwidth">
                        </a>
                    </div>
                @else
                    @if(Str::contains(Auth::user()->apps, $application->codeApp))
                        <div class="col-6 tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                            <a href="{{ url($application->urlApp) }}" data-lightbox="mlightboxvideo" > {{ $application->nomApp }}
                                <img src="orangemetro_fichiers/{{ $application->imageApp }}" alt="" class="bgwidth">
                            </a>
                        </div>
                    @endif

                @endif
            @endforeach --}}


            <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
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
            </div>

            <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                <a class="link" href="{{ url('habilitation') }}" target="_blank"  data-lightbox="mlightboxvideo" style="font-size: 28px;">Fiche d'habilitation
                    <img src="orangemetro_fichiers/habilitie_app.jfif" alt="" class="bgwidth">
                </a>
            </div>

            @if(Str::contains(Auth::user()->name, 'Donald Boris') )
                <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                    <a class="link" href="{{ url('service-client') }}" target="_blank"  data-lightbox="mlightboxvideo" > Service Client
                        <img src="orangemetro_fichiers/ico_customer.png" alt="" class="bgwidth">
                    </a>
                </div>

                <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                    <a class="link" href="{{ url('envoi-sms') }}" target="_blank"  data-lightbox="mlightboxvideo" > Sms de masse

                        <img src="orangemetro_fichiers/sms-campaign.png" alt="" class="bgwidth">
                    </a>
                </div>
            @endif

            <!-- /SECTION TILES -->

        </section>

        <!-- SECTION -->
        <section class="clearfix section isotope" id="start" style="position: relative; overflow: hidden; width: 816px; margin-top: 111.5px;" wfd-id="110">

            <!-- SECTION TITLE -->
            <h3 class="block-title">Bonjour {{ Str::before(Auth::user()->name, ' [OBA CI]') }}
            </h3>

            @if(Str::contains(Auth::user()->apps, 'envoi-sms'))
                <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                    <a class="link" href="{{ url('sms-app') }}" target="_blank"  data-lightbox="mlightboxvideo" > Sms

                        <img src="orangemetro_fichiers/ico_email.png" alt="" class="bgwidth">
                    </a>

                </div>
            @endif

            @if(Str::contains(Auth::user()->apps, 'tiktakvip'))
                <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">

                    <a href="{{ url('tiktakvip') }}"   target="_blank" data-lightbox="mlightboxvideo" > Offre Tik Tak VIP

                        <img src="orangemetro_fichiers/tiktakvip.png" alt="" class="bgwidth">
                    </a>

                </div>
            @endif

            @if(Str::contains(Auth::user()->apps, 'stmt'))
                <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">

                    <a href="{{ url('stmt-app') }}"   target="_blank" data-lightbox="mlightboxvideo" > eStatement
                        <img src="orangemetro_fichiers/1055644.png" alt="" class="bgwidth">
                    </a>

                </div>
            @endif

            @if(Str::contains(Auth::user()->apps, 'grc'))
                <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                    <a href="{{ url('grc') }}"   target="_blank" data-lightbox="mlightboxvideo" >
                        <img src="orangemetro_fichiers/logo_grcapp.png" alt="" class="bgwidth">
                    </a>
                </div>
            @endif

            @if(Str::contains(Auth::user()->apps, 'credit-distri'))
                <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                    <a href="{{ url('credit-distri') }}"   target="_blank" data-lightbox="mlightboxvideo" > Rapicred
                        <img src="orangemetro_fichiers/OM2.png" alt="" class="bgwidth">
                    </a>
                </div>
            @endif

            @if(Str::contains(Auth::user()->apps, 'reclam'))
                <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                    <a href="https://reclamsolutions.oba/" data-lightbox="mlightboxvideo" > Réclamation
                        <img src="orangemetro_fichiers/ico_customer.png" alt="" class="bgwidth">
                    </a>
                </div>
            @endif

            @if(Str::contains(Auth::user()->apps, 'freez'))
                <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                    <a href="{{ url('freez') }}"   target="_blank" data-lightbox="mlightboxvideo" > Freeze
                        <img src="orangemetro_fichiers/freez-image.png" alt="" class="bgwidth">
                    </a>
                </div>
            @endif

            @if(Str::contains(Auth::user()->apps, 'recouv'))
                <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                <a class="link" href="{{ url('recouvrement') }}" target="_blank"  data-lightbox="mlightboxvideo" >Recouvrement
                    <img src="orangemetro_fichiers/ico_recouvrement.png" alt="" class="bgwidth">
                </a>
                </div>
            @endif

            @if(Str::contains(Auth::user()->apps, 'recouv-'))
                <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                <a class="link" href="{{ url('impayedata-todo') }}" target="_blank"  data-lightbox="mlightboxvideo" >Recouvrement App
                    <img src="orangemetro_fichiers/ico_recouvrement.png" alt="" class="bgwidth">
                </a>
                </div>
            @endif

            @if(Str::contains(Auth::user()->apps, 'subform'))
                <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                    <a class="link" href="{{ url('subform') }}" target="_blank"  data-lightbox="mlightboxvideo" >Call center
                        <img src="orangemetro_fichiers/call-centre-vectar.jpg" alt="" class="bgwidth">
                    </a>
                </div>
            @endif

            @if(Str::contains(Auth::user()->apps, 'cluster'))
                <div class="tile video imagetile icon-fadein w2 h2 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(272px, 160px, 0px);" wfd-id="54">
                <a class="link" href="{{ url('cluster') }}" target="_blank"  data-lightbox="mlightboxvideo" >Cluster Back
                    <img src="orangemetro_fichiers/cluster.png" alt="" class="bgwidth">
                </a>
                </div>
            @endif

        </section>
        <!-- /SECTION -->

 <!-- SECTION -->
 <section class="clearfix section isotope" id="services" style="position: relative; overflow: hidden; width: 544px; margin-top: 111.5px;" wfd-id="101">


 @if(Str::contains(Auth::user()->name, 'Donald Boris'))
<!-- SECTION TILES -->
<div class="tile reveal-slide transparent title-indent icon-flip w2 h1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 24px, 0px);" wfd-id="108">
    <div class="reveal white w2 h1" wfd-id="109">
        <div class="text">
            <p>
                <span class="text-medium">Application 1</span><br>
                Lorem ipsum dolor sit amet, consectetuer
                adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                sociis natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus.
            </p>
        </div>
    </div>
    <a class="link" href="#">
        <i class="fa fa-windows"></i>
        <p class="title">Application 1</p>
    </a>
</div>

<div class="tile reveal-slide transparent title-indent icon-flip w2 h1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 160px, 0px);" wfd-id="106">
    <div class="reveal white w2 h1" wfd-id="107">
        <div class="text">
            <p>
                <span class="text-medium">Application 2</span><br>
                Lorem ipsum dolor sit amet, consectetuer
                adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                sociis natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus.
            </p>
        </div>
    </div>
    <a class="link" href="#">
        <i class="fa fa-keyboard-o"></i>
        <p class="title">Application 2</p>
    </a>
</div>

<div class="tile reveal-slide transparent title-indent icon-flip w2 h1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 160px, 0px);" wfd-id="106">
    <div class="reveal white w2 h1" wfd-id="107">
        <div class="text">
            <p>
                <span class="text-medium">Application 3</span><br>
                Lorem ipsum dolor sit amet, consectetuer
                adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                sociis natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus.
            </p>
        </div>
    </div>
    <a class="link" href="#">
        <i class="fa fa-book"></i>
        <p class="title">Application 3</p>
    </a>
</div>

<div class="tile reveal-slide transparent title-indent icon-flip w2 h1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 296px, 0px);" wfd-id="104">
    <div class="reveal white w2 h1" wfd-id="105">
        <div class="text">
            <p>
                <span class="text-medium">Application 4</span><br>
                Lorem ipsum dolor sit amet, consectetuer
                adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                sociis natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus.
            </p>
        </div>
    </div>
    <a class="link" href="#">
        <i class="fa fa-laptop"></i>
        <p class="title">Application 4</p>
    </a>
</div>

<!-- /SECTION TILES -->
@endif
</section>
<!-- /SECTION -->

            <!-- SECTION -->
            <section class="clearfix section isotope" id="contactform" style="position: relative; overflow: hidden; width: 408px; margin-top: 111.5px;" wfd-id="11">

                <!-- SECTION TITLE -->
                <h3 class="block-title"><a class="link" href="{{ url('signout') }}">Déconnexion</a></h3>
                <!-- /SECTION TITLE -->

            </section>
            <!-- /SECTION -->

        </section>
        <!-- /MAIN CONTENT SECTION -->

        <!-- LOCKSCREEN -->
        <section class="mlightbox" id="lockscreen" wfd-id="6" style="display: none;">
            <div id="lockscreen-content" wfd-id="7">
                <img src="orangemetro_fichiers/logo.png" id="locklogo" alt="Metromega" style="display: inline;" width="140" height="109">
                <br><br>
                <img src="orangemetro_fichiers/preloader.gif" id="lockloader" alt="Loading.." style="display: none;">
            </div>
        </section>
        <!-- /LOCKSCREEN -->



        <!-- PRELOADER -->
        <section class="mlightbox" id="loader" wfd-id="3">
            <a href="#">
                <img src="orangemetro_fichiers/preloader.gif" alt="Loading..">
            </a>
        </section>
        <!-- /PRELOADER -->

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

