<nav class="navbar navbar-expand-lg custom_nav-container ">
    <a class="navbar-brand" href="index.php">
        <span>
            SPACE 2024
        </span>
    </a>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav">
                <li class="nav-item <?php if($page== "index") echo "active"?>">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown <?php if($page== "tpc") echo "active"?> ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Committee
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item <?php if($page== "iac") echo "active"?>" href="../international-advisory/index.php">International Advisory Committee</a>
                        <a class="dropdown-item" href="./organizing-committee/index.php">Organizing Committee</a>
                        <a class="dropdown-item <?php if($page== "tpc") echo "active"?>" href="./technical-program-committee/index.php">Technical Program
                            Committee</a>
                    </div>
                </li>
                <li class="nav-item dropdown <?php if($page== "program") echo "active"?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Program
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../downloads/SPACE 2024.pdf" download>SPACE Program Booklet</a>
                        <a class="dropdown-item" href="../downloads/SPACE-Pre Conference Workshop Details.pdf" download>Pre Conference Workshop Program Schedule</a>
                        <a class="dropdown-item" href="../downloads/SPACE PROGRAM 2024 - 7July24.pdf" download>Conference Program Schedule</a>
                        <a class="dropdown-item" href="../downloads/IEEE SPACE-Contributory Paper Details.pdf" download>Contributory Paper Schedule</a>
                        <a class="dropdown-item" href="../program.php">Conference Program Detailed Schedule</a>
                        <a class="dropdown-item" href="https://edas.info/getZip.php?c=32329&which=ap&key=29f7ec2f93c1263037d057692378ab8e">Download Conference Proceedings</a>
                    </div>
                </li>
                <li class="nav-item dropdown <?php if($page== "awards") echo "active"?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Authors
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./call-for-papers/index.php">Call For Papers</a>
                        <a class="dropdown-item" href="./call-for-stc/index.php">Call For SPACE Technology Compendium</a>
                        <a class="dropdown-item" href="./call-for-3-mins-comp/index.php">3 Minute Thesis Competition</a>
                        <a class="dropdown-item" href="./paper-submission/index.php">Paper Submission</a>
                        <a class="dropdown-item" href="./important-dates/index.php">Important Dates</a>
                        <a class="dropdown-item <?php if($page== "awards") echo "active"?>" href="awards.php">Awards</a>
                    </div>
                </li>
                <li class="nav-item <?php if($page == "speakers") echo "active"?>">
                    <a class="nav-link" href="speakers.php">Speakers</a>
                </li>
                <li class="nav-item <?php if($page == "sponsorship") echo "active"?>">
                    <a class="nav-link" href="sponsorship.php"> Sponsorship</a>
                </li>
                <li class="nav-item <?php if($page == "w1") echo "active"?>">
                    <a class="nav-link" href="../workshop-1.php"> Workshops</a>
                </li>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($page== "register" || $page== "start-up") echo "active"?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Register
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item <?php if($page== "register") echo "active"?>" href="register.php">SPACE Registration
                        </a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($page== "acc" || $page== "start-up") echo "active"?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Accommodation
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item <?php if($page== "venue") echo "active"?>" href="venue.php">Conference Venue
                        </a>
                        <a class="dropdown-item <?php if($page== "acc") echo "active"?>" href="accomodation.php">Accommodation
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>