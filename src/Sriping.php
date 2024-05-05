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
        $router->map('GET', '/sriping/', Rest::class . '@index');
    }
}