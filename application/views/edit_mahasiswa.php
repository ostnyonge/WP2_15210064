<!-- ----------------- VIEW | INPUT ----------------- -->
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="position-absolute top-50 start-50 translate-middle">
    <form action="<?= base_url('index.php/mahasiswa/update'); ?>" method="post">
        <table>
            <?php
            foreach ($mahasiswa as $u):
                ?>
                <tr>
                    <h1 style="text-align: center; font-size: 18; font-weight: bold;">
                        Edit Data Mahasiswa
                        <br>
                        <br>
                    </h1>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <input readonly class="form-control" name="nim" id="nim" value="<?php echo $u->nim ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $u->nama ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option hidden value="">--Pilih Jurusan--</option>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Rekayasa Elektro">Teknik Rekayasa Elektro</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $u->alamat ?>">
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="mx-auto mt-4" style="width: 300px;">
            <input class="btn btn-success" role="button" type="submit" name="submit" id="submit" value="SIMPAN">
            <div class="mt-2">
                <a href="<?= base_url('index.php/mahasiswa/'); ?>" class="btn btn-danger" role="button" value="BATAL">
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