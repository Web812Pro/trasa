<?php namespace Web812\TrasathemeTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Routing\Router;

class TrasathemeThemeServiceProvider extends AddonServiceProvider
{

    /**
     * The view overrides.
     *
     * @var array
     */
    protected $overrides = [
        'streams::errors/404' => 'theme::errors/404',
        'streams::errors/500' => 'theme::errors/500',
    ];
}
