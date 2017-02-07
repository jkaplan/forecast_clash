<div class="auth">
    <div class="auth-container">
        <a href="#" class="logo"><img src="../webroot/img/logo-light-blue.png" alt=""> </a>
        <div class="card">
            <div class="auth-content">
                <p class="text-xs-center">LOGIN TO CONTINUE</p>
                <?= $this->Form->create('users', ['id' => 'loginForm']); ?>
                    <div class="form-group">
                        <?= $this->Form->input('email', [
                                'label' => 'Email',
                                'class' => 'form-control underlined'
                            ]); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->input('password', [
                                    'label' => 'Password',
                                    'type' => 'password',
                                    'class' => 'form-control underlined'
                                ]); ?>
                    </div>
                    <div class="form-group">
                        <label for="remember">
                            <input class="checkbox" id="remember" type="checkbox">
                            <span>Remember me</span>
                        </label> <a href="forgot_password" class="forgot-btn pull-right">Forgot password?</a> </div>
                    <div class="form-group">
                        <?= $this->Form->button('Login', [
                        'id' => 'login',
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
            <a href="http://localhost/forecast_clash/pages/home" class="btn btn-secondary rounded btn-sm"> <i class="fa fa-arrow-left"></i> Back to dashboard </a>
        </div>
    </div>
</div>
