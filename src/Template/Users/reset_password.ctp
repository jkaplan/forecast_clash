<div class="auth">
    <div class="auth-container">
        <a href="#" class="logo"><?= $this->Html->image('logo-light-blue.png', ['alt' => 'Forecast Clash Logo']) ?></a>
        <div class="card">
            <div class="auth-content">
                <p class="text-xs-center">RESET PASSWORD</p>
                <?= $this->Form->create('users', ['id' => 'resetPasswordForm']); ?>
                <div class="form-group">
                    <?= $this->Form->input('new_password', [
                        'type' => 'password',
                        'label' => 'New password',
                        'class' => 'form-control underlined'
                    ]); ?>
                    <?= $this->Form->input('confirm_password', [
				        'type' => 'password',
                        'label' => 'Confirm new password',
                        'class' => 'form-control underlined'
                    ]); ?>
                    <?= $this->Form->input('token', [
				        'type' => 'hidden',
                        'value' => $token
                    ]); ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->button('Reset Password', [
                        'id' => 'resetPassword',
                        'class' => 'btn btn-block btn-primary login',
                        'type' => 'submit'
                    ]); ?>
                    <?= $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>