<?php

namespace Acme\DemoBundle\Document\Twitter;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MongoDB\Document
 */
class Description {
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
	 * @Gedmo\Timestampable(on="udpate")
	 */
	protected $updatedAt;

	/** @MongoDB\Bin */
	protected $urls; //array

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
	public function getUrls() {
		return $this->urls;
	}

	/**
	 * @param unknown_type $urls
	 */
	public function setUrls($urls) {
		$this->urls = $urls;
	}

}
