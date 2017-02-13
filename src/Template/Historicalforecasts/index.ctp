<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Historicalforecast'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Weather Events'), ['controller' => 'Weatherevents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Weather Event'), ['controller' => 'Weatherevents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="historicalforecasts index large-9 medium-8 columns content">
    <h3><?= __('Historicalforecasts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('distance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weather_event_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('forecast_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('forecast_length') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($historicalforecasts as $historicalforecast): ?>
            <tr>
                <td><?= $this->Number->format($historicalforecast->id) ?></td>
                <td><?= $historicalforecast->has('user') ? $this->Html->link($historicalforecast->user->id, ['controller' => 'Users', 'action' => 'view', $historicalforecast->user->id]) : '' ?></td>
                <td><?= h($historicalforecast->location) ?></td>
                <td><?= $this->Number->format($historicalforecast->distance) ?></td>
                <td><?= $historicalforecast->has('weather_event') ? $this->Html->link($historicalforecast->weather_event->id, ['controller' => 'Weatherevents', 'action' => 'view', $historicalforecast->weather_event->id]) : '' ?></td>
                <td><?= h($historicalforecast->forecast_date) ?></td>
                <td><?= $this->Number->format($historicalforecast->forecast_length) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $historicalforecast->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $historicalforecast->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $historicalforecast->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historicalforecast->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
