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

</head>

<body>
    <h2>Form Pendataan Dokter</h2>
    <form action="{{route('dokter.store')}}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="namaDokter" class="form-label">Nama Dokter</label>
                <input type="text" class="form-control"id="namaDokter"name="nama_dokter">
            </div>
            <div class="mb-3">
                <label for="STR"class="form-label">STR</label>
                <input type="number" class="form-control" id="STR" name="str">
            </div>
            <div class="mb-3">
                <label for="Tanggallahir"class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="Tanggallahir" name="tanggal_lahir">
            </div>
            <div class="mb-3">
                <label for="Alamat"class="form-label">Alamat</label>
                <textarea class="form-control" id="Alamat" name="alamat"></textarea >
            </div>
            <div class="mb-3">
                <label for="NomorTelepon"class="form-label">Nomor Telepon</label>
                <input type="number" class="form-control" id="NomorTelepon" name="nomor_telepon">
            </div>
            <div class="mb-3">
                <label for="Email"class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="laki-laki" name="jenis_kelamin"
                    value="Laki-laki">
                    <label for="laki-laki" class="form-check-label">Laki-laki</label>
                </div>
                <div>
                    <input type="radio" class="form-check-input" id="Perempuan" name="jenis_kelamin"
                    value="Perempuan">
                    <label for="Perempuan" class="form-check-label">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="Spesialisasi" class="form-label">Spesialisasi</label>
                <select id="Spesialisasi" class="form-select" name="spesialisasi">
                    <option selected>Spesialisasi</option>
                    <option value="umum">Umum</option>
                    <option value="Penyaki tDalam">Penyakit Dalam</option>
                    <option value="Bedah">Bedah</option>
                    <option value="Gigi & Mulut">Gigi & Mulut</option>
                    <option value="Mata">Mata</option>
                    <option value="Anak">Anak</option>
                    <option value="Kandunan">Kandunan</option>
                    <option value="Saraf">Saraf</option>
                    <option value="Ortopedi">Ortopedi</option>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>




    </form>







</body>

</html>
