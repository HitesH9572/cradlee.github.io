<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/iconimg.png" type="image/x-icon">
  <link rel="icon" href="img/iconimg.png" type="image/x-icon">
  <title>Cradlee- Solon Solution provider</title>
  <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Owl Carousel Js -->


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="font/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="contactpage.css">

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i">

</head>

<body>
<?php include 'Include/header.php'; ?>
  <div class="bg-contact100" style="background-image: url('img/bg.jpg');">
    <div class="container-contact100">

      <div class="wrap-contact100">
        <div class="container mb-3">
          <div class="row">
            <div class="col-12 col-md-6  my-md-0 d-flex justify-content-center align-content-center">
              <h2>
                <i class="fa-solid fa-envelope  text-green"></i>
                <h6 class="ms-2 fs-5 text-green mx-auto fw-semibold "><a href=""
                    class="fs-5 text-blue text-decoration-none">
                    admin@cradlee.com</a></h6>
              </h2>
            </div>
            <div class="col-12 ps-lg-5 col-md-6 my-2 my-md-0 d-flex justify-content-center align-content-center">
              <h2>
                <i class="fa-solid fa-phone  text-green"></i>
                <h6 class="ms-2 fs-5 text-green mx-auto fw-semibold"><a href=""
                    class="fs-5 text-blue text-decoration-none">
                    +1 5589 55488 55</a></h6>
              </h2>
            </div>
          </div>
        </div>


        <div class="contact100-pic js-tilt" data-tilt>
          <img src="img/img-01.png" alt="IMG">
        </div>
        <form class="contact100-form validate-form">
          <span class="contact100-form-title">
            Get in touch
          </span>
          <div class="wrap-input100 validate-input" data-validate="Name is required">
            <input class="input100" type="text" name="name" placeholder="Name">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100 validate-input" data-validate="Message is required">
            <textarea class="input100" name="message" placeholder="Message"></textarea>
            <span class="focus-input100"></span>
          </div>
          <div class="container-contact100-form-btn">
            <button class=" contact100-form-btn " style="border-radius: 30px;">
              Send
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php include 'Include/footer.php'; ?>




  <script src="js/script.js"></script>
  <script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
  <!-- Animation JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"
    integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
</body>

</html>