<?php
$jsonPath = __DIR__ . '/about.json';
if (!file_exists($jsonPath)) {
    return;
}

$about = json_decode(file_get_contents($jsonPath), true);
if (!is_array($about)) {
    return;
}

$title = htmlspecialchars($about['title'] ?? 'About Me', ENT_QUOTES, 'UTF-8');
echo '<h1>' . $title . '</h1>';

foreach ($about['paragraphs'] ?? [] as $paragraph) {
    if (!is_string($paragraph)) {
        continue;
    }

    echo '<p>' . htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8') . '</p>';
}