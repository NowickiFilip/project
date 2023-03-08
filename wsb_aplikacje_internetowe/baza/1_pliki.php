<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>
<body>
    <h4>Użytkownicy z bazy danych</h4>
    <?php
    
    require_once ('../skrypty/connect.php');
    $sql = "SELECT * FROM `k15`";
    $result = $conn->query($sql);
    
    

    while($user = $result->fetch_assoc()){
    
    echo <<< USER
    Imie i Nazwisko: $user[firstname] $user[lastname]<br>
   

USER;
    }

    
    ?>
</body>
</html>