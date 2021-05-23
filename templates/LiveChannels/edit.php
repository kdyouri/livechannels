<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LiveChannel $liveChannel
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $liveChannel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $liveChannel->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Live Channels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="liveChannels form content">
            <?= $this->Form->create($liveChannel) ?>
            <fieldset>
                <legend><?= __('Edit Live Channel') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('language');
                    echo $this->Form->control('country');
                    echo $this->Form->control('category');
                    echo $this->Form->control('uri');
                    echo $this->Form->control('response_body');
                    echo $this->Form->control('response_code');
                    echo $this->Form->control('frame_width');
                    echo $this->Form->control('frame_height');
                    echo $this->Form->control('bit_rate');
                    echo $this->Form->control('position');
                    echo $this->Form->control('is_valid');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
