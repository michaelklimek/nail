<?php

class AboutsController extends BaseController
{
	public function about()
	{
		// Show About Us page
		return View::make('about');
	}
}