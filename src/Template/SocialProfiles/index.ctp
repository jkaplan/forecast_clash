<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Social Profile'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="socialProfiles index large-9 medium-8 columns content">
    <h3><?= __('Social Profiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('provider') ?></th>
                <th scope="col"><?= $this->Paginator->sort('identifier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('website_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('display_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('language') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_month') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email_verified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($socialProfiles as $socialProfile): ?>
            <tr>
                <td><?= $this->Number->format($socialProfile->id) ?></td>
                <td><?= $socialProfile->has('user') ? $this->Html->link($socialProfile->user->id, ['controller' => 'Users', 'action' => 'view', $socialProfile->user->id]) : '' ?></td>
                <td><?= h($socialProfile->provider) ?></td>
                <td><?= h($socialProfile->identifier) ?></td>
                <td><?= h($socialProfile->profile_url) ?></td>
                <td><?= h($socialProfile->website_url) ?></td>
                <td><?= h($socialProfile->photo_url) ?></td>
                <td><?= h($socialProfile->display_name) ?></td>
                <td><?= h($socialProfile->description) ?></td>
                <td><?= h($socialProfile->first_name) ?></td>
                <td><?= h($socialProfile->last_name) ?></td>
                <td><?= h($socialProfile->gender) ?></td>
                <td><?= h($socialProfile->language) ?></td>
                <td><?= h($socialProfile->age) ?></td>
                <td><?= h($socialProfile->birth_day) ?></td>
                <td><?= h($socialProfile->birth_month) ?></td>
                <td><?= h($socialProfile->birth_year) ?></td>
                <td><?= h($socialProfile->email) ?></td>
                <td><?= h($socialProfile->email_verified) ?></td>
                <td><?= h($socialProfile->phone) ?></td>
                <td><?= h($socialProfile->address) ?></td>
                <td><?= h($socialProfile->country) ?></td>
                <td><?= h($socialProfile->region) ?></td>
                <td><?= h($socialProfile->city) ?></td>
                <td><?= h($socialProfile->zip) ?></td>
                <td><?= h($socialProfile->created) ?></td>
                <td><?= h($socialProfile->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $socialProfile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $socialProfile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $socialProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialProfile->id)]) ?>
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
