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
}