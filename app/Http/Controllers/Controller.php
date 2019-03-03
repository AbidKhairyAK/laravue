<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function app()
    {
    	return file_get_contents(base_path().'/resources/views/app.blade.php');
    }
}
