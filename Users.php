<?php

    class User
    {
        private $emailAdd;

        public function __construct($emailAdd)
        {
            $this->emailAdd=$emailAdd;
        }

        public function getEmail()
        {
            return $this->emailAdd;
        }
    }
   


?>