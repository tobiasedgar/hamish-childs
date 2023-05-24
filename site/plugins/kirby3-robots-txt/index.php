<?php

declare(strict_types=1);

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('bnomei/robots-txt', [
    'options' => [
        'content' => null,
        'sitemap' => '/sitemap.xml',
        'groups' => [
            '*' => [ // user-agent
                'disallow' => [
                    '/kirby/',
                ],
                'allow' => [
                    '/media/',
                    '/site/',
                ],
            ],
        ],
    ],
    'routes' => [
        [
            'pattern' => 'robots.txt',
            'method' => 'GET',
            'action' => function () {
                $txt = (new \Bnomei\Robotstxt())->toTxt();
                if ($txt) {
                    return new \Kirby\Http\Response($txt, 'text/plain', 200);
                }
                return kirby()->site()->visit(
                    kirby()->site()->errorPage()
                );
            },
        ],
    ],
]);
