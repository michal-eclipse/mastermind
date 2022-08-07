<?php


declare(strict_types=1);

use \Mastermind\MastermindGame;
use \Mastermind\Exception\RowOutOfBoundsException;
use PHPUnit\Framework\TestCase;

class MastermindGameTest extends TestCase
{
    private $mastermindGame;

        /**
         * @return void
         */
        public function setUp(): void
        {
            $this->mastermindGame = new mastermindGame();
        }

        /**
         *  @return void
         */
        public function testShouldCreateNewGameWithNineTurns(): void
        {
            // Then
            $this->assertEquals(9, $this->mastermindGame->getTotalTurns());
        }

        /**
         *  @return void
         */
        public function testShouldCreateNewGameWithFourFieldsInEachOfTheNineRow(): void
        {
            // Then
            for($i = 0; $i < 9; $i++)
            {
                $this->assertEquals(4, count($this->mastermindGame->getRow($i)));
            }
        }
        
        /**
         *  @return void
         */
        public function testShouldThrowRowOutOfBoundsExceptionWhenTryReadNegativeRow():void
        {
            // Expect
            $this->expectException(RowOutOfBoundsException::class);
            $this->expectExceptionMessage('Row index must be between 0 and 8');

            // When
            $this->mastermindGame->getRow(-1);
        }
        
        /**
         *  @return void
         */
        public function testShouldThrowRowOutOfBoundsExceptionWhenTryReadNinthRow():void
        {
            // Expect
            $this->expectException(RowOutOfBoundsException::class);
            $this->expectExceptionMessage('Row index must be between 0 and 8');

            // When
            $this->mastermindGame->getRow(9);
        }
        
        /**
         *  @return void
         */
        public function testShouldIncreaseTurnCounterAfterSubmitGuess(): void
        {
            // Given
            $currentTurnNumber = $this->mastermindGame->getCurrentTurn();

            // When
            $this->mastermindGame->submitGuess();

            // Then
            $this->assertEquals($currentTurnNumber + 1, $this->mastermindGame->getCurrentTurn());
        }
}