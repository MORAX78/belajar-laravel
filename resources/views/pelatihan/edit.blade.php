<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peserta Pelatihan</title>
</head>
<body>
<h3>Tambah Peserta Pelatihan</h3>
<form action="{{ route('pesertapelatihan.update', $pelatihan->id) }}" method="post">
@csrf
@method('PUT')

<select name="jurusan" required>
<option value="" disabled>--Pilih Jurusan--</option>
<option value="Web Programming" {{ $pelatihan->jurusan == 'Web Programming' ? 'selected' : '' }}>Web Programming</option>
<option value="Content Creator" {{ $pelatihan->jurusan == 'Content Creator' ? 'selected' : '' }}>Content Creator</option>
<option value="Teknisi Jaringan" {{ $pelatihan->jurusan == 'Teknisi Jaringan' ? 'selected' : '' }}>Teknisi Jaringan</option>
<option value="Barista" {{ $pelatihan->jurusan == 'Barista' ? 'selected' : '' }}>Barista</option>
</select><br>

<label>Gelombang</label><br>
<input type="text" name="gelombang" value="{{ $pelatihan->gelombang }}"><br>

<label>Nama Lengkap</label><br>
<input type="text" name="nama_lengkap" value="{{ $pelatihan->nama_lengkap }}"><br>

<label>NIK</label><br>
<input type="number" name="nik" value="{{ $pelatihan->nik }}"><br>

<label>Kartu Keluarga</label><br>
<input type="number" name="kartu_keluarga" value="{{ $pelatihan->kartu_keluarga }}"><br>

<select name="jenis_kelamin" required>
<option value="" disabled>--Jenis Kelamin--</option>
<option value="Laki-laki" {{ $pelatihan->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
<option value="Perempuan" {{ $pelatihan->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
</select><br>

<label>Tempat Lahir</label><br>
<input type="text" name="tempat_lahir" value="{{ $pelatihan->tempat_lahir }}"><br>

<label>Tanggal Lahir</label><br>
<input type="date" name="tanggal_lahir" value="{{ $pelatihan->tanggal_lahir }}"><br>

<select name="pendidikan_terakhir" required>
<option value="" disabled>--Pendidikan Terakhir--</option>
<option value="SD" {{ $pelatihan->pendidikan_terakhir == 'SD' ? 'selected' : '' }}>SD</option>
<option value="SMP" {{ $pelatihan->pendidikan_terakhir == 'SMP' ? 'selected' : '' }}>SMP</option>
<option value="SMA" {{ $pelatihan->pendidikan_terakhir == 'SMA' ? 'selected' : '' }}>SMA</option>
<option value="S1" {{ $pelatihan->pendidikan_terakhir == 'S1' ? 'selected' : '' }}>S1</option>
</select><br>

<label>Nama Sekolah</label><br>
<input type="text" name="nama_sekolah" value="{{ $pelatihan->nama_sekolah }}"><br>

<label>Kejuruan</label><br>
<input type="text" name="kejuruan" value="{{ $pelatihan->kejuruan }}"><br>

<label>Nomor Hp</label><br>
<input type="number" name="nomor_hp" value="{{ $pelatihan->nomor_hp }}"><br>

<label>Email</label><br>
<input type="email" name="email" value="{{ $pelatihan->email }}"><br>

<label>Aktivitas Saat Ini</label><br>
<input type="text" name="aktivitas_saat_ini" value="{{ $pelatihan->aktivitas_saat_ini }}"><br>

<label>Status</label><br>
<input type="text" name="status" value="{{ $pelatihan->status }}"><br>

<button type="submit">Update Data</button>

</form>
</body>
</html>
