<?php

namespace User\Form;

use Zend\Form\Form;

class LoginForm extends Form {
	
	public function __construct($name = null) {
		parent::__construct('Login');
		$this->setAttribute('method', 'post');
		$this->setAttribute('enctype', 'multipart/form-data');
		
		$this->add(array(
			'name' => 'email',
			'attributes' => array(
				'type' => 'text',
			),
			'filters' => array(
				array('name' => 'StringTrim'),
			),
			'options' => array(
				'label' => 'Email',
			),
		));
		
		$this->add(array(
			'name' => 'password',
			'attributes' => array(
				'type' => 'password',
			),
			'options' => array(
				'label' => 'Password',
			),
		));
	}
}