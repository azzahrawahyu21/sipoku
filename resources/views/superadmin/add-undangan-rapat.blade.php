<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Undangan Rapat Superadmin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/superadmin/add-undangan-rapat.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- Back Button -->
            <div class="back-button">
                <a href="{{route ('superadmin.undangan-rapat')}}"><img src="/img/user-manage/Vector_back.png" alt=""></a>
            </div>
            <h1>Add Undangan Rapat</h1>
        </div>        
        <div class="row">
            <div class="breadcrumb-wrapper">
                <div class="breadcrumb">
                    <a href="#">Home</a>/<a href="#">Undangan Rapat</a>/<a href="#">Add Undangan Rapat</a>
                </div>
            </div>
        </div>

        <!-- form add undangan rapat -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"><b>Form Add Undangan Rapat</b></h5>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="tgl_surat" class="form-label">
                            <img src="/img/undangan-rapat-superadmin/date.png" alt="date" style="margin-right: 5px;">Tgl. Surat
                        </label>
                        <input type="date" name="tgl_surat" id="tgl_surat" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="seri_surat" class="form-label">Seri Surat</label>
                        <input type="text" name="seri_surat" id="seri_surat" class="form-control" placeholder="Masukkan Seri Surat" required>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="nomor_surat" class="form-label">Nomor Surat</label>
                        <input type="text" name="nomor_surat" id="nomor_surat" class="form-control" placeholder="Masukkan Nomor Surat" required>
                    </div>
                    <div class="col-md-6">
                        <label for="jenis_surat" class="form-label">Jenis Surat</label>
                        <select name="jenis_surat" id="jenis_surat" class="form-control" required>
                            <option value="" disabled selected style="text-align: left;">--Pilih--</option>
                            <option value="undangan">Surat Undangan</option>
                            <option value="biasa">Surat Biasa</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="kepada" class="form-label">
                            <img src="/img/undangan-rapat-superadmin/kepada.png" alt="kepada" style="margin-right: 5px;">Kepada
                            <label for="kepada" class="label-kepada">*Pisahkan dengan titik koma(;) jika penerima lebih dari satu</label>
                        </label>
                        <input type="text" name="kepada" id="kepada" class="form-control" placeholder="1. Kepada Satu; 2. Kepada Dua; 3. Kepada Tiga" required>
                    </div>
                    <div class="col-md-6" >
                        <label for="perihal" class="form-label">Perihal</label>
                        <input type="text" name="perihal" id="perihal" class="form-control" placeholder="Masukkan Perihal / Judul Surat" required>
                    </div>
                </div>

                <div class="row mb-4 isi-surat-row">
                    <div class="col-md-12">
                        <img src="\img\undangan-rapat-superadmin\isi-surat.png" alt="isiSurat"style=" margin-left: 10px;">
                        <label for="isi-surat">Isi Surat</label>
                    </div>
                </div>

                <div class="row editor-container">
                    <!-- Kolom Editor -->
                    <div class="col-12 mb-4">
                        <textarea id="editor" name="isi_surat"></textarea>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="jenis_surat" class="form-label">Nama Pimpinan</label>
                        <select name="jenis_surat" id="jenis_surat" class="form-control" required>
                            <option value="" disabled selected style="text-align: left;">--Pilih--</option>
                            <option value="undangan">Surat Undangan</option>
                            <option value="biasa">Surat Biasa</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="upload_file" class="form-label">Lampiran</label>
                        <div class="upload-wrapper">
                            <button type="button" class="btn btn-primary upload-button" data-bs-toggle="modal" data-bs-target="#uploadModal">Choose File</button>
                            <input type="file" id="upload_file" name="upload_file" class="form-control-file" hidden>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn-footer1"><a href="{{route ('superadmin.undangan-rapat')}}">Cancel</a></button>
                <button class="btn-footer2">Save</button>
            </div>
        </div>
    </div>
    
    <!-- Modal Upload File -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">
                        <img src="/img/undangan-rapat-superadmin/cloud-add.png" alt="Icon" style="width: 24px; margin-right: 10px;">
                        Upload files
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="modal-subtitle">Select and upload the files of your choice</p>
                    <div class="upload-container">
                        <div class="upload-box" id="uploadBox">
                            <img src="/img/undangan-rapat-superadmin/cloud-add.png" alt="Cloud Icon" style="width: 40px; margin-bottom: 10px;">
                            <p class="upload-text">Choose a file or drag & drop it here</p>
                            <p class="upload-note">PDF file size no more than 20MB</p>
                            <button class="btn btn-outline-primary" id="selectFileBtn">Select File</button>
                            <input type="file" id="fileInput" accept=".pdf" style="display: none;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="uploadBtn" >Upload</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Hubungkan tombol "Select File" dengan input file
        document.getElementById('selectFileBtn').addEventListener('click', function () {
            document.getElementById('fileInput').click();
        });

        // Deteksi perubahan file dan aktifkan tombol Upload
        document.getElementById('fileInput').addEventListener('change', function () {
            const uploadBtn = document.getElementById('uploadBtn');
            if (this.files.length > 0) {
                uploadBtn.disabled = false; // Aktifkan tombol Upload jika ada file terpilih
            } else {
                uploadBtn.disabled = true; // Nonaktifkan tombol Upload jika tidak ada file
            }
        });

    </script>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>