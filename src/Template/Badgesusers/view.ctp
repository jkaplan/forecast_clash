<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Badges User'), ['action' => 'edit', $badgesUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Badges User'), ['action' => 'delete', $badgesUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $badgesUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Badges Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Badges User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Badges'), ['controller' => 'Badges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Badge'), ['controller' => 'Badges', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="badgesUsers view large-9 medium-8 columns content">
    <h3><?= h($badgesUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $badgesUser->has('user') ? $this->Html->link($badgesUser->user->id, ['controller' => 'Users', 'action' => 'view', $badgesUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Badge') ?></th>
            <td><?= $badgesUser->has('badge') ? $this->Html->link($badgesUser->badge->id, ['controller' => 'Badges', 'action' => 'view', $badgesUser->badge->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($badgesUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Badge Count') ?></th>
            <td><?= $this->Number->format($badgesUser->badge_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Silver') ?></th>
            <td><?= $this->Number->format($badgesUser->silver) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gold') ?></th>
            <td><?= $this->Number->format($badgesUser->gold) ?></td>
        </tr>
    </table>
</div>
