<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RyZerBE Chatlog</title>
  <!-- BOOTSTRAP -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- BOOTSTRAP ICONS-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/f7b55d2a7c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./assets/style/style.css" />
</head>

<body>
  <div class="container">
    <div class="content">
      <h1 class="text-mid">Chatlog</h1>

      <form action="chatlog.php" method="post">

        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Chatlog..."
                aria-label="Recipient's username" aria-describedby="button-addon2" name="id">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Send</button>
            </div>

            <small id=" emailHelp" class="text-mid form-text">Get ur ChatlogID ingame with /chatlog</small>


            <div class="col-3"></div>
            <div class="mb-3">
              <div class="form-group col-md-5"></div>
              <div class="container text-center">

              </div>
            </div>
          </div>
      </form>
    </div>
  </div>

  <div class="socialmedia">
    <ul>
      <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
      <li><a href="#"><i class="fab fa-discord"></i></a></li>
      <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
    </ul>
  </div>

</body>

</html>