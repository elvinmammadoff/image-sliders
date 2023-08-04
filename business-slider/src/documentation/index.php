<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title>Documentation - Business Hero Slider</title>

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/foundation.css">
        <link rel="stylesheet" href="css/prism.css">
        <link rel="stylesheet" href="css/main.css">

        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700|Raleway:300i,400,600,700" rel="stylesheet">

        <!-- Place favicon.ico in the root directory -->
        <link rel="icon" type="image/x-icon" href="favicon.ico">

    </head>
    <body>

        <header id="site-header">

            <div class="row">

              <div class="large-10 large-centered columns">

                  <div class="name">
                      <h3>Business Hero Slider</h3>
                      <p>Premium Bootstrap Slider Documentation</p>
                  </div>

                  <ul class="meta">
                      <li><strong>Author:</strong> <a href="https://themeforest.net/user/alissio" target="_blank">Alissio</a></li>
                      <li><strong>Live Preview:</strong> <a href="https://peppy-fudge-cee13a.netlify.app/business-slider">View Demo</a></li>
                      <li><strong>Support:</strong> <a href="mailto:elvinmammadoff@gmail.com">Ask a Question</a></li>
                  </ul>

                  <p>Thank you for purchasing my product. <br> If you have any questions that are beyond the scope of this help file, <br> please feel free to email <a href="mailto:designer.rafiq@gmail.com">here</a><br> Thanks so much!</p>

              </div>


            </div>

        </header>

        <section id="site-body">

            <div id="container" class="row">

                <div id="sidebar" class="large-3 large-push-9 columns" data-magellan-expedition="fixed">

                    <div class="sticky">

                      <h3>Table of Contents</h3>
                      <ol>
                          <li data-magellan-arrival="getting-started"><a href="#getting-started">Getting Started</a></li>
                          <li data-magellan-arrival="html-structure"><a href="#html-structure">HTML Structure</a></li>
                          <ul>
                            <li data-magellan-arrival="skeleton-details"><a href="#skeleton-details">Skeleton Details</a></li>
                          </ul>
                          <li data-magellan-arrival="stylesheet-files"><a href="#stylesheet-files">Stylesheet Files</a></li>
                          <li data-magellan-arrival="support-desk"><a href="#support-desk">Support Desk</a></li>
                          <li data-magellan-arrival="files-resources"><a href="#files-resources">Files & Resources</a></li>
                          <li data-magellan-arrival="files-resources"><a href="#php-file">PHP Code Explanation</a></li>
                          <li data-magellan-arrival="files-resources"><a href="#updates">Regular Updates</a></li>
                      </ol>

                    </div>

                </div>

                <div id="main-content" class="large-9 large-pull-3 columns">

                    <section id="introduction" class="section" data-magellan-destination="introduction">

                          <h1>Howdy!</h1>
                          <p class="lead">You are a shining owner of a regular license based on Business Hero Slider.</p>
                          <p>First of all, Thank you so much for purchasing this product and for being my loyal customer. You are entitled to get free updates to this product + exceptional support (as per market policy) from the author directly.</p>
                          <p>This documentation is to help you understand the product code structure. Please go through the documentation carefully to understand how this product is made and how to edit this properly. Basic HTML and CSS knowledge is required to customize.</p>

                    </section>

                    <section id="getting-started" class="section" data-magellan-destination="getting-started">

                          <h1>1. Getting Started</h1>

                          <br>

                          <p>When you are ready to use this product, you must first upload the files to a local or remote server. In this regard,  unzip the package you have downloaded from themeforest. In extracted folder you can see following folders:<p>

                          <h3>Package contents:</h3>

                          <ul>
                            <li><strong>index.html</strong> — Main HTML file of the project. You'll upload on your server.</li>

                            <li><strong>assets</strong> — Contains all the original product files comprises of CSS, JS etc. This is the folder which you'll upload on your server after necessary modifications.</li>

                            <li><strong>documentation</strong> — Inside this folder, you will find the same documentation updated with the latest changes.</li>

                          </ul>

                          <p>Details regarding contents and structure of <code>product</code> folder is given below.</p>

                    </section>

                    <section id="html-structure" class="section"  data-magellan-destination="html-structure">

                      <h1>2. HTML Structure</h1>

                      <br>

                      <p>This product is a responsive image slider which built with Bootstrap 5.3.1 fraemwork and you can customize it very easily. All of the information within the main
                        content area is nested within a div with an id of "myCarousel". Here is the general
                        structure. Note that for brevity, I am not including content that isn’t relevant to the
                        technique.</p>

<pre data-language="HTML Skeleton">
  <code class="language-markup">

    <!-- BEGIN  Carousel -->
      <div id="myCarousel" class="carousel slide carousel-fade mb-6" data-bs-ride="carousel" data-bs-theme="light"></div>
    <!-- END Carousel -->

  </code>
  </pre>


                    </section>
                    <section id="skeleton-details" class="sub-section"  data-magellan-destination="skeleton-details">

                          <h2>2.1. Skeleton Details</h2>

                          <br>

                          <p><code>div id="myCarousel"</code> contains the code for carousel details</p>

                    </section>
                    <section id="stylesheet-files" class="section" data-magellan-destination="stylesheet-files">

                          <h1>3. Stylesheet Files</h1>

                          <br>

                          <p>All styling related files of this carousel slider product can be found in this folder path <code>assets/css</code></p>

<pre data-language="Folder Map">
  <code class="language-markup">
    css/
    |
    |-- style.css
  </code>
</pre>

                          <br>
                          <p>
                           As it can be seen, the folder contains 1 <code>css</code> file.<br>
                          <code>style.css</code> custom style file.<br>
                          </p>
                    </section>

                    <section id="support-desk" class="section" data-magellan-destination="support-desk">

                          <h1>5. Support Desk</h1>

                          <br>

                          <p>Please be reminded that you have purchased a very affordable product and you have not paid for a full-time web design agency. Occasionally, we will help with small tweaks, but these requests will be put on a lower priority due to their nature.</p>


                          <section class="sub-section">

                                <h2>Support for my items includes:</h2>

                                <br>

                                <ul>
                                  <li>Responding to questions or problems regarding the item and its features</li>
                                  <li>Fixing bugs and reported issues</li>
                                  <li>Providing updates to ensure compatibility with new software versions</li>
                                </ul>

                          </section>

                          <section class="sub-section">

                                <h2>Item support does not include:</h2>

                                <br>

                                <ul>
                                  <li>Customization and installation services</li>
                                  <li>Support for third party software and plug-ins</li>
                                </ul>

                          </section>

                          <section class="sub-section">

                                <h2>Before seeking support, please...</h2>

                                <br>

                                <ul>
                                  <li>Make sure your question is a valid item issue and not a customization request.</li>
                                  <li>Make sure you have read through the documentation or any related video guides before asking support on how to accomplish a task.</li>
                                  <li>Make sure to double check the item FAQs.</li>
                                  <li>If you have customized your item and now have an issue, back-track to make sure you didn't make a mistake. If you have made changes and can't find the issue, please provide us with your changelog.</li>
                                  <li>Almost 80% of the time we find that the solution to people's issues can be solved with a simple "Google Search". You might want to try that before seeking support. You might be able to fix the issue yourself much quicker than we can respond to your request.</li>
                                  <li>Make sure to state the name of the item you are having issues with when requesting support via ThemeForest.</li>
                                </ul>

                          </section>


                    </section>

                    <section id="files-resources" class="section" data-magellan-destination="files-resources">

                          <h1>6. Files &amp; Resources</h1>

                          <br>

                          <p>The product uses following resources by third parties.<p>


                          <ul>
                            <li><a href="https://getbootstrap.com/docs/4.5/getting-started/introduction/" target="_blank">Bootstrap 5.3.1</a></li>
                            <li> <strong>Font used</strong>
                              <ul>
                                <li><a href="https://fonts.google.com/specimen/Poppins" target="_blank">Poppins</a></li>
                              </ul>
                            </li>
                            <li> <strong>Icon used</strong>
                                <ul>
                                    <li><a href="https://fontawesome.com/v4/icons/" target="_blank">Font Awesome 4.7.0</a></li>
                                </ul>
                            </li>
                          </ul>

                    </section>

                    <section id="php-file" class="section" data-magellan-destination="php-file">

                        <h1>7. PHP Code Explanation</h1>

                        <br>

                        <p><code>index.php</code> file for deploy and init on docker container, netlify or heroku<p>

                    </section>

                    <section id="updates" class="section" data-magellan-destination="updates">

                          <h1>9. Regular Updates</h1>

                          <br>

                          <p>We’re always improving our skills and knowledge so we’re making changes regularly. From bug fixes to new awesome features, updates generally come at least twice a month.<p>

<pre>

  V. 1.0.0 – 30.07.2023
  - Initial release
</pre>
                    </section>

                    <footer>
                      <p>© Documentation - Business Hero Slider</p>
                    </footer>

                </div>

            </div>

        </section>

        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/prism.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>