<?php

class MastersController extends BaseController
{
	public function master()
	{
		// Show list of carriers
		return View::make('_master');
	}
}