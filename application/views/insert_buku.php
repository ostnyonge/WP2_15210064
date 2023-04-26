<!-- ----------------- VIEW | INPUT ----------------- -->
<html>

<head>

    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class="position-absolute top-50 start-50 translate-middle">

    <form action="<?= base_url('index.php/buku/insertData'); ?>" method="post">

        <table>
            <h1 style="text-align: center; font-size: 18; font-weight: bold;">
                Tambah Data Buku
            </h1>
            <div class="mt-5">
                <tr>
                    <td>Kode Buku</td>
                    <td>:</td>
                    <div>
                        <td>
                            <input type="text" class="form-control" name="kd_buku" id="kd_buku" placeholder="Masukkan Kode Buku">
                        </td>
                    </div>
                </tr>
            </div>
            <tr>
                <td style="width: 75px">Judul</td>
                <td style="width: 10px">: </td>
                <td>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
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
                        <option value="J.K Rowling">J.K Rowling</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Buku</td>
                <td>:</td>
                <td>
                    <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Masukkan Jenis">
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
        <a href="<?= base_url('index.php/buku/'); ?>" class="btn btn-danger" role="button">
            BATAL
        </a>
    </div>
</body>

</html>