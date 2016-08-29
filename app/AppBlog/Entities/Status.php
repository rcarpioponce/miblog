<?php
namespace AppBlog\Entities;
class Status extends \Eloquent{
	protected $table = 'status';
	protected $fillable = array('description');
} 