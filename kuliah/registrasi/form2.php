<!DOCTYPE html>
<html lang="id">
  <head>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="img/logonf.png" style="width:50%">
                        <h2 class="py-3">Pendaftaran Seminar</h2>
                        <p>Kampus IT STT Terpadu NurulFikri <br/>Program Studi Sistem Informasi dan<br/> Teknik Informatika.

</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Peserta Wajib Isi Form Pendaftaran</h4>
                <form method="POST" action="proses2.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="Full Name" name="fullname" placeholder="Full Name" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input id="Mobile No." name="mobilehp" placeholder="Mobile No." class="form-control" required="required" type="text">
                        </div>
                        <div class="form-group col-md-6">
                        <?php 
        $ar_profesi = [1=>"Mahasiswa","Guru","Dosen","ASN","Umum"];
                        ?>
                                  <select id="inputState" name="profesi" class="form-control">
                                    <option selected>Profesi ...</option>
                   <?php 
                   foreach($ar_profesi as $k => $v){
                    echo  '<option value="'.$k.'">'.$v.'</option>';
                   }
                    
          
                   ?>
                   <!--
                                    <option> Mahasiswa</option>
                                    <option> Dosen</option>
                                    <option> Guru</option>
                                    <option> Umum</option>-->
                                  </select>
                        </div>
                        <div class="form-group col-md-12">
                                  <textarea id="comment" name="komentar" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                  <label class="form-check-label" for="invalidCheck2">
                                    <small>Dengan meng-clik submit, anda setuju dengan aturan dan kondisi yang kami terapkan.</small>
                                  </label>
                                </div>
                              </div>
                    
                          </div>
                    </div>
                    
                    <div class="form-row">
                        <input type="submit"
                         class="btn btn-danger"
                         value="Kirim"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
