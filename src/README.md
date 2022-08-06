
# Test Driven Development Exercise in PHP
## Project:
### Mastermind game
## Project Specification:
1. there are 8 turns in the game
   1. in each turn player tries to guess the variation of colours.
      1. there are 8 colours available to choose from.
      2. there are 4 fields in each turn to assign colors to.
      3. initially all of the 4 fields has no colours.
      4. the field can be left with no color, so there are total of 9 values (colors) to assign to each of the fields.

2. there is player's guessing result shown after each turn
   1. the guessing result consists of 4 fields
   2. the guessing result field takes 1 of 3 colors: no-color, white, black
   3. before end of the turn and result evaluation all of the 4 fields has no colours.
   4. between each turn the result evaluation algorithm is run:
      1. technically it iterates over the secret and counts searches in the guessing sequence. 
      2. the guessing result field sequence doesn't refer to the secret's sequence directly, instead it keeps it's own order:
         1. the guessing result first - starting from the left - shows in black color if there's any field's color guessed that is on the correct place. 
         2. next if there are no exact guesses, if one of the field's color in guess is present in the secret but on the different place the guessing result adds white field to the guessing result field sequence.
         3. if no field's color is guessed the guessing result shows 4 fields with no color (empty).
         4. there can't be empty fields either at the beginning or in between of the result sequence fields.
3. if by the end of the 8th turn result is not guessed, player looses the game, else the game is won.

