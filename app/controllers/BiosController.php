<?php

class BiosController extends BaseController
{
	public function bio()
	{
		// Show Bios page
		return View::make('bio');
	}
}