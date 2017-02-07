<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Badges User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Badges'), ['controller' => 'Badges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Badge'), ['controller' => 'Badges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="badgesUsers index large-9 medium-8 columns content">
    <h3><?= __('Badges Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('badge_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('badge_count') ?></th>
                <th scope="col"><?= $this->Paginator->sort('silver') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gold') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($badgesUsers as $badgesUser): ?>
            <tr>
                <td><?= $this->Number->format($badgesUser->id) ?></td>
                <td><?= $badgesUser->has('user') ? $this->Html->link($badgesUser->user->id, ['controller' => 'Users', 'action' => 'view', $badgesUser->user->id]) : '' ?></td>
                <td><?= $badgesUser->has('badge') ? $this->Html->link($badgesUser->badge->id, ['controller' => 'Badges', 'action' => 'view', $badgesUser->badge->id]) : '' ?></td>
                <td><?= $this->Number->format($badgesUser->badge_count) ?></td>
                <td><?= $this->Number->format($badgesUser->silver) ?></td>
                <td><?= $this->Number->format($badgesUser->gold) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $badgesUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $badgesUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $badgesUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $badgesUser->id)]) ?>
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
