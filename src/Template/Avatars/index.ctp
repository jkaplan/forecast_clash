<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Avatar'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avatars index large-9 medium-8 columns content">
    <h3><?= __('Avatars') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avatar_img') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($avatars as $avatar): ?>
            <tr>
                <td><?= $this->Number->format($avatar->id) ?></td>
                <td><?= h($avatar->avatar_img) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $avatar->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $avatar->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $avatar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avatar->id)]) ?>
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
