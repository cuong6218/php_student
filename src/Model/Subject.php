<?php

namespace Study\Model;

class Subject
{
    private $id;
    private $subject_name;
    private $description;
    function __construct($subject_name, $description)
    {
        $this->subject_name = $subject_name;
        $this->description = $description;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of subject_name
     */
    public function getSubjectName()
    {
        return $this->subject_name;
    }

    /**
     * Set the value of subject_name
     *
     * @return  self
     */
    public function setSubjectName($subject_name)
    {
        $this->subject_name = $subject_name;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
