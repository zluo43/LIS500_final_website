<!DOCTYPE html>
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

.boxed{
    margin: auto;
    width: fit-content;
    max-width: 75%;
    padding: 1.3em;
    background-color:white;
}

.boxed:hover{
  border-color: #ff99ff;
}
</style>
    
<head>
  <meta charset="utf-8">
  <title>Code and Power Final Survey</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="c.css">
  <link href="https://fonts.googleapis.com/css?family=Muli%7CRoboto:400,300,500,700,900" rel="stylesheet">
</head>
  
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
        </ul>
    </div>
<header>

<h1 class="tag location">Group Analysis</h1>
      
</header>

<main>
    <div class="boxed">
        <p style="text-align:left">As a group, we choose to focus on classism as our topic—the prejudice against or in favor of people belonging to a particular social class. We felt that this was something we all had personal experience with, and could quantity within questions we felt were important and/or revealing. We took some inspiration from the Week 6 course material, where we discussed hegemony. We discovered from our research that wealth and opportunities that arise from financial status are embedded in public culture and social systems, so much so that most don’t even blink an eye at the blatant advantage those with many automatically acquire. 
        </p>
        <p style="text-align:left">The one resource that really inspired us to start this conversation was Algorithms of Oppression by Safiya Noble. Noble specifically draws our attention to the availability of information on page 153, remarking on how it moves from the public sphere to private control by corporations, creating a critical juncture in the quality of information available and the public's ability to claim true fact. This is the result of the American economy being dominated by a small number of giant private companies that set the national agenda. In other words, they relay information that benefits their own motives, leaving the public without the full story or even with outright lies. From this conversation, we realized how often we overlook things or advantages others have, or may not have, in our everyday lives. We wanted to expose these biases, to help many see where the unfair advantages lie in hopes to eliminate personal affections towards those who have a greater financial status than others. 
        </p>
        <p style="text-align:left">The central designing idea of our site was to convey a sense of well-developed technology to our audiences, in order to help them understand our theme: Tech and Classism. Accordingly, we applied black, white, grey, as well as yellow and blue, as a color scheme. We divided our content into five major parts, including Home, About Us, Results, Group Analysis, and Individual Reflections, and put them on the right corner of the main page to better navigate our audience through the site. On the home page, we put the survey background information and goals above the “begin survey” button to inform our audience what they might need to know before taking the test. After clicking the “begin survey” button, our audiences are asked several questions regarding classism in tech. Once participants finish the survey, they are then redirected to the results page, where the entered data is displayed through a dynamic chart and bar graph. Participants are able to read their own results and easily compare them to the average results of all survey takers. 
        </p>
        <p style="text-align:left">What we ultimately hoped to accomplish through this survey was to give people a tool for self-reflection on the classist biases they may hold unconsciously. We did this by providing questions that served as examples of the economic privilege that might be regular experiences in some survey-takers’ lives but not all. For example, one of the survey statements we had participants answer was, ”My performance in this class and others has been affected due to my lack of access to high-speed internet.” Our goal with statement questions like these was to gain more insight into what experiences are pretty universal among college students (our main audience demographic) and what are less acknowledged, yet still experienced by this group. Overall, what we found through our results was that people tended to agree with all of the statements, meaning that they were largely able to relate to classist situations that they may have experienced themselves or unconsciously held a classist mindset at some point throughout their life. 
        </p>
    </div>
</main>

<footer>
    <p class="copyright">Copyright 2021, Group 4 (Leah, Julia, Sylvia, & Calvin)</p>
</footer>

</body>

</html>