<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Adminevents'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="adminevents form large-9 medium-8 columns content">
    <?= $this->Form->create($adminevent) ?>
    <fieldset>
        <legend><?= __('Add Adminevent') ?></legend>
        <?php
            echo $this->Form->input('start_date');
            echo $this->Form->input('end_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
