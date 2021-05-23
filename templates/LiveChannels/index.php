<?php
/**
 * @var $this \Cake\View\View
 */
echo $this->Html->css([
    //'//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',
    'live-channels/index.css'
], ['block' => true]);
echo $this->Html->script([
    'https://code.jquery.com/jquery-1.12.4.js',
    'https://code.jquery.com/ui/1.12.1/jquery-ui.js',
    'live-channels/index.js',
    'xcrud.js'
], ['block' => true]);
?>

<div style="width: 600px; margin: 0 auto;">

    <ul class="list-group" id="sortable">
        <?php foreach ($liveChannels as $liveChannel): ?>
            <li class="list-group-item ui-state-default" data-id="<?=$liveChannel->id?>">
                <div class="handle"><i class="bi bi-arrow-down-up"></i></div>
                <div class="nbr"><?=$liveChannel->position?>&nbsp;&nbsp;</div>
                <div class="name">
                    <div class="row">
                        <div class="col">
                            <?=$this->LiveChannel->getChannelName($liveChannel)?>
                        </div>
                        <div class="col-4" style="font-size: .5em">
                            <a href="<?=$liveChannel->uri?>" class="btn btn-sm btn-primary">Play</a>
                            <a href="/live-channels/edit/<?=$liveChannel->id?>" class="btn btn-sm btn-primary xcrud-btn-edit">Edit</a>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<div class="clearfix"></div>