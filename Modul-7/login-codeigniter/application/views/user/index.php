<html>

<head>
    <title>User PABW</title>
</head>

<body>
    <table border="0" cellpadding="10" cellspacing="1" width="100%">
        <tr>

            <td align="center">Dashboard <?= $user['fname']; ?></td>
        </tr>
        <tr>
            <td>
                Selamat datang <?= $this->session->userdata('username'); ?>
                Klik disini untuk <a href="<?= base_url('user/logout'); ?>">Logout.</a>
            </td>
        </tr>
        <tr>
            <td><a href="<?= base_url('user/buatArtikel'); ?>">Create</a></td>
        </tr>
    </table>
    <table border="0" cellpadding="10" cellspacing="1" width="100%">
        <?php

        foreach ($artikel as $u) {

        ?>
            <tr>
                <td>
                    <h1><?= $u->judul_artikel; ?></h1>
                    <p><?= $u->isi_artikel; ?></p>
                    <?php echo anchor('user/ubah/' . $u->id_artikel, 'Edit'); ?>
                    <?php echo anchor('user/hapus/' . $u->id_artikel, 'Hapus'); ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>