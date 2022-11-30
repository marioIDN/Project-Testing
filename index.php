<?php
$data = file_get_contents('data/array1.json');
$array = json_decode($data, true);

$array = $array["array1"];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Project Testing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Project Testing</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row mt-3">
      <div class="col">
        <h1>Data</h1>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Ruangan</th>
              <th scope="col">Pasien</th>
              <th scope="col">Nama Dokter</th>
            </tr>
          </thead>
          <?php foreach ($array as $row) : ?>
            <tbody>
              <tr>
                <td><?= $row["namaruangan"]; ?></td>
                <td><?= $row["namapasien"]; ?></td>
                <td><?= $row["namadokter"]; ?></td>
              </tr>
            </tbody>
          <?php endforeach; ?>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</body>

</html>