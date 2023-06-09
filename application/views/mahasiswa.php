<html>

<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

<body class="position-absolute top-50 start-50 translate-middle">

    <legend style="text-align: center; font-family: Arial, Helvetica, sans-serif;;">Data Mahasiswa</legend>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th style="text-align: center;">No.</th>
                <th style="text-align: center;">NIM</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">Jurusan</th>
                <th style="text-align: center;">Alamat</th>
                <th style="text-align: center;">Hapus</th>
                <th style="text-align: center;">Edit</th>
            </tr>
        </thead>
        <?php $no = 0;
        foreach ($mahasiswa as $row):
            $no++; ?>
            <tr>
                <td>
                    <?php echo $no; ?>
                </td>
                <td>
                    <?php echo $row->nim; ?>
                </td>
                <td>
                    <?php echo $row->nama; ?>
                </td>
                <td>
                    <?php echo $row->jurusan; ?>
                </td>
                <td>
                    <?php echo $row->alamat; ?>
                </td>
                <td>
                    <a href="<?= base_url('index.php/mahasiswa/hapus/' . $row->nim); ?>" class="btn btn-danger btn-sm"
                        role="button">HAPUS</a>
                </td>
                <td>
                    <a href="<?= base_url('index.php/mahasiswa/edit/' . $row->nim); ?>" class="btn btn-success btn-sm"
                        role="button">UBAH</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="<?= base_url('index.php/mahasiswa/insert'); ?>" class="btn  btn-success" role="button">TAMBAH DATA</a>
</body>

</html>