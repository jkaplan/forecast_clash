<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $age->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $age->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ages form large-9 medium-8 columns content">
    <?= $this->Form->create($age) ?>
    <fieldset>
        <legend><?= __('Edit Age') ?></legend>
        <?php
            echo $this->Form->input('age_range');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
