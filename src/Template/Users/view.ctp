<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stats'), ['controller' => 'Stats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stat'), ['controller' => 'Stats', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avatar') ?></th>
            <td><?= h($user->avatar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Education') ?></th>
            <td><?= h($user->education) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Major') ?></th>
            <td><?= h($user->major) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($user->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($user->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facebook Login') ?></th>
            <td><?= $this->Number->format($user->facebook_login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twitter Login') ?></th>
            <td><?= $this->Number->format($user->twitter_login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Google Login') ?></th>
            <td><?= $this->Number->format($user->google_login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Created') ?></th>
            <td><?= h($user->date_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Meteorologist') ?></th>
            <td><?= $user->meteorologist ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= $user->gender ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Stats') ?></h4>
        <?php if (!empty($user->stats)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Tornado Distance') ?></th>
                <th scope="col"><?= __('Wind Distance') ?></th>
                <th scope="col"><?= __('Hail Distance') ?></th>
                <th scope="col"><?= __('Tornado Attempts') ?></th>
                <th scope="col"><?= __('Wind Attempts') ?></th>
                <th scope="col"><?= __('Hail Attemps') ?></th>
                <th scope="col"><?= __('Current Streak') ?></th>
                <th scope="col"><?= __('Highest Streak') ?></th>
                <th scope="col"><?= __('States Visited') ?></th>
                <th scope="col"><?= __('Tornado Valid Attempts') ?></th>
                <th scope="col"><?= __('Wind Valid Attempts') ?></th>
                <th scope="col"><?= __('Hail Valid Attempts') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->stats as $stats): ?>
            <tr>
                <td><?= h($stats->id) ?></td>
                <td><?= h($stats->user_id) ?></td>
                <td><?= h($stats->tornado_distance) ?></td>
                <td><?= h($stats->wind_distance) ?></td>
                <td><?= h($stats->hail_distance) ?></td>
                <td><?= h($stats->tornado_attempts) ?></td>
                <td><?= h($stats->wind_attempts) ?></td>
                <td><?= h($stats->hail_attemps) ?></td>
                <td><?= h($stats->current_streak) ?></td>
                <td><?= h($stats->highest_streak) ?></td>
                <td><?= h($stats->states_visited) ?></td>
                <td><?= h($stats->tornado_valid_attempts) ?></td>
                <td><?= h($stats->wind_valid_attempts) ?></td>
                <td><?= h($stats->hail_valid_attempts) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Stats', 'action' => 'view', $stats->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Stats', 'action' => 'edit', $stats->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stats', 'action' => 'delete', $stats->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stats->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
