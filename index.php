<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php



if (isset($_POST['btn'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $pNum = $_POST['pNum'];
    $adress = $_POST['adress'];
    // print_r($_POST);

    //mysql
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nhipp_dv_65_2";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `student_info` (`id`, `fName`, `lName`, `mobile`, `email`, `adress`)
VALUES (NULL, '$fName', '$lName', '$pNum', '$email', '$adress')";

    if ($conn->query($sql) === TRUE) {
        echo "<b>Info Insterted successfully<b>";
    } else {
        echo "there s a problame " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    //mysql
}
?>

<body>
    <div class="container m-4">

        <form method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fName">First Name</label>
                    <input type="text" class="form-control" id="fName" placeholder="First Name" name="fName">
                </div>
                <div class="form-group col-md-6">
                    <label for="lName">Last Name</label>
                    <input type="text" class="form-control" id="lName" placeholder="Last Name" name="lName">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="email" name="email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="pNum">Phone</label>
                    <input type="text" class="form-control" id="pNum" name="pNum">
                </div>
            </div>
            <div class="form-group">
                <label for="adress">Address</label>
                <input type="text" class="form-control" id="adress" name="adress">
            </div>

            <button type="submit" class="btn btn-primary" name="btn">Submit</button>
        </form>

        <div class="jumborton">

        </div>
    </div>

</body>

</html>