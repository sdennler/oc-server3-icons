<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

$c_compact = false;

$duplicatedLine = __LINE__ + 3;
$duplicated = [
    // Found with fdupes -r1o name . > duplicates
    "OC_Icons_Dez_2021_+_Attributs/viewcache/16x16-maintenance.svg" => "OC_Icons_Dez_2021_+_Attributs/viewcache/16x16-maintenance_shifted.svg",
    "OC_Icons_Dez_2021_+_Attributs/viewcache/box.svg" => "OC_Icons_Dez_2021_+_Attributs/viewcache/package_green.svg",
    "OC_Icons_Dez_2021_+_Attributs/viewcache/cache-rate.svg" => "OC_Icons_Dez_2021_+_Attributs/viewcache/rating-star.svg",
    "OC_Icons_Dez_2021_+_Attributs/cachestatus/16x16-wait.svg" => "OC_Icons_Dez_2021_+_Attributs/viewcache/time.svg",
    "OC_Icons_Dez_2021_+_Attributs/cachestatus/16x16-stop.svg" => "OC_Icons_Dez_2021_+_Attributs/log/16x16-disabled.svg",
    "OC_Icons_Dez_2021_+_Attributs/cachestatus/16x16-go.svg" => "OC_Icons_Dez_2021_+_Attributs/log/16x16-active.svg",
    "OC_Icons_Dez_2021_+_Attributs/cachestatus/16x16-locked-invisible.svg" => "OC_Icons_Dez_2021_+_Attributs/log/16x16-locked-invisible.svg",
    "OC_Icons_Dez_2021_+_Attributs/cachestatus/16x16-locked.svg" => "OC_Icons_Dez_2021_+_Attributs/log/16x16-locked.svg",
    "OC_Icons_Dez_2021_+_Attributs/misc/16x16-locked.svg " => "OC_Icons_Dez_2021_+_Attributs/log/16x16-locked.svg",
    "OC_Icons_Dez_2021_+_Attributs/direction/16x16-360deg.svg" => "OC_Icons_Dez_2021_+_Attributs/direction/16x16-0deg.svg",
    "OC_Icons_Dez_2021_+_Attributs/description/16x16-visitors.svg" => "OC_Icons_Dez_2021_+_Attributs/log/16x16-attended.svg",
    "OC_Icons_Dez_2021_+_Attributs/viewcache/16x16-visitors.svg" => "OC_Icons_Dez_2021_+_Attributs/log/16x16-attended.svg",
    "OC_Icons_Dez_2021_+_Attributs/action/16x16-addimage.svg" => "OC_Icons_Dez_2021_+_Attributs/viewcache/16x16-pictures.svg",
    "OC_Icons_Dez_2021_+_Attributs/action/16x16-watch.svg" => "OC_Icons_Dez_2021_+_Attributs/viewcache/16x16-watch.svg",
    "OC_Icons_Dez_2021_+_Attributs/misc/22x22-home.svg" => "OC_Icons_Dez_2021_+_Attributs/profile/22x22-home.svg",
    "OC_Icons_Dez_2021_+_Attributs/misc/22x22-email.svg" => "OC_Icons_Dez_2021_+_Attributs/profile/22x22-email.svg",
    "OC_Icons_Dez_2021_+_Attributs/misc/32x32-statistic2.svg" => "OC_Icons_Dez_2021_+_Attributs/profile/32x32-statistic2.svg",
    "OC_Icons_Dez_2021_+_Attributs/misc/32x32-winner.svg" => "OC_Icons_Dez_2021_+_Attributs/profile/32x32-statistic2.svg",
    "OC_Icons_Dez_2021_+_Attributs/misc/32x32-statistic.svg" => "OC_Icons_Dez_2021_+_Attributs/profile/32x32-statistic.svg",
    "OC_Icons_Dez_2021_+_Attributs/misc/32x32-adopt.svg" => "OC_Icons_Dez_2021_+_Attributs/profile/32x32-adopt.svg ",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/event-rand1.svg"       => "OC_Icons_Dez_2021_+_Attributs/cacheicon/event.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/event-rand2.svg"       => "OC_Icons_Dez_2021_+_Attributs/cacheicon/event.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/event-rand3.svg"       => "OC_Icons_Dez_2021_+_Attributs/cacheicon/event.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/event-rand4.svg"       => "OC_Icons_Dez_2021_+_Attributs/cacheicon/event.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/event-s.svg"           => "OC_Icons_Dez_2021_+_Attributs/cacheicon/event.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/newevent.svg"          => "OC_Icons_Dez_2021_+_Attributs/cacheicon/event.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-6.svg"           => "OC_Icons_Dez_2021_+_Attributs/cacheicon/event.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-event.svg"       => "OC_Icons_Dez_2021_+_Attributs/cacheicon/event.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/16x16-event.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/event.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/map-event.svg"         => "OC_Icons_Dez_2021_+_Attributs/cacheicon/event.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/event-n.svg"           => "OC_Icons_Dez_2021_+_Attributs/cacheicon/event-grey.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/16x16-mystery.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/mystery.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/map-mystery.svg"         => "OC_Icons_Dez_2021_+_Attributs/cacheicon/mystery.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-7.svg"             => "OC_Icons_Dez_2021_+_Attributs/cacheicon/mystery.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-mystery.svg"       => "OC_Icons_Dez_2021_+_Attributs/cacheicon/mystery.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/mystery-s.svg"           => "OC_Icons_Dez_2021_+_Attributs/cacheicon/mystery.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/mystery-n.svg"           => "OC_Icons_Dez_2021_+_Attributs/cacheicon/mystery-grey.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/16x16-drivein.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/drivein.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/map-drivein.svg"         => "OC_Icons_Dez_2021_+_Attributs/cacheicon/drivein.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-drivein.svg"       => "OC_Icons_Dez_2021_+_Attributs/cacheicon/drivein.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/drivein-s.svg"           => "OC_Icons_Dez_2021_+_Attributs/cacheicon/drivein.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-10.svg"            => "OC_Icons_Dez_2021_+_Attributs/cacheicon/drivein.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/drivein-n.svg"           => "OC_Icons_Dez_2021_+_Attributs/cacheicon/drivein-grey.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/16x16-multi.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/multi.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/map-multi.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/multi.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/multi-s.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/multi.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/multi-grey.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/multi-n.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/virtual-s.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/virtual.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-4.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/virtual.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-virtual.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/virtual.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/16x16-virtual.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/virtual.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/map-virtual.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/virtual.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/virtual-grey.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/virtual-n.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/virtual-a-owner.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/virtual-n-owner.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/traditional-grey.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/traditional-n.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/16x16-traditional.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/traditional-s.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-9.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/moving.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/16x16-9.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/moving.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/moving-s.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/moving.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/16x16-moving.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/moving.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/map-moving.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/moving.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/moving-grey.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/moving-n.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/unknown-s.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/unknown.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-1.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/unknown.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-unknown.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/unknown.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/16x16-unknown.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/unknown.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/map-unknown.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/unknown.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/unknown-grey.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/unknown-n.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/mathe-s.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/mathe.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-8.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/mathe.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-mathe.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/mathe.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/16x16-mathe.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/mathe.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/map-mathe.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/mathe.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/mathe-grey.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/mathe-n.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-5.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/webcam.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-webcam.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/webcam.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/16x16-webcam.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/webcam.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/map-webcam.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/webcam.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/tmp.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/webcam.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/webcam-s.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/webcam.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/webcam-grey.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/webcam-n.svg",

    // Manual
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/20x20-1.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/unknown.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-2.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/traditional-s.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/20x20-2.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/traditional-s.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/20x20-3.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/multi.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-3.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/multi.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/20x20-4.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/virtual.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/20x20-5.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/webcam.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/20x20-6.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/event.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/20x20-7.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/mystery.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/20x20-8.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/mathe.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/20x20-9.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/moving.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/20x20-10.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/drivein.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/22x22-event.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/event.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/22x22-event.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/event.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-moving.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/moving.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-multi.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/multi.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-traditional.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/traditional-s.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/22x22-traditional.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/traditional-s.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/traditional.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/traditional-s.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/22x20-traditional.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/traditional-s.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/22x22-traditional.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/traditional-s.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/map-traditional.svg' => 'OC_Icons_Dez_2021_+_Attributs/cacheicon/traditional-s.svg',
    'OC_Icons_Dez_2021_+_Attributs/log/16x16-needs-maintenance.svg' => 'OC_Icons_Dez_2021_+_Attributs/cachestatus/needs-maintenance.svg',
    'OC_Icons_Dez_2021_+_Attributs/misc/32x32-pictures.svg' => 'OC_Icons_Dez_2021_+_Attributs/viewcache/16x16-pictures.svg',
    'OC_Icons_Dez_2021_+_Attributs/description/32x22-profile.svg' => 'OC_Icons_Dez_2021_+_Attributs/misc/32x32-profile.svg',
    'OC_Icons_Dez_2021_+_Attributs/description/32x32-profile.svg' => 'OC_Icons_Dez_2021_+_Attributs/misc/32x32-profile.svg',
    'OC_Icons_Dez_2021_+_Attributs/profile/32x22-profile.svg	' => 'OC_Icons_Dez_2021_+_Attributs/misc/32x32-profile.svg',
    'OC_Icons_Dez_2021_+_Attributs/profile/32x32-profile.svg' => 'OC_Icons_Dez_2021_+_Attributs/misc/32x32-profile.svg',
    'OC_Icons_Dez_2021_+_Attributs/media/16x16-slack.svg' => 'OC_Icons_Dez_2021_+_Attributs/media/32x32-slack.svg',
    'OC_Icons_Dez_2021_+_Attributs/media/16x16-twitter.svg' => 'OC_Icons_Dez_2021_+_Attributs/media/32x32-twitter.svg',
    'OC_Icons_Dez_2021_+_Attributs/media/32x32-twitter.svg' => 'OC_Icons_Dez_2021_+_Attributs/media/32x32-twitter.svg',
    'OC_Icons_Dez_2021_+_Attributs/misc/32x32-world.svg' => 'OC_Icons_Dez_2021_+_Attributs/viewcache/world.svg',
    'OC_Icons_Dez_2021_+_Attributs/navigation/15x15-close.svg' => 'OC_Icons_Dez_2021_+_Attributs/navigation/23x23-close.svg',
    'OC_Icons_Dez_2021_+_Attributs/navigation/19x19-close.svg' => 'OC_Icons_Dez_2021_+_Attributs/navigation/23x23-close.svg',
    'OC_Icons_Dez_2021_+_Attributs/log/16x16-disabled.svg' => 'OC_Icons_Dez_2021_+_Attributs/cachestatus/32x32-disabled.svg',
    'OC_Icons_Dez_2021_+_Attributs/profile/22x22-email.svg' => 'OC_Icons_Dez_2021_+_Attributs/misc/16x16-email.svg',
    'OC_Icons_Dez_2021_+_Attributs/media/32x32-facebook.svg' => 'OC_Icons_Dez_2021_+_Attributs/media/16x16-facebook.svg',
    'OC_Icons_Dez_2021_+_Attributs/description/16x16-rss.svg' => 'OC_Icons_Dez_2021_+_Attributs/description/32x32-rss.svg',
    'OC_Icons_Dez_2021_+_Attributs/media/16x16-feed.svg' => 'OC_Icons_Dez_2021_+_Attributs/description/32x32-rss.svg',
    'OC_Icons_Dez_2021_+_Attributs/media/22x22-feed.svg' => 'OC_Icons_Dez_2021_+_Attributs/description/32x32-rss.svg',
    'OC_Icons_Dez_2021_+_Attributs/media/32x32-feed.svg' => 'OC_Icons_Dez_2021_+_Attributs/description/32x32-rss.svg',
    'OC_Icons_Dez_2021_+_Attributs/map/35x35-fullscreen.svg' => 'OC_Icons_Dez_2021_+_Attributs/map/48x48-fullscreen.svg	',
    'OC_Icons_Dez_2021_+_Attributs/description/32x32-geokret.svg' => 'OC_Icons_Dez_2021_+_Attributs/description/22x22-geokret.svg',
    'OC_Icons_Dez_2021_+_Attributs/misc/16x16-home.svg' => 'OC_Icons_Dez_2021_+_Attributs/misc/32x32-home.svg',
    'OC_Icons_Dez_2021_+_Attributs/profile/32x32-home.svg' => 'OC_Icons_Dez_2021_+_Attributs/misc/32x32-home.svg',
    'OC_Icons_Dez_2021_+_Attributs/profile/22x22-home.svg' => 'OC_Icons_Dez_2021_+_Attributs/misc/32x32-home.svg',
    'OC_Icons_Dez_2021_+_Attributs/media/16x16-Instagram.svg' => 'OC_Icons_Dez_2021_+_Attributs/media/32x32-Instagram.svg',
    'OC_Icons_Dez_2021_+_Attributs/misc/is_oconly_small.svg' => 'OC_Icons_Dez_2021_+_Attributs/misc/is_oconly.svg',
    'OC_Icons_Dez_2021_+_Attributs/misc/40x22-oconly.svg' => 'OC_Icons_Dez_2021_+_Attributs/misc/is_oconly.svg',
    'OC_Icons_Dez_2021_+_Attributs/log/16x16-listing-outdated.svg' => 'OC_Icons_Dez_2021_+_Attributs/cachestatus/listing-outdated.svg',
    'OC_Icons_Dez_2021_+_Attributs/log/16x16-locked.svg' => 'OC_Icons_Dez_2021_+_Attributs/misc/16x16-locked.svg',
    'OC_Icons_Dez_2021_+_Attributs/cachestatus/32x32-locked.svg' => 'OC_Icons_Dez_2021_+_Attributs/misc/16x16-locked.svg',
    'OC_Icons_Dez_2021_+_Attributs/description/22x22-logs.svg' => 'OC_Icons_Dez_2021_+_Attributs/viewcache/logs.svg',
    'OC_Icons_Dez_2021_+_Attributs/direction/direction-source.svg' => 'OC_Icons_Dez_2021_+_Attributs/direction/16x16-90deg.svg',
    '' => '',
    '' => '',
    '' => '',
    '' => '',
    '' => '',
];

$noDuplicate = [
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/event.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/moving.svg',
    'OC_Icons_Dez_2021_+_Attributs/cacheicon/webcam.svg',
    'OC_Icons_Dez_2021_+_Attributs/attributes/rund/compass.svg',
    'OC_Icons_Dez_2021_+_Attributs/attributes/rund/tools.svg',
    'OC_Icons_Dez_2021_+_Attributs/viewcache/date.svg',
];

$noUse = [
    'OC_Icons_Dez_2021_+_Attributs/misc/bg-gradient-blue.svg',
    'OC_Icons_Dez_2021_+_Attributs/misc/bg-gradient-grey.svg',
    'OC_Icons_Dez_2021_+_Attributs/bg-langstripe.svg',
    'OC_Icons_Dez_2021_+_Attributs/darkbluetransparent.svg',
    'SamEdits/event-rand2.svg',
    'SamEdits/event-rand3.svg',
    'SamEdits/event-rand4.svg',
    'SamEdits/event-rand5.svg',
    'SamEdits/grins.svg',
    'OC_Icons_Dez_2021_+_Attributs/misc/15x21-oc.svg', // Use OC_Icons_Dez_2021_+_Attributs/misc/15x15-oc.svg
    'OC_Icons_Dez_2021_+_Attributs/viewcache/world.svg', // Use OC_Icons_Dez_2021_+_Attributs/misc/25x25-world.svg
    'OC_Icons_Dez_2021_+_Attributs/profile/32x32-email.svg', // Use OC_Icons_Dez_2021_+_Attributs/misc/16x16-email.svg
    'OC_Icons_Dez_2021_+_Attributs/misc/empty.svg',
    'OC_Icons_Dez_2021_+_Attributs/log/16x16-none.svg',
    'OC_Icons_Dez_2021_+_Attributs/misc/16x16-help.svg', // Use OC_Icons_Dez_2021_+_Attributs/misc/32x32-help.svg
];

$cacheTypIdMap = [
    '10' => 'drivein',
    '1' => 'unknown',
    '2' => 'traditional',
    '3' => 'multi',
    '4' => 'virtual',
    '5' => 'webcam',
    '6' => 'event',
    '7' => 'mystery',
    '8' => 'mathe',
    '9' => 'moving',
];

$cacheStatusMap = [
    '' => 'active',
    's' => 'active',
    'a' => 'archived',
    'n' => 'inactive',
    'grey' => 'inactive',
];

$foundStatusMap = [
    '' => 'untried',
    'found' => 'found',
    'dnf' => 'notfound',
    'owner' => 'owned',
];

/*
head (falls wir so was noch brauchen)

thirdparties (media, geokrety) -> Alle Logos von anderen Seiten ausser
ocnodes (nodes) -> Andere OC Platformen
oclogos -> OC Logos
navigation -> Icons speziell für die Navigation auf der Seite. Aktuell die zum Blättern.
 directions -> Pfeile in alle Himmelsrichtungen
icons (viewcache, profile, misc, map, log, description, cachestatus, action)

NO USE:
 page
 thumb
map/caches1
map/caches2
*/


$otherFiles = [];
$nameDuplicated = [];
$svgFiles = [];
$svgFilesNoUse = [];

$groupSort = '000_%s_%s';

$files = explode(PHP_EOL."./", trim(`find . -type f`));
foreach($files as $file) {
    if (isset($duplicated[$file])) {
        continue;
    }
    
    if ('.svg' !== mb_substr($file, -4)) {
        $otherFiles[] = $file;
        continue;
    }

    $svg = ['file' => $file];
    
    $base = preg_replace('/\d\dx\d\d-/', '', basename($file));
    if (isset($nameDuplicated[$base])) {
        if (!in_array($file, $noDuplicate)) {
            $svg['nameDuplicated'] = $nameDuplicated[$base];
        }
    } else {
        $nameDuplicated[$base] = $file;
    }

    $svg['sort'] = $base;

    if (preg_match('#/page/#', $file) || in_array($file, $noUse)) {
        $svgFilesNoUse[] = $svg;
        continue;
    }

    if (preg_match('#deg\.#', $file)) {
        $svg['group'] = 'directions';
        $svg['newName'] = str_replace('16x16-', '', basename($file));
        $svg['sort'] = sprintf($groupSort, $svg['group'], $svg['newName']);
    }

    /** Cache icons name parts
     *  type: see $cacheTypIdMap, various,
     *  cache status: active, inactive, archived, ($cacheStatusMap)
     *  found status: untried, found, notfound, owned, ($foundStatusMap)
     *  attributes: oconly, border,
     */
    elseif (preg_match('#/caches1/#', $file)) {
        $svg['group'] = 'cacheIcons';
        $name = explode('-', str_replace(['24x24-', 'cachetype-', '.svg'], '', basename($file)));
        #$svg['note'] = var_export($name, true);
        $type = $cacheTypIdMap[$name[0]] ?? 'various';
        $cacheStatus = 'inactive' === ($name[1]??null) ? 'inactive' : 'active';
        $foundStatus = 'various' === $type ? $name[0] : 'untried';
        $attributes = 'oconly' === ($name[1]??null) ? 'oconly-' : '';
        $svg['newName'] = sprintf('%s-%s-%s-%sborder.svg', $type, $cacheStatus, $foundStatus, $attributes);
        $svg['sort'] = sprintf($groupSort, $svg['group'], $svg['newName']);
    }

    elseif (preg_match('#/cacheicon/#', $file)) {
        $svg['group'] = 'cacheIcons';
        $name = explode('-', str_replace(['16x16-', '.svg', '_'], ['', '', '-'], basename($file)));
        #$svg['note'] = var_export($name, true);
        $type = $name[0];
        $cacheStatus = $cacheStatusMap[$name[1]??''];
        $foundStatus = $foundStatusMap[$name[2]??''];
        $svg['newName'] = sprintf('%s-%s-%s.svg', $type, $cacheStatus, $foundStatus);
        $svg['sort'] = sprintf($groupSort, $svg['group'], $svg['newName']);
    }

    elseif (preg_match('#/attributes/#', $file)) {
        $svg['group'] = 'attributes';
        $name = explode('-', str_replace('.svg', '', basename($file)));
        #$svg['note'] = var_export($name, true);
        $type = $name[0];
        $status = $name[1]??'yes';
        $svg['newName'] = sprintf('%s-%s.svg', $type, $status);
        $svg['sort'] = sprintf($groupSort, $svg['group'], $svg['newName']);
    }

    elseif (preg_match('#/(difficulty|rating)/#', $file)) {
        $svg['group'] = 'ratings';
        $svg['newName'] = str_replace(['diff', 'rat', 'terr'], ['difficulty', 'rating', 'terrain'], basename($file));
        $svg['newName'] = preg_replace('#-(\d)\.#', '-${1}0.', $svg['newName']);
        $svg['sort'] = sprintf($groupSort, $svg['group'], $svg['newName']);
    }
    elseif (preg_match('#rating-star.svg$#', $file)) {
        $svg['group'] = 'ratings';
        $svg['newName'] = 'rating_star.svg';
        $svg['sort'] = sprintf($groupSort, $svg['group'], $svg['newName']);
    }

    $svgFiles[] = $svg;
}

$sortBySort = function ($a, $b) {
    return strcmp(strtoupper($a['sort']), strtoupper($b['sort']));
};
usort($svgFiles, $sortBySort);
usort($svgFilesNoUse, $sortBySort);

print '<html><head><title>OC Icons List</title><style>body{background-color: #0f253c; color: wheat;}table,tr,td{padding: 6px; border: 1px solid black;}a:link, a:active, a:focus, a:visited, a:hover {color:wheat;}</style></head><body>'.PHP_EOL;
print '<ul><li><a href="#use">Use</a></li><li><a href="#dontuse">Don\'t Use</a></li><li><a href="#duplicated">Duplicated SVGs</a></li><li><a href="#other">non SVG files</a></li></ul>'.PHP_EOL;

print '<h2>'.count($svgFiles).' SVGs</h2>'.PHP_EOL.'<table>'.PHP_EOL;
print '<tr><th>ID</th><th>Thumb</th><th>Path</th><th>Group / Directory</th><th>New name</th><th>Note</th><th>Other</th></tr>'.PHP_EOL;
$line  = '<tr><td>S%1$\'.03d</td><td><img src="%2$s" width="100" /></td><td>%2$s</td><td>%4$s</td><td>%5$s</td><td>%3$s</td><td></td></tr>'.PHP_EOL;
$lineD = '<tr><td>S%1$\'.03d</td><td><img src="%2$s" width="100" /></td><td>%2$s</td><td>%4$s</td><td>%5$s</td><td>Maybe Duplicate of %3$s</td><td><img src="%3$s" width="100" /></td></tr>'.PHP_EOL;
foreach ($svgFiles as $no => $data) {
    if ($c_compact && in_array($data['group']??'', ['directions', 'cacheIcons', 'attributes', 'ratings',])){
        continue;
    }
    echo sprintf(
        isset($data['nameDuplicated']) ? $lineD : $line,
        $no,
        $data['file'],
        $data['nameDuplicated'] ?? $data['note'] ?? '',
        $data['group'] ?? '',
        $data['newName'] ?? '',
    );
}
print '</table>'.PHP_EOL.PHP_EOL;

print '<h2 id="dontuse">'.count($svgFilesNoUse).' SVGs we should not use</h2>'.PHP_EOL.'<table>'.PHP_EOL;
foreach ($svgFilesNoUse as $no => $data) {
    if ($c_compact) continue;
    echo sprintf(
        isset($data['nameDuplicated']) ? $lineD : $line,
        $no,
        $data['file'],
        $data['nameDuplicated'] ?? $svg['note'] ?? '',
        $data['group'] ?? '',
        $data['newName'] ?? '',
    );
}
print '</table>'.PHP_EOL.PHP_EOL;

print '<h2 id="duplicated">'.count($duplicated).' duplicated</h2>'.PHP_EOL.'<table>'.PHP_EOL;
$line = '<tr><td>D%4$\'.03d</td><td><img src="%1$s" width="100" /></td><td>%1$s</td><td>%3$sDuplicate of %2$s</td><td><img src="%2$s" width="100" /></td></tr>'.PHP_EOL;
foreach ($duplicated as $file => $original) {
    $note = isset($duplicated[$original])? 'ALSO DUPLICATED ' : '';
    echo sprintf($line, $file, $original, $note, $duplicatedLine);
    $duplicatedLine++;
}
print '</table>'.PHP_EOL.PHP_EOL;

print '<h2 id="other">'.count($otherFiles).' non SVG files</h2>'.PHP_EOL.'<table>'.PHP_EOL;
$line = '<tr><td>O%2$\'.03d</td><td>%1$s</td></tr>'.PHP_EOL;
foreach ($otherFiles as $no => $file) {
    echo sprintf($line, $file, $no);
}
print '</table>'.PHP_EOL.PHP_EOL;

print '</body></html>'.PHP_EOL;
