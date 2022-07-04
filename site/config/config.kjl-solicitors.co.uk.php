<?php
return [
    'debug' => false,
    'url' => 'https://www.kjl-solicitors.co.uk/',
    'smartypants' => true,
    'panel' => [
      'css' => 'assets/panel/css/custom-panel.css',
      // 'favicon' => '/assets/panel/favicon.ico'
    ],
    'routes' => [
      [
        'pattern' => 'sitemap.xml',
        'action'  => function() {
            $pages = site()->pages()->index();
            $ignore = kirby()->option('sitemap.ignore', ['error']);
            $content = snippet('sitemap', compact('pages', 'ignore'), true);
            return new Kirby\Cms\Response($content, 'application/xml');
        }
      ],
      [
        'pattern' => 'sitemap',
        'action'  => function() {
          return go('sitemap.xml', 301);
        }
      ],
    ],
      'blocks' => [
        'fieldsets' => [
          'text' => [
            'label' => 'Text',
            'type' => 'group',
            'fieldsets' => [
              'text',
              'heading'
            ]
          ],
          'media' => [
            'label' => 'Media',
            'type' => 'group',
            'fieldsets' => [
              'image',
              'video'
            ]
          ]
        ]
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
      'medienbaecker.autoresize.maxWidth' => 750,
      'medienbaecker.autoresize.maxHeight' => 750,
      'medienbaecker.autoresize.quality' => 80,
  ];