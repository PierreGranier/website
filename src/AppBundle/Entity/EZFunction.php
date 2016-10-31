<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="EZFunction")
 * @ORM\HasLifecycleCallbacks()
 */
class EZFunction
{

    public function __construct()
    {
    }

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="Name", type="string")
     */
    private $name;

    /**
     * @ORM\Column(name="French_description", type="text")
     */
    private $french_description;

    /**
     * @ORM\Column(name="English_description", type="text")
     */
    private $english_description;

    /**
     * @ORM\Column(name="French_html", type="text")
     */
    private $french_html;

    /**
     * @ORM\Column(name="English_html", type="text")
     */
    private $english_html;
    
    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="EZFunctions")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\Column(name="updatedAt", type="datetime")
     * 
     */
    private $updatedAt;

    /**
    * @ORM\PrePersist
    */
    public function prePersistEvent()
    {
        $this->updatedAt = new \DateTime();
    }

    /**
    * @ORM\PreUpdate
    */
    public function preUpdateEvent()
    {
        $this->updatedAt = new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return EZFunction
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return EZFunction
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return EZFunction
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return EZFunction
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set frenchHtml
     *
     * @param string $frenchHtml
     *
     * @return EZFunction
     */
    public function setFrenchHtml($frenchHtml)
    {
        $this->french_html = $frenchHtml;

        return $this;
    }

    /**
     * Get frenchHtml
     *
     * @return string
     */
    public function getFrenchHtml()
    {
        return $this->french_html;
    }

    /**
     * Set englishHtml
     *
     * @param string $englishHtml
     *
     * @return EZFunction
     */
    public function setEnglishHtml($englishHtml)
    {
        $this->english_html = $englishHtml;

        return $this;
    }

    /**
     * Get englishHtml
     *
     * @return string
     */
    public function getEnglishHtml()
    {
        return $this->english_html;
    }

    /**
     * Set frenchDescription
     *
     * @param string $frenchDescription
     *
     * @return EZFunction
     */
    public function setFrenchDescription($frenchDescription)
    {
        $this->french_description = $frenchDescription;

        return $this;
    }

    /**
     * Get frenchDescription
     *
     * @return string
     */
    public function getFrenchDescription()
    {
        return $this->french_description;
    }

    /**
     * Set englishDescription
     *
     * @param string $englishDescription
     *
     * @return EZFunction
     */
    public function setEnglishDescription($englishDescription)
    {
        $this->english_description = $englishDescription;

        return $this;
    }

    /**
     * Get englishDescription
     *
     * @return string
     */
    public function getEnglishDescription()
    {
        return $this->english_description;
    }
}
