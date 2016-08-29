<?php
use AppBlog\Repositories\StatusRepo;
class StatusController extends Controller {
	private $statusRepo;
	public function __construct(StatusRepo $statusRepo){
		$this->statusRepo = $statusRepo;
	}
	public function index(){
		return $this->statusRepo->index();
	}
	public function add(){
		return $this->statusRepo->add();
	}
	public function edit($id){
		return $this->statusRepo->edit($id);
	}	
}
