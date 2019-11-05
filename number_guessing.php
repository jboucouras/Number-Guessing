<?php
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "We are going to play a game! We are thinking of a number between 1 and 10. Try to guess it, the game will repeat 10 times. When it is completely finished, we will tell you how you did overall!";

function guessNumber()
{
  global $guess_high, $guess_low, $correct_guesses, $play_count;
  $play_count++;
  $rand_num = rand(1,10);
  echo "\nGo ahead and make your guess.\n";
  $user_guess = readline(">> ");
  $user_guess = intval($user_guess);
  echo "We are currently on round $play_count.\n The number we were thinking of was $rand_num.\n You guessed $user_guess.\n";
  if ($user_guess === $rand_num)
  {
    $correct_guesses++;
  } 
  
  if ($user_guess > $rand_num)
  {
    $guess_high++;
  } 
  
  if ($user_guess < $rand_num)
  {
    $guess_low++;
  }
}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();

$correct_percent = $correct_guesses / $play_count;
echo "\nYou guessed correctly $correct_percent% of the time.";
if ($guess_high > $guess_low)
{
  echo "Most of your incorrect guesses were because you guessed too high.";
} elseif ($guess_high < $guess_low)
{
  echo "Most of your incorrect guesses were because you guessed too low.";
}
