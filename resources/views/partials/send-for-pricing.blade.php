<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div style="width:85%;margin: 15px auto;border:1px solid #ddd;padding:10px">
		<ul>
			<li><strong>Nombre y Apellido:</strong> {{ $nombre }}</li>
			<li><strong>Correo:</strong> {{ $correo }}</li>
			<li><strong>Teléfono:</strong> {{ $telefono }}</li>
			<li>
				<strong>Paquete Nombre:</strong> {{ $paq_nombre }}<br>
				<strong>Paquete Titulo:</strong> {{ $paq_titulo }}
			</li>
			<li><strong>Mensaje:</strong> {!! nl2br($mensaje) !!}</li>
		</ul>
	</div>
</body>
</html>