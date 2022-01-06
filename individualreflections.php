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

<h1 class="tag location">Individual Reflections</h1>
      
</header>

<main>
<div class="boxed">

<h2><center>Julia Lackey</center></h2>

<p style="text-align:left"> For this project, I took on a lot of the initial coordinating and planning out the work. I brainstormed survey topic ideas with Leah and together we came up with classism as it relates to the tech industry and society in general—which Calvin and Sylvia ended up liking, as well. We picked this ultimately because it was less talked about in our course material, but still nonetheless an important aspect of society that was interesting to dive into more in-depth. In terms of my contribution to the website itself, I came up with some of the written content—about half of the survey questions and the general explanation of the survey results. I also created the results, group analysis, and individual reflections pages out of the format and styling that Calvin and Sylvia put together. Overall, I feel that our group worked well together and we were able to get the website done without running into too many problems along the way.
</p>
<p style="text-align:left"> This course was my first time working in remote-paired programming sessions (or any type of programming sessions for that matter). So, it was interesting to figure out how to navigate that in general and with differing group sizes. It felt much easier to do for this project because I was able to work out pretty much all of my initial road-blocks and challenges with the first paired website project. It seems that the best way to approach these projects is to make a clear plan of who is doing what, have all group members upload their contributions to BlueHost as they complete them, and keep in contact with your group as edits are made to avoid duplications or errors.
</p>
<p style="text-align:left"> As someone who was able to succeed with very little prior programming experience, I would definitely recommend this course to someone who is looking to develop their programming skillset. I really appreciate that this course enabled me to build up a solid foundational knowledge of programming that I did not have before, and even expand my web design skills. Furthermore, I like that this course integrated topics of racism and power structures in the tech industry into our learning of programming concepts. This made the material very relevant to our lives today and in the future, and made me a more aware and socially-conscious person as a result. 
</p>
<p style="text-align:left"> I especially liked the course material that focused on the meritocratic nature of the tech industry and detailed the added hoops that women and POC must jump through to acquire a career in that industry. This helped give me a more well-rounded view of the deep issues within tech and what are specific areas that should be addressed further. It was also nice that we were able to talk through all of this material with our classmates so that we could get a more diverse perspective on the topics discussed throughout the course. Overall, I really enjoyed this course. It has definitely peaked my interest in programming and has encouraged me to continue seeking out other similar classes in the future.
</p>

<h2><center>Leah Theusch</center></h2>

<p style="text-align:left"> My role for this project was to come up with a lot of the written content.
    I wrote the questions, and the blurb on the index page that explains what our group was hoping to achieve
    with this project. I also put together all of the question pages, but did not design the stylesheets.
    Julia and I both brainstormed which direction we wanted this project to go, and we ended up our idea with
    the others. We wanted to focus on classism because we felt that it was a topic everyone has a personal connection
    to, and we would be able to get a deeper analysis centered around one's own individual biases.
</p>
<p style="text-align:left"> When writing the questions for this assignment, I wanted to really give a good mix of statements that
    didn’t try to guide the user to a seemingly right answer. I really wanted genuine reactions and answers, and
    I think that from the feedback that we have achieved that. We also wanted people to recognize that having wealth
    isn’t inherently bad or selfish, but what one does with their financial status is what really defines their
    personal biases or discriminatory practices.
</p>
<p style="text-align:left"> I like pair-programming as a concept, and think that it works most of the time. I have had others classes with big
    coding assignments that have ran smoothly, and others that have been complete nightmares. This class has been
    relatively easy for collaboration; the only criticism I have is that it was sometimes difficult to upload to
    BlueHost, and things have gotten deleted or changed that were not intended to. I think pair-programming works
    best in pairs, not in groups. The more cooks there are in the kitchen, the harder it is to make sure everything
    cohesively operates together in the way one wants it to.
</p>
<p style="text-align:left"> My favorite part about this course were the articles that were brought up, whether for the weekly material or in
    the discussions that other students provided. I thought it was really helpful to see what other people went through,
    so that us as students could deduce what exactly the problems are. This exposure is vital, for we are the next
    generation to influence the workplace, and the ones who will have to take charge in righting these wrongs.
    I also liked seeing what my classmates related to, and which articles they thought we would enjoy. These materials
    helped me see how others may perceive the topics we’ve discussed, so that I would not just focus on my opinion.
</p>
<p style="text-align:left"> Overall, I really enjoyed this course. I think the material we covered is really important and eye-opening,
    especially for someone who is going into the tech industry. This was my first course that had elements of
    web design, and I really appreciated getting to know the basics in the way we did. I thought we also had
    adequate amounts of time to get everything done that we needed too. In general, I would definitely recommend
    this course to people I know who are looking to learn more about the tech industry, or who are looking for ways
    to expand their programming repertoire.
</p>

<h2><center>Sylvia Yan</center></h2>

<p style="text-align:left"> LIS500 is not my first online course, but it provides me with the most instructive and illuminating project experience. 
By reading a lot of material on code and race or gender issues, completing different types of programming assignments, and working with different groups, 
I learned about the humanistic and ethical issues behind technological development that deserve attention from multiple dimensions.
</p>
<p style="text-align:left"> First, in the first half of the semester, I learned about some important topics in code and ethics. 
One that really struck me was the discussion about meritocracy in the tech world. Meritocracy does not necessarily guarantee absolute fairness,
but rather an even distribution of voice to everyone. Regardless of ethnicity and gender, it is important to be not only
a screw but also a pillar in the tech community.
</p>
<p style="text-align:left"> After the basic knowledge of code and ethics, we started to use the code to make our own website, 
in this process I learned to write PHP, CSS, HTML and other types of code, 
and started to change from a person who knows nothing about code to a person who knows some basic related skills.
</p>
<p style="text-align:left"> But aside from the above, what I would most like to discuss is the experience of each group assignment. 
I spent time in a total of two groups. I did Assignment 2 with the first group, and the final project with the second group, 
and my group members were all from different countries, some from India, some from China, and the rest, even though they were all Americans, 
were from different regions. They were all studying different majors, from arts to science. 
I gained a lot of new insights from working with the different group members. I’m glad that this course provides me with such an opportunity to diversify my thinking. 
Even though we worked remotely, I can still feel that everyone has their own acumen on the ethnic issues. 
</p>
<p style="text-align:left"> In the final project, I was tasked with designing the CSS for our website, specifically the survey and results sections. 
By creating the CSS, I was able to convey a unified, harmonious and technological feel to the audience. I was also responsible for writing the group analysis, 
and since I was responsible for the css design, I wrote the site design section mainly for the group analysis. By explaining the functions of each section, 
my part was able to effectively explain as well as navigate the composition and formation of our website to the audience.
</p>


<h2><center>Calvin Luo</center></h2>

<p style="text-align:left">My role in the final project is to create and style the landing page and results page of our websites. I just went with a design that I like personally, and make sure that it is clean, user-friendly and suitable for a survey website. The general idea is to have a distinct navigation bar so that people can easily click into any part of the website. I also linked each group member’s first assignment website in the About US section for people who wants to know us more. 
</p>
<p style="text-align:left">
Code and Power is a really interesting class. I like the way it is taught online because a lot discussions are requested. This means that students are actively participating despite being purely online.
</p>
<p style="text-align:left">
Topics covered in this class are very educational for me. Bias is ubiquitous on the internet. Before taking this class, I have never taken it seriously. Now I know that I definitely should, and I begin to see where the problems are all coming from possibly. Since becoming a web-developer is one of my career goals in the future, I’m glad that I took this class and I will keep in mind the principles I have learned in this class if I became an developer.
</p>

<p style="text-align:left">
Online learning and pair-programming isn’t a bad idea to me. I like studying online. I do a lot of online studying even before COVID. Also, for most of the CS classes, pair-programming is very common.
Therefore, I have no problem with the method, and I think it actually improves learning experience since people can learn a lot from each other through collaboration.
My favorite part of the class is that students have to make their own discussion videos every week and comment on others. This is a great way to interact with and learn from others via online platform. I hope my other online classes could engage students in this way. 
</p>
<p style="text-align:left">Overall, I like how this class allows me to practice the knowledge I learned throughout online lectures by building a survey website that uses a database we created on our own.

</p>

</div>
</main>

<footer>
    <p class="copyright">Copyright 2021, Group 4 (Leah, Julia, Sylvia, & Calvin)</p>
</footer>
    
</body>

</html>