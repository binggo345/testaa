<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>edrick.</title>
        <link rel="icon" type="image/png" href="assets/webland.png">
        <link rel="image_src" type="image/png" href="assets/webland.png">
        <meta name="description" content="edrick. | Web Developer">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

        <!-- Style -->
        <link rel="stylesheet" href="/css/overlay.css">
        <link rel="stylesheet" href="/css/nav.css">
        <link rel="stylesheet" href="/css/home.css">
        <link rel="stylesheet" href="/css/socmed.css">
        <link rel="stylesheet" href="/css/profile.css">
        <link rel="stylesheet" href="/css/work.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            html{
                scroll-behavior: smooth !important;
            }
            body {
                font-family: 'Montserrat', sans-serif !important;
                letter-spacing: 1px !important;
                color: #333 !important;
                overflow-x: hidden !important;
                overflow-y: scroll !important;
                background: black !important;
            }
        </style>
    </head>

    <body>
        <section class="navbar-edrick-">
            <nav class="navbar-edrick text-center align-middle">
                <div class="navbar-bar">
                    <a class="text-decoration-none nav-putih" href="#profile-">
                    <div class="js-work-link" target="_blank">
                        <span class="js-an-word" id="namanya">Profile</span>
                        <span class="underline"></span>
                    </div>
                    </a>
                </div>
                <div class="navbar-bar">
                    <a class="text-decoration-none nav-putih" href="#work-">
                    <div class="js-work-link" target="_blank">
                        <span class="js-an-word" id="namanya">Work</span>
                        <span class="underline"></span>
                    </div>
                    </a>
                </div>
            </nav>   
        </section> 
        <section class="home-">
            <div class="home">
                <h1>
                    <div class="js-work-link" target="_blank">
                        <span class="js-an-word" id="namanya">edrick.</span>
                        <span class="underline"></span>
                    </div>
                </h1>
                <h4>
                    <div class="js-work-link" target="_blank">
                        <span class="js-an-word" id="jobnya">Web Developer</span>
                        <span class="underline"></span>
                    </div>
                </h4>
                
                <div class="socmed">
                    <div class="slide" id="wanya">
                        <a href="https://wa.me/62816901843">
                            <i class="fab fa-whatsapp-square img" style="color: white;" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="slide" id="linenya">
                        <a href="line://ti/p/edricktio">
                            <i class="fab fa-line img" style="color: white;" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="slide" id="githubnya">
                        <a href="https://github.com/binggo345">
                            <i class="fab fa-github-square img" style="color: white;" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="slide" id="linkedinnya">
                        <a href="https://www.linkedin.com/in/edrick-tio-647ba31b6/">
                            <i class="fab fa-linkedin img" style="color: white;" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="slide" id="emailnya">
                        <a href="mailto:edrick930@gmail.com">
                            <i class="fab fa-google img" style="color: white;" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="slide" id="drivenya">
                        <a href="https://drive.google.com/drive/folders/1qIYZ9pBOAaYGaM3QmSrPNQNtf9xjIVVy?usp=sharing">
                            <i class="fab fa-google-drive img" style="color: white;" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="overlay">
            <div class="layer layer-1"></div>
            <div class="layer layer-2">
                <div class="layer-text layer-text2 text-center">e</div>
            </div>
            <div class="layer layer-3">
                <div class="layer-text layer-text3 text-center">d</div>
            </div>
            <div class="layer layer-4">
                <div class="layer-text layer-text4 text-center">r</div>
            </div>
            <div class="layer layer-5">
                <div class="layer-text layer-text5 text-center">i</div>
            </div>
            <div class="layer layer-6">
                <div class="layer-text layer-text6 text-center">c</div>
            </div>
            <div class="layer layer-7">
                <div class="layer-text layer-text7 text-center">k</div>
            </div>
            <div class="layer layer-8">
                <div class="layer-text layer-text8 text-center">.</div>
            </div>
            <div class="layer layer-9"></div>
        </div>

        <a href="#profile-">
            <div class="scroll-down">
                <div class="mouse">
                    <span></span>
                </div>
                <div class="arrow">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </a>  
             
        <section class="profile-" id="profile-">
            <div class="container">
                <div class="main-body pt-5">
                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{asset('assets/70095.jpg')}}" class="admin rounded" width="125">
                                <div class="mt-3">
                                <h4>Edrick</h4>
                                <p class="text">Web Developer</p>
                                <p class="text-sm-right">
                                About me,<br>
                                I'm Edrick, a web developer based in Jakarta, Indonesia.<br>
                                I'm currently at my fifth semester of my university at Bina Nusantara University studying computer science. Growing up I've always been competitive about anything.<br>
                                Starting my first semester of university, I'm starting to take interest in some web developing. That's why I decided to pursue my career to be an professional web developer.<br>
                                I'm pretty good with <strong>HTML, CSS, and Laravel</strong>.
                                </p>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0"><strong>Full Name</strong></h6>
                                </div>
                                <div class="col-sm-9 text-right">
                                Edrick
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0"><strong>Email</strong></h6>
                                </div>
                                <div class="col-sm-9 text-right">
                                edrick930@gmail.com
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0"><strong>Phone</strong></h6>
                                </div>
                                <div class="col-sm-9 text-right">
                                (+62) 816901843
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row gutters-sm">
                            <div class="col-sm-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><div class="text mr-2">Programming</div></h6>
                                    <small>C++</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Java</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>HTML</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>CSS</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>JavaScript</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Laravel</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>PHP</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>blade</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><div class="text mr-2">Other Skills</div></h6>
                                    <small>English</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Chinese/Mandarin</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Web Development</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Web Design</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Teamwork</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Problem Solving</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Project Management</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Task Management</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 83%" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Adobe Photoshop</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Vegas PRO</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <hr class="style1">
            </div>
        </section>

        <section class="work-" id="work-">
            <div class="container">
                <div class="text-center" style="color: white"><h1>Work Experience</h1></div>
                <div class="timeline">
                    <div class="timeline-row upcoming">
                        <div class="timeline-content">
                            <p class="m-0">Upcoming...</p>
                        </div>
                        <hr class="style1">
                    </div>

                    <div class="timeline-row">
                        <div class="timeline-time">
                            From March 2021<small>to February 2022</small>
                        </div>
                        <div class="timeline-content">
                            <i class="icon-attachment">
                                <img class="img-fluid" src="{{asset('assets/agit.png')}}">
                            </i>
                            <h5>PT Astra Graphia Information Technology</h5>
                            <p>Full Stack Developer for PT Astra Graphia Information Technology</p>
                            <a href="https://www.ag-it.com/">
                                <img class="img-fluid work-image" src="{{asset('assets/agit.png')}}">
                            </a>
                        </div>
                        <hr class="style1">
                    </div>

                    <div class="timeline-row">
                        <div class="timeline-time">
                            From December 2020<small>until now</small>
                        </div>
                        <div class="timeline-content">
                            <i class="icon-attachment">
                                <img class="img-fluid" src="{{asset('assets/logo-kausa.png')}}">
                            </i>
                            <h5>kausa</h5>
                            <p>Freelance Web Developer for kausa</p>
                            <a href="https://www.instagram.com/kausa.id/?hl=en">
                                <img class="img-fluid work-image" src="{{asset('assets/kausa.jpg')}}">
                            </a>
                        </div>
                        <hr class="style1">
                    </div>

                    <div class="timeline-row">
                        <div class="timeline-time">
                            From September 2020<small>to January 2021</small>
                        </div>
                        <div class="timeline-content">
                            <i class="icon-attachment">
                                <img class="img-fluid" src="{{asset('assets/logo-bone.png')}}">
                            </i>
                            <h5>PT Bersama Satu Logistics</h5>
                            <p>Freelance Web Developer for PT Bersama Satu Logistics</p>
                            <a href="https://b-one.id/">
                                <img class="img-fluid work-image" src="{{asset('assets/b-one-ss.png')}}">
                            </a>
                        </div>
                        <hr class="style1">
                    </div>

               </div>
            </div>
        </section>

        <section class="footer-">
            <div class="container">
                <div class="garis-footer"></div>
                <div class="copyright text-right mt-1">&copy 2021 Edrick</div>
            </div>
        </section>

        <div class="buat-trigger"></div>
<!-- bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- gsap script -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/MotionPathPlugin.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script>
//load animation
        gsap.to('.layer-text2', {opacity: 1, delay: .3});
        gsap.to('.layer-text3', {opacity: 1, delay: .7});
        gsap.to('.layer-text4', {opacity: 1, delay: .5});
        gsap.to('.layer-text5', {opacity: 1, delay: .6});
        gsap.to('.layer-text6', {opacity: 1, delay: .4});
        gsap.to('.layer-text7', {opacity: 1, delay: .8});
        gsap.to('.layer-text8', {opacity: 1, delay: .9});
            gsap.to('.layer-1', {y: '-100vh', delay: 1.5});
            gsap.to('.layer-2', {y: '-100vh', delay: 1.6});
            gsap.to('.layer-3', {y: '-100vh', delay: 1.7});
            gsap.to('.layer-4', {y: '-100vh', delay: 1.8});
            gsap.to('.layer-5', {y: '-100vh', delay: 1.9});
            gsap.to('.layer-6', {y: '-100vh', delay: 1.8});
            gsap.to('.layer-7', {y: '-100vh', delay: 1.7});
            gsap.to('.layer-8', {y: '-100vh', delay: 1.6});
            gsap.to('.layer-9', {y: '-100vh', delay: 1.5});
            gsap.to('.overlay', {y: '-100vh', delay: 2});
//underline animation
            // Mouseenter function
            function enterAnimation(link, e, index) {
            link.tl.tweenFromTo(0, "midway");
            }

            // Mouseleave function
            function leaveAnimation(link, e) {
            link.tl.play();
            }

            // Animations variables
            let workLinkUnderlineAnimEnter;
            let workLinkUnderlineAnimLeave;

            // Get all links
            let workLinks = document.querySelectorAll(".js-work-link");

            workLinks.forEach((link, index, value) => {
            
            let underline = link.querySelector(".underline");
            link.tl = gsap.timeline({paused: true});
            
            link.tl.fromTo(underline, {
                width: "0%",
                left: "0%",
            }, {
                width: "100%",
                duration: 1, 
            });
            
            link.tl.add("midway");
            
            link.tl.fromTo(underline, {
                width: "100%",
                left: "0%",
            }, {
                width: "0%",
                left: "100%",
                duration: 1, 
                immediateRender: false
            });

            // Mouseenter
            link.addEventListener("mouseenter", (e) => {
                enterAnimation(link, e, index);
            });

            // Mouseleave
            link.addEventListener("mouseleave", (e) => {
                leaveAnimation(link, e);
            });

            });

// hover animation
            const trigger = [...document.getElementsByClassName("slide")];

            trigger.forEach.call(trigger, el => {
            el.addEventListener("mouseover", e => {
                const image = el.getElementsByClassName("img")[0];

                TweenMax.to(image, 0.25, {
                yPercent: 50,
                ease: Power1.easeOut
                });
            });
            });

            trigger.forEach.call(trigger, el => {
            el.addEventListener("mouseout", e => {
                const image = el.getElementsByClassName("img")[0];

                TweenMax.to(image, 0.75, { yPercent: 0, ease: Bounce.easeOut });
            });
            });
//go up
        const t3 = gsap.timeline({
            scrollTrigger: {
                trigger: ".buat-trigger",
                start: "bottom bottom",
                end: "bottom bottom",
                scrub: 2
            }
        });
        t3.fromTo('.word', {opacity: 1}, {duration: 1, opacity: 0});
        </script>
    </body>
</html>
