<?php

namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {
	public function indexAction() {
		$view = new ViewModel();
		return $view;
	}
	
	public function registerAction() {
		$view = new ViewModel();
		$view->setTemplate('user/index/new-user');
		return $view;
	}
	
	public function loginAction() {
		$view = new ViewModel();
		$view->setTemplate('user/index/login');
		return $view;
	}
}