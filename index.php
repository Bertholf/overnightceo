<!DOCTYPE html>
<html>
<!---------->
<!-- HEAD -->
<!---------->
<head> 
<?php 
include "includes/head.php";
// include "db/connect.php";
// include "includes/functions.php";
?> 
</head>

<!---------->
<!-- BODY -->
<!---------->
<body>

<!-- MOBILE MENU -->
<mobile>
    <div id="mobile-menu" class="hide">
        <i id="close-mobile-menu" class="fal fa-times"></i>
        <div id="container">
            <a id="about" class="scroll-to">About</a><!--
            --><a id="what-you-get" class="scroll-to">What you get</a><!--
            --><a id="what-it-takes" class="scroll-to">What it takes</a><!--
            --><a id="cohort" class="scroll-to">2019 Cohort</a><!--
            --><a id="faq" class="scroll-to">FAQ</a><!--
            --><a href="mailto:contact@overnightceo.com">Contact us</a><!--
            --><a href="#" target="_blank" class="btn">Apply</a>
        </div>
    </div>
</mobile>

<!-- TOP BAR -->
<div id="top-bar" class="at-one">
    <div class="inner">
        <div id="logo">[Logo]</div>
        <nav>
            <desktop>
                <a id="about" class="scroll-to">About</a><!--
                --><a id="what-you-get" class="scroll-to">What you get</a><!--
                --><a id="what-it-takes" class="scroll-to">What it takes</a><!--
                --><a id="cohort" class="scroll-to">2019 Cohort</a><!--
                --><a id="faq" class="scroll-to">FAQ</a><!--
                --><a href="mailto:contact@overnightceo.com">Contact us</a><!--
                --><a href="#" target="_blank" class="btn">Apply</a>
            </desktop>
            <mobile>
                <a id="open-mobile-menu"><i class="icn fas fa-bars"></i></a>
            </mobile>
        </nav>
    </div>
</div>

<!-- HERO -->
<section id="hero">
    <div id="bg-gradient"></div>
    <div id="container">
        <h1 class="title">Start something.<br />But not from nothing.</h1>
        <p>Overnight CEO is an elite mentorship program that accelerates entrepreneurs into a CEO or CTO position.</p>
        <div id="buttons">
            <a href="#" class="btn" target="_blank">Apply now<i class="icn fal fa-long-arrow-right"></i></a><!--
            --><a href="#" id="about-us-btn" class="btn">About us<i class="icn fal fa-long-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- WHAT YOU GET -->
<section id="what-you-get">
    <div class="inner">
        <h1 class="title">What You Get</h1>
        <div class="grid-box">
            <div class="grid-item">
                <div class="icn"><i class="fal fa-hands-usd"></i></div>
                <h1>Receive 20% or more equity vested</h1>
            </div>
            <div class="grid-item">
                <div class="icn"><i class="fal fa-people-carry"></i></div>
                <h1>One-on-one mentorship every step of the way</h1>
            </div>
            <div class="grid-item">
                <div class="icn"><i class="fal fa-star"></i></div>
                <h1>Work alongside industry experts</h1>
            </div>
            <div class="grid-item">
                <div class="icn"><i class="fal fa-digging"></i></div>
                <h1>Co-found a company that you helped build</h1>
            </div>
            <div class="grid-item">
                <div class="icn"><i class="fal fa-check-circle"></i></div>
                <h1>A high chance of acceptance to the world’s top accelerator programs</h1>
            </div>
            <div class="grid-item">
                <div class="icn"><i class="fal fa-file-certificate"></i></div>
                <h1>Exit with a CEO or CTO title and position at your own company</h1>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about">
    <div class="inner">
        <div id="container">
            <h1 class="title">About us</h1>
            <div id="desc">The startup space is competitive and it takes a lot of time, resources, and sometimes luck to launch something that sticks.<br /><br />With Overnight CEO, you have the opportunity to learn from and work with the industry’s very best while advancing your career leaps and bounds. Work hard, learn fast, and set yourself up as a legitimate entrepreneur.<br /><br />This is a once in a lifetime opportunity to become the CEO or CTO of a successful startup you built.</div>
            <div id="profile-picture"></div>
            <div id="quote"><i>“I learned more from my months completing Overnight CTO than I did from my college degree.”</i><br />- Rene S, Kndrd CTO</div>
            <a id="apply-now-btn" target="_blank">Apply Now</a>
        </div>
    </div>
</section>

<!-- WHAT IT TAKES -->
<section id="what-it-takes">
    <div class="inner">
        <h1 class="title">What does it take?</h1>
        <div id="container">
            <div id="apply-if" class="col">
                <h1>Apply If...<i class="icn fal fa-check"></i></h1>
                <ul>
                    <li>You want to start something and follow through with it.</li>
                    <li>You want to take control of your career.</li>
                    <li>You are a fast learner who can adapt on the fly.</li>
                    <li>You don’t just handle feedback, you thrive on it.</li>
                    <li>You want to learn from industry experts that have done this many times before.</li>
                    <li>You can commit to 40-60 work hours per week.</li>
                    <li>You are ready to take a risk in the startup world.</li>
                </ul>
            </div>
            <div id="dont-apply" class="col">
                <h1>Don't Apply If...<i class="icn fal fa-times"></i></h1>
                <ul>
                    <li>You lack hustle and don’t want to work hard.</li>
                    <li>You aren’t serious about your future.</li>
                    <li>You have difficulties applying yourself and staying on task.</li>
                    <li>You have full or part-time employment that you couldn’t leave if accepted.</li>
                    <li>You don’t want to or won’t trade security for an opportunity.</li>
                    <li>You are not interested in global communities or location independence.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 2019 COHORT -->
<section id="cohort">
    <div class="inner">
        <h1 class="title">2019 Cohort</h1>
        <div class="grid-box">
            <div class="grid-item" style="background-image:url('images/cohort1.jpg')">
                <div id="bg"></div>
                <div id="container">
                    <h2 class="subtitle">Track 1 - Software as a Service</p>
                    <h1 class="title">Marketing & Technology</h1>
                </div>
                <a class="btn">Find out more</a>
            </div>
            <div class="grid-item" style="background-image:url('images/cohort2.jpg')">
                <div id="bg"></div>
                <div id="container">
                    <h2 class="subtitle">Track 2 - Software as a Service</h2>
                    <h1 class="title">Travel & Global Citizenship</h1>
                </div>
                <a class="btn">Find out more</a>
            </div>
            <div class="grid-item" style="background-image:url('images/cohort3.jpg')">
                <div id="bg"></div>
                <div id="container">
                    <h2 class="subtitle">Track 3 - eCommerce</h2>
                    <h1 class="title">[Placeholder]</h1>
                </div>
                <a class="btn">Find out more</a>
            </div>
        </div>
        <div id="success-story">
            <h1>A Success Story from Cohort 1</h1>
            <div id="profile-picture"></div>
            <div id="quote"><i>"When I was accepted into the program at the start of 2018, the job I had was disappearing. I had no real backup plan, and thought I’d need to give up on my remote dreams and “get a real job”. Instead, Overnight CEO helped skyrocket my career. I traveled to 33 countries in 2018 because as long as I was working hard, I could do it from anywhere in the world. I worked alongside and learned from industry experts to create and launch my first startup that I am now the proud Co-Founder and CTO of. I now get to work with an amazing international team on a project I helped create, I scuba dive around the world on my weekends off, and in 2019 I will join one of the world's largest accelerator centers."</i><b>- Rene S, Kndrd CTO</b></div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq">
    <div class="inner">
        <h1 class="title">FAQ</h1>
        <div class="faq-section">
            <div id="question">Who is this opportunity for?</div>
            <div id="answer">This opportunity is for someone who likes sales, community management and software development</div>
        </div>
        <div class="faq-section">
            <div id="question">How much money will I make?</div>
            <div id="answer">...</div>
        </div>
        <div class="faq-section">
            <div id="question">How much money could I make down the road?</div>
            <div id="answer">...</div>
        </div>
        <div class="faq-section">
            <div id="question">What previous experience is required?</div>
            <div id="answer">CTO must have PHP/Laravel experience. All code other than application specific will be provided.</div>
        </div>
        <div class="faq-section">
            <div id="question">How long does the program take?</div>
            <div id="answer">...</div>
        </div>
        <div class="faq-section">
            <div id="question">Who will be my mentor? What’s their experience?</div>
            <div id="answer">...</div>
        </div>
        <div class="faq-section">
            <div id="question">Do I need to be a US resident to apply?</div>
            <div id="answer">...</div>
        </div>
        <div class="faq-section">
            <div id="question">Will I work remotely? How does that work?</div>
            <div id="answer">...</div>
        </div>
        <div class="faq-section">
            <div id="question">Will I be notified if I’m not accepted?</div>
            <div id="answer">...</div>
        </div>
        <div class="faq-section">
            <div id="question">How often do you take on new cohorts?</div>
            <div id="answer">...</div>
        </div>
    </div>
</section>

<!-- Do You Have What It Takes? -->
<section id="do-you-have-it">
    <div class="inner">
        <h1 class="title">Do you have what it takes?</h1>
        <h2 class="subtitle">Get paired with experts for the highest chance of success in the startup world.</h2>
        <a class="btn" target="_blank">Apply Now</a>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>Overnight CEO &copy; <?php echo date("Y") ?></p>
</footer>

</body>
</html>