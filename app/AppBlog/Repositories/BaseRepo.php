<?php
namespace AppBlog\Repositories;
class BaseRepo{
	protected $entity;
	public function __construct($entity){
		$this->entity = $entity;
	}
	public function getAllRegisters(){
		return $this->entity->All();
	}
}