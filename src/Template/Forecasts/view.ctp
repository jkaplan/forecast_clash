<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Forecast'), ['action' => 'edit', $forecast->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Forecast'), ['action' => 'delete', $forecast->id], ['confirm' => __('Are you sure you want to delete # {0}?', $forecast->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Forecasts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Forecast'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="forecasts view large-9 medium-8 columns content">
    <h3><?= h($forecast->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $forecast->has('user') ? $this->Html->link($forecast->user->id, ['controller' => 'Users', 'action' => 'view', $forecast->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($forecast->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weather Event Id') ?></th>
            <td><?= $this->Number->format($forecast->weather_event_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Submit Date') ?></th>
            <td><?= h($forecast->submit_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Forecast Date') ?></th>
            <td><?= h($forecast->forecast_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Am Pm') ?></th>
            <td><?= $forecast->am_pm ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Location') ?></h4>
        <?= $this->Text->autoParagraph(h($forecast->location)); ?>
    </div>
</div>
