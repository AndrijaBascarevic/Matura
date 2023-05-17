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
                  <a class="nav-link" href="#">Katalog uputstvo</a>
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
    $Err="";
    $ime = $naz = $izd = $zanr = $god = "";
    $arr=array();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {    
        if(empty($_POST["ime"]))
        {

        }else
        {
            $ime=$_POST["ime"];
        }
        if(empty($_POST["naz"]))
        {

        }else
        {
            $naz=$_POST["naz"];
        }
        if(empty($_POST["zanr"]))
        {

        }else
        {
            $zanr=$_POST["zanr"];
        }
        if(empty($_POST["god"]))
        {

        }else
        {
            $god=$_POST["god"];
        }
        if(empty($_POST["izd"]))
        {

        }else
        {
            $izd=$_POST["izd"];
        }
        $file_handle = fopen('./txt/katalog.txt', 'r');
        function get_all_lines($file_handle) { 
            while (!feof($file_handle)) {
                yield fgets($file_handle);
            }
        }
        foreach (get_all_lines($file_handle) as $line) {
            $rez=explode("|",$line);
            if(str_contains($rez[0],$ime)&&str_contains($rez[1],$naz)&&str_contains($rez[2],$zanr)&&str_contains($rez[3],$god)&&str_contains($rez[4],$izd))
            {
                array_push($arr,$rez);
            } else
            {
                
            }
        }
        fclose($file_handle);
    }
    ?>
    <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group pl-5 pr-5">
                <label for="ime">Izvodjac:</label>
                <input type="text" class="form-control" name="ime" id="ime" value="<?php echo $ime ?>">
            </div>
            <div class="form-group pl-5 pr-5">
                <label for="naz">Naziv albuma:</label>
                <input type="text" class="form-control" name="naz" id="naz" value="<?php echo $naz ?>">
            </div>
            <div class="form-group pl-5 pr-5">
                <label for="zanr">Zanr:</label>
                <select class="form-select" id="zanr" name="zanr">
                    <option selected></option>
                    <option value="Pop">Pop</option>
                    <option value="Rock">Rock</option>
                    <option value="Metal">Metal</option>
                    <option value="Punk">Punk</option>
                </select>
            </div>
            <div class="form-group pl-5 pr-5">
                <label for="god">Godina izdanja:</label>
                <select class="form-select" id="god" name="god">
                    <option selected></option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                </select>
            </div>
            <div class="form-group pl-5 pr-5">
                <label for="izd">Izdavacka kuca:</label>
                <input type="text" class="form-control" name="izd" id="izd" value="<?php echo $izd ?>">
            </div>
            <div id="rezultat">
                <?php
                    if(empty($arr))
                    {
                        echo '<h3> Nema rezultata! </h3>';
                    } else
                    {
                        echo '<table class="table">
                            <thead>
                            <tr>
                              <th>Izvodjac</th>
                              <th>Naziv albuma</th>
                              <th>Zanr</th>
                              <th>Godina izdanja</th>
                              <th>Izdavacka kuca</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>';
                        foreach($arr as $el)
                        {
                            echo '<td>'. $el[0] .'</td>
                              <td>'. $el[1] .'</td>
                              <td>'. $el[2] .'</td>
                              <td>'. $el[3] .'</td>
                              <td>'. $el[4] .'</td>
                            </tr>';
                        }
                        echo '</tbody>
                        </table>';
                    }
                ?>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary text-center">Trazi</button>
            </div>
        </form>
    </div>
    <footer>
      <div>
        <p class="text-center text-light ft"> © Klub Kolekcionara</p>
      </div>
    </footer>
  </body>
</html>