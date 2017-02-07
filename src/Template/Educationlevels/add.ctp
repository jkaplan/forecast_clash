<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Educationlevels'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="educationlevels form large-9 medium-8 columns content">
    <?= $this->Form->create($educationlevel) ?>
    <fieldset>
        <legend><?= __('Add Educationlevel') ?></legend>
        <?php
            echo $this->Form->input('education');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
