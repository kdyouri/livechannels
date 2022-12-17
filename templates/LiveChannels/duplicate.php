<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LiveChannel $liveChannel
 */
?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"><?= __('Duplicate Live Channel') ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <?= $this->Form->create($liveChannel, ['novalidate']) ?>
        <div class="modal-body">
            <?php
            echo $this->Flash->render();

            echo $this->Form->control('name', ['class' => 'form-control form-control-sm', 'div' => 'mb-3', 'label' => ['class' => 'form-label']]);
            echo $this->Form->control('uri', ['rows' => 3, 'class' => 'form-control form-control-sm', 'div' => 'mb-3', 'label' => ['class' => 'form-label']]);
            echo $this->Form->control('language', ['class' => 'form-control form-control-sm', 'div' => 'mb-3', 'label' => ['class' => 'form-label']]);
            echo $this->Form->control('country', ['class' => 'form-control form-control-sm', 'div' => 'mb-3', 'label' => ['class' => 'form-label']]);
            echo $this->Form->control('category', ['class' => 'form-control form-control-sm', 'div' => 'mb-3', 'label' => ['class' => 'form-label']]);
            echo $this->Form->control('frame_width', ['class' => 'form-control form-control-sm', 'div' => 'mb-3', 'label' => ['class' => 'form-label']]);
            echo $this->Form->control('frame_height', ['class' => 'form-control form-control-sm', 'div' => 'mb-3', 'label' => ['class' => 'form-label']]);
            echo $this->Form->control('bit_rate', ['class' => 'form-control form-control-sm', 'div' => 'mb-3', 'label' => ['class' => 'form-label']]);
            echo $this->Form->control('is_valid', ['type' => 'checkbox']);
            ?>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Add</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
