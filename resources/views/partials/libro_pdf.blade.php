<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ejemplo de libro de reclamaciones para pdf</title>
    <link rel="stylesheet" href="css/pdf.css" media="all">
</head>
<body>
<table border="1" cellspacing="0" cellpadding="0">
    <tr>
        <td colspan="2">
            <div>
                <h4 class="text-center">LIBRO DE RECLAMACIONES</h4>
            </div>
            <div class="text-center fix-padding" style="padding-bottom: 0;border-top: 1px solid #333;padding-top: 7px;padding-bottom: -8px">
                <div class="in-block fix-padding w20" style="border-right: 1px solid #333">FECHA:</div>
                <div class="in-block fix-padding w20" style="border-right: 1px solid #333">19</div>
                <div class="in-block fix-padding w20" style="border-right: 1px solid #333">Marzo</div>
                <div class="in-block fix-padding w20">2017</div>
            </div>
        </td>
        <td colspan="2">
            <p class="text-center">
                <strong>HOJA DE RECLAMACIÓN</strong><br>
                Nº {{ $data['nro'] }}
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="fix-padding">
                {{ $data['nombre'] }} / {{ $data['ruc'] }} / {{ $data['direccion'] }}
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="4">
            <h4>1. IDENTIFICACIÓN DEL CONSUMIDOR RECLAMANTE</h4>
        </td>
    </tr>

    <tr>
        <td colspan="4">
            <div class="fix-padding">
                <strong>NOMBRE:</strong> {{ $data['nombre_reclamante'] }}
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="fix-padding">
                <strong>DOMICILIO</strong> {{ $data['domicilio_reclamante'] }}
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="fix-padding">
                <strong>DNI / CE:</strong> {{ $data['dni_reclamante'] }}
            </div>
        </td>
        <td colspan="3">
            <div class="fix-padding">
                <strong>TELÉFONO / E-MAIL:</strong> {{ $data['telefono_reclamante'] }} / {{ $data['email_reclamante'] }}
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="fix-padding">
                <strong>PADRE O MADRE:</strong> {{ $data['menor_reclamante'] }}
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="4">
            <h4>2. IDENTIFICACIÓN DEL BIEN CONTRATADO</h4>
        </td>
    </tr>

    <tr>
        <td>
            <div class="fix-padding-sm">
                <strong>PRODUCTO</strong> ({{ $data['tipo'] === 'PRODUCTO' ? 'X' : '' }})
            </div>
            <div class="fix-padding-sm">
                <strong>SERVICIO</strong> ({{ $data['tipo'] === 'SERVICIO' ? 'X' : '' }})
            </div>
        </td>
        <td colspan="3">
            <div class="fix-padding">
                <div class="fix-padding-sm">
                    <strong>MONTO RECLAMADO</strong> {{ $data['monto_reclamado'] }}
                </div>
                <div class="fix-padding-sm">
                    <strong>DESCRIPCIÓN:</strong> {{ $data['descripcion'] }}
                </div>
            </div>
        </td>
    </tr>

    <tr class="row">
        <td colspan="3">
            <h4>3. DETALLE DE LA RECLAMACIÓN Y PEDIDO DEL CONSUMIDOR</h4>
        </td>
        <td class="text-center">
            <div class="in-block" style="width: 45%;border-right: 1px solid #333">QUEJA<sup>2</sup></div>
            <div class="in-block" style="width: 45%">RECLAMO<sup>1</sup></div>
        </td>
    </tr>

    <tr>
        <td colspan="4">
            <div class="fix-padding h100">
                <strong>DETALLE:</strong><br>
                {{ $data['detalle'] }}
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="3">
            <div class="fix-padding h100">
                <strong>PERIODO:</strong><br>
                {{ $data['periodo'] }}
            </div>
        </td>
        <td>
            <div class="text-center firma-consumidor">
                <strong>FIRMA DEL CONSUMIDOR</strong>
            </div>
        </td>
    </tr>

    @if ($data['estado'] == 2)
    <tr>
        <td colspan="4">
            <h4>4. OBSERVACIONES Y ACCIONES ADOPTADAS POR EL PROVEEDOR</h4>
        </td>
    </tr>

    <tr>
        <td colspan="3">
            <div class="fix-padding h100">
                <strong>
                    <small>FECHA DE LA COMUNICACION DE LA RESPUESTA:</small>
                </strong>
                <br>
                {{ $data['fecha_respuesta'] }}
            </div>
        </td>
        <td>
            <div class="text-center firma-consumidor">
                <strong>FIRMA DEL PROVEEDOR</strong>
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <div class="fix-padding">
                <small>
                    <strong><sup>1</sup>RECLAMO:</strong> Disconformidad relacionada a los productos o  servicios.
                </small>
            </div>
        </td>
        <td colspan="2">
            <div class="fix-padding">
                <small>
                    <strong><sup>2</sup>QUEJA:</strong> Disconformidad no relacionada a los productos o servicios; o, malestar o  descontento respecto a la atención al púbtdco.
                </small>
            </div>
        </td>
    </tr>
    @endif
</table>
</body>
</html>