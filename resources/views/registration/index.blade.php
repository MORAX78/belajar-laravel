<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Formulir Pendaftaran</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#e5e5e5;
font-family:Arial, Helvetica, sans-serif;
}

.form-container{
background:white;
padding:20px;
box-shadow:0 0 10px rgba(0,0,0,0.2);
margin-top:40px;
margin-bottom:40px;
}

table{
width:100%;
border-collapse:collapse;
}

td{
border:1px solid #555;
padding:8px;
font-size:14px;
}

.header{
text-align:center;
background:#f0f0f0;
}

input, textarea{
border:none;
width:100%;
background:transparent;
outline:none;
}

textarea{
resize:none;
}

.check{
font-weight:bold;
background:#f7f7f7;
}

</style>

</head>

<body>

<div class="container">

<div class="form-container">

<form action="{{ route('registration.store') }}" method="POST">
@csrf

<table>

<tr class="header">
<td colspan="4">
<h5>PPKD HOTEL</h5>
Formulir Pendaftaran / Registration Form
</td>
</tr>

<tr>
<td width="20%">Room No</td>
<td width="30%"><input type="text" name="room_no"></td>
<td width="20%">Jumlah Tamu</td>
<td width="30%"><input type="text" name="jumlah_tamu"></td>
</tr>

<tr>
<td>Jumlah Kamar</td>
<td><input type="text" name="jumlah_kamar"></td>
<td>Jenis Kamar</td>
<td><input type="text" name="jenis_kamar"></td>
</tr>

<tr>
<td>Receptionist</td>
<td colspan="3"><input type="text" name="receptionist"></td>
</tr>

<tr class="check">
<td colspan="4">Check Out Time : 12.00 Noon</td>
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
<textarea rows="2" name="alamat"></textarea>
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
<textarea rows="3" name="catatan"></textarea>
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

</div>

</body>
</html>
