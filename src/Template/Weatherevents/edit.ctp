<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $weatherevent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $weatherevent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Weatherevents'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="weatherevents form large-9 medium-8 columns content">
    <?= $this->Form->create($weatherevent) ?>
    <fieldset>
        <legend><?= __('Edit Weatherevent') ?></legend>
        <?php
            echo $this->Form->input('weather');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
