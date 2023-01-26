<?php

/**
 * Custom Helper functions
 *
 * @author Bobur Nuridinov <bobnuridinov@gmail.com>
 */

function getAppPages(): array
{
  $pages = [
    [
      'title' => 'О нас',
      'route' => route('page.about'),
    ],
    [
      'title' => 'Карьера',
      'route' => route('page.career'),
    ],
    [
      'title' => 'Препараты',
      'route' => route('page.drugs'),
    ],
    [
      'title' => 'Контакты',
      'route' => route('page.contacts'),
    ],
  ];

  return $pages;
}

function isCurrentPage($page): bool
{
  return str_contains(url()->current(), $page['route']);
}
