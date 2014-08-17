<?php

class LAMController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /lam
	 *
	 * @return Response
	 */
	public function home()
	{
		return View::make('lam.home');
	}

    public function resources()
    {
        return View::make('lam.resources');
    }

    public function equations()
    {
        return View::make('lam.equations');
    }

    public function slopeLinesGraphs()
    {
        return View::make('lam.slope-lines-graphs');
    }

    public function firstReview()
    {
        return View::make('lam.first-eoc-review');
    }
}