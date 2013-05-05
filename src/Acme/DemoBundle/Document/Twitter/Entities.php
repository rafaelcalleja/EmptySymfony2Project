<?php

namespace Acme\DemoBundle\Document\Twitter;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MongoDB\Document
 */
class Entities {
	/**
	 * @MongoDB\Id
	 */
	protected $id;

	/**
	 * @var \DateTime
	 * @MongoDB\Field(type="datetime")
	 * @Gedmo\Timestampable(on="create")
	 */
	protected $createdAt;

	/**
	 * @var \DateTime
	 * @MongoDB\Field(type="datetime")
	 * @Gedmo\Timestampable(on="update")
	 */
	protected $updatedAt;

	/**
	 * @MongoDB\ReferenceOne(
	 *     targetDocument="Acme\DemoBundle\Document\Twitter\Description",
	 *     cascade="all",
	 *     discriminatorField="type",
	 * )
	 */
	protected $description; //relation

	/**
	 * Returns the creation date
	 *
	 * @return \DateTime|null
	 */
	public function getCreatedAt() {
		return $this->createdAt;
	}

	/**
	 * Returns the last update date
	 *
	 * @return \DateTime|null
	 */
	public function getUpdatedAt() {
		return $this->updatedAt;
	}

	/**
	 * @return the unknown_type
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the unknown_type
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param unknown_type $description
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

}
