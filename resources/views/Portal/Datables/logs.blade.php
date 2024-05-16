@extends('layout')

@section('title', '| Permissions')

@section('content')


<main role="main" id="content" class="my-5">
      <div class="container-fluid">
      <table class="table data-table" id="laravel_datatable">     
           <caption>
            List des logs en Datables 
          </caption>
          <thead class="cf">
            <tr>
              <th scope="col" class="header">Page</th>
              <th scope="col" class="header">Url</th>
              <th scope="col" class="header">IP</th>
              <th scope="col" class="header">Utilisateurs</th>
              <th scope="col" class="header">Info</th>
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
           ajax: "{{ url('logdatables') }}",
           columns: [
                    { data: 'subject', name: 'subject' },
                    { data: 'url', name: 'url' },
                    { data: 'ip', name: 'ip' },
                    { data: 'user_id', name: 'user_id' },
                    { data: 'agent', name: 'agent' },

                 ]
        });
     });
  </script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/af-2.3.5/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-print-1.6.5/fc-3.3.1/fh-3.1.7/kt-2.5.3/r-2.2.6/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.0/sp-1.2.1/sl-1.3.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/af-2.3.5/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-print-1.6.5/fc-3.3.1/fh-3.1.7/kt-2.5.3/r-2.2.6/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.0/sp-1.2.1/sl-1.3.1/datatables.min.js"></script>
   
@endsection