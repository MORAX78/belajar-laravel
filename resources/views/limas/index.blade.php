<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Volume Limas Segi Empat</h2>
    <a href="{{ url('navbar') }}">Kembali</a><br>
    <a href="{{ route('volumelimas.create') }}">Buat</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Luas Alas</th>
            <th>Tinggi</th>
            <th>Hasil</th>
            <th>Action</th>
        </tr>
        @foreach ($limas as $index => $v)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $v->luas_alas }}</td>
            <td>{{ $v->tinggi }}</td>
            <td>{{ $v->hasil }}</td>
            <td>
                <a href="{{ route('volumelimas.edit', $v->id) }}">Edit</a>
                <form action="{{ route('volumelimas.destroy', $v->id) }}" method="post" onclick="return confirm('Yakin ingin dihapus?')">
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
