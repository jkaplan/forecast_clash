<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Badge'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="badges index large-9 medium-8 columns content">
    <h3><?= __('Badges') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('badge_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('badge_desc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('badge_img') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($badges as $badge): ?>
            <tr>
                <td><?= $this->Number->format($badge->id) ?></td>
                <td><?= h($badge->badge_name) ?></td>
                <td><?= h($badge->badge_desc) ?></td>
                <td><?= h($badge->badge_img) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $badge->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $badge->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $badge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $badge->id)]) ?>
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
