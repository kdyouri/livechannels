<?php
declare(strict_types=1);

namespace App\View\Helper;

use App\Model\Entity\LiveChannel;
use Cake\View\Helper;
use Cake\View\View;

/**
 * LiveChannel helper
 */
class LiveChannelHelper extends Helper
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function getChannelName(LiveChannel $channel) {
        $suffix = '';

        switch ($channel->frame_height) {
            case 1080:
                $suffix = ' (FHD)';
                break;
            case 720:
                $suffix = ' (HD)';
        }
        return $channel->name . $suffix;
    }

    public function getChannelGroups(LiveChannel $channel, $separator = ';') {
        $groups = array();

        if ($language = $channel->language) $groups[] = $language;
        if ($country = $channel->country) $groups[] = $country;
        if ($category = $channel->category) $groups[] = $category;

        return join($separator, $groups);
    }

}
