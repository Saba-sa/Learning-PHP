<?php
 
$quiz = [
  ["q" => "What is 2+2?", "options" => ["2","3","4","5"], "a" => 2],
  ["q" => "Capital of Pakistan?", "options" => ["Karachi","Islamabad","Lahore"], "a" => 1],
  ["q" => "Which language runs in a web browser?", "options" => ["Java","C","Python","JavaScript"], "a" => 3]
];

$current = $_POST['current'] ?? 0;
$score = $_POST['score'] ?? 0;

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = $_POST['answer'] ?? null;
    if ($answer !== null && $answer == $quiz[$current]['a']) {
        $score++;
    }
    $current++;
}

 if ($current < count($quiz)) {
    echo "<h2>Question " . ($current + 1) . "</h2>";
    echo "<form method='post'>";
    echo "<p>"
     . $quiz[$current]['q'] . "</p>";

    foreach ($quiz[$current]['options'] as $index => $option) {
        echo "<label><input type='radio' name='answer' value='$index'> $option</label><br>";
    }

    echo "<input type='hidden' name='current' value='$current'>";
    echo "<input type='hidden' name='score' value='$score'>";
    echo "<button type='submit'>Next</button>";
    echo "</form>";
} else {
    echo "<h2>Quiz Finished!</h2>";
    echo "<p>Your Score: $score / " . count($quiz) . "</p>";
}
?>