<?php
    session_start();
    if(isset($_SESSION["ime"])||isset($_SESSION["pass"]))
    {

    } else
    {
        $_SESSION["ime"]="";
        $_SESSION["pass"]="";
    }
    
?>
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
        <h1 class="naslov">Biblioteka</h1>
        <nav class="navbar navbar-expand-sm justify-content-center">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link active" href="index.php">Pocetna</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./pages/pregled.html">Pregled</a>
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
    $imeErr = $passErr = "";
    $ime = $pass = "";
    if($_SESSION["ime"]==""&&$_SESSION["pass"]=="")
      {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {          
            if (empty($_POST["ime"])) {
                $imeErr = "Ime je obavezno!";
              } else {
                $ime = test_input($_POST["ime"]);
              }
              if (empty($_POST["pass"])) {
                $passErr = "Lozinka je neophodana!";
              } else {
                $pass = test_input($_POST["pass"]);
                /*if (!preg_match("",$pass)) {
                  $passErr = "Los format lozinke!";
                }*/
            }
        if($imeErr==""&&$passErr=="")
        {
            if($ime=="Test"&&$pass=="test123")
            {
                $_SESSION["ime"]=$ime;
                $_SESSION["pass"]=$pass;
                echo '<script>alert("Dobrodosli na stranicu!");</script>';
            } else
            {
                if($ime=="Test2"&&$pass=="test2123")
                {
                    $_SESSION["ime"]=$ime;
                    $_SESSION["pass"]=$pass;
                    echo '<script>alert("Dobrodosli na stranicu!");</script>';
                } else
                {

                }
            }
            
        }
    }
} else
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["ime"]="";
        $_SESSION["pass"]="";
    }
}
    ?>
    <div class="container">
        <h4><b>Mozete se logovati sa sledecim nalozima</b></h4>
        <div class="d-flex flex-row">
            <div class="m-5">
                <p>Korisnicko ime: Test</p>
                <p>Lozinka: test123</p>
            </div>
            <div class="m-5">
                <p>Korisnicko ime: Test2</p>
                <p>Lozinka: test2123</p>
            </div>
        </div>
        <hr>
        <p>Unesite parametre za logovanje. <a href="#">Registruj se</a> ako nemate nalog.</p>
        <h4>Forma za logovanje</h4>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <?php
            if($_SESSION["ime"]==""&&$_SESSION["pass"]=="")
            {
                echo '<div class="form-group pl-5 pr-5">
                    <label for="ime">KORISNICKO IME:</label>
                    <input type="text" class="form-control" name="ime" id="ime" placeholder="Korisnicko ime" value="'. $ime. '">
                    <span class="error">'.$imeErr.'</span>
                </div>
                <div class="form-group pl-5 pr-5">
                    <label for="pass">LOZINKA:</label>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Lozinka" value="' .$pass .'">
                    <span class="error">' .$passErr .'</span>
                </div>
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary text-center">Pijava</button>
                </div>';
            } else
            {
                echo '<div class="form-group pl-5 pr-5">
                <h2 class="text-center">Dobrodosli na stranicu!</h2>
                </div>
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary text-center">Izlogujte se</button>
                </div>';
            }
        ?>
    </form>
    </div>
    <footer>
      <div>
        <p class="text-center text-light ft"> © Gradska Biblioteka</p>
      </div>
    </footer>
  </body>
</html>