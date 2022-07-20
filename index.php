<?php
define('TEAMPLATE_DIR', 'teamplate/');

require "engien/data.php";
require "engien/function.php";
require "engien/api.php";

$page = 'index';

if(isset($_GET['page'])) $page = $_GET['page'];

$params = [];

switch ($page) {
    case 'index':
        $params['title'] = 'Main';
        break;
    case 'content':
        $params['title'] = 'Content'; 
        break;
    case 'catalog':
        $params['title'] = 'Catalog';
        $params['catalog'] = getCatalog()['catalog'];
        break;
    case 'gallery':
        $params['title'] = 'Gallery';
        $params['img'] = getImage();
        break;
    case 'products':
        $params['title'] = 'Products';
        break;
    
    default:
        die('404');
        break;
}

echo render($page, $params);




