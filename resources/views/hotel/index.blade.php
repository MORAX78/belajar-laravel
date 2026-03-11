<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Formulir Pendaftaran</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

table{
border:1px solid black;
}

td{
border:1px solid black;
padding:6px;
}

input, textarea{
border:none;
width:100%;
outline:none;
}

.title{
text-align:center;
font-weight:bold;
}

</style>

</head>

<body>

<div class="container mt-4">

<form action="{{ route('registration.store') }}" method="POST">
@csrf

<table class="table">

<tr>
<td colspan="4" class="title">
<h5>PPKD HOTEL</h5>
Formulir Pendaftaran / Registration Form
</td>
</tr>

<tr>
<td>Room No</td>
<td><input type="text" name="room_no"></td>
<td>Jumlah Tamu</td>
<td><input type="text" name="jumlah_tamu"></td>
</tr>

<tr>
<td>Jumlah Kamar</td>
<td><input type="text" name="jumlah_kamar"></td>
<td>Jenis Kamar</td>
<td><input type="text" name="jenis_kamar"></td>
</tr>

<tr>
<td colspan="2">Receptionist</td>
<td colspan="2"><input type="text" name="receptionist"></td>
</tr>

<tr>
<td colspan="4"><b>Check Out Time : 12.00 Noon</b></td>
</tr>

<tr>
<td>Nama</td>
<td colspan="2"><input type="text" name="nama"></td>
<td>
Waktu Kedatangan
<input type="time" name="arrival_time">
</td>
</tr>

<tr>
<td>Pekerjaan</td>
<td colspan="3"><input type="text" name="pekerjaan"></td>
</tr>

<tr>
<td>Perusahaan</td>
<td colspan="2"><input type="text" name="perusahaan"></td>
<td>
Tanggal Kedatangan
<input type="date" name="arrival_date">
</td>
</tr>

<tr>
<td>Kebangsaan</td>
<td><input type="text" name="kebangsaan"></td>
<td>No KTP / Passport</td>
<td><input type="text" name="ktp"></td>
</tr>

<tr>
<td>Tanggal Lahir</td>
<td><input type="date" name="tanggal_lahir"></td>
<td colspan="2"></td>
</tr>

<tr>
<td>Alamat</td>
<td colspan="3">
<textarea name="alamat" rows="2"></textarea>
</td>
</tr>

<tr>
<td>Telephone / Mobile</td>
<td><input type="text" name="phone"></td>
<td>Tanggal Keberangkatan</td>
<td><input type="date" name="departure_date"></td>
</tr>

<tr>
<td>Email</td>
<td colspan="3"><input type="email" name="email"></td>
</tr>

<tr>
<td>No Member</td>
<td colspan="3"><input type="text" name="member_no"></td>
</tr>

<tr>
<td>Catatan</td>
<td colspan="3">
<textarea name="catatan" rows="3"></textarea>
</td>
</tr>

<tr>
<td>Nomor Kotak Deposit</td>
<td><input type="text" name="deposit_box"></td>
<td>Dikeluarkan Oleh</td>
<td><input type="text" name="issued_by"></td>
</tr>

<tr>
<td>Tanggal</td>
<td><input type="date" name="issued_date"></td>
<td colspan="2"></td>
</tr>

</table>

<div class="text-center mt-3">

<button class="btn btn-primary">
Simpan
</button>

</div>

</form>

</div>

</body>
</html>
