<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.ico">
    <!-- <link rel="stylesheet" href="./css/styles.css"> -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/main.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="" defer></script>

    <title>@yield('title')</title>

</head>
<body>
<main>
        <div id="main-page-nav">
            <nav class="navbar">
                <a href="">
                    <div class="logo-brand">
                        <div class="logo">

                            <img src="/img/logo.png" alt="logo">
                        </div>
                        <span>
                            <!-- JOMO KENYATTA UNIVERSITY OF AGRICULTURE AND TECHNOLOGY
                        <br /> -->
                            <h5 style="color: white; text-decoration:none;">JKUAT ATTACHMENT PORTAL</h5>
                        </span>
                    </div>
                </a>

                <div class="nav-buttons">
                    <a href="">Register</a>
                    <a href="" class="login-button">Sign In</a>
                </div>
            </nav>
        </div>
        <header class="showcase">
            <div class="hero-text">
                <h1>Find Attachment Opportunites</h1>
            </div>
        </header>
        <section class="search-section">
            <div class="search-form">
                <form action="">
                    <div>
                        <input type="text" placeholder="Search for attachment">
                    </div>
                    <!-- <div class="college-filter">
                        <label class="filter-dropdown" for="filter-drop">
                            <select class="" id="styledSelect1" name="options">
                                <option value="">
                                    <div style="
                                        display: flex;
                                        align-items:center;
                                        justify-content:space-between;
                                        width: 100%;
                                    ">
                                        <span>Select college</span>
                                        <span>v</span>
                                    </div>
                                </option>
                                <option value="1">
                                    COETEC
                                </option>
                                <option value="2">
                                    COHES
                                </option>
                                <option value="3">
                                    COANRE
                                </option>
                                <option value="4">
                                    COPAS
                                </option>
                                <option value="4">
                                    COHRED
                                </option>
                            </select>

                        </label>
                    </div> -->
                    <button class="search-button">Search</button>
                </form>
            </div>
            <div class="container-fluid search-display">
                <div class="" style="display: flex;">
                    <div class="box search-filters">
                        <div class="selected-filters">
                            <p>Search filters</p>
                            <div>
                                <p>No selected filters</p>
                            </div>
                        </div>
                        <div>
                            <p>Filter by Department</p>
                            <div class="school-filter-list">
                                <?php for ($i = 0; $i < 15; $i++) : ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox (2)
                                        </label>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <div class="filters-reset">
                            <button>Reset filters</button>
                        </div>
                    </div>
                    <div class="content-display">
                        <div class="box search-results">
                            <p>No search results</p>
                        </div>
                        <div class="job-posts">
                            <h3>Featured Opportunities</h3>
                            <div class="job-list">
                                <?php for ($i = 0; $i < 15; $i++) : ?>
                                    <div class="job-item">
                                        <div class="organization-details">
                                            <div class="organization-logo">
                                                <img src="/img/logo.png" alt="logo">
                                            </div>
                                            <div>
                                                <p>ICT Diretorate</p>
                                                <p class="sm-text"><span>JKUAT</span><span>Juja</span></p>
                                            </div>
                                        </div>
                                        <div class="post-action">
                                            <button type="button" data-toggle="modal" data-target="#myModal">View</button>
                                            <p class="sm-text">01 - jan-2020</p>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-lg" style="width:80%;">
                                        <div class="modal-content">
                                            <div class="mod-header">
                                                <button type="button" class="mod-close-btn" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="mod-other-details">
                                                <div>
                                                    <img src="/img/logo.png" alt="">
                                                    <h4 class="">ICT Directorate</h4>
                                                </div>
                                                <div>
                                                    <p>01-jan-2022</p>
                                                </div>
                                            </div>
                                            <div class="mod-content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Provident hic facere ad? Eius beatae nisi voluptatibus voluptates deserunt, pariatur consectetur
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio illo unde aut nam atque.
                                                    Possimus repellendus blanditiis amet hic,
                                                    reprehenderit ex animi alias cumque repudiandae corporis
                                                    excepturi consectetur sequi voluptate?
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit dicta dolorem vitae
                                                    tempore enim, repellat perferendis commodi, repellendus iste numquam cupiditate
                                                    aliquid rerum fuga nihil quidem placeat corporis ipsa aperiam.
                                                </p>
                                                <br>
                                                <p>Requirements</p>
                                                <br><br>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Fuga molestiae, alias nostrum expedita hic perspiciatis
                                                    est a pariatur fugit ad in aliquid itaque! Illum magnam id exercitationem praesentium ipsam!</p>
                                                <br>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, quae animi
                                                    velit alias quo cupiditate temporibus unde illum! Ab non quis perferendis in culpa modi quidem numquam voluptas sed saepe.</p>

                                                <p>Responsibilities of the Intern</p><br>
                                                • The intern will demonstrate motivated participation in the learning experience.<br>
                                                • The intern will participate in the orientation programs of the organization and abide by all terms and conditions as set out in the internship agreement.<br>
                                                • At the end of the assignment, the intern will provide a full report demonstrating learning and achievements during the internship as guided by supervisor.<br>

                                                <p>Professional Requirements</p><br>
                                                • Students pursuing post graduate studies from reputable national, regional or international universities studying disciplines relevant to the work of the Save the Children International.<br>
                                                • Young professionals, on completion of at least undergraduate degree, who have not yet entered the formal employment arena.<br>
                                                • Should be available on full time for the duration of the programme.<br>
                                                • For Finance, in addition to a first degree, candidates should be either fully qualified CPA/ACCA or studying for the final part of either of the two courses.<br>

                                                <p>Personal Attributes</p><br>
                                                • A high degree of self-motivation, positive attitude, drive and the ability to contribute to a multi-cultural, team-based work environment.<br>
                                                • Strong networking capacity and excellent interpersonal skills.<br>
                                                • Ability to multitask; work flexibly, creatively and under pressure in response to needs or changing demands.<br>
                                                • Extremely well organized.<br>
                                                • Highest ethical standards.<br>

                                                <p>How to Apply</p><br>

                                                Please apply in English saving your CV and Motivation letter as a single document indicating the area you are interested in and the location. To apply, please visit our website at https://kenya..net/. The deadline for receiving applications is 15th February 2022. Only shortlisted applicants will be considered for interview.<br>
                                            </div>

                                            <div class="mod-apply">
                                                <form method="POST" action="application.php">
                                                    <a href="" class="btn btn-primary" style="background:#0d7000;">Apply</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
        <div>
            <p>JKUAT &copy; 2022. All rights reserved</p>
        </div>
        </footer>
    </main>
</body>
</html>