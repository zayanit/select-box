<?php namespace App\Controllers;

class Home extends BaseController
{
	private $categoryModel;

	public function __construct()
	{
		$this->categoryModel = new \App\Models\CategoryModel();
	}

	public function index()
	{
		$categories = $this->prepareCategoriesData($this->categoryModel->findAll());
		
		return view('categories', compact('categories'));
	}

	public function createSubCategories(): void
	{
		$category = $this->categoryModel->find((int)$_POST['categoryId']);

		$data = $this->prepareInsertData($category);

		$this->categoryModel->insertBatch($data);
	}

	protected function prepareCategoriesData(array $categories): array
	{
		$result = [];
		foreach ($categories as $category) {
			$result[$category['sub_level']][] = $category;
		}

		return $result;
	}

	protected function prepareInsertData(array $category): array
	{
		$subLevel = ++$category['sub_level'];

		if ($category['parent_id'] == 0) {
			$subParent = substr($category['name'], -1);
			$data = [
				[
					'parent_id' => $category['id'], 
					'name' => 'SUB '.$subParent.'1',
					'sub_level' => $subLevel
				],
				[
					'parent_id' => $category['id'], 
					'name' => 'SUB '.$subParent.'2',
					'sub_level' => $subLevel
				],
			];
		} else {
			$data = [
				[
					'parent_id' => $category['id'], 
					'name' => 'SUB '.$category['name'].'-1',
					'sub_level' => $subLevel
				],
				[
					'parent_id' => $category['id'], 
					'name' => 'SUB '.$category['name'].'-2',
					'sub_level' => $subLevel
				],
			];
		}

		return $data;
	}
}
