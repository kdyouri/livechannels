#EXTM3U
<?php foreach ($liveChannels as $channel): ?>
#EXTINF:-1 tvg-id="" tvg-logo="" group-title="<?=$this->LiveChannel->getChannelGroups($channel)?>",<?=$this->LiveChannel->getChannelName($channel)?>

<?php echo $channel->uri; ?>

<?php endforeach; ?>
