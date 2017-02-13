<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Adminevent'), ['action' => 'edit', $adminevent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Adminevent'), ['action' => 'delete', $adminevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminevent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Adminevents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adminevent'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adminevents view large-9 medium-8 columns content">
    <h3><?= h($adminevent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adminevent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($adminevent->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Date') ?></th>
            <td><?= h($adminevent->end_date) ?></td>
        </tr>
    </table>
</div>
