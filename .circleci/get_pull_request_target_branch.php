<?php

$options  = getopt('', ['api-token:', 'api-user:']);
$apiToken = $options['api-token'];
$apiUser  = $options['api-user'];

if (empty($apiToken) || empty($apiUser)) {
    throw new \RuntimeException('api-user and api-token are required!');
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.github.com/repos/davialexandre/circle-ci-test/pulls/1');
curl_setopt($ch, CURLOPT_USERPWD, $apiUser . ":" . $apiToken);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_USERAGENT, 'dsadsadsa');
$return = curl_exec($ch);
curl_close($ch);

$pullRequest = json_decode($return);
echo $pullRequest->base->ref;

