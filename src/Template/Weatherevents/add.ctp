<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Weatherevents'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="weatherevents form large-9 medium-8 columns content">
    <?= $this->Form->create($weatherevent) ?>
    <fieldset>
        <legend><?= __('Add Weatherevent') ?></legend>
        <?php
            echo $this->Form->input('weather');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
