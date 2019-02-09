<?php
require_once('functions.php');

$is_auth = rand(0, 1);

$user_name = 'Светлана';

$lots_categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];

$lots_list = [
  [
    'title' => '2014 Rossignol District Snowboard',
    'category' => 'Доски и лыжи',
    'price' => 10999,
    'img_url' => 'img/lot-1.jpg'
  ],
  [
    'title' => 'DC Ply Mens 2016/2017 Snowboard',
    'category' => 'Доски и лыжи',
    'price' => 159999,
    'img_url' => 'img/lot-2.jpg'
  ],
  [
    'title' => 'Крепления Union Contact Pro 2015 года размер L/XL',
    'category' => 'Крепления',
    'price' => 8000,
    'img_url' => 'img/lot-3.jpg'
  ],
  [
    'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
    'category' => 'Ботинки',
    'price' => 10999,
    'img_url' => 'img/lot-4.jpg'
  ],
  [
    'title' => 'Куртка для сноуборда DC Mutiny Charocal',
    'category' => 'Одежда',
    'price' => 7500,
    'img_url' => 'img/lot-5.jpg'
  ],
  [
    'title' => 'Маска Oakley Canopy',
    'category' => 'Разное',
    'price' => 5400,
    'img_url' => 'img/lot-6.jpg'
  ]
];

$page_content = include_template('index.php', [
  'lots_categories' => $lots_categories,
  'lots_list' => $lots_list
]);

$layout_content = include_template('layout.php', [
  'page_title' => 'YetiCave - Главная страница',
  'is_auth' => $is_auth,
  'user_name' => $user_name,
  'page_content' => $page_content,
  'lots_categories' => $lots_categories
]);

print($layout_content);



























