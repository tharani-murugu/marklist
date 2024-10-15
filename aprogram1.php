<?php
$json_data = '{
  "students": [
    {
      
      "name": "Kaviya",
      "class": "XI",
      "sec":"A",
      "mark": 80
     
    },
    {
      "name": "Priya",
      "class": "XI",
      "sec":"A",
      "mark": 90
    },
     {
      "name": "Suruthi",
      "class": "XI",
      "sec":"B",
      "mark": 50
    },
     {
     "name": "Kalidass",
      "class": "XI",
      "sec":"B",
      "mark": 92
    },
    {
      "name": "Kavin",
      "class": "XI",
      "sec":"C",
      "mark": 40
    }
  ]
}';

echo '<h1>STUDENT MARK LIST</h1>';

$students = json_decode($json_data, true);
echo "<table border='2' cellpadding='5' cellspacing='1'>";
echo "<tr>
        <th>Class</th>
        <th>Sec</th>
        <th>Name</th>
        <th>Mark</th>
      </tr>";

foreach ($students['students'] as $student) {
    echo "<tr>";
    echo "<td>" . $student['class'] ."</td>";
    echo "<td>" . $student['sec'] ."</td>";
    echo "<td>" . $student['name'] . "</td>";
    echo "<td>" . $student['mark'] . "</td>";

    echo "</tr>";
}
echo "</table>";

echo '<h1>STUDENT MARK LIST(Above 80 mark)</h1>';

$students = json_decode($json_data, true);
echo "<table border='2' cellpadding='5' cellspacing='1'>";
echo "<tr>
       <th>Class</th>
        <th>Sec</th>
        <th>Name</th>
        <th>mark</th>
      </tr>";
foreach ($students['students'] as $student) {
    if(80<=$student['mark']){
    echo "<tr>";
    echo "<td>" . $student['class'] ."</td>";
    echo "<td>" . $student['sec'] ."</td>";
    echo "<td>" . $student['name'] . "</td>";
    echo "<td>" . $student['mark'] . "</td>";
    echo "</tr>";
}
}
echo "</table>";
?>
