<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kulim+Park:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Freehand&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #10261D;
            color: white;
            font-family: 'Kulim Park', sans-serif;
            padding: 20px;
        }

        .img-1 {
            width: 80%;
            height: auto;
            max-width: 100%;
            margin-top: 250px;
            margin-left: 40px;
            border: 15px solid white;
            transform: rotate(-3.26deg);
        }

        .text {
            margin-top: 150px;
            margin-left: 25px;
            margin-right: 75px;
            text-align: justify;
        }

        h5 {
            font-family: 'Freehand', cursive;
            font-size: 28px;
            color: #BCA461;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 35px;
            font-weight: 500;
            letter-spacing: 6px;
            margin-bottom: 50px;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            letter-spacing: 2px;
        }

        footer {
            width: 100%;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/warkop2.JPG" class="img-fluid img-1" alt="Warkop Image">
            </div>
            <div class="col-md-6">
                <div class="text">
                    <h5>Langsung Aja Ke</h5>
                    <h1>Warkop Kami</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui illo vel magni culpa, in eveniet, repellendus suscipit sed nostrum quasi ipsa accusantium ut, quis eaque repellat odio fuga nam illum. Officia doloremque laborum consequatur magnam laudantium amet, hic non quis? Aut, voluptatem. Molestias molestiae ex nemo culpa consequatur, rem aperiam voluptates ipsa alias vitae quisquam iure reiciendis libero adipisci illum ipsam consectetur hic nisi sed tenetur corporis? Earum, itaque. Nisi, eligendi. Quod eveniet hic, atque nihil, odit eum nesciunt aliquam vitae sint in odio pariatur sunt doloremque quibusdam quas aspernatur earum beatae sequi expedita adipisci temporibus molestias esse ab? Sint.</p>
                </div>
            </div>
        </div>
    </div>

<div class="container my-5">

  <footer class="text-white text-center text-lg-start" style="background-color: #23242a;">
    <div class="container p-4">
      <div class="row mt-4">
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">About company</h5>

          <p>
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
            voluptatum deleniti atque corrupti.
          </p>

          <p>
            Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
            molestias.
          </p>

          <div class="mt-4">
            <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-facebook-f"></i></a>
            <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-dribbble"></i></a>
            <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-google-plus-g"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4 pb-1">Search something</h5>

          <div class="form-outline form-white mb-4">
            <input type="text" id="formControlLg" class="form-control form-control-lg">
            <label class="form-label" for="formControlLg" style="margin-left: 0px;">Search</label>
          <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 48.8px;"></div><div class="form-notch-trailing"></div></div></div>

          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">New York, NY 10012, US</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">info@example.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 01 234 567 88</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">+ 01 234 567 89</span>
            </li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Opening hours</h5>

          <table class="table text-center text-white">
            <tbody class="font-weight-normal">
              <tr>
                <td>Mon - Thu:</td>
                <td>8am - 9pm</td>
              </tr>
              <tr>
                <td>Fri - Sat:</td>
                <td>8am - 1am</td>
              </tr>
              <tr>
                <td>Sunday:</td>
                <td>9am - 10pm</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>

    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>

  </footer>
  
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-TN6FfJ3hUDi52dCUZJPw2D0gqc4oiHduAY+XUcbvKnhokLjcgwL8Y8D9tBccE4+Y" crossorigin="anonymous"></script>
</body>

</html>
