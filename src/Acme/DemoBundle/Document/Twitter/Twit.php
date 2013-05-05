<?php

namespace Acme\DemoBundle\Document\Twitter;
use Symfony\Component\Validator\Constraints\Time;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MongoDB\Document
 */
class Twit {
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
	 * @var timestamp
	 * @MongoDB\Field(type="timestamp" name="created_at")
	 */
	protected $tw_created_at;

	/**
	 * @var float
	 * @MongoDB\Field(type="float")
	 */
	protected $tw_id; //float

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $tw_id_str;

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $text; // string

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $source; // string

	/**
	 * @var boolean
	 * @MongoDB\Field(type="boolean")
	 */
	protected $truncated;

	/**
	 * @MongoDB\ReferenceOne(
	 *     targetDocument="Acme\DemoBundle\Document\Twitter\Metadata",
	 *     cascade="all",
	 *     discriminatorField="type",
	 * )
	 */
	protected $metadata; //relation Metadata.php

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $in_reply_to_status_id;

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $in_reply_to_status_id_str;

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $in_reply_to_user_id;

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $in_reply_to_user_id_str;

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $in_reply_to_screen_name;

	/**
	 * @MongoDB\ReferenceOne(
	 *     targetDocument="Acme\DemoBundle\Document\Twitter\User",
	 *     cascade="all",
	 *     discriminatorField="type",
	 * )
	 */
	protected $user; //relation User.php

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $geo; //string

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $coordinates;

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $place;

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $contributors;
	
	/**
	 * @MongoDB\ReferenceOne(
	 *     targetDocument="Acme\DemoBundle\Document\Twitter\Twit",
	 *     cascade="all",
	 *     discriminatorField="type",
	 * )
	 */
	protected $retweeted_status;//relation Puede contener otros twit

	/**
	 * @var int
	 * @MongoDB\Field(type="int")
	 */
	protected $retweet_count;

	/**
	 * @var int
	 * @MongoDB\Field(type="int")
	 */
	protected $favorite_count;

	/**
	 * @MongoDB\ReferenceOne(
	 *     targetDocument="Acme\DemoBundle\Document\Twitter\UserEntities",
	 *     cascade="all",
	 *     discriminatorField="type",
	 * )
	 */
	protected $entities; //relation UserEntities

	/**
	 * @var boolean
	 * @MongoDB\Field(type="boolean")
	 */
	protected $favorited;

	/**
	 * @var boolean
	 * @MongoDB\Field(type="boolean")
	 */
	protected $retweeted;

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $lang; //=> string 'en' (length=2)

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

	public function getTwCreatedAt() {
		return $this->tw_created_at;
	}

	public function setTwCreatedAt(timestamp $tw_created_at) {
		$this->tw_created_at = $tw_created_at;
	}

	public function getTwId() {
		return $this->tw_id;
	}

	public function setTwId(float $tw_id) {
		$this->tw_id = $tw_id;
	}

	public function getTwIdStr() {
		return $this->tw_id_str;
	}

	public function setTwIdStr(string $tw_id_str) {
		$this->tw_id_str = $tw_id_str;
	}

	public function getText() {
		return $this->text;
	}

	public function setText(string $text) {
		$this->text = $text;
	}

	public function getSource() {
		return $this->source;
	}

	public function setSource(string $source) {
		$this->source = $source;
	}

	public function getTruncated() {
		return $this->truncated;
	}

	public function setTruncated(boolean $truncated) {
		$this->truncated = $truncated;
	}

	public function getInReplyToStatusId() {
		return $this->in_reply_to_status_id;
	}

	public function setInReplyToStatusId(string $in_reply_to_status_id) {
		$this->in_reply_to_status_id = $in_reply_to_status_id;
	}

	public function getInReplyToStatusIdStr() {
		return $this->in_reply_to_status_id_str;
	}

	public function setInReplyToStatusIdStr(string $in_reply_to_status_id_str) {
		$this->in_reply_to_status_id_str = $in_reply_to_status_id_str;
	}

	public function getInReplyToUserId() {
		return $this->in_reply_to_user_id;
	}

	public function setInReplyToUserId(string $in_reply_to_user_id) {
		$this->in_reply_to_user_id = $in_reply_to_user_id;
	}

	public function getInReplyToUserIdStr() {
		return $this->in_reply_to_user_id_str;
	}

	public function setInReplyToUserIdStr(string $in_reply_to_user_id_str) {
		$this->in_reply_to_user_id_str = $in_reply_to_user_id_str;
	}

	public function getInReplyToScreenName() {
		return $this->in_reply_to_screen_name;
	}

	public function setInReplyToScreenName(string $in_reply_to_screen_name) {
		$this->in_reply_to_screen_name = $in_reply_to_screen_name;
	}

	public function getGeo() {
		return $this->geo;
	}

	public function setGeo(string $geo) {
		$this->geo = $geo;
	}

	public function getCoordinates() {
		return $this->coordinates;
	}

	public function setCoordinates(string $coordinates) {
		$this->coordinates = $coordinates;
	}

	public function getPlace() {
		return $this->place;
	}

	public function setPlace(string $place) {
		$this->place = $place;
	}

	public function getContributors() {
		return $this->contributors;
	}

	public function setContributors(string $contributors) {
		$this->contributors = $contributors;
	}

	public function getRetweetedStatus() {
		return $this->retweeted_status;
	}

	public function setRetweetedStatus($retweeted_status) {
		$this->retweeted_status = $retweeted_status;
	}

	public function getRetweetCount() {
		return $this->retweet_count;
	}

	public function setRetweetCount(int $retweet_count) {
		$this->retweet_count = $retweet_count;
	}

	public function getFavoriteCount() {
		return $this->favorite_count;
	}

	public function setFavoriteCount(int $favorite_count) {
		$this->favorite_count = $favorite_count;
	}

	public function getFavorited() {
		return $this->favorited;
	}

	public function setFavorited(boolean $favorited) {
		$this->favorited = $favorited;
	}

	public function getRetweeted() {
		return $this->retweeted;
	}

	public function setRetweeted(boolean $retweeted) {
		$this->retweeted = $retweeted;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang(string $lang) {
		$this->lang = $lang;
	}

}
