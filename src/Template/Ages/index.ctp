<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Age'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ages index large-9 medium-8 columns content">
    <h3><?= __('Ages') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age_range') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ages as $age): ?>
            <tr>
                <td><?= $this->Number->format($age->id) ?></td>
                <td><?= h($age->age_range) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $age->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $age->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $age->id], ['confirm' => __('Are you sure you want to delete # {0}?', $age->id)]) ?>
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
