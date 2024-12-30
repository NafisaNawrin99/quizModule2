<?php

$questions = [
     ['question' => 'What is 2 + 2?', 'correct' => '4'],
    
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    
    ['question' => 'Who wrote "Hamlet"?','correct' => 'Shakespeare']

];              

$answers = [];
foreach ($question as $index => $question){
    echo ( $index+1) . "." . $questions['question']."\n";
    $answer[]=trim (readline("Your answer: "));
}

function evaluateQuiz( array $questions, array $answers):int{
    $score = 0;
    foreach ($question as $index => $question){
        if ($answer[index]==$question['correct']){
            $score++;

        }
    }
    return $score;
}

$score = evaluateQuiz($questions, $answers);
echo "\n Your score is $score out of ". count($question).".\n";
if ($score === count($question)){
    echo "You are a genius!\n" ;
}
else if ( $score>1){
    echo "Good Effort! \n";
}
else { echo "Try hard! \n"; }
