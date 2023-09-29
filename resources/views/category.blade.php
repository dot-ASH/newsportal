<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/navbar.css')}}" rel="stylesheet">
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('css/category.css')}}" rel="stylesheet">
    <title>Category</title>
</head>
<body>
    <nav class="navbar">
        <div>
            <h1 class="logo">WebWire Tribune</h1>
        </div>
        <div class="nav-item">
            <li><a href="/homepage">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="/Category">Category</a></li>
            <li><a href="#">Contact</a></li>
        </div>
        <div class="navbar-side">
            <li><a href="#">login</a></li>
            <li><a href="#">Registration</a></li>
            <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i></i></a></li>
        </div>
    </nav>

    <header>
        <h1>Local</h1>
    </header>
    <section class="news-container">
      
        <article class="news-item">
            <img src ="{{asset("/img/eu.jpg")}}" alt="Article 1 Image">
            <div class="news-info">            
                <h2>Observers may help add credence to fairness of polls, CEC says in reply to EU</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget dolor in urna varius faucibus.</p>
                <a href="article1.html">Read More</a>
            </div>
        </article>
        <article class="news-item">
            <img src ="{{asset("/img/kamal.jpg")}}" alt="Article 2 Image">
            <div class="news-info">
                <h2>Don't know who are facing US visa restrictions: home minister</h2>
                <p>Home Minister Asaduzzaman Khan today said he did not know anything a bout Bangladeshis facing US
                     visa restrictions. They [US] declared visa policy and we heard </p>
                <a href="article2.html">Read More</a>
            </div>
        </article>
        <article class="news-item">
            <img src ="{{asset("/img/BTMEA.jpg")}}" alt="Article 3 Image">
            <div class="news-info">
                <h2>BTMA re-elects Mohammad Ali Khokon as president</h2>
                <p>The president, three vice-presidents and 23 directors were elected unopposed.</p>
                <a href="article2.html">Read More</a>
            </div>
      </article>
        <!-- Add more news articles here -->
    </section>

    <header>
      <h1>Business</h1>
    </header>
    <section class="news-container">
    
      <article class="news-item">
        <img src ="{{asset("/img/grameenphone.jpg")}}" alt="Article 1 Image">
          <div class="news-info">
            <h2>Grameenphone launches regional design bootcamp ‘Jelay Jelay Smart Uddyokta’</h2>
            <p>Grameenphone's flagship startup innovation platform GP Accelerator has launched "Jelay Jelay Smart
                 Uddyokta", a regional design bootcamp with the endeavour to unleash the potential of youth 
                 ideapreneurs.
            </p>
            <a href="article1.html">Read More</a>
          </div> 
      </article>
      <article class="news-item">
          <img src="article2.jpg" alt="Article 2 Image">
          <h2>Article Title 2</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget           dolor in urna varius faucibus...</p>
          <a href="article2.html">Read More</a>
      </article>
      <article class="news-item">
        <img src="article2.jpg" alt="Article 2 Image">
        <h2>Article Title 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget          dolor in urna varius faucibus...</p>
        <a href="article2.html">Read More</a>
    </article>
      <!-- Add more news articles here -->
  </section>
  <header>
    <h1>Sports</h1>
  </header>
<section class="news-container">
  
    <article class="news-item">
        <img src="article1.jpg" alt="Article 1 Image">
        <h2>Article Title 1</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget          dolor in urna varius faucibus...</p>
        <a href="article1.html">Read More</a>
    </article>
    <article class="news-item">
        <img src="article2.jpg" alt="Article 2 Image">
        <h2>Article Title 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget          dolor in urna varius faucibus...</p>
        <a href="article2.html">Read More</a>
    </article>
    <article class="news-item">
      <img src="article2.jpg" alt="Article 2 Image">
      <h2>Article Title 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget dolor       in urna varius faucibus...</p>
      <a href="article2.html">Read More</a>
  </article>
    <!-- Add more news articles here -->
</section>

    <footer class="page-footer">
        <div class="catagory-container">
            <div class="catagory">
            <h4>THE COMPANY</h4>
            <p>ABOUT</p>
            <p>VIP TEAM</p>
            <p>PARTNERS</p>
            <p>PRESS</p>
            <p>CAREERS</p>
            <p>ADVERTISE</p>
            <p>CONTACT US</p>
            </div>
            <div class="catagory">
            <h4>HELP</h4>
            <p>MEMBERSHIP FAQS</p>
            <p>PRIVACY POLICY</p>
            <p>LEGALS</p>
            <p>COOKIE POLICY</p>
            </div>
            <div class="catagory">
            <h4>FOLLOW US</h4>
            <p>FACEBOOK</p>
            <p>TWITTER</p>
            <p>INSTAGRAM</p>
            
            </div>
        </div>



    <div class="footer-search-container">
            <div class="footer-search-text">
            <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
            <p>Sign up for email updates on the latest frieze talks, fairs and events.</p>
            </div>
        <div class="footer-search">
        <input class="search-box" type="text" placeholder=" Enter your email here">
        </div>
    </div>              
</footer>
</body>
</html>