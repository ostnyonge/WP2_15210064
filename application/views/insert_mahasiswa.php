<!-- ----------------- VIEW | INPUT ----------------- -->
<html>

<head>

    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class="position-absolute top-50 start-50 translate-middle">

    <form action="<?= base_url('index.php/mahasiswa/insertData'); ?>" method="post">

        <table>
            <h1 style="text-align: center; font-size: 18; font-weight: bold;">
                Tambah Data Mahasiswa
            </h1>
            <div class="mt-5">
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <div>
                        <td>
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM">
                        </td>
                    </div>
                </tr>
            </div>
            <tr>
                <td style="width: 75px">Nama</td>
                <td style="width: 10px">: </td>
                <td>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
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
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat">
                </td>
            </tr>
        </table>
        <br>
        <?php
        $this->load->library('form_validation');
        echo validation_errors();
        ?>
        <div>
            <input class="btn btn-success" role="button" type="submit" name="submit" id="submit" value="SIMPAN">
        </div>
    </form>
    <div>
        <a href="<?= base_url('index.php/mahasiswa/'); ?>" class="btn btn-danger" role="button">
            BATAL
        </a>
    </div>
</body>

</html>