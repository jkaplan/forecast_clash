<div class="auth">
    <div class="auth-container">
        <a href="#" class="logo"><?= $this->Html->image('logo-light-blue.png', ['alt' => 'Forecast Clash Logo']) ?></a>
        <div class="card">
            <div class="auth-content">
                <p class="text-xs-center">FORGOT PASSWORD?</p>
                <?= $this->Form->create('users', ['id' => 'forgotPasswordForm']); ?>
                    <div class="form-group">
                        <?= $this->Form->input('email', [
                                'label' => 'Please enter the Email associated with your account',
                                'class' => 'form-control underlined'
                            ]); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->button('Send Email', [
                        'id' => 'forgotPassword',
                        'class' => 'btn btn-block btn-primary login',
                        'type' => 'submit'
                    ]); ?>
                        <?= $this->Form->end(); ?>
                    </div>
                    <div class="form-group">
                        <p class="text-muted text-xs-center">Do not have an account? <a href="register">Sign Up!</a></p>
                    </div>
            </div>
        </div>
        <div class="text-xs-center">
            <a href="/forecast_clash/pages/home" class="btn btn-secondary rounded btn-sm"> <i class="fa fa-arrow-left"></i> Back to dashboard </a>
        </div>
    </div>
</div>