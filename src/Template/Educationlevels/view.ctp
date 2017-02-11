<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Educationlevel'), ['action' => 'edit', $educationlevel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Educationlevel'), ['action' => 'delete', $educationlevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educationlevel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Educationlevels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Educationlevel'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="educationlevels view large-9 medium-8 columns content">
    <h3><?= h($educationlevel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Education') ?></th>
            <td><?= h($educationlevel->education) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($educationlevel->id) ?></td>
        </tr>
    </table>
</div>
