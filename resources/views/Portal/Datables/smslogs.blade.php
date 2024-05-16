@extends('layout')

@section('title', '| Permissions')

@section('content')


<main role="main" id="content" class="my-5">
      <div class="container-fluid">
      <table class="table data-table" id="laravel_datatable">     
           <caption>
            Historique des SMS envoyés
          </caption>
          <thead class="cf">
            <tr>
              <th scope="col" class="header">Tel. Client</th>
              <th scope="col" class="header">Contenu du message</th>
              <th scope="col" class="header">Statut</th>
              <th scope="col" class="header">Date d'envoi</th>
              <th scope="col" class="header">Employé OBA</th>
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
           ajax: "{{ url('sms_logsdatables') }}",
           columns: [
                    { data: 'receiver', name: 'receiver' },
                    { data: 'content', name: 'content' },
                    { data: 'statut', name: 'statut' },
                    { data: 'sent_at', name: 'sent_at' },      
                    { data: 'user', name: 'user' },
                 ]
        });
     });
  </script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
   <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
   <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
   
@endsection