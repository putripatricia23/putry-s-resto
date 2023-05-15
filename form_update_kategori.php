<?php include_once('header.php'); ?>
    <?php include_once('dbkonek.php'); ?>
    <?php 
    $data = $db->query("SELECT * FROM jenis_produk where id='$_GET[id]'");
    $kategori= $data->fetch();
    ?>
    
    <section id="service" class="services-area pt-125 pb-130 mt-5">
    <main>
        <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Edit Data</h5>
              </div>
              <div class="card-body">
                  <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12 mt-4">
                            <!-- masukin form disini -->
                            <form method="POST" action="update_kategori.php">
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama</label> 
                                    <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-arrows"></i>
                                        </div>
                                        </div> 
                                        <input id="nama" name="nama" type="text" class="form-control" value="<?= $kategori['nama'] ?>">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <input type="hidden" name="id" value="<?=$_GET['id']?>">
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