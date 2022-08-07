<?php

declare(strict_types=1);

namespace Mastermind\Engine;
use Mastermind\Engine\Evaluation;

class Evaluator
{
    public function evaluate(array $guessRaw, array $secretRaw): Evaluation
    {
        if($fieldCount = count($guessRaw) != count($secretRaw)) {
            throw new \Exception;
        }
        $exacts = 0;
        $misplaces = 0;
        foreach($secretRaw as $secretRawFieldIndex=>$secretRawFieldValue) {
            foreach($guessRaw as $guessRawFieldIndex=>$guessRawFieldValue) {
                if($secretRawFieldValue === $guessRawFieldValue) {
                    if($secretRawFieldIndex === $guessRawFieldIndex) {
                        $exacts++;
                    } else {
                        $misplaces++;
                    }
                    $guessRawFieldValue = 0;
                    break;
                }
            }
        }
        return new Evaluation($exacts, $misplaces);
    }
}