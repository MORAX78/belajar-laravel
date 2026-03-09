<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{ url('navbar') }}">Kembali</a>

<form action="{{ route('volumetabung.storeVolt') }}" method="post">
@csrf

<label>Jari-jari</label><br>
<input type="number" name="voltabung" required><br><br>

<label>Tinggi</label><br>
<input type="number" name="voltabung" required><br><br>

<button type="submit">Hitung</button>

</form>

@isset($hasil)
<h3>Hasil: {{ $hasil }}</h3>
@endisset
