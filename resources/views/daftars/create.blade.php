<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Daftar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('daftar.save') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Tgl Daftar <span class="text-danger">*</span></label>
                                <input class="form-control" type="date" name="tgl_daftar"
                                    value="{{ date('Y-m-d') }}" readonly />
                            </div>
                            <div class="mb-3">
                                <label>Poli Tujuan <span class="text-danger">*</span></label>
                                <select name="poli" class="form-control custom-select" required>
                                    <option value="Poli Umum">Poli Umum</option>
                                    <option value="Poli KIA">Poli KIA</option>
                                    <option value="Poli Gigi">Poli Gigi</option>
                                    <option value="Poli Imunisasi">Poli Imunisasi</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>No RM <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="no_rm" value="{{ old('no_rm') }}"
                                    required />
                            </div>
                            <div class="mb-3">
                                <label>Nama Pasien <span class="text-danger">*</span></label>
                                <input class="form-control" type="nama_pasien" name="nama_pasien"
                                    value="{{ old('nama_pasien') }}" required />
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Lahir <span class="text-danger">*</span></label>
                                <input class="form-control" type="date" name="tgl_lahir"
                                    value="{{ old('tgl_lahir') }}" required />
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">Daftar</button>
                                <a class="btn btn-danger" href="{{ route('daftar') }}">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>

</html>
