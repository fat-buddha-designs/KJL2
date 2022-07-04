<?php

Kirby::plugin('kirby/tags', [
    'tags' => [

    /* Email */
    'email' => [
        'attr' => [
            'arialabel',
            'class',
            'rel',
            'target',
            'text',
            'title',
        ],
        'html' => function ($tag) {
            return Html::email($tag->value, $tag->text, [
                'aria-label'  => $tag->arialabel,
                'class'  => $tag->class,
                'rel'    => $tag->rel,
                'target' => $tag->target,
                'title' => $tag->title,
            ]);
        }
    ],

    /* Link */
    'link' => [
        'attr' => [
            'arialabel',
            'class',
            'lang',
            'rel',
            'role',
            'target',
            'title',
            'text',
            'download'
        ],
        'html' => function ($tag) {
            if (empty($tag->lang) === false) {
                $tag->value = Url::to($tag->value, $tag->lang);
            }

            return Html::a($tag->value, $tag->text, [
                'aria-label'  => $tag->arialabel,
                'download'  => $tag->download,
                'rel'    => $tag->rel,
                'class'  => $tag->class,
                'role'   => $tag->role,
                'title'  => $tag->title,
                'target' => $tag->target,
            ]);
        }
    ],

    /* Tel */
    'tel' => [
        'attr' => [
            'arialabel',
            'class',
            'rel',
            'text',
            'title'
        ],
        'html' => function ($tag) {
            return Html::tel($tag->value, $tag->text, [
                'aria-label' => $tag->arialabel,
                'class' => $tag->class,
                'rel'   => $tag->rel,
                'title' => $tag->title
            ]);
        }
    ],
    ]
]);