<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Weatherevent'), ['action' => 'edit', $weatherevent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Weatherevent'), ['action' => 'delete', $weatherevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weatherevent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Weatherevents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Weatherevent'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="weatherevents view large-9 medium-8 columns content">
    <h3><?= h($weatherevent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Weather') ?></th>
            <td><?= h($weatherevent->weather) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($weatherevent->id) ?></td>
        </tr>
    </table>
</div>
