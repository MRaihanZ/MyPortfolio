<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $url = 'https://';
} else {
    $url = 'http://';
}
$url .= $_SERVER['SERVER_NAME'] . '/project/portfolio/';
