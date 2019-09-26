<?php

echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('name');
echo $this->Form->input('UserProfile.country');
echo $this->Form->end('Register');

?>