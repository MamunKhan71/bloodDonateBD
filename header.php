<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:red; height:auto" >
    <a class="navbar-brand" href="index.php" style="font-family: Li Ador Noirrit">বাংলাদেশ ব্লাড ব্যাংক</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <?php if (isset($_SESSION['hid'])) { ?>

            <?php } elseif (isset($_SESSION['rid'])) { ?>

            <?php } else { ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-light" href="login.php" style="color:black; font-family: Li Ador Noirrit" >লগিন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light" href="register.php" style="color:black; font-family: Li Ador Noirrit">রেজিস্টার</a>
                </li>
            </ul>
            <?php } ?>
        </div>
    </div>
</nav>