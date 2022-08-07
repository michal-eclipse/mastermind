<?php

declare(strict_types=1);

namespace Tests\Mastermind\Engine;

use PHPUnit\Framework\TestCase;
use Mastermind\Engine\Evaluator;

class EvaluationTest extends TestCase
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
    
}