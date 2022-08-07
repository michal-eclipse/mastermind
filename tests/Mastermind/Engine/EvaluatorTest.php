<?php

declare(strict_types=1);

namespace Tests\Mastermind\Engine;

use PHPUnit\Framework\TestCase;
use Mastermind\Engine\Evaluator;
use Mastermind\Engine\Evaluation;

class EvaluatorTest extends TestCase
{
    private $evaluator;

    public function setUp(): void
    {
        $this->evaluator = new Evaluator();
    }

    public function testShouldCreateEmptyEvaluator(): void
    {
        // Then
        $this->assertInstanceOf(Evaluator::class, $this->evaluator);
    }

    public function testShouldEvaluateGuessCorrectly(): void
    {
        // Given
        $secret = [1, 2, 3, 4];
        $guesses = [
            [0, 0, 0, 0],
            [0, 1, 0, 0],
            [2, 1, 0, 0],
            [2, 1, 4, 0],
            [2, 1, 4, 3],
            [1, 0, 0, 0],
            [0, 2, 0, 0],
            [0, 0, 3, 0],
            [0, 0, 0, 4],
            [1, 2, 0, 0],
            [1, 2, 3, 0],
            [1, 2, 3, 4],
            [1, 3, 0, 0],
            [1, 3, 4, 0],
            [1, 3, 4, 2],
            [1, 2, 4, 3],
        ];

        $expectedEvaluation = [
            new Evaluation(0, 0),
            new Evaluation(0, 1),
            new Evaluation(0, 2),
            new Evaluation(0, 3),
            new Evaluation(0, 4),
            new Evaluation(1, 0),
            new Evaluation(1, 0),
            new Evaluation(1, 0),
            new Evaluation(1, 0),
            new Evaluation(2, 0),
            new Evaluation(3, 0),
            new Evaluation(4, 0),
            new Evaluation(1, 1),
            new Evaluation(1, 2),
            new Evaluation(1, 3),
            new Evaluation(2, 2),
        ];

      // When
      foreach($guesses as $guess) {
          $actualEvaluation[] = $this->evaluator->evaluate($guess, $secret);
      }

      // Then
      for($i = 0; $i < count($expectedEvaluation); $i++) {
          $this->assertEquals($expectedEvaluation[$i], $actualEvaluation[$i]);
      }
    }
    
}