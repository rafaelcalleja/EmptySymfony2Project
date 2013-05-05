<?php

namespace Acme\DemoBundle\Document\Twitter;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MongoDB\Document
 */
class Search {
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
	 * @var float
	 * @MongoDB\Field(type="float")
	 */
	protected $completed_in; //' => float 0.026

	/**
	 * @var float
	 * @MongoDB\Field(type="float")
	 */
	protected $max_id; //' => float 3.3074998087478E+17

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $max_id_str; //' => string '330749980874780673' (length=18)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $next_results; //' => string '?max_id=330749504708034559&q=Cristiano%20Ronaldo&include_entities=1' (length=67)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $query; //' => string 'Cristiano+Ronaldo' (length=17)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $refresh_url; //' => string '?since_id=330749980874780673&q=Cristiano%20Ronaldo&include_entities=1' (length=69)

	/**
	 * @var int
	 * @MongoDB\Field(type="int")
	 */
	protected $count; //' => int 15

	/**
	 * @var int
	 * @MongoDB\Field(type="int")
	 */
	protected $since_id; //' => int 0

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $since_id_str; //' => string '0' (length=1)

	/**
	 * @ReferenceMany(
	 *     strategy="set",
	 *     targetDocument="Acme\DemoBundle\Document\Twitter\Twit",
	 *     cascade="all",
	 *     sort={"sort_field": "asc"}
	 *     discriminatorField="type",
	 * )
	 */ 
	protected $statuses; //relation twit.php

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
	 * @return the float
	 */
	public function getCompletedIn() {
		return $this->completed_in;
	}

	/**
	 * @param float $completed_in
	 */
	public function setCompletedIn(float $completed_in) {
		$this->completed_in = $completed_in;
	}

	/**
	 * @return the float
	 */
	public function getMaxId() {
		return $this->max_id;
	}

	/**
	 * @param float $max_id
	 */
	public function setMaxId(float $max_id) {
		$this->max_id = $max_id;
	}

	/**
	 * @return the string
	 */
	public function getMaxIdStr() {
		return $this->max_id_str;
	}

	/**
	 * @param string $max_id_str
	 */
	public function setMaxIdStr(string $max_id_str) {
		$this->max_id_str = $max_id_str;
	}

	/**
	 * @return the string
	 */
	public function getNextResults() {
		return $this->next_results;
	}

	/**
	 * @param string $next_results
	 */
	public function setNextResults(string $next_results) {
		$this->next_results = $next_results;
	}

	/**
	 * @return the string
	 */
	public function getQuery() {
		return $this->query;
	}

	/**
	 * @param string $query
	 */
	public function setQuery(string $query) {
		$this->query = $query;
	}

	/**
	 * @return the string
	 */
	public function getRefreshUrl() {
		return $this->refresh_url;
	}

	/**
	 * @param string $refresh_url
	 */
	public function setRefreshUrl(string $refresh_url) {
		$this->refresh_url = $refresh_url;
	}

	/**
	 * @return the int
	 */
	public function getCount() {
		return $this->count;
	}

	/**
	 * @param int $count
	 */
	public function setCount(int $count) {
		$this->count = $count;
	}

	/**
	 * @return the int
	 */
	public function getSinceId() {
		return $this->since_id;
	}

	/**
	 * @param int $since_id
	 */
	public function setSinceId(int $since_id) {
		$this->since_id = $since_id;
	}

	/**
	 * @return the string
	 */
	public function getSinceIdStr() {
		return $this->since_id_str;
	}

	/**
	 * @param string $since_id_str
	 */
	public function setSinceIdStr(string $since_id_str) {
		$this->since_id_str = $since_id_str;
	}

	/**
	 * @return the unknown_type
	 */
	public function getStatuses() {
		return $this->statuses;
	}

	/**
	 * @param unknown_type $statuses
	 */
	public function setStatuses($statuses) {
		$this->statuses = $statuses;
	}

}
