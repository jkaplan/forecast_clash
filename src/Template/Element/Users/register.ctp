<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Register</h4>
            </div>
        <div class="modal-body">
            <?= $this->Form->create('users', ['id' => 'registerForm']); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="textfield textfield--floatingLabel">
                            <?= $this->Form->input('first_name', [
                                ['label' => 'First Name', 'class' => 'textfield__label'],
                                'class' => 'textfield__input'
                            ]); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textfield textfield--floatingLabel">
                            <?= $this->Form->input('last_name', [
                                ['label' => 'Last Name', 'class' => 'textfield__label'],
                                'class' => 'textfield__input'
                            ]); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <fieldset>
                            <?= $this->Form->label('meteorologist', 'What is your experience?'); ?>
                            <?= $this->Form->radio('meteorologist', [
                                ['value' => 1, 'text' => 'Meteorologist', 'name' => 'Experience', 'id' => 'meteorologist'],
                                ['value' => 0, 'text' => 'Weather Enthusiast', 'name' => 'Experience', 'id' => 'weather_enthusiast']
                            ]); ?>
                        </fieldset>
                    </div>
                </div>
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
                            <i class="fa fa-question-circle-o" data-toggle="tooltip" data-placement="top" title="Password instructions will go here." aria-hidden="true">Password must may be between 8-50 characters, contain at least one uppercase, one lowercase, and one number, and may include these characters: !@#$%</i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="textfield textfield--floatingLabel">
                            <?= $this->Form->input('confirm_password', [
                                ['label' => 'Confirm Password', 'class' => 'textfield__label'],
                                'type' => 'password',
                                'class' => 'textfield__input'
                            ]); ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <?= $this->Form->button('Register', [
                        'id' => 'register',
                        'class' => 'btn btn-outline submit',
                        'type' => 'submit'
                    ]); ?>
                    <?= $this->Form->end(); ?>
                </div>
                <div class="social-container">
                    <span>or register with</span>
                    <a href="#"><span class="facebook social-icon"></span></a>
                    <a href="#"><span class="twitter social-icon"></span></a>
                    <a href="#"><span class="google-plus social-icon"></span></a>
                </div>
                <div class="clearB"></div>
            </div>
        </div>
    </div>
</div>