<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    $imeErr = $emailErr = $brErr = "";
    $ime = $email = $br = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {          
            if (empty($_POST["ime"])) {
                $imeErr = "Ime je obavezno!";
              } else {
                $ime = test_input($_POST["ime"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$ime)) {
                  $imeErr = "Samo slova i prazna mesta!";
                }
              }
              if (empty($_POST["mail"])) {
                $emailErr = "Email je neophodan!";
              } else {
                $email = test_input($_POST["mail"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Los email format!";
                }
            }
            if (empty($_POST["br"])) {
                $brErr = "Broj sedista ne sme biti prazan!";
            } else
            {
                $br=test_input($_POST["br"]);
            }
        if($imeErr==""&&$brErr==""&&$emailErr=="")
        {
            include 'konekcija.php';
            $sql = "UPDATE sediste SET rezervacija=1 WHERE broj_sedista=" . $br;
            if ($conn->query($sql) === TRUE) {}
            $conn->close();
            header('Location: http://localhost/AB/Matura/Autobus%20(sa%20bazom)/index.php');
            exit;
        } else
        {
            echo '<h2 class="text-center">'. $imeErr .'</h2><br>';
            echo '<h2 class="text-center">'. $brErr .'</h2><br>';
            echo '<h2 class="text-center">'. $emailErr .'</h2><br>';
        }
    }
?>