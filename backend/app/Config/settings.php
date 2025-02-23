<?php

declare(strict_types=1);

use DI\Container;

return function (Container $container)
{
    $container->set('settings', function() {
        return [
            'name' => 'Workana Planning Poker',
            'displayErrorDetails' => true,
            'logErrorDetails' => true,
            'logErrors' => true,
        ];
    });
};