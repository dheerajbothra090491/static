<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>

  <title>JobzShala</title>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <?php include "css-top.php" ?>



<style>

:root {
  --color-text: navy;
  --color-bg: papayawhip;
  --color-bg-accent: #ecdcc0;
  --size: clamp(10rem, 1rem + 30vmin, 20rem);
  --gap: calc(var(--size) / 14);
  --duration: 60s;
  --scroll-start: 0;
  --scroll-end: calc(-100% - var(--gap));
}

@media (prefers-color-scheme: dark) {
  :root {
    --color-text: papayawhip;
    --color-bg: navy;
    --color-bg-accent: #2626a0;
  }
}

.svg-div img{    width: 100px;
    height: 100px;
    object-fit: contain;}
.svg-div{text-align:center;    margin-top: 15px;}
.svg-div p{    margin: 15px;
    margin-top: 15px;color:#000;}
.marquee-body {
  display: grid;
  align-content: center;
  overflow: hidden;
  gap: var(--gap);
  width: 100%;
  font-size: 1rem;
  line-height: 1.5;
  color: var(--color-text);
  background-color: #ffffff;
}

.marquee {
  display: flex;
  overflow: hidden;
  user-select: none;
  gap: var(--gap);
  mask-image: linear-gradient(
    var(--mask-direction, to right),
    hsl(0 0% 0% / 0),
    hsl(0 0% 0% / 1) 20%,
    hsl(0 0% 0% / 1) 80%,
    hsl(0 0% 0% / 0)
  );
}

.marquee__group {
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: space-around;
  gap: var(--gap);
  min-width: 100%;
  animation: scroll-x var(--duration) linear infinite;
}

@media (prefers-reduced-motion: reduce) {
  .marquee__group {
    animation-play-state: paused;
  }
}

.marquee--vertical {
  --mask-direction: to bottom;
}

.marquee--vertical,
.marquee--vertical .marquee__group {
  flex-direction: column;
}

.marquee--vertical .marquee__group {
  animation-name: scroll-y;
}

.marquee--reverse .marquee__group {
  animation-direction: reverse;
  animation-delay: -3s;
}

@keyframes scroll-x {
  from {
    transform: translateX(var(--scroll-start));
  }
  to {
    transform: translateX(var(--scroll-end));
  }
}

@keyframes scroll-y {
  from {
    transform: translateY(var(--scroll-start));
  }
  to {
    transform: translateY(var(--scroll-end));
  }
}

/* Element styles */
.marquee .svgdiv {
  display: grid;
  place-items: center;
  width: var(--size);
  fill: var(--color-text);
  background: #fbfbfb;
  aspect-ratio: 16/9;
  padding: calc(var(--size) / 10);
  border-radius: 0.5rem;
}

.marquee--vertical .svgdiv {
  aspect-ratio: 1;
  width: calc(var(--size) / 1.5);
  padding: calc(var(--size) / 6);
}

/* Parent wrapper */
.wrapper {
  display: flex;
  flex-direction: column;
  gap: var(--gap);
  margin: auto;
  max-width: 100vw;
}



/* Toggle direction button */
.toggle {
  --size: 3rem;
  position: relative;
  position: fixed;
  top: 1rem;
  left: 1rem;
  width: var(--size);
  height: var(--size);
  font: inherit;
  text-align: center;
  cursor: pointer;
  outline: none;
  border: none;
  border-radius: 50%;
  color: inherit;
  background-color: var(--color-bg-accent);
  z-index: 1;
}

.toggle:focus-visible {
  box-shadow: 0 0 0 2px var(--color-text);
}

.toggle span {
  position: absolute;
  display: inline-block;
  top: 50%;
  left: calc(100% + 0.4em);
  width: fit-content;
  white-space: nowrap;
  transform: translateY(-50%);
  animation: fade 400ms 4s ease-out forwards;
  user-select: none;
}

.toggle svg {
  --size: 1.5rem;
  position: absolute;
  top: 50%;
  left: 50%;
  width: var(--size);
  height: var(--size);
  fill: currentcolor;
  transform: translate(-50%, -50%);
  transition: transform 300ms cubic-bezier(0.25, 1, 0.5, 1);
}

.toggle--vertical svg {
  transform: translate(-50%, -50%) rotate(-90deg);
}
.section-body{padding:50px 0;}

@keyframes fade {
  to {
    opacity: 0;
    visibility: hidden;
  }
}

</style>
</head>

<body class="tf-popup-auto">

  <a id="scroll-top" ></a>

  <!-- preloade -->
  <div class="preload preload-container">
    <div class="preload-logo">
      <div class="spinner"></div>
    </div>
  </div>
  <!-- /preload -->

  <!-- popup -->

  <!--<div class="wd-popup-form">
    <div class="modal-menu__backdrop"></div>
    <div class="content">
      <div class="content-left">
        <div class="thumb">
          <img src="images/review/bg-popup.jpg" alt="images">
        </div>
      </div>
      <div class="content-right">
        <a class="title-button-group"><i class="icon-close"></i></a>
        <h6>Welcome to jobitex</h6>
        <p>Sign up to get all the latest Jobitex news, website updates, offers and promos.</p>
        <form action="https://themesflat.co/html/jobtex/get">
          <input type="text" placeholder="Email">
          <div class="group-radio">
            <input type="radio"><label>Prevent this Pop-up</label>
          </div>
        </form>
      </div>
    </div>
  </div>-->

  <?php include "header.php" ?>
  
  <!-- END HEADER -->
  <!-- SLIDER-->
  <section class="tf-slider sl2 over-flow-hidden" style="padding-top: 180px;">
    <div class="tf-container">
      <div class="row">
        <div class="col-lg-7 col-md-12">
          <div class="content wow fadeInUp" style="margin-top: 40px;">
            <div class="heading">
               <h2 class="">
Find the <span style="color: #1594d5;">job</span> that is
perfect for You</h2>
              <p class="">Find the job that’s perfect for you. about 800+ new jobs everyday</p>
            </div>
            <div class="form-sl">
              <form method="post">
                <div class="row-group-search home1 st">
                  <div class="form-group-1">
                    <span class="icon-search search-job"></span>
                    <input type="text" class="input-filter-search" placeholder="Enter skills / designations / companies" />
                  </div>
                  <div class="form-group-2">
                    <span class="icon icon-experience">
                  <span class="icon-bag"><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                </span>
                    <select id="select-location" class="select-location">
                      <option value="">Experience</option>
                      <option value="">1 Year</option>
                      <option value="">2 Years</option>
                      <option value="">3 Years</option>
                      <option value="">4 Years</option>
                    </select>
                  </div>
				  <div class="form-group-2">
                    <span class="icon-map-pin"></span>
                    <select id="select-location" class="select-location">
                      <option value="">All Location</option>
                      <option value="">Japan</option>
                      <option value="">Canada</option>
                      <option value="">England</option>
                      <option value="">Mexico</option>
                    </select>
                  </div>
                  <div class="form-group-4">
                    <button type="submit" class="btn btn-find">
                      Find Jobs
                    </button>
                  </div>
                </div>
              </form>
              <!-- End Job  Search Form-->
            </div>
            <ul class="list-category">
              <li><a href="#">Designer</a></li>
              <li class="current"><a href="#">Developer</a></li>
              <li><a href="#">Tester</a></li>
              <li><a href="#">Writing</a></li>
              <li><a href="#">Project Manager</a></li>
            </ul>
          </div>
        </div>
		 <div class="col-lg-5">
          <div class="wd-review-job thumb2 widget-counter tf-sl3" style="padding-bottom:50px;">
            <div class="thumb">
              <div class="box1">
                <img src="images/review/thumb5.png" alt="images" />
                <div class="markk ani3">
                  <img src="images/review/shape3.png" alt="images" />
                </div>
              </div>
              <div class="box2">
                <img src="images/review/thumb6.png" alt="images" />
                <div class="markk ani3">
                  <img src="images/review/shape4.png" alt="images" />
                </div>
              </div>
            </div>
            <div class="tes-box ani5">
              <div class="client-box">
                <div class="avt">
                  <img src="images/review/client.jpg" alt="images" />
                  <div class="badge"></div>
                </div>
                <div class="content">
                  <h6 class="number wrap-counter">12000+</h6>
                  <div class="des">Jobs Available</div>
                </div>
              </div>
            </div>
            <div class="icon1 ani3">
              <img src="images/review/icon2.png" alt="images" />
            </div>
            <div class="icon2 ani4">
              <img src="images/review/icon3.png" alt="images" />
            </div>
            <div class="icon3 ani6">
              <img src="images/review/icon11.png" alt="images" />
            </div>
            <!-- bug counter -->
            <!--<div class="chart-box counter">
              <h6>Candidates</h6>
              <div class="chart" data-percent="60" data-size="83" data-withh="10" data-barcolor="#44e720"
                data-trackcolor="#ecf7ea" data-text="success">
                <div class="inner">
                  <div class="percent"></div>
                  <div class="text"></div>
                </div>
              </div>
            </div>-->
          </div>
        </div>
		  <!--<div class="col-lg-5 col-md-12">
          <div class="wd-review-job thumb2 widget-counter">
            <div class="thumb">
              <img src="images/review/thumb2.png" alt="images">
            </div>
            <div class="trader-box">
              <div class="content">
                <h3 class="number wrap-counter">
                  <span class="number counter-number" data-speed="2000" data-to="25">25</span><span>M+</span>
                </h3>
                <div class="des">Jobs Available</div>
              </div>
              <div class="shape ani7">
                <img src="images/review/shape.png" alt="images">
              </div>
            </div>
            <div class="tes-box ani5">
              <div class="client-box">
                <div class="avt">
                  <img src="images/review/client.jpg" alt="images">
                  <div class="badge"></div>
                </div>
                <div class="content">
                  <h6 class="number wrap-counter">
                    <span class="number counter-number" data-speed="2000" data-to="480">480</span><span>+</span>
                  </h6>
                  <div class="des">Happpy Candidates</div>
                </div>
              </div>
            </div>
            <div class="icon1 ani3">
              <img src="images/review/icon1.png" alt="images">
            </div>
            <div class="icon2 ani1">
              <img src="images/review/icon2.png" alt="images">
            </div>
            <div class="icon3 ani6">
              <img src="images/review/icon3.png" alt="images">
            </div>
          </div>
        </div>-->
        <!--<div class="col-lg-4">
          <div class="wd-review-job thumb2 widget-counter tf-sl2">
            <div class="thumb">
              <img src="images/review/thumb4.png" alt="images" />
            </div>
            <div class="tes-box ani5">
              <div class="client-box">
                <div class="avt">
                  <img src="images/review/client.jpg" alt="images" />
                  <div class="badge"></div>
                </div>
                <div class="content">
                  <h6 class="number wrap-counter">
                    <span class="number counter-number" data-speed="2000" data-to="480">480</span><span>+</span>
                  </h6>
                  <div class="des">Happpy Candidates</div>
                </div>
              </div>
            </div>
            <div class="icon1 ani3">
              <img src="images/review/icon2.png" alt="images" />
            </div>
            <div class="icon2 ani4">
              <img src="images/review/icon3.png" alt="images" />
            </div>
            <div class="icon3 ani6">
              <img src="images/review/icon4.png" alt="images" />
            </div>
          </div>
        </div>-->
      </div>
    </div>
  </section>
  <!--<section class="tf-slider sl1 parallax">
    <div class="tf-container">
      <div class="row">
        <div class="col-xl-8">
          <div class="content">
            <div class="heading">
              <h2 class="text-white">
Find the <span style="color: #ffcc00;">job</span> that is
perfect for You</h2>
              <p class="text-white">Find the job that’s perfect for you. about 800+ new jobs everyday</p>
            </div>
            <div class="form-sl">
              <form method="post">
                <div class="row-group-search home1">
                  <div class="form-group-1">
                    <input type="text" class="input-filter-search" placeholder="Enter skills / designations / companies">
                  </div>
                  <div class="form-group-2">
                    <span class="icon-map-pin"></span>
                    <select id="select-location" class="select-location">
                      <option value="">All Location</option>
                      <option value="">Singapore</option>
                      <option value="">Japan</option>
                      <option value="">Korea</option>
                      <option value="">Italia</option>
                      <option value="">Canada</option>
                    </select>
                  </div>
                  <div class="form-group-4">
                    <button type="submit" class="btn btn-find">Find Jobs</button>
                  </div>
                </div>
              </form>
             
            </div>
            <ul class="list-category text-white">
              <li><a href="about-us.html">Designer</a></li>
              <li class="current"><a href="about-us.html">Developer</a></li>
              <li><a href="about-us.html">Tester</a></li>
              <li><a href="about-us.html">Writing</a></li>
              <li><a href="about-us.html">Project Manager</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
  </section>-->
  <!-- END SILDER -->
  <!-- Job-category -->
  <section class="job-category-section">
    <div class="tf-container">
      <div class="row">
        <div class="col-md-12">
          <div class="tf-title">
            <div class="group-title">
              <h1>Browse by category</h1>
              <p>Recruitment Made Easy in 100 seconds</p>
            </div>
            <a href="#" class="tf-button">
              All Categories
              <span class="icon-arrow-right2"></span>
          </a>
          </div>
        </div>
        <!-- wd-job-category -->
        <div class="col-md-12">
          <div class="group-category-job wow fadeInUp">
            <div class="job-category-box">
              <div class="job-category-header">
                <h1><a href="#">Human Resource</a></h1>
                <p>120 Jobs available</p>
              </div>
              <a href="#" class="btn-category-job">Explore Jobs <span class="icon-keyboard_arrow_right"></span></a>
            </div>
            <div class="job-category-box active">
              <div class="job-category-header">
                <h1><a href="#">Project Manager</a></h1>
                <p>120 Jobs available</p>
              </div>
              <a href="#" class="btn-category-job">Explore Jobs <span class="icon-keyboard_arrow_right"></span></a>
            </div>
            <div class="job-category-box">
              <div class="job-category-header">
                <h1><a href="#">Delivery Driver</a></h1>
                <p>120 Jobs available</p>
              </div>
              <a href="#" class="btn-category-job">Explore Jobs <span class="icon-keyboard_arrow_right"></span></a>
            </div>
            <div class="job-category-box">
              <div class="job-category-header">
                <h1><a href="#">Accounting</a></h1>
                <p>120 Jobs available</p>
              </div>
              <a href="#" class="btn-category-job">Explore Jobs <span class="icon-keyboard_arrow_right"></span></a>
            </div>
            <div class="job-category-box">
              <div class="job-category-header">
                <h1><a href="#">Customer Service</a></h1>
                <p>120 Jobs available</p>
              </div>
              <a href="#" class="btn-category-job">Explore Jobs <span class="icon-keyboard_arrow_right"></span></a>
            </div>
            <div class="job-category-box">
              <div class="job-category-header">
                <h1><a href="#">Data Science</a></h1>
                <p>120 Jobs available</p>
              </div>
              <a href="#" class="btn-category-job">Explore Jobs <span class="icon-keyboard_arrow_right"></span></a>
            </div>
            <div class="job-category-box">
              <div class="job-category-header">
                <h1><a href="#">Engineering</a></h1>
                <p>120 Jobs available</p>
              </div>
              <a href="#" class="btn-category-job">Explore Jobs <span class="icon-keyboard_arrow_right"></span></a>
            </div>
            <div class="job-category-box">
              <div class="job-category-header">
                <h1><a href="#">IT & Networking</a></h1>
                <p>120 Jobs available</p>
              </div>
              <a href="#" class="btn-category-job">Explore Jobs <span class="icon-keyboard_arrow_right"></span></a>
            </div>
            <div class="job-category-box">
              <div class="job-category-header">
                <h1><a href="#">Sales & Marketing</a></h1>
                <p>120 Jobs available</p>
              </div>
              <a href="#" class="btn-category-job">Explore Jobs <span class="icon-keyboard_arrow_right"></span></a>
            </div>
            <div class="job-category-box">
              <div class="job-category-header">
                <h1><a href="#">Writing</a></h1>
                <p>120 Jobs available</p>
              </div>
              <a href="#" class="btn-category-job">Explore Jobs <span class="icon-keyboard_arrow_right"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Job-category -->
  <!-- WD-JOB -->
  <section class="jobs-section-three">
    <div class="tf-container">
      <div class="tf-title style-2">
        <div class="group-title ">
          <h1>Featured Jobs</h1>
          <p>Find the job that’s perfect for you. about 800+ new jobs everyday</p>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-lg-6 ">
          <div class="features-job">
            <div class="job-archive-header">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty8.png"
                    alt="images/logo-company/cty8.png" />
                </div>
                <div class="box-content">
                  <h4>
                    <a href="#">Rockstar Games New York</a>
                  </h4>
                  <h3>
                    <a href="#"> Project manager </a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <ul>
                    <li>
                      <span class="icon-map-pin"></span>
                      Sector 19 Noida , India
                    </li>
                    <li>
                      <span class="icon-calendar"></span>
                      2 days ago
                    </li>
                  </ul>
                  <span class="icon-heart"></span>
                </div>
              </div>
            </div>
            <div class="job-archive-footer">
              <div class="job-footer-left">
                <ul class="job-tag">
                  <li><a href="#">Full-time</a></li>
                  <li><a href="#">Remote</a></li>
                </ul>
                <div class="star">
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                </div>
              </div>
              <div class="job-footer-right">
                <div class="price">
                  
                  <p>₹83,000 - ₹110,000 <span class="year">/year</span></p>
                </div>
                <p class="days">22 days left to apply</p>
              </div>
            </div>
            <a href="#" class="jobtex-link-item" tabindex="0"></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="features-job">
            <div class="job-archive-header">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty11.png"
                    alt="images/logo-company/cty11.png" />
                </div>
                <div class="box-content">
                  <h4>
                    <a href="#">Rockstar Games New York</a>
                  </h4>
                  <h3>
                    <a href="#">Senior UI/UX Designer</a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <ul>
                    <li>
                      <span class="icon-map-pin"></span>
                      Sector 19 Noida , India
                    </li>
                    <li>
                      <span class="icon-calendar"></span>
                      2 days ago
                    </li>
                  </ul>
                  <span class="icon-heart"></span>
                </div>
              </div>
            </div>
            <div class="job-archive-footer">
              <div class="job-footer-left">
                <ul class="job-tag">
                  <li><a href="#">Temporary</a> </li>
                  <li><a href="#">Remote</a></li>
                </ul>
                <div class="star">
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                </div>
              </div>
              <div class="job-footer-right">
                <div class="price">
                  
                  <p>₹83,000 - ₹110,000 <span class="year">/year</span></p>
                </div>
                <p class="days">22 days left to apply</p>
              </div>
            </div>
            <a href="#" class="jobtex-link-item" tabindex="0"></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="features-job">
            <div class="job-archive-header">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty4.png"
                    alt="images/logo-company/cty4.png" />
                </div>
                <div class="box-content">
                  <h4>
                    <a href="#">Rockstar Games New York</a>
                  </h4>
                  <h3>
                    <a href="#">Full Stack Development</a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <ul>
                    <li>
                      <span class="icon-map-pin"></span>
                      Sector 19 Noida , India
                    </li>
                    <li>
                      <span class="icon-calendar"></span>
                      2 days ago
                    </li>
                  </ul>
                  <span class="icon-heart"></span>
                </div>
              </div>
            </div>
            <div class="job-archive-footer">
              <div class="job-footer-left">
                <ul class="job-tag">
                  <li><a href="#">Temporary</a> </li>
                  <li><a href="#">Remote</a></li>
                </ul>
                <div class="star">
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                </div>
              </div>
              <div class="job-footer-right">
                <div class="price">
                 
                  <p>₹83,000 - ₹110,000 <span class="year">/year</span></p>
                </div>
                <p class="days">22 days left to apply</p>
              </div>
            </div>
            <a href="#" class="jobtex-link-item" tabindex="0"></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="features-job">
            <div class="job-archive-header">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty7.png"
                    alt="images/logo-company/cty7.png" />
                </div>
                <div class="box-content">
                  <h4>
                    <a href="#">Rockstar Games New York</a>
                  </h4>
                  <h3>
                    <a href="#">Senior DevOps Engineer</a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <ul>
                    <li>
                      <span class="icon-map-pin"></span>
                      Sector 19 Noida , India
                    </li>
                    <li>
                      <span class="icon-calendar"></span>
                      2 days ago
                    </li>
                  </ul>
                  <span class="icon-heart"></span>
                </div>
              </div>
            </div>
            <div class="job-archive-footer">
              <div class="job-footer-left">
                <ul class="job-tag">
                  <li><a href="#">Contract</a></li>
                  <li><a href="#">Remote</a></li>
                </ul>
                <div class="star">
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                </div>
              </div>
              <div class="job-footer-right">
                <div class="price">
                  
                  <p>₹83,000 - ₹110,000 <span class="year">/year</span></p>
                </div>
                <p class="days">22 days left to apply</p>
              </div>
            </div>
            <a href="#" class="jobtex-link-item" tabindex="0"></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="features-job">
            <div class="job-archive-header">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty2.png"
                    alt="images/logo-company/cty2.png" />
                </div>
                <div class="box-content">
                  <h4>
                    <a href="#">Rockstar Games New York</a>
                  </h4>
                  <h3>
                    <a href="#"> Project manager </a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <ul>
                    <li>
                      <span class="icon-map-pin"></span>
                      Sector 19 Noida , India
                    </li>
                    <li>
                      <span class="icon-calendar"></span>
                      2 days ago
                    </li>
                  </ul>
                  <span class="icon-heart"></span>
                </div>
              </div>
            </div>
            <div class="job-archive-footer">
              <div class="job-footer-left">
                <ul class="job-tag">
                  <li><a href="#">Full-time</a></li>
                  <li><a href="#">Remote</a></li>
                </ul>
                <div class="star">
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                </div>
              </div>
              <div class="job-footer-right">
                <div class="price">
                  
                  <p>₹83,000 - ₹110,000 <span class="year">/year</span></p>
                </div>
                <p class="days">22 days left to apply</p>
              </div>
            </div>
            <a href="#" class="jobtex-link-item" tabindex="0"></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="features-job">
            <div class="job-archive-header">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty9.png"
                    alt="images/logo-company/cty9.png" />
                </div>
                <div class="box-content">
                  <h4>
                    <a href="#">Rockstar Games New York</a>
                  </h4>
                  <h3>
                    <a href="#">Social Media Marketing </a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <ul>
                    <li>
                      <span class="icon-map-pin"></span>
                      Sector 19 Noida , India
                    </li>
                    <li>
                      <span class="icon-calendar"></span>
                      2 days ago
                    </li>
                  </ul>
                  <span class="icon-heart"></span>
                </div>
              </div>
            </div>
            <div class="job-archive-footer">
              <div class="job-footer-left">
                <ul class="job-tag">
                  <li><a href="#">Part-time</a></li>
                  <li><a href="#">Remote</a></li>
                </ul>
                <div class="star">
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                </div>
              </div>
              <div class="job-footer-right">
                <div class="price">
                  
                  <p>₹83,000 - ₹110,000 <span class="year">/year</span></p>
                </div>
                <p class="days">22 days left to apply</p>
              </div>
            </div>
            <a href="#" class="jobtex-link-item" tabindex="0"></a>
          </div>
        </div>
        <div class="col-md-12">
          <div class="wrap-button">
            <a href="#" class="tf-button style-1">
              See more Jobs
              <span class="icon-keyboard_arrow_right"></span>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--END WD-JOB -->
  
  <section class="background1 location-section-four">
    <div class="tf-container">
      <div class="row">
        <div class="col-md-12">
          <div class="tf-title">
            <div class="group-title">
              <h1>Cool Places to Work</h1>
              <p>Find your favourite jobs and get the benefits of yourself</p>
            </div>
            <button class="tf-button">
              All Location
              <span class="icon-arrow-right2"></span>
            </button>
          </div>
        </div>
        <div class="col-md-12 wow fadeInUp  animated" style="visibility: visible;">
          <div class="group-location">
            <div class="box-6">
              <div class="wd-job-location">
                <div class="features">
                  <img src="images/review/lo7.jpg" alt="images">
                </div>
                <div class="content">
                  <h6><a href="#">Noida</a></h6>
                  <a href="#" class="category">Open Jobs (3)</a>
                </div>
              </div>
            </div>
            <div class="box-3">
              <div class="wd-job-location">
                <div class="features">
                  <img src="images/review/lo4.jpg" alt="images">
                </div>
                <div class="content">
                  <h6><a href="#">Delhi</a></h6>
                  <a href="#" class="category">Open Jobs (3)</a>
                </div>
              </div>
              <div class="wd-job-location">
                <div class="features">
                  <img src="images/review/lo1.jpg" alt="images">
                </div>
                <div class="content">
                  <h6><a href="#">Gurugram</a></h6>
                  <a href="#" class="category">Open Jobs (3)</a>
                </div>
              </div>
            </div>
            <div class="box-3">
              <div class="wd-job-location">
                <div class="features">
                  <img src="images/review/lo3.jpg" alt="images">
                </div>
                <div class="content">
                  <h6><a href="#">Bengaluru</a></h6>
                  <a href="#" class="category">Open Jobs (3)</a>
                </div>
              </div>
              <div class="wd-job-location">
                <div class="features">
                  <img src="images/review/lo6.jpg" alt="images">
                </div>
                <div class="content">
                  <h6><a href="#">Mumbai</a></h6>
                  <a href="#" class="category">Open Jobs (3)</a>
                </div>
              </div>
            </div>
            <div class="box-3">
              <div class="wd-job-location">
                <div class="features">
                  <img src="images/review/lo5.jpg" alt="images">
                </div>
                <div class="content">
                  <h6><a href="#">Ahmedabad</a></h6>
                  <a href="#" class="category">Open Jobs (3)</a>
                </div>
              </div>
              <div class="wd-job-location">
                <div class="features">
                  <img src="images/review/lo8.jpg" alt="images">
                </div>
                <div class="content">
                  <h6><a href="#">Chennai</a></h6>
                  <a href="#" class="category">Open Jobs (3)</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
    <!-- wd-review-job -->
    <section class="over-flow-hidden review-job-section-five">
      <div class="tf-container">
        <div class="tf-title style-2">
          <div class="group-title">
            <h1>Get the job that's right for you</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 wow fadeInLeft">
            <div class="wd-review-job pt9">
              <ul class="list-review2">
                <li class="active">
                  <h6>Discover New Opportunities</h6>
                  <p>
                    Structured digital interviews increase the predictive
                    validity of your hires by 65%.
                  </p>
                </li>
                <li>
                  <h6>Get Invited to Apply to jobs</h6>
                  <p>
                    Maverick pitch your profile to employers for jobs you’ll
                    love -so you stand out-and these companies can reach out
                    to you directly.
                  </p>
                </li>
                <li>
                  <h6>Save time with 1-click apply</h6>
                  <p>
                    No more filling out lengthy applications! Once Maverick
                    has your key info, you can apply to most jobs with one
                    click.
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="wd-review-job widget-counter">
              <div class="thumb3">
                <div class="group-user">
                  <div class="user-box">
                    <img src="images/review/user11.png" alt="images" />
                    <img src="images/review/user22.png" alt="images" />
                    <img src="images/review/user33.png" alt="images" />
                    <img src="images/review/user44.png" alt="images" />
                  </div>
                  <div class="content">
                    <h6 class="wrap-counter">
                      <span class="counter-number" data-speed="2000" data-to="4800"></span><span>+</span>
                    </h6>
                    <p>Candidates happy</p>
                  </div>
                </div>
                <img src="images/review/thumb3.png" alt="images" />
                <div class="shape ani7">
                  <img src="images/review/shape2.png" alt="images" />
                </div>
                <div class="icon1 ani7">
                  <img src="images/review/icon11.png" alt="images" />
                </div>
                <div class="icon2 ani4">
                  <img src="images/review/icon22.png" alt="images" />
                </div>
                <div class="icon3 ani6">
                  <img src="images/review/icon33.png" alt="images" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End wd-review-job-->
	
  <!-- WD-employer -->
  <section class="employer-section">
    <div class="tf-container">
      <div class="wd-employer">
        <div class="tf-title">
          <div class="group-title">
            <h1>Employers of Choice</h1>
            <p>Showing companies based on reviews and recent job openings</p>
          </div>
          <a href="#" class="tf-button">
            All Employers
            <span class="icon-arrow-right2"></span>
          </a>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="employer-block">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty16.png"
                    alt="images/logo-company/cty16.png" />
                </div>
                <div class="box-content">
                  <div class="star">
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </div>
                  <h3>
                    <a href="employers-single.html">Samsung</a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <p class="info">
                    <span class="icon-map-pin"></span>
                    Sector 19 Noida , India
                  </p>
                </div>
              </div>
              <a href="employers-single.html" class="jobtex-link-item" tabindex="0"></a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="employer-block">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty17.png"
                    alt="images/logo-company/cty17.png" />
                </div>
                <div class="box-content">
                  <div class="star">
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </div>
                  <h3>
                    <a href="employers-single.html">Utilitech</a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <p class="info">
                    <span class="icon-map-pin"></span>
                    Sector 19 Noida , India
                  </p>
                </div>
              </div>
              <a href="employers-single.html" class="jobtex-link-item" tabindex="0"></a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="employer-block">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty11.png"
                    alt="images/logo-company/cty11.png" />
                </div>
                <div class="box-content">
                  <div class="star">
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </div>
                  <h3>
                    <a href="employers-single.html">Samsung</a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <p class="info">
                    <span class="icon-map-pin"></span>
                    Sector 19 Noida , India
                  </p>
                </div>
              </div>
              <a href="employers-single.html" class="jobtex-link-item" tabindex="0"></a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="employer-block">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty10.png"
                    alt="images/logo-company/cty10.png" />
                </div>
                <div class="box-content">
                  <div class="star">
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </div>
                  <h3>
                    <a href="employers-single.html">Samsung</a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <p class="info">
                    <span class="icon-map-pin"></span>
                    Sector 19 Noida , India
                  </p>
                </div>
              </div>
              <a href="employers-single.html" class="jobtex-link-item" tabindex="0"></a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="employer-block">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty13.png"
                    alt="images/logo-company/cty13.png" />
                </div>
                <div class="box-content">
                  <div class="star">
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </div>
                  <h3>
                    <a href="employers-single.html">Rigid</a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <p class="info">
                    <span class="icon-map-pin"></span>
                    Sector 19 Noida , India
                  </p>
                </div>
              </div>
              <a href="employers-single.html" class="jobtex-link-item" tabindex="0"></a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="employer-block">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty14.png"
                    alt="images/logo-company/cty14.png" />
                </div>
                <div class="box-content">
                  <div class="star">
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </div>
                  <h3>
                    <a href="employers-single.html">Task Force</a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <p class="info">
                    <span class="icon-map-pin"></span>
                    Sector 19 Noida , India
                  </p>
                </div>
              </div>
              <a href="employers-single.html" class="jobtex-link-item" tabindex="0"></a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="employer-block">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty15.png"
                    alt="images/logo-company/cty15.png" />
                </div>
                <div class="box-content">
                  <div class="star">
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </div>
                  <h3>
                    <a href="employers-single.html">Black & Decker</a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <p class="info">
                    <span class="icon-map-pin"></span>
                    Sector 19 Noida , India
                  </p>
                </div>
              </div>
              <a href="employers-single.html" class="jobtex-link-item" tabindex="0"></a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="employer-block">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty9.png"
                    alt="images/logo-company/cty9.png" />
                </div>
                <div class="box-content">
                  <div class="star">
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </div>
                  <h3>
                    <a href="employers-single.html">Amanda</a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <p class="info">
                    <span class="icon-map-pin"></span>
                    Sector 19 Noida , India
                  </p>
                </div>
              </div>
              <a href="employers-single.html" class="jobtex-link-item" tabindex="0"></a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="employer-block">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty12.png"
                    alt="images/logo-company/cty12.png" />
                </div>
                <div class="box-content">
                  <div class="star">
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </div>
                  <h3>
                    <a href="employers-single.html">Electrolux</a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <p class="info">
                    <span class="icon-map-pin"></span>
                    Sector 19 Noida , India
                  </p>
                </div>
              </div>
              <a href="employers-single.html" class="jobtex-link-item" tabindex="0"></a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="employer-block">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty6.png"
                    alt="images/logo-company/cty6.png" />
                </div>
                <div class="box-content">
                  <div class="star">
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </div>
                  <h3>
                    <a href="employers-single.html">Whirlpool</a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <p class="info">
                    <span class="icon-map-pin"></span>
                    Sector 19 Noida , India
                  </p>
                </div>
              </div>
              <a href="employers-single.html" class="jobtex-link-item" tabindex="0"></a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="employer-block">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty7.png"
                    alt="images/logo-company/cty7.png" />
                </div>
                <div class="box-content">
                  <div class="star">
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </div>
                  <h3>
                    <a href="employers-single.html">Bosch</a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <p class="info">
                    <span class="icon-map-pin"></span>
                    Sector 19 Noida , India
                  </p>
                </div>
              </div>
              <a href="employers-single.html" class="jobtex-link-item" tabindex="0"></a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="employer-block">
              <div class="inner-box">
                <div class="logo-company">
                  <img src="images/logo-company/cty3.png"
                    alt="images/logo-company/cty3.png" />
                </div>
                <div class="box-content">
                  <div class="star">
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </div>
                  <h3>
                    <a href="employers-single.html">Samsung</a>
                    <span class="icon-bolt"></span>
                  </h3>
                  <p class="info">
                    <span class="icon-map-pin"></span>
                    Sector 19 Noida , India
                  </p>
                </div>
              </div>
              <a href="employers-single.html" class="jobtex-link-item" tabindex="0"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End-WD-employer -->
    <!-- wd-counter -->
	
	<section class="section-body">
	  <div class="tf-container">
	    <div class="tf-title style-2">
          <div class="group-title">
            <h1>Universities</h1>
			<p>The official campus placement portal for 600+ colleges in India.</p>
          </div>
        </div>
	     <div class="row align-item-center">
            <div class="col-lg-12 col-md-12 col-lg-12 col-md-12">
			
			    <div class="uni">
				

				<article class="wrapper marquee-body">
				  <div class="marquee">
					<div class="marquee__group">
					  <div class="svg-div">
						<img src="images/bits-min.png" alt>
						<p>BITS Pilani</p>
					  </div>
					   <div class="svg-div">
						<img src="images/iima-min.webp" alt>
						<p>IIM Ahmedabad</p>
					  </div>
					   <div class="svg-div">
						<img src="images/iimcal-min.webp" alt>
						<p>IIM Calcutta</p>
					  </div>
					   <div class="svg-div">
						<img src="images/vnit-logo.webp" alt>
						<p>VNIT, Nagpur</p>
					  </div>
					   <div class="svg-div">
						<img src="images/srm-logo.webp" alt>
						<p>SRM University</p>
					  </div>
					   <div class="svg-div">
						<img src="images/nmims-min.png" alt>
						<p>NMIMS</p>
					  </div>
					   <div class="svg-div">
						<img src="images/spjain-min.webp" alt>
						<p>SP Jain</p>
					  </div>
					  <div class="svg-div">
						<img src="images/bml-munjal-min.png" alt>
						<p>BML</p>
					  </div>
					  
					  <!--<div class="svg-div">
						<img src="images/ashoka-min.png" alt>
						<p>Ashoka University</p>
					  </div>
					   <div class="svg-div">
						<img src="images/Medicaps-UniversityLogo.webp" alt>
						<p>Medicaps University</p>
					  </div>
					   <div class="svg-div">
						<img src="images/raisoni-min.png" alt>
						<p>Raisoni Group</p>
					  </div>
					   <div class="svg-div">
						<img src="images/iitropar-min.jpg" alt>
						<p>IIT Ropar</p>
					  </div>
					   <div class="svg-div">
						<img src="images/upes-logo.webp" alt>
						<p>UPES</p>
					  </div>
					   <div class="svg-div">
						<img src="images/IIT_Kanpur_Logo.svg" alt>
						<p>IIT Kanpur</p>
					  </div>
					   <div class="svg-div">
						<img src="images/manipal-logo.webp" alt>
						<p>Manipal, Jaipur</p>
					  </div>
					  <div class="svg-div">
						<img src="images/flame-logo.webp" alt>
						<p>FLAME University</p>
					  </div>-->
					</div>

					<div aria-hidden="true" class="marquee__group">
					<div class="svg-div">
						<img src="images/bits-min.png" alt>
						<p>BITS Pilani</p>
					  </div>
					   <div class="svg-div">
						<img src="images/iima-min.webp" alt>
						<p>IIM Ahmedabad</p>
					  </div>
					   <div class="svg-div">
						<img src="images/iimcal-min.webp" alt>
						<p>IIM Calcutta</p>
					  </div>
					   <div class="svg-div">
						<img src="images/vnit-logo.webp" alt>
						<p>VNIT, Nagpur</p>
					  </div>
					   <div class="svg-div">
						<img src="images/srm-logo.webp" alt>
						<p>SRM University</p>
					  </div>
					   <div class="svg-div">
						<img src="images/nmims-min.png" alt>
						<p>NMIMS</p>
					  </div>
					   <div class="svg-div">
						<img src="images/spjain-min.webp" alt>
						<p>SP Jain</p>
					  </div>
					  <div class="svg-div">
						<img src="images/bml-munjal-min.png" alt>
						<p>BML</p>
					  </div>
					  
					  
					  <!--<div class="svg-div">
						<img src="images/ashoka-min.png" alt>
						<p>Ashoka University</p>
					  </div>
					  
					  
					   <div class="svg-div">
						<img src="images/Medicaps-UniversityLogo.webp" alt>
						<p>Medicaps University</p>
					  </div>
					   <div class="svg-div">
						<img src="images/raisoni-min.png" alt>
						<p>Raisoni Group</p>
					  </div>
					   <div class="svg-div">
						<img src="images/iitropar-min.jpg" alt>
						<p>IIT Ropar</p>
					  </div>
					   <div class="svg-div">
						<img src="images/upes-logo.webp" alt>
						<p>UPES</p>
					  </div>
					   <div class="svg-div">
						<img src="images/IIT_Kanpur_Logo.svg" alt>
						<p>IIT Kanpur</p>
					  </div>
					   <div class="svg-div">
						<img src="images/manipal-logo.webp" alt>
						<p>Manipal, Jaipur</p>
					  </div>
					  <div class="svg-div">
						<img src="images/flame-logo.webp" alt>
						<p>FLAME University</p>
					  </div>-->
					</div>
				  </div>

				  <div class="marquee marquee--reverse">
					<div class="marquee__group">
					  <!--<div class="svg-div">
						<img src="images/bits-min.png" alt>
						<p>BITS Pilani</p>
					  </div>
					   <div class="svg-div">
						<img src="images/iima-min.webp" alt>
						<p>IIM Ahmedabad</p>
					  </div>
					   <div class="svg-div">
						<img src="images/iimcal-min.webp" alt>
						<p>IIM Calcutta</p>
					  </div>
					   <div class="svg-div">
						<img src="images/vnit-logo.webp" alt>
						<p>VNIT, Nagpur</p>
					  </div>
					   <div class="svg-div">
						<img src="images/srm-logo.webp" alt>
						<p>SRM University</p>
					  </div>
					   <div class="svg-div">
						<img src="images/nmims-min.png" alt>
						<p>NMIMS</p>
					  </div>
					   <div class="svg-div">
						<img src="images/spjain-min.webp" alt>
						<p>SP Jain</p>
					  </div>
					  <div class="svg-div">
						<img src="images/bml-munjal-min.png" alt>
						<p>BML</p>
					  </div>-->
					  
					  <div class="svg-div">
						<img src="images/ashoka-min.png" alt>
						<p>Ashoka University</p>
					  </div>
					   <div class="svg-div">
						<img src="images/Medicaps-UniversityLogo.webp" alt>
						<p>Medicaps University</p>
					  </div>
					   <div class="svg-div">
						<img src="images/raisoni-min.png" alt>
						<p>Raisoni Group</p>
					  </div>
					   <div class="svg-div">
						<img src="images/iitropar-min.jpg" alt>
						<p>IIT Ropar</p>
					  </div>
					   <div class="svg-div">
						<img src="images/upes-logo.webp" alt>
						<p>UPES</p>
					  </div>
					   <div class="svg-div">
						<img src="images/IIT_Kanpur_Logo.svg" alt>
						<p>IIT Kanpur</p>
					  </div>
					   <div class="svg-div">
						<img src="images/manipal-logo.webp" alt>
						<p>Manipal, Jaipur</p>
					  </div>
					  <div class="svg-div">
						<img src="images/flame-logo.webp" alt>
						<p>FLAME University</p>
					  </div>
					</div>

					<div aria-hidden="true" class="marquee__group">
					  <!--<div class="svg-div">
						<img src="images/bits-min.png" alt>
						<p>BITS Pilani</p>
					  </div>
					   <div class="svg-div">
						<img src="images/iima-min.webp" alt>
						<p>IIM Ahmedabad</p>
					  </div>
					   <div class="svg-div">
						<img src="images/iimcal-min.webp" alt>
						<p>IIM Calcutta</p>
					  </div>
					   <div class="svg-div">
						<img src="images/vnit-logo.webp" alt>
						<p>VNIT, Nagpur</p>
					  </div>
					   <div class="svg-div">
						<img src="images/srm-logo.webp" alt>
						<p>SRM University</p>
					  </div>
					   <div class="svg-div">
						<img src="images/nmims-min.png" alt>
						<p>NMIMS</p>
					  </div>
					   <div class="svg-div">
						<img src="images/spjain-min.webp" alt>
						<p>SP Jain</p>
					  </div>
					  <div class="svg-div">
						<img src="images/bml-munjal-min.png" alt>
						<p>BML</p>
					  </div>-->
					  <div class="svg-div">
						<img src="images/ashoka-min.png" alt>
						<p>Ashoka University</p>
					  </div>
					   <div class="svg-div">
						<img src="images/Medicaps-UniversityLogo.webp" alt>
						<p>Medicaps University</p>
					  </div>
					   <div class="svg-div">
						<img src="images/raisoni-min.png" alt>
						<p>Raisoni Group</p>
					  </div>
					   <div class="svg-div">
						<img src="images/iitropar-min.jpg" alt>
						<p>IIT Ropar</p>
					  </div>
					   <div class="svg-div">
						<img src="images/upes-logo.webp" alt>
						<p>UPES</p>
					  </div>
					   <div class="svg-div">
						<img src="images/IIT_Kanpur_Logo.svg" alt>
						<p>IIT Kanpur</p>
					  </div>
					   <div class="svg-div">
						<img src="images/manipal-logo.webp" alt>
						<p>Manipal, Jaipur</p>
					  </div>
					  <div class="svg-div">
						<img src="images/flame-logo.webp" alt>
						<p>FLAME University</p>
					  </div>
					</div>
				  </div>
				</article>


				
				</div>
			
			
			</div>
	  
	  </div>
	
	</section>
    <section>
      <div class="bg-pri1 wrap-count">
        <div class="tf-container">
          <div class="row align-item-center">
            <div class="col-lg-3 col-md-6 col-lg-3 col-md-6">
              <div class="wd-counter style-light widget-counter">
                <div class="inner wrap-counter">
                  <h2>
                    <span class="counter-number" data-speed="2000" data-to="25"></span><span>M+</span>
                  </h2>
                </div>
                <p class="description">Jobs Available</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-lg-3 col-md-6" data-wow-delay="0.3s">
              <div class="wd-counter style-light widget-counter">
                <div class="inner wrap-counter">
                  <h2>
                    <span class="counter-number" data-speed="2000" data-to="177"></span><span>k+</span>
                  </h2>
                </div>
                <p class="description">New Jobs This Week!</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-lg-3 col-md-6" data-wow-delay="0.4s">
              <div class="wd-counter style-light widget-counter">
                <div class="inner wrap-counter">
                  <h2>
                    <span class="counter-number" data-speed="2000" data-to="298"></span><span>k+</span>
                  </h2>
                </div>
                <p class="description">Companies Hiring</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-lg-3 col-md-6" data-wow-delay="0.5s">
              <div class="wd-counter style-light widget-counter">
                <div class="inner wrap-counter">
                  <h2>
                    <span class="counter-number" data-speed="2000" data-to="5"></span><span>M+</span>
                  </h2>
                </div>
                <p class="description">Candidates</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End wd-counter -->
   
  
  <!-- WD-testimonials -->
  <section class="testimonials-section">
    <div class="wrap-testimonials over-flow-hidden">
      <div class="tf-container">
        <div class="row">
          <div class="col-lg-12">
            <div class="tf-title style-2">
              <div class="group-title">
                <h1>What our clients are saying</h1>
                <p>Showing companies based on reviews and recent job openings</p>
              </div>
            </div>
          </div>
          <div class="col-lg-12 wow fadeInUp">
              <div class="swiper-container tes-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                  <div class="wd-testimonials">
                    <p class="description">“JobSala is allowing us to go through a large number of candidates with
                      internal limited resources. We are able to do a first screening of candidates so much easier than
                      if we had to meet everyone. We can truly identify and assess a talent pool more efficiently and
                      have our talent ready to start in their new role faster.”</p>
                    <div class="author-group">
                      <div class="avatar">
                        <img src="images/review/testimonials.jpg" alt="images">
                      </div>
                      <div class="infor">
                        <h6>Ravi kant</h6>
                        <div class="position">Head of Marketing Build</div>
                        <ul class="rating">
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li class="inactive"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                              viewBox="0 0 13 14" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="swiper-slide">
                  <div class="wd-testimonials">
                    <p class="description">“JobSala is allowing us to go through a large number of candidates with
                      internal limited resources. We are able to do a first screening of candidates so much easier than
                      if we had to meet everyone. We can truly identify and assess a talent pool more efficiently and
                      have our talent ready to start in their new role faster.”</p>
                    <div class="author-group">
                      <div class="avatar">
                        <img src="images/review/testimonials.jpg" alt="images">
                      </div>
                      <div class="infor">
                        <h6>Ravi kant</h6>
                        <div class="position">Head of Marketing Build</div>
                        <ul class="rating">
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li class="inactive"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                              viewBox="0 0 13 14" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="swiper-slide">
                  <div class="wd-testimonials">
                    <p class="description">“JobSala is allowing us to go through a large number of candidates with
                      internal limited resources. We are able to do a first screening of candidates so much easier than
                      if we had to meet everyone. We can truly identify and assess a talent pool more efficiently and
                      have our talent ready to start in their new role faster.”</p>
                    <div class="author-group">
                      <div class="avatar">
                        <img src="images/review/testimonials.jpg" alt="images">
                      </div>
                      <div class="infor">
                        <h6>Ravi kant</h6>
                        <div class="position">Head of Marketing Build</div>
                        <ul class="rating">
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li class="inactive"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                              viewBox="0 0 13 14" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="swiper-slide">
                  <div class="wd-testimonials">
                    <p class="description">“JobSala is allowing us to go through a large number of candidates with
                      internal limited resources. We are able to do a first screening of candidates so much easier than
                      if we had to meet everyone. We can truly identify and assess a talent pool more efficiently and
                      have our talent ready to start in their new role faster.”</p>
                    <div class="author-group">
                      <div class="avatar">
                        <img src="images/review/testimonials.jpg" alt="images">
                      </div>
                      <div class="infor">
                        <h6>Ravi kant</h6>
                        <div class="position">Head of Marketing Build</div>
                        <ul class="rating">
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li class="inactive"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                              viewBox="0 0 13 14" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              <div class="swiper-pagination tes-bullet"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End testimonials -->
  <!-- WD-Latest News -->
  <section class="news-section">
    <div class="tf-container">
      <div class="row">
        <div class="col-md-12">
          <div class="tf-title style-2 style-4">
            <div class="group-title">
              <h1>Latest News</h1>
              <p>Jobtex’s Blog provides valuable content to the job seeker</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInUp">
          <div class="box-latest">
            <div class="img-latest">
              <img src="images/blog/news-01.jpg" alt="images/blog/news-01.jpg">
            </div>
            <div class="box-content">
              <div class="heading">
                <a href="#" class="tag">Design</a>
                <h3><a href="#"> The 9-to-5 workday doesn’t work anymore</a></h3>
              </div>
              <ul class="date-post">
                <li>by Ravi Kumar </li>
                <li>
                  <span class="icon-calendar"></span>
                  2 days ago
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="box-latest">
            <div class="img-latest">
              <img src="images/blog/news-02.jpg" alt="images/blog/news-02.jpg">
            </div>
            <div class="box-content">
              <div class="heading">
                <a href="#" class="tag">Business</a>
                <h3><a href="#">Cards on the table: 3 ways to spot a transparent company</a>
                </h3>
              </div>
              <ul class="date-post">
                <li>by Ravi Kumar </li>
                <li>
                  <span class="icon-calendar"></span>
                  2 days ago
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
          <div class="box-latest">
            <div class="img-latest">
              <img src="images/blog/news-03.jpg" alt="images/blog/news-03.jpg">
            </div>
            <div class="box-content">
              <div class="heading">
                <a href="#" class="tag">Design</a>
                <h3><a href="#">Jobtex Announces Awards Criteria for the Best Places to Work
                    2023</a></h3>
              </div>
              <ul class="date-post">
                <li>by Ravi Kumar </li>
                <li>
                  <span class="icon-calendar"></span>
                  2 days ago
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- WD-Latest News -->
  <!-- WD Get-app -->
    <section class="bg-get-app get-app-sc">
      <div class="tf-container">
        <div class="row align-item-center">
          <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.3s">
            <div class="wd-get-app">
              <div class="thumb ani4">
                <img src="images/review/phone.png" alt="images" />
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInRight">
            <div class="wd-get-app">
              <div class="content">
                <h4>Download The App</h4>
                <p>
                  Structured digital interviews increase the predictive <br />
                  validity of your hires by 65%.
                </p>
                <div class="group-btn">
                  <a href="#"><img src="images/review/btn2.png" alt="images" /></a>
                  <a href="#"><img src="images/review/btn1.png" alt="images" /></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End WD-Get-app -->
  <!-- wd-partner -->
  <section>
    <div class="wd-partner">
      <div class="tf-container">
        <h1 class="title-partner">
         10L+ top companies trust jobzSala for their hiring needs
        </h1>
        <div class="swiper partner-type-6">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a class="logo-partner" href="#">
                <img src="images/partners/Logo.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-1.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img  src="images/partners/Logo-2.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-3.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img  src="images/partners/Logo-4.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-5.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-1.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-2.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-3.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-4.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-5.png" alt="images/partners/Logo.png">
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--End wd-partner -->
 
 
 
<?php include "footer.php"?>


  </div><!-- /.boxed --> 

<?php include "js-bottom.php" ?>

</body>
</html>