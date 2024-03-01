<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
    $courses = [
    [
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
        quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],

    ];
 
    foreach ($courses as $course) {
        echo '<div class="course">';
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<p>Học phí: ' . $course['fee'] . '</p>';
        echo '<p>Khải giảng: ' . $course['start_date'] . '</p>';
        echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
        echo '</div>';
    }
 ?>
</body>
</html>