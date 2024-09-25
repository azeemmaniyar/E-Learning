<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Performance Reports</title>
</head>
<body>
    <?php
include 'components/connect.php';

    $query = "
        SELECT students.name AS student_name, courses.name AS course_name, grades.grade
        FROM grades
        JOIN students ON grades.student_id = students.id
        JOIN courses ON grades.course_id = courses.id
    ";
    $result = $conn->query($query);
    ?>

    <h2>Student Performance Reports</h2>

    <table border="1">
        <tr>
            <th>Student Name</th>
            <th>Course Name</th>
            <th>Grade</th>
        </tr>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?= $row['student_name']; ?></td>
                <td><?= $row['course_name']; ?></td>
                <td><?= $row['grade']; ?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html> -->
