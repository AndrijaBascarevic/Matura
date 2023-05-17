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
                  <a class="nav-link active" href="index.php">Recnik</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./pages/dodaj.php"> Dodavanje novih reci</a>
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
      $Err = $ewordErr = $swordErr = $recErr = "";
      $eword = $sword = $opis = $nac ="";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {    
          if($_POST["nac"]=="")
          {
              $Err="Izaberi nacin prevodjenja";
          }else
          {
              $nac=$_POST["nac"];
          }
          if($nac=="E-S")
          {
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
              if($Err==""&&$ewordErr=="")
              {
              $i=0;
              include './pages/Konekcija na bazu.php';
              $sql = "SELECT * FROM reci";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      if($row["engleski"]==$eword)
                      {
                          $sword=$row["srpski"];
                          $opis=$row["opis"];
                          $i++;
                      } else
                      {
                          $recErr="Ne postoji rec!";
                      }
                      if($i==1)
                      {
                          $recErr="";
                          break;
                      }
                  }
              }
              }
          } else
          {
              if($nac=="S-E")
              {
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
              }
              if($Err==""&&$swordErr=="")
              {
              $i=0;
              include './pages/Konekcija na bazu.php';
              $sql = "SELECT * FROM reci";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      if($row["srpski"]==$sword)
                      {
                          $eword=$row["engleski"];
                          $opis=$row["opis"];
                          $i++;
                      } else
                      {
                          $recErr="Ne postoji rec!";
                      }
                      if($i==1)
                      {
                          $recErr="";
                          break;
                      }
                  }
              }
              }
          }
      }
      ?>
      <div class="container">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <div class="form-group pl-5 pr-5">
                  <label for="nac">Smer:</label>
                  <select class="form-select" id="nac" name="nac">
                      <option selected value=""> Selektuj smer prevodjenja</option>
                      <option value="E-S">Engleski-Srpski</option>
                      <option value="S-E">Srpski-Engleski</option>
                  </select>
                  <span class="error"><?php echo $Err;?></span>
              </div>
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
                  <textarea class="form-control" id="opis" name="opis" rows="3"><?php echo $opis ?></textarea>
              </div>
              <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary text-center">Prevedi</button>
                  <br>
                  <span class="error"><?php echo $recErr;?></span>
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