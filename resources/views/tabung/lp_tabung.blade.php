<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Permukaan Tabung</title>
</head>
<body>

<a href="{{ url('navbar') }}">Kembali</a>

<form action="{{ route('luaspermukaantabung.storeTabung') }}" method="post">
@csrf

<label>Jari-jari</label><br>
<input type="number" name="jari" required><br><br>

<label>Tinggi</label><br>
<input type="number" name="tinggi" required><br><br>

<button type="submit">Hitung</button>

</form>

@isset($hasil)
<h3>Hasil: {{ $hasil }}</h3>
@endisset

</body>
</html>
