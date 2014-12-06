<?php

class LandingsController extends BaseController
{
	public function landing()
	{
		// Show landing page
		return View::make('landing');
	}
}