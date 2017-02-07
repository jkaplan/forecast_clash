
<?php
echo $this->Form->create();
echo $this->Form->input('email', [
    'label' => 'E-mail:'
]);
echo $this->Form->input('password', [
    'label' => 'Password:',
    'type' => 'password'
]);
echo $this->Form->submit('Login', [
    'class' => 'button'
]);
echo $this->Html->link('Register', ['controller' => 'users', 'action'=> 'register'], ['class' => 'button']);
echo $this->Form->end();
?>