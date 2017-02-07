<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Stats'), ['controller' => 'Stats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stat'), ['controller' => 'Stats', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('facebook_login');
            echo $this->Form->input('twitter_login');
            echo $this->Form->input('google_login');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('avatar');
            echo $this->Form->input('education');
            echo $this->Form->input('major');
            echo $this->Form->input('meteorologist');
            echo $this->Form->input('gender');
            echo $this->Form->input('city');
            echo $this->Form->input('state');
            echo $this->Form->input('date_created');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
