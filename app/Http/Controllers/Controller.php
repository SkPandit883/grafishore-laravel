<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


/**
 * @OA\Info(
 *      version="1.0.0",
 *      x={
 *          "logo": {
 *              "url": "https://via.placeholder.com/190x90.png?text=CarInformations"
 *          }
 *      },
 *      title="Car Informations",
 *      @OA\Contact(
 *          email="skpandit659@gmail.com",
 *      ),

 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
