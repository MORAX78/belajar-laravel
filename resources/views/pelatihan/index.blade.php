<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Data Peserta Pelatihan</h2>
    <a href="{{ url('navbar') }}">Kembali</a><br>
    <a href="{{ route('pesertapelatihan.create') }}">Buat</a>
    <table border="1">
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
            <th>Nomor Hp</th>
            <th>Email</th>
            <th>Aktivitas Saat Ini</th>
            <th>Status</th>

        </tr>
        @foreach ($pelatihan as $index => $v)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $v->jurusan}}</td>
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
            <a href="{{ route('pesertapelatihan.edit', $v->id) }}">Edit</a>
            <form action="{{ route('pesertapelatihan.destroy', $v->id) }}" method="post" onclick="return confirm('Yakin ingin dihapus?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>
