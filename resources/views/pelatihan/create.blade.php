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
<form action="{{ route('pesertapelatihan.store') }}" method="post">
    @csrf
<select name="jurusan" required>
        <option value="" disabled selected>--Pilih Jurusan--</option>
        <option value="Web Programming">Web Programming</option>
        <option value="Content Creator">Content Creator</option>
        <option value="Teknisi Jaringan">Teknisi Jaringan</option>
        <option value="Barista">Barista</option>
        </select><br>
        <label for="">Gelombang</label><br>
            <input type="text" name="gelombang" required placeholder="Masuk di gelombang ke berapa?"><br>
        <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama_lengkap" required placeholder="Masukkan nama lengkap"><br>
        <label for="">NIK</label><br>
            <input type="number" name="nik" required placeholder="Masukkan NIK anda"><br>
        <label for="">Kartu Keluarga</label><br>
            <input type="number" name="kartu_keluarga" required placeholder="Masukkan nomor KK anda"><br>
        <select name="jenis_kelamin" required>
        <option value="" disabled selected>--Jenis Kelamin--</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
        </select><br>
        <label for="">Tempat Lahir</label><br>
            <input type="text" name="tempat_lahir" required placeholder="Masukkan tempat lahir anda"><br>
        <label for="tgllahir">Tanggal Lahir</label><br>
            <input type="date" name="tanggal_lahir" required placeholder="Masukkan tanggal lahir"><br>
        <select name="pendidikan_terakhir" required>
        <option value="" disabled selected>--Pendidikan Terakhir--</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="S1">S1</option>
        </select><br>
        <label for="">Nama Sekolah</label><br>
            <input type="text" name="nama_sekolah" required placeholder="Masukkan nama sekolah"><br>
        <label for="">Kejuruan</label><br>
            <input type="text" name="kejuruan" required placeholder="Kejuruan saat sekolah"><br>
        <label for="">Nomor Hp</label><br>
            <input type="number" name="nomor_hp" required placeholder="Masukkan nomor hp anda"><br>
        <label for="">Email</label><br>
            <input type="email" name="email" required placeholder="Masukkan email anda"><br>
        <label for="">Aktivitas Saat Ini</label><br>
            <input type="text" name="aktivitas_saat_ini" required placeholder="Aktivitas saat ini"><br>
        <label for="">Status</label><br>
            <input type="text" name="status" required placeholder="Masukkan status"><br>
        <button type="submit">Tambah Data</button>
</form>
</body>
</html>
