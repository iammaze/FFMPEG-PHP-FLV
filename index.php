<?php

require_once('vendor/autoload.php');
// custom file type for flv video
require_once('FLV.php');

// save the start time
$start_time = microtime(true);

$ffmpeg = FFMpeg\FFMpeg::create();
$video = $ffmpeg->open('https://media.videoask.com/transcoded/92fec5f4-4b3e-4dd9-a873-32964fe18dbc/video.mp4?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJtZWRpYV9pZCI6IjkyZmVjNWY0LTRiM2UtNGRkOS1hODczLTMyOTY0ZmUxOGRiYyIsImV4cCI6MTYyMjY5MzU2Mn0.WVkNG42HohY6qE0GtJQp9C-fkSEqCA82CfMdVr81PJDbhYt-IOpLyAVLTN4k85tvU4fx1r5ie1H2QZqvDnpXvzzp9Rz48yVkY4LslIF_Yn-TPgdC5sWP8aCOTTaXQjCu6RJqDji4-WZ8AySgXQBbzLh51-RtxEAhQKVreg0vsv0F1prUnX8YRRUdWi2t05UBOqREk7TYC8HC-FUn99q6J-MbMUeSIIKQeOjzhwizfXC2dpqV9J11lm0g1QG7Wf1pVBQVtYSN56phFxoggnCkCjoiX7f60nfGLZgEWxksnSLr3FxvzvIai2V_yTW1pL5wUkKdKPSihisUGN0eFH5XfIMrxBnHfV0--06i2rSlcmVU3J1itJ3oWTX-VROR8Vp_QpLyTPp9CWEMmpP3yy-plBmMiAwcjUl4JjKfiZOlN7KTE4l4b65m-XzxoOSZDJsJazk2nyIztDsCtr3epGXWIHMOu2uv93oHrcHu6Uxnql7L--qO7zZM8IofClnqcFs2eAAPbx2ZlNY_gh4zl5Gkr-CdJ_W6pMScOWAsNOhLFRCVWhFLB2WsShmsHIWbL_4VR2cgiTCDln0ZWoC8TVJDiBeK8eLu9c1qxKK0oTdVAPXo8kwIZ6jP87y_phHZOOplONqp3RNOiBIEyZoXZluRNpPFlFzsUDMWqMLG4piQCKg');
// $video = $ffmpeg->open('video.mp4');
$video->save(new FFMpeg\Format\Video\FLV(), 'export.flv');

// get the end time
$end_time = microtime(true); 

// Calculate the script execution time 
$execution_time = ($end_time - $start_time); 
  
echo "It took $execution_time seconds to convert the video\n";
