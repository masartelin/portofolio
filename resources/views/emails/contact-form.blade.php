<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2>Pesan Baru dari Form Kontak Portofolio</h2>

    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 8px 0; width: 120px;"><strong>Nama</strong></td>
            <td style="padding: 8px 0;">: {{ $data['name'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 0;"><strong>Email</strong></td>
            <td style="padding: 8px 0;">: {{ $data['email'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 0;"><strong>Telepon</strong></td>
            <td style="padding: 8px 0;">: {{ $data['phone'] ?? '-' }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 0;"><strong>Subjek</strong></td>
            <td style="padding: 8px 0;">: {{ $data['subject'] }}</td>
        </tr>
    </table>

    <hr style="margin: 20px 0;">

    <p><strong>Pesan:</strong></p>
    <p>{{ $data['message'] }}</p>

    <hr style="margin: 20px 0;">
    <p style="font-size: 12px; color: #888;">
        Pesan ini dikirim otomatis dari form kontak portofolio Anda.
    </p>
</body>
</html>