<?php

  $servername = "localhost";
  $username = "root";
  $password = "ciao123";
  $dbname = "Prova";

  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_errno) {

    echo ("Connection failed: " . $conn->connect_error);
    return;
  }

  //Mia query al DB tramite mysql
  $sql =
   "SELECT name,lastname
    FROM ospiti";

  $result = $conn->query($sql);

  $ospiti = [];

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $ospiti[] = $row;
    }
  } else {
      echo "0 results";
    }
  $conn->close();

  // var_dump($ospiti);
  echo json_encode($ospiti);


?>
