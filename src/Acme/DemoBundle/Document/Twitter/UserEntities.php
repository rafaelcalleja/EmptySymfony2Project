<?php

namespace Acme\DemoBundle\Document\Twitter;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MongoDB\Document
 */
class UserEntities {
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

	/** @MongoDB\Bin */
	protected $hashtags; //Array' => 

	/** @MongoDB\Bin */
	protected $symbols; //Array

	/** @MongoDB\Bin */
	protected $urls; //Array

	/** @MongoDB\Bin */
	protected $user_mentions; //Array 

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
	public function getHashtags() {
		return $this->hashtags;
	}

	/**
	 * @param unknown_type $hashtags
	 */
	public function setHashtags($hashtags) {
		$this->hashtags = $hashtags;
	}

	/**
	 * @return the unknown_type
	 */
	public function getSymbols() {
		return $this->symbols;
	}

	/**
	 * @param unknown_type $symbols
	 */
	public function setSymbols($symbols) {
		$this->symbols = $symbols;
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

	/**
	 * @return the unknown_type
	 */
	public function getUserMentions() {
		return $this->user_mentions;
	}

	/**
	 * @param unknown_type $user_mentions
	 */
	public function setUserMentions($user_mentions) {
		$this->user_mentions = $user_mentions;
	}

}
