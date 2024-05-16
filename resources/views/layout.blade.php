<!DOCTYPE html>
<html lang="fr">
<head>
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
  <title>Orange Bank</title>
  <link rel="preload" href="{{asset('/dists/fonts/HelvNeue55_W1G.woff2')}}"
        as="font" type="font/woff2" crossorigin="anonymous">
  <link rel="preload" href="/dist/fonts/HelvNeue75_W1G.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
  <link rel="preconnect" href="https://code.jquery.com" crossorigin="anonymous">
  <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin="anonymous">
  <link href="{{asset('/dist/css/orangeHelvetica.min.css')}}" rel="stylesheet">
  <link href="{{asset('/dist/css/orangeIcons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/dist/css/vendor/swiper.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('/dist/css/boosted.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('/dist/css/sample.css')}}" rel="stylesheet">
  <link rel="icon" href="https://orangebank.ci/wp-content/uploads/2020/05/cropped-500x500_favicon-192x192.png" sizes="192x192" />
  <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">

  <style>
    .table-bordered {
        border: 1px solid #dee2e6;
    }
    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
    }
    table {
        border-collapse: collapse;
    }
    tr,th,td{
        border: 1px solid #dee2e6;
    }
    .h3, h3 {
      font-size: 1rem!important;
    }
    ::placeholder{
      font-weight: normal!important;
    }
    th{
      font-size: 12px!important;
    }
  </style>
 </head>

 <body>
 <div class="skiplinks container-fluid">
    <a href="#main-nav" class="sr-only sr-only-focusable">Skip to main navigation</a>
    <a href="#main-carousel" class="sr-only sr-only-focusable">Skip to content</a>
    <a href="#footer" class="sr-only sr-only-focusable">Skip to footer</a>
  </div>


  <header role="banner">
      <nav role="navigation" id="mainNav" class="navbar navbar-dark bg-dark navbar-expand-md" aria-label="Main navigation">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{asset('/dist/img/logo.png')}}" class="d-inline-block align-bottom mr-3" alt="Back to homepage" title="Back to homepage" width="50" height="50" loading="lazy"/>
            <span class="h1 mb-0">Portail Applicatif</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#orange-navbar-collapse" aria-controls="orange-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse justify-content-between collapse" id="orange-navbar-collapse">
           
            <ul class="navbar-nav">
                
              @if(Auth::check())
                <li class="nav-item">
                 <a href="{{ url('dashboard') }}" class="nav-link">Accueil</a>
                </li>
                @if(Str::contains(Auth::user()->name, 'Donald Boris'))
                <li class="nav-item">
                  <a href="{{ url('users') }}" class="nav-link">Utilisateurs</a>
                </li>
                @endif

                <li class="nav-item">
                <a href="{{ url('signout') }}" class="nav-link">Sign Out</a>
                </li>
              @endif
              <li class="nav-item">
                  <a href="{{ url('annuairedata') }}" class="nav-link">Annuaire</a>
                </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
  

  <main role="main">
     @if(session('error'))
       <div class="alert alert-danger" role="alert">
         <p class="mb-3">{{ session('error') }}</p>
         @if(session('errorDetail'))
           <pre class="alert-pre border bg-light p-2"><code>{{ session('errorDetail') }}</code></pre>
         @endif
       </div>
     @endif

     @yield('content')

     <div class="modal fade" id="PreloadModal" data-keyboard="false" data-backdrop="static" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12" style="text-align: center">
                <img src="{{asset('dist/img/loading.gif')}}" style="width: 250px!important" alt="">
                <h3>Chargement en cours ...</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </main>
  <!-- Footer -->
  <footer class="o-footer" id="footer" role="contentinfo">
    <h2 class="sr-only">Site map & informations</h2>
    <div class="o-footer-top">
      <div class="container">
        <div class="row mb-0">
          <ul class="nav align-items-center">
            <li class="nav-item"><span class="nav-link">Suivez-nous:</span></li>
            <li class="nav-item"><a class="nav-link btn btn-social btn-twitter" href="#"><span class="sr-only">Twitter</span></a></li>
            <li class="nav-item"><a class="nav-link btn btn-social btn-facebook" href="#"><span class="sr-only">Facebook</span></a></li>
            <li class="nav-item"><a class="nav-link btn btn-social btn-instagram" href="#"><span class="sr-only">Instagram</span></a></li>
            <li class="nav-item"> <a class="nav-link btn btn-social btn-whatsapp" href="#"><span class="sr-only">Whatsapp</span></a></li>
            <li class="nav-item"><a class="nav-link btn btn-social btn-linkedin" href="#"><span class="sr-only">Linkedin</span></a></li>
          </ul>
        </div>
      </div>
    </div>
 
    <div class="o-footer-bottom">
      <div class="container">
        <div class="row mb-0">
          <ul class="nav">
            <li class="nav-item"><span class="nav-link">© Orange Bank 2020</span></li>
            <li class="nav-item"><a class="nav-link" href="https://orangebank.ci/cgu-tiktak">CGU Tik Tak</a></li>
            <li class="nav-item"><a class="nav-link" href="https://orangebank.ci/jobs/">Jobs</a></li>
            <li class="nav-item"><a class="nav-link" href="https://orangebank.ci/presse/" rel="noopener noreferrer">Presse</a></li>
            <li class="nav-item"><a class="nav-link" href="https://orangebank.ci/securite">Sécurité</a></li>
            <li class="nav-item"><a class="nav-link" href="https://orangebank.ci/wp-content/uploads/2020/07/Conditions-Générales-de-Banque-Orange-Bank-1.pdf" target="_blank" rel="noopener noreferrer">Brochure tarifaire</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{asset('/dist/jsoba/jquery-3.4.1.slim.min.js')}}"></script>
  <script src="/docs/4.5/dist/js/boosted.bundle.min.js"></script>
  <script src="{{asset('/dist/jsoba/swiper.min.js')}}"></script>
  <script>
    var swiper2 = new Swiper('#discovery-carousel', {
      // enable accessibility
      a11y: true,
      keyboard: {
        enabled: true,
        onlyInViewport: false
      },
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
  </script>


<script src="{{asset('/dist/jsoba/jquery.dataTables.min.js')}}"></script>


<script src="{{asset('/dist/js/boosted.min.js')}}"></script>
<script src="{{asset('dist/js/jquery.min.js')}}"></script>
@yield('javascript')

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

<script>

  $('#btnValid').click(function () {

      let msg     = $("#msg").val().length;
      let email   = $('#email').val().length;
      let fichier = $('#fichier').val().length;

      if(msg > 0 && email > 0 && fichier > 0){
        // Call Modal PreloadModal
        $('#PreloadModal').modal('show'); 
      }
  })

  $(document).ready(function() {
    $('#dataTable').DataTable({
      //"ordering": true,
      "order": [[ 3, "desc" ]],
        "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "Tout"]],
        "language": {
            "sEmptyTable":     "Aucune donnée disponible dans le tableau",
            "sInfo":           "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
            "sInfoEmpty":      "Affichage de l'élément 0 à 0 sur 0 élément",
            "sInfoFiltered":   "(filtré à partir de _MAX_ éléments au total)",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "Afficher _MENU_ éléments",
            "sLoadingRecords": "Chargement...",
            "sProcessing":     "Traitement...",
            "sSearch":         "Rechercher :",
            "sZeroRecords":    "Aucun élément correspondant trouvé",
            "oPaginate": {
                "sFirst":    "Premier",
                "sLast":     "Dernier",
                "sNext":     "Suivant",
                "sPrevious": "Précédent"
            },
            "oAria": {
                "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
            },
            "select": {
                "rows": {
                    "_": "%d lignes sélectionnées",
                    "0": "Aucune ligne sélectionnée",
                    "1": "1 ligne sélectionnée"
                }
            }
        },
    });

    $('#dataTableFilter').DataTable({
      //"ordering": true,
        "order": [[ 7, "desc" ]],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tout"]],
        "language": {
            "sEmptyTable":     "Aucune donnée disponible dans le tableau",
            "sInfo":           "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
            "sInfoEmpty":      "Affichage de l'élément 0 à 0 sur 0 élément",
            "sInfoFiltered":   "(filtré à partir de _MAX_ éléments au total)",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "Afficher _MENU_ éléments",
            "sLoadingRecords": "Chargement...",
            "sProcessing":     "Traitement...",
            "sSearch":         "Rechercher :",
            "sZeroRecords":    "Aucun élément correspondant trouvé",
            "oPaginate": {
                "sFirst":    "Premier",
                "sLast":     "Dernier",
                "sNext":     "Suivant",
                "sPrevious": "Précédent"
            },
            "oAria": {
                "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
            },
            "select": {
                "rows": {
                    "_": "%d lignes sélectionnées",
                    "0": "Aucune ligne sélectionnée",
                    "1": "1 ligne sélectionnée"
                }
            }
        },
    });
  
});

function CancelCampagne(id) {
  let btnOpenModal = $('#BoiteDialogueModal'+id);
  btnOpenModal.modal('show');
}

function CloseCancelModal(id) {
  let btnCloseModal = $('#BoiteDialogueModal'+id);
  btnCloseModal.modal('hide');
}

// Refresh page 
$('#StartBtn').click(function () {
  setTimeout(() => {
    document.location.reload()
  }, 10000);
})

$('#standard').change(function () {

  let standard = $('#standard').val();
  let message  = "";
  
  // Si image floue
  if(standard.length > 0 && standard =='imgfloue' ){
    message ="Cher client, votre pièce d'identité n'est pas exploitable en raison de la qualité de l'image. Veuillez envoyer une pièce lisible via WhatsApp au 0798922627.";
  }

  // Si reclamation
  if(standard.length > 0 && standard =='reclamation' ){
    message ="Cher(e) client(e) Orange Bank, votre réclamation a été recue et sera résolue dans un délai maximum de 30 jours. Nous vous remercions.";
  }

  // Si multisims
  if(standard.length > 0 && standard =='multisims' ){
    message ="Cher client, votre pret Tik Tak en impayé depuis plus de 3 mois, a été remboursé par le débit de vos autres comptes Orange Money. Plus d'infos au 1370";
  }

  // Si reinscription
  if(standard.length > 0 && standard =='reinscription' ){
    message ="Cher client, votre souscription à l'offre Tik Tak n'a pas abouti. Veuillez-vous réinscrire et envoyer une pièce d'identité valide par WhatsApp au 0798922627.";
  }

  // Si restrict1
  if(standard.length > 0 && standard =='restrict1' ){
    message ="Pour réactiver votre compte en restriction pour défaut d'identification, prière envoyer une pièce valide par WhatsApp au 0758838383 ou sur http://bit.ly/Tikak";
  }

  // Si restrict2
  if(standard.length > 0 && standard =='restrict2' ){
    message ="Cher Client, vous etes en restriction au service Tik Tak levez-la en envoyant une pièce valide par WhatsApp au 0758838383 ou sur https://orangebank.ci/idtiktak.";
  }

  // Si tiktak3jours
  if(standard.length > 0 && standard =='tiktak3jours' ){
    message ="Cher Client, dans 3 jrs vous serez en restriction au service Tik Tak.\n Envoyez une pièce valide par WhatsApp au 0758838383 ou sur https://orangebank.ci/idtiktak";
  }

  // Si alertrestrict
  if(standard.length > 0 && standard =='alertrestrict' ){
    message ="Cher Client, vous etes en restriction au service Tik Tak levez-la en envoyant une pièce valide par WhatsApp au 0758838383 ou sur https://orangebank.ci/idtiktak.";
  }

  $('#msg').val(message); 
  
})

</script>

 </body>
</html>