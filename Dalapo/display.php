<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Student</title>
</head>
<body>
    
<table>
    <form action="" method="post">

    <tr>
     <td>Search</td>
     <td>
            <select name="search">
                <option value=""></option>
                <option value="ID">Student ID</option>
                <option value="lname">lastname</option>
                <option value="fname">firstname</option>
                <option value="all">All</option>
            </select>
        </td>
    </tr>

    <tr>
        <td>Search</td>
        <td>
            <input type="text" name="txtsearch" id="txtsearch">
            <button name="btnSearch" id="btnsearch" value="SUMBIT" type="submit">SUBMIT</button>
        </td>
    </tr>

    </form>

    <?php

        if(isset($_POST["btnSearch"])) {
            $SearchBy = $_POST['search'];
            $value= $_POST['txtsearch'];

            if($SearchBy == 'all') {
                DisplayAll();
            }
            else {
                DisplayBySearch($SearchBy,$value);
            }
        }

        function DisplayAll() {
            include ('server.php');
            $Sql_Statement = "Select * from tblregistration order by lastname asc";
            $student = $dalapo -> query($Sql_Statement);

            if ($student -> num_rows > 0) {

                $row=0;

                echo "<table border= 1 cellspacing=0 cellpadding=0>";
                echo "<tr>";
                echo "<th width=60>Student ID</th>";
                echo "<th width=120>Lastname</th>";
                echo "<th width=120>Firstname</th>";
                echo "<th width=120>Middlename</th>";
                echo "<th width=100>Birthdate</th>";
                echo "<th width=100>Gender</th>";
                echo "<th width=100>Address</th>";
                echo "<th width=100>Contact No</th>";
                echo "<th width=120>Email Add</th>";
                echo "<tr>";

                while($dataStudent = $student -> fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$dataStudent['studentID']."</td>";
                    echo "<td>".$dataStudent['lastname']."</td>";
                    echo "<td>".$dataStudent['firstname']."</td>";
                    echo "<td>".$dataStudent['middlename']."</td>";
                    echo "<td>".$dataStudent['birthdate']."</td>";
                    echo "<td>".$dataStudent['gender']."</td>";
                    echo "<td>".$dataStudent['address']."</td>";
                    echo "<td>".$dataStudent['contactNum']."</td>";
                    echo "<td>".$dataStudent['emailAdd']."</td>";
                    echo "</tr>";
                    $row++;
                }

                echo "</table>";
                $student->free();
            }

            else {
                echo "<h1>Record not Found!</h1>";
            }
        }

        function DisplayBySearch($SearchBy,$student) {
            include ('server.php');
            

            if ($SearchBy== 'lname') {
                $Sql_Statement="Select * from tblregistration where lastname='".$student."'";
            }

            else if ($SearchBy== 'ID') {
                $Sql_Statement="Select * from tblregistration where studentID='".$student."'";
            }

            else {
                $Sql_Statement="Select * from tblregistration where firstname='".$student."'";
            }

            $student = $dalapo -> query($Sql_Statement);

            if ($student -> num_rows > 0) {

                $row=0;

                echo "<table border= 1 cellspacing=0 cellpadding=0>";
                echo "<tr>";
                echo "<th width=60>Student ID</th>";
                echo "<th width=120>Lastname</th>";
                echo "<th width=120>Firstname</th>";
                echo "<th width=120>Middlename</th>";
                echo "<th width=100>Birthdate</th>";
                echo "<th width=100>Gender</th>";
                echo "<th width=100>Address</th>";
                echo "<th width=100>Contact No</th>";
                echo "<th width=120>Email Add</th>";
                echo "<tr>";

                while($dataStudent= $student -> fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$dataStudent['studentID']."</td>";
                    echo "<td>".$dataStudent['lastname']."</td>";
                    echo "<td>".$dataStudent['firstname']."</td>";
                    echo "<td>".$dataStudent['middlename']."</td>";
                    echo "<td>".$dataStudent['birthdate']."</td>";
                    echo "<td>".$dataStudent['gender']."</td>";
                    echo "<td>".$dataStudent['address']."</td>";
                    echo "<td>".$dataStudent['contactNum']."</td>";
                    echo "<td>".$dataStudent['emailAdd']."</td>";
                    echo "</tr>";
                    $row++;
                }

                echo "</table>";
                $student->free();
            }

            else {

                echo "<h1>Record not Found!</h1>";
            }
            
        }
    ?>


</table>


</body>
</html>