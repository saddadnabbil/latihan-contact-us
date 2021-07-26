<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Latihan Contact Us</title>
</head>
<body>
    

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2">Contact Us</h2>
                        <hr>
                        <?php
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Mohon Isi Seluruh Kolom yang Kosong! ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            $Msg = "";
                            if(isset($_GET['success']))
                            {
                                $Msg = " Pesanmu Telah Terkirim, Terimakasih ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
        
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="POST">
                            <input type="text" name="UName" placeholder="Nama" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2"> 
                            <input type="text" name="Subject" placeholder="Keterangan" class="form-control mb-2"> 
                            <textarea name="msg" class="form-control mb-2" placeholder="Pesan"></textarea>
                            <button class="btn btn-success" name="btn-send"> Kirim </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>