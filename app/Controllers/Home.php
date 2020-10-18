<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$categoryModel = new \App\Models\CategoryModel();

		$categories = $categoryModel->findAll();
		
		return view('categories', compact('categories'));
	}

	//--------------------------------------------------------------------

}
