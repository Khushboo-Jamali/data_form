<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        width: 80%;
        border-collapse: collapse;
        background-color: skyblue;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 15px;
        margin-top: -100px;

    }

    table,
    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }

    h2 {
        height: 30px;
        border-radius: 10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-style: itali;
        width: 20%;
        margin-top: 20px;
        padding: 8px 10px;
        background-color: skyblue;
    }
</style>

<body>
    <center>

        <h2>MY DATABASE TABLE </h2>

    </center>

    <table align="center">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Password</th>
                <th>Phone No </th>
                <th>Birth Date</th>
                <th>Coures</th>
                <th>Department</th>
                <th>Gender</th>
                <th>Blood Gruop</th>
                <th>Colour</th>


            </tr>
        </thead>
        <tbody>
            <?php if (isset($_POST['btn'])) {
                echo "<tr>";
                $name = $_POST['name'];
                $email = $_POST['email'];
                $location = $_POST['location'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $birth = $_POST['birth'];
                $check = $_POST['check'];
                $depar = $_POST['depar'];
                $gender = $_POST['gender'];
                $drop_down = $_POST['drop-down'];
                $color = $_POST['colour'];





                echo  "<td>" . $name . "</td><br>";
                echo " <td>  " . $email . "</td><br>";
                echo "<td>" . $location . "</td><br>";
                echo "<td>" . $password . "</td><br>";
                echo "<td>" . $phone . "</td><br>";
                echo "<td>" . $birth . "</td><br>";
                echo "<td>" . $check . "</td><br>";
                echo "<td>" . $depar . "</td><br>";
                echo "<td>" . $gender . "</td><br>";
                echo "<td>" . $drop_down . "</td><br>";
                echo "<td> " . $color . "</td><br>";
            }
            echo "</tr>";
            ?>


        </tbody>
    </table>

</body>

</html>