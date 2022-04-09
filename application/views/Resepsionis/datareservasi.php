<?php
    $book = $this->db->get('pemesanan')->result();
?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data reservasi</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama tamu</th>
                    <th>Tanggal check in</th>
                    <th>Tanggal check out</th>
                    <th>Keterangan</th>
                    <th>Kode booking</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($book as $key => $item) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $item->nama_tamu ?></td>
                        <td><?= $item->tgl_checkin ?></td>
                        <td><?= $item->tgl_checkout ?></td>
                        <td>
                            <?php 
                                if ($item->payend == "") {
                                    echo 'Batal';
                                }if ($item->payend == "0") {
                                    echo 'Belum dibayar';
                                }else if ($item->payend == "1") {
                                    echo 'Sudah dibayar';
                                } 
                            ?>
                        </td>
                        <td><?= $item->refpb ?></td>
                        <td>
                            <?php
                                if ($item->status == "1"){
                                    echo '<button class="badge bg-success" data-toggle="modal" data-target="#update">Check out</button>';
                                } if ($item->status == "0"){
                                    echo '<button class="badge bg-warning" data-toggle="modal" data-target="#update">Dalam proses</button>';
                                } else if ($item->status == ""){
                                    echo '<button class="badge bg-danger" data-toggle="modal" data-target="#update">Batal</button>';
                                }
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="update">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?php foreach ($book as $key2 => $data) : ?>
                <form method="post" action="<?= base_url('Resepsionis/update' .'?id='. $data->id)?>">
            <?php endforeach; ?>
                    <select class="modal-footer justify-content-between" name="update">
                        <option value="" data-display="Website">Batal</option>
                        <option value="0">Dalam proses</option>
                        <option value="1">Check out</option>
                    </select>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                        <button type="submit" class="btn btn-primary">simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>