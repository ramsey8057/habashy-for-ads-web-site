<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta tags -->
        <meta charset="UTF-8">
        <meta name="description" content="Habashy for advertising">
        <meta name="keywords" content="habashy, ads, advertising, photo, sessions, advertise, printage">
        <meta name="author" content="Ahmed Ramsey">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- bootstrap styles CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- styles link -->
        <link rel="stylesheet" href="assets/styles/colors.css">
        <link rel="stylesheet" href="assets/styles/last-works-style.css">
        <link rel="stylesheet" href="assets/styles/navbar.css">
        <link rel="stylesheet" href="assets/styles/particles.css">
        <link rel="stylesheet" href="assets/styles/card.css">
        <link rel="stylesheet" href="assets/styles/scrollbar.css">
        <!-- title image -->
        <link rel="icon" href="assets/images/habashy.jpg">
        <!-- title tag -->
        <title>Habashy | Last works</title>
    </head>
    <body dir="ltr">
        <!-- particles -->
        <div id="particles-js">
            <!-- navbar -->
            <div class="menu-wrap">
                <input type="checkbox" class="toggler"/>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <div></div>
                </div>
                <div class="menu">
                    <div>
                        <div>
                            <ul>
                                <li><h1>Habashy for ads</h1></li>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about.php">About</a></li>
                                <li class="active">Last Works</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content -->
            <div class="row overflow-auto">
                <?php
                for($i = 0; $i < 9; $i++) {
                    echo '
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 rounded" style="padding-bottom: 15px;">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="assets/images/uploads/1.jpg" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title" word="Card Title">Card title</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nostrum laboriosam, vitae voluptatibus vel, magni quis veritatis nemo nesciunt sapiente neque similique eaque corrupti suscipit mollitia soluta perferendis accusamus. Et?</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    ';
                }
                ?>
            </div>
        </div>
        <!-- footer -->
        <!-- TODO: footer here -->
        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <!-- bootstrap scripts CDN -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!-- particles scripts -->
        <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
        <script>
            particlesJS.load("particles-js", "assets/json/particles.json");
        </script>
        <!-- scripts -->
        <script src="assets/scripts/global.js"></script>
    </body>
</html>
