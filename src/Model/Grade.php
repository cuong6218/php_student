<?php

namespace Study\Model;

class Grade
{
    private $id;
    private $grade_name;
    private $status;
    function __construct($grade_name, $status)
    {
        $this->grade_name = $grade_name;
        $this->status = $status;
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
     * Get the value of grade_name
     */
    public function getGradeName()
    {
        return $this->grade_name;
    }

    /**
     * Set the value of grade_name
     *
     * @return  self
     */
    public function setGradeName($grade_name)
    {
        $this->grade_name = $grade_name;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
