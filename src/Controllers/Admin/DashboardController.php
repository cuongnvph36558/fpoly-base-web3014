<?php


namespace Cuong\Bai8\Controllers\Admin;

use Cuong\Bai8\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}