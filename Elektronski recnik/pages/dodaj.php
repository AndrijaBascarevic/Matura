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
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <div class="jumbotron">
        <h1 class="naslov">Biblioteka</h1>
        <nav class="navbar navbar-expand-sm justify-content-center">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="../index.php">Recnik</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link active" href="dodaj.php"> Dodavanje novih reci</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Uputstvo</a>
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
    $ewordErr = $swordErr = $opisErr = "";
    $eword = $sword = $opis ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {    
            if(empty($_POST["eword"]))
            {
                $ewordErr="Napisite rec";
            }else
            {   
                $eword=$_POST["eword"];
                if (!preg_match("/^[a-zA-Z-' ]*$/",$eword)) {
                    $ewordErr = "Samo slova i prazna mesta!";
                }
            }
            if(empty($_POST["sword"]))
            {
                $swordErr="Napisite rec";
            }else
            {   
                $sword=$_POST["sword"];
                if (!preg_match("/^[a-zA-Z-' ]*$/",$sword)) {
                    $swordErr = "Samo slova i prazna mesta!";
                }
            }
            if(empty($_POST["opis"]))
            {
                $opisErr="Rec mora da ima opis!";
            }else
            {
                $opis=$_POST["opis"];
            }
        if($ewordErr==""&&$swordErr==""&&$opisErr=="")
        {
            include 'Konekcija na bazu.php';
            $stmt = $conn->prepare("INSERT INTO reci (engleski, srpski, opis) VALUES (?, ?, ?)");
              $stmt->bind_param("sss", $eword, $sword, $opis);
              $stmt->execute();
              echo '<h4 class="text-center"> Rec uspesno snimljena! </h4>';
              $stmt->close();
              $conn->close();
        }
    }
    ?>
    <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group pl-5 pr-5">
                <label for="eword">Engleska rec:</label>
                <input type="text" class="form-control" name="eword" id="eword" value="<?php echo $eword ?>">
                <span class="error"><?php echo $ewordErr;?></span>
            </div>
            <div class="form-group pl-5 pr-5">
                <label for="sword">Srpska rec:</label>
                <input type="text" class="form-control" name="sword" id="sword" value="<?php echo $sword ?>">
                <span class="error"><?php echo $swordErr;?></span>
            </div>
            <div class="form-group pl-5 pr-5">
                <label for="opis">Opis:</label>
                <textarea class="form-control" id="opis" name="opis" rows="3" value="<?php echo $opis ?>"></textarea>
                <span class="error"><?php echo $opisErr;?></span>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary text-center">Snimi</button>
            </div>
        </form>
    </div>
    <footer>
      <div>
        <p class="text-center text-light ft"> © Osnovna Skola "Sonja Marinkovic"</p>
      </div>
    </footer>
  </body>
</html>