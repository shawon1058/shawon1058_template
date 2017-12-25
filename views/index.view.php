<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand  text-info" href="/"><h1>eC<span style="color: red;">o</span>mmerce</h1></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 h-75" src="image/fours.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/image-slider-2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/image-slider-3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> <!--- end slider -->

    <div class="product mt-5">
      <h1 class="mb-4 text-danger">All products</h1>
      <div class="row">
        <div class="col-md-4 mt-4">
          <div class="card">
            <img src="image/facewash.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Face Wash<p>($50)</p></h4>
              <div class="card-text">
                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                consequat. duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-primary" href="product.html">know more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="card">
            <img src="image/mfacewash.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Brands Facewash<p>($55)</p></h4>
              <div class="card-text">
                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                consequat. duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-primary" href="product.html">know more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="card">
            <img src="image/tabs.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">TAbs<p>($100)</p></h4>
              <div class="card-text">
                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                consequat. duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-primary" href="product.html">know more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mt-4">
          <div class="card">
            <img src="image/jels.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Gels<p>($25)</p></h4>
              <div class="card-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-primary" href="product.html">Know more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="card">
            <img src="image/blender.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Blenders<p>($125)</p></h4>
              <div class="card-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-primary" href="product.html">Know more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="card">
            <img src="image/mohone.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Mobile<p>($85)</p></h4>
              <div class="card-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-primary" href="product.html">Know more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="card">
            <img src="image/mobile.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Mobile<p>($75)</p></h4>
              <div class="card-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-primary" href="product.html">Know more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="card">
            <img src="image/images(10).jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Processor<p>($120)</p></h4>
              <div class="card-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-primary" href="product.html">Know more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="card">
            <img src="image/hotpot.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Hotpot<p>($12)</p></h4>
              <div class="card-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-primary" href="product.html">Know more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- End container  -->

  <div class="footer bg-primary text-light text-center p-5">
    &copy; SRK feni ltd. All rights reserved.
  </div>

  
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>