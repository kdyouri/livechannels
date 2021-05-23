<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LiveChannel[]|\Cake\Collection\CollectionInterface $liveChannels
 */
?>
<div class="liveChannels index content">
    <?= $this->Html->link(__('New Live Channel'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Live Channels') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('language') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('category') ?></th>
                    <th><?= $this->Paginator->sort('response_code') ?></th>
                    <th><?= $this->Paginator->sort('frame_width') ?></th>
                    <th><?= $this->Paginator->sort('frame_height') ?></th>
                    <th><?= $this->Paginator->sort('bit_rate') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th><?= $this->Paginator->sort('is_valid') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($liveChannels as $liveChannel): ?>
                <tr>
                    <td><?= $this->Number->format($liveChannel->id) ?></td>
                    <td><?= h($liveChannel->name) ?></td>
                    <td><?= h($liveChannel->language) ?></td>
                    <td><?= h($liveChannel->country) ?></td>
                    <td><?= h($liveChannel->category) ?></td>
                    <td><?= h($liveChannel->response_code) ?></td>
                    <td><?= $this->Number->format($liveChannel->frame_width) ?></td>
                    <td><?= $this->Number->format($liveChannel->frame_height) ?></td>
                    <td><?= $this->Number->format($liveChannel->bit_rate) ?></td>
                    <td><?= $this->Number->format($liveChannel->position) ?></td>
                    <td><?= $this->Number->format($liveChannel->is_valid) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $liveChannel->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $liveChannel->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $liveChannel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $liveChannel->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
