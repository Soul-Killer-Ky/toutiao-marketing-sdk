<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/30
 * Time: 12:16
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);
$req = new \Dmp\V1\DmpCustomAudienceRead();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setCustomAudienceIds([110206764]);
print_r($client->excute($req));