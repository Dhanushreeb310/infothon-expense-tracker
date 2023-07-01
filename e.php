<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
*{
    margin:0;
    padding:0;
    border:none;
    outline:none;
    box-sizing:border-box;
    font-family:"Poppins",sans-serif;

}
body{
    display:flex;
}
.sidebar{
    position:sticky;
    top:0;
    left:0;
    bottom:0;
    width:115px;
    height:100vh;
    padding:0 1.7rem;
    color:#fff;
    overflow:hidden;
    transition:all 0.5s linear;
    background:rgba(113,99,186,255);
}
.sidebar:hover{
    width:240px;
    transition:0.5s;
}
.logo
{
    height:80px;
    padding:16px;

}
.menu{
    height:88%;
    position:relative;
    list-style:none;
    padding:0;

}
.menu li{
    padding:1rem;
    margin:8px 0;
    border-radius:8px;
    transition:all 0.5s ease-in-out;
    
}
.menu li:hover,
.active{
    background:#e0e0e058;
}
.menu a{
   color:#fff;
   font-size:14px;
   text-decoration:none;
   display:flex;
   align-items:center;
   gap:1.5rem;
}

.menu a span{
    overflow:hidden;

}

.menu a i{
    font-size:1.2rem;
}

.logout{
 position:absolute;
 bottom:0;
 left:0;
 width:100%;

}

.main--content{
    position:relative;
    background:#ebe9e9;
    width:100%;
    padding:1rem;
}

.header--wrapper{
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    background:#fff;
    border-radius:10px;
    padding:10px 2rem;
    margin-bottom:1rem;
}

.insight .insight-slider{
    padding-bottom: 2rem;
}

.insight .box{
    padding:2rem;
    text-align:center;
    box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
    border-radius:.5rem;
}

.insight .box img{
    height:13rem;
    width:13rem;
    border-radius: 50%;
    object-fit: fill;
    margin-bottom: 1rem;
}

.insight .box h3{
    color:#666;
    font-size: 2.5rem;
}

.insight .box p{
    color:#444;
    font-size: 1.5rem;
    padding:1rem 0;
}
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

    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
                <a href="#insight">
                    <i class="fa fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="expensetracker.php">
                    <i class="fa fa-wallet"></i>
                    <span>Expenses</span>
                </a>
            </li>
            
            <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Financial Insights</h2>
            </div>
        </div>
    </div>
    <section class="insight" id="insight">
    <div class="swiper mySwiper insight-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
           <div class="box">
            <img src="https://img.freepik.com/premium-vector/rich-woman-throwing-dollars-person-with-money-bags_533410-729.jpg?w=2000">
            <h3>Analyze spending patterns:</h3>
         <p> Use your expense tracking data to analyze your spending patterns over time. Look for areas where you may be overspending or areas where you can potentially save money. This could include cutting back on discretionary expenses or finding ways to reduce fixed expenses.</p>
</div></div>

<div class="swiper-slide">
    <div class="box">
     <img src="https://img.freepik.com/free-vector/discount-concept-illustration_114360-1852.jpg?w=2000">
     <h3>Identify savings opportunities:</h3>
  <p>Look for opportunities to save money in your everyday expenses. This could involve comparing prices, using coupons or discount codes, opting for generic brands, or negotiating better deals on services like insurance or utilities.</p>
</div></div>
<div class="swiper-slide">
    <div class="box">
     <img src="data:image/jpeg;base64,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">
     <h3>Set Financial Goals:</h3>
  <p> Define short-term and long-term financial goals such as saving for emergencies, paying off debt, or saving for a down payment on a home. Use these goals as motivation to make smarter spending decisions and prioritize saving.</p>
</div></div>
<div class="swiper-slide">
    <div class="box">
     <img src="https://img.freepik.com/premium-photo/modern-business-finance-flat-illustration-created-with-generative-ai_115122-4983.jpg?w=360">
     <h3>Investment Opportunities:</h3>
  <p>Explore investment options to grow your wealth over time. This could include investing in stocks, bonds, mutual funds, or real estate. Educate yourself on investment strategies and consider seeking advice from a financial professional to make informed investment decisions.</p>
</div></div>
<div class="swiper-slide">
    <div class="box">
        <img src="https://img.freepik.com/premium-photo/modern-business-finance-flat-illustration-created-with-generative-ai_115122-4983.jpg?w=360">
        <h3>Regular financial check-ins</h3>
        <p>Schedule regular check-ins with your finances to review your progress, assess your budget, and make any necessary adjustments. This will help you stay accountable and make continuous improvements to your financial situation.</p>
    </div>
</div>
</div>
</div>
</section>
        
        
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

        <script type="text/javascript">
            var swiper = new Swiper(".insight-slider", {

            spaceBetween: 50,
            loop:true,
            autoplay:{
                delay:3500,
                disbleOnInteraction:false,
            },
            breakpoints:{
                640:{
                    slidesPerView: 1,
                },
                760:{
                    slidesPerView: 2,
                },
                1024:{
                    slidesPerView: 3,
                },
            }
        
        });
        </script>
    </body>
</html>