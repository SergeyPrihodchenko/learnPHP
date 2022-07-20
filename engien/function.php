<?php

function render($page, $params=[]) {
    return renderTeampleate('main', [
        'title' => $params['title'],
        'menu' => renderTeampleate('menu', $params),
        'content' => renderTeampleate($page, $params),
        'message' => renderTeampleate('message', $params),
        'products' => renderTeampleate('products', $params),

    ]);
}

function renderTeampleate($page, $params = []) {
    ob_start();

    extract($params);

    include TEAMPLATE_DIR . $page . '.php';

    return ob_get_clean();
}