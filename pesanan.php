    
    <!--====== SERVICES PART START ======-->
    <?php include_once('header.php'); ?>
    <?php include_once('dbkonek.php'); ?>
    
    <section id="product" class="product-area pt-125 pb-130 mt-5">
        <div class="container">
            <div class="container-fluid px-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><h5>List Pesanan</h5></div>
                                <div class="card-body">
                                    <table class="table mt-4 table-responsive">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">No Hp</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Jumlah</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">ID Produk</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $data= $db->query("SELECT * FROM pesanan");
                                            foreach($data as $d):
                                            ?>
                                        <tr>
                                            <td><?= $d['id'] ?></td>
                                            <td><?= $d['tanggal'] ?></td>
                                            <td><?= $d['nama_pemesan'] ?></td>
                                            <td><?= $d['alamat_pemesan'] ?></td>
                                            <td><?= $d['no_hp'] ?></td>
                                            <td><?= $d['email'] ?></td>
                                            <td><?= $d['jumlah_pesanan'] ?></td>
                                            <td><?= $d['deskripsi'] ?></td>
                                            <td><?= $d['produk_id'] ?></td>
                                            <td>
                                                <a href="delete_pesanan.php?id=<?= $d['id'] ?>" class="btn btn-success">Hapus</a>
                                                <a href="form_update_pesanan.php?id=<?= $d['id'] ?>" class="btn btn-success">Edit</a>
                                            </td>                                     
                                        </tr>
                                            <?php 
                                            endforeach;
                                            ?>                       
                                        </tbody>
                                    </table>
                                    <a href="form_pesanan.php" class="btn btn-success mt-4">Input Baru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>
    <?php include_once('footer.php'); ?>
