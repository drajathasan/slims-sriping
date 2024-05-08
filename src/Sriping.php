<?php
namespace Zein\Sriping;

use Jaybizzle\CrawlerDetect\CrawlerDetect;

final class Sriping
{
    public function bootstrap()
    {
        $CrawlerDetect = new CrawlerDetect;

        // Check the user agent of the current 'visitor'
        $path = explode('/', trim(($_GET['p']??'?'), '/'))[0]??'/';
        if(!$CrawlerDetect->isCrawler() && (!in_array($path, ['login','api']))) {
            
            //exit;
        }
    }

    public function apiRoutes($router)
    {
        header('Access-Control-Allow-Origin: *');
        $router->map('GET', '/sriping/', Rest::class . '@index');
        $router->map('GET', '/sriping/static', Rest::class . '@static');
    }
}