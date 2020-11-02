<?php
    class User{
        public $Name;
        public $Username;
        public $Email;

        public function AddFriend($Name){
            $this->name = $Name;
            echo "{$this->name} Added a friend";
        }
        public function PostaStatus($Name){
            $this->name = $Name;
            echo "<br>";
            echo "{$this->name} Posted a Status";
        }
    }

    $myname = new User();
    $myname->AddFriend('Anjanette');
    $myname->PostaStatus('Anjanette'); 
?>