<div class="sticky">
<nav class="navbar navbar-dark navbar-expand-md">
    <ul>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle navbar-brand" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="circle-image">
                <img src="../blank.jpg"/>
            </span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="leaderboard.php">Leaderboard</a></li>
            <li><a class="dropdown-item" href="unregister.php">Log out</a></li>
          </ul>
        </li>
    </ul>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar">
        <div class="container">
            <ul class="navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php" name="home">Home</a>
                </li>
            </ul>
        </div>
        <div class="container">
            <ul class="navbar-nav ms-auto justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="pairs.php" name="memory">Play Pairs</a>
                </li>
                <li class="nav-item">
                <?php 
                    if($_SESSION["registered"]){
                        echo "<a class=\"nav-link\" href=\"leaderboard.php\" name=\"leaderboard\">Leaderboard</a>";
                    } else{
                        echo "<a class=\"nav-link\" href=\"registration.php\" name=\"register\">Register</a>";
                    }
                ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>