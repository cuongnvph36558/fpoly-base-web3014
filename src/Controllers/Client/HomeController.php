<?php

namespace Cuong\Bai8\Controllers\Client;

use Cuong\Bai8\Commons\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Cường';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}
