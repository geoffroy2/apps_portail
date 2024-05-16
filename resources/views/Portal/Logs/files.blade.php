<!DOCTYPE html>
<html>
<head>
	<title>Log Activity Lists</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>


<div class="container">
	<h1>List des fichiers de logs</h1>
	<table class="table table-bordered">
		<tr>
			<th>Id</th>
			<th>Logs</th>
			<th>Action</th>
		</tr>
		
			@foreach($logs as $key => $log)
			<tr>
				<td>{{ ++$key }}</td>
				<td>{{ $log }}</td>
				<td>
                
                <a href="{{ route('logRead',$log) }}" class="btn btn-info pull-left" style="margin-right: 3px;">
                    Read
                </a>
                
                
                </td>
			</tr>
			@endforeach
	</table>
</div>


</body>
</html>