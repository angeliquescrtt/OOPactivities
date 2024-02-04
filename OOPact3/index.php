<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Array & Functions</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .student-info {
            width: 80%;
            margin: 10% auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            font-size: 35px;
            color: #202020;
        }
        #students {
            border-collapse: collapse;
            width: 100%;
        }
        
        th {
            text-align: center;
        }

        th {
            height: 37px;
        }

        #students td, #students th {
            border: 1px solid #101010;
            padding: 10px;
        }
        #students td {
            height: 35px;
        }
        
        #students tr:nth-child(even){background-color: #f2f2f2;}
        
        #students tr:hover {background-color: #ddd;}
        
        #students th {
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #87CEEB;
            color: #101010;
        }
    </style>
</head>
<body>

<div class="student-info">
    <h1>Student Information Record</h1>
<?php

    $students = array(
        array(
            'first_name' => 'Rea',
            'last_name' => 'Biglaen',
            'middle_name' => 'Buates',
            'age' => 20,
            'course_year' => 'BSIT - 2',
            'enrolled' => false,
            'subject' => 'Object Oriented Programming',
            'grade' => 92.1,
        ),
        array(
            'first_name' => 'Jack',
            'last_name' => 'Echaluce',
            'middle_name' => 'Ativo',
            'age' => 20,
            'course_year' => 'BSIT - 2',
            'enrolled' => 'Yes',
            'subject' => 'Object Oriented Programming',
            'grade' => 92.1,
        ),
        array(
            'first_name' => 'Johnrey',
            'last_name' => 'Apable',
            'middle_name' => 'Amado',
            'age' => 20,
            'course_year' => 'BSIT - 2',
            'enrolled' => 'Yes',
            'subject' => 'Object Oriented Programming',
            'grade' => 92.1,
        )
    );

    $firstNames = array_column($students, 'first_name');
    $lastNames = array_column($students, 'last_name');
    $middleNames = array_column($students, 'middle_name');
    $ages = array_column($students, 'age');
    $courseYears = array_column($students, 'course_year');
    $enrolled = array_column($students, 'enrolled');
    $subjects = array_column($students, 'subject');
    $grades = array_column($students, 'grade');

    echo "<table id='students'>";
        echo "<tr>";
        echo "<th>Last Name</th>";
        echo "<th>First Name</th>";
        echo "<th>Middle Name</th>";
        echo "<th>Age</th>";
        echo "<th>Course & Year</th>";
        echo "<th>Enrolled <br> (Yes/No)</th>";
        echo "<th>Subject</th>";
        echo "<th>Grade</th>";
        echo '</tr>';

        foreach ($students as $key => $student) {
            echo "<tr>";
            echo "<td>" . $firstNames[$key] . "</td>";
            echo "<td>" . $lastNames[$key] . "</td>";
            echo "<td>" . $middleNames[$key] . "</td>";
            echo "<td>" . $ages[$key] . "</td>";
            echo "<td>" . $courseYears[$key] . "</td>";
                if ($enrolled[$key] == 'Yes') {
                    echo "<td>Yes</td>";
                } else {
                    echo "<td>No</td>";
                }  
            echo "<td>" . $subjects[$key] . "</td>";
            echo "<td>" . $grades[$key] . "</td>";
            echo "</tr>";
        }
    
    echo "</table>";
?>
</div>

</body>
</html>