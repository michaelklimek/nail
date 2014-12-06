<?php

class ContactsController extends BaseController
{
	public function contact()
	{
		// Show Contact Us page
		return View::make('contact');
	}
}