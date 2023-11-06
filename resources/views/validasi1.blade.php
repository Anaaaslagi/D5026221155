<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style rel="stylesheet" href=""></style>

<script>
    function validateForm(){
        console.log("ini baris 13");
        return false;
        console.log("ini baris 15");
        return true;
        console.log("ini baris 17");
    }

    function validate(){
        var bil1 = document.getElementById("bil1");
        var bil2 = document.getElementById("bil2");
        var nrp = document.getElementById("nrp");

        // if(bil1.value == "" && bil2.value=="" ){
        //     alert("harus isi kedua bilangan");
        //     return false;
        // }

        // else if(bil1.value == ""){
        //     alert("bilangan 1 harus diisi");
        //     return false;
        // }

        // else if(bil2.value == ""){
        //     alert("bilangan 2 harus diisi");
        //     return false;
        // }
        if (nrp.value == ""){
            alert("Kolom nrp harus diisi");
            return false;
        }

        else if(isNaN(nrp.value)){
            alert("nrp harus berupa angka");
            return false;
        }

        else if(nrp.value.length != 10){
            alert("nrp harus sepuluh digit");
            return false;
        }

        else{
            return true;
        }
    }
</script>
</head>

<body>
    <div class="container">
        <form action="https://www.detik.com/" method="post" onsubmit="return validate();">
            <form>
                <div class="form-group">
                    <label for="bil1">Bilangan 1</label>
                    <input type="number" id="bil1" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bil2">Bilangan 2</label>
                    <input type="number" id="bil2" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" id="nrp" class="form-control">
                </div>
                <input type="submit" value="KIRIM" class="btn btn-danger">
            </form>
        </form>
    </div>
</body>
