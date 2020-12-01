<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
</head>

<body>
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('login'); ?>" method="post">
        <table>
            <tr>
                <td align="center" colspan="2">Enter Login Details</td>
            </tr>
            <?= form_error('user_name'); ?>
            <tr>
                <td align="right">Username</td>
                <td>
                    <input type="text" name="user_name">
                </td>
            </tr>
            <?= form_error('password'); ?>
            <tr>
                <td align="right">Password</td>
                <td>
                    <input type="password" name="password"></td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <button type="submit">SUBMIT</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>