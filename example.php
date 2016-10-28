<?php

require_once 'WavFile.php';
require_once 'WavMaker.php';

// //scales
// $notesHZ = array(
//     'a' => 440,
//     'A' => 466.164,
//     'b' => 493.883,
//     'c' => 523.251,
//     'C' => 554.365, #
//     'd' => 587.33,  
//     'D' => 622.254, #   
//     'e' => 659.255,  
//     'f' => 698.456,  
//     'F' => 739.989, #    
//     'g' => 783.991, 
//     'G' => 830.609, #
//     ' ' => 0,
// );

// $song['mary'] = 'bagabbba a abdd bagabbba a abdd';
// $song['darth'] = "g g g ggg e g g g ggg e g g g e b g e b g ddd e b g e b ggg G g f f e d e g c"; //speed 0.3

// $notes = str_split($song['darth']);

// $wav1 = new WavMaker(1, 44100, 32); 

// foreach($notes as $note){
//     $wav1->generateSineWav($notesHZ[$note], 0.3); 
// }

// $wav1->save(dirname(__FILE__) . '/temp.wav');
// shell_exec("afplay temp.wav");

// $wav = new WavMaker(2, 44100, 32);

// $wav->generateSquareWave(20.813, 0.2);

// $val = 30;
// $timing = 0.2;
// $bpm = 1;
// $loops = 5;

// while($loops>0){

//     $wav1->filter(
//         array(
//             'wav' => $wav2, 
//             WavFile::FILTER_MIX => array(
//                 'loop' => true,
//                 'numBlocks' => null
//             ),
//             WavFile::FILTER_NORMALIZE => 0.6,
//             WavFile::FILTER_DEGRADE => 0.9,
//         ),
//         0, 
//         null                                                       
//     );

//     $wav->generateSquareWave($val, $timing);     // a
//     $wav->insertSilence($bpm);
//     $loops--;

// }  

// $wav->save(dirname(__FILE__) . '/temp.wav');
// shell_exec("afplay temp.wav");

// $wav1 = new WavMaker(1, 44100, 32); 
// $wav1->generateSineWav(783.991, 1); 

// $wav1 = new WavMaker(2, 44100, 32); 
// $wav1->generateSquareWave(40.991, 0.2); 

// $wav1->save(dirname(__FILE__) . '/wav1.wav');

// $wav2 = new WavMaker(2, 44100, 32); 
// $wav2->generateSquareWave(20.991, 0.2); 

// $wav2->save(dirname(__FILE__) . '/wav2.wav');

// $wav1 = new WavFile(dirname(__FILE__) . '/wav2.wav');
// $wav2 = new WavFile(dirname(__FILE__) . '/out.wav');

//     $wav1->filter(
//         array(
//             'wav' => $wav2, 
//             WavFile::FILTER_MIX => array(
//                 'loop' => true,
//                 'numBlocks' => null
//             ),
//             WavFile::FILTER_NORMALIZE => 0.6,
//             WavFile::FILTER_DEGRADE => 0.9,
//         ),
//         0, 
//         null                                                       
//     );

// $wav1->mergeWav($wav2);

// $wav1->save(dirname(__FILE__) . '/merged.wav');

// shell_exec("afplay merged.wav");

// $wav2 = new WavFile(dirname(__FILE__) . '/wav1.wav');

// $wav1 = new WavMaker(1, 44100, 32); 
// $wav1->generateSquareWave(400.991, 1); 
// $wav1->filter(
//     array(
//         'wav' => $wav2, 
//         WavFile::FILTER_MIX => array(
//             'loop' => true
//         ),
//         WavFile::FILTER_NORMALIZE => 0.6,
//         WavFile::FILTER_DEGRADE => 0.9,
//         WavFile::FILTER_VOLUME => 1.0
//     ),
//     0, 
//     null                                                       
// );

// $wav1->save(dirname(__FILE__) . '/temp.wav');
// shell_exec("afplay temp.wav");



// $notes = str_split($song['twinkle']);
// foreach($notes as $note){
//     shell_exec("afplay wav/".$note.".wav");

// }

// maryHad('g');
// noiseTest();
// sineTest();
// squareTest();
// sineWave();
// mergeWavs();
// appendWavs();

function playsong($tune){

}


function maryHad($note)
{
    $wav = new WavMaker(16, 44100, 32);

    // if($note=='a') $wav->generateSineWav(440, 0.4);     // a
    // if($note=='b') $wav->generateSineWav(493.883, 0.4); // b
    // if($note=='c') $wav->generateSineWav(523.251, 0.4); // c  
    // if($note=='d') $wav->generateSineWav(587.330, 0.4); // d
    // if($note=='e') $wav->generateSineWav(659.255, 0.4); // e    
    // if($note=='f') $wav->generateSineWav(698.456, 0.4); // f
    // if($note=='g') $wav->generateSineWav(783.991, 0.4); // g

    $val = 25;
    $timing = 0.05;
    $bpm = 0.5;
    $loops = 5;

    while($loops>0){

        // $wav->generateSineWav($val/2, $timing);     // a
        // $wav->insertSilence($bpm);    
        $wav->generateSquareWave($val, $timing);     // a
        // $wav->insertSilence($bpm);
        $loops--;


    }    

    // $wav->generateSineWav(493.883, 0.4); // b
    // $wav->generateSineWav(493.883, 0.4); // b
    // $wav->generateSineWav(493.883, 0.8); // b
    // $wav->generateSineWav(440, 0.4);     // a  
    // $wav->insertSilence(0.05);
    // $wav->generateSineWav(440, 0.4);     // a
    // $wav->insertSilence(0.05);
    // $wav->generateSineWav(440, 0.8);     // a
    // $wav->generateSineWav(493.883, 0.4); // b
    // $wav->generateSineWav(587.330);      // d

    // $wav->save(dirname(__FILE__) . '/wav/'.$note.'.wav');

    $wav->save(dirname(__FILE__) . '/temp.wav');

    $wav2 = new WavFile('/temp.wav');

    $wav2->filter(
        array(
            WavFile::FILTER_MIX => array(
                'loop' => true,
                'blockOffset' => 0,
                'numBlocks' => null
            ),
            WavFile::FILTER_NORMALIZE => 0.6,
            WavFile::FILTER_DEGRADE => 0.9,
            WavFile::FILTER_VOLUME => 1.0
        ),
        0, 
        null                                                       
    );


    shell_exec("afplay temp.wav");

}

// function sineTest()
// {
//     // generate 3 second sine waves in multiple bit and sample rates
//     $sps = array(8000, 11025, 22050, 44100);
//     $bps = array(8, 16, 24);

//     foreach($sps as $samplesPerSec) {
//         foreach($bps as $bitsPerSample) {
//             $wav = new WavMaker(2, $samplesPerSec, $bitsPerSample);
//             $wav->generateSineWav(329.628, 3);

//             $wav->save(dirname(__FILE__) . '/wavs/sinetest-2-' . $samplesPerSec . '-' . $bitsPerSample . '.wav');
//         }
//     }

//     echo "sineTest() completed.\n";
// }

// function squareTest()
// {
//     $sps = array(8000, 11025, 22050, 44100);
//     $bps = array(8, 16, 24);

//     foreach($sps as $samplesPerSec) {
//         foreach($bps as $bitsPerSample) {
//             $wav = new WavMaker(1, $samplesPerSec, $bitsPerSample);
//             $wav->generateSquareWave(130.813, 3);

//             $wav->save(dirname(__FILE__) . '/wavs/squaretest-1-' . $samplesPerSec . '-' . $bitsPerSample . '.wav');
//         }
//     }

//     echo "squareTest completed.\n";
// }

// function noiseTest()
// {
//     $sps = array(8000, 44100);
//     $bps = array(8, 16);

//     foreach($sps as $samplesPerSec) {
//         foreach($bps as $bitsPerSample) {
//             $wav = new WavMaker(1, $samplesPerSec, $bitsPerSample);
//             $wav->generateNoise(3);

//             $wav->save(dirname(__FILE__) . '/wavs/noise-1-' . $samplesPerSec . '-' . $bitsPerSample . '.wav');
//         }
//     }

//     echo "noiseTest() completed.\n";
// }

// function sineWave()
// {
//     $wav = new WavMaker(1, 44100, 16); // 2 channel, 44100 samples/sec, 16 bits/sample
//     $wav->generateSineWav(659.255, 3); // E5 for 2 seconds

//     $wav->save(dirname(__FILE__) . '/wavs/sine.wav');

//     echo "sineWave() completed\n";
// }

// function appendWavs()
// {
//     $numChannels = 1;
//     $sampleRate  = 11025;
//     $bpSample    = 24;

//     $wav      = new WavFile($numChannels, $sampleRate, $bpSample);
//     $sineWave = new WavMaker($numChannels, $sampleRate, $bpSample);
//     $sqreWave = new WavMaker($numChannels, $sampleRate, $bpSample);

//     $sineWave->generateSineWav(880, 2.5);
//     $sqreWave->generateSquareWave(880, 2.5);

//     $wav->appendWav($sineWave);
//     $wav->insertSilence();
//     $wav->appendWav($sqreWave);

//     $wav->save(dirname(__FILE__) . '/wavs/appended.wav');

//     echo "appendWavs() completed.\n";
// }
