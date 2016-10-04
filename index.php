<!DOCTYPE html>
    <head>
        <title>Steven Wu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="src/css/index.css">
        <script src="src/js/index.js" type="text/javascript"></script>
    </head>
    <body>
        <header class="header">
            <hgroup class="header-heading-group">
                <h1 class="header-heading">Steven Wu</h1>
                <h1 class="header-subtitle">Front-End Developer</h1>
            </hgroup>
        </header>
        <section class="main-section">
            <h1 class="main-section-heading">about me</h1>
            <div class="divider"></div>
            <div class="about-me-info">
                <div class="about-me-icn">
                </div>
                <p class="about-me-info-text">
                    Lorem ipsum dolor sit amet,
                     consectetur adipiscing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                     Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                     Excepteur sint occaecat cupidatat non proident,
                     sunt in culpa qui officia deserunt mollit anim id est laborum.
                 </p>
            </div>
            <div class="about-me-info">
                <div class="about-me-icn">
                </div>
                <p class="about-me-info-text">
                    Lorem ipsum dolor sit amet,
                     consectetur adipiscing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                     Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                     Excepteur sint occaecat cupidatat non proident,
                     sunt in culpa qui officia deserunt mollit anim id est laborum.
                 </p>
            </div>
            <div class="about-me-info">
                <div class="about-me-icn">
                </div>
                 <p class="about-me-info-text">
                     Lorem ipsum dolor sit amet,
                      consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      Excepteur sint occaecat cupidatat non proident,
                      sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
            </div>
        </section>
        <section class="main-section">
            <h1 class="main-section-heading">skills</h1>
            <div class="divider"></div>
            <div class="skill-left">
                <ul class="skill-list">
                    <li class="skill-list-item">
                        <p class="skill-list-item-paragraph">HTML:</p>
                        <progress class="skill-list-progress-bar" value="5" max="100"></progress>
                    </li>
                    <li class="skill-list-item">
                        <p class="skill-list-item-paragraph">CSS:</p>
                        <progress class="skill-list-progress-bar" value="10" max="100"></progress>
                    </li>
                    <li class="skill-list-item">
                        <p class="skill-list-item-paragraph">Javascript:</p>
                        <progress class="skill-list-progress-bar" value="15" max="100"></progress>
                    </li>
                    <li class="skill-list-item">
                        <p class="skill-list-item-paragraph">Sass:</p>
                        <progress class="skill-list-progress-bar" value="20" max="100"></progress>
                    </li>
                    <li class="skill-list-item">
                        <p class="skill-list-item-paragraph">jQuery:</p>
                        <progress class="skill-list-progress-bar" value="25" max="100"></progress>
                    </li>
                </ul>
            </div>
            <div class="skill-left">
                <ul class="skill-list">
                    <li class="skill-list-item">
                        <p class="skill-list-item-paragraph">AngularJS:</p>
                        <progress class="skill-list-progress-bar" value="2" max="100"></progress>
                    </li>
                    <li class="skill-list-item">
                        <p class="skill-list-item-paragraph">PHP:</p>
                        <progress class="skill-list-progress-bar" value="4" max="100"></progress>
                    </li>
                    <li class="skill-list-item">
                        <p class="skill-list-item-paragraph">Laravel:</p>
                        <progress class="skill-list-progress-bar" value="6" max="100"></progress>
                    </li>
                    <li class="skill-list-item">
                        <p class="skill-list-item-paragraph">Java:</p>
                        <progress class="skill-list-progress-bar" value="8" max="100"></progress>
                    </li>
                    <li class="skill-list-item">
                        <p class="skill-list-item-paragraph">SQL:</p>
                        <progress class="skill-list-progress-bar" value="10" max="100"></progress>
                    </li>
                </ul>
            </div>
        </section>
        <section class="main-section">
            <h1 class="main-section-heading">contact</h1>
            <div class="divider"></div>
            <form class="contact-form" action="#" method="post">
                <table class="form-table">
                    <tr>
                        <td><label class="form-label" for="name">Name:</label></td>
                    </tr>
                    <tr>
                        <td><input id="name" class="form-input" type="text" name="name" placeholder="John" required /></td>
                    </tr>
                    <tr>
                        <td><label class="form-label" for="email">E-Mail:</label></td>
                    </tr>
                    <tr>
                        <td><input id="email" class="form-input" type="text" placeholder="example@gmail.com" name="email" required/></td>
                    </tr>
                    <tr>
                        <td><label class="form-label" for="subject">Subject:</label></td>
                    </tr>
                    <tr>
                        <td><input id="subject" class="form-input" type="text" placeholder="Subject" name="subject"/></td>
                    </tr>
                    <tr>
                        <td><label class="form-label" for="message">Message:</label></td>
                    </tr>
                    <tr>
                        <td><textarea id="message" class="form-message" rows="7" cols="56"></textarea></td>
                    </tr>
                    <tr>
                        <td><input class="form-submit btn" type="submit" value="Send"><td>
                    </tr>
                </table>
            </form>
        </section>
    </body>
</html>
