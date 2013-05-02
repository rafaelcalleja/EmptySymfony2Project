<?php

namespace Acme\DemoBundle\Document;

use FOS\UserBundle\Document\User as AbstractedUser;
use Sonata\UserBundle\Model\UserInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class User extends AbstractedUser implements UserInterface
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

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $twoStepVerificationCode;

    /**
     * @var \DateTime
     * @MongoDB\Date
     */
    protected $dateOfBirth;

    /**
     * @var string
	 * @MongoDB\Field(type="string")
     */
    protected $firstname;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $lastname;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $website;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $biography;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $gender;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $locale;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $timezone;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $phone;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $facebookUid;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $facebookName;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $facebookData;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $twitterUid;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $twitterName;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $twitterData;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $gplusUid;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $gplusName;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $gplusData;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $token;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
    	return $this->id;
    }
    
    
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
     * Returns the expiration date
     *
     * @return \DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Returns the credentials expiration date
     *
     * @return \DateTime
     */
    public function getCredentialsExpireAt()
    {
        return $this->credentialsExpireAt;
    }

    /**
     * Sets the credentials expiration date
     *
     * @param \DateTime|null $date
     */
    public function setCredentialsExpireAt(\DateTime $date = null)
    {
        $this->credentialsExpireAt = $date;
    }

    /**
     * Returns a string representation
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getUsername() ?: '-';
    }

    /**
     * Sets the user groups
     *
     * @param array $groups
     */
    public function setGroups($groups)
    {
        foreach ($groups as $group) {
            $this->addGroup($group);
        }
    }

    /**
     * Sets the two-step verification code
     *
     * @param string $twoStepVerificationCode
     */
    public function setTwoStepVerificationCode($twoStepVerificationCode)
    {
        $this->twoStepVerificationCode = $twoStepVerificationCode;
    }

    /**
     * Returns the two-step verification code
     *
     * @return string
     */
    public function getTwoStepVerificationCode()
    {
        return $this->twoStepVerificationCode;
    }

    /**
     * @param string $biography
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;
    }

    /**
     * @return string
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * @param \DateTime $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param string $facebookData
     */
    public function setFacebookData($facebookData)
    {
        $this->facebookData = $facebookData;
    }

    /**
     * @return string
     */
    public function getFacebookData()
    {
        return $this->facebookData;
    }

    /**
     * @param string $facebookName
     */
    public function setFacebookName($facebookName)
    {
        $this->facebookName = $facebookName;
    }

    /**
     * @return string
     */
    public function getFacebookName()
    {
        return $this->facebookName;
    }

    /**
     * @param string $facebookUid
     */
    public function setFacebookUid($facebookUid)
    {
        $this->facebookUid = $facebookUid;
    }

    /**
     * @return string
     */
    public function getFacebookUid()
    {
        return $this->facebookUid;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gplusData
     */
    public function setGplusData($gplusData)
    {
        $this->gplusData = $gplusData;
    }

    /**
     * @return string
     */
    public function getGplusData()
    {
        return $this->gplusData;
    }

    /**
     * @param string $gplusName
     */
    public function setGplusName($gplusName)
    {
        $this->gplusName = $gplusName;
    }

    /**
     * @return string
     */
    public function getGplusName()
    {
        return $this->gplusName;
    }

    /**
     * @param string $gplusUid
     */
    public function setGplusUid($gplusUid)
    {
        $this->gplusUid = $gplusUid;
    }

    /**
     * @return string
     */
    public function getGplusUid()
    {
        return $this->gplusUid;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $timezone
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param string $twitterData
     */
    public function setTwitterData($twitterData)
    {
        $this->twitterData = $twitterData;
    }

    /**
     * @return string
     */
    public function getTwitterData()
    {
        return $this->twitterData;
    }

    /**
     * @param string $twitterName
     */
    public function setTwitterName($twitterName)
    {
        $this->twitterName = $twitterName;
    }

    /**
     * @return string
     */
    public function getTwitterName()
    {
        return $this->twitterName;
    }

    /**
     * @param string $twitterUid
     */
    public function setTwitterUid($twitterUid)
    {
        $this->twitterUid = $twitterUid;
    }

    /**
     * @return string
     */
    public function getTwitterUid()
    {
        return $this->twitterUid;
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getFullname()
    {
        return sprintf("%s %s", $this->getFirstname(), $this->getLastname());
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
