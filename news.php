<?php
require __DIR__ . '/config.php';
$statement = $pdo->query('SELECT id, title, content, created_at FROM news ORDER BY created_at DESC, id DESC');
$news = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости - Мой сайт</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <nav>
        <a href="index.php">Главная</a>
        <a href="news.php">Новости</a>
        <a href="contacts.php">Контакты</a>
    </nav>
    
    <div class="container">
        <h1>Новости</h1>
        
        <?php foreach ($news as $item): ?>
            <article>
                <h2><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                <p class="date"><?= htmlspecialchars($item['created_at'], ENT_QUOTES, 'UTF-8') ?></p>
                <p><?= htmlspecialchars($item['content'], ENT_QUOTES, 'UTF-8') ?></p>
            </article>
        <?php endforeach; ?>

        
        <?php
            print_r($news[3]["title"]);
        ?>
    </div>
</body>
</html>

