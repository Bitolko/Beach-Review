
<!DOCTYPE html>
<html class="optml_no_js" lang="en-US">

<head>

<style>
    body {
  font-family: "Open Sans", sans-serif;
  color: #444444;

}

a {
  text-decoration: none;
  color: #fd680e;
}

a:hover {
  color: #ff8f4c;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6, .font-primary {
  font-family: "Raleway", sans-serif;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  height: 80px;
  padding: 20px 0;
  z-index: 10;
  position: relative;
}
#header .logo h1 {
  font-size: 36px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 300;
  letter-spacing: 3px;
}
#header .logo h1 a, #header .logo h1 a:hover {
  color: #fff;
  text-decoration: none;
}
#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}
@media (max-width: 768px) {
  #header .logo h1 {
    font-size: 28px;
    padding: 8px 0;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
.nav-menu {
  position: fixed;
  top: 0;
  bottom: 0;
  z-index: 9999;
  overflow-y: auto;
  right: -260px;
  width: 260px;
  padding-top: 18px;
  background: rgba(34, 34, 34, 0.8);
  transition: 0.4s;
}
.nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}
.nav-menu a, .nav-menu a:focus {
  display: block;
  position: relative;
  color: #ffd2b7;
  padding: 10px 20px;
  font-weight: 500;
  transition: 0.3s;
}
.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
  color: #ffa26a;
  text-decoration: none;
}
.nav-menu .drop-down > a:after {
  content: "\ea27";
  font-family: "boxicons";
  padding-left: 10px;
  position: absolute;
  right: 15px;
}
.nav-menu .active.drop-down > a:after {
  content: "\ea27";
}
.nav-menu .drop-down > a {
  padding-right: 35px;
}
.nav-menu .drop-down ul {
  display: none;
  overflow: hidden;
}
.nav-menu ul.drop-down-active {
  display: block;
}
.nav-menu .drop-down li {
  padding-left: 20px;
}

.nav-menu-active {
  right: 0;
}

.nav-toggle {
  position: fixed;
  right: 15px;
  top: 15px;
  z-index: 9998;
  border: 0;
  background: rgba(34, 34, 34, 0.5);
  transition: all 0.4s;
  outline: none !important;
  line-height: 1;
  cursor: pointer;
  text-align: right;
  padding: 10px 12px;
  border-radius: 2px;
}
.nav-toggle i {
  color: #fff;
  font-size: 18px;
}

.nav-toggle-active {
  right: 275px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation
*/
.navbar {
  padding: 0;
}
.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}
.navbar li {
  position: relative;
}
.navbar a, .navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-family: "Raleway", sans-serif;
  font-size: 16px;
  font-weight: 700;
  color: #884922;
  white-space: nowrap;
  transition: 0.3s;
}
.navbar a i, .navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}
.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
  color: #fd680e;
}
.navbar .getstarted, .navbar .getstarted:focus {
  background: #fd680e;
  padding: 8px 20px;
  margin-left: 30px;
  border-radius: 4px;
  color: #fff;
}
.navbar .getstarted:hover, .navbar .getstarted:focus:hover {
  color: #fff;
  background: #fd7827;
}
.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
  border-radius: 4px;
}
.navbar .dropdown ul li {
  min-width: 200px;
}
.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 15px;
  text-transform: none;
  font-weight: 600;
}
.navbar .dropdown ul a i {
  font-size: 12px;
}
.navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
  color: #fd680e;
}
.navbar .dropdown:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}
.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}
.navbar .dropdown .dropdown:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}
@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }
}

/**
* Mobile Navigation
*/
.mobile-nav-toggle {
  color: #743e1d;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}
.mobile-nav-toggle.bi-x {
  color: #fff;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}
.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(75, 40, 19, 0.9);
  transition: 0.3s;
}
.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}
.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  border-radius: 10px;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}
.navbar-mobile a, .navbar-mobile a:hover {
  padding: 10px 20px;
  font-size: 15px;
  color: #743e1d;
}
.navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
  color: #fd680e;
}
.navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
  margin: 15px;
}
.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}
.navbar-mobile .dropdown ul li {
  min-width: 200px;
}
.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}
.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}
.navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a {
  color: #fd680e;
}
.navbar-mobile .dropdown > .dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 80vh;
  background: url("../img/hero-bg.jpg") center center;
  background-size: cover;
  position: relative;
  margin-top: -80px;
  z-index: 9;
}
#hero .hero-container {
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  padding: 0 15px;
}
#hero h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 400;
  line-height: 56px;
  line-height: 56px;
  color: #222;
}
#hero h2 {
  color: #333;
  margin-bottom: 30px;
  font-size: 24px;
}
#hero .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}
#hero .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}
#hero .php-email-form .loading {
  display: none;
  background: rgba(255, 255, 255, 0.5);
  text-align: center;
  padding: 15px;
  border-radius: 50px;
}
#hero .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading-notify 1s linear infinite;
  animation: animate-loading-notify 1s linear infinite;
}
@-webkit-keyframes animate-loading-notify {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes animate-loading-notify {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
#hero .php-email-form input {
  border-radius: 50px;
  box-shadow: none;
  font-size: 14px;
  border: 0;
  padding: 0px 15px 2px 20px;
  width: 250px;
  height: 40px;
  margin: 0 8px;
}
#hero .php-email-form button[type=submit] {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 30px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px;
  border: none;
  color: #fff;
  background: #fd680e;
}
#hero .php-email-form button[type=submit]:hover {
  background: #fd8841;
}
@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}
@media (max-width: 768px) {
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
  #hero .php-email-form input {
    margin: 0 auto;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 80px 0;
}

.section-bg {
  background-color: #fff7f2;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}
.section-title h2 {
  font-size: 32px;
  font-weight: 300;
  margin-bottom: 20px;
  padding-bottom: 15px;
  position: relative;
}
.section-title h2::after {
  content: "";
  position: absolute;
  display: block;
  width: 80px;
  height: 1px;
  background: #fd680e;
  bottom: 0;
  left: calc(50% - 40px);
}
.section-title p {
  margin-bottom: 0;
  font-style: italic;
  color: #666666;
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about h3 {
  font-weight: 300;
  font-size: 26px;
}
.about ul {
  list-style: none;
  padding: 0;
}
.about ul li {
  padding-bottom: 10px;
}
.about ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #fd680e;
}
.about p:last-child {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Why Us
--------------------------------------------------------------*/
.why-us {
  padding-bottom: 30px;
}
.why-us .card {
  border-radius: 3px;
  border: 0;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  margin-bottom: 30px;
}
.why-us .card-icon {
  text-align: center;
  margin-top: -32px;
}
.why-us .card-icon i {
  font-size: 32px;
  color: #fff;
  width: 64px;
  height: 64px;
  padding-top: 10px;
  text-align: center;
  background-color: #fd680e;
  border-radius: 50%;
  text-align: center;
  border: 4px solid #fff;
  transition: 0.3s;
  display: inline-block;
}
.why-us .card-body {
  padding-top: 12px;
}
.why-us .card-title {
  font-weight: 700;
  text-align: center;
}
.why-us .card-title a {
  color: #743e1d;
}
.why-us .card-title a:hover {
  color: #fd680e;
}
.why-us .card-text {
  color: #5e5e5e;
}
.why-us .card:hover .card-icon i {
  background: #fff;
  color: #fd680e;
}
@media (max-width: 1024px) {
  .why-us {
    background-attachment: scroll;
  }
}

/*--------------------------------------------------------------
# Frequenty Asked Questions
--------------------------------------------------------------*/
.faq {
  padding-bottom: 60px;
}
.faq .faq-list {
  padding: 0;
  list-style: none;
}
.faq .faq-list li {
  border-bottom: 1px solid #eee;
  margin-bottom: 20px;
  padding-bottom: 20px;
}
.faq .faq-list a {
  display: block;
  position: relative;
  font-family: #fd680e;
  font-size: 18px;
  line-height: 24px;
  font-weight: 400;
  padding-right: 25px;
  cursor: pointer;
}
.faq .faq-list i {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 0;
}
.faq .faq-list p {
  margin-bottom: 0;
  padding: 10px 0 0 0;
}
.faq .faq-list .icon-show {
  display: none;
}
.faq .faq-list a.collapsed {
  color: #343a40;
}
.faq .faq-list a.collapsed:hover {
  color: #fd680e;
}
.faq .faq-list a.collapsed .icon-show {
  display: inline-block;
}
.faq .faq-list a.collapsed .icon-close {
  display: none;
}

/*--------------------------------------------------------------
# Contact Us
--------------------------------------------------------------*/
.contact .info {
  color: #444444;
}
.contact .info i {
  font-size: 32px;
  color: #fd680e;
  float: left;
}
.contact .info p {
  padding: 0 0 10px 50px;
  margin-bottom: 20px;
  line-height: 22px;
  font-size: 14px;
}
.contact .info .email p {
  padding-top: 5px;
}
.contact .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #5a2c10;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}
.contact .social-links a:hover {
  background: #fd680e;
  color: #fff;
}
.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}
.contact .php-email-form .error-message br + br {
  margin-top: 25px;
}
.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}
.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}
.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}
.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}
.contact .php-email-form input:focus, .contact .php-email-form textarea:focus {
  border-color: #fd680e;
}
.contact .php-email-form button[type=submit] {
  background: #fd680e;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
}
.contact .php-email-form button[type=submit]:hover {
  background: #fd8841;
}
@media (max-width: 768px) {
  .contact .social-links {
    text-align: center;
  }
}
@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: #2f1708;
  padding: 30px 0;
  color: #fff;
  font-size: 14px;
}
#footer .copyright {
  text-align: center;
}
#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #fff;
}
</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
		<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
	<!--
     __        __                      _     _      _
     \ \      / /__    __ _ _ __ ___  | |__ (_)_ __(_)_ __   __ _
      \ \ /\ / / _ \  / _` | '__/ _ \ | '_ \| | '__| | '_ \ / _` |
       \ V  V /  __/ | (_| | | |  __/ | | | | | |  | | | | | (_| |
        \_/\_/ \___|  \__,_|_|  \___| |_| |_|_|_|  |_|_| |_|\__, |
                                                            |___/
    Ever thought about joining us?
   https://careers.vertistudio.com/jobs
     --->

	<!-- This site is optimized with the Yoast SEO plugin v17.3 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Parallax One - Themeisle</title>
	<link rel="canonical" href="https://themeisle.com/themes/parallax-one/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Parallax One - Themeisle" />
	<meta property="og:description" content="⚠️ Parallax One and Parallax One Plus are not&nbsp;scheduled to receive new features going forward. Only security updates and critical fixes will be provided. Here&#8217;s what this means for you You can do either of three things if you really like Parallax One&#8217;s design: (⭐ recommended) a) Switch to Neve ⭐ Neve is our newest&hellip;&nbsp;Read More &raquo;Parallax One" />
	<meta property="og:url" content="https://themeisle.com/themes/parallax-one/" />
	<meta property="og:site_name" content="Themeisle" />
	<meta property="article:publisher" content="https://www.facebook.com/themeisle/" />
	<meta property="article:modified_time" content="2019-08-22T10:32:14+00:00" />
	<meta property="og:image" content="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/uploads/2019/05/general-featured.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@themeisle" />
	<meta name="twitter:label1" content="Est. reading time" />
	<meta name="twitter:data1" content="1 minute" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://themeisle.com/#website","url":"https://themeisle.com/","name":"Themeisle","description":"","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://themeisle.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"ImageObject","@id":"https://themeisle.com/themes/parallax-one/#primaryimage","inLanguage":"en-US","url":"https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/uploads/2019/05/general-featured.jpg","contentUrl":"https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/uploads/2019/05/general-featured.jpg","width":1200,"height":630},{"@type":"WebPage","@id":"https://themeisle.com/themes/parallax-one/#webpage","url":"https://themeisle.com/themes/parallax-one/","name":"Parallax One - Themeisle","isPartOf":{"@id":"https://themeisle.com/#website"},"datePublished":"2019-05-07T15:26:05+00:00","dateModified":"2019-08-22T10:32:14+00:00","breadcrumb":{"@id":"https://themeisle.com/themes/parallax-one/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://themeisle.com/themes/parallax-one/"]}]},{"@type":"BreadcrumbList","@id":"https://themeisle.com/themes/parallax-one/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Parallax One"}]}]}</script>
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='//s.w.org' />
<link rel='dns-prefetch' href='//mllj2j8xvfl0.i.optimole.com' />
<link rel='preconnect' href='https://mllj2j8xvfl0.i.optimole.com' />
<link rel="alternate" type="application/rss+xml" title="Themeisle &raquo; Feed" href="https://themeisle.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Themeisle &raquo; Comments Feed" href="https://themeisle.com/comments/feed/" />
<link rel='stylesheet' id='wp-block-library-css'  href='https://s30246.pcdn.co/wp-includes/css/dist/block-library/style.min.css?ver=5.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='themeisle-block_styles-css'  href='https://s30246.pcdn.co/wp-content/plugins/otter-blocks/packages/codeinwp/gutenberg-blocks/build/style.css?ver=1.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='neve-style-css'  href='https://s30246.pcdn.co/wp-content/themes/neve/style-main-new.min.css?ver=3.0.6' type='text/css' media='all' />
<style id='neve-style-inline-css' type='text/css'>
.nv-meta-list li.meta:not(:last-child):after { content:"/" }
/*
 * The Typekit service used to deliver this font or fonts for use on websites
 * is provided by Adobe and is subject to these Terms of Use
 * http://www.adobe.com/products/eulas/tou_typekit. For font license
 * information, see the list below.
 *
 * sofia-pro:
 *   - http://typekit.com/eulas/00000000000000007735a14e
 *   - http://typekit.com/eulas/00000000000000007735a163
 *   - http://typekit.com/eulas/00000000000000007735a167
 *
 * © 2009-2021 Adobe Systems Incorporated. All Rights Reserved.
 */
/*{"last_published":"2021-10-08 13:53:30 UTC"}*/

@import url("https://p.typekit.net/p.css?s=1&k=set1ymb&ht=tk&f=24539.24547.24549&a=6202475&app=typekit&e=css");

@font-face {
font-family:"sofia-pro";
src:url("https://use.typekit.net/af/09d302/00000000000000007735a14e/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff2"),url("https://use.typekit.net/af/09d302/00000000000000007735a14e/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff"),url("https://use.typekit.net/af/09d302/00000000000000007735a14e/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("opentype");
font-display:swap;font-style:normal;font-weight:700;
}

@font-face {
font-family:"sofia-pro";
src:url("https://use.typekit.net/af/5e6988/00000000000000007735a163/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff2"),url("https://use.typekit.net/af/5e6988/00000000000000007735a163/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff"),url("https://use.typekit.net/af/5e6988/00000000000000007735a163/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("opentype");
font-display:swap;font-style:normal;font-weight:400;
}

@font-face {
font-family:"sofia-pro";
src:url("https://use.typekit.net/af/61b4ba/00000000000000007735a167/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n6&v=3") format("woff2"),url("https://use.typekit.net/af/61b4ba/00000000000000007735a167/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n6&v=3") format("woff"),url("https://use.typekit.net/af/61b4ba/00000000000000007735a167/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n6&v=3") format("opentype");
font-display:swap;font-style:normal;font-weight:600;
}

.tk-sofia-pro { font-family: "sofia-pro",sans-serif; }

 :root{ --container: 748px;--postWidth:100%; --primaryBtnBg: var(--nv-primary-accent); --primaryBtnHoverBg: var(--nv-primary-accent); --primaryBtnColor: #ffffff; --secondaryBtnColor: var(--nv-primary-accent); --primaryBtnHoverColor: #ffffff; --secondaryBtnHoverColor: var(--nv-primary-accent);--primaryBtnBorderRadius:3px;--secondaryBtnBorderRadius:3px;--secondaryBtnBorderWidth:3px;--btnPadding:13px 15px;--primaryBtnPadding:13px 15px;--secondaryBtnPadding:10px 12px; --bodyFontFamily: sofia-pro; --bodyFontSize: 15px; --bodyLineHeight: 1.6; --bodyLetterSpacing: 0px; --bodyFontWeight: 400; --h1FontSize: 36px; --h1FontWeight: 700; --h1LineHeight: 1.2; --h1LetterSpacing: 0px; --h1TextTransform: none; --h2FontSize: 28px; --h2FontWeight: 700; --h2LineHeight: 1.3; --h2LetterSpacing: 0px; --h2TextTransform: none; --h3FontSize: 24px; --h3FontWeight: 700; --h3LineHeight: 1.4; --h3LetterSpacing: 0px; --h3TextTransform: none; --h4FontSize: 20px; --h4FontWeight: 700; --h4LineHeight: 1.6; --h4LetterSpacing: 0px; --h4TextTransform: none; --h5FontSize: 16px; --h5FontWeight: 700; --h5LineHeight: 1.6; --h5LetterSpacing: 0px; --h5TextTransform: none; --h6FontSize: 14px; --h6FontWeight: 700; --h6LineHeight: 1.6; --h6LetterSpacing: 0px; --h6TextTransform: none;--formFieldBorderWidth:2px;--formFieldBorderRadius:3px; --formFieldBgColor: var(--nv-site-bg); --formFieldBorderColor: #dddddd; --formFieldColor: var(--nv-text-color);--formFieldPadding:10px 12px; } .has-neve-button-color-color{ color: var(--nv-primary-accent)!important; } .has-neve-button-color-background-color{ background-color: var(--nv-primary-accent)!important; } .alignfull > [class*="__inner-container"], .alignwide > [class*="__inner-container"]{ max-width:718px;margin:auto } .nv-meta-list{ --avatarSize: 20px; } .single .nv-meta-list{ --avatarSize: 20px; } .nv-post-cover{ --height: 400px;--padding:40px 15px; --vAlign: center; } .nv-is-boxed.nv-title-meta-wrap{ --padding:40px 15px; --bgColor: var(--nv-dark-bg); } .nv-overlay{ --opacity: 50; } .nv-is-boxed.nv-comments-wrap{ --padding:20px; } .nv-is-boxed.comment-respond{ --padding:20px; } .header-top{ --color: var(--nv-text-color); --bgColor: #f0f0f0; } .header-main{ --color: var(--nv-text-color); --bgColor: #ffffff; } .header-bottom{ --color: var(--nv-text-color); --bgColor: #ffffff; } .header-menu-sidebar-bg{ --justify: flex-start; --textAlign: left;--flexG: 1; --color: var(--nv-text-color); --bgColor: #ffffff; } .header-menu-sidebar{ width: 360px; } .builder-item--logo{ --maxWidth: 120px;--padding:10px 0;--margin:0; --textAlign: left;--justify: flex-start; } .builder-item--nav-icon,.header-menu-sidebar .close-sidebar-panel .navbar-toggle{ --color: #4268cf;--borderRadius:3px;--borderWidth:0; } .builder-item--nav-icon{ --padding:10px 15px;--margin:0; } .builder-item--primary-menu{ --color: #32466b; --hoverColor: #ff7f66; --activeColor: #32466b; --spacing: 25px; --height: 25px;--padding:0;--margin:0; --fontSize: 15px; --lineHeight: 1.6em; --letterSpacing: 1px; --fontWeight: 700; --textTransform: uppercase; --iconSize: 15px; } .hfg-is-group.has-primary-menu .inherit-ff{ --inheritedFW: 700; } .builder-item--header_search_responsive{ --iconSize: 24px; --color: var(--nv-primary-accent); --hoverColor: var(--nv-text-color); --formFieldFontSize: 14px;--formFieldBorderWidth:2px;--formFieldBorderRadius:2px; --formFieldBorderColor: var(--nv-secondary-accent); --formFieldColor: var(--nv-secondary-accent); --height: 40px;--padding:0 10px;--margin:0; } .footer-top-inner .row{ grid-template-columns:1fr 1fr 1fr; --vAlign: flex-start; } .footer-top{ --color: var(--nv-text-color); --bgColor: #ffffff; } .footer-main-inner .row{ grid-template-columns:1fr 1fr 1fr; --vAlign: flex-start; } .footer-main{ --color: var(--nv-text-color); --bgColor: var(--nv-site-bg); } .footer-bottom-inner .row{ grid-template-columns:1fr 1fr 1fr; --vAlign: flex-start; } .footer-bottom{ --color: var(--nv-text-dark-bg); --bgColor: #24292e; } .builder-item--footer_copyright{ --padding:0;--margin:0; --fontSize: 1em; --lineHeight: 1.6; --letterSpacing: 0px; --fontWeight: 500; --textTransform: none; --iconSize: 1em; --textAlign: left;--justify: flex-start; } @media(min-width: 576px){ :root{ --container: 992px;--postWidth:50%;--btnPadding:13px 15px;--primaryBtnPadding:13px 15px;--secondaryBtnPadding:10px 12px; --bodyFontSize: 16px; --bodyLineHeight: 1.6; --bodyLetterSpacing: 0px; --h1FontSize: 38px; --h1LineHeight: 1.2; --h1LetterSpacing: 0px; --h2FontSize: 30px; --h2LineHeight: 1.2; --h2LetterSpacing: 0px; --h3FontSize: 26px; --h3LineHeight: 1.4; --h3LetterSpacing: 0px; --h4FontSize: 22px; --h4LineHeight: 1.5; --h4LetterSpacing: 0px; --h5FontSize: 18px; --h5LineHeight: 1.6; --h5LetterSpacing: 0px; --h6FontSize: 14px; --h6LineHeight: 1.6; --h6LetterSpacing: 0px; } .nv-meta-list{ --avatarSize: 20px; } .single .nv-meta-list{ --avatarSize: 20px; } .nv-post-cover{ --height: 400px;--padding:60px 30px; --vAlign: center; } .nv-is-boxed.nv-title-meta-wrap{ --padding:60px 30px; } .nv-is-boxed.nv-comments-wrap{ --padding:30px; } .nv-is-boxed.comment-respond{ --padding:30px; } .header-menu-sidebar-bg{ --justify: flex-start; --textAlign: left;--flexG: 1; } .header-menu-sidebar{ width: 360px; } .builder-item--logo{ --maxWidth: 120px;--padding:10px 0;--margin:0; --textAlign: left;--justify: flex-start; } .builder-item--nav-icon{ --padding:10px 15px;--margin:0; } .builder-item--primary-menu{ --spacing: 25px; --height: 25px;--padding:0;--margin:0; --fontSize: 15px; --lineHeight: 1.6em; --letterSpacing: 1px; --iconSize: 15px; } .builder-item--header_search_responsive{ --formFieldFontSize: 14px;--formFieldBorderWidth:2px;--formFieldBorderRadius:2px; --height: 40px;--padding:0 10px;--margin:0; } .builder-item--footer_copyright{ --padding:0;--margin:0; --fontSize: 1em; --lineHeight: 1.6; --letterSpacing: 0px; --iconSize: 1em; --textAlign: left;--justify: flex-start; } }@media(min-width: 960px){ :root{ --container: 1200px;--postWidth:33.333333333333%;--btnPadding:13px 15px;--primaryBtnPadding:13px 15px;--secondaryBtnPadding:10px 12px; --bodyFontSize: 16px; --bodyLineHeight: 1.7; --bodyLetterSpacing: 0px; --h1FontSize: 40px; --h1LineHeight: 1.1; --h1LetterSpacing: 0px; --h2FontSize: 32px; --h2LineHeight: 1.2; --h2LetterSpacing: 0px; --h3FontSize: 28px; --h3LineHeight: 1.4; --h3LetterSpacing: 0px; --h4FontSize: 24px; --h4LineHeight: 1.5; --h4LetterSpacing: 0px; --h5FontSize: 20px; --h5LineHeight: 1.6; --h5LetterSpacing: 0px; --h6FontSize: 16px; --h6LineHeight: 1.6; --h6LetterSpacing: 0px; } #content .container .col, #content .container-fluid .col{ max-width: 100%; } .alignfull > [class*="__inner-container"], .alignwide > [class*="__inner-container"]{ max-width:1170px } .container-fluid .alignfull > [class*="__inner-container"], .container-fluid .alignwide > [class*="__inner-container"]{ max-width:calc(100% + 15px) } .nv-sidebar-wrap, .nv-sidebar-wrap.shop-sidebar{ max-width: 0%; } .nv-meta-list{ --avatarSize: 20px; } .single .nv-meta-list{ --avatarSize: 20px; } .nv-post-cover{ --height: 400px;--padding:60px 40px; --vAlign: center; } .nv-is-boxed.nv-title-meta-wrap{ --padding:60px 40px; } .nv-is-boxed.nv-comments-wrap{ --padding:40px; } .nv-is-boxed.comment-respond{ --padding:40px; } .header-main{ --height:69px; } .header-menu-sidebar-bg{ --justify: flex-start; --textAlign: left;--flexG: 1; } .header-menu-sidebar{ width: 360px; } .builder-item--logo{ --maxWidth: 150px;--padding:10px 0;--margin:0; --textAlign: left;--justify: flex-start; } .builder-item--nav-icon{ --padding:10px 15px;--margin:0; } .builder-item--primary-menu{ --spacing: 25px; --height: 25px;--padding:0;--margin:0; --fontSize: 14px; --lineHeight: 30px; --letterSpacing: 1px; --iconSize: 14px; } .builder-item--header_search_responsive{ --formFieldFontSize: 20px;--formFieldBorderWidth:4px;--formFieldBorderRadius:2px; --height: 60px;--padding:0 10px;--margin:0 0 0 11px;; } .builder-item--footer_copyright{ --padding:0;--margin:0; --fontSize: 1em; --lineHeight: 1.6; --letterSpacing: 0px; --iconSize: 1em; --textAlign: left;--justify: flex-start; } }:root{--nv-primary-accent:#2f5aae;--nv-secondary-accent:#2f5aae;--nv-site-bg:#ffffff;--nv-light-bg:#f4f5f7;--nv-dark-bg:#121212;--nv-text-color:#272626;--nv-text-dark-bg:#ffffff;--nv-c-1:#9463ae;--nv-c-2:#be574b;--nv-fallback-ff:Arial, Helvetica, sans-serif;}
</style>
<link rel='stylesheet' id='themeisle-mainstyle-css'  href='https://s30246.pcdn.co/wp-content/themes/themeisle/assets/css/style.min.css?ver=3.1.51' type='text/css' media='all' />
<style id='themeisle-mainstyle-inline-css' type='text/css'>

		.ti-testimonial.star5 .by p:after {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/stars.svg);
		}
		.banner {
			background-image: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/bg-new.svg);
		}
		.banner:after,
		.banner-homepage:after {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/border-grey.svg);
		}
		.homepage-plugins-wrapper:before,
		.homepage-plugins-wrapper:after,
		.mid-section:before,
		.mid-section:after,
		.real-people:after {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/border-white.svg);
		}
		.guides-about .innerblocks-wrap > div.wp-block-themeisle-blocks-advanced-column:nth-child(2) {
			background-image: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/pirate_relax.png);
		}
		footer {
			background-image: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/footer-bg2.png);
		}
		.about-section2 {
			background-image: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/pirate-relax-bg.jpg);
		}
		.affiliates-right-panel ul li:before {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/check-white.svg);
		}
		.support-section li:before {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/check-orange.svg);
		}
		.plugin-princing-box.recommended:before {
			background-image: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/ribbon.svg);
		}
		.grey-bg:before,
		.grey-bg:after {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/border-grey.svg);
		}

		@media (max-width:959px) {
			footer {
				background-image: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/footer-mobile.png);
			}
		}
		@media (max-width:768px) {
			.homepage-plugins-wrapper:after {
				content: "";
			}
		}
		@media (max-width: 600px) {
			.mid-section:before,
			.mid-section:after {
				content: "";
			}
		}
		@media (max-width: 480px) {
			.page-id-8364725 .real-people:after {
    			content: "";
    		}
		}

</style>
<link rel='stylesheet' id='themeisle-singletheme-css'  href='https://s30246.pcdn.co/wp-content/themes/themeisle/assets/css/single-theme.min.css?ver=3.1.51' type='text/css' media='all' />
<style id='themeisle-singletheme-inline-css' type='text/css'>

		.section2 .has-2-columns ul li:before {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/check-white.svg);
		}
		.section3:after,
		.section6:after {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/border-grey.svg);
		}
		.section7:after,
		.section8:after,
		.section8:before,
		.section10:before {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/border-blue.svg);
		}
		.section11 li:before {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/check-orange.svg);
		}
		.section13 p:before {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/check-grey.svg);
		}
		.section10 {
			background-image: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/compass.png);
		}
		.section12-title:before,
		.theme-buy-section:before {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/waves.svg);
		}
		.hestia .section1 h1:before,
		.hestia-pro .section1 h1:before,
		.hestia-pro.upgrade .section1 h1:before {
			background-image: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/hestia-logo-alt.svg);
		}
		.zelle-pro-one-page-wordpress-theme .section1 h1:before {
			background-image: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/zelle-logo.svg);
		}
		.shop-isle-pro .section1 h1:before,
  		.shop-isle .section1 h1:before {
  			background-image: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/shopisle-logo.svg);
  		}
  		.neve .section1 h1:before {
  			background-image: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/neve-logo.svg);
  		}
		.hestia .section8:before,
		.hestia .section8:after,
		.hestia-pro .section8:before,
		.hestia-pro .section8:after,
		.hestia-pro.upgrade .section8:before,
		.hestia-pro.upgrade .section8:after,
		.hestia .section10:before,
  		.hestia-pro .section10:before,
  		.hestia-pro.upgrade .section10:before {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/border-hestia.svg);
		}
		.hestia .section4:before,
		.hestia-pro .section4:before,
		.hestia-pro.upgrade .section4:before,
		.hestia .section4:after,
  		.hestia-pro .section4:after,
  		.hestia-pro.upgrade .section4:after,
  		.hestia-pro .section4-title:before,
  		.hestia-pro.upgrade .section4-title:before,
  		.hestia-pro .section4-title:after,
	  	.hestia-pro.upgrade .section4-title:after,
	  	.shop-isle-pro.upgrade .section4-title:before,
  		.zelle-pro-one-page-wordpress-theme.upgrade .section4-title:before,
  		.shop-isle-pro.upgrade .section4:after,
  		.zelle-pro-one-page-wordpress-theme.upgrade .section4:after,
  		.neve .section4-title:before,
  		.neve .section4:after {
  			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/border-grey.svg);
		}
		.hestia .support-section li:before,
		.hestia-pro .support-section li:before,
		.hestia-pro.upgrade .support-section li:before {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/check-hestia.svg);
		}
		.hestia .theme-buy-section:before {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/waves-hestia.svg);
		}
		.border-top-only:before {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/border-grey.svg) !important;
		}
		.neve .section8:before,
		.neve .section8:after,
		.neve .section10:before {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/border-neve.svg);
		}
		.neve .support-section li:before,
		.multi-features .wp-block-column h4:before,
		.neve-list li:before {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/check-neve.svg);
		}
		#popup-wrapper .popup .popup-container div:after {
			content: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/border-grey.svg);
		}
		#popup-wrapper .popup .popup-container div:before {
			background-image: url(https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/ribbon.svg);
		}

		@media (max-width:480px) {
			.hestia .section10:before,
			.hestia-pro .section10:before,
			.hestia-pro.upgrade .section10:before,
			.neve .section4:after,
			.section10:before,
			.neve .section10:before,
			.shop-isle-pro.upgrade .section4:after,
  			.zelle-pro-one-page-wordpress-theme.upgrade .section4:after {
				content: "";
			}
		}

</style>
<style id='optm_lazyload_noscript_style-inline-css' type='text/css'>
html.optml_no_js img[data-opt-src] { display: none !important; }
 html .elementor-section[data-settings*="background_background"]:not(.optml-bg-lazyloaded),
html .elementor-section > .elementor-background-overlay:not(.optml-bg-lazyloaded),
html .wp-block-cover[style*="background-image"]:not(.optml-bg-lazyloaded) { background-image: none !important; }
</style>
<script type='text/javascript' id='optml-print-js-after'>
			(function(w, d){
					w.addEventListener("beforeprint", function(){
						let images = d.getElementsByTagName( "img" );
							for (let img of images) {
								if ( !img.dataset.optSrc) {
									continue;
								}
								img.src = img.dataset.optSrc;
								delete img.dataset.optSrc;
							}
					});

			}(window, document));

</script>
<link rel="https://api.w.org/" href="https://themeisle.com/wp-json/" /><link rel="alternate" type="application/json" href="https://themeisle.com/wp-json/wp/v2/themes/8364757" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://themeisle.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://s30246.pcdn.co/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 5.8.1" />
<link rel='shortlink' href='https://themeisle.com/?p=8364757' />
<meta name="facebook-domain-verification" content="p4mux1j1arfdfl8doop7acld3tijel" /><script>"dataLayer.push({\n\t\t\t\t\t\t\t\tproduct_id: \"\",\n\t\t\t\t\t\t\t\tproduct_name: \"Parallax One\",\n\t\t\t\t\t\t\t\tproduct_price: \"0\",\n\t\t\t\t\t\t\t\tcontent_category: \"Theme\/Free\",\n\t\t\t\t\t\t\t\tproduct_category: \"Theme\",\n\t\t\t\t\t\t\t})"</script>	<script data-type="lazy" data-src="data:text/javascript;base64,KGZ1bmN0aW9uICh3LCBkLCBzLCBsLCBpKSB7CgkJCXdbbF0gPSB3W2xdIHx8IFtdOwoJCQl3W2xdLnB1c2goewoJCQkJJ2d0bS5zdGFydCc6CgkJCQkJbmV3IERhdGUoKS5nZXRUaW1lKCksIGV2ZW50OiAnZ3RtLmpzJwoJCQl9KTsKCQkJdmFyIGYgPSBkLmdldEVsZW1lbnRzQnlUYWdOYW1lKHMpWzBdLAoJCQkJaiA9IGQuY3JlYXRlRWxlbWVudChzKSwgZGwgPSBsICE9ICdkYXRhTGF5ZXInID8gJyZsPScgKyBsIDogJyc7CgkJCWouYXN5bmMgPSB0cnVlOwoJCQlqLnNyYyA9CgkJCQknaHR0cHM6Ly93d3cuZ29vZ2xldGFnbWFuYWdlci5jb20vZ3RtLmpzP2lkPScgKyBpICsgZGw7CgkJCWYucGFyZW50Tm9kZS5pbnNlcnRCZWZvcmUoaiwgZik7CgkJfSkod2luZG93LCBkb2N1bWVudCwgJ3NjcmlwdCcsICdkYXRhTGF5ZXInLCAnR1RNLUtNNDRSUTgnKTs="></script>
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><!-- There is no amphtml version available for this URL. --><meta name="generator" content="Optimole 3.2.1">
		<style type="text/css">
			img[data-opt-src]:not([data-opt-lazy-loaded]) {
				transition: .2s filter linear, .2s opacity linear, .2s border-radius linear;
				-webkit-transition: .2s filter linear, .2s opacity linear, .2s border-radius linear;
				-moz-transition: .2s filter linear, .2s opacity linear, .2s border-radius linear;
				-o-transition: .2s filter linear, .2s opacity linear, .2s border-radius linear;
			}
			img[data-opt-src]:not([data-opt-lazy-loaded]) {
					opacity: .75;
					-webkit-filter: blur(8px);
					-moz-filter: blur(8px);
					-o-filter: blur(8px);
					-ms-filter: blur(8px);
					filter: blur(8px);
					transform: scale(1.04);
					animation: 0.1s ease-in;
					-webkit-transform: translate3d(0, 0, 0);
			}
			/** optmliframelazyloadplaceholder */
		</style>
		<script type="application/javascript">
					document.documentElement.className = document.documentElement.className.replace(/\boptml_no_js\b/g, "");
						(function(w, d){
							var b = d.getElementsByTagName("head")[0];
							var s = d.createElement("script");
							var v = ("IntersectionObserver" in w && "isIntersecting" in w.IntersectionObserverEntry.prototype) ? "_no_poly" : "";
							s.async = true;
							s.src = "https://mllj2j8xvfl0.i.optimole.com/js-lib/v2/latest/optimole_lib" + v  + ".min.js";
							b.appendChild(s);
							w.optimoleData = {
								lazyloadOnly: "optimole-lazy-only",
								backgroundReplaceClasses: [],
								nativeLazyload : false,
								scalingDisabled: false,
								watchClasses: [],
								backgroundLazySelectors: ".elementor-section[data-settings*=\"background_background\"], .elementor-section > .elementor-background-overlay, .wp-block-cover[style*=\"background-image\"]",
								network_optimizations: false,
								ignoreDpr: false,
								quality: 90
							}
						}(window, document));
					document.addEventListener( "DOMContentLoaded", function() {

																		if ( "loading" in HTMLImageElement.prototype && Object.prototype.hasOwnProperty.call( optimoleData, "nativeLazyload" ) && optimoleData.nativeLazyload === true ) {
																			const images = document.querySelectorAll('img[loading="lazy"]');
																					images.forEach( function (img) {
																						if ( !img.dataset.optSrc) {
																							return;
																						}
																						img.src = img.dataset.optSrc;
																						delete img.dataset.optSrc;
																					 });
																		}
																	} );
		</script><link rel="icon" href="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/uploads/2019/04/cropped-favicon-2-32x32.png" sizes="32x32" />
<link rel="icon" href="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/uploads/2019/04/cropped-favicon-2-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/uploads/2019/04/cropped-favicon-2-180x180.png" />
<meta name="msapplication-TileImage" content="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/uploads/2019/04/cropped-favicon-2-270x270.png" />
		<style type="text/css" id="wp-custom-css">
			/* temporary fix support block */
.support-section .has-2-columns .innerblocks-wrap {
  align-items: baseline;
}

/* Fix gap between pricing tables */
@media (min-width: 769px) {
	.plugin-princing-box:not(:last-child) {
		margin-right: 15px !important;
	}
}

@media (max-width: 768px) {
  .support-section .has-2-columns .innerblocks-wrap {
    align-items: initial;
  }
}
/* end */
#gform_wrapper_9 {
  display: block;
}
/* fix 2 columns percentage on theme pages */
.single-themes .wp-block-columns.has-2-columns .wp-block-column {
  flex-basis: 50%;
  flex-grow: 0;
}
/* end */
.single-themes
  .plugin-pricing-boxes
  .wp-block-themeisle-blocks-advanced-columns-overlay {
  z-index: -1;
}
.neve .section4,
.neve .section4-title {
  margin-bottom: 0;
}
.about-section3 .innerblocks-wrap {
  align-items: center;
}
/* temporary fix feedzy */
.feedzy-rss-feeds.upgrade .real-people {
  margin-top: 0 !important;
}
.feedzy-rss-feeds.upgrade .plugin-heading-small {
  padding-top: 120px;
}
@media (max-width: 768px) {
  .feedzy-rss-feeds.upgrade .plugin-heading-small {
    padding-top: 60px;
  }
}
@media (max-width: 480px) {
  .feedzy-rss-feeds.upgrade .plugin-heading-small {
    padding-top: 30px;
  }
}
/* student page separators temp */
.page-template-page-student .wp-block-separator {
  margin: 70px auto 50px;
}
@media (max-width: 800px) {
  .wp-block-separator {
    margin: 50px auto 40px;
  }
}
/* temporary fix gtm iframe on AMP */
.amp-wp-b3bfe1b {
  display: none !important;
  visibility: hidden;
}
/* end */
#alert-box-title a {
  color: #4376dd;
  font-weight: 600;
}
/* temporary fix retired themes wrapper */
.themes-template-page-contained-theme .nv-content-wrap {
  margin-top: -150px;
}
@media (max-width: 600px) {
  .themes-template-page-contained-theme .nv-content-wrap {
    margin-top: -90px;
  }
  .ti-twitter-embed twitter-widget {
    width: 100% !important;
  }
}
@media (max-width: 480px) {
  .themes-template-page-contained-theme .nv-content-wrap {
    margin-top: 0;
  }
}
/* homepage video buttons */

/* neve free day styling */
.page-id-8365636 .free-icons-section-title {
  text-align: center;
}
.page-id-8365636 .free-icons-section-title h2,
.page-id-8365636 .free-icons-section-title p {
  max-width: 900px;
  margin-left: auto;
  margin-right: auto;
}
.page-id-8365636 .home-plugin-box h5:before {
  content: url(https://mllj2j8xvfl0.i.optimole.com/w:auto/h:auto/q:auto/https:/s30246.pcdn.co/wp-content/themes/themeisle/assets/img/check-neve.svg);
  position: relative;
  top: 2px;
  margin-right: 10px;
}
.page-id-8365636 .home-plugin-box p {
  margin-left: 28px;
}
.page-id-8365636 .theme-buy-section .interior-h3 {
  display: block;
  margin-bottom: 60px;
}
.page-id-8365636 .theme-buy-section .plugin-heading-small {
  text-transform: uppercase;
  font-size: 14px;
  letter-spacing: 1.14px;
  font-weight: 600;
  margin: 0;
}
.neve-day-titles {
  text-align: center;
}
.neve-day-titles h5 {
  text-transform: uppercase;
  font-size: 14px;
  letter-spacing: 1.14px;
  font-weight: 600;
  margin: 0;
}
.neve-day-titles .interior-h3 {
  margin-bottom: 20px;
}
@media (max-width: 1199px) {
  .page-id-8365636 .homepage-plugins {
    padding-bottom: 10px !important;
  }
}
@media (max-width: 960px) {
  .neve-day-titles {
    padding: 0;
    margin-bottom: 0;
  }
  .page-id-8365636 .homepage-testimonials {
    margin-top: -60px !important;
  }
}
@media (max-width: 959px) {
  .page-id-8365636 .banner h1 {
    max-width: 770px;
    margin-left: auto;
    margin-right: auto;
    line-height: 60px;
  }
  .page-id-8365636 .homepage-plugins-wrapper {
    margin-top: 100px !important;
  }
  .page-id-8365636 .plugin-princing-box.recommended:before {
    font-size: 14px;
  }
  .page-id-8365636 .theme-buy-section {
    padding-bottom: 420px !important;
  }
  .page-id-8365636 .homepage-testimonials .ti-testimonial {
    margin: 15px 7px;
  }
}
@media (max-width: 768px) {
  .page-id-8365636 .homepage-plugins-wrapper:before {
    content: "";
  }
  .page-id-8365636 .homepage-plugins-wrapper {
    margin-top: 0 !important;
  }
  .page-id-8365636 .theme-buy-section {
    padding-bottom: 0 !important;
    margin-bottom: 0 !important;
  }
  .page-id-8365636 .plugin-pricing-details {
    margin-top: -60px !important;
  }
}
@media (max-width: 600px) {
  .team-box-no-display {
    display: none;
  }
  .page-id-8365636 iframe {
    height: 293px;
    width: 100%;
  }
  .page-id-8365636 .free-icons-section-title {
    margin-bottom: -40px !important;
  }
  .page-id-8365636 .banner h1 {
    line-height: 35px;
  }
}

@media (max-width: 480px) {
  .page-id-8365636 iframe {
    height: 248px;
  }
  .page-id-8365636 .free-icons-section-title {
    margin-bottom: 0 !important;
  }
  .page-id-8365636 .homepage-plugins-wrapper {
    text-align: center;
  }
  .page-id-8365636
    .homepage-plugins-wrapper
    .wp-block-themeisle-blocks-advanced-column {
    margin-bottom: -20px !important;
  }
  .page-id-8365636 .homepage-plugins-wrapper .interior-h3 {
    margin: 30px 0 20px;
  }
  .page-id-8365636 .theme-buy-section .interior-h3 {
    margin-bottom: -20px;
    margin-top: 0;
  }
  .page-id-8365636 .plugin-pricing-details {
    margin-top: -40px !important;
    margin-bottom: 30px !important;
  }
  .page-id-8365636 .container.page-shadow {
    text-align: center;
    margin-bottom: 0 !important;
  }
  .page-id-8365636 .container.page-shadow h3.interior-heading {
    text-align: center !important;
    font-size: 23px;
    line-height: normal;
    margin-top: 10px;
    margin-bottom: 20px;
  }
  .page-id-8365636 .affiliates-right-panel ul {
    padding: 20px;
    text-align: left;
  }
  .page-id-8365636 .about-section2 {
    text-align: center;
  }
  .page-id-8365636 .about-section2 h2 {
    font-size: 23px;
    line-height: normal;
    margin-top: 20px;
  }
  .page-id-8365636 .theme-buy-section .plugin-heading-small,
  .neve-day-titles h5 {
    font-size: 12px;
  }
  .neve-day-titles .interior-h3 {
    margin-top: 0;
  }
  .neve-day-titles {
    padding: 0 !important;
    margin-top: 0 !important;
  }
}
/* end */
/* neve temporary page fix */
.neve .theme-buy-section {
  margin-top: -80px !important;
  background: #0466cb;
}
.neve .theme-buy-section:before {
  content: "";
}
.neve .theme-buy-section > .innerblocks-wrap {
  background: #0466cb;
}
.neve .section9-title {
  margin-top: 0;
}
.neve .plugin-info-middle {
  margin-top: -30px !important;
}
.neve .free-download {
  margin-bottom: 140px;
}
.neve.upgrade h4.pro-feature:after {
  background: #38c493;
}
/* end */
/* temporary fix plugin singles */
.plugin-section3 h5 {
  text-transform: none;
  color: #393939;
  padding-top: 0;
}
/* end */

img[data-opt-src]:not([data-opt-lazy-loaded]) {
  opacity: 0.75;
  -webkit-filter: blur(8px);
  -moz-filter: blur(8px);
  -o-filter: blur(8px);
  -ms-filter: blur(8px);
  filter: blur(8px);
  transform: scale(1.04);
  animation: 0.1s ease-in;
  -webkit-transform: translate3d(0, 0, 0);
}

.page-id-8367096 main {
  background-color: #ffffff;
}

#illustration-app .close-container {
  position: relative;
  top: unset;
}
.handpicked-premium {
  display: none;
}

.builder-item--primary-menu .nav-ul li a,
.builder-item--primary-menu .neve-mm-heading span {
  font-weight: 700;
}

[data-row-id] .row {
  display: grid !important;
  grid-template-columns: auto auto !important;
}

.header-menu-sidebar-inner .mobile-right .nav-ul .has-caret, .header-menu-sidebar-inner .mobile-right .nav-ul li a {
    justify-content: space-between;
}

		</style>
		</head>

<body class="themes-template themes-template-page-templates themes-template-page-contained-theme themes-template-page-templatespage-contained-theme-php single single-themes postid-8364757 wp-custom-logo parallax-one  nv-blog-grid nv-sidebar-full-width menu_sidebar_slide_left" >
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KM44RQ8"
				height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<div class="wrapper">
	<header class="header" role="banner">
		<a class="neve-skip-link show-on-focus" href="#content"
				tabindex="0">Skip to content</a>
		<div id="header-grid"  class="hfg_header site-header">

<nav class="header--row header-main hide-on-mobile hide-on-tablet layout-full-contained nv-navbar header--row"
	data-row-id="main" data-show-on="desktop">

	<div
		class="header--row-inner header-main-inner">
		<div class="container">
			<div
				class="row row--wrapper"
				data-section="hfg_header_layout_main" >
				<div class="hfg-slot left"><div class="builder-item desktop-left"><div class="item--inner builder-item--logo"
		data-section="title_tagline"
		data-item-id="logo">
	<div class="site-logo">
	<a class="brand" href="https://themeisle.com/" title="Themeisle"
			aria-label="Themeisle"><img decoding=async  width="342" height="112" src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:342/h:112/q:90/https://s30246.pcdn.co/wp-content/uploads/2019/03/logo.png" class="skip-lazy" alt="Themeisle Logo" /></a></div>

	</div>

</div></div><div class="hfg-slot right"><div class="builder-item has-nav hfg-is-group has-primary-menu"><div class="item--inner builder-item--primary-menu has_menu"
		data-section="header_menu_primary"
		data-item-id="primary-menu">
	<div class="nv-nav-wrap">
	<div role="navigation" class="style-plain nav-menu-primary"
			aria-label="Primary Menu">

		<ul id="nv-primary-navigation-main" class="primary-menu-ul nav-ul"><li id="menu-item-8362058" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8362058"><a href="https://themeisle.com/wordpress-themes/"><span class="menu-item-title-wrap dd-title">WordPress Themes</span><div  class="caret-wrap 1"><span class="caret"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"/></svg></span></div></a>
<ul class="sub-menu">
	<li id="menu-item-8367620" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8367620"><a href="/themes/neve/">Neve</a></li>
	<li id="menu-item-8364366" class="menu-item menu-item-type-post_type menu-item-object-themes menu-item-8364366"><a href="https://themeisle.com/themes/hestia-pro/">Hestia</a></li>
	<li id="menu-item-8363862" class="menu-item menu-item-type-taxonomy menu-item-object-types menu-item-8363862"><a href="https://themeisle.com/wordpress-themes/free/">Free Themes</a></li>
</ul>
</li>
<li id="menu-item-8362057" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8362057"><a href="https://themeisle.com/wordpress-plugins/"><span class="menu-item-title-wrap dd-title">Plugins</span><div  class="caret-wrap 5"><span class="caret"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"/></svg></span></div></a>
<ul class="sub-menu">
	<li id="menu-item-8363456" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8363456"><a href="/plugins/feedzy-rss-feeds/">Feedzy RSS Feeds</a></li>
	<li id="menu-item-8363455" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8363455"><a href="/plugins/visualizer-charts-and-graphs/">Visualizer</a></li>
	<li id="menu-item-8367402" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8367402"><a href="https://revive.social">Revive Old Post</a></li>
	<li id="menu-item-8367488" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8367488"><a href="/plugins/multi-pages-generator/">Multi Pages Generator</a></li>
	<li id="menu-item-8367403" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8367403"><a href="https://wplandingkit.com">WP Landing Kit</a></li>
</ul>
</li>
<li id="menu-item-8362063" class="two-columns-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8362063"><a href="https://themeisle.com/blog/"><span class="menu-item-title-wrap dd-title">Blog</span><div  class="caret-wrap 11"><span class="caret"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"/></svg></span></div></a>
<ul class="sub-menu">
	<li id="menu-item-8365373" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365373"><a href="https://themeisle.com/blog/how-to-make-a-website/">How to Make a Website</a></li>
	<li id="menu-item-8365374" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365374"><a href="https://themeisle.com/blog/best-domain-registrars/">Cheap Domain Registrars</a></li>
	<li id="menu-item-8365375" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365375"><a href="https://themeisle.com/blog/what-is-wordpress/">What is WordPress</a></li>
	<li id="menu-item-8365376" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365376"><a href="https://themeisle.com/blog/cheap-web-hosting/">Cheap Web Hosts</a></li>
	<li id="menu-item-8365377" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365377"><a href="https://themeisle.com/blog/what-is-wordpress-hosting/">What is Hosting</a></li>
	<li id="menu-item-8362070" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8362070"><a href="https://themeisle.com/blog/best-live-chat-plugins-wordpress/">Live Chat Plugins</a></li>
	<li id="menu-item-8365378" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365378"><a href="https://themeisle.com/blog/wordpress-com-vs-wordpress-org/">WordPress.com vs .org</a></li>
	<li id="menu-item-8365379" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365379"><a href="https://themeisle.com/blog/best-free-email-marketing-services/">Email Marketing Tools</a></li>
	<li id="menu-item-8362066" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8362066"><a href="https://themeisle.com/blog/how-to-create-a-blog/">How to Create a Blog</a></li>
	<li id="menu-item-8362068" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8362068"><a href="https://themeisle.com/blog/siteground-review-for-wordpress/">SiteGround Review</a></li>
	<li id="menu-item-8366328" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8366328"><a href="https://themeisle.com/blog/cheapest-email-marketing-software/">Cheap Email Marketing</a></li>
	<li id="menu-item-8366329" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8366329"><a href="https://themeisle.com/blog/best-website-builder/">Best Website Builder</a></li>
	<li id="menu-item-8366419" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8366419"><a href="https://www.codeinwp.com/blog/starting-a-blog/">Starting a blog</a></li>
	<li id="menu-item-8366420" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8366420"><a href="https://www.codeinwp.com/blog/best-wordpress-hosting/">Best WordPress Hosting</a></li>
</ul>
</li>
<li id="menu-item-8362061" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8362061"><a href="https://themeisle.com/contact/"><span class="menu-item-title-wrap dd-title">Support</span><div  class="caret-wrap 26"><span class="caret"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"/></svg></span></div></a>
<ul class="sub-menu">
	<li id="menu-item-8362064" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8362064"><a href="https://docs.themeisle.com/">Docs</a></li>
	<li id="menu-item-8362062" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8362062"><a href="https://themeisle.com/faq/">FAQ</a></li>
	<li id="menu-item-8362106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8362106"><a href="https://themeisle.com/contact/">Contact</a></li>
</ul>
</li>
<li id="menu-item-8362059" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8362059"><a href="https://themeisle.com/about-us/">About Us</a></li>
<li id="menu-item-8362065" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8362065"><a href="https://store.themeisle.com/">Login</a></li>
</ul>	</div>
</div>

	</div>

<div class="item--inner builder-item--header_search_responsive"
		data-section="header_search_responsive"
		data-item-id="header_search_responsive">
	<div class="nv-search-icon-component" >
	<div  class="menu-item-nav-search canvas">
		<a aria-label="Search" href="#" role="button" class="nv-icon nv-search" >
				<svg width="15" height="15" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg>
			</a>		<div class="nv-nav-search" aria-label="search">
			<div class="form-wrap container responsive-search">

<form role="search"
	method="get"
	class="search-form"
	action="https://themeisle.com/">
	<label>
		<span class="screen-reader-text">Search for...</span>
	</label>
	<input type="search"
		class="search-field"
		placeholder="Search for themes, plugins, docs"
		value=""
		name="s"/>
	<button type="submit"
			class="search-submit"
			aria-label="Search">
		<span class="nv-search-icon-wrap">
			<div role="button" class="nv-icon nv-search" >
				<svg width="15" height="15" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg>
			</div>		</span>
	</button>
	</form>
			</div>
							<div class="close-container container responsive-search">
					<button  class="close-responsive-search"
												>
						<svg width="50" height="50" viewbox="0 0 20 20" fill="#555555"><path d="M14.95 6.46L11.41 10l3.54 3.54l-1.41 1.41L10 11.42l-3.53 3.53l-1.42-1.42L8.58 10L5.05 6.47l1.42-1.42L10 8.58l3.54-3.53z"/><rect/></svg>
					</button>
				</div>
					</div>
	</div>
</div>
	</div>

</div></div>							</div>
		</div>
	</div>
</nav>


<nav class="header--row header-main hide-on-desktop layout-full-contained nv-navbar header--row"
	data-row-id="main" data-show-on="mobile">

	<div
		class="header--row-inner header-main-inner">
		<div class="container">
			<div
				class="row row--wrapper"
				data-section="hfg_header_layout_main" >
				<div class="hfg-slot left"><div class="builder-item tablet-left mobile-left"><div class="item--inner builder-item--logo"
		data-section="title_tagline"
		data-item-id="logo">
	<div class="site-logo">
	<a class="brand" href="https://themeisle.com/" title="Themeisle"
			aria-label="Themeisle"><img decoding=async  width="342" height="112" src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:342/h:112/q:90/https://s30246.pcdn.co/wp-content/uploads/2019/03/logo.png" class="skip-lazy" alt="Themeisle Logo" /></a></div>

	</div>

</div></div><div class="hfg-slot right"><div class="builder-item tablet-left mobile-left"><div class="item--inner builder-item--nav-icon"
		data-section="header_menu_icon"
		data-item-id="nav-icon">
	<div class="menu-mobile-toggle item-button navbar-toggle-wrapper">
	<button type="button" class="navbar-toggle"
					aria-label="			Navigation Menu			">
				<span class="bars">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</span>
		<span class="screen-reader-text">Navigation Menu</span>
	</button>
</div> <!--.navbar-toggle-wrapper-->


	</div>

</div></div>							</div>
		</div>
	</div>
</nav>

<div id="header-menu-sidebar" class="header-menu-sidebar menu-sidebar-panel slide_left" data-row-id="sidebar">
	<div id="header-menu-sidebar-bg" class="header-menu-sidebar-bg">
		<div class="close-sidebar-panel navbar-toggle-wrapper">
			<button type="button" class="navbar-toggle active" 					aria-label="					Navigation Menu				">
				<span class="bars">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</span>
				<span class="screen-reader-text">
				Navigation Menu					</span>
			</button>
		</div>
		<div id="header-menu-sidebar-inner" class="header-menu-sidebar-inner">
			<div class="builder-item has-nav"><div class="item--inner builder-item--primary-menu has_menu"
		data-section="header_menu_primary"
		data-item-id="primary-menu">
	<div class="nv-nav-wrap">
	<div role="navigation" class="style-plain nav-menu-primary"
			aria-label="Primary Menu">

		<ul id="nv-primary-navigation-sidebar" class="primary-menu-ul nav-ul"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8362058"><a href="https://themeisle.com/wordpress-themes/"><span class="menu-item-title-wrap dd-title">WordPress Themes</span><div tabindex="0" class="caret-wrap 1"><span class="caret"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"/></svg></span></div></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8367620"><a href="/themes/neve/">Neve</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-themes menu-item-8364366"><a href="https://themeisle.com/themes/hestia-pro/">Hestia</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-types menu-item-8363862"><a href="https://themeisle.com/wordpress-themes/free/">Free Themes</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8362057"><a href="https://themeisle.com/wordpress-plugins/"><span class="menu-item-title-wrap dd-title">Plugins</span><div tabindex="0" class="caret-wrap 5"><span class="caret"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"/></svg></span></div></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8363456"><a href="/plugins/feedzy-rss-feeds/">Feedzy RSS Feeds</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8363455"><a href="/plugins/visualizer-charts-and-graphs/">Visualizer</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8367402"><a href="https://revive.social">Revive Old Post</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8367488"><a href="/plugins/multi-pages-generator/">Multi Pages Generator</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8367403"><a href="https://wplandingkit.com">WP Landing Kit</a></li>
</ul>
</li>
<li class="two-columns-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8362063"><a href="https://themeisle.com/blog/"><span class="menu-item-title-wrap dd-title">Blog</span><div tabindex="0" class="caret-wrap 11"><span class="caret"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"/></svg></span></div></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365373"><a href="https://themeisle.com/blog/how-to-make-a-website/">How to Make a Website</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365374"><a href="https://themeisle.com/blog/best-domain-registrars/">Cheap Domain Registrars</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365375"><a href="https://themeisle.com/blog/what-is-wordpress/">What is WordPress</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365376"><a href="https://themeisle.com/blog/cheap-web-hosting/">Cheap Web Hosts</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365377"><a href="https://themeisle.com/blog/what-is-wordpress-hosting/">What is Hosting</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8362070"><a href="https://themeisle.com/blog/best-live-chat-plugins-wordpress/">Live Chat Plugins</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365378"><a href="https://themeisle.com/blog/wordpress-com-vs-wordpress-org/">WordPress.com vs .org</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365379"><a href="https://themeisle.com/blog/best-free-email-marketing-services/">Email Marketing Tools</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8362066"><a href="https://themeisle.com/blog/how-to-create-a-blog/">How to Create a Blog</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8362068"><a href="https://themeisle.com/blog/siteground-review-for-wordpress/">SiteGround Review</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8366328"><a href="https://themeisle.com/blog/cheapest-email-marketing-software/">Cheap Email Marketing</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8366329"><a href="https://themeisle.com/blog/best-website-builder/">Best Website Builder</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8366419"><a href="https://www.codeinwp.com/blog/starting-a-blog/">Starting a blog</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8366420"><a href="https://www.codeinwp.com/blog/best-wordpress-hosting/">Best WordPress Hosting</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8362061"><a href="https://themeisle.com/contact/"><span class="menu-item-title-wrap dd-title">Support</span><div tabindex="0" class="caret-wrap 26"><span class="caret"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"/></svg></span></div></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8362064"><a href="https://docs.themeisle.com/">Docs</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8362062"><a href="https://themeisle.com/faq/">FAQ</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8362106"><a href="https://themeisle.com/contact/">Contact</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8362059"><a href="https://themeisle.com/about-us/">About Us</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8362065"><a href="https://store.themeisle.com/">Login</a></li>
</ul>	</div>
</div>

	</div>

</div>		</div>
	</div>
</div>
<div class="header-menu-sidebar-overlay"></div>

</div>
	</header>


	<main id="content" class="neve-main" role="main">

	<div class="banner">
		<div class="container">
			<div class="post-details">

		<h1>Parallax One</h1>
		<h2></h2>			</div>
		</div>
	</div>

<div class="single-page-container">
	<div class="row">
		<div class="nv-single-page-wrap col container">
								<div class="nv-content-wrap entry-content">

<p>⚠️ Parallax One and Parallax One Plus are not&nbsp;scheduled to receive new features going forward. Only security updates and critical fixes will be provided.</p>



<h2>Here&#8217;s what this means for you</h2>



<p>You can do either of three things if you really like Parallax One&#8217;s design:</p>



<p><em>(⭐ recommended)</em></p>



<h3>a) Switch to Neve ⭐</h3>



<p>Neve is our newest WordPress theme. It comes with a number of interesting perks, features, and optimizations.</p>



<p>It also comes with a number of different starter sites which means that you can rock an awesome new design with a fresh new codebase running under the hood.</p>



<p>Neve is already one of the most popular themes in all of WordPress!</p>



<p>Neve is entirely free. <a href="https://themeisle.com/themes/neve/">Get it here</a>.</p>



<h3>b) Consider getting a different theme ⭐</h3>



<p>We have lots of interesting themes in the catalog &#8211; all of them built with the newest web standards in mind and optimized to work with all devices and screens. Perhaps one of them will suit your project.</p>



<p>See what else we have in store: <a href="https://themeisle.com/wordpress-themes/">all products</a></p>



<h3>c) Stay with Parallax One</h3>



<p>If you really want to, you can still download the original Parallax One theme <a href="https://github.com/Codeinwp/Parallax-One">from GitHub</a>.</p>



<p>Be warned, though! You&#8217;re going to be using the theme on your own risk since it is not scheduled to receive any updates or support.</p>



<h2>Here&#8217;s a video on why Neve is an awesome new alternative to Parallax One:</h2>



<figure class="wp-block-embed-youtube wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
<div class="nv-iframe-embed"><iframe title="Neve WordPress Theme Tutorial: How To Use Neve Step By Step" width="1200" height="675" src="https://www.youtube.com/embed/MEpicFMdzyg?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</div></figure>



<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-white-color has-background has-neve-button-color-background-color" href="https://themeisle.com/themes/neve/">Get Neve Here</a></div>

<form role="search"
	method="get"
	class="search-form"
	action="https://themeisle.com/">
	<label>
		<span class="screen-reader-text">Search for...</span>
	</label>
	<input type="search"
		class="search-field"
		placeholder="Search for..."
		value=""
		name="s"/>
	<button type="submit"
			class="search-submit"
			aria-label="Search">
		<span class="nv-search-icon-wrap">
			<div role="button" class="nv-icon nv-search" >
				<svg width="15" height="15" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg>
			</div>		</span>
	</button>
	</form>
						<p class="contained-p">Or, check out some of the other things we have in store:</p>
						<ul class="contained-ul">
							<li>Meet <a href="https://themeisle.com/themes/neve/">Neve</a>, one of the most popular <a href="https://themeisle.com/wordpress-themes/">themes</a> in all of WordPress.</li>
							<li>Read our <a href="https://themeisle.com/blog/" target="_blank">blog</a> to learn useful stuff about WordPress, <a href="https://themeisle.com/blog/how-to-make-a-website/" target="_blank">how to build a successful website or blog</a>, plus more tips on <a href="https://themeisle.com/blog/category/blogging/" target="_blank">blogging</a> and easy to grasp <a href="https://themeisle.com/blog/category/wordpress/" target="_blank">WordPress Tutorials</a></li>
						</ul>
					</div>
						</div>
	</div>
</div>

<div class="container themes-plugins">
	<div class="panel">
		<h3>Our Themes</h3>
		<div class="interior-panel">
			<div>
				<a href="https://themeisle.com/themes/neve/"><img decoding=async  data-opt-src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/neve-logo.svg"  class="optimole-lazy-only"  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%%20100%%22%20width%3D%22100%%22%20height%3D%22100%%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"><noscript><img decoding=async  src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/neve-logo.svg"></noscript></a>
				<div>
					<a href="https://themeisle.com/themes/neve/"><h4>Neve</h4></a>
					<p>One of the most advanced, customizable and user-friendly theme packed with starter sites and proven performance.</p>
				</div>
			</div>
			<div>
				<a href="https://themeisle.com/themes/hestia-pro/"><img decoding=async  data-opt-src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/hestia-logo-alt.svg"  class="optimole-lazy-only"  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%%20100%%22%20width%3D%22100%%22%20height%3D%22100%%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"><noscript><img decoding=async  src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/hestia-logo-alt.svg"></noscript></a>
				<div>
					<a href="https://themeisle.com/themes/hestia-pro/"><h4>Hestia</h4></a>
					<p>A beautiful one-page theme for any type of business. Enjoy the high-performance that comes with a great user experience.</p>
				</div>
			</div>
			<div>
				<a href="https://themeisle.com/themes/zelle-pro-one-page-wordpress-theme/"><img decoding=async  data-opt-src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/zelle-logo.svg"  class="optimole-lazy-only"  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%%20100%%22%20width%3D%22100%%22%20height%3D%22100%%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"><noscript><img decoding=async  src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/zelle-logo.svg"></noscript></a>
				<div>
					<a href="https://themeisle.com/themes/zelle-pro-one-page-wordpress-theme/"><h4>Zelle</h4></a>
					<p>A joyful theme that stands out with its elegant parallax scrolling, interactive elements, and an evergreen one-page layout.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<h3>Our Plugins</h3>
		<div class="interior-panel">
			<div>
				<a href="https://themeisle.com/plugins/visualizer-charts-and-graphs/"><img decoding=async  data-opt-src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/visualizer-logo.svg"  class="optimole-lazy-only"  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%%20100%%22%20width%3D%22100%%22%20height%3D%22100%%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"><noscript><img decoding=async  src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/visualizer-logo.svg"></noscript></a>
				<div>
					<a href="https://themeisle.com/plugins/visualizer-charts-and-graphs/"><h4>Visualizer</h4></a>
					<p>Embed responsive and interactive tables and graphs, share your data and quickly customize it without any code.</p>
				</div>
			</div>
			<div>
				<a href="https://themeisle.com/plugins/feedzy-rss-feeds/"><img decoding=async  data-opt-src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/feedzy-logo.svg"  class="optimole-lazy-only"  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%%20100%%22%20width%3D%22100%%22%20height%3D%22100%%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"><noscript><img decoding=async  src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/feedzy-logo.svg"></noscript></a>
				<div>
					<a href="https://themeisle.com/plugins/feedzy-rss-feeds/"><h4>Feedzy RSS Feeds</h4></a>
					<p>Collect the best content, automatically add it to your WordPress site</p>
				</div>
			</div>
			<div>
				<a href="https://wordpress.org/plugins/otter-blocks/"><img decoding=async  data-opt-src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/otter-logo.svg"  class="optimole-lazy-only"  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%%20100%%22%20width%3D%22100%%22%20height%3D%22100%%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"><noscript><img decoding=async  src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/product-logos/otter-logo.svg"></noscript></a>
				<div>
					<a href="https://wordpress.org/plugins/otter-blocks/"><h4>Otter Blocks</h4></a>
					<p>Lightweight WordPress plugin that brings extra Gutenberg blocks to your site.</p>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="container blog-articles-wrapper">
		<div class="wp-block-themeisle-blocks-advanced-column">
			<img decoding=async  data-opt-src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/blog-icon1.svg"  class="optimole-lazy-only"  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%%20100%%22%20width%3D%22100%%22%20height%3D%22100%%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"><noscript><img decoding=async  src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/blog-icon1.svg"></noscript>
			<h5>WordPress Hosting providers compared</h5>
			<a href="https://themeisle.com/blog/best-wordpress-hosting/" target="_blank" rel="noopener">Read Guide</a>
		</div>
		<div class="wp-block-themeisle-blocks-advanced-column">
			<img decoding=async  data-opt-src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/blog-icon2.svg"  class="optimole-lazy-only"  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%%20100%%22%20width%3D%22100%%22%20height%3D%22100%%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"><noscript><img decoding=async  src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/blog-icon2.svg"></noscript>
			<h5>Best live chat plugins compared</h5>
			<a href="https://themeisle.com/blog/best-live-chat-plugins-wordpress/" target="_blank" rel="noopener">Read
				Guide</a>
		</div>
		<div class="wp-block-themeisle-blocks-advanced-column">
			<img decoding=async  data-opt-src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/blog-icon3.svg"  class="optimole-lazy-only"  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%%20100%%22%20width%3D%22100%%22%20height%3D%22100%%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"><noscript><img decoding=async  src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/blog-icon3.svg"></noscript>
			<h5>Best 9 free blogging sites compared</h5>
			<a href="https://themeisle.com/blog/best-free-blogging-sites/" target="_blank" rel="noopener">Read Guide</a>
		</div>
		<div class="wp-block-themeisle-blocks-advanced-column">
			<img decoding=async  data-opt-src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/blog-icon4.svg"  class="optimole-lazy-only"  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%%20100%%22%20width%3D%22100%%22%20height%3D%22100%%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"><noscript><img decoding=async  src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/themes/themeisle/assets/img/blog-icon4.svg"></noscript>
			<h5>How to create a successful blog</h5>
			<a href="https://themeisle.com/blog/how-to-create-a-blog/" target="_blank" rel="noopener">Read Guide</a>
		</div>
	</div>
	<div class="container800 extra-panel">
	<h3>Who we are</h3>
	<p><a href="https://themeisle.com/about-us/">Read the Pirate’s Log</a> – a story of ThemeIsle, how the company started and what we’re all about.</p>
	<p>Need to contact us or looking for support? Enter the <a href="https://themeisle.com/contact/">Pirate’s Tavern</a>.</p>
</div>
<footer role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="white-box" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="VertiStudio">
				<link itemprop="url" href="http://vertistudio.com/">
				<meta itemprop="logo" content="http://vertistudio.com/wp-content/uploads/2018/07/VertiStudio_logo1.png">
				<meta itemprop="vatID" content="RO29109287">
				<meta itemprop="email" content="friends@themeisle.com">
				<meta itemprop="legalName" content="Vertigo Studio SRL">
				<meta itemprop="foundingDate" content="2012">
				<meta itemprop="foundingLocation" content="Bucharest">
				<meta itemprop="numberOfEmployees" content="25">
				<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<meta itemprop="streetAddress" content="20 Povernei Street, 4th Floor, Flat no. 9">
					<meta itemprop="addressLocality" content="Bucharest">
					<meta itemprop="addressRegion" content="Bucharest">
					<meta itemprop="postalCode" content="010641">
					<meta itemprop="addressCountry" content="Romania">
				</div>
				<div itemprop="founder" itemscope itemtype="http://schema.org/Person">
					<meta itemprop="name" content="Ionut Neagu">
				</div>
				<div itemprop="brand" itemscope itemtype="http://schema.org/Brand">
					<meta itemprop="name" content="Themeisle">
					<link itemprop="url" href="https://themeisle.com/">
					<meta itemprop="logo" content="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:auto/h:auto/q:90/https://s30246.pcdn.co/wp-content/uploads/2019/03/logo.png">
					<div id="text-3" class="widget_text">			<div class="textwidget"><img decoding=async  data-opt-src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:342/h:112/q:90/https://s30246.pcdn.co/wp-content/uploads/2019/03/logo.png"  src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20342%20112%22%20width%3D%22342%22%20height%3D%22112%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" alt="Themeisle Logo" width="342" height="112" style="max-width: 150px" /><noscript><img decoding=async  src="https://mllj2j8xvfl0.i.optimole.com/d0cOXWA.3970~373ad/w:342/h:112/q:90/https://s30246.pcdn.co/wp-content/uploads/2019/03/logo.png" alt="Themeisle Logo" width="342" height="112" style="max-width: 150px" /></noscript>
<br>
Helping you find treasure with WordPress. From themes &amp; plugins to tutorials &amp; guides; our resources will help you build your dream website.</div>
		</div>					<div class="social">
						<a itemprop="sameAs" href="https://www.facebook.com/themeisle/" target="_blank"
							aria-label="Facebook" rel="noopener">
							<svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="social_facebook_svg" version="1.1" viewbox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"/></svg>						</a>
						<a itemprop="sameAs" href="https://twitter.com/themeisle" target="_blank"
							aria-label="Twitter" rel="noopener"><svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="social_twitter_svg" version="1.1" viewbox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454  c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,0.791,0.089,1.562,0.262,2.303  c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412  c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,4.896,3.484,8.98,8.108,9.91  c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019  c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,2.869,9.786,4.541,15.493,4.541  c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,18.873,51.483,17.092,52.837,15.065z"/></svg></a>
						<a itemprop="sameAs" href="https://www.youtube.com/channel/UCAQcBsP3h6p5yXgFap4LEGA"
							target="_blank" aria-label="Youtube" rel="noopener"><svg data-name="Layer 21" height="24" id="social_youtube_svg" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M21.80731,7.805a2.79915,2.79915,0,0,0-2.54907-2.53906C17.69061,5.13586,15.36707,5,12.50012,5c-3.45251,0-6.05865.14105-7.74353.27332A2.79932,2.79932,0,0,0,2.1925,7.815C2.08936,8.90021,2,10.33344,2,12.0423c0,1.66632.08862,3.07422.19128,4.14594a2.79852,2.79852,0,0,0,2.56384,2.53833C6.43994,18.85883,9.04657,19,12.50012,19c2.86694,0,5.19049-.13586,6.75812-.266a2.799,2.799,0,0,0,2.54907-2.539C21.91052,15.11548,22,13.69189,22,12S21.91052,8.88452,21.80731,7.805ZM9.77594,14.93878V9.06122L15.574,12Z"/></svg></a>
						<a itemprop="sameAs" href="https://www.linkedin.com/company/themeisle/" target="_blank"
							aria-label="Linkedin" rel="noopener"><svg data-name="Layer 21" height="24" id="social_linkedin_svg" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><rect height="11" width="4" x="3" y="9"/><circle cx="5" cy="5" r="2"/><path d="M16.5,8.25A4.47251,4.47251,0,0,0,13,9.95343V9H9V20h4V13a2,2,0,0,1,4,0v7h4V12.75A4.5,4.5,0,0,0,16.5,8.25Z"/></svg></a>
						<a itemprop="sameAs" href="https://www.instagram.com/themeislewp/" target="_blank"
							aria-label="Instagram" rel="noopener"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 56.7 56.7"><path d="M28.2,16.7c-7,0-12.8,5.7-12.8,12.8s5.7,12.8,12.8,12.8S41,36.5,41,29.5S35.2,16.7,28.2,16.7z M28.2,37.7 c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2S32.7,37.7,28.2,37.7z"/><circle cx="41.5" cy="16.4" r="2.9"/><path d="M49 8.9c-2.6-2.7-6.3-4.1-10.5-4.1H17.9c-8.7 0-14.5 5.8-14.5 14.5v20.5c0 4.3 1.4 8 4.2 10.7 2.7 2.6 6.3 3.9 10.4 3.9h20.4c4.3 0 7.9-1.4 10.5-3.9 2.7-2.6 4.1-6.3 4.1-10.6V19.3c0-4.2-1.4-7.8-4-10.4zm-.4 31c0 3.1-1.1 5.6-2.9 7.3s-4.3 2.6-7.3 2.6H18c-3 0-5.5-.9-7.3-2.6C8.9 45.4 8 42.9 8 39.8V19.3c0-3 .9-5.5 2.7-7.3 1.7-1.7 4.3-2.6 7.3-2.6h20.6c3 0 5.5.9 7.3 2.7 1.7 1.8 2.7 4.3 2.7 7.2v20.6z"/></svg></a>
					</div>
				</div>
			</div>
			<input class="menu-toggle" type="checkbox" name="footer-box-toggle-1" id="footer-box-toggle-1"/>				<div class="footer-box">
					<label for="footer-box-toggle-1" class="caret" role="button"  tabindex="0"></label><div id="nav_menu-2" class="widget_nav_menu"><p class="widget_title">Company</p><div class="menu-company-container"><ul id="menu-company" class="menu"><li id="menu-item-8362092" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8362092"><a href="https://themeisle.com/about-us/">About Us</a></li>
<li id="menu-item-8364217" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8364217"><a href="https://themeisle.com/blog/newsletter/">Newsletter</a></li>
<li id="menu-item-8364216" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8364216"><a href="https://docs.themeisle.com/">Docs</a></li>
<li id="menu-item-8362093" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8362093"><a href="https://themeisle.com/affiliates/">Affiliates</a></li>
<li id="menu-item-8362105" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8362105"><a href="https://themeisle.com/contact/">Contact</a></li>
</ul></div></div>				</div>
				<input class="menu-toggle" type="checkbox" name="footer-box-toggle-2" id="footer-box-toggle-2"/>				<div class="footer-box">
					<label for="footer-box-toggle-2" class="caret" role="button"  tabindex="0"></label><div id="nav_menu-4" class="widget_nav_menu"><p class="widget_title">Top Guides</p><div class="menu-top-guides-container"><ul id="menu-top-guides" class="menu"><li id="menu-item-8365384" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365384"><a href="https://themeisle.com/blog/best-free-blogging-sites/">Free Blogging Sites</a></li>
<li id="menu-item-8364018" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8364018"><a target="_blank" rel="noopener" href="https://themeisle.com/blog/how-to-install-wordpress/">Install WordPress</a></li>
<li id="menu-item-8364019" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8364019"><a target="_blank" rel="noopener" href="https://themeisle.com/blog/best-website-builder/">Website Builders</a></li>
<li id="menu-item-8364020" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8364020"><a target="_blank" rel="noopener" href="https://themeisle.com/blog-name-generator/">Blog Name Generator</a></li>
<li id="menu-item-8365385" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8365385"><a href="https://themeisle.com/blog/wix-vs-wordpress/">Wix vs WordPress</a></li>
</ul></div></div>				</div>
				<input class="menu-toggle" type="checkbox" name="footer-box-toggle-3" id="footer-box-toggle-3"/>				<div class="footer-box">
					<label for="footer-box-toggle-3" class="caret" role="button"  tabindex="0"></label><div id="nav_menu-7" class="widget_nav_menu"><p class="widget_title">Our Network</p><div class="menu-our-network-container"><ul id="menu-our-network" class="menu"><li id="menu-item-8362080" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8362080"><a target="_blank" rel="noopener" href="https://www.codeinwp.com/">CodeinWP</a></li>
<li id="menu-item-8362081" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8362081"><a target="_blank" rel="noopener" href="https://optimole.com/">Optimole</a></li>
<li id="menu-item-8362083" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8362083"><a rel="noopener" href="https://themeisle.com/domain-name-generator/">Domain Generator</a></li>
<li id="menu-item-8362082" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8362082"><a target="_blank" rel="noopener" href="https://domainwheel.com/">Domain Wheel</a></li>
<li id="menu-item-8362084" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8362084"><a target="_blank" rel="noopener" href="https://revive.social/">ReviveSocial</a></li>
</ul></div></div>				</div>
				<input class="menu-toggle" type="checkbox" name="footer-box-toggle-4" id="footer-box-toggle-4"/>				<div class="footer-box">
					<label for="footer-box-toggle-4" class="caret" role="button"  tabindex="0"></label><div id="nav_menu-6" class="widget_nav_menu"><p class="widget_title">Our Themes</p><div class="menu-our-themes-container"><ul id="menu-our-themes" class="menu"><li id="menu-item-8364568" class="menu-item menu-item-type-taxonomy menu-item-object-types menu-item-8364568"><a href="https://themeisle.com/wordpress-themes/business/">Business Themes</a></li>
<li id="menu-item-8364566" class="menu-item menu-item-type-taxonomy menu-item-object-types menu-item-8364566"><a href="https://themeisle.com/wordpress-themes/elementor/">Elementor Themes</a></li>
<li id="menu-item-8364565" class="menu-item menu-item-type-taxonomy menu-item-object-types menu-item-8364565"><a href="https://themeisle.com/wordpress-themes/ecommerce/">E-commerce Themes</a></li>
<li id="menu-item-8364563" class="menu-item menu-item-type-taxonomy menu-item-object-types menu-item-8364563"><a href="https://themeisle.com/wordpress-themes/minimal/">Minimal Themes</a></li>
<li id="menu-item-8364569" class="menu-item menu-item-type-taxonomy menu-item-object-types menu-item-8364569"><a href="https://themeisle.com/wordpress-themes/blog/">Blogging Themes</a></li>
</ul></div></div>				</div>
						</div>
	</div>
</footer>

<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="text-left">
				<span>Copyright © 2021</span>
				Themeisle | Built using <a href="https://themeisle.com/themes/neve/">Neve</a> | Powered by <a href="http://vertistudio.com/" target="_blank" rel="noopener">VertiStudio</a>
			</div>
			<div class="text-right">
				<div id="nav_menu-5" class="widget_nav_menu"><div class="menu-footer-links-container"><ul id="menu-footer-links" class="menu"><li id="menu-item-8362079" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8362079"><a href="https://themeisle.com/terms/">Terms</a></li>
<li id="menu-item-8362078" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-8362078"><a href="https://themeisle.com/cookie-policy/">Cookie Policy</a></li>
<li id="menu-item-8362077" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8362077"><a href="https://themeisle.com/privacy-policy/">Privacy Policy</a></li>
</ul></div></div>			</div>
		</div>
	</div>
</div>

</main><!-- /main -->
</div><!-- /.wrapper -->
<div class="obfx-cookie-bar-container" style="display: none" id="obfx-cookie-bar"><input class="obfx-checkbox-cb" id="obfx-checkbox-cb" type="checkbox" /><span class="obfx-cookie-bar">We and our partners use cookies to deliver our services and to show you relevant ads. By using this site, you agree with our <a href="/cookie-policy/" target="_blank">Cookie Policy</a><label for="obfx-checkbox-cb" class="obfx-close-cb">X</label><a href="#" id="obfx-accept-cookie-policy">Accept</a></span></div><script type='text/javascript' id='themeisle-singledownloadjs-js-extra'>
/* <![CDATA[ */
var tiVars = {"themeID":"8364757","site_url":"https:\/\/themeisle.com","theme_name":"Parallax One","youtube_url":"","play_icon_path":"https:\/\/mllj2j8xvfl0.i.optimole.com\/d0cOXWA.3970~373ad\/w:auto\/h:auto\/q:90\/https:\/\/s30246.pcdn.co\/wp-content\/themes\/themeisle\/assets\/img\/play.png","free_theme":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://s30246.pcdn.co/wp-content/themes/themeisle/assets/build/single-theme.min.js?ver=3.1.51' id='themeisle-singledownloadjs-js'></script>
<script type='text/javascript' id='themeisle-mainscript-js-extra'>
/* <![CDATA[ */
var themeisleFrontend = {"baseImages":"https:\/\/themeisle.com\/wp-content\/themes\/themeisle\/assets\/img\/","neveDemoUrl":"https:\/\/themeisle.com\/demo\/?theme=Neve","nevePage":"https:\/\/themeisle.com\/themes\/neve\/","themeData":{"themeID":8364757,"site_url":"https:\/\/themeisle.com","theme_name":"Parallax One","youtube_url":"","play_icon_path":"https:\/\/mllj2j8xvfl0.i.optimole.com\/d0cOXWA.3970~373ad\/w:auto\/h:auto\/q:90\/https:\/\/s30246.pcdn.co\/wp-content\/themes\/themeisle\/assets\/img\/play.png","free_theme":true},"storedata":[]};
/* ]]> */
</script>
<script type='text/javascript' src='https://s30246.pcdn.co/wp-content/themes/themeisle/assets/build/script.min.js?ver=3.1.51' id='themeisle-mainscript-js'></script>
<script type='text/javascript' src='https://s30246.pcdn.co/wp-content/themes/themeisle/assets/build/product.min.js?ver=3.1.51' id='ti-product-js'></script>
<script type='text/javascript' id='neve-script-js-extra'>
/* <![CDATA[ */
var NeveProperties = {"ajaxurl":"https:\/\/themeisle.com\/wp-admin\/admin-ajax.php","nonce":"2a47101a30","isRTL":"","isCustomize":""};
/* ]]> */
</script>
<script type='text/javascript' src='https://s30246.pcdn.co/wp-content/themes/neve/assets/js/build/modern/frontend.js?ver=3.0.6' id='neve-script-js' async></script>
<script type="text/javascript" id="flying-scripts">const loadScriptsTimer=setTimeout(loadScripts,5000*1000);const userInteractionEvents=["mouseover","keydown","touchstart","touchmove","wheel"];userInteractionEvents.forEach(function(event){window.addEventListener(event,triggerScriptLoader,{passive:!0})});function triggerScriptLoader(){loadScripts();clearTimeout(loadScriptsTimer);userInteractionEvents.forEach(function(event){window.removeEventListener(event,triggerScriptLoader,{passive:!0})})}
function loadScripts(){document.querySelectorAll("script[data-type='lazy']").forEach(function(elem){elem.setAttribute("src",elem.getAttribute("data-src"))})}</script>
    		<script>
			(function (window) {

				function getCookie(cname) {
					var name = cname + "=";
					var ca = document.cookie.split(';');
					for(var i = 0; i < ca.length; i++) {
						var c = ca[i];
						while (c.charAt(0) == ' ') {
							c = c.substring(1);
						}
						if (c.indexOf(name) == 0) {
							return c.substring(name.length, c.length);
						}
					}
					return "";
				}
				let cookie = getCookie('obfx-policy-consent');
				if(cookie !== 'accepted'){
					document.getElementById('obfx-cookie-bar').style.display = 'block';
				}
				document.getElementById('obfx-accept-cookie-policy').addEventListener('click', function (e) {
					e.preventDefault();
					var days = 365;
					var date = new Date();
					// @TODO add an option to select expiry days
					date.setTime(date.getTime() + 24 * days * 60 * 60 * 1e3);

					// save the cookie
					document.cookie = 'obfx-policy-consent=accepted; expires=' + date.toGMTString() + '; path=/';

					// after we get the acceptance cookie we can close the box
					document.getElementById('obfx-checkbox-cb').checked = true;

				}, false);

			})(window);
		</script>
				<style>
			.obfx-cookie-bar-container {
				height: 0;
			}

			.obfx-checkbox-cb {
				display: none;
			}

			.obfx-cookie-bar {
				padding: 12px 25px;
				position: fixed;
				z-index: 9999;
				text-align: center;
				bottom: 0;
				left: 0;
				right: 0;
                display: block;
				min-height: 40px;
				background: #fff;
				border: 1px solid #333;
			}

			.obfx-cookie-bar a {
				padding: 0 8px;
				text-decoration: underline;
				font-weight: bold;
			}

			.obfx-checkbox-cb:checked + .obfx-cookie-bar {
				display: none;
			}

			.obfx-close-cb {
				position: absolute;
				right: 5px;
				top: 12px;
				width: 20px;
				cursor: pointer;
			}
		</style>

</body>
</html>
