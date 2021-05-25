<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tabla</title>
</head>
<body>
	<h1 class="text-center">Titulo</h1>
	<table id="tabla" class="table mx-auto mt-5" style="width: 300px">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Vendedor</th>
	      <th scope="col">Venta</th>
	    </tr>
	  </thead>
	  @foreach($ventas as $venta)
  		<tr>
	      <th scope="row">{{ $loop->iteration }}</th>
	      <td>{{ $venta->vendedor }}</td>
	      <td>{{ "$" . number_format($venta->total, 0) }}</td>
	    </tr>
	  @endforeach
	  <tbody>	    
	  </tbody>
	</table>
</body>
</html>