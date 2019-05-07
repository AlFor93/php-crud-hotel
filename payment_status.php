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
  $sql = "
    SELECT status, price
    FROM pagamenti
    WHERE status = ('pending')
    ORDER BY price DESC
  ";

  $result = $conn->query($sql);

  $pagamenti = [];

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $pagamenti[] = $row;
    }
  } else {
      echo "0 results";
    }
  $conn->close();

  // var_dump($pagamenti);
  echo json_encode($pagamenti);


?>
