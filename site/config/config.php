<?php
return [
    'debug' => true,
    'url' => 'http://localhost:8888',
    'smartypants' => true,
    'afbora.kirby-minify-html' => [
      'enabled' => false,
    ],
    'panel' => [
      'css' => 'assets/panel/css/custom-panel.css',
    ],
    'routes' => [
      [
        'pattern' => 'sitemap.xml',
        'method' => 'GET',
        'action'  => function () {
            $options = [
                'images'       => false,
                'videos'       => false,
            ];
            $feed = site()->index()->listed()->limit(50000)->sitemap($options);
            return $feed;
        }
      ],
      [
        'pattern' => 'sitemap.xsl',
        'method' => 'GET',
        'action'  => function () {
            snippet('feed/sitemapxsl');
            die;
        }
      ],
      [
        'pattern' => 'feed',
        'method' => 'GET',
        'action'  => function () {
            $options = [
                'title'       => 'Our Latest News Articles',
                'description' => 'Read the latest news from KJL Solicitors',
                'link'        => 'news'
            ];
            $feed = page('news')->children()->listed()->flip()->limit(10)->feed($options);
            return $feed;
        }
    ],
    ],
    'thumbs' => [
      'srcsets' => [
          'default' => [
              '300w'  => ['width' => 300],
              '600w'  => ['width' => 600],
              '900w'  => ['width' => 900],
              '1200w' => ['width' => 1200],
              '1800w' => ['width' => 1800]
          ],
          'avif' => [
              '300w'  => ['width' => 300, 'format' => 'avif'],
              '600w'  => ['width' => 600, 'format' => 'avif'],
              '900w'  => ['width' => 900, 'format' => 'avif'],
              '1200w' => ['width' => 1200, 'format' => 'avif'],
              '1800w' => ['width' => 1800, 'format' => 'avif']
          ],
          'webp' => [
              '300w'  => ['width' => 300, 'format' => 'webp'],
              '600w'  => ['width' => 600, 'format' => 'webp'],
              '900w'  => ['width' => 900, 'format' => 'webp'],
              '1200w' => ['width' => 1200, 'format' => 'webp'],
              '1800w' => ['width' => 1800, 'format' => 'webp']
          ],
        ]
      ],
      'bnomei.robots-txt.content' => null,
      'bnomei.robots-txt.sitemap' => null,
      'bnomei.robots-txt.groups' => [
          '*' => [
              'disallow' => [
                  '/kirby/',
                  '/site/',
              ],
              'allow' => [
                  '/media/',
              ]
          ]
        ],
      'michnhokn.cookie-banner.content' => [
        'title' => 'Cookie settings',
        'text' => 'We use cookies to provide you with the best possible experience. They also allow us to analyze user behavior in order to constantly improve the website for you. (link: policies text: Privacy Policy)',
        'essentialText' => 'Essential',
        'denyAll' => 'Reject All',
        'acceptAll' => 'Accept All',
        'save' => 'Save settings',
      ],
      'medienbaecker.autoresize.maxWidth' => 750,
      'medienbaecker.autoresize.maxHeight' => 750,
      'medienbaecker.autoresize.quality' => 80,
    ];