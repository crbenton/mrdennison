<?php

/**
 * Class APCSController
 */
class APCSController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /apcs
	 *
	 * @return View
	 */
	public function home()
	{
		return View::make('apcs.home');
	}

    /**
     * Displays the Introduction to Programming View
     * @return View
     */
    public function introProg()
    {
        return View::make('apcs.intro-to-prog');
    }

    /**
     * Displays the Simple Methods View
     * @return View
     */
    public function simpleMethods()
    {
        return View::make('apcs.simple-methods');
    }

    public function resources()
    {
        return View::make('apcs.resources');
    }

}