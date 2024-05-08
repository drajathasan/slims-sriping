<?php
namespace Zein\Sriping;

use SLiMS\Json;

final class Rest
{
    public function index()
    {
        exit(Json::stringify(['status' => true, 'message' => 'Arep Ngapa?!'])->withHeader());
    }

    public function static()
    {
        header('Cache-Control: max-age=7200');
        exit(Json::stringify([
            'status' => true, 
            'data' => [
                'name' => 'SLiMS 9 Bulian',
                'logo' => 'https://static.slims.web.id/logo.svg'
            ]
        ])->withHeader());
    }
}