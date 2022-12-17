<?php
/**
 * @var $this \App\View\AppView
 * @var $liveChannels \App\Model\Entity\LiveChannel[]|\Cake\Datasource\ResultSetInterface
 */
echo $this->Html->css([
    //'//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',
    'live-channels/index.css'
], ['block' => true]);
echo $this->Html->script([
    'https://code.jquery.com/jquery-1.12.4.js',
    'https://code.jquery.com/ui/1.12.1/jquery-ui.js',
    'https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js',
    'live-channels/index.js',
    'xcrud.js'
], ['block' => true]);
?>

<div class="xcrud-main">
    <?= $this->Flash->render() ?>

    <div style="width: 600px; margin: 0 auto;">
        <p class="text-end">
            <a href="/live-channels/add" class="btn btn-sm btn-primary xcrud-btn-add">Add</a>
        </p>

        <ul class="list-group" id="sortable">
            <?php foreach ($liveChannels as $liveChannel): ?>
                <li class="list-group-item ui-state-default" data-id="<?=$liveChannel->id?>">
                    <div class="handle"><i class="bi bi-arrow-down-up"></i></div>
                    <div class="nbr"><?=$liveChannel->position?>&nbsp;&nbsp;</div>
                    <div class="name">
                        <div class="row">
                            <div class="col">
                                <?=$liveChannel->name?>
                                <?php if ($liveChannel->frame_height): ?>
                                <sup class="text-muted">(<?=$liveChannel->frame_height?>p)</sup>
                                <?php endif; ?>
                                <br>
                                <small class="text-muted"><?=$this->LiveChannel->getChannelGroups($liveChannel, '&nbsp;')?></small>
                                <?php if (!$liveChannel->is_valid): ?>
                                    <i class="bi bi-x-circle-fill" style="color:red"></i>
                                <?php endif; ?>
                            </div>
                            <div class="col-4 text-end" style="font-size: .5em">
                                <a href="<?=$liveChannel->uri?>" class="btn btn-sm btn-link">URI</a>
                                <a href="/live-channels/edit/<?=$liveChannel->id?>" class="btn btn-sm btn-primary xcrud-btn-edit" data-bs-toggle="tooltip" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                <a href="/live-channels/delete/<?=$liveChannel->id?>" class="btn btn-sm btn-primary xcrud-btn-delete" data-bs-toggle="tooltip" title="Delete" data-msg="Do you really want to delete this item?"><i class="bi bi-trash-fill"></i></a>
                                &nbsp;
                                <a href="/live-channels/duplicate/<?=$liveChannel->id?>" class="btn btn-sm btn-primary xcrud-btn-edit" data-bs-toggle="tooltip" title="Duplicate"><i class="bi bi-files"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="clearfix"></div>
</div>
