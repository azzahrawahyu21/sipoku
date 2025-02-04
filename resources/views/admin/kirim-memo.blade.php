<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Memo Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/admin/kirim-memo.css') }}">  
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- Back Button -->
            <div class="back-button">
                <a href="#"><img src="/img/memo-admin/Vector_back.png" alt=""></a>
            </div>
            <h1>Memo</h1>
        </div>        
        <div class="row">
            <div class="breadcrumb-wrapper">
                <div class="breadcrumb">
                    <a href="#">Home</a>/<a href="#">Memo</a>/<a href="#">Memo Terkirim</a>
                </div>
            </div>
        </div>

        <!-- Cards in a row  -->
        <div class="row">
            <!-- Card Utama untuk Kolom 1 -->
            <div class="col-md-6">
                <!-- form add memo -->
                <div class="card-body">
                    <div class="row-mb-4">
                        <div class="col-md-6">
                            <div class="card-blue">
                                <img src="/img/memo-admin/info-surat.png" alt="info surat">
                                <span>Informasi Detail Surat</span>
                            </div>
                            <div class="card-white">
                                <label for="nomor">No Surat</label>
                                <div class="separator"></div>
                                <input type="text" id="nomor">
                            </div>
                            <div class="card-white">
                                <label for="lampiran">Lampiran</label>
                                <div class="separator"></div>
                                <input type="text" id="lampiran">
                            </div>
                            <div class="card-white">
                                <label for="perihal">Perihal</label>
                                <div class="separator"></div>
                                <input type="text" id="perihal">
                            </div>
                            <div class="card-white">
                                <label for="tanggal">Tanggal</label>
                                <div class="separator"></div>
                                <input type="text" id="tanggal">
                            </div>
                            <div class="card-white">
                                <label for="kepada">Kepada</label>
                                <div class="separator"></div>
                                <input type="text" id="kepada">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Utama untuk Kolom 2 -->
            <div class="col-md-6">
                <div class="card-body">
                    <div class="row-mb-4">
                        <div class="col-md-6">
                            <div class="card-blue">
                                <img src="/img/memo-admin/detail.png" alt="detail">
                                <span>Detail</span>
                            </div>
                            <div class="card-white">
                                <label for="pembuat">Pembuat</label>
                                <div class="separator"></div>
                                <input type="text" id="pembuat">
                            </div>
                            <div class="card-white">
                                <label for="status">Status</label>
                                <div class="separator"></div>
                                <input type="text" id="status">
                            </div>
                            <div class="card-white">
                                <label for="dibuat">Dibuat Tanggal</label>
                                <div class="separator"></div>
                                <input type="text" id="dibuat">
                            </div>
                            <div class="card-white">
                                <label for="file">File</label>
                                <div class="separator"></div>
                                <button><img src="/img/memo-admin/preview.png" alt="preview"> Preview</button>
                                <button style="margin-left: 5px;"><img src="/img/memo-admin/download.png" alt="unduh"> Download</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <!-- Cards in a row  -->
                <div class="row">
            <!-- Card Utama untuk Kolom 1 -->
            <div class="col-md-6">
                <!-- form add memo -->
                <div class="card-body">
                    <div class="row-mb-4">
                        <div class="col-md-6">
                            <div class="card-blue">
                                <!-- <span>Pengesahan</span> -->
                                <label for="pengesahan">Pengesahan</label>
                                <div class="form-check me-3">
                                    <input type="checkbox" class="form-check-input" id="approve" name="approval" value="approve">
                                    <label class="form-check-label" for="approve">Approve</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="reject" name="approval" value="reject">
                                    <label class="form-check-label" for="reject">Reject</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Utama untuk Kolom 2 -->
            <div class="col-md-6">
                <div class="card-body">
                    <div class="row-mb-4">
                        <div class="col-md-6">
                            <div class="card-blue">
                                <span>Catatan</span>
                            </div>
                            <div class="card-white">
                                <input type="text" id="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <form action="#" method="GET">
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="edit-button">Save</button>
                <button type="button" class="btn btn-secondary" id="cancel-button">Cancel</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
