<?php
namespace Zein\Sriping;

use SLiMS\Json;

final class Rest
{
    public function index()
    {
        exit(Json::stringify(['status' => true, 'message' => 'Arep Ngapa?!'])->withHeader());
    }
}