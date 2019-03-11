<?php
/**
 * Created by PhpStorm.
 * User: ruby
 * Date: 2019/1/23
 * Time: 23:41
 */

$extra = '{"activity":{"missionId":"10931","missionName":"关于我的50个问题","tid":"16"},"bgm":{"bgmId":},"sticker":{"stickerId":["10931","21313"]}}';

$json = json_decode($extra, true);

if ($json) {
    $bgmIds = array_filter($json['bgm']['bgmId']);
    if (!count($bgmIds)) {
        unset($json['bgm']);
    } else {
        $json['bgm']['bgmId'] = $bgmIds[0];
    }
    var_dump($json);
}

print("[Log] wrong json format");

