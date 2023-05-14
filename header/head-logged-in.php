<!--Header Template-->
<!--Session data-->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <header>
        <nav class="navbar navbar-bg ">
            <div class="flex-row">
                <ul class="nav-item">
                    <img src="images/Movie Logo.png" alt="Logo" class="navlinkslogo">
                </ul>





                <!-- Setting the button dropdown for mobile-->
                <a href="javascript:void(0);" class="dropdown-btn" id="dropdown-btn"
                    aria-label="Open Mobile Navigation">
                    <i class="fas fa-bars fa-2x"></i>
                </a>
            </div>
            <!-- Creating the page links-->
            <ul class="inner-nav" id="mobile-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="forum.php" class="nav-link">Forum</a></li>
                <li class="nav-item"><a href="javascript:void(0);" onclick="showDropdown()">
                <img src="images/AccountIcon.png" width="50px" height="50px" class="nav-icon"></a>
                </li>
            </ul>
            <div class="dropdown-menu" id="dropdown">
              <li class="nav-item"><a href="account.php" class="nav-link dropdown-text">Account</a></li>
              <li class="nav-item"><a href="cookies.php" class="nav-link dropdown-text">Cookies</a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link dropdown-text" onclick="Rsure()">Logout</a></li>
    
            </div>
        </nav>
    </header>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/5af60c1deb.js" crossorigin="anonymous"></script>




