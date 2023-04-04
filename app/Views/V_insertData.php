<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!doctype html>
    <html lang="en">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.css" rel="stylesheet" />
    <title>Input Data Mahasiswa</title>
</head>

<body>
    </br>
    <div class="container">
        </br>
        <h1 class="display-5" style="text-align: center;">Tambah Data Mahasiswa</h1>
        <div class="p-3 mb-2 bg-light text-dark">
            <form action="<?php echo base_url('data/saveData') ?>" method="post">
                <table>
                    <tr>
                        <td>NIM</td>
                        <td><input type="text" name="nim" class="form-control" type="text" placeholder="Masukkan Nim Anda" aria-label="default input example"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" class="form-control" type="text" placeholder="Masukkan Nama Anda" aria-label="default input example"></td>
                    </tr>
                    <tr>
                        <td>Fakultas</td>
                        <td><input type="text" name="fakultas" class="form-control" type="text" placeholder="Masukkan Fakultas Anda" aria-label="default input example"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" cols="30" rows="10" class="form-control" type="text" placeholder="Masukkan Alamat Anda" aria-label="default input example"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" values="submit" name="submit" class="btn btn-success" type="submit"></td>
                        <td><input type="reset" values="reset" name="reset" class="btn btn-danger" type="reset"></td>
                    </tr>

                </table>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js"></script>

    <!-- Load Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<!-- <footer class="bg-light text-center text-white">

<!-- <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <p>&copy; <?= date('Y') ?> WEB ZAKAT BY MARDANA.</p>
    <a class="text-white" href="https://mdbootstrap.com/"></a>
</div>

</footer>

</html>