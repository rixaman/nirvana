<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Common extends Controller_Template {

	public function action_index()
	{
		$this->template->navigation = View::factory('navigation');
		$this->template->navigation->brand = "мИР привет";
        $this->template->title = "Chandra";
        $this->template->content = View::factory('main');
	}

} // End Welcome
