<html>

<head>
    <title>Ubah Artikel</title>
</head>

<body>
    <h1>Mengubah Artikel</h1>
    <?php foreach ($user as $u) { ?>
        <form action="<?= base_url('user/update'); ?>" method="post">
            <table>
                <tr>
                    <td>Judul</td>
                    <input type="hidden" name="id" value="<?= $u->id_artikel ?>">
                    <td><input type="text" name="judul" value="<?= $u->judul_artikel ?>"></td>
                </tr>
                <tr>
                    <td>Isi Artikel</td>
                    <td><textarea name="isi" cols="60" rows="5"><?= $u->isi_artikel ?></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="update"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>