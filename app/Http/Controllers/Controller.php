<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

<<<<<<< HEAD
class Controller extends BaseController {
=======
use View;
use App\Models\Theme;

class Controller extends BaseController
{
>>>>>>> 40004c366c26637c703cd497a00681348f4783a9
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Creates a new controller instance.
     */
    public function __construct() {
    }
}
