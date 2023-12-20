<?php
include "class.php";

class Post {
	public $title;
	public $category;
	public $tag;

	public function __construct(string $userTitle, Category $categoryObj, string $userTag)
	{
		$this->title=$userTitle;
		$this->category=$categoryObj;
		$this->tag=$userTag;
	}

	public function defineArticle(){
		echo "il tuo posto ha come titolo {$this->title}, appartiene alla categoria {$this->category->name} e ha come tag {$this->tag} ";
	}
}

$attualità= new Post ("esempio", new Attualità(), "#esempio");
echo $attualità->defineArticle();