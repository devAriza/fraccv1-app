<!DOCTYPE html>
<html>
<head>
    <title>QR Code Report</title>
    <style>
        /* Estilos personalizados */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header img {
            width: 150px;
        }
        .qr-section {
            text-align: center;
            margin: 20px 0;
            padding: 15px;
            border: 1px solid #eee;
            border-radius: 8px;
        }
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            padding: 10px;
            background-color: #f8f9fa;
            font-size: 12px;
        }
        .info-table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }
        .info-table td {
            padding: 8px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <!-- Encabezado con logo -->
    <div class="header">
        <img src="{{ public_path('images/logo.png') }}" alt="Logo">
        <h2>ACCESO</h2>
        <p>Generado el: {{ now()->format('d/m/Y') }}</p>
    </div>

    <!-- Información adicional -->
    <table class="info-table">
        <tr>
            <td>Empresa</td>
            <td>UPPue</td>
        </tr>
        <tr>
            <td>Referencia</td>
            <td>QR-2024-001</td>
        </tr>
    </table>

    <!-- QR Code -->
    <div class="qr-section">
        <img src="data:image/png;base64, {!! $base64QR !!}" alt="QR Code">
        <p>Escanea este código para verificar la autenticidad</p>
    </div>

    <!-- Pie de página -->
    <div class="footer">
        © {{ date('Y') }} UPPue. Todos los derechos reservados.
    </div>
</body>
</html>