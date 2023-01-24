<?php
//adding external connection file
require_once('connection.php');

?>
<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }

    </style>
</head>

<body>
    <?php
$q = $_GET['q'];
$sql="SELECT * FROM testappointment WHERE date = '".$q."' ORDER BY time_code DESC LIMIT 1";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($result)) {
  $bookingNumbers = $row['time_code'];
    if($bookingNumbers > 11) {
       echo"Please Try with another Date";
    }
}
mysqli_close($con);
?>
</body>

</html>
