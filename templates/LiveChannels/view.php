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
            <?= $this->Html->link(__('Edit Live Channel'), ['action' => 'edit', $liveChannel->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Live Channel'), ['action' => 'delete', $liveChannel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $liveChannel->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Live Channels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Live Channel'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="liveChannels view content">
            <h3><?= h($liveChannel->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($liveChannel->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Language') ?></th>
                    <td><?= h($liveChannel->language) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($liveChannel->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= h($liveChannel->category) ?></td>
                </tr>
                <tr>
                    <th><?= __('Response Code') ?></th>
                    <td><?= h($liveChannel->response_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($liveChannel->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Frame Width') ?></th>
                    <td><?= $this->Number->format($liveChannel->frame_width) ?></td>
                </tr>
                <tr>
                    <th><?= __('Frame Height') ?></th>
                    <td><?= $this->Number->format($liveChannel->frame_height) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bit Rate') ?></th>
                    <td><?= $this->Number->format($liveChannel->bit_rate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= $this->Number->format($liveChannel->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Valid') ?></th>
                    <td><?= $this->Number->format($liveChannel->is_valid) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Uri') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($liveChannel->uri)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Response Body') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($liveChannel->response_body)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
