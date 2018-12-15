<?php require_once("../backend/templates/head.php"); ?>

    <div id="app" class="app-wrapper">
      <noscript>
        <p>Please, enable support of JavaScript in your browser!</p>
      </noscript>

      <header class="header">
        <div class="container">
          <div class="row">
            <div class="col-xs">
              <nav class="nav top-nav">
                <a href="/" class="link logo">
                  <div class="logo-block">
                    <span class="logo-font">PrettyTrash</span>
                  </div>
                </a>
                <button type="button" class="btn nav-toggler" data-target="#topNavSlimScrContent">
                  <i class="fa fa-bars top-nav-toggler-icon"></i>
                  <i class="fa fa-times top-nav-toggler-icon-close"></i>
                </button>

                <div class="nav-collapse nav-list-wrapper" id="topNavSlimScrContent">
                  <ul class="list">
                    <li class="nav-item active">
                      <a href="#" class="link">Item #1</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="link">Item #2</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="link">Item #3</a>
                    </li>
                    <li class="nav-item penultimate-item">
                      <a href="#" class="link">Sign up</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="link link-login">Sign in</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>

      <main class="main-content">
        <div class="container">
          <div class="data">
            <div class="row">
              <div class="col-md-12">
                <h3 class="h3">Account Data</h3>
                <div class="account-data">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <footer class="footer">
        <div class="footer-content-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-5 col-xs-12">
                <div class="contacts-copyright">
                  <p class="p">Phone</p>
                  <p class="p">&copy; 2018 PrettyTrash</p>
                </div>
              </div>
              <div class="col-md-7 col-xs-12">
                <nav class="nav bottom-nav">
                  <ul class="list">
                    <li class="nav-item">
                      <a href="#" class="link">FAQ</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="link">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="link">Terms Of Service</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

<?php require_once("../backend/templates/footer.php"); ?>
