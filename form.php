<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {
        width: 40%;
        display: block;
        /* justify-items: center; */
        border: 2px solid black;
        border-radius: 20px;
        /* border-width: 2px; */

        color: rgb(0, 0, 0);
        /* text-align-last: center; */
        background-color: #7DBFA2;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: bolder;

        padding: 15px 20px;

    }


    form input {
        padding: 8px 10px;
        border-radius: 5px;
        border: none;
        color: #3E8472;
        margin-left: 20px;
        margin-right: 20px;
    }

    form label {
        font-size: 20px;
        /* margin-right: 10x; */
        padding-right: 5px;

    }

    form #lcolor {
        padding: 3px 5px;
    }


    form select {
        padding: 3px 5px;
        border: none;
        border-radius: 5px;
    }


    /* th {
        width: 28%;
        height: 50%;
        border-style: solid;
        border-width: 2px;
        border-color: rgb(0, 0, 0);
        background-color: rgba(131, 63, 55, 0.973);
    } */

    /* table tr td {
        border-collapse: collapse;
        width: 28%;
        height: 50%;
        border-style: solid;
        border-width: 2px;
        border-color: rgb(0, 0, 0);
        color: rgb(0, 0, 0);
        text-align-last: center;
        border-collapse: collapse;
        background-color: rgba(192, 123, 111, 0.973);
    } */

    form .btn {
        background-color: #3E8472;
        color: white;
    }

    .container {
        display: flex;
        align-items: center;
        height: 700px;
        background-color: pink;
        width: 99%;
        /* text-align: center; */
        justify-content: center;
        padding: 10px 10px;
    }
</style>

<body>


    <div class="container">
        <form action="output.php" method="post">

            <label for="Name">Name :</label>
            <input type="text" name="name" placeholder="Enter your name.....">

            <br>
            <br>

            <label for="Email">Email :</label>
            <input type="email" name="email" placeholder="Enter your Email.....">

            <br>
            <br>
            <label for="address">Address :</label></td>
            <input type="text" name="location" placeholder="Enter your address...."></td>


            <br>
            <br>

            <label for="password">Password :</label>
            <input type="password" name="password" placeholder="Enter your password.....">

            <br>
            <br>








            <label for="Phone">Phone no :</label>
            <input type="number" name="phone" placeholder=" Enter your phone no.......">


            <br>
            <br>




            <label for="date of birth"> Date of birth :</label>
            <input type="date" name="birth"> </td>


            <br>
            <br>


            <label for="checkbox">Coures :</label>
            <input type="checkbox" name="check" value="CSS">CSS <input type="checkbox" name="check" value="HTML">HTML<input type="checkbox" name="check" value="JQ">JQ<input type="checkbox" name="check" value="JS">JS <input type="checkbox" name="check" value="PHP">PHP



            <br>
            <br>
            <label for="Department">Department CSE :</label>
            <input type="radio" name="depar" value="EEE " />EEE <input type="radio" name="depar" value="BBA" />BBA</td>


            <br>
            <br>
            <label for="Gender">Gender :</label>
            <input type="radio" name="gender" value="Male" /> Male <input type="radio" name="gender" value="Female" />Female



            <br>
            <br>





            <label for="blood gruop">Blood gruop :</label></td>
            <select name="drop-down">
                <option value="A">A</option>
                <option value="A">A+</option>
                <option value="B">B</option>
                <option value="B">B+</option>
            </select></td>

            <br>
            <br>


            <label for="colour">Colour :</label>
            <input type="color" id="lcolor" name="colour" id="colour" value="#FBD5AB">


            <br>
            <br>
            <label for="submit">Submit</label>
            <input type="submit" class="btn" name="btn">



        </form>
    </div>



</body>

</html>