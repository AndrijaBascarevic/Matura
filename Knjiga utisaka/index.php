<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <div class="jumbotron">
        <h1 class="naslov">Knjiga Utisaka</h1>
        <nav class="navbar navbar-expand-sm justify-content-center">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link active" href="index.php">Pocetna</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">O Autoru</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Uputstvo</a>
                </li>
              </ul>
          </nav>
    </div>
    <?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    $imeErr = $emailErr = $komErr = "";
    $ime = $email = $kom = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {          
            if (empty($_POST["ime"])) {
                $imeErr = "Ime je obavezno!";
              } else {
                $ime = test_input($_POST["ime"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$ime)) {
                  $imeErr = "Samo slova i prazna mesta!";
                }
              }
              if (empty($_POST["email"])) {
                $emailErr = "Email je neophodan!";
              } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Los email format!";
                }
            }
            if (empty($_POST["kom"])) {
                $komErr = "Komentar ne sme biti prazan!";
            } else
            {
                $kom=test_input($_POST["kom"]);
            }
        if($imeErr==""&&$komErr==""&&$emailErr=="")
        {
            include './pages/Konekcija na bazu.php';
            $stmt = $conn->prepare("INSERT INTO Utisak (ime, email, komentar) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $ime, $email, $kom);
            $stmt->execute();
            echo '<h2 class="text-center">Uspesno dodat komentar!</h2><br>';
            $stmt->close();
            $conn->close();
        }
    }
    ?>
    <div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group pl-5 pr-5">
                <label for="email">IME:</label>
                <input type="text" class="form-control" name="ime" id="ime" placeholder="Ime" value="<?php echo $ime; ?>">
                <span class="error"><?php echo $imeErr;?></span>
            </div>
            <div class="form-group pl-5 pr-5">
                <label for="email">EMAIL:</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" value="<?php echo $email; ?>">
                <span class="error"><?php echo $emailErr;?></span>
            </div>
            <div class="form-group pl-5 pr-5">
                <label for="opis">KOMENTAR:</label>
                <textarea class="form-control" id="kom" name="kom" rows="3"><?php echo $kom;?></textarea>
                <span class="error"><?php echo $komErr;?></span>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary text-center">Dodaj komentar</button>
            </div>
    </form>
    </div>
    <footer>
      <div>
        <p class="text-center text-light ft"> © Muzej Srbije</p>
      </div>
    </footer>
  </body>
</html>