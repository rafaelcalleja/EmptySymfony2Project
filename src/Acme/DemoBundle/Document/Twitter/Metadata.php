<?php

namespace Acme\DemoBundle\Document\Twitter;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MongoDB\Document
 */
class Metadata {
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
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $result_type;

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $iso_language_code;

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

	public function getId() {
		return $this->id;
	}

	public function getResultType() {
		return $this->result_type;
	}

	public function setResultType(string $result_type) {
		$this->result_type = $result_type;
	}

	public function getIsoLanguageCode() {
		return $this->iso_language_code;
	}

	public function setIsoLanguageCode(string $iso_language_code) {
		$this->iso_language_code = $iso_language_code;
	}

}
