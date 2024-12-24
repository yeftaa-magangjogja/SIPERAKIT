<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
<link rel="stylesheet" href="style.css">

</head>

<body>
    @include('partials.navbar')\
    <div class="container mb-5"></div>
    <h2 class="text-center mb-4">Data Pasien</h2>

    <a href="{{route('pasien.create')}}" class="btn btn-success mb-3">Tambah</a>
    <table class="table table-bordered border-dark table-info table-striped">
        <tr class="table-dark">
            <th>Nama Pasien</th>
            <th>NIK</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Golongan Darah</th>
            <th>Riwayat Penyakit</th>
            <th>Aksi </th>
        </tr>  
        @foreach ($pasien as $data)
            
        <tr>
            <td>{{ $data->nama_pasien}}</td>
            <td>{{ $data->nik}}</td>
            <td>{{ $data->tanggal_lahir}}</td>
            <td>{{ $data->alamat}}</td>
            <td>{{ $data->nomor_telepon}}</td>
            <td>{{ $data->email}}</td>
            <td>{{ $data->jenis_kelamin}}</td>
            <td>{{ $data->golongan_darah}}</td>
            <td>{{ $data->riwayat_penyakit}}</td>
            <td>
                <a href="" class="btn btn-warning">Edit</a>
                <form action="{{ route('pasien.destroy', $data->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach  
    </table>

    @include('partials.footer')

</body>

</html>
