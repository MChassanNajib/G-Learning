<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">Alamat Tagihan</h3>

                <div class="inputBox">
                    <span>nama :</span>
                    <input type="text" placeholder="bayu skak">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="contoh@gmail.com">
                </div>
                <div class="inputBox">
                    <span>Alamat :</span>
                    <input type="text" placeholder="jalan - lokasi">
                </div>
                <div class="inputBox">
                    <span>kota :</span>
                    <input type="text" placeholder="kudus">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>negara :</span>
                        <input type="text" placeholder="indonesia">
                    </div>
                    <div class="inputBox">
                        <span>kode pos :</span>
                        <input type="text" placeholder="2437">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>nama pemilik kartu :</span>
                    <input type="text" placeholder="pak. bayu skak">
                </div>
                <div class="inputBox">
                    <span>nomor kartu kredit :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>bulan :</span>
                    <input type="text" placeholder="janauri">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>tahun :</span>
                        <input type="number" placeholder="2022">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="complete checkout" class="submit-btn">

    </form>

</div>    
    
</body>
</html>