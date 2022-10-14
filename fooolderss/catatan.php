<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CATATAN PERJALANAN</title>
  </head>
  <body>
        <?php
        
        $db = new PDO("mysql:host=localhost;dbname=pduli_diri",'root', '');
        $query = $db->query("SELECT * FROM isi_data");
        ?>
    

    <div class="container-sm">
        
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-info">
            <thead class="bg-info text-white">
                <th>Nik</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Lokasi</th>
                <th>Suhu</th>
            </thead>
        
            <tbody>
            <?php while($data = $query->fetch()): ?>
                <tr>
                    <td><?= $data['nik'] ?></td>
                    <td><?= $data['tanggal'] ?></td>
                    <td><?= $data['waktu'] ?></td>
                    <td><?= $data['tanggal'] ?></td>
                    <td><?= $data['suhu_tubuh'] ?></td>

                </tr>
            <?php endwhile ?>
            </tbody>
    </table>
    <a href="index.php "class="btn btn-info">Kembali</a>
    <a href="edit.php?nik=<?= $data['nik'] ?>"class="btn btn-info">Tambah</a>

        </div>
       

    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>