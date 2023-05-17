<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rezervacija</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body class="body">
  <!--nav bar--->
  <header class="header">
    <nav>
      <ul>
        <li><a href="index.php">Početna</a></li>
        <li><a href="./pages/info.html">O autoru</a></li>
        <li><a href="./pages/uputstvo.html">Uputstvo</a></li>
      </ul>
    </nav>
  </header>
  <!--Početna slika sa dugmićima--->
  <div class="container-fluid p-0 veliki">
    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="./images/slikaa.jpg">
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center tekst">
            <h4 class="display-4 m-0 mt-2 mt-md-3 text-white tekst naslov">Rezervacija autobuskih karata</h4>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="./images/slikaaa.jpg">
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center tekst">
            <h4 class="display-4 m-0 mt-2 mt-md-3 text-white tekst naslov">Rezervacija autobuskih karata</h4>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
        <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
          <span class="carousel-control-prev-icon mb-n2 strelice"></span>
        </div>
      </a>
      <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
        <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
          <span class="carousel-control-next-icon mb-n2 strelice"></span>
        </div>
      </a>
    </div>
  </div>
  <?php
    $sed=array();
    include './pages/konekcija.php';
    $sql = "SELECT broj_sedista, rezervacija FROM sediste";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        array_push($sed,$row["rezervacija"]);
      }
    } else { }
    $conn->close();
    ?>
  <div class="container" id="con1">
    <br>
    <!--polje sa sedištima--->
    <div class="row pravougaonik" id="con">
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[0]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="2">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 2 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[1]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="3">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 3 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-4">

      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[2]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="4">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 4 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[3]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="5">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 5 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[4]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="6">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 6 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[5]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="7">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 7 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-4">

      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[6]==0) echo 'slobodno'; else echo 'zauzeto'; ?> id="8">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 8 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[7]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="9">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 9 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[8]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="10">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 10 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[9]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="11">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 11 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-4">

      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[10]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="12">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 12 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[11]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="13">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 13 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[12]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="14">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 14 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[13]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="15">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 15 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-4">

      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[14]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="16">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 16 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[15]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="17">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 17 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[16]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="18">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 18 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[17]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="19">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 19 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-4">

      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[18]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="20">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 20 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[19]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="21">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 21 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[20]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="22">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 22 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[21]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="23">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 23 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-4">

      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[22]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="24">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 24 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[23]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="25">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 25 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[24]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="26">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 26 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[25]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="27">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 27 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-4">

      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[26]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="28">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 28 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[27]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="29">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 29 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[28]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="30">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 30 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[29]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="31">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 31 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-4">

      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[30]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="32">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 32 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[31]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="33">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 33 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[32]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="34">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 34 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[33]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="35">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 35 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-4">

      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[34]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="36">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 36 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[35]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="37">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 37 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[36]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="38">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 38 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[37]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="39">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 39 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-4">

      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[38]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="40">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 40 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[39]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="41">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 41 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[40]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="42">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 42 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[41]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="43">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 43 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-4">

      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[42]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="44">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 44 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[43]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="45">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 45 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[44]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="46">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 46 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[45]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="47">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 47 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="row">
          <div class="col-md-4 zad">
            <div class="card sediste <?php if($sed[46]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="48">
              <img class="card-img" src="./images/sediste 2.png" alt="sediste">
              <div class="card-img-overlay">
                <h4 class="centered brojsed"> 48 </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 zad">
            <div class="card sediste <?php if($sed[47]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="49">
              <img class="card-img" src="./images/sediste 2.png" alt="sediste">
              <div class="card-img-overlay">
                <h4 class="centered brojsed"> 49 </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 zad">
            <div class="card sediste <?php if($sed[48]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="50">
              <img class="card-img" src="./images/sediste 2.png" alt="sediste">
              <div class="card-img-overlay">
                <h4 class="centered brojsed"> 50 </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[49]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="51">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 51 </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card sediste <?php if($sed[50]==0) echo 'slobodno'; else echo 'zauzeto'; ?>" id="52">
          <img class="card-img" src="./images/sediste 2.png" alt="sediste">
          <div class="card-img-overlay">
            <h4 class="centered brojsed"> 52 </h4>
          </div>
        </div>
      </div>
    </div>
    <br>
    <!--forma--->
    <div class="modal" id="myModal">
      <div class="modal-dialog forma">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Registruj se</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form name="formaa" id="forma" action="./pages/register.php" method="post">
              <div class="form-group">
                <label> Ime i Prezime: </label>
                <input type="text" name="ime" id="ime" value=""/>
              </div>
              <div class="form-group">
                <label> E-mail: </label>
                <input type="text" name="mail" id="mail" value=""/>
              </div>
              <div class="form-group">
                <label> Broj sedista: </label>
                <input type="text" name="br" id="br" value="" readonly required/>
              </div>
              <button type="submit" class="btn btn-primary buttonce">Potvrdi</button>
            </form>
          </div>
          <!--footer--->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Zatvori</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer_area section_padding_130_0">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-footer-widget section_padding_0_130">
            <div class="footer-logo mb-3"></div>
            <p>Radili Sara Vesković i Andrija Baščarević.</p>
            <div class="footer_social_area"><a href="https://sr-rs.facebook.com/" data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Facebook"><i class="fa fa-facebook"></i></a><a href="https://www.pinterest.com/" data-toggle="tooltip"
                data-placement="top" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a><a
                href="https://www.skype.com/en/" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype"><i
                  class="fa fa-skype"></i></a><a href="https://twitter.com/i/flow/login" data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Twitter"><i class="fa fa-twitter"></i></a></div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget section_padding_0_130">
            <h5 class="widget-title">O nama</h5>
            <div class="footer_menu">
              <ul>
                <li><a href="./pages/info.html">O autoru</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget section_padding_0_130">
            <h5 class="widget-title">Pomoć</h5>
            <div class="footer_menu">
              <ul>
                <li><a href="./pages/uputstvo.html">Uputstvo</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget section_padding_0_130">
            <h5 class="widget-title">Bitni linkovi</h5>
            <div class="footer_menu">
              <ul>
                <li><a href="index.php">Početna</a></li>
                <li><a href="./pages/info.html">O autoru</a></li>
                <li><a href="./pages/uputstvo.html">Uputstvo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <script src="./js/custom.js"></script>
</body>

</html>