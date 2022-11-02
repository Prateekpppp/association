<?php 
    Class Functions {
        // pufunction __construct 
        public function single_input($type,$id,$addclass='') {
            // echo 'tezst'; die();
            include('includes/single_input.php');
        }

        public function add_db() {
            include('backend/db.php');
        }
        public function ajax($ajax_url,$input)
        {
            include('backend/ajax.php');
        }
    }
?>