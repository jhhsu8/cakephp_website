<?php

class UsersComponent extends Component {
    
    public $components = array('Auth');
    
    public function getUsername() {
        
        if ($this->Auth->user()) {
                return $this->Auth->user('username');
            } else {
            
            return false;
        }
    }
}