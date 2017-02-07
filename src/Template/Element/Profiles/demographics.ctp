<div class="modal fade" id="demographics-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tell us more about yourself!</h4>
            </div>
        <div class="modal-body">
            <?= $this->Form->create('profile', ['id' => 'profileForm']); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="textfield textfield--floatingLabel">
                            <?= $this->Form->input('city', [
                                ['label' => 'City', 'class' => 'textfield__label'],
                                'class' => 'textfield__input'
                            ]); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textfield textfield--floatingLabel">
                            <?= $this->Form->select('state_id', $state,
                                ['empty' => 'Choose State:']
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="textfield textfield--floatingLabel">
                            <?= $this->Form->select('education_level_id', $edu,
                                ['empty' => 'Level of Education:']
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <fieldset>
                            <?= $this->Form->label('gender', 'Gender'); ?>
                            <?= $this->Form->radio('gender', [
                                ['value' => 1, 'text' => 'Male', 'name' => 'gender', 'id' => 'male'],
                                ['value' => 0, 'text' => 'Female', 'name' => 'gender', 'id' => 'female']
                            ]); ?>
                        </fieldset>
                        <?= $this->Form->select('age_id', $age,
                            ['empty' => 'Age Range:']
                        ); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <?= $this->Form->button('Submit', [
                        'id' => 'profile',
                        'class' => 'btn btn-outline login',
                        'type' => 'submit'
                    ]); ?>
                    <?= $this->Form->end(); ?>
                </div>
                <div class="clearB"></div>
            </div>
        </div>
    </div>
</div>