<?php

class DashboardController extends BaseController {

	public $restful = true;

	public function showIndex()
	{
		return View::make('pages.dashboard');
	}

}