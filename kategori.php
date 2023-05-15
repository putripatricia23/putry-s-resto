
    
    <!--====== SERVICES PART START ======-->
    <?php include_once('header.php'); ?>
    <?php include_once('dbkonek.php'); ?>
    
    <section id="home" class="services-area pt-125 pb-130 mt-5">
        <div class="container">
            <div class="container-fluid px-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><h5>List Kategori Produk</h5></div>
                                <div class="card-body">
                                    <table class="table mt-4">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $data= $db->query("SELECT * FROM jenis_produk");
                                            foreach($data as $d):
                                            ?>
                                        <tr>
                                            <td><?= $d['id'] ?></td>
                                            <td><?= $d['nama'] ?></td>
                                            <td>
                                                <a href="delete_kategori.php?id=<?= $d['id'] ?>" class="btn btn-success">Hapus Data</a>
                                                <a href="form_update_kategori.php?id=<?= $d['id'] ?>" class="btn btn-success">Edit Data</a>
                                            </td>                                     
                                        </tr>
                                            <?php 
                                            endforeach;
                                            ?>                       
                                        </tbody>
                                    </table>
                                    <a href="form_kategori.php" class="btn btn-success mt-4">Input Baru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>
    
    <!--====== FOOTER PART START ======-->
    
    <?php include_once('footer.php'); ?>