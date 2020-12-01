<html>

<head>
    <title>Buat Artikel</title>
</head>

<body>
    <h1><?= $this->session->userdata('fname'); ?></h1>
    <form action="<?= base_url('admin/add'); ?>" method="post">
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" id="judul"></td>
            </tr>
            <tr>
                <td>Isi Artikel</td>
                <td><textarea name="isi" cols="60" rows="5"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>