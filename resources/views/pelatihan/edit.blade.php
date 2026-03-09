<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Peserta Pelatihan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="mb-0">Edit Peserta Pelatihan</h4>
</div>
    <div class="card-body">
        <form action="{{ route('pesertapelatihan.update', $pelatihan->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-md-6 mb-3">
        <label class="form-label">Jurusan</label>
        <select name="jurusan" class="form-select" required>
        <option value="" disabled>-- Pilih Jurusan --</option>
        <option value="Web Programming" {{ $pelatihan->jurusan == 'Web Programming' ? 'selected' : '' }}>Web Programming</option>
        <option value="Content Creator" {{ $pelatihan->jurusan == 'Content Creator' ? 'selected' : '' }}>Content Creator</option>
        <option value="Teknisi Jaringan" {{ $pelatihan->jurusan == 'Teknisi Jaringan' ? 'selected' : '' }}>Teknisi Jaringan</option>
        <option value="Barista" {{ $pelatihan->jurusan == 'Barista' ? 'selected' : '' }}>Barista</option>
        </select>
    </div>
<div class="col-md-6 mb-3">
    <label class="form-label">Gelombang</label>
    <input type="text" name="gelombang" class="form-control" value="{{ $pelatihan->gelombang }}">
</div>
<div class="col-md-6 mb-3">
    <label class="form-label">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" class="form-control" value="{{ $pelatihan->nama_lengkap }}">
</div>
<div class="col-md-6 mb-3">
    <label class="form-label">NIK</label>
    <input type="number" name="nik" class="form-control" value="{{ $pelatihan->nik }}">
</div>
<div class="col-md-6 mb-3">
    <label class="form-label">Kartu Keluarga</label>
    <input type="number" name="kartu_keluarga" class="form-control" value="{{ $pelatihan->kartu_keluarga }}">
</div>
<div class="col-md-6 mb-3">
    <label class="form-label">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-select" required>
    <option value="" disabled>-- Jenis Kelamin --</option>
    <option value="Laki-laki" {{ $pelatihan->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
    <option value="Perempuan" {{ $pelatihan->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
    </select>
</div>
<div class="col-md-6 mb-3">
    <label class="form-label">Tempat Lahir</label>
    <input type="text" name="tempat_lahir" class="form-control" value="{{ $pelatihan->tempat_lahir }}">
</div>
<div class="col-md-6 mb-3">
    <label class="form-label">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" class="form-control" value="{{ $pelatihan->tanggal_lahir }}">
</div>
<div class="col-md-6 mb-3">
    <label class="form-label">Pendidikan Terakhir</label>
    <select name="pendidikan_terakhir" class="form-select" required>
    <option value="" disabled>-- Pendidikan Terakhir --</option>
    <option value="SD" {{ $pelatihan->pendidikan_terakhir == 'SD' ? 'selected' : '' }}>SD</option>
    <option value="SMP" {{ $pelatihan->pendidikan_terakhir == 'SMP' ? 'selected' : '' }}>SMP</option>
    <option value="SMA" {{ $pelatihan->pendidikan_terakhir == 'SMA' ? 'selected' : '' }}>SMA</option>
    <option value="S1" {{ $pelatihan->pendidikan_terakhir == 'S1' ? 'selected' : '' }}>S1</option>
    </select>
</div>
<div class="col-md-6 mb-3">
    <label class="form-label">Nama Sekolah</label>
    <input type="text" name="nama_sekolah" class="form-control" value="{{ $pelatihan->nama_sekolah }}">
</div>
<div class="col-md-6 mb-3">
    <label class="form-label">Kejuruan</label>
    <input type="text" name="kejuruan" class="form-control" value="{{ $pelatihan->kejuruan }}">
</div>
<div class="col-md-6 mb-3">
    <label class="form-label">Nomor HP</label>
    <input type="number" name="nomor_hp" class="form-control" value="{{ $pelatihan->nomor_hp }}">
</div>
<div class="col-md-6 mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="{{ $pelatihan->email }}">
</div>
<div class="col-md-6 mb-3">
    <label class="form-label">Aktivitas Saat Ini</label>
    <input type="text" name="aktivitas_saat_ini" class="form-control" value="{{ $pelatihan->aktivitas_saat_ini }}">
</div>
<div class="col-md-6 mb-3">
    <label class="form-label">Status</label>
    <input type="text" name="status" class="form-control" value="{{ $pelatihan->status }}">
</div>

</div>

<button type="submit" class="btn btn-primary mt-3">Update Data</button>
<a href="{{ url('pesertapelatihan') }}" class="btn btn-secondary mt-3">Kembali</a>

</form>

</div>
</div>

</div>

</body>
</html>
