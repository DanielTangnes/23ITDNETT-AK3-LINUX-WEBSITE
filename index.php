<?php
$name = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    $name = trim($_POST['name']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AK3 LinuxServerDrift</title>
    <style>
        body {
            font-family: system-ui, sans-serif;
            max-width: 480px;
            margin: 80px auto;
            padding: 0 20px;
            text-align: center;
        }
        input[type="text"] {
            padding: 8px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
            margin: 12px 0;
        }
        button {
            padding: 8px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        .greeting {
            margin-top: 24px;
            font-size: 20px;
            color: #2a6;
        }
    </style>
</head>
<body>
    <h1>Welcome</h1>
    <form method="post">
        <label for="name">Test deploy</label>
        <input type="text" id="name" name="name" placeholder="Type your name" value="<?= htmlspecialchars($name) ?>">
        <button type="submit">Say hello</button>
    </form>

    <?php if ($name !== ''): ?>
        <p class="greeting">Hello, <?= htmlspecialchars($name) ?>! 👋</p>
    <?php endif; ?>
</body>
</html>
