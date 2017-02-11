<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Badgesuser'), ['action' => 'edit', $badgesuser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Badgesuser'), ['action' => 'delete', $badgesuser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $badgesuser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Badgesusers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Badgesuser'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Badges'), ['controller' => 'Badges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Badge'), ['controller' => 'Badges', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="badgesusers view large-9 medium-8 columns content">
    <h3><?= h($badgesuser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $badgesuser->has('user') ? $this->Html->link($badgesuser->user->id, ['controller' => 'Users', 'action' => 'view', $badgesuser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Badge') ?></th>
            <td><?= $badgesuser->has('badge') ? $this->Html->link($badgesuser->badge->id, ['controller' => 'Badges', 'action' => 'view', $badgesuser->badge->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($badgesuser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Badge Count') ?></th>
            <td><?= $this->Number->format($badgesuser->badge_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Silver') ?></th>
            <td><?= $this->Number->format($badgesuser->silver) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gold') ?></th>
            <td><?= $this->Number->format($badgesuser->gold) ?></td>
        </tr>
    </table>
</div>
