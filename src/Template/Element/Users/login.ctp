<div class="modal fade in" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
            <div class="modal-body">
                <?= $this->Form->create('users', ['id' => 'loginForm']); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="textfield textfield--floatingLabel">
                            <?= $this->Form->input('email', [
                            ['label' => 'Email', 'class' => 'textfield__label'],
                                'class' => 'textfield__input'
                            ]); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="textfield textfield--floatingLabel">
                            <?= $this->Form->input('password', [
                                ['label' => 'Password', 'class' => 'textfield__label'],
                                'type' => 'password',
                                'class' => 'textfield__input'
                            ]); ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <?= $this->Form->button('Login', [
                        'type' => 'submit',
                        'id' => 'login',
                        'class' => 'btn btn-outline submit'
                    ]); ?>
                </div>
                <?= $this->Form->end(); ?> 
                <div class="social-container">
                    <span>or login with</span>
                    <?= $this->Html->link($this->Html->tag('span', '', [
                        'class' => 'facebook social-icon'
                    ]), [
                        'controller' => 'Users',
                        'action' => 'login',
                        '?' => ['provider' => 'Facebook']
                    ], [
                        'escape' => false
                    ]); ?>
                    <?= $this->Html->link($this->Html->tag('span', '', [
                        'class' => 'twitter social-icon'
                    ]), [
                        'controller' => 'Users',
                        'action' => 'login',
                        '?' => ['provider' => 'Twitter']
                    ], [
                        'escape' => false
                    ]); ?>
                    <?= $this->Html->link($this->Html->tag('span', '', [
                        'class' => 'google-plus social-icon'
                    ]), [
                        'controller' => 'Users',
                        'action' => 'login',
                        '?' => ['provider' => 'Google']
                    ], [
                        'escape' => false
                    ]); ?>
                </div>
                <div class="clearB"></div>
                <a href="forgot_password.html">Forgot Password?</a>
            </div>                  
        </div>
    </div>
</div>


