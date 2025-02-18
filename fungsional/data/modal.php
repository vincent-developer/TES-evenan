<style>
  #pesanAwal, #pesanUpgrade
  {
    display: none;
    width: 700px;
    background-color: black;
    color: white;
  }

  #pesanAwal img, #pesanUpgrade img
  {
    display: block;
    margin: auto;
  }

  #pesanAwal a, #pesanUpgrade a
  {
    width: 100%;
  }
</style>

<!-- Button trigger modal -->

<div id="pesanAwal">
	
    <img src="./img/Lock.png" width="25%">
    <h2 align="center">Maaf</h2>
    <p align="center">Anda harus melakukan pendaftaran terlebih dahulu...</p>
 
  <a href='#' id="tombolAwal" class="btn btn-warning text-white"><h4>Daftar</h4></a>
</div>

<div id="pesanUpgrade">
	
    <img src="./img/Lock.png" width="25%">
    <h2 align="center">Upgrade Status Membership</h2>
    <p align="center">Anda harus Upgrade Status terlebih dahulu...</p>
 
  <a href='?hal=akun-membership&tuj=profile' id="tombolUpg" class="btn btn-warning text-white"><h4>Upgrade</h4></a>
</div>




<div class="modal fade" id="editUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="post" action="?hal=akun-respon&mode=edit" enctype="multipart/form-data">
          <p>
            <input value="<?php echo $namauser; ?>" class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
          </p>
          <p>
            <textarea id="my-textarea" class="form-control" name="alamat" placeholder="Alamat" rows="3"><?php echo $alamat; ?></textarea>
          </p>
          <p>
            <input value="<?php echo $nohp; ?>" class="form-control" type="number" name="nohp" placeholder="No. Handphone" required>
          </p>
          <p>
            <input value="<?php echo $email; ?>" class="form-control" type="email" name="email" placeholder="E-Mail" required>
          </p>



          <p>
            <input value="<?php echo $passw; ?>" class="form-control tampilinPass" type="password" name="password" placeholder="Password" required>
            &nbsp;<input type="checkbox" class="tampilPassword"> <small>Tampilkan Password</small> <br>
          </p>


          <p>
            <input type="submit" value="SIMPAN" class="btn btn-primary">
          </p>
        </form>

      </div>

    </div>
  </div>
</div>

<div class="modal modal-daftar">
  <div class="row">
    <div class="col col-gambar">
      <img src="./img/Side_Logo.png" alt="">
    </div>
    <div class="col col-login">
      <div class="container-form">
        <img class="close close-login" src="./img/Cancel_Icon.png" alt="">
        <h1>SELAMAT DATANG DI<span>TE SOCIETY</span></h1>
        <p>Daftar Akun Elites Kamu!</p>

        <form action="?hal=daftar-respon" method="post">
          <label class="nama" for="nama">Nama Lengkap</label>
          <input type="text" name="nama" id="nama" class="text-input" placeholder="Masukan nama lengkap anda" required>

          <label class="alamat" for="alamat">Alamat Lengkap</label>
          <textarea class="text-input input-alamat" name="alamat" id="alamat" required></textarea>

          <label class="tgl-lahir" for="tgl-lahir">Tanggal Lahir</label>
          <input type="date" name="tglahir" id="tgl-lahir" class="text-input" required>

          <label class="gender" for="gender">Jenis Kelamin</label>
          <select class="text-input" id="gender" name="jekel" required>
            <option selected="true" disabled="disabled">Pilih</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>

          <label class="no-hp" for="no-hp">Nomor Handphone</label>
          <input type="number" name="nohp" id="no-hp" class="text-input" placeholder="Tuliskan nomor handphone aktif anda" required>

          <label class="email" for="email">E-mail</label>
          <input type="email" name="email" id="no-hp" class="text-input" placeholder="Masukkan E-mail" required>

          <label class="pass" for="pass">Kata Sandi</label>
          <input type="password" name="password" id="pass" class="text-input tampilinPass" style="margin-bottom: 5px;" placeholder="Masukan kata sandi yang terdaftar" required>
          
          &nbsp;<input type="checkbox" class="tampilPassword"> <small style="color: black;">Tampilkan Password</small> <br>
                <small class="text-danger passTaksama">Password yang diketikkan tidak sama</small>

          <label class="pass" for="pass-conf">Konfirmasi Kata Sandi</label>
          <input type="password" name="pass-conf" id="pass2" class="text-input" placeholder="Tuliskan ulang kata sandi yang terdaftar" required>
          <small class="text-danger passTaksama">Password yang diketikkan tidak sama</small>

          <input type="checkbox" name="setujuan" id="tc" required>
          <label class="tc" for="tc">Saya telah membaca dan menyetujui<span><a data-toggle="modal" data-target="#Setujuan" href="#">Syarat dan Ketentuan</a></span></label>
          <button type="submit" class="btn">Daftar</button>
        </form>

        
        <p>Sudah punya akun Elites?<span><a class="modal-trigger-login" href="#">Login</a></span></p>
      </div>
    </div>
  </div>
</div>

<!--MODAL-->
<div class="modal modal-login">
    <div class="row">
        <div class="col col-gambar">
            <img src="./img/Side_Logo.png" alt="">
        </div>
        <div class="col col-login">
            <div class="container-form">
                <img class="close close-login" src="./img/Cancel_Icon.png" alt="">
                <h1>SELAMAT DATANG DI<span>TE SOCIETY</span></h1>
                <p>Masuk ke Akun Elites Kamu!</p>

                <form action="?hal=login-respon" method="post">
                    <label class="email" for="email">Alamat Email</label>
                    <input type="email" name="email" id="email" class="text-input" placeholder="Masukan alamat email yang terdaftar">
                    <label class="pass" for="pass">Kata Sandi</label>
                    <input type="password" name="password" id="pass" class="text-input" placeholder="Masukan kata sandi yang terdaftar">
                    <!--<input type="checkbox" name="remember" id="remember">
                    <label class="remember" for="remember">Ingatkan Saya</label>
                    -->
                    <!--<a href="#">Lupa Kata Sandi?</a>-->
                   
                    <button type="submit" class="btn">Login</button>
                    <p>Belum punya akun Elites?<span><a class="modal-trigger-daftar" href="#">Daftar</a></span></p>
                </form>

                
            </div>
        </div>
    </div>
</div>