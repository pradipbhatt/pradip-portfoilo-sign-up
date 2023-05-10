<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JHXX8JNY0K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JHXX8JNY0K');
</script>
    <meta name="generator" content="Hugo 0.105.0" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="author" content="pradip bhatt " />
    <meta name="description" content="pradipbhatt, also known as parry or
    #parry. I&#39;ve been studying in the Far Western University />
    <meta name="keywords" content="#Parry, ThePradip, Pradip Bhatt" />

    <!-- <meta name="description" content="fwu engineering
    fwu,
    fwu.edu.np,
    fwu exam,
    fwu result,
    fwu service commission,
    fwu notice,
    fwu syllabus,
    fwu agriculture,
    fwu meaning,
    fwu logo,
    fwu vacancy,
    fwu management,
    " /> -->
    <meta
      name="robots"
      content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"
    />
    <meta name="theme-color" content="" />
    <link rel="canonical" href="https://pradipbhatt.com.np/" />

    <title>
      Pradip Bhatt — Full-Stack-Dev/CSE Student
    </title>

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <link rel="stylesheet" href="style1.css" />

    <link rel="stylesheet" type="text/css" href="style2.css" />
    <link rel="stylesheet" href="style.css">

    <meta itemprop="name" content="Pradip Bhatt" />
    <meta
      itemprop="description"
      content="Mr. Pradip Bhatt, CSE Student/Full Stack Dev"
    />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="PradipBhatt" />
    <meta
      name="twitter:description"
      content="Mr. Pradip Bhatt, CSE Student/Full Stack Dev"
    />

    <meta property="og:title" content="Pradip Bhatt" />
    <meta
      property="og:description"
      content="Mr. Pradip Bhatt, CSE Student/Full Stack Dev"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://pradipbhatt.com.np/" />

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "Person",
        "familyName": "bhatt",
        "givenName": "Pradip",
        "gender": "http://schema.org/Male",
        "url": "https://pradipbhatt.com.np",
        "image": "https://avatars.githubusercontent.com/u/84025490?s=400&u=da2ba660714bbe88a09518391870673568d77555&v=4",
        "jobTitle": "Student",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Nepal",
          "addressRegion": "Kanchanpur",
          "postalCode": "44600",
          "addressCountry": "Nepal"
        }
      }
    </script>

    <link rel="shortcut icon" type="image/x-icon" href="media/01pradip_school_dress.jpeg" />
  </head>

  <body class="body">
    <div class="container">
      <!-- <header class="header">
        <span class="header__inner">
      </header> -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://pradipbhatt.com.np/" style="text-decoration: none;">
            <div class="logo">
              <span class="logo__mark">&gt;</span>
              <span class="logo__text">ThePradip</span>
              <span class="logo__cursor" style="background-color: #8b0c1d; animation-duration: 2s;"></span>
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="https://pradipbhatt.com.np/computer1.html">Computer Notes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://pradipbhatt.com.np/civil1.html">Civil Notes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="computer.html">Computer-II notes</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <h4 style="color:white; font-weight:bold;">Welcome to Account <?php echo $username;?></h4></div>
      <img src="media/pradip-removebg-preview.png" alt="">
      <div class="content">
        <main aria-role="main">
          <div>


            <h1>Pradip Bhatt</h1>

            <p class="post" style="text-align: justify; word-wrap: break-word;">
              PradipBhatt, also known as ThePradip or #Pradip. Hi everyone, my
              name is Pradip Bhatt and I am a fourth semester computer
              science and engineering(CSE) student from Far Western University. I am
              passionate about participating in hackathons, online coding
              compitisions using my skills and knowledge to come up with
              creative solutions.
              <br />
              <br />

              I have experience working on website projects and have developed a
              database management system in my last second semester, as well as
              a project for the Society of Engineering Students (SOES) at
              fwusoes.com. I have a strong interest in front-end web design and
              have recently been learning Python, where I was able to build an
              AI model.
              <br />
              <br />

              However, as a student from the farthest part of Nepal, I mean to
              say Farwest side, I face challenges such as limited access to
              networking and job opportunities, as well as a lack of local
              communities, workshops, and events to support my development and
              growth in the field.
              <br />
              <br />

              I am eager to participate in any coding competitions and make
              most of this opportunity to learn and collaborate with others.
            </p>
            <div>
              &nbsp;
              <a
                href="https://www.facebook.com/pradipbhatt1326/"
                target="_blank"
                rel="noopener"
                title="Facebook"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
                  ></path>
                </svg>
              </a>
              &nbsp;&nbsp;
              <a
                href="https://twitter.com/PradipBhatt1326
                target="_blank"
                rel="noopener"
                title="Twitter"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"
                  ></path>
                </svg>
              </a>
              &nbsp;&nbsp;
              <a
                href="https://www.instagram.com/pradipbhatt3/"
                target="_blank"
                rel="noopener"
                title="Instagram"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                  <path
                    d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                  ></path>
                  <line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line>
                </svg>
              </a>
              &nbsp;&nbsp;
              <a
                href="https://www.linkedin.com/in/pradip-bhatt-328713232/"
                target="_blank"
                rel="noopener"
                title="Linkedin"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"
                  ></path>
                  <rect x="2" y="9" width="4" height="12"></rect>
                  <circle cx="4" cy="4" r="2"></circle>
                </svg>
              </a>
              &nbsp;&nbsp;
              <a
                href="https://www.youtube.com/channel/UCNxq9Wj0-coj-e6HJ6zYPrg"
                target="_blank"
                rel="noopener"
                title="Youtube"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"
                  ></path>
                  <polygon
                    points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"
                  ></polygon>
                </svg>
              </a>
              &nbsp;&nbsp;
              <a
                href="https://github.com/pradipbhatt"
                target="_blank"
                rel="noopener"
                title="Github"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"
                  ></path>
                </svg>
              </a>
              &nbsp;&nbsp;
              <a
                href="mailto:bhattsammar04@gmail.com"
                target="_blank"
                rel="noopener"
                title="Email"
              >
            </div>
          </div>
        </main>
      </div>

      <footer class="footer">
        <div class="footer__inner">
          <div class="footer__content">
            <span>&copy; 2023</span>
            <span><a href="https://pradipbhatt.com.np">Pradip Bhatt</a></span>
            <span>
                CC BY-PB 1.0
              </a>
            </span>
            <span>
              <a
                href="https://pradipbhatt.com.np/posts/index.xml"
                target="_blank"
                title="rss"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  height="18"
                  viewBox="0 0 20 20"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-rss"
                >
                  <path d="M4 11a9 9 0 0 1 9 9"></path>
                  <path d="M4 4a16 16 0 0 1 16 16"></path>
                  <circle cx="5" cy="19" r="1"></circle>
                </svg>
              </a>
            </span>
          </div>
        </div>
        <span class="login-signup btn btn-warning"><a href="logout.php" style="color:white">Logout</a></span>
            
      </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
  </body>
</html>
