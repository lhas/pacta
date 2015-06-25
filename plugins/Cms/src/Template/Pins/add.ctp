<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Pins'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="pins form large-10 medium-9 columns">
    <?= $this->Form->create($pin) ?>
    <fieldset>
        <legend><?= __('Add Pin') ?></legend>
        <?php
            echo $this->Form->input('data');
            echo $this->Form->input('address');
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
