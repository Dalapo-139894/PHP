<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1 {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
    div{
        background-color: rgb(191, 169, 243);
        text-align: center;
    }
    table{
        text-align:left;    
    }
</style>

<body>

<?php
        if(isset($_POST['btnSave'])) {
            include('server.php');
            $stdID = $_POST['stdid'];
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $bdate = $_POST['bday'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $phNum = $_POST['phone'];
            $email = $_POST['email'];

            $query ="Insert into tblregistration(studentID, lastname, firstname, middlename, birthdate, gender, address, contactNum, emailAdd)
            values('".$stdID."','".$lname."','".$fname."','".$mname."','".$bdate."','".$gender."','".$address."','".$phNum."','".$email."')";
            echo($query);
            mysqli_query($dalapo,$query);
            echo'<script>alert("record saved successfully")</script>';
        }
        else {
            echo("Failed!");   
        }
    ?>

    <div>
        <h1 class="h1">REGISTRATION FORM</h1>
    </div>
    
        <table>
            <form method = "post">
                <tr>
                    <td>STUDENT ID</td>
                    <td><input type="text" placeholder="STUDENT ID" name="stdid"></td>
                </tr>
                
                <tr>
                    <td>LAST NAME</td>
                    <td><input type="text" placeholder="LAST NAME" name="lname"></td>
                </tr>

                <tr>
                    <td>FIRST NAME</td>
                    <td><input type="text" placeholder="FIRST NAME" name="fname"></td>
                </tr>
                
                <tr>
                    <td>MIDDLE NAME</td>
                    <td><input type="text" placeholder="MIDDLE NAME" name="mname"></td>
                </tr>

                <tr>
                    <td>BIRTH DATE</td>
                    <td><input type="date" name="BIRTHDATE" name="bday"></td>
                </tr>

                <tr>
                    <td>GENDER</td>
                    <td>
                        <label for="GENDER"></label>
                        <select name="gender">
                            <option value="MALE">MALE</option>
                            <option value="FEMALE">FEMALE</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>HOME ADDRESS</td>
                    <td><input type="text" placeholder="HOME ADDRESS" name="address"></td>
                </tr>

                <tr>
                    <td><label for="phone">CONTACT NUMBER</label></td>
                    <td><input type="tel" name="phone" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" placeholder="0123-456-7890"></td>
                </tr>

                <tr>
                    <td><label for="email">EMAIL ADDRESS</label></td>
                    <td><input type="email" name="email" id="" placeholder="example@gmail.com"></td>
                </tr>

                <tr>
                    <td><button name="btnSave" value="SUMBIT" type="submit">SUBMIT</button></td>
                </tr>
            </form>
        </table>
    
</body>

</html>