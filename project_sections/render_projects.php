<?php
function render_project_link_list($links) {
    if (empty($links)) {
        return;
    }

    echo '<div class="wrapper"><ul>';
    foreach ($links as $link) {
        $href = htmlspecialchars($link['href'] ?? '#', ENT_QUOTES, 'UTF-8');
        $label = htmlspecialchars($link['label'] ?? 'Link', ENT_QUOTES, 'UTF-8');
        $img = htmlspecialchars($link['img'] ?? 'pics/tools.png', ENT_QUOTES, 'UTF-8');
        $alt = htmlspecialchars($link['alt'] ?? $label, ENT_QUOTES, 'UTF-8');

        echo '<li><a href="' . $href . '" target="_blank">';
        echo '<img src="' . $img . '" alt="' . $alt . '">';
        echo '<p>' . $label . '</p>';
        echo '</a></li>';
    }
    echo '</ul></div>';
}

function render_project_block($item) {
    $heading = htmlspecialchars($item['heading'] ?? 'Section', ENT_QUOTES, 'UTF-8');

    echo '<h3><button class="accordion">' . $heading . '</button></h3>';
    echo '<div class="panel">';

    $paragraphs = $item['paragraphs'] ?? [];
    if (!empty($paragraphs)) {
        foreach ($paragraphs as $paragraph) {
            echo '<p>' . nl2br(htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8')) . '</p>';
        }
    }

    $items = $item['items'] ?? [];
    if (!empty($items) && empty($paragraphs)) {
        foreach ($items as $value) {
            if (is_array($value)) {
                continue;
            }
            echo '<p>' . nl2br(htmlspecialchars($value, ENT_QUOTES, 'UTF-8')) . '</p>';
        }
    }

    $list = $item['list'] ?? [];
    if (!empty($list)) {
        echo '<ul>';
        foreach ($list as $li) {
            echo '<li>' . htmlspecialchars($li, ENT_QUOTES, 'UTF-8') . '</li>';
        }
        echo '</ul>';
    }

    if (!empty($item['links'])) {
        render_project_link_list($item['links']);
    }

    echo '<div class="up">';
    echo '<a href="#top">';
    echo '<img src="pics/up.png" title="Jump to top" alt="Jump to top">';
    echo '<div class="uTxt">Jump to Top</div>';
    echo '</a>';
    echo '</div>';
    echo '</div>';
}

function render_entry($entry) {
    if (empty($entry)) {
        return;
    }

    $company = htmlspecialchars($entry['company'] ?? $entry['title'] ?? '', ENT_QUOTES, 'UTF-8');
    $period = htmlspecialchars($entry['period'] ?? '', ENT_QUOTES, 'UTF-8');

    echo '<div class="container">';
    if (!empty($company)) {
        echo '<h3>' . $company . '</h3>';
    }
    if (!empty($period)) {
        echo '<h3>' . $period . '</h3>';
    }

    $blocks = $entry['blocks'] ?? $entry['accordion'] ?? [];
    foreach ($blocks as $block) {
        render_project_block($block);
    }

    echo '</div>';
    echo '<div class="line"></div>';
}

$jsonPath = __DIR__ . '/projects.json';
if (!file_exists($jsonPath)) {
    return;
}

$data = json_decode(file_get_contents($jsonPath), true);
$projects = $data['projects'] ?? [];

foreach ($projects as $project) {
    $id = htmlspecialchars($project['id'] ?? '', ENT_QUOTES, 'UTF-8');
    $title = htmlspecialchars($project['title'] ?? '', ENT_QUOTES, 'UTF-8');
    $subtitle = htmlspecialchars($project['subtitle'] ?? '', ENT_QUOTES, 'UTF-8');

    echo '<div class="project" id="' . $id . '">' . PHP_EOL;
    echo '<div class="container">' . PHP_EOL;

    if (!empty($title)) {
        echo '<h2>' . $title . '</h2>' . PHP_EOL;
    }

    if (!empty($subtitle)) {
        echo '<h3>' . $subtitle . '</h3>' . PHP_EOL;
    }

    if (!empty($project['slides'])) {
        $sliderClass = !empty($project['slider_class']) ? htmlspecialchars($project['slider_class'], ENT_QUOTES, 'UTF-8') : '';
        echo '<div class="slidewrapper">' . PHP_EOL;
        echo '<div class="flexslider ' . $sliderClass . '">' . PHP_EOL;
        echo '<ul class="slides">' . PHP_EOL;

        foreach ($project['slides'] as $slide) {
            $src = htmlspecialchars($slide['src'] ?? '', ENT_QUOTES, 'UTF-8');
            $titleText = htmlspecialchars($slide['title'] ?? '', ENT_QUOTES, 'UTF-8');
            $altText = htmlspecialchars($slide['alt'] ?? $titleText, ENT_QUOTES, 'UTF-8');
            echo '<li><img src="' . $src . '" title="' . $titleText . '" alt="' . $altText . '" /></li>' . PHP_EOL;
        }

        echo '</ul>' . PHP_EOL;
        echo '</div>' . PHP_EOL;
        echo '</div>' . PHP_EOL;
    }

    if (!empty($project['entries'])) {
        foreach ($project['entries'] as $entry) {
            render_entry($entry);
        }
    }

    if (!empty($project['blocks'])) {
        foreach ($project['blocks'] as $block) {
            render_project_block($block);
        }
    }

    if (!empty($project['sections'])) {
        foreach ($project['sections'] as $section) {
            $sectionName = htmlspecialchars($section['name'] ?? '', ENT_QUOTES, 'UTF-8');
            if (!empty($sectionName)) {
                echo '<div class="container"><h3>' . $sectionName . '</h3>' . PHP_EOL;
            }

            if (!empty($section['accordion'])) {
                foreach ($section['accordion'] as $item) {
                    render_project_block($item);
                }
            }

            if (!empty($sectionName)) {
                echo '</div>' . PHP_EOL;
            }
        }
    }

    if (!empty($project['accordion']) && empty($project['entries']) && empty($project['blocks'])) {
        foreach ($project['accordion'] as $item) {
            render_project_block($item);
        }
    }

    echo '</div>' . PHP_EOL;
    echo '</div>' . PHP_EOL;
}
