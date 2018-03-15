<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.    
 */
   
use LINE\LINEBot\EchoBot\Dependency;
use LINE\LINEBot\EchoBot\Route;
use LINE\LINEBot\EchoBot\Setting;

require_once __DIR__ . '/../vendor/autoload.php';

$setting = Setting::getSetting();
$app = new Slim\App($setting);

(new Dependency())->register($app);
(new Route())->register($app);

$bot = new \LINE\LINEBot(
  new \LINE\LINEBot\HTTPClient\CurlHTTPClient('RlvjJ75b/Y6pZvkRubi439aOHnbo4DLIby0emSb7yHg0rvijrUwLIotURErm06Zo7/YO+xFacGJd2xwZfD+dOCmKguVOo8ZBBhhwBP4EW6lrfmbxw6ErquSTObl7fXrnNPARYpZpCiqWxzqp49xzOwdB04t89/1O/w1cDnyilFU='),['channelSecret' => '09be4e00415d8079d87f1a834165bb2b']
);
/*
$entityBody = file_get_contents('php://input');
$data = json_decode($entityBody, true);
 

$msg = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("文字");
foreach ($data as $key => $value) {
	if ($value['type']=='message') {
		$bot->replyMessage($value['replyToken'],$msg);
	}
}
*/

$app->run();
