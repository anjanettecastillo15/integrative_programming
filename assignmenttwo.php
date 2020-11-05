<?php
    class User{
        public $Name;
        public $Username;
        public $Email;

        public function AddFriend($Name, $Username, $Email){
            $this->name = $Name;
            echo "{$this->name} Added a friend";
        }
        public function PostaStatus($Name, $Username, $Email){
            $this->name = $Name;
            echo "<br>";
            echo "{$this->name} Posted a Status";
        }
    }

    $myname = new User();
    $myname->AddFriend('Anjanette', 'aaanjcastle', 'anjanettecastillo15@gamil.com');
    $myname->PostaStatus('Anjanette', 'aaanjcastle', 'anjanettecastillo15@gamil.com'); 
?>
