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
      'route' => route('page.products'),
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

function getFoundationItems()
{
  $foundationItems = [
    [
      'title' => 'О компании',
      'route' => route('page.about') . '#about',
      'image' => '/images/foundation-section-about-item.jpg',
    ],
    [
      'title' => 'Миссия',
      'route' => route('page.about') . '#mission',
      'image' => '/images/foundation-section-mission-item.jpg',
    ],
    [
      'title' => 'Видение',
      'route' => route('page.about') . '#vision',
      'image' => '/images/foundation-section-vision-item.jpg',
    ],
    [
      'title' => 'Ценности',
      'route' => route('page.about') . '#values',
      'image' => '/images/foundation-section-values-item.jpg',
    ],
  ];

  return $foundationItems;
}

function isMobile(): bool
{
  return windowWidthLessThan(744) && !windowWidthGreaterThan(743);
}

function isTablet(): bool
{
  return !windowWidthLessThan(744) && windowWidthLessThan(1280) && !windowWidthGreaterThan(1279);
}

function isDesktop(): bool
{
  return !windowWidthLessThan(1280) && windowWidthLessThan(1920) && !windowWidthGreaterThan(1919);
}

function isFullHD(): bool
{
  return windowWidthGreaterThan(1919);
}
