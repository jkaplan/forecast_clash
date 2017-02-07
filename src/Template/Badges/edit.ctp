<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $badge->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $badge->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Badges'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="badges form large-9 medium-8 columns content">
    <?= $this->Form->create($badge) ?>
    <fieldset>
        <legend><?= __('Edit Badge') ?></legend>
        <?php
            echo $this->Form->input('badge_name');
            echo $this->Form->input('badge_desc');
            echo $this->Form->input('badge_img');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
