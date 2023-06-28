<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="inlog.css"/>
    <style>
        a.btn 
            {
                background-color: #410966a1;
                color: #fff8e8;
                
                
            }

            .container
            {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #fff8e8;
            }
    </style>
</head>
<body style = "background-color:#410966a1">
<div class = "title">
            <p style="font-size: 60px">Steptember</p>
        </div>
<div class="container">   
<?php

// Begin table
$team = array(
    array("Team1", 26741, 28144, 37602, 38934, 28542, 29964, 25928),
          array("Team2", 35163, 27980, 28553, 38960, 32398, 38771, 28409),
          array("Team3", 25546, 35507, 32767, 33419, 28494, 35045, 25593),
          array("Team4", 38864, 39374, 33624, 35097, 27457, 29002, 39182),
          array("Team5", 25339, 26028, 34077, 25956, 39611, 28210, 29144)
);
// voor de borders
echo "<table border='3'>";

//hier word de gemmiddelde berekent uit de array
foreach ($team as $row) {
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>"; // Team name
    $sum = 0;
    foreach ($row as $column) {
        if ($column != $row[0]) {
            $sum += $column;

            $gemid = $sum / 7;
        }
    }
    // met dit print de gemiddelde uit
    echo "<td>" . str_repeat('&nbsp;', 10) . $gemid . "</td>"; // Total sum for the team
    echo "</tr>";
}
echo "</table>";
?>

<br>
<a href="admin.php" class="btn btn-primary">Ga terug</a>

</body>
</html>
