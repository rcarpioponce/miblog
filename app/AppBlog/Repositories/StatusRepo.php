<?php
namespace AppBlog\Repositories;
use AppBlog\Repositories\BaseRepo;
use AppBlog\Entities\Status;
class StatusRepo extends BaseRepo{
	public function __construct(Status $status){
		parent::__construct($status);
	}
	public function index(){
		return $this->getAllRegisters();
	}
	public function add($arDatos = array()){
		if(count($arDatos) == 0){
			$this->getInputs();
			$arDatos = $this->inputs;
		}
		return Status::create($arDatos);
	}
	public function edit($id){
		$this->getInputs();
		$status = Status::find($id);
		if($status){
			$status->description = $this->inputs['description'];
			$status->save();
			return $status; 
		}
		return 'error no se encontro el registro';
	}
}