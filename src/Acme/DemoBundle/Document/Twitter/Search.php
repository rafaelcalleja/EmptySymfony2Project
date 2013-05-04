<?php

namespace Acme\DemoBundle\Document\Twitter;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDB\Document
 */
class Search
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
    

   
    protected $completed_in; //' => float 0.026
    protected $max_id; //' => float 3.3074998087478E+17
    protected $max_id_str; //' => string '330749980874780673' (length=18)
    protected $next_results; //' => string '?max_id=330749504708034559&q=Cristiano%20Ronaldo&include_entities=1' (length=67)
    protected $query; //' => string 'Cristiano+Ronaldo' (length=17)
    protected $refresh_url; //' => string '?since_id=330749980874780673&q=Cristiano%20Ronaldo&include_entities=1' (length=69)
    protected $count; //' => int 15
    protected $since_id; //' => int 0
    protected $since_id_str; //' => string '0' (length=1)
    
    protected $statuses; //relation twit.php

    
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
