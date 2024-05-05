<?php
/**
 * Plugin Name: Sriping OPAC Template
 * Plugin URI: -
 * Description: -
 * Version: 1.0.0
 * Author: Drajat Hasan
 * Author URI: https://t.me/drajathasan
 */
use SLiMS\Plugins;
use Zein\Sriping\Sriping;

if (str_replace(['.','v'], '', SENAYAN_VERSION_TAG) >= '961') {
    include __DIR__ . '/vendor/autoload.php';

    Plugins::use(Sriping::class)->for(function() {
        Plugins::hook('custom_api_route', 'apiRoutes');
        Plugins::hook(Plugins::CONTENT_BEFORE_LOAD, 'bootstrap');
    });
}