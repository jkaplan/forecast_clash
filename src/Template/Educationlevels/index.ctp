<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Educationlevel'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="educationlevels index large-9 medium-8 columns content">
    <h3><?= __('Educationlevels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('education') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($educationlevels as $educationlevel): ?>
            <tr>
                <td><?= $this->Number->format($educationlevel->id) ?></td>
                <td><?= h($educationlevel->education) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $educationlevel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $educationlevel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $educationlevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educationlevel->id)]) ?>
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
