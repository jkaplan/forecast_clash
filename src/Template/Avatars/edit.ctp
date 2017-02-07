<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $avatar->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $avatar->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Avatars'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avatars form large-9 medium-8 columns content">
    <?= $this->Form->create($avatar) ?>
    <fieldset>
        <legend><?= __('Edit Avatar') ?></legend>
        <?php
            echo $this->Form->input('avatar_img');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
