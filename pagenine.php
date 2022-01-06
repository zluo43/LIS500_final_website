<!--page created by leah -->
<link rel="stylesheet" type="text/css" href="css-survey.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>How Classist Are You? Survery</title>
    <!-- adjust to the stylesheet wanted for whole project -->

    <!-- Importing the Google Fonts: -->
    <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans
    :wght@500&family=IBM+Plex+Serif&display=swap" rel = "stylsheet">
</head>

<?php
    //grab user id from the POST data seent from prev page
   $user_id = $_POST["user_id"];

   //store answer to prev question
   include "store-answer.php";

   //specify the question text to be displayed on this page
   $question_text = "The social class of an individual is decided on the basis of social and
   economical status, with social status being achieved through power, position, profile, and
   family background.";
?>
<body>
<form method ="post" action="pageten.php">
    <?php echo '<h1>'.$question_text.'</h1>'; ?>
    <?php echo '<p><input type="hidden" name="user_id" value="'.$user_id.'" /></p>'; ?>
    <?php echo '<p><input type="hidden" name="question" value="'.$question_text.'" /></p>'; ?>
    <p><input type="radio" name="answer" value="5" /> I Strongly Agree</p>
    <p><input type="radio" name="answer" value="4" /> I Agree</p>
    <p><input type="radio" name="answer" value="3" /> Neutral</p>
    <p><input type="radio" name="answer" value="2" /> I Disagree</p>
    <p><input type="radio" name="answer" value="1" /> I Strongly Disagree</p>
    <p><input type="submit" value="Continue" /></p>
</form>
<footer>
   <!-- user warning -->
    <p> Please answers these questions to the best of your ability, and as honestly as possible.
    We acknowledge that while taking the survey, you may experience feelings of discomfort and find
    results to be incorrect. The findings of this survey remain anonymous; please do not feel
    obligated to share your results with anyone. In combination of this, results from this survey are
    are not genuine indicator of bias, but rather a tool to help the participant understand their own
    personal judgements when it comes to classism. </p>
    <p>
    No information collected whilst taking this survey can be connected back to
    the user. A randomly generated user id is attached to your progress throughout the survey,
    however, if you leave the questionnaire prior to completion all of your answers will
    be lost. Thank you for your participation!</p>

</footer>
</body>
</html>