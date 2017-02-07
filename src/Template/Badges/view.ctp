<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Badge'), ['action' => 'edit', $badge->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Badge'), ['action' => 'delete', $badge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $badge->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Badges'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Badge'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="badges view large-9 medium-8 columns content">
    <h3><?= h($badge->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Badge Name') ?></th>
            <td><?= h($badge->badge_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Badge Desc') ?></th>
            <td><?= h($badge->badge_desc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Badge Img') ?></th>
            <td><?= h($badge->badge_img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($badge->id) ?></td>
        </tr>
    </table>
</div>
