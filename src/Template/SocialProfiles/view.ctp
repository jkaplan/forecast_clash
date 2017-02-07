<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Social Profile'), ['action' => 'edit', $socialProfile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Social Profile'), ['action' => 'delete', $socialProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialProfile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Social Profiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Social Profile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="socialProfiles view large-9 medium-8 columns content">
    <h3><?= h($socialProfile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $socialProfile->has('user') ? $this->Html->link($socialProfile->user->id, ['controller' => 'Users', 'action' => 'view', $socialProfile->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Provider') ?></th>
            <td><?= h($socialProfile->provider) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Identifier') ?></th>
            <td><?= h($socialProfile->identifier) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile Url') ?></th>
            <td><?= h($socialProfile->profile_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Website Url') ?></th>
            <td><?= h($socialProfile->website_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Url') ?></th>
            <td><?= h($socialProfile->photo_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Display Name') ?></th>
            <td><?= h($socialProfile->display_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($socialProfile->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($socialProfile->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($socialProfile->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($socialProfile->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Language') ?></th>
            <td><?= h($socialProfile->language) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= h($socialProfile->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Day') ?></th>
            <td><?= h($socialProfile->birth_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Month') ?></th>
            <td><?= h($socialProfile->birth_month) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Year') ?></th>
            <td><?= h($socialProfile->birth_year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($socialProfile->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Verified') ?></th>
            <td><?= h($socialProfile->email_verified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($socialProfile->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($socialProfile->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($socialProfile->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= h($socialProfile->region) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($socialProfile->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= h($socialProfile->zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($socialProfile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($socialProfile->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($socialProfile->modified) ?></td>
        </tr>
    </table>
</div>
