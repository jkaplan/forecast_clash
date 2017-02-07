<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Avatar'), ['action' => 'edit', $avatar->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Avatar'), ['action' => 'delete', $avatar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avatar->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Avatars'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avatar'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="avatars view large-9 medium-8 columns content">
    <h3><?= h($avatar->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Avatar Img') ?></th>
            <td><?= h($avatar->avatar_img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($avatar->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($avatar->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Avatar Id') ?></th>
                <th scope="col"><?= __('Meteorologist') ?></th>
                <th scope="col"><?= __('Date Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($avatar->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->first_name) ?></td>
                <td><?= h($users->last_name) ?></td>
                <td><?= h($users->avatar_id) ?></td>
                <td><?= h($users->meteorologist) ?></td>
                <td><?= h($users->date_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
