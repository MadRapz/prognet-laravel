<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Data</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-image: url('{{ asset('Picture/bg.jpg') }}');">
    <div class="container center-containform">
        <div class="row" class="container center-containerInnr" style="border: 5px solid rgb(5, 178, 247)">
            <div class="col-lg-12 mb-1 mb-sm-1">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-6">
                    <div class="col-lg-6 px-xl-10">
                        <h3 class="h2 text-black mb-0">Detail Data</h3><br>
                        <table class="table">
                            <tr>
                                <td><strong>Nama:</strong></td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td><strong>NIM:</strong></td>
                                <td>{{ $data->nim }}</td>
                            </tr>
                            <tr>
                                <td><strong>Status:</strong></td>
                                <td>{{ $data->status }}</td>
                            </tr>
                            <tr>
                                <td><strong>Program Studi:</strong></td>
                                <td>{{ $data->program_studi }}</td>
                            </tr>
                            <tr>
                                <td><strong>Hobi:</strong></td>
                                <td>{{ $data->hobi }}</td>
                            </tr>
                            <tr>
                                <td><strong>Email:</strong></td>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr>
                                <td><strong>Alamat:</strong></td>
                                <td>{{ $data->alamat }}</td>
                            </tr>
                            <tr>
                                <td><strong>No. Handphone:</strong></td>
                                <td>{{ $data->no_hp }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('formulir.index') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
