<!doctype html>
<html lang="en">
<script src="app.js">
</script>
<style>
.dropbtn{
padding: 0;
border: none;
background: none;
cursor: pointer;
color:#0499ff;
width: 100%;
font-weight: 700;
list-style-type: none;
margin: 0 auto;
padding: 0;
font-size: 16px;
font-family: 'Roboto', sans-serif;
text-align: -webkit-match-parent;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

.dropbtn:hover{
  color:white;
}
.show {display: block;}
</style>
<head>
  <meta charset="utf-8">
  <title>Code and Power Final Survey</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="c.css">
  <link href="https://fonts.googleapis.com/css?family=Muli%7CRoboto:400,300,500,700,900" rel="stylesheet"></head>
  <body>   
    <?php

    // Created by: Reginold Royston and Mariah Knowles
    // Generate a random number to use to identify the visitor throughout the survey
    $user_id = rand(1000000, 9999999);
    
    
    ?>
 
    <div class="main-nav">
        <ul class="nav">
          <li class="name">Code and Power: Classism in Tech</li>
          <li><a href="index.php">Home</a></li>
          <li>
            
            <div class="dropdown">
              <button onclick="myFunction()" class="dropbtn">About Us</button>
              <div id="myDropdown" class="dropdown-content">
                <a href="http://juliaandleah.raroyston.org/">Julia Lackey</a>
                <a href="http://grouptwo.raroyston.org/">Sylvia Yan</a>
                <a href="http://juliaandleah.raroyston.org/">Leah Theusch</a>
                <a href="http://wyattandcalvin.raroyston.org/">Calvin Luo</a>
              </div>
            </div>
          
          
          </li>

          <li><a href="results.php">Results</a></li>
          <li><a href="groupanalysis.php">Group Analysis</a></li>
          <li><a href="individualreflections.php">Individual Reflections</a></li>
          

          <!-- dropdown list; code from W3chool https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_js_dropdown-->

        </ul>
    </div>

    <header>

      <h1 class="tag location">Welcome to Our Survey About Classism</h1>
      
     
    </header>

    <main class="flex">
      <div class="card">
        <h2>Background</h2>
        <p>This survey attempts to track and display users attitudes or stereotypes
        that affect their understanding, actions, and decisions in an 
        unconscious manner revolving around social classes.</p>
        <p>This test is in no way an all-encompassing representation of an 
        individual's beliefs.</p>
      </div> 

      <div class="card">
        <h2>Goals</h2>
        <p>This test measures the users attitude and beliefs that many might be 
        unwilling or unable to report. We aim to help uncover some biases one 
        may not already recognize.</p>
        <p>We hope that the user is honest and open, and also understands that the
        data they provide is in no way connected back to them. Thank you!</p>
      </div> 


、    


    </main>
    <!-- <div>
      <button class='button' type="button" onclick="surveypage()">Begin Survey</button>
    </div>
      -->
      <div>
        <form method="post" action="pageone.php">
          <?php echo '<input type="hidden" name="user_id" value="'.$user_id.'" />'; ?>
          <p><input class='button' type="submit" value="Begin Survey" /></p>
        </form>
      </div>
      

    <footer>
      <p>We acknowledge that in taking the survey, you may experience discomfort and find results objectionable and/or disagree. Results remain anonymous and please do not feel obligated to share your results with anyone. Results from this survey are also not indicative of bias, and are not a lie-detector for classism. Rather, the primary experience of the survey is 
        to help people understand their own thinking in the context of classism.</p>
      <p class="copyright">Copyright 2021, Group 4 (Leah, Julia, Sylvia, & Calvin)</p>
    </footer>
  </body>
  </html>


