<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Common extends Controller_Template {

	private $view;
	private $content;
	private $navigation;
	private $title;

	public function before()
	{
		parent::before();
		//$this->navigation = View::factory('navigation');
			//$this->navigation->brand = "Привет";
		//$this->navigation->active = '/';
		//$this->template->footer = View::factory('footer');

		//$this->template->content = '';
	}

	public function action_index()
	{
        $this->title = "Chandra";
        //$this->template->navigation->active = '/';
        $this->content = View::factory('main');
	}

	public function action_catalog()
	{
        $this->title = "Меню";
		//$this->template->navigation->active = 'catalog';
		$this->content = View::factory('catalog');
	}

	public function action_health()
	{
		$this->title = "О пользе";
		//$this->template->navigation->active = 'health';
		$this->content = View::factory('health');		
	}

	public function action_about()
	{
		$this->title = "О нас";
		//$this->template->navigation->active = 'about';
		$this->content = View::factory('about');
	}

	public function action_contacts()
	{
		$this->title = "Контакты";
		//$this->template->navigation->active = 'contacts';
		$this->content = View::factory('contacts');	
	}

	public function after() {

		// проверка на аякс запрос, ежель нет его, то просто грузит шаблон и там по обычной, ежель есть он, то подгружает контент
		if (!$this->request->is_ajax()) {
			$this->view = View::factory('template');
		} else {
			$this->view = View::factory('content');
		}

		// переменная, содержащая в себе промежуточный фью с переменой контент, которая определяется выше в экшенах, решающая что загрузить
		//$container = View::factory('content')->set('content', $this->content);

		// определяем переменные, содержащиеся во фью
		$this->view
			->set('content', $this->content)
			->set('title', $this->title);

		// выводим результат
		$this->response->body($this->view);
	}
} 
