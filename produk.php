    
    <!--====== SERVICES PART START ======-->
    <?php include_once('header.php'); ?>
    <?php include_once('dbkonek.php'); ?>
    
    <section id="product" class="product-area pt-125 pb-130 mt-5">
        <div class="container">
            <div class="container-fluid px-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><h5>List Produk</h5></div>
                                <div class="card-body">
                                    <table class="table mt-4 table-responsive">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Kode</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Harga Jual</th>
                                                <th scope="col">Harga Beli</th>
                                                <th scope="col">Stok</th>
                                                <th scope="col">Min Stok</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">ID Jenis Produk</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $data= $db->query("SELECT * FROM produk");
                                            foreach($data as $d):
                                            ?>
                                        <tr>
                                            <td><?= $d['id'] ?></td>
                                            <td><?= $d['kode'] ?></td>
                                            <td><?= $d['nama'] ?></td>
                                            <td><?= $d['harga_jual'] ?></td>
                                            <td><?= $d['harga_beli'] ?></td>
                                            <td><?= $d['stok'] ?></td>
                                            <td><?= $d['min_stok'] ?></td>
                                            <td><?= $d['deskripsi'] ?></td>
                                            <td><?= $d['jenis_produk_id'] ?></td>
                                            <td>
                                                <a href="delete_produk.php?id=<?= $d['id'] ?>" class="btn btn-success">Hapus</a> <br>
                                                <a href="form_update_produk.php?id=<?= $d['id'] ?>" class="btn btn-success">Edit</a>
                                            </td>                                     
                                        </tr>
                                            <?php 
                                            endforeach;
                                            ?>                       
                                        </tbody>
                                    </table>
                                    <a href="form_produk.php" class="btn btn-success mt-4">Input Baru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>
    <?php include_once('footer.php'); ?>
