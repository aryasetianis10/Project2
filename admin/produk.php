<?php
include 'header.php';
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Produk</h1>
            
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga Jual</th>
                                            <th>Harga Beli</th>
                                            <th>Stok</th>
                                            <th>Min Stok</th>
                                            <th>Deskripsi</th>
                                            <th>Update</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'koneksi.php';
                                        $query = "SELECT *
                                                FROM produk";
                                        $sql = mysqli_query($conn, $query);
                                        while ($data = mysqli_fetch_assoc($sql)) {
                                        ?>
                                        <tr>
                                            <td><?= $data['id']; ?></td>
                                            <td><?= $data['kode']; ?></td>
                                            <td><?= $data['nama']; ?></td>
                                            <td><?= $data['harga_jual']; ?></td>
                                            <td><?= $data['harga_beli']; ?></td>
                                            <td><?= $data['stok']; ?></td>
                                            <td><?= $data['min-stok']; ?></td>
                                            <td><?= $data['deskripsi']; ?></td>
                                            <td><a class="btn btn-success" type="button" href=""><i class="fa fa-pen" aria-hidden="true"></i></a></td>
                                            <td><a class="btn btn-danger" type="button" href="hapus_produk.php?=hapus_produk&id=<?= $data['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                        </tr>
                                        <?php
}
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php
            include 'footer.php';
            ?>