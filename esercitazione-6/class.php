<?php

abstract class Category {
	public $name; // non necessario, il correttore di vscode però da errore se non c'è
	abstract public function getMyCategory();
}

class Attualità extends Category {
	public $name="attualità";
	public function getMyCategory()
	{
		echo "categoria $this->name\n";
	}

	public function __construct()
	{
		$this->getMyCategory();
	}
}

class Sport extends Category {
	public $name="sport";
	public function getMyCategory()
	{
		echo "categoria $this->name\n";
	}

	public function __construct()
	{
		$this->getMyCategory();
	}
}

class Gossip extends Category {
	public $name="gossip";
	public function getMyCategory()
	{
		echo "categoria $this->name\n";
	}

	public function __construct()
	{
		$this->getMyCategory();
	}
}

class Storia extends Category {
	public $name="storia";
	public function getMyCategory()
	{
		echo "categoria $this->name\n";
	}

	public function __construct()
	{
		$this->getMyCategory();
	}
}

