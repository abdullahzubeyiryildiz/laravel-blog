<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laravel Blog - İletişim</title>
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


  </head>
  <body>
      <!-- Default Boostrap Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="/">Anasayfa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">Hakkımızda</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/contact">İletişim <span class="sr-only">(current)</span></a>
            </li>
          </ul>

        </div>
      </nav>
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>İletişim</h1>
                <hr>
                <form action="">
                    <div class="form-group">
                        <label>E-posta</label>
                        <input type="text" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Konu</label>
                        <input type="text" id="konu" name="konu" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mesaj</label>
                      <textarea  id="mesaj" name="mesaj" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                       <input type="submit" class="btn btn-success" value="Gönder"> 
                    </div>
                </form>
            </div>
        </div>
   
      </div>

   
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>