#EXTM3U
<?php foreach ($liveChannels as $channel): ?>
#EXTINF:-1 tvg-id="" tvg-logo="" group-title="",<?php echo $channel->name; ?>

<?php echo $channel->uri; ?>

<?php endforeach; ?>
