<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PWEB Anas</title>
<link rel="stylesheet" href="/css/utsstyle.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/abd72f58cd.js" crossorigin="anonymous"></script>
<script src="uts.js"></script>
</head>
<body>

<!--Navbar Section-->

   <section id="nav-bar">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <a class="navbar-brand navbar-brand-fadeup" href="#banner"><i class="fa-solid fa-house-chimney fa-emoji-brand"></i>Home</a>
        <div class=" navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link nav-link-fadeup" href="#content"><i class="fa-solid fa-newspaper fa-emoji"></i>Portofolio</a>
            <a class="nav-link nav-link-fadeup" href="#address"><i class="fa-solid fa-location-dot fa-emoji"></i>Address</a>
            <a class="nav-link nav-link-fadeup" href="#form"><i class="fa-solid fa-phone fa-emoji"></i>Contact us</a>
          </div>
        </div>
        <div class="socials">
          <p>Connect with me : </p>
          <a href="https://www.linkedin.com/in/anasghifari/" target="_blank"><i class="fa-brands fa-linkedin fa-xl"></i></a>
          <a href="https://www.instagram.com/ans.gk/" target="_blank"><i class="fa-brands fa-instagram fa-xl"></i></a>
          <a href="https://twitter.com/anaaaslagi" target="_blank"><i class="fa-brands fa-twitter fa-xl"></i></a>
          <a href="https://github.com/Anaaaslagi" target="_blank"><i class="fa-brands fa-github fa-xl"></i></a>
        </div>
      </div>
    </nav>
  </section>

<!--Banner Section (Home)-->

    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="text-perkenalkan">Anas Ghifari Kemaputra</p>
            <p class="text-biodata">Saya merupakan seorang mahasiswa Sistem Informasi ITS.
              saya memiliki minat di bidang web developer dan hobi saya adalah olahraga.
              Ini merupakan hasil dari desain website yang saya buat untuk UTS PWEB. </p>
          </div>
          <div class="col-md-6  " >
            <img src="{{asset('assets/profilefix.png')}}" class="foto-profile">
          </div>
        </div>
      </div>
      <img src="{{asset('assets/background.png')}}" class="bottom-img">
    </section>

<!--Content Section (Portofolio)-->

    <section id="content">
    <div class="container text-center">
    <h1 style="padding-bottom: 5%;">Portofolio</h1>
    <div class="row">
      <div class="col-md-4">
        <h4>Juara 1 Mabacup ITS 2022</h4>
        <img src="{{asset('assets/img1.png')}}" class="image-content">
        <p class="text-content">Berhasil membawa tim Departemen Sistem Informasi
          Mendapatkan Juara 1 di MABACUP ITS 2022 cabang olahraga Badminton
          tepatnya di regu ganda campuran.
        </p>
      </div>
      <div class="col-md-4">
        <h4>Master Of Ceremony Negasi</h4>
        <img src="{{asset('assets/img2.png')}}" class="image-content">
        <p class="text-content">Menjadi Master of Ceremony di acara Negasi
          (Night Gathering Of System Information) atau malam keakraban
          departemen sistem informasi 2022, yang diselenggarakan di BG Junction
        </p>
      </div>
      <div class="col-md-4">
        <h4>Best Staff OKKBK HMSI</h4>
        <img src="{{asset('assets/img3.png')}}" class="image-content">
        <p class="text-content">Mendapatkan penghargaan Best Staff divisi Acara
          pada acara Orientasi Keprofesian dan Kompetensi Berbasis Kurikulum
          Departemen Sistem Informasi 2023
        </p>
      </div>
    </div>
    </div>
    </section>
    <img src="{{asset('assets/background1.png')}}" class="bottom-img">

<!--Address Section-->

    <section id="address">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-6 text-center">
            <a href="https://maps.app.goo.gl/qbV3jpLyTzwYAtjg6" target="_blank"><img src="{{asset('assets/location1.jpeg')}}" class="image-location"></a>
          </div>
          <div class="col-md-6 text-left">
            <div class="right-content">
            <h1 class="text-address">Wanna catch up?</h1>
            <p class="content-address">Selama berkuliah di Surabaya, saya tinggal di
              Perumahan Bumi Marina Emas Selatan Blok E16-A
              kelurahan Keputih, Kecamatan Sukolilo, Kota Surabaya.
            </p>
            <a href="https://maps.app.goo.gl/qbV3jpLyTzwYAtjg6" target="_blank" class="address-link"><i class="fa-solid fa-arrow-left-long" ></i> Klik map disamping untuk mengetahui lokasinya</a>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!--Form Section-->

      <section id="form">
        <div class="container">
          <div class="text-center pb-3">
            <h1>Stay In Touch</h1>
            <p>Wanna Talk? Dont hesitate to contact me</p>
          </div>
          <form id="contact-form d-flex justify-content-center" action="" >
            <div class="form-group row">
              <div class="col-md-2 col-lg-3"></div>
              <div class="col-12 col-md-8 col-lg-6 mb-3">
                <label for="namadepan" class="labelform">Nama Depan :</label>
                <input type="text" id="namadepan" class="form-control form-control-md border-0 inputform" placeholder=""/>
              </div>
              <div class="col-md-2 col-lg-3"></div>

              <div class="col-md-2 col-lg-3"></div>
              <div class="col-12 col-md-8 col-lg-6">
                <h1 id="validasidepan"></h1>
              </div>
              <div class="col-md-2 col-lg-3"></div>

              <div class="col-md-2 col-lg-3"></div>
              <div class="col-12 col-md-8 col-lg-6 mb-3">
                <label for="namabelakang" class="labelform">Nama Belakang :</label>
                <input type="text" id="namabelakang" class="form-control form-control-md border-0 inputform" placeholder=""/>
              </div>
              <div class="col-md-2 col-lg-3"></div>

              <div class="col-md-2 col-lg-3"></div>
              <div class="col-12 col-md-8 col-lg-6">
                <h1 id="validasibelakang"></h1>
              </div>
              <div class="col-md-2 col-lg-3"></div>

              <div class="col-md-2 col-lg-3"></div>
              <div class="col-12 col-md-8 col-lg-6 mb-3">
                <label for="nrp" class="labelform">NRP :</label>
                <input type="text" id="nrp" class="form-control form-control-md border-0 inputform" placeholder=""/>
              </div>
              <div class="col-md-2 col-lg-3"></div>

              <div class="col-md-2 col-lg-3"></div>
              <div class="col-12 col-md-8 col-lg-6">
                <h1 id="validasinrp"></h1>
              </div>
              <div class="col-md-2 col-lg-3"></div>

              <div class="col-md-2 col-lg-3"></div>
              <div class="col-12 col-md-8 col-lg-6 mb-3">
                <label for="nomor" class="labelform">Nomor WA :</label>
                <input type="text" id="nomor" class="form-control form-control-md border-0 inputform" placeholder="Mulai dengan +628"/>
              </div>
              <div class="col-md-2 col-lg-3"></div>

              <div class="col-md-2 col-lg-3"></div>
              <div class="col-12 col-md-8 col-lg-6">
                <h1 id="validasinomor"></h1>
              </div>
              <div class="col-md-2 col-lg-3"></div>

              <div class="col-md-2 col-lg-3"></div>
              <div class="col-12 col-md-8 col-lg-6 mb-3">
                <label for="pesan" class="labelform">Message :</label>
                <textarea type="text" id="pesan" rows="3" class="form-control form-control-md border-0 inputform" placeholder="Tuliskan pesanmu di sini!"></textarea>
              </div>
              <div class="col-md-2 col-lg-3"></div>

              <div class="col-md-2 col-lg-3"></div>
              <div class="col-12 col-md-8 col-lg-6 pb-3">
                <button onclick="validasi()" type="button" class="submit-btn">Send</button>
              </div>
              <div class="col-md-2 col-lg-3"></div>

              <div class="col-md-2 col-lg-3"></div>
              <div class="col-12 col-md-8 col-lg-6">
                <div id="validasimessage"></div>
              </div>
              <div class="col-md-2 col-lg-3"></div>

            </div>
          </form>
        </section>

    <!--Footer Section-->

        <section id="footer">
          <div class="container text-center text-uppercase">
            <p>Anas's Personal Blog <i class="fa-regular fa-copyright"></i> 2023</p>
          </div>
        </section>
</body>
</html>
