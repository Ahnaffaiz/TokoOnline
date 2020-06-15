<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Detail Produk</title>

        <!-- Fonts -->        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            .judul{
                position: absolute;
                top: 15px;
                left: 15px;
                font-family: Playfair Display;
                font-style: normal;
                font-weight: bold;
                font-size: 40px;
                line-height: 53px;

            }
            .card{
                position: absolute;
                width: 1090px;
                height: 1617px;
                top: 50px;
                background: #FFFFFF;
                box-shadow: 10px 10px 25px rgba(179, 171, 171, 0.25);
                border-radius: 25px;
            }
            .card-img-top{
                position: absolute;
                width: 1060px;
                height: 700px;
                left: 15px;
                top: 100px;
                background: #C4C4C4;
            }
            .card-title{
                position: absolute;
                left: 15px;
                top: 820px;
                font-family: Playfair Display;
                font-style: normal;
                font-weight: bold;
                font-size: 40px;
                line-height: 53px;
                color: #000000;
            }
            .card-text{
                position: relative;
                left: 5px;
                top: 900px;

                font-family: Open Sans;
                font-style: normal;
                font-weight: normal;
                font-size: 30px;
                line-height: 41px;
                color: #000000;

            }
            .tabel{
                position: relative;
                left: 5px;
                top: 910px;

                font-family: Open Sans;
                font-style: normal;
                font-weight: normal;
                font-size: 30px;
                line-height: 41px;
                color: #000000;
            }
            .tr{
                padding-bottom: 20px;
            }
            .btn{
                position: relative;
                margin-top: 20px;
                margin-right: 15px;
                left: 5px;
                top: 920px;
                box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.25);
                border-radius: 4px;
            }
            .card-link{
                position: relative;
                margin-right: 15px;
                left: 5px;
                top: 950px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-6">

                        <div class="card">
                        <h1 class=judul >{{$product->title}}</h1>
                            <img src="/images/{{$product->images}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->title}}</h5>
                                <p class="card-text" style="color: #28DE45;">Rp.{{$product->price}}</p>
                                <table class="tabel">
                                    <tr>
                                        <td style="padding-right: 75px;padding-bottom: 20px;">Pengarang</td>
                                        <td class="tr">    :</td>
                                        <td class="tr">{{$product->author}}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-right: 75px;padding-bottom: 20px;">Penerbit</td>
                                        <td class="tr">    :</td>
                                        <td class="tr">{{$product->publisher}}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-right: 75px;padding-bottom: 20px;">Tahun terbit</td>
                                        <td class="tr">    :</td>
                                        <td class="tr">{{$product->year}}</td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary">Beli</button>
                                <button type="submit" class="btn btn-warning">Tambah Keranjang</button>
                                <p class="card-text" style="margin-top:65px;">{{$product->detail}}</p>
                                <a href="/" class="card-link">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="sticky-footer bg-white" style="padding-top: 1690px; padding-button: 20px;">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; TokoOnlineKita 2020</span>
                </div>
            </div>
         </footer>
        
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
    </body>
</html>
