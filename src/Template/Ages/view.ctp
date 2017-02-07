<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Age'), ['action' => 'edit', $age->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Age'), ['action' => 'delete', $age->id], ['confirm' => __('Are you sure you want to delete # {0}?', $age->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Age'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ages view large-9 medium-8 columns content">
    <h3><?= h($age->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Age Range') ?></th>
            <td><?= h($age->age_range) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($age->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Profiles') ?></h4>
        <?php if (!empty($age->profiles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Education Level Id') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('Age Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($age->profiles as $profiles): ?>
            <tr>
                <td><?= h($profiles->id) ?></td>
                <td><?= h($profiles->user_id) ?></td>
                <td><?= h($profiles->education_level_id) ?></td>
                <td><?= h($profiles->gender) ?></td>
                <td><?= h($profiles->city) ?></td>
                <td><?= h($profiles->state_id) ?></td>
                <td><?= h($profiles->age_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Profiles', 'action' => 'view', $profiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Profiles', 'action' => 'edit', $profiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profiles', 'action' => 'delete', $profiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
