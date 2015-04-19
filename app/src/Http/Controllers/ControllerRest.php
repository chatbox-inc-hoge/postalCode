<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/04/18
 * Time: 1:45
 */

namespace Chatbox\PostalCode\Http\Controllers;

use Chatbox\Rumic\Http\Controllers\ControllerInterface;
use Laravel\Lumen\Routing\Controller;

use Chatbox\Rumic\Http\Controllers\RestControllerTrait;

abstract class ControllerRest implements ControllerInterface{

    use RestControllerTrait;

}