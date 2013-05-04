<?php

namespace Acme\DemoBundle\Document\Twitter;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDB\Document
 */
class Twit
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
    
    protected $tw_created_at;
    protected $tw_id; //float
    protected $tw_id_str; //string
    protected $text; // string
    protected $source; // string
    
    //bool
    protected $truncated;
    
    protected $metadata; //relation Metadata.php
    
    protected $in_reply_to_status_id;
    protected $in_reply_to_status_id_str;
    protected $in_reply_to_user_id;
    protected $in_reply_to_user_id_str;
    protected $in_reply_to_screen_name; 
    
    protected $user; //relation User.php
    
    protected $geo; //string
    
    protected $coordinates;
    protected $place;
    protected $contributors;
    
    protected $retweeted_status;//relation Puede contener otros twit
    
    protected $retweet_count; //int
    protected $favorite_count; //int
    
    protected $entities; //relation UserEntities
    
    
    protected $favorited; // => boolean false
    protected $retweeted; // => boolean false
    protected $lang; //=> string 'en' (length=2)
    
    
    
    

    
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
