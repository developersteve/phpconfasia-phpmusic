<?php

require_once 'WavFile.php';
require_once 'WavMaker.php';

$base = new WavFile(dirname(__FILE__) . '/samples/base.wav');
$music_a = new WavFile(dirname(__FILE__) . '/samples/a.wav');
$music_b = new WavFile(dirname(__FILE__) . '/samples/b.wav');
$music_c = new WavFile(dirname(__FILE__) . '/samples/c.wav');
$music_d = new WavFile(dirname(__FILE__) . '/samples/d.wav');
$music_e = new WavFile(dirname(__FILE__) . '/samples/e.wav');
$music_f = new WavFile(dirname(__FILE__) . '/samples/f.wav');

$wav = new WavMaker(2, 44100, 16); 

$loops = 2;

while($loops>0){
    $wav->appendWav($base);

    $wav->insertSilence(0.1);    
    $wav->appendWav($base);
    $wav->insertSilence(0.1);    
    $wav->appendWav($music_d);        
    $wav->appendWav($music_c);
    $wav->insertSilence(0.4);     

	$loops--;
}

// $wav->appendWav($music_b);

$wav->insertSilence(0.2);    
$wav->appendWav($music_a);
$wav->insertSilence(0.2);    
$wav->appendWav($music_f);

$wav->save(dirname(__FILE__) . '/based.wav');
shell_exec("afplay based.wav");

?>