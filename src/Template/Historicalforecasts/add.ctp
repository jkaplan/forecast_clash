<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Historicalforecasts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Weather Events'), ['controller' => 'Weatherevents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Weather Event'), ['controller' => 'Weatherevents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="historicalforecasts form large-9 medium-8 columns content">
    <?= $this->Form->create($historicalforecast) ?>
    <fieldset>
        <legend><?= __('Add Historicalforecast') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('location');
            echo $this->Form->input('distance');
            echo $this->Form->input('weather_event_id', ['options' => $weatherEvents]);
            echo $this->Form->input('forecast_date');
            echo $this->Form->input('forecast_length');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
