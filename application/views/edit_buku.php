<!-- ----------------- VIEW | INPUT ----------------- -->
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="position-absolute top-50 start-50 translate-middle">
    <form action="<?= base_url('index.php/buku/update'); ?>" method="post">
        <table>
            <?php
            foreach ($buku as $u):
                ?>
                <tr>
                    <h1 style="text-align: center; font-size: 18; font-weight: bold;">
                        Edit Data Buku
                        <br>
                        <br>
                    </h1>
                </tr>
                <tr>
                    <td>Kode Buku</td>
                    <td>:</td>
                    <td>
                        <input readonly class="form-control" name="kd_buku" id="kd_buku" value="<?php echo $u->kd_buku ?>">
                    </td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $u->judul ?>">
                    </td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td>:</td>
                    <td>
                        <select class="form-control" name="pengarang" id="pengarang">
                            <option hidden value="">--Pilih Pengarang--</option>
                            <option value="Dimas Ariwibowo">Dimas Ariwibowo</option>
                            <option value="Wisnu Situmorang">Wisnu Situmorang</option>
                            <option value="Sandi Kata Kunci">Sandi Kata Kunci</option>
                            <option value="J.K Rowling">J.K Rowling</option>Elektro</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" name="jenis" id="jenis" value="<?php echo $u->jenis ?>">
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="mx-auto mt-4" style="width: 300px;">
            <input class="btn btn-success" role="button" type="submit" name="submit" id="submit" value="SIMPAN">
            <div class="mt-2">
                <a href="<?= base_url('index.php/buku/'); ?>" class="btn btn-danger" role="button" value="BATAL">
                    BATAL
                </a>
            </div>
        </div>
    </form>
    <div class="container mt-1">
        <?php
        $this->load->library('form_validation');
        echo validation_errors();
        ?>
    </div>
</body>

</html>