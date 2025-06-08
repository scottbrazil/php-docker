<?php 
namespace App\Model;

class Product {
	protected $name;

	public function __construct($name) {
		$this->name = $name;
	}

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}