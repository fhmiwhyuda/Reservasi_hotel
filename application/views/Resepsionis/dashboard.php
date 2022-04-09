<?php
    $book = $this->db->get('pemesanan')->result();
    $data = [];
    foreach ($book as $key => $track) {
        $datatrack[$key] = array('pemesanan' => $track,);
    }
    $tipe = $this->db->get('tipe_room')->result();

    $data['datatrack'] = $datatrack;
    $data['dataroom'] = $tipe;
    
?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($data['dataroom'] as $key => $item) : ?>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $item->stok ?></h3>
                            <p><?= $item->nama_room ?></p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-home"></i>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>