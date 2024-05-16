@extends('layout')

@section('title', '| Permissions')

@section('content')


<main role="main" id="content" class="my-5">
      <div class="container-fluid">
      <table class="table data-table" id="laravel_datatable">     
           <caption>
            Contacts de l'Equipe Orange Bank Africa
          </caption>
          <thead class="cf">
            <tr>
              <th scope="col" class="header">Matricule</th>
              <th scope="col" class="header">Civilité</th>
              <th scope="col" class="header">Nom</th>
              <th scope="col" class="header">Prénoms</th>
              
              <th scope="col" class="header">Fonction</th>
              <th scope="col" class="header">Portable</th>
              <th scope="col" class="header">Cisco</th>
              <th scope="col" class="header">Adresse mail</th>
            </tr>
          </thead>
        </table>
      
      </div>
    </main>
    <!--/.container-->

@endsection

@section('javascript')
<script>
   $(document).ready( function () {
    $('#laravel_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('annuairedatables') }}",
           columns: [
                    { data: 'matricule', name: 'matricule' },
                    { data: 'civilite', name: 'civilite' },
                    { data: 'nom', name: 'nom' },
                    { data: 'prenoms', name: 'prenoms' },
                
                    { data: 'fonction', name: 'fonction' },
                    { data: 'portable', name: 'portable' },
                    { data: 'cisco', name: 'cisco' },
                    { data: 'email', name: 'email' },

                 ]
        });
     });
  </script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
   <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
   <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
   
@endsection