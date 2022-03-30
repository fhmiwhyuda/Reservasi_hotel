<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/image/fav.png') ?>" type="image/png">
    <title>Hotel Hebat</title>
    <link href="<?= base_url('assets/css/bootstrap5.0.1.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style_bukti_pesan.css') ?>" rel="stylesheet">
</head>

<body>
    <div id="invoice">
        <div class="toolbar hidden-print">
            <div class="text-right">
                <a href="<?= base_url('Tamu/welcome') ?>" class="btn btn-warning"><i class="fa fa-print"></i>Kembali</a>
                <button id="printInvoice" class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Print as PDF</button>
            </div>
            <hr>
        </div>
        <div class="invoice overflow-auto">
            <div style="min-width: 600px">
                <header>
                    <div class="row">
                        <div class="col">
                            <a target="_blank" href="">
                                <img src="<?= base_url('assets/image/Brand.png') ?>" alt="">
                            </a>
                        </div>
                        <div class="col company-details">
                            <div>Pasirian, Jawa timur, KP 67371, INA</div>
                            <div>(123) 456-789</div>
                            <div class="email"><a href="mailto:hotelhebat@gmail.com">hotelhebat@gmail.com</a></div>
                        </div>
                    </div>
                </header>
                <main>
                    <div class="row contacts">
                        <div class="col invoice-to">
                            <h2 class="to mt-3">HOTEL HEBAT</h2>
                            <div class="address mt-2">Pasirian, Jawa Timur, Indonesia</div>
                        </div>
                        <div class="col invoice-details">
                            <h1 class="invoice-id">Pemesanan</h1>
                            <div class="date">Date: <?php echo date("F j, Y, g:i a"); ?></div>
                        </div>
                    </div>
                    <table border="0" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th class="text-center">NO</th>
                                <th class="text-left">TIPE KAMAR</th>
                                <th class="text-center">CHECK IN</th>
                                <th class="text-center">CHECK OUT</th>
                                <th class="text-center">JUMLAH KAMAR</th>
                                <th class="text-center">KODE BOOKING</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['book'] as $key => $item) : ?>
                                <tr>
                                    <td class="text-center no"><?= $data['no']++ ?></td>
                                    <td class="text-left"><?= $item->nama_room ?></td>
                                    <td class="unit text-center"><?= $item->tgl_checkin ?></td>
                                    <td class="qty text-center"><?= $item->tgl_checkout ?></td>
                                    <td class="unit text-center"><?= $item->jml_kamar ?></td>
                                    <td class="total text-center"><?= $item->refpb ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="mt-4 mb-2">Thank you!</div>
                    <div class="notices">
                        <div>NOTICE:</div>
                        <div class="notice">Pastikan berada di hotel kami 30 menit sebelum check in dan bawa bukti pemesanan ini.</div>
                    </div>
                </main>
                <footer>
                    Bukti pemesanan kamar Hotel Hebat Pasirian - Jawa Timur - Indonesia.
                </footer>
            </div>
            <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
            <div></div>
        </div>
    </div>

    <!-- PANGGIL FILE JAVASCRIPT DARI FOLDER js -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap5.0.1.bundle.min.js') ?>"></script>

    <script>
        $(document).ready(function() {
            $('#printInvoice').click(function() {
                window.print();
            });
        });
    </script>
</body>

</html>