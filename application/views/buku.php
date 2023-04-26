<html>

<head>
    <title>Data Buku</title>
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

    <legend style="text-align: center; font-family: Arial, Helvetica, sans-serif;;">Data Buku</legend>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th style="text-align: center;">No.</th>
                <th style="text-align: center;">kd_buku</th>
                <th style="text-align: center;">Judul</th>
                <th style="text-align: center;">Pengarang</th>
                <th style="text-align: center;">Jenis</th>
                <th style="text-align: center;">Hapus</th>
                <th style="text-align: center;">Edit</th>
            </tr>
        </thead>
        <?php $no = 0;
        foreach ($buku as $row):
            $no++; ?>
            <tr>
                <td>
                    <?php echo $no; ?>
                </td>
                <td>
                    <?php echo $row->kd_buku; ?>
                </td>
                <td>
                    <?php echo $row->judul; ?>
                </td>
                <td>
                    <?php echo $row->pengarang; ?>
                </td>
                <td>
                    <?php echo $row->jenis; ?>
                </td>
                <td>
                    <a href="<?= base_url('index.php/buku/hapus/' . $row->kd_buku); ?>" class="btn btn-danger btn-sm"
                        role="button">HAPUS</a>
                </td>
                <td>
                    <a href="<?= base_url('index.php/buku/edit/' . $row->kd_buku); ?>" class="btn btn-success btn-sm"
                        role="button">UBAH</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="<?= base_url('index.php/buku/insert'); ?>" class="btn  btn-success" role="button">TAMBAH BUKU</a>
</body>

</html>