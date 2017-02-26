<div class="auth">
    <div class="auth-container">
        <a href="#" class="logo"><img src="../webroot/img/logo-light-blue.png" alt=""> </a>
        <div class="card">
            <div class="auth-content">
                <h4>Tell us more about yourself!</h4>
                <?= $this->Form->create('profile', ['id' => 'profileForm']); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <?= $this->Form->input('city', [
                                ['label' => 'City', 'class' => 'textfield__label'],
                                'class' => 'form-control underlined'
                            ]); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="state">State</label>
                            <?= $this->Form->select('state_id', $states,
                                ['empty' => 'Select State']
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="education">Education</label>
                            <?= $this->Form->select('education_level_id', $educationLevels,
                                ['empty' => 'Select Level of Education']
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                                <?= $this->Form->label('gender', 'Gender'); ?>
                                <?= $this->Form->radio('gender', [
                                    ['value' => 1, 'text' => 'Male', 'name' => 'gender', 'id' => 'male'],
                                    ['value' => 0, 'text' => 'Female', 'name' => 'gender', 'id' => 'female']
                                ]); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="">Age</label>
                            <?= $this->Form->select('age_id', $ages,
                                ['empty' => 'Select Age Range']
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <?= $this->Form->button('Submit', [
                        'id' => 'profile',
                        'class' => 'btn btn-block btn-primary login',
                        'type' => 'submit'
                    ]); ?>
                    <?= $this->Form->end(); ?>
                </div>
            </div>
        </div>
        <div class="text-xs-center">
            <a href="/forecast_clash/pages/home" class="btn btn-secondary rounded btn-sm"> <i class="fa fa-arrow-left"></i> Back to dashboard </a>
        </div>
    </div>
</div>
