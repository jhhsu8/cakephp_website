<?php

class UsersController extends AppController {

    
    public $paginate = array(
     'order' => array('User.id' => 'desc'),
        
        'limit' => 1
    );
    
    
    
    
    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('index', 'add', 'current_time', 'get_time_update');
    }
    
    
    public function index(){
        
        $this->set('page_title', 'Users');
        
        $users = $this->paginate();
        
        $this->set('users', $users);

    }
    
    public function view($id) {
        
        $this->set('page_title', 'User Information');
        //$users = $this->User->find('first', array('conditions' => array ('id'=>$id)));
        //$users = $this->User->findById($id);
        $user = $this->User->read(null,$id);
        $this->set('user', $user);
    }
    
    public function add() {
        
        $this->set('page_title', 'New User Registration');
        
        if ($this -> request ->isPost()) {
            
            if($this->User->saveAll($this->request->data)) {
                
                $this->Session->setFlash(__('New user has been saved'));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('Unable to add new user.'));
            }
            
        }
    }
    
    public function delete($id) {
        $user = $this->User->read(null, $id);
    if($user) {
        $this->User->delete($id);
        $this->Session->setFlash(__('User has been deleted'));
    }
    else {
        
        $this->Session->setFlash(__('User has not been deleted'));
    }
    
     $this->redirect(array('action'=>'index'));
    }
    
    public function login() {
        $this->set('page_title', 'Login');
        
        if ($this->request->is('post')) {
            if($this->Auth->login()) {
                $this->Session->setFlash(__('You are logged in!'));
                $this->redirect('/');
            } else {
                $this->Session->setFlash(__('Wrong username/password'));
            }
        }
    }
    
    
    public function logout() {
        $this->Auth->logout();
        $this->redirect(array('action'=>'index'));
    }
    
    
    public function current_time() {
        $this->set('page_title', 'Local time');
    }
    
    public function get_time_update() {
        
        $this->layout = 'ajax';
        if($this->request->isAjax()) {
            die(date('m/d/Y h:i:s'));
            
        } else {
            die ("AJAX REQUESTS ONLY");
        }
    }
}