<?php
const SUBSCRIPTIONS_FILE = '/storage/subscriptions.ser';

// @return array

function allSubscriptions()
{
 $fileContent = file_get_contents(SUBSCRIPTIONS_FILE);
 $subscriptions = unserialize($fileContent);
 return $subscriptions ? $subscriptions : [];
}

// @param $params 

function addSubscription($params)
{
 $subscriptions = allSubscriptions();
 $subscriptions[] = $params;
 file_put_contents(SUBSCRIPTIONS_FILE, serialize($subscriptions));
}
