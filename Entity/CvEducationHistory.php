<?php

namespace Skonsoft\Bundle\CvEditorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skonsoft\Bundle\CvEditorBundle\Entity\CvEducationHistory
 *
 * @ORM\Table(name="cv_education_history")
 * @ORM\Entity
 */
class CvEducationHistory
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
     * @var string $degreeDirection
     *
     * @ORM\Column(name="degree_direction", type="string", length=255, nullable=true)
     */
    private $degreeDirection;

    /**
     * @var string $educationType
     *
     * @ORM\Column(name="education_type", type="string", length=255, nullable=true)
     */
    private $educationType;

    /**
     * @var string $startDate
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var string $endDate
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var string $instituteNameAndPlace
     *
     * @ORM\Column(name="institute_name_and_place", type="string", length=255, nullable=true)
     */
    private $instituteNameAndPlace;

    /**
     * @var string $diploma
     *
     * @ORM\Column(name="diploma", type="string", length=255, nullable=true)
     */
    private $diploma;

    /**
     * @var string $diplomaDate
     *
     * @ORM\Column(name="diploma_date", type="string", length=255, nullable=true)
     */
    private $diplomaDate;

    /**
     * @var string $subject
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=true)
     */
    private $subject;

    /**
     * @var boolean $isHighest
     *
     * @ORM\Column(name="is_highest", type="boolean", nullable=true)
     */
    private $isHighest;

    /**
     * @var CvProfile
     *
     * @ORM\ManyToOne(targetEntity="CvProfile", inversedBy="cvEducationHistories" )
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cv_profile_id", referencedColumnName="id")
     * })
     */
    private $cvProfile;

    public function __toString()
    {
        return $this->degreeDirection;
        
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
     * Set degreeDirection
     *
     * @param string $degreeDirection
     * @return CvEducationHistory
     */
    public function setDegreeDirection($degreeDirection)
    {
        $this->degreeDirection = $degreeDirection;

        return $this;
    }

    /**
     * Get degreeDirection
     *
     * @return string 
     */
    public function getDegreeDirection()
    {
        return $this->degreeDirection;
    }

    /**
     * Set educationType
     *
     * @param string $educationType
     * @return CvEducationHistory
     */
    public function setEducationType($educationType)
    {
        $this->educationType = $educationType;

        return $this;
    }

    /**
     * Get educationType
     *
     * @return string 
     */
    public function getEducationType()
    {
        return $this->educationType;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return CvEducationHistory
     */
    public function setStartDate($startDate)
    {
        if (!$startDate instanceof \DateTime) {
            $dateString = date('Ymd', strtotime($startDate));
            $startDate = new \DateTime($dateString);
        }
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return CvEducationHistory
     */
    public function setEndDate($endDate)
    {
        if (!$endDate instanceof \DateTime) {
            $dateString = date('Ymd', strtotime($endDate));
            $endDate = new \DateTime($endDate);
        }
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set instituteNameAndPlace
     *
     * @param string $instituteNameAndPlace
     * @return CvEducationHistory
     */
    public function setInstituteNameAndPlace($instituteNameAndPlace)
    {
        $this->instituteNameAndPlace = $instituteNameAndPlace;

        return $this;
    }

    /**
     * Get instituteNameAndPlace
     *
     * @return string 
     */
    public function getInstituteNameAndPlace()
    {
        return $this->instituteNameAndPlace;
    }

    /**
     * Set diploma
     *
     * @param string $diploma
     * @return CvEducationHistory
     */
    public function setDiploma($diploma)
    {
        $this->diploma = $diploma;

        return $this;
    }

    /**
     * Get diploma
     *
     * @return string 
     */
    public function getDiploma()
    {
        return $this->diploma;
    }

    /**
     * Set diplomaDate
     *
     * @param string $diplomaDate
     * @return CvEducationHistory
     */
    public function setDiplomaDate($diplomaDate)
    {
        $this->diplomaDate = $diplomaDate;

        return $this;
    }

    /**
     * Get diplomaDate
     *
     * @return string 
     */
    public function getDiplomaDate()
    {
        return $this->diplomaDate;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return CvEducationHistory
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set isHighest
     *
     * @param boolean $isHighest
     * @return CvEducationHistory
     */
    public function setIsHighest($isHighest)
    {
        $this->isHighest = $isHighest;

        return $this;
    }

    /**
     * Get isHighest
     *
     * @return boolean 
     */
    public function getIsHighest()
    {
        return $this->isHighest;
    }

    /**
     * Set cvProfile
     *
     * @param Skonsoft\Bundle\CvEditorBundle\Entity\CvProfile $cvProfile
     * @return CvEducationHistory
     */
    public function setCvProfile(\Skonsoft\Bundle\CvEditorBundle\Entity\CvProfile $cvProfile = null)
    {
        $this->cvProfile = $cvProfile;

        return $this;
    }

    /**
     * Get cvProfile
     *
     * @return Skonsoft\Bundle\CvEditorBundle\Entity\CvProfile 
     */
    public function getCvProfile()
    {
        return $this->cvProfile;
    }

}