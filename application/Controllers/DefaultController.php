<?php

namespace Application\Controllers;

use RSPhp\Framework\Controller;
use RSPhp\Framework\View;
use RSPhp\Framework\Input;
use RSPhp\Framework\Uri;
use Exception;

/**
 * Default controller
 */
class DefaultController extends Controller
{
    /**
     * Creates a new instance of DefaultController
     */
    function __construct()
    {
    } // end function constructs

    /**
     * The home %baseUrl/Default/
     */
    function index()
    {
        View::load('welcome');
    } // end function index

} // end class DefaultController;
