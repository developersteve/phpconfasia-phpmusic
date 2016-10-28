<?php

require_once 'WavFile.php';
require_once 'WavMaker.php';

$wav1 = new WavMaker(1, 44100, 32); 

$wav1->generateSineWav(440, 0.5); 

$wav1->save(dirname(__FILE__) . '/temp.wav');
shell_exec("afplay temp.wav");

?>