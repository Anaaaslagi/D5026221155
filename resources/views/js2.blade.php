<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/operasi.js"></script>


</head>

<body>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="bil1">Bilangan 1</label>
                <input type="number" id="bil1" class="form-control">
            </div>
            <div class="form-group">
                <label for="bil2">Bilangan 2</label>
                <input type="number" id="bil2" class="form-control">
            </div>

            <input type="button" value="penjumlahan" class="btn btn-primary" onclick="tambah()">
            <input type="button" value="perkalian" class="btn btn-info" onclick="kali()">
            <input type="reset" value="clear" class="btn btn-danger">

            <h3>Hasil Operasi : <div id="Hasil"></div></h3>
        </form>
    </div>
</body>
