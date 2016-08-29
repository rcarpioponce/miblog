<?php
namespace AppBlog\Repositories;
class BaseRepo{
	protected $entity;
	protected $inputs;
	public function __construct($entity){
		$this->entity = $entity;
	}
	public function getInputs(){
		$this->inputs = \Input::All();
	}
	public function getAllRegisters(){
		return $this->entity->All();
	}
}