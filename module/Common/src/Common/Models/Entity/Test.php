<?php

namespace Common\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Common\Models\Entity\Test
 *
 * @ORM\Entity
 * @ORM\Table(name="test")
 */
class Test {

	/**
	 * @var int $id
	 *
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	public function getId() {
		return $this->id;
	}

}