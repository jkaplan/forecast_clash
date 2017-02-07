<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Social Profiles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="socialProfiles form large-9 medium-8 columns content">
    <?= $this->Form->create($socialProfile) ?>
    <fieldset>
        <legend><?= __('Add Social Profile') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('provider');
            echo $this->Form->input('identifier');
            echo $this->Form->input('profile_url');
            echo $this->Form->input('website_url');
            echo $this->Form->input('photo_url');
            echo $this->Form->input('display_name');
            echo $this->Form->input('description');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('gender');
            echo $this->Form->input('language');
            echo $this->Form->input('age');
            echo $this->Form->input('birth_day');
            echo $this->Form->input('birth_month');
            echo $this->Form->input('birth_year');
            echo $this->Form->input('email');
            echo $this->Form->input('email_verified');
            echo $this->Form->input('phone');
            echo $this->Form->input('address');
            echo $this->Form->input('country');
            echo $this->Form->input('region');
            echo $this->Form->input('city');
            echo $this->Form->input('zip');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
