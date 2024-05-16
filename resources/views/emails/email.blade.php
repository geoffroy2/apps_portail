<!DOCTYPE html>
    <html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Email</title>
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
            .tr,.th,.td{
                border: 1px solid #dee2e6;
            }
        </style>
    </head>
    <body>

    <table style='width: 100%'>

    <tr>
        <td colspan='3' style='text-align: right;'>
            <img src='https://orangebank.ci/wp-content/uploads/2020/05/cropped-500x500_favicon-180x180.png'
                alt='Logo Orange Bank Africa' style='width: 30px!important;'>
        </td>
        <br/><br/>
    </tr>

    <tr>
        <td colspan='3'>
            <p>
            Bonjour, <br/><br/>

            La campagne d'envoi d'SMS s'est achevée avec quelque échec. 
            Vous trouverez ci-dessous le tableau récapitulatif qui contient les détails pour chaque numéro.
            <br>
            <br>
            </p>
        </td>
    </tr>

    </table>

    <table class="table table-bordered">
        <tr>
            <th>PHONE NUMBER</th>
            <th>RESPONSE CODE</th>
            <th>RESPONSE MESSAGE</th>
        </tr>
    
        @foreach ($detailCampagnesEchec as $item)
        
        <tr>
            <td>{{$item->phoneNumber}}</td>
            <td>{{$item->response_code}}</td>
            <td>{{$item->response_msg}}</td>
        </tr>
            
        @endforeach

        <br>
        <br>

        <tr>
            <td>NB: Afin d'optimiser notre système, les données de cette campagne seront supprimées le {{$deletedAt}}</td>
        </tr>
    </table>
        
    </body>
    </html>