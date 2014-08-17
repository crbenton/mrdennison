<?php

class AlgebraController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /algebra
	 *
	 * @return Response
	 */
	public function home()
	{
		return View::make('algebra.home');
	}

	public function equations()
    {
        return View::make('algebra.equations');
    }

    public function resources()
    {
        return View::make('algebra.resources');
    }
}