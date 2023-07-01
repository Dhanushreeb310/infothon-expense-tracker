<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Expense Tracking System</title>
        <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

        <!-- custom css file link -->
        <!--<link rel="stylesheet" href="css/style.css">-->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root{
    --orange:#F79F1F;
    --text-color-1:#444;
    --text-color-2:#666;
    --bg-color-1:#fff;
    --bg-color-2:#eee;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);   
}
*{
    font-family: 'Nunito', sans-serif;
    margin:0; padding:0;
    box-sizing:border-box;
    text-transform: capitalize;
    outline: none; border: none;
    text-decoration: none;
    transition: all .2s linear;
}

*::selection{
    background:var(--orange);
    color:#fff;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 6rem;
    scroll-behavior: smooth;
}

body{
    background:var(--bg-color-2);
}
body.active{
    --text-color-1:#fff;
    --text-color-2:#eee;
    --bg-color-1:#333;
    --bg-color-2:#222;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.4);
}

section{
    padding:2rem 9%;
}

.heading{
    text-align:center;
    padding:2.5rem 0;
}

.heading span{
    font-size:3.5rem;
    background: rgba(255,165,0,.2);
    color:var(--orange);
    border-radius: .5rem;
    padding: .2rem 1rem;
    display:inline-block;
}

.heading span.space{
    background: none;

}


.btn{
    display:inline-block;
    margin-top: 1rem;
    background:var(--orange);
    color:#fff;
    padding:.8rem 3rem;
    border:.2rem solid var(--orange);
    cursor: pointer;
    font-size: 1.7rem;
}

.btn:hover{
    background:rgba(255,165,0,.2);
    color:var(--orange);
}

header{
    position: fixed;
    top:0; left:0; 
    right:0;
    background:#333;
    z-index:1000;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:2rem 9%;
}
header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color:#fff;
    text-transform: uppercase;
}

header .logo span{
    color:var( --orange);
}

header .navbar a{
    color:#fff;
    font-size: 2rem;
    margin:0 .8rem;
}

header .navbar a:hover{
    color:var(--orange);
}

header .icons i{
    font-size: 2.5rem;
    color:#fff;
    cursor:pointer;
    margin-right: 2rem;
}

header .icons i:hover{
    color:var(--orange);
}

#menu-bar{
    color:#fff;
    border:.1rem solid #fff;
    border-radius: .5rem;
    font-size: 3rem;
    padding:.5rem 1.2rem;
    cursor: pointer;
    display:none;
}

.home{
    min-height:100vh;
    display:flex;
    align-items: center;
    justify-content: center;
    flex-flow: column;
    position:relative;
    z-index: 0;
}

.home .content{
    text-align: center;
}

.about .box{
    padding:2rem;
    text-align:center;
    box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
    border-radius:.5rem;
}

.about .box p{
    color:var(--text-color-1);
    font-size: 1.5rem;
    padding:1rem 0;
}

.contact .row{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    align-items: center;
}

.contact .row .image{
    flex:1 1 35rem;
}

.contact .row .image img{
    width:100%;
}

.contact .row .form{
    flex:1 1 50rem;
    padding:2rem;
    box-shadow:0 1rem 2rem rgba(0,0,0,.1);
    border-radius: .5rem;
}
   
.contact .row form .inputBox{
    display: flex;
    flex-wrap:wrap;
    justify-content: space-between;
}

.contact .row form .inputBox input, .contact .row form textarea{
    width:49%;
    margin: 1rem 0;
    padding: 1rem;
    font-size: 1.7rem;
    color:#333;
    background:#f7f7f7;
    text-transform: none;
}

.contact .row form textarea{
    height:15rem;
    resize:none;
    width:100%;

}

.footer{
    background: #333;
}

.footer .box-container{
    display:flex;
    flex-wrap:wrap;
    gap:1.5rem;
}

.footer .box-container .box{
    padding: 2.5rem;
    flex:1 1 25rem;
}

.footer .box-container .box h3{
    font-size: 2.5rem;
    padding: 7rem 0;
    color:#fff;
}

.footer .box-container .box p{
    font-size: 1.5rem;
    padding: .7rem 0;
    color:#eee;
}

.footer .box-container .box a{
    display:block;
    font-size: 1.5rem;
    padding: .7rem 0;
    color:#eee;
}

.footer .box-container .box a:hover{
    color:var(--orange);
    text-decoration: underline;
}

.footer .credit{
    text-align: center;
    padding: 2rem 1rem;
    margin-top: 1rem;
    font-size: 2rem;
    font-weight: normal;
    color:#fff;
    border-top: .1rem solid rgba(255,255,255,.2);
}

.footer .credit span{
    color:var(--orange);
}

/* media queries */

@media(max-width:1200px)
{
    html{
        font-size: 55%;
        }
}

@media(max-width:991px)
{
    header{
        padding:2rem;
        }
        
    section{
        padding:2rem;
        }
}

@media(max-width:768px)
{
    #menu-bar{
        display:initial;
    }
    header .navbar{
        position: absolute;
        top:100%; right:0; left:0;
        background: #333;
        border-top: .1rem solid rgba(255,255,255,.2);
        padding:1rem 2rem;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    header .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }
    
    header .navbar a{
        display:block;
        border-radius: .5rem;
        padding:1.5rem;
        margin:1.5rem 0;
        background:#222;
}
}



.content-accordion {
  margin-top: 25px;
  margin-right: 50px;
}

.question-answer {
  width: 100%;
  border-bottom: 1px solid #e8e8e8;
}

.question {
  display: flex;
  justify-content: space-between;
}

.accordion-img {
  position: relative;
  width: 320px;
}

.title-question {
  margin: 1.4rem 0rem;
  font-size: 1.2rem;
  font-weight: 500;
  color: magenta;
}

.question-btn {
  font-size: 1.5rem;
  background: transparent;
  border-color: transparent;
  cursor: pointer;
  color:magenta;

}

.up-icon {
  display: none;
  color:magenta;
}

.answer {
  font-size: 1.2rem;
  line-height: 1.8;
  display: none;
}

.show-text .answer {
  display: block;
  color:magenta;
}

.show-text .up-icon {
  display: inline;
  color:magenta;
}

.show-text .down-icon {
  display: none;
  color:magenta;
}
@media(max-width:450px){
    html{
        font-size: 50%;
    }

    .heading span{
        font-size: 2.5rem;
    }
    
    .contact .row form .inputBox input{
        width:100%;

    }
}

        </style>

    </head>
    <body>

    <!-- header section starts-->

    <header>

        <div id="menu-bar" class="fa fa-bars"></div>

        <a href="#" class="logo"><span>T</span>rack<span>M</span>y<span>W</span>allet <i class="fas fa-wallet"></i></a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#contact">contact</a>
            <a href="#faq">FAQ</a>
         
        </nav>
        <div class="icons">
            <i class="fas fa-sun" id="theme-btn"></i>
            <a href="signin.php"><i class="fas fa-user" id="login-btn"></i></a>
              
        </div>
        
    </header>
  <!-- header section ends-->
   <!-- home section starts -->
    <section class="home" id="home">
        <div class="content">
            <img src="https://res.cloudinary.com/jerrick/image/upload/v1619050474/6080bfeaeb4782001e34fe10.png">
        </div> 
    </section>
    <!-- home section ends -->

<!--about section starts here-->
<section class="about" id="about">
    <h1 class="heading">
        <span>a</span>
        <span>b</span>
        <span>o</span>
        <span>u</span>
        <span>t</span>
</h1>
<div class="box">
    <p>Welcome to our expense tracker website! We are dedicated to providing you with a reliable and user-friendly platform to manage your finances effectively. Our goal is to simplify the process of tracking and categorizing expenses, helping you gain better control over your budget and financial goals.

        At our expense tracker website, we understand the importance of keeping track of your expenses in today's fast-paced world. Whether you're an individual, a small business owner, or managing a household budget, our platform is designed to cater to your specific needs.</p>
        
    </div>
</section>
<!--reviesection starts here-->
<!--
<section class="reviews" id="reviews">
    <h1 class="heading">
                <span>r</span>
                <span>e</span>
                <span>v</span>
                <span>i</span>
                <span>e</span>
                <span>w</span>
                <span>s</span>
    
    </h1>
<div class="swiper mySwiper reviews-slider">
   <div class="swiper-wrapper">
     <div class="swiper-slide">
      <div class="box">
      <img src="https://images.squarespace-cdn.com/content/v1/5264f7c9e4b0a3247c641860/1645676808475-MUFAINOYPRI5CDJZFZPZ/samyang-135mm-AF_07.jpg?format=1500w" alt="">
      <h3>Naomi Wu</h3>
      <p>
        This is the first time I have EVER used a travel agent as I always book stuff myself, flights, hotel tours, cruises, I usually do it all myself. This experience with TravelOnline has me thinking I will change to an agent for all my future holidays.

Thanks for an awesome, relaxing holiday.
</p>
     <div class="stars">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="far fa-star"></i>
     </div>
      </div>
  </div>
  <div class="swiper-slide">
    <div class="box">
    <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg" alt="">
    <h3>Vihaan Malhotra</h3>
    <p>
        Very happy with Beyond Borders, used this company a few times now and never had a problem.Everything is clear to understand when booking and follow up correspondence. Very attentive to responding to your emails and questions and would have no hesitation in booking a holiday again through them.</p>
   <div class="stars">
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="far fa-star"></i>
   </div>
    </div>
</div>
  <div class="swiper-slide">
    <div class="box">
    <img src="https://images.unsplash.com/photo-1530785602389-07594beb8b73?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cG9ydHJhaXRzfGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="">
    <h3>Jenna Stephen</h3>
    <p>
        Thank you for assisting us with our trip to New York. We could not fault any part of your service. Our drivers to and from airport were polite and caring and our accommodation was perfect. Quick and easy service. Would definitely book another holiday package.We had the best trip and would certainly use you again. 
   <div class="stars">
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="far fa-star"></i>
   </div>
    </div>
</div>
<div class="swiper-slide">
    <div class="box">
    <img src="https://i0.wp.com/katafilistomiou.gr/wp-content/uploads/2021/12/team1.jpg?fit=500%2C600&ssl=1" alt="">
    <h3>Xavier Thompson</h3>
    <p>
        This was the first holiday we booked online and we could not have been happier with the service we received. Any emails or phone calls were returned within 24 hours. Beyond Borders were easy to book through and easy to deal with, they helped to make our first holiday together perfect, thank you.
   </p>
        <div class="stars">
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="far fa-star"></i>
   </div>
    </div>
</div>
</div>
</div>
</section>

<!--review section ends here-->
-->
<!--contact section starts here-->

<section class="contact" id="contact">

    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>

</h1>



<div class="row">
    
       <img src="image1.png" alt="">
    
    <form action="">
     <div class="inputBox">
       <input type="text" placeholder="name">
       <input type="email" placeholder="email">
     </div>
     <div class="inputBox">
        <input type="number" placeholder="number">
        <input type="text" placeholder="subject">
      </div>
       <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
       <input type="submit" class="btn" value="send message">

    </form>
</div>

</section>

<!--contact section ends here-->

<!--frequently asked questions starts here-->
<section class="faq" id="faq">

    <h1 class="heading">
        <span>f</span>
        <span>a</span>
        <span>q</span>
</h1>
            <div class="content-accordion">
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                        What is an expense tracking system?

                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>An expense tracking system is a software or tool that helps individuals or businesses keep track of their expenses. It allows users to record and categorize their expenses, monitor spending patterns, generate reports, and manage budgets.</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                        Why should I use an expense tracking system?

                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p> Using an expense tracking system offers several benefits. It helps you gain better visibility into your spending habits, enabling you to make informed financial decisions. It simplifies expense management, reduces the chances of errors, and saves time during tax season. Additionally, it allows you to set budgets and track your progress towards financial goals.</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                        Can I use an expense tracking system for both personal and business expenses?

                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p> Yes, many expense tracking systems cater to both personal and business expenses. They allow you to create separate categories for personal and business-related expenses, making it easy to track and differentiate between the two.</p>
                    </div>
               
            </div>
       
    </div>
</section>



<!--frequently asked questions ends here-->
<!--footer section starts here-->

<section class="footer">
    <div class="box-container">

      
     <div class="box">
        <h3>quick links</h3>
        <a href="#home"><i class="fa-solid fa-link"></i>home</a>
        <a href="#about"><i class="fa-solid fa-link"></i>about</a>
        <a href="#contact"><i class="fa-solid fa-link"></i>contact</a>
        <a href="#faq"><i class="fa-solid fa-link"></i>faq</a>
       
     </div>
 
     <div class="box">
        <h3>follow us</h3>
        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i>facebook</a>
        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i>instagram</a>
        <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i>twitter</a>
       
        
    </div>

    </div>

    <h1 class="credit">created by <span>Team Web Hackers</span><br><br> <i class="fa-regular fa-copyright"></i>all rights reserved</h1>

</section>


<!--footer section ends here-->



<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!--custom js file link -->
    <script type="text/javascript">
   
let formClose = document.querySelector('#form-close');
let menu =document.querySelector('#menu-bar');
let navbar =document.querySelector('.navbar');



window.onscroll = () =>{
   
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
   
    
}

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    
});


let themeButton = document.querySelector('#theme-btn');
themeButton.onclick = () => {
    themeButton.classList.toggle('fa-moon');
    themeButton.classList.toggle('fa-sun');
  
    if (themeButton.classList.contains('fa-moon')) {
      document.body.classList.add('active');
    } else {
      document.body.classList.remove('active');
    }
  };
  const questions = document.querySelectorAll('.question-answer');

questions.forEach(function(question) {
    const btn = question.querySelector('.question-btn');
    btn.addEventListener("click", function() {
        questions.forEach(function(item) {
            if (item !== question) {
                item.classList.remove("show-text");
            }
        });
        question.classList.toggle("show-text");
    });
});

    </script>
    </body>
</html>