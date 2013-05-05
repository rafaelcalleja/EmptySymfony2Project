<?php

namespace Acme\DemoBundle\Document\Twitter;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MongoDB\Document
 */
class User {
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
	 * @var int
	 * @MongoDB\Field(type="int")
	 */
	protected $tw_id; //' => int 419695839

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $tw_id_str; //' => string '419695839' (length=9)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $name; //' => string ' â™¡Brithzaâ™¥' (length=14)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $screen_name; //' => string 'brithza28' (length=9)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $location; //' => string 'Guatemala' (length=9)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $description; //' => string '* God in my life * Iâ™¡R.Madrid * lÃ˜vÓ˜â™¥musÄ­c * La rutina es aburrida hagamos algo diferente ;)' (length=99)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $url; //' => null

	/**
	 * @MongoDB\ReferenceOne(
	 *     targetDocument="Acme\DemoBundle\Document\Twitter\Entities",
	 *     cascade="all",
	 *     discriminatorField="type",
	 * )
	 */
	protected $entities; //relation' =>

	/**
	 * @var boolean
	 * @MongoDB\Field(type="boolean")
	 */
	protected $protected; // => boolean false

	/**
	 * @var int
	 * @MongoDB\Field(type="int")
	 */
	protected $followers_count; //' => int 93

	/**
	 * @var int
	 * @MongoDB\Field(type="int")
	 */
	protected $friends_count; //' => int 92

	/**
	 * @var int
	 * @MongoDB\Field(type="int")
	 */
	protected $listed_count; //' => int 0

	/**
	 * @var datetime
	 * @MongoDB\Field(type="datetime")
	 */
	protected $created_at; //' => string 'Wed Nov 23 17:32:38 +0000 2011' (length=30)

	/**
	 * @var int
	 * @MongoDB\Field(type="int")
	 */
	protected $favourites_count; //' => int 79

	/**
	 * @var int
	 * @MongoDB\Field(type="int")
	 */
	protected $utc_offset; //' => int -25200

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $time_zone; //' => string 'Mountain Time (US & Canada)' (length=27)

	/**
	 * @var boolean
	 * @MongoDB\Field(type="boolean")
	 */
	protected $geo_enabled; //' => boolean false

	/**
	 * @var boolean
	 * @MongoDB\Field(type="boolean")
	 */
	protected $verified; //' => boolean false

	/**
	 * @var int
	 * @MongoDB\Field(type="int")
	 */
	protected $statuses_count; //' => int 4091

	/**
	 * @var int
	 * @MongoDB\Field(type="int")
	 */
	protected $lang; //' => string 'es' (length=2)

	/**
	 * @var boolean
	 * @MongoDB\Field(type="boolean")
	 */
	protected $contributors_enabled; //' => boolean false

	/**
	 * @var boolean
	 * @MongoDB\Field(type="boolean")
	 */
	protected $is_translator; //' => boolean false

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $profile_background_color; //' => string 'DBE9ED' (length=6)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $profile_background_image_url; //' => string 'http://a0.twimg.com/profile_background_images/859325336/732a751bfda19bc4a3b8fb82fa102182.jpeg' (length=93)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $profile_background_image_url_https; //' => string 'https://si0.twimg.com/profile_background_images/859325336/732a751bfda19bc4a3b8fb82fa102182.jpeg' (length=95)

	/**
	 * @var boolean
	 * @MongoDB\Field(type="boolean")
	 */
	protected $profile_background_tile; //' => boolean false

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $profile_image_url; //' => string 'http://a0.twimg.com/profile_images/3595063228/882474abb81ed54dd4ed6d6797a2e898_normal.jpeg' (length=90)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $profile_image_url_https; //' => string 'https://si0.twimg.com/profile_images/3595063228/882474abb81ed54dd4ed6d6797a2e898_normal.jpeg' (length=92)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $profile_banner_url; //' => string 'https://si0.twimg.com/profile_banners/419695839/1367600468' (length=58)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $profile_link_color; //' => string 'CC3366' (length=6)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $profile_sidebar_border_color; //' => string '000000' (length=6)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $profile_sidebar_fill_color; //' => string 'E6F6F9' (length=6)

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $profile_text_color; //' => string '333333' (length=6)

	/**
	 * @var boolean
	 * @MongoDB\Field(type="boolean")
	 */
	protected $profile_use_background_image; //' => boolean true

	/**
	 * @var boolean
	 * @MongoDB\Field(type="boolean")
	 */
	protected $default_profile; //' => boolean false

	/**
	 * @var boolean
	 * @MongoDB\Field(type="boolean")
	 */
	protected $default_profile_image; //' => boolean false

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $following; //' => null

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $follow_request_sent; //' => null

	/**
	 * @var string
	 * @MongoDB\Field(type="string")
	 */
	protected $notifications; //' => null

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
	 * @return the int
	 */
	public function getTwId() {
		return $this->tw_id;
	}

	/**
	 * @param int $tw_id
	 */
	public function setTwId(int $tw_id) {
		$this->tw_id = $tw_id;
	}

	/**
	 * @return the string
	 */
	public function getTwIdStr() {
		return $this->tw_id_str;
	}

	/**
	 * @param string $tw_id_str
	 */
	public function setTwIdStr(string $tw_id_str) {
		$this->tw_id_str = $tw_id_str;
	}

	/**
	 * @return the string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName(string $name) {
		$this->name = $name;
	}

	/**
	 * @return the string
	 */
	public function getScreenName() {
		return $this->screen_name;
	}

	/**
	 * @param string $screen_name
	 */
	public function setScreenName(string $screen_name) {
		$this->screen_name = $screen_name;
	}

	/**
	 * @return the string
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * @param string $location
	 */
	public function setLocation(string $location) {
		$this->location = $location;
	}

	/**
	 * @return the string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription(string $description) {
		$this->description = $description;
	}

	/**
	 * @return the string
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * @param string $url
	 */
	public function setUrl(string $url) {
		$this->url = $url;
	}

	/**
	 * @return the boolean
	 */
	public function getProtected() {
		return $this->protected;
	}

	/**
	 * @param  $protected
	 */
	public function setProtected($protected) {
		$this->protected = $protected;
	}

	/**
	 * @return the int
	 */
	public function getFollowersCount() {
		return $this->followers_count;
	}

	/**
	 * @param int $followers_count
	 */
	public function setFollowersCount(int $followers_count) {
		$this->followers_count = $followers_count;
	}

	/**
	 * @return the int
	 */
	public function getFriendsCount() {
		return $this->friends_count;
	}

	/**
	 * @param int $friends_count
	 */
	public function setFriendsCount(int $friends_count) {
		$this->friends_count = $friends_count;
	}

	/**
	 * @return the int
	 */
	public function getListedCount() {
		return $this->listed_count;
	}

	/**
	 * @param int $listed_count
	 */
	public function setListedCount(int $listed_count) {
		$this->listed_count = $listed_count;
	}

	/**
	 * @return the datetime
	 */
	public function getCreatedAt() {
		return $this->created_at;
	}

	/**
	 * @param datetime $created_at
	 */
	public function setCreatedAt(datetime $created_at) {
		$this->created_at = $created_at;
	}

	/**
	 * @return the int
	 */
	public function getFavouritesCount() {
		return $this->favourites_count;
	}

	/**
	 * @param int $favourites_count
	 */
	public function setFavouritesCount(int $favourites_count) {
		$this->favourites_count = $favourites_count;
	}

	/**
	 * @return the int
	 */
	public function getUtcOffset() {
		return $this->utc_offset;
	}

	/**
	 * @param int $utc_offset
	 */
	public function setUtcOffset(int $utc_offset) {
		$this->utc_offset = $utc_offset;
	}

	/**
	 * @return the string
	 */
	public function getTimeZone() {
		return $this->time_zone;
	}

	/**
	 * @param string $time_zone
	 */
	public function setTimeZone(string $time_zone) {
		$this->time_zone = $time_zone;
	}

	/**
	 * @return the boolean
	 */
	public function getGeoEnabled() {
		return $this->geo_enabled;
	}

	/**
	 * @param  $geo_enabled
	 */
	public function setGeoEnabled($geo_enabled) {
		$this->geo_enabled = $geo_enabled;
	}

	/**
	 * @return the boolean
	 */
	public function getVerified() {
		return $this->verified;
	}

	/**
	 * @param  $verified
	 */
	public function setVerified($verified) {
		$this->verified = $verified;
	}

	/**
	 * @return the int
	 */
	public function getStatusesCount() {
		return $this->statuses_count;
	}

	/**
	 * @param int $statuses_count
	 */
	public function setStatusesCount(int $statuses_count) {
		$this->statuses_count = $statuses_count;
	}

	/**
	 * @return the int
	 */
	public function getLang() {
		return $this->lang;
	}

	/**
	 * @param int $lang
	 */
	public function setLang(int $lang) {
		$this->lang = $lang;
	}

	/**
	 * @return the boolean
	 */
	public function getContributorsEnabled() {
		return $this->contributors_enabled;
	}

	/**
	 * @param  $contributors_enabled
	 */
	public function setContributorsEnabled($contributors_enabled) {
		$this->contributors_enabled = $contributors_enabled;
	}

	/**
	 * @return the boolean
	 */
	public function getIsTranslator() {
		return $this->is_translator;
	}

	/**
	 * @param  $is_translator
	 */
	public function setIsTranslator($is_translator) {
		$this->is_translator = $is_translator;
	}

	/**
	 * @return the string
	 */
	public function getProfileBackgroundColor() {
		return $this->profile_background_color;
	}

	/**
	 * @param string $profile_background_color
	 */
	public function setProfileBackgroundColor(string $profile_background_color) {
		$this->profile_background_color = $profile_background_color;
	}

	/**
	 * @return the string
	 */
	public function getProfileBackgroundImageUrl() {
		return $this->profile_background_image_url;
	}

	/**
	 * @param string $profile_background_image_url
	 */
	public function setProfileBackgroundImageUrl(
			string $profile_background_image_url) {
		$this->profile_background_image_url = $profile_background_image_url;
	}

	/**
	 * @return the string
	 */
	public function getProfileBackgroundImageUrlHttps() {
		return $this->profile_background_image_url_https;
	}

	/**
	 * @param string $profile_background_image_url_https
	 */
	public function setProfileBackgroundImageUrlHttps(
			string $profile_background_image_url_https) {
		$this->profile_background_image_url_https = $profile_background_image_url_https;
	}

	/**
	 * @return the boolean
	 */
	public function getProfileBackgroundTile() {
		return $this->profile_background_tile;
	}

	/**
	 * @param  $profile_background_tile
	 */
	public function setProfileBackgroundTile($profile_background_tile) {
		$this->profile_background_tile = $profile_background_tile;
	}

	/**
	 * @return the string
	 */
	public function getProfileImageUrl() {
		return $this->profile_image_url;
	}

	/**
	 * @param string $profile_image_url
	 */
	public function setProfileImageUrl(string $profile_image_url) {
		$this->profile_image_url = $profile_image_url;
	}

	/**
	 * @return the string
	 */
	public function getProfileImageUrlHttps() {
		return $this->profile_image_url_https;
	}

	/**
	 * @param string $profile_image_url_https
	 */
	public function setProfileImageUrlHttps(string $profile_image_url_https) {
		$this->profile_image_url_https = $profile_image_url_https;
	}

	/**
	 * @return the string
	 */
	public function getProfileBannerUrl() {
		return $this->profile_banner_url;
	}

	/**
	 * @param string $profile_banner_url
	 */
	public function setProfileBannerUrl(string $profile_banner_url) {
		$this->profile_banner_url = $profile_banner_url;
	}

	/**
	 * @return the string
	 */
	public function getProfileLinkColor() {
		return $this->profile_link_color;
	}

	/**
	 * @param string $profile_link_color
	 */
	public function setProfileLinkColor(string $profile_link_color) {
		$this->profile_link_color = $profile_link_color;
	}

	/**
	 * @return the string
	 */
	public function getProfileSidebarBorderColor() {
		return $this->profile_sidebar_border_color;
	}

	/**
	 * @param string $profile_sidebar_border_color
	 */
	public function setProfileSidebarBorderColor(
			string $profile_sidebar_border_color) {
		$this->profile_sidebar_border_color = $profile_sidebar_border_color;
	}

	/**
	 * @return the string
	 */
	public function getProfileSidebarFillColor() {
		return $this->profile_sidebar_fill_color;
	}

	/**
	 * @param string $profile_sidebar_fill_color
	 */
	public function setProfileSidebarFillColor(
			string $profile_sidebar_fill_color) {
		$this->profile_sidebar_fill_color = $profile_sidebar_fill_color;
	}

	/**
	 * @return the string
	 */
	public function getProfileTextColor() {
		return $this->profile_text_color;
	}

	/**
	 * @param string $profile_text_color
	 */
	public function setProfileTextColor(string $profile_text_color) {
		$this->profile_text_color = $profile_text_color;
	}

	/**
	 * @return the boolean
	 */
	public function getProfileUseBackgroundImage() {
		return $this->profile_use_background_image;
	}

	/**
	 * @param  $profile_use_background_image
	 */
	public function setProfileUseBackgroundImage($profile_use_background_image) {
		$this->profile_use_background_image = $profile_use_background_image;
	}

	/**
	 * @return the boolean
	 */
	public function getDefaultProfile() {
		return $this->default_profile;
	}

	/**
	 * @param  $default_profile
	 */
	public function setDefaultProfile($default_profile) {
		$this->default_profile = $default_profile;
	}

	/**
	 * @return the boolean
	 */
	public function getDefaultProfileImage() {
		return $this->default_profile_image;
	}

	/**
	 * @param  $default_profile_image
	 */
	public function setDefaultProfileImage($default_profile_image) {
		$this->default_profile_image = $default_profile_image;
	}

	/**
	 * @return the string
	 */
	public function getFollowing() {
		return $this->following;
	}

	/**
	 * @param string $following
	 */
	public function setFollowing(string $following) {
		$this->following = $following;
	}

	/**
	 * @return the string
	 */
	public function getFollowRequestSent() {
		return $this->follow_request_sent;
	}

	/**
	 * @param string $follow_request_sent
	 */
	public function setFollowRequestSent(string $follow_request_sent) {
		$this->follow_request_sent = $follow_request_sent;
	}

	/**
	 * @return the string
	 */
	public function getNotifications() {
		return $this->notifications;
	}

	/**
	 * @param string $notifications
	 */
	public function setNotifications(string $notifications) {
		$this->notifications = $notifications;
	}

}
