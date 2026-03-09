<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Peserta Pelatihan</title>
</head>
<body>
<div class="container mt-5">

<div class="card shadow">
    <div class="card-header">
        <h4 class="mb-0">Tambah Peserta Pelatihan</h4>
    </div>

    <div class="card-body">
    <form action="{{ route('pesertapelatihan.store') }}" method="post">
        @csrf
        <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Jurusan</label>
            <select name="jurusan" class="form-select" required>
                <option value="" disabled selected>-- Pilih Jurusan --</option>
                <option value="Web Programming">Web Programming</option>
                <option value="Content Creator">Content Creator</option>
                <option value="Teknisi Jaringan">Teknisi Jaringan</option>
                <option value="Barista">Barista</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Gelombang</label>
            <input type="text" name="gelombang" class="form-control" placeholder="Masuk di gelombang ke berapa?" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">NIK</label>
            <input type="number" name="nik" class="form-control" placeholder="Masukkan NIK anda" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Kartu Keluarga</label>
            <input type="number" name="kartu_keluarga" class="form-control" placeholder="Masukkan nomor KK anda" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" required>
                <option value="" disabled selected>-- Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan tempat lahir anda" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Pendidikan Terakhir</label>
            <select name="pendidikan_terakhir" class="form-select" required>
                <option value="" disabled selected>-- Pendidikan Terakhir --</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="S1">S1</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" class="form-control" placeholder="Masukkan nama sekolah" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Kejuruan</label>
            <input type="text" name="kejuruan" class="form-control" placeholder="Kejuruan saat sekolah" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Nomor HP</label>
            <input type="number" name="nomor_hp" class="form-control" placeholder="Masukkan nomor hp anda" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email anda" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Aktivitas Saat Ini</label>
            <input type="text" name="aktivitas_saat_ini" class="form-control" placeholder="Aktivitas saat ini" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="Masukkan status" required>
        </div>
</div>
        <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
        <a href="{{ url('pesertapelatihan') }}" class="btn btn-secondary mt-3">Kembali</a>
    </form>
    </div>
</div>
</div>
</body>
</html>
