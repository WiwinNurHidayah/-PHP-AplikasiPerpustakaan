

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>ISBN</th>
											<th>Jumlah Buku</th>
											<th>Lokasi</th>
											<?php
											if (isset ($_SESSION['admin'])) { ?>
											<th>Aksi</th>
											<?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
									
										<?php
										
											$no = 1;
										
											$sql = $koneksi->query("select * from tb_buku");
											
											while ($data=$sql->fetch_assoc()) {
										
										
										?>
									
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $data['judul'];?></td>
											<td><?php echo $data['pengarang'];?></td>
											<td><?php echo $data['penerbit'];?></td>
											<td><?php echo $data['isbn'];?></td>
											<td><?php echo $data['jumlah_buku'];?></td>
											<td><?php echo $data['lokasi'];?></td>
											<?php
											if (isset ($_SESSION['admin'])) { ?>
											<td>
												<a href="?page=buku&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info" >Ubah</a>
												<a onclick="return confirm('Hapus data ini?')"href="?page=buku&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger" >Hapus</a>
											
											</td>
											<?php } ?>
										</tr>
										
										
										<?php } ?>
									</tbody>
									</table>
									</div>
									<a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-top: 8px;">Tambah Data</a>
									
									
									
								</div>
						</div>
					</div>
		</div>