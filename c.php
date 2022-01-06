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
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Muli%7CRoboto:400,300,500,700,900" rel="stylesheet"></head>
  <body>   
    <!-- <?php

    // Created by: Reginold Royston and Mariah Knowles
    // Generate a random number to use to identify the visitor throughout the survey
    $user_id = rand(1000000, 9999999);
    
    
    ?> -->
 
    <div class="main-nav">
        <ul class="nav">
          <li class="name">Code and Power: Classism in Tech</li>
          <li><a href="index.html">Home</a></li>
          <li>
            
            <div class="dropdown">
              <button onclick="myFunction()" class="dropbtn">About Us</button>
              <div id="myDropdown" class="dropdown-content">
                <a href="#">Julia Lackey</a>
                <a href="#about">Sylvia Yan</a>
                <a href="#contact">Leah Theusch</a>
                <a href="#contact">Calvin Luo</a>
              </div>
            </div>
          
          
          </li>


          <li><a href="#">Resources</a></li>
          <li><a href="#">Group Analysis</a></li>
          <li><a href="#">Individual Reflection</a></li>
          

          <!-- dropdown list; code from W3chool https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_js_dropdown-->

        </ul>
    </div>

    <header>

      <h1 class="tag location">Welcome to Our Survey About Classism</h1>
      
     
    </header>

    <main class="flex">
      <div class="card">
        <h2>Background</h2>
        <p>Something about the test? What is this test</p>
        <p>More</p>
      </div> 

      <div class="card">
        <h2>Goals</h2>
        <p>If we have anything to write down here? What is the goal of this survey?</p>
      </div> 


、    


    </main>
    <!-- <div>
      <button class='button' type="button" onclick="surveypage()">Begin Survey</button>
    </div>
      -->
      <div>
        <form method="post" action="pageone.html">
          <?php echo '<input type="hidden" name="user_id" value="'.$user_id.'" />'; ?>
          <p><input type="submit" value="Begin Survey" /></p>
        </form>
      </div>
      

    <footer>
      <p>We acknowledge that in taking the survey, you may experience discomfort and find results objectionable and/or disagree. Results remain anonymous and please do not feel obligated to share your results with anyone. Results from this survey are also not indicative of bias, and are not a lie-detector for classism. Rather, the primary experience of the survey is 
        to help people understand their own thinking in the context of classism.</p>
      <p class="copyright">Copyright 2021, Group 4 (individual names?)</p>
    </footer>
  </body>
  </html>


