<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-image: url('{{ asset('Picture/bg.jpg') }}');">
    <div class="container center-containform">
        <div class="row" class="container center-containerInnr" style="border: 5px solid rgb(5, 178, 247)">
            <div class="col-lg-12 mb-1 mb-sm-1">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-6">
                    <div class="col-lg-6 px-xl-10">
                        <h3 class="h2 text-black mb-0">EDIT DATA</h3><br>
                        <form method="post" action="{{ route('formulir.update', $data->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-2 mb-xl-3 display-28">
                                <label for="nama" class="display-26 text-dark me-2 font-weight-600 fw-bold">Nama:</label>
                                <input type="text" id="nama" name="nama" value="{{ $data->nama }}" required>
                            </div>
                            <div class="mb-2 mb-xl-3 display-28">
                                <label for="nim" class="display-26 text-dark me-2 font-weight-600 fw-bold">NIM:</label>
                                <input type="text" id="nim" name="nim" pattern="[0-9]{10}" title="Nim hanya terdiri dari 10 angka!!" value="{{ $data->nim }}" required>
                            </div>
                            <div class="mb-2 mb-xl-3 display-28 radio-group">
                                <span class="display-26 text-dark me-2 font-weight-600 fw-bold">Status:</span>
                                <input type="radio" id="mahasiswa" name="status" value="Mahasiswa" required {{ $data->status === 'Mahasiswa' ? 'checked' : '' }}>
                                <label for="mahasiswa">Mahasiswa</label>
                                <input type="radio" id="bekerja" name="status" value="Bekerja" {{ $data->status === 'Bekerja' ? 'checked' : '' }}>
                                <label for="bekerja">Bekerja</label>
                                <input type="radio" id="kuliah-&-bekerja" name="status" value="Kuliah & Bekerja" {{ $data->status === 'Kuliah & Bekerja' ? 'checked' : '' }}>
                                <label for="kuliah-&-bekerja">Kuliah & Bekerja</label>
                                <input type="radio" id="tidak-kuliah-bekerja" name="status" value="Tidak Kuliah/Bekerja" {{ $data->status === 'Tidak Kuliah/Bekerja' ? 'checked' : '' }}>
                                <label for="tidak-kuliah-bekerja">Tidak Kuliah/Bekerja</label>
                            </div>
                            <div class="mb-2 mb-xl-3 display-28">
                                <label for="program-studi" class="display-26 text-dark me-2 font-weight-600 fw-bold">Program Studi:</label>
                                <select id="program-studi" name="program-studi" required>
                                    <option value="S1 Teknologi Informasi" {{ $data->program_studi === 'S1 Teknologi Informasi' ? 'selected' : '' }}>S1 Teknologi Informasi</option>
                                    <option value="S1 Teknik Sipil" {{ $data->program_studi === 'S1 Teknik Sipil' ? 'selected' : '' }}>S1 Teknik Sipil</option>
                                    <option value="S1 Teknik Mesin" {{ $data->program_studi === 'S1 Teknik Mesin' ? 'selected' : '' }}>S1 Teknik Mesin</option>
                                    <option value="S1 Teknik Elektro" {{ $data->program_studi === 'S1 Teknik Elektro' ? 'selected' : '' }}>S1 Teknik Elektro</option>
                                    <option value="S1 Teknik Arsitektur" {{ $data->program_studi === 'S1 Teknik Arsitektur' ? 'selected' : '' }}>S1 Teknik Arsitektur</option>
                                    <option value="S1 Teknik Industri" {{ $data->program_studi === 'S1 Teknik Industri' ? 'selected' : '' }}>S1 Teknik Industri</option>
                                    <option value="S1 Teknik Lingkungan" {{ $data->program_studi === 'S1 Teknik Lingkungan' ? 'selected' : '' }}>S1 Teknik Lingkungan</option>
                                    <option value="-" {{ $data->program_studi === '-' ? 'selected' : '' }}>-</option>
                                </select>
                            </div>
                            <div class="mb-2 mb-xl-3 display-28">
                                <label for="hobi" class="display-26 text-dark me-2 font-weight-600 fw-bold">Hobi:</label>
                                <input type="text" id="hobi" name="hobi" value="{{ $data->hobi }}" required>
                            </div>
                            <div class="mb-2 mb-xl-3 display-28">
                                <label for="email" class="display-26 text-dark me-2 font-weight-600 fw-bold">Email:</label>
                                <input type="email" id="email" name="email" value="{{ $data->email }}" required>
                            </div>
                            <div class="mb-2 mb-xl-3 display-28">
                                <label for="alamat" class="display-26 text-dark me-2 font-weight-600 fw-bold">Alamat:</label>
                                <input type="text" id="alamat" name="alamat" value="{{ $data->alamat }}" required>
                            </div>
                            <div class="display-28">
                                <label for="no-hp" class="display-26 text-dark me-2 font-weight-600 fw-bold">No.Handphone:</label>
                                <input type="tel" id="no-hp" name="no-hp" pattern="[0-9]+" title="Contoh: 08--" value="{{ $data->no_hp }}" required>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary" target="_blank">Update</button>
                                <a href="{{ route('formulir.index') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>