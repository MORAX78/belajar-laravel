<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Peserta Pelatihan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Data Peserta Pelatihan</h4>
<div>
    <a href="{{ url('navbar') }}" class="btn btn-secondary btn-sm">Kembali</a>
    <a href="{{ route('pesertapelatihan.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
</div>
</div>
    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Jurusan</th>
                    <th>Gelombang</th>
                    <th>Nama Lengkap</th>
                    <th>NIK</th>
                    <th>Kartu Keluarga</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Nama Sekolah</th>
                    <th>Kejuruan</th>
                    <th>Nomor HP</th>
                    <th>Email</th>
                    <th>Aktivitas Saat Ini</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
<tbody>
@foreach ($pelatihan as $index => $v)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $v->jurusan }}</td>
            <td>{{ $v->gelombang }}</td>
            <td>{{ $v->nama_lengkap }}</td>
            <td>{{ $v->nik }}</td>
            <td>{{ $v->kartu_keluarga }}</td>
            <td>{{ $v->jenis_kelamin }}</td>
            <td>{{ $v->tempat_lahir }}</td>
            <td>{{ $v->tanggal_lahir }}</td>
            <td>{{ $v->pendidikan_terakhir }}</td>
            <td>{{ $v->nama_sekolah }}</td>
            <td>{{ $v->kejuruan }}</td>
            <td>{{ $v->nomor_hp }}</td>
            <td>{{ $v->email }}</td>
            <td>{{ $v->aktivitas_saat_ini }}</td>
            <td>{{ $v->status }}</td>
        <td>
            <a href="{{ route('pesertapelatihan.edit', $v->id) }}" class="btn btn-success btn-sm">Edit</a>
            <form action="{{ route('pesertapelatihan.destroy', $v->id) }}" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <button onclick="return confirm('Yakin ingin dihapus?')" class="btn btn-danger btn-sm">
            Delete
            </button>
</form>
</td>
</tr>
@endforeach
</tbody>

</table>

</div>
</div>

</div>

</body>
</html>
