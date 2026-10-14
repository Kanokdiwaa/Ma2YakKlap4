
<?php
$topic = "Club Check";
$team = "ชื่อทีมของเรา";
$problem = "ระบบเช็กชื่อสมาชิกชมรมและตรวจสอบประวัติการเข้าร่วมกิจกรรม";

$members = [
    "สมาชิกคนที่ 1",
    "สมาชิกคนที่ 2"
];

$goals = [
    "เช็กชื่อสมาชิกชมรมได้สะดวก",
    "บันทึกประวัติการเข้าร่วมกิจกรรม",
    "ตรวจสอบประวัติย้อนหลังได้"
];
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($topic) ?></title>
    <style>
        body {
            font-family: Tahoma, sans-serif;
            background: #f8f3ff;
            margin: 0;
            padding: 30px;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: auto;
        }
        header, section {
            background: white;
            padding: 24px;
            margin-bottom: 18px;
            border-radius: 14px;
            border: 1px solid #e5d9f5;
        }
        h1, h2 { color: #7956a8; }
        nav a {
            display: inline-block;
            margin-right: 16px;
            color: #7956a8;
        }
    </style>
</head>
<body>
<div class="container">
    <header>
        <h1><?= htmlspecialchars($topic) ?></h1>
        <p>ระบบเช็กชื่อเข้าร่วมกิจกรรมคาบชมรม</p>
        <nav>
            <a href="index.php">หน้าหลัก</a>
            <a href="attendance.php">เช็กชื่อ</a>
            <a href="history.php">ประวัติการเช็กชื่อ</a>
            <a href="about.php">เกี่ยวกับระบบ</a>
        </nav>
    </header>

    <section>
        <h2>เกี่ยวกับระบบ</h2>
        <p><?= htmlspecialchars($problem) ?></p>
        <p>ทีม: <?= htmlspecialchars($team) ?></p>
    </section>

    <section>
        <h2>สมาชิกในทีม</h2>
        <ul>
            <?php foreach ($members as $member): ?>
                <li><?= htmlspecialchars($member) ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section>
        <h2>เป้าหมายของระบบ</h2>
        <ol>
            <?php foreach ($goals as $goal): ?>
                <li><?= htmlspecialchars($goal) ?></li>
            <?php endforeach; ?>
        </ol>
    </section>
</div>
</body>
</html>
