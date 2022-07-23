<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

$duplicatedLine = __LINE__ + 2;
$duplicated = [
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
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/16x16-traditional.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/map-traditional.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-9.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-moving.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/16x16-9.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-moving.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/moving-s.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/moving.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/cache/16x16-moving.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-moving.svg",
    "OC_Icons_Dez_2021_+_Attributs/cacheicon/map-moving.svg" => "OC_Icons_Dez_2021_+_Attributs/cacheicon/16x16-moving.svg",
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
];


$otherFiles = [];
$nameDuplicated = [];
$svgFiles = [];

$files = explode(PHP_EOL."./", trim(`find . -type f`));
foreach($files as $file) {
    if ('.svg' !== mb_substr($file, -4)) {
        $otherFiles[] = $file;
        continue;
    }
    
    $svg = ['file' => $file];
    
    $base = preg_replace('/\d\dx\d\d-/', '', basename($file));
    $svg['baseName'] = $base;
    if (isset($nameDuplicated[$base])) {
        $svg['nameDuplicated'] = $nameDuplicated[$base];
    } else {
        $nameDuplicated[$base] = $file;
    }

    $svgFiles[] = $svg;
}

usort($svgFiles, function($a, $b) {
    return strcmp(strtoupper($a['baseName']), strtoupper($b['baseName']));
});


print '<html><body><style>table,tr,td{padding: 6px; border: 1px solid black;}</style>'.PHP_EOL;

print '<h2>'.count($svgFiles).' SVGs</h2>'.PHP_EOL.'<table>'.PHP_EOL;
$line  = '<tr><td>S%1$\'.03d</td><td><img src="%2$s" width="100" /></td><td>%2$s</td><td></td><td></td></tr>'.PHP_EOL;
$lineD = '<tr><td>S%1$\'.03d</td><td><img src="%2$s" width="100" /></td><td>%2$s</td><td>Maybe Duplicate of %3$s</td><td><img src="%3$s" width="100" /></td></tr>'.PHP_EOL;
foreach ($svgFiles as $no => $data) {
    echo sprintf(isset($data['nameDuplicated']) ? $lineD : $line, $no, $data['file'], $data['nameDuplicated'] ?? null);
}
print '</table>'.PHP_EOL.PHP_EOL;

print '<h2>'.count($duplicated).' duplicated</h2>'.PHP_EOL.'<table>'.PHP_EOL;
$line = '<tr><td>D%4$\'.03d</td><td><img src="%1$s" width="100" /></td><td>%1$s</td><td>%3$sDuplicate of %2$s</td><td><img src="%2$s" width="100" /></td></tr>'.PHP_EOL;
foreach ($duplicated as $file => $original) {
    $note = isset($duplicated[$original])? 'ALSO DUPLICATED ' : '';
    echo sprintf($line, $file, $original, $note, $duplicatedLine);
    $duplicatedLine++;
}
print '</table>'.PHP_EOL.PHP_EOL;

print '<h2>'.count($otherFiles).' non SVG files</h2>'.PHP_EOL.'<table>'.PHP_EOL;
$line = '<tr><td>O%2$\'.03d</td><td>%1$s</td></tr>'.PHP_EOL;
foreach ($otherFiles as $no => $file) {
    echo sprintf($line, $file, $no);
}
print '</table>'.PHP_EOL.PHP_EOL;

print '</body></html>'.PHP_EOL;
