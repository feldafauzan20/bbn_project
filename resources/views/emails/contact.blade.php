<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan Baru dari Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* biru muda */
            color: #333;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            border: 1px solid #cce4f6;
            border-left: 5px solid #007acc; /* aksen biru */
            border-radius: 5px;
            padding: 20px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 4px 10px rgba(0, 122, 204, 0.1);
        }
        h2 {
            color: #007acc;
        }
        p {
            line-height: 1.6;
        }
        strong {
            color: #005b99;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #888;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pesan Baru dari Contact Form</h2>

        <p><strong>Nama:</strong> {{ $details['name'] }}</p>
        <p><strong>Email:</strong> {{ $details['email'] }}</p>

        @if(!empty($details['phone']))
            <p><strong>Telepon:</strong> {{ $details['phone'] }}</p>
        @endif

        <p><strong>Pesan:</strong></p>
        <p>{{ $details['message'] }}</p>

        <div class="footer">
            Email ini dikirim otomatis dari website Bina Bahama Nusantara.
        </div>
    </div>
</body>
</html>
