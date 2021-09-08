<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desa Wonosuko</title>
</head>
<body>
    <p>Hai {{ $data['name'] }},</p>
    <h4>Data Pengaduan yang anda kirim:</h4>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $data['email'] }}</td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td>:</td>
            <td>{{ $data['phone_number'] }}</td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td>{{ $data['category'] }}</td>
        </tr>
        <tr>
            <td>Isi Pengaduan</td>
            <td>:</td>
            <td>{{ $data['complaint'] }}</td>
        </tr>
    </table>
    <br>
    <p>
        Pengaduan anda telah terkirim dan akan disampaikan ke pengurus desa untuk diproses lebih lanjut.
        <br>
        Terimakasih sudah ikut berkontribusi dalam memajukan Desa Wonosuko.
    </p>
    <br>
    <p>Salam</p>
    <p>Pengurus Desa Wonosuko</p>
</body>
</html>
