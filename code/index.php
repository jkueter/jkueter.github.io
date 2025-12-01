<!DOCTYPE html>
<html lang="en-US">
<head>

<!--

Title: Dr. Jennifer Kueter
Use: practice
Author: Jennifer Kueter
School/Term: Mizzou 2025
Developed: 7/16/25
Tested: 
-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dr. Jennifer Kueter</title>

               <link rel="stylesheet" href="style.css">
               <link rel="stylesheet" href="nav3.css">
               <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<style>
#hero {
    width: 100%;
    min-height: 100vh; /* Use min-height instead of fixed height */
    background-image: url(mathtalk.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: left center;
    display: flex; /* So we can center content vertically */
    align-items: center;
    justify-content: center;
    color: brown;
    font-weight: 300;
}
 .hero-container{
    width: 95%;
    height: 80%; 
    max-width: 1300px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
        }
#intro {
    font-size: 2.3rem;
    margin-bottom: 1rem;
    color: teal;
    font-family: Arial, Helvetica, sans-serif
    }
#meet {
    color: #6c3eeb;
    font-size: 1.8rem;
    margin-bottom: 1.5rem;
    }
    #herocontent {
    color: #5b5959;
    font-size: 1.2rem;
    max-width: 45%;
    }
 #herobutton {
        text-decoration: none;
        display: inline-block;
        background-color: brown;
        border-radius: 10px;
        font-size: 1.5rem;
        padding: .8em;
        color: #f3f3c2;
    
 }
@media screen and (max-width: 786px) {
    #intro {
        font-size: 1.5rem;
    }
     #hero {
    background-position: 40% center;
}
}
</style>
</head>

<body>
   <?php include "header.html" ?>

<main>
    <section id="hero">
        <div class="hero-container">
            <div class="heroinfo"> 
                <h1 id="intro">Meet Dr. Jennifer Kueter</h1>
                <p id="herocontent"> After almost 30 years of teaching in elementary school, I retired and thought I was
                    ready to leave education.  But I was wrong!  I still have a passion and desire to improve education
                not only for the students who deserve the best learning environment possible, but also for the teachers
            who have dedicated their lives to make a difference. </p>
                 <h2 id="meet">Come explore my passions!</h2>
                <a id="herobutton" href="passions.html">Click Me</a>
            </div>
    </div>
    </section>
</main>
   <?php include "footer.html" ?>
</body>
</html>