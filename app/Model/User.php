<?

class User extends AppModel {
    
    public $hasOne = array('UserProfile' => array (
    'dependent' => true
    ));
        
    public function __construct($id = false, $table = null, $ds=null ){
        
        parent::__construct($id, $table, $ds);
    
    $this->validate = array (
    'username'=>array (
        'rule' => 'alphaNumeric',
        'allowEmpty' => false,
        'message' => __('wrong username format'),
    ),
        
        'password'=>array (
        'rule' => array('minLength', '6'),
        'allowEmpty' => false,
        'message' => __('password is too short'),
        
    
    ),
        
        'name'=>array (
        'rule' => 'alphaNumeric',
        'allowEmpty' => false,
        'message' => __('Please enter your name'),
            
            ),
        
        'country'=>array (
        'rule' => 'alphaNumeric',
        'allowEmpty' => false,
        'message' => __('Please enter your country'),
            
            ),
        
        );
    
}
    
 public function beforeSave($options = array())
     
 {
     if (isset($this->data[$this->alias]['password'])) {
         $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
     }
     return true;
 }
    
}