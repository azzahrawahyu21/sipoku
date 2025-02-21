<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Memo Supervisor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/supervisor/laporan.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- Back Button -->
            <div class="back-button">
                <a href="#"><img src="/img/user-manage/Vector_back.png" alt=""></a>
            </div>
            <h1>Laporan Memo</h1>
        </div>        
        <div class="row">
            <div class="breadcrumb-wrapper">
                <div class="breadcrumb">
                    <a href="#">Home</a>/<a href="#">Laporan</a>/<a href="#">Laporan Memo</a>
                </div>
            </div>
        </div>

        <!-- form add memo -->
        <div class="card">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card-blue">
                            <img src="/img/laporan/tanggal.png" alt="date">
                            <span>Tanggal Awal</span>
                        </div>
                        <input type="date" name="tgl_surat" id="tgl_surat" class="form-control" required>
                    <p>* Masukkan tanggal awal filter data memo!</p>
                    </div> 
                    <div class="col-md-6">
                        <div class="card-blue">
                            <img src="/img/laporan/tanggal.png" alt="date">
                            <span>Tanggal Akhir</span>
                        </div>
                        <input type="date" name="tgl_surat" id="tgl_surat" class="form-control" required>
                    <p>* Masukkan tanggal akhir filter data memo!</p>
                    </div>
                </div>
            </div>
            <form action="#" method="GET">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="edit-button">Filter</button>
                    <button type="button" class="btn btn-secondary" id="cancel-button">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>