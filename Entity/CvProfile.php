<?php

namespace Skonsoft\Bundle\CvEditorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Skonsoft\Bundle\CvEditorBundle\Entity\CvProfile
 *
 * @ORM\Table(name="cv_profile")
 * @ORM\Entity
 */
class CvProfile
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $language
     *
     * @ORM\Column(name="language", type="string", length=45, nullable=true)
     */
    private $language;

    /**
     * @var string $salary
     *
     * @ORM\Column(name="salary", type="string", length=45, nullable=true)
     */
    private $salary;

    /**
     * @var integer $totalExperienceYears
     *
     * @ORM\Column(name="total_experience_years", type="integer", nullable=true)
     */
    private $totalExperienceYears;

    /**
     * @var CvClient
     *
     * @ORM\ManyToOne(targetEntity="CvClient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cv_client_id", referencedColumnName="id")
     * })
     */
    private $cvClient;

    /**
     * @var CvUploadedDocument
     *
     * @ORM\ManyToOne(targetEntity="CvUploadedDocument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cv_uploaded_document_id", referencedColumnName="id")
     * })
     */
    private $cvUploadedDocument;

    /**
     * @var CvDocument
     *
     * @ORM\ManyToOne(targetEntity="CvDocument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cv_document_id", referencedColumnName="id")
     * })
     */
    private $cvDocument;

    /**
     * @var CvPersonal
     *
     * @ORM\OneToOne(targetEntity="CvPersonal", cascade={"persist", "remove"} )
     * @@ORM\JoinColumn(name="cv_personal_id", referencedColumnName="id")
     */
    private $cvPersonal;
    
    /**
     *
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="CvEducationHistory", mappedBy="cvProfile", cascade={"persist", "remove"} )
     */
    private $cvEducationHistories;

    public function __construct()
    {
        $this->cvEducationHistories = new ArrayCollection();
    }
    
    public function __toString() {
        return $this->getCvPersonal()->__toString();
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
     * Set language
     *
     * @param string $language
     * @return CvProfile
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set salary
     *
     * @param string $salary
     * @return CvProfile
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    
        return $this;
    }

    /**
     * Get salary
     *
     * @return string 
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set totalExperienceYears
     *
     * @param integer $totalExperienceYears
     * @return CvProfile
     */
    public function setTotalExperienceYears($totalExperienceYears)
    {
        $this->totalExperienceYears = $totalExperienceYears;
    
        return $this;
    }

    /**
     * Get totalExperienceYears
     *
     * @return integer 
     */
    public function getTotalExperienceYears()
    {
        return $this->totalExperienceYears;
    }

    /**
     * Set cvClient
     *
     * @param Skonsoft\Bundle\CvEditorBundle\Entity\CvClient $cvClient
     * @return CvProfile
     */
    public function setCvClient(\Skonsoft\Bundle\CvEditorBundle\Entity\CvClient $cvClient = null)
    {
        $this->cvClient = $cvClient;
    
        return $this;
    }

    /**
     * Get cvClient
     *
     * @return Skonsoft\Bundle\CvEditorBundle\Entity\CvClient 
     */
    public function getCvClient()
    {
        return $this->cvClient;
    }

    /**
     * Set cvUploadedDocument
     *
     * @param Skonsoft\Bundle\CvEditorBundle\Entity\CvUploadedDocument $cvUploadedDocument
     * @return CvProfile
     */
    public function setCvUploadedDocument(\Skonsoft\Bundle\CvEditorBundle\Entity\CvUploadedDocument $cvUploadedDocument = null)
    {
        $this->cvUploadedDocument = $cvUploadedDocument;
    
        return $this;
    }

    /**
     * Get cvUploadedDocument
     *
     * @return Skonsoft\Bundle\CvEditorBundle\Entity\CvUploadedDocument 
     */
    public function getCvUploadedDocument()
    {
        return $this->cvUploadedDocument;
    }

    /**
     * Set cvDocument
     *
     * @param Skonsoft\Bundle\CvEditorBundle\Entity\CvDocument $cvDocument
     * @return CvProfile
     */
    public function setCvDocument(\Skonsoft\Bundle\CvEditorBundle\Entity\CvDocument $cvDocument = null)
    {
        $this->cvDocument = $cvDocument;
    
        return $this;
    }

    /**
     * Get cvDocument
     *
     * @return Skonsoft\Bundle\CvEditorBundle\Entity\CvDocument 
     */
    public function getCvDocument()
    {
        return $this->cvDocument;
    }

    /**
     * Set cvPersonal
     *
     * @param Skonsoft\Bundle\CvEditorBundle\Entity\CvPersonal $cvPersonal
     * @return CvProfile
     */
    public function setCvPersonal(\Skonsoft\Bundle\CvEditorBundle\Entity\CvPersonal $cvPersonal = null)
    {
        $this->cvPersonal = $cvPersonal;
    
        return $this;
    }

    /**
     * Get cvPersonal
     *
     * @return Skonsoft\Bundle\CvEditorBundle\Entity\CvPersonal 
     */
    public function getCvPersonal()
    {
        return $this->cvPersonal;
    }

    /**
     * Add cvEducationHistories
     *
     * @param Skonsoft\Bundle\CvEditorBundle\Entity\CvEducationHistory $cvEducationHistories
     * @return CvProfile
     */
    public function addCvEducationHistorie(\Skonsoft\Bundle\CvEditorBundle\Entity\CvEducationHistory $cvEducationHistories)
    {
        $cvEducationHistories->setCvProfile($this);
        $this->cvEducationHistories[] = $cvEducationHistories;
    
        return $this;
    }

    /**
     * Remove cvEducationHistories
     *
     * @param Skonsoft\Bundle\CvEditorBundle\Entity\CvEducationHistory $cvEducationHistories
     */
    public function removeCvEducationHistorie(\Skonsoft\Bundle\CvEditorBundle\Entity\CvEducationHistory $cvEducationHistories)
    {
        $this->cvEducationHistories->removeElement($cvEducationHistories);
    }

    /**
     * Get cvEducationHistories
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCvEducationHistories()
    {
        return $this->cvEducationHistories;
    }
    
    /**
     * set cvEducationHistories
     *
     * @return CvProfile 
     */
    public function setCvEducationHistories($cvEducationHistories)
    {
        $this->cvEducationHistories = new ArrayCollection();
        foreach ($cvEducationHistories as $cvEducationHistory) {
            $this->addCvEducationHistorie($cvEducationHistory);
        }
        return $this;
    }
}