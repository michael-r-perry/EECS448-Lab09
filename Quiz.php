<?php
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

$score = 5;

echo "<span>Question 1: First human heart transplant operation conducted by Dr. Christiaan Barnard on Louis Washkansky, was conducted in:</span><br>";
echo "<span style='margin-left:2em'>You answered: " . $q1 . "</span><br>";
if ($q1 != "1967") {
    $score--;
    echo "<span style='margin-left:2em'>Correct answer: 1967</span><br>";
}
echo "<br><br>";

echo "<span>Question 2: Galileo was an Italian astonomer who:</span><br>";
echo "<span style='margin-left:2em'>You answered: " . $q2 . "</span><br>";
if ($q2 != "All of the above") {
    $score--;
    echo "<span style='margin-left:2em'>Correct answer: All of the above</span><br>";
}
echo "<br><br>";

echo "<span>Question 3: In the book 'Moby-Dick', who was Moby Dick?</span><br>";
echo "<span style='margin-left:2em'>You answered: " . $q3 . "</span><br>";
if ($q3 != "The whale") {
    $score--;
    echo "<span style='margin-left:2em'>Correct answer: The whale</span><br>";
}
echo "<br><br>";

echo "<span>Question 4: Which of these songs was orgininally recorded by Garth Brooks?</span><br>";
echo "<span style='margin-left:2em'>You answered: " . $q4 . "</span><br>";
if ($q4 != "Friends in Low Places") {
    $score--;
    echo "<span style='margin-left:2em'>Correct answer: Friends in Low Places</span><br>";
}
echo "<br><br>";

echo "<span>Question 5: How did Bonnie & Clyde meet their end?</span><br>";
echo "<span style='margin-left:2em'>You answered: " . $q5 . "</span><br>";
if ($q5 != "Machine gunned by law enforcement") {
    $score--;
    echo "<span style='margin-left:2em'>Correct answer: Machine gunned by law enforcement</span><br>";
}
echo "<br><br>";

echo "<span>Total answered correctly: " . $score . "/5</span><br>";
echo "<span>Percentage Grade: " . (($score / 5.0) * 100.0) . "%</span>";
?>