

    <!--====== SERVICES PART START ======-->
    <?php include_once('header.php'); ?>
    <?php include_once('dbkonek.php'); ?>
    <section id="service" class="services-area pt-125 pb-130 mt-5">
    <main>
        <div class="container-fluid px-4">
            <div class="section-title pb-30">
                <h5 class="mb-15">FORM TAMBAH PESANAN</h5>
            </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Tambah List</h5>
              </div>
              <div class="card-body">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-4"> 
                            <form method="POST" action="proses_pesanan.php">
                                <div class="form-group row">
                                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
                                    <div class="col-8">
                                    <input id="tanggal" name="tanggal" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_pemesan" class="col-4 col-form-label">Nama</label> 
                                    <div class="col-8">
                                    <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label> 
                                    <div class="col-8">
                                    <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_hp" class="col-4 col-form-label">No Hp</label> 
                                    <div class="col-8">
                                    <input id="no_hp" name="no_hp" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label> 
                                    <div class="col-8">
                                    <input id="email" name="email" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah</label> 
                                    <div class="col-8">
                                    <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
                                    <div class="col-8">
                                    <input id="deskripsi" name="deskripsi" type="text" class="form-control">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="produk_id" class="col-4 col-form-label">ID Produk</label> 
                                    <div class="col-8">
                                    <input id="produk_id" name="produk_id" type="text" class="form-control">
                                    </div>
                                </div>  
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>  
                            </div>
                        </div>
                  </div>
              </div>
          </div>
        </div>
        </div>
    </main>
    </section>

    <!--====== FOOTER PART START ======-->
    <?php include_once('footer.php'); ?>
    
    
   
  
 
