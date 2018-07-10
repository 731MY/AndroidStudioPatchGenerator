#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: 731MY
 * Date: 7/10/18
 * Time: 5:11 AM
 */

$currentVersion = cleanVersion($argv[1]);
$os = $argv[2] ?? os();
$channel = $argv[3] ?? 'release';

$updateCenter = 'https://dl.google.com/android/studio/patches/updates.xml';
$patchLink = 'https://dl.google.com/android/studio/patches/';

$doc = new DOMDocument();

@$doc->loadXML(call($updateCenter));

$xpath = new DOMXPath($doc);

$query = sprintf('//channel[@status="%s"][1]/build/patch[@from="%s"]',$channel,$currentVersion);

$patch = $xpath->query($query);

if($patch->length == 1){
    $query = sprintf('//channel[@status="%s"][1]/build/@number',$channel);
    $build = $xpath->query($query);

    $latestVersion = cleanVersion($build->item(0)->value);

    $patchUrl = sprintf("%sAI-%s-%s-patch-%s.jar%s",$patchLink,$currentVersion,$latestVersion,$os,PHP_EOL);

    echo $patchUrl;
}else{
    echo "You'd better download & install latest version of Android Studio from https://developer.android.com/studio/".PHP_EOL;
}

function os(){
    return stripos(PHP_OS, 'win') === 0 ? 'win' : stripos(PHP_OS, 'darwin') === 0 ? 'mac' : 'unix';
}

function cleanVersion($input){
    return array_reverse(explode('-',$input))[0];
}

function call($url){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}