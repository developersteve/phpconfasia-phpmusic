<?php

require_once 'WavFile.php';
require_once 'WavMaker.php';

//scales
$notesHZ = array(
    'a' => 440,
    'A' => 466.164,
    'b' => 493.883,
    'c' => 261.626,
    'C' => 277.183, #
    'd' => 293.665,  
    'D' => 311.127, #   
    'e' => 329.628,  
    'f' => 349.228,  
    'F' => 369.994, #    
    'g' => 391.995, 
    'G' => 415.305, #
    ' ' => 0,
);

// $song['twinkle'] = 'ccfc gcgc ccfc gcgc cgcg cgcg ccfc gcgc'; //speed 0.3
$song['darth'] = "g g g ggg e g g g ggg e g g g e b g e b g"; //speed 0.3

$notes = str_split($song['darth']);

$wav1 = new WavMaker(1, 44100, 32); 

foreach($notes as $note){
    $wav1->generateSineWav($notesHZ[$note], 0.3); 
}

$wav1->save(dirname(__FILE__) . '/temp.wav');
shell_exec("afplay temp.wav");

?>