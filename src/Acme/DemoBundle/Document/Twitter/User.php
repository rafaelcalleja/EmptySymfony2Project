<?php

namespace Acme\DemoBundle\Document\Twitter;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDB\Document
 */
class User
{
	/**
	 * @MongoDB\Id
	 */
	protected $id;
	
    /**
     * @var \DateTime
     * @MongoDB\Field(type="timestamp")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     * @MongoDB\Date 
     */
    protected $updatedAt;
    

    protected $tw_id; //' => int 419695839
    protected $tw_id_str; //' => string '419695839' (length=9)
    protected $name; //' => string ' â™¡Brithzaâ™¥' (length=14)
    protected $screen_name; //' => string 'brithza28' (length=9)
    protected $location; //' => string 'Guatemala' (length=9)
    protected $description; //' => string '* God in my life * Iâ™¡R.Madrid * lÃ˜vÓ˜â™¥musÄ­c * La rutina es aburrida hagamos algo diferente ;)' (length=99)
    protected $url; //' => null
    protected $entities; //relation' =>
    
    protected $protected; // => boolean false
    protected $followers_count; //' => int 93
    protected $friends_count; //' => int 92
    protected $listed_count; //' => int 0
    protected $created_at; //' => string 'Wed Nov 23 17:32:38 +0000 2011' (length=30)
    protected $favourites_count; //' => int 79
    protected $utc_offset; //' => int -25200
    protected $time_zone; //' => string 'Mountain Time (US & Canada)' (length=27)
    protected $geo_enabled; //' => boolean false
    protected $verified; //' => boolean false
    protected $statuses_count; //' => int 4091
    protected $lang; //' => string 'es' (length=2)
    protected $contributors_enabled; //' => boolean false
    protected $is_translator; //' => boolean false
    protected $profile_background_color; //' => string 'DBE9ED' (length=6)
    protected $profile_background_image_url; //' => string 'http://a0.twimg.com/profile_background_images/859325336/732a751bfda19bc4a3b8fb82fa102182.jpeg' (length=93)
    protected $profile_background_image_url_https; //' => string 'https://si0.twimg.com/profile_background_images/859325336/732a751bfda19bc4a3b8fb82fa102182.jpeg' (length=95)
    protected $profile_background_tile; //' => boolean false
    protected $profile_image_url; //' => string 'http://a0.twimg.com/profile_images/3595063228/882474abb81ed54dd4ed6d6797a2e898_normal.jpeg' (length=90)
    protected $profile_image_url_https; //' => string 'https://si0.twimg.com/profile_images/3595063228/882474abb81ed54dd4ed6d6797a2e898_normal.jpeg' (length=92)
    protected $profile_banner_url; //' => string 'https://si0.twimg.com/profile_banners/419695839/1367600468' (length=58)
    protected $profile_link_color; //' => string 'CC3366' (length=6)
    protected $profile_sidebar_border_color; //' => string '000000' (length=6)
    protected $profile_sidebar_fill_color; //' => string 'E6F6F9' (length=6)
    protected $profile_text_color; //' => string '333333' (length=6)
    protected $profile_use_background_image; //' => boolean true
    protected $default_profile; //' => boolean false
    protected $default_profile_image; //' => boolean false
    protected $following; //' => null
    protected $follow_request_sent; //' => null
    protected $notifications; //' => null
    
    

    
    /**
     * Sets the creation date
     *
     * @param \DateTime|null $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns the creation date
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Sets the last update date
     *
     * @param \DateTime|null $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns the last update date
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

   /**
     * Hook on pre-persist operations
     */
    public function prePersist()
    {
        $this->createdAt = new \DateTime;
        $this->updatedAt = new \DateTime;
    }

    /**
     * Hook on pre-update operations
     */
    public function preUpdate()
    {
        $this->updatedAt = new \DateTime;
    }
}
