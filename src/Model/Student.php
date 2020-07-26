<?php
    namespace Study\Model;
    class Student{
        private $id;
        private $student_name;
        private $age;
        private $gender;
        private $address;
        private $email;
        private $image;
        private $grade_id;
        function __construct($student_name, $age, $gender, $address, $email, $image, $grade_id)
        {
            $this->student_name = $student_name;
            $this->age = $age;
            $this->gender = $gender;
            $this->address = $address;
            $this->email = $email;
            $this->image = $image;
            $this->grade_id = $grade_id;
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
         * Get the value of student_name
         */ 
        public function getStudentName()
        {
                return $this->student_name;
        }

        /**
         * Set the value of student_name
         *
         * @return  self
         */ 
        public function setStudentName($student_name)
        {
                $this->student_name = $student_name;

                return $this;
        }

        /**
         * Get the value of age
         */ 
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Set the value of age
         *
         * @return  self
         */ 
        public function setAge($age)
        {
                $this->age = $age;

                return $this;
        }

        /**
         * Get the value of gender
         */ 
        public function getGender()
        {
                return $this->gender;
        }

        /**
         * Set the value of gender
         *
         * @return  self
         */ 
        public function setGender($gender)
        {
                $this->gender = $gender;

                return $this;
        }

        /**
         * Get the value of address
         */ 
        public function getAddress()
        {
                return $this->address;
        }

        /**
         * Set the value of address
         *
         * @return  self
         */ 
        public function setAddress($address)
        {
                $this->address = $address;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of image
         */ 
        public function getImage()
        {
                return $this->image;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImage($image)
        {
                $this->image = $image;

                return $this;
        }

        /**
         * Get the value of grade_id
         */ 
        public function getGradeId()
        {
                return $this->grade_id;
        }

        /**
         * Set the value of grade_id
         *
         * @return  self
         */ 
        public function setGradeId($grade_id)
        {
                $this->grade_id = $grade_id;

                return $this;
        }
    }