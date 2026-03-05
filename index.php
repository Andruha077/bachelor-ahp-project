<?php

require_once 'includes/logger.php';
require_once 'includes/ErrorHandler.php';

set_exception_handler(['ErrorHandler', 'handleException']);

$logger = AppLogger::getLogger();

$logger->info("Application started");

$logger->info("User action", [
    'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
    'url' => $_SERVER['REQUEST_URI'] ?? 'unknown'
]);

?>

<!DOCTYPE html>
<html lang="uk">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>МАІ: Моделювання вибору дезодоранту</title>

<!-- SEO -->
<meta name="description" content="Інтерактивна система підтримки прийняття рішень методом аналізу ієрархій (МАІ).">
<meta name="keywords" content="МАІ, AHP, прийняття рішень, бакалаврська робота">
<meta name="author" content="Andriy Barodych">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://andruha077.github.io/bachelor-ahp-project/">

<!-- Open Graph -->
<meta property="og:title" content="Моделювання вибору дезодоранту методом МАІ">
<meta property="og:description" content="Інтерактивна система прийняття рішень на основі методу аналізу ієрархій.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://andruha077.github.io/bachelor-ahp-project/">
<meta property="og:image" content="https://andruha077.github.io/bachelor-ahp-project/preview.jpg">
<meta property="og:locale" content="uk_UA">

<!-- favicon -->
<link rel="icon" href="favicon.ico">

<!-- Schema.org -->
<script type="application/ld+json">
{
"@context":"https://schema.org",
"@type":"ScholarlyArticle",
"headline":"Моделювання вибору дезодоранту методом аналізу ієрархій",
"author":{
"@type":"Person",
"name":"Andriy Barodych"
},
"inLanguage":"uk",
"url":"https://andruha077.github.io/bachelor-ahp-project/"
}
</script>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<main class="container" role="main">

<header>
<h1 id="main-title">Моделювання вибору дезодоранту методом аналізу ієрархій</h1>
</header>

<section aria-labelledby="about-section">
<h2 id="about-section">Короткий опис</h2>
<p>
Веб-система підтримки прийняття рішень на основі методу аналізу ієрархій (МАІ)
для вибору оптимальної альтернативи.
</p>
</section>

<section aria-labelledby="goal-section">
<h2 id="goal-section">Мета дослідження</h2>
<p>
Розробити інтерактивну систему підтримки прийняття рішень із використанням методу МАІ.
</p>
</section>

<section aria-labelledby="tasks-section">
<h2 id="tasks-section">Основні завдання</h2>
<ul>
<li>Проаналізувати метод аналізу ієрархій</li>
<li>Реалізувати алгоритм обчислення ваг</li>
<li>Забезпечити перевірку узгодженості</li>
<li>Розробити зручний веб-інтерфейс</li>
</ul>
</section>

<section aria-labelledby="results-section">
<h2 id="results-section">Очікувані результати</h2>
<p>
Отримання математично обґрунтованого вибору альтернативи.
</p>
</section>

<section aria-labelledby="contact-section">
<h2 id="contact-section">Контактна інформація</h2>
<p>Email:
<a href="mailto:andriy001@gmail.com">
andriy001@gmail.com
</a>
</p>
</section>

<hr>

<section id="app" aria-labelledby="app-section">

<h2 id="app-section">Розрахунок методом МАІ</h2>

<button onclick="calculateAHP()">
Розрахувати
</button>

<div id="result" aria-live="polite"></div>

</section>

</main>

<footer role="contentinfo">
<p>© 2026 Andriy Barodych. Бакалаврська робота.</p>
</footer>

<script src="js/app.js"></script>

</body>
</html>
