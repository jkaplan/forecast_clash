<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Badgesusers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Badges'), ['controller' => 'Badges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Badge'), ['controller' => 'Badges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="badgesusers form large-9 medium-8 columns content">
    <?= $this->Form->create($badgesuser) ?>
    <fieldset>
        <legend><?= __('Add Badgesuser') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('badge_id', ['options' => $badges]);
            echo $this->Form->input('badge_count');
            echo $this->Form->input('silver');
            echo $this->Form->input('gold');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
