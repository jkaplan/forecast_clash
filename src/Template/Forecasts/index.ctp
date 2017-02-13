<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Forecast'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div>
    <?= $location ?>
</div>
<div class="forecasts index large-9 medium-8 columns content">
    <h3><?= __('Forecasts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weather_event_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('submit_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('forecast_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('am_pm') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($forecasts as $forecast): ?>
            <tr>
                <td><?= $this->Number->format($forecast->id) ?></td>
                <td><?= $forecast->has('user') ? $this->Html->link($forecast->user->id, ['controller' => 'Users', 'action' => 'view', $forecast->user->id]) : '' ?></td>
                <td><?= $this->Number->format($forecast->weather_event_id) ?></td>
                <td><?= h($forecast->submit_date) ?></td>
                <td><?= h($forecast->forecast_date) ?></td>
                <td><?= h($forecast->am_pm) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $forecast->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $forecast->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $forecast->id], ['confirm' => __('Are you sure you want to delete # {0}?', $forecast->id)]) ?>
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
