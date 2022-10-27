<!DOCTYPE html>
<html lang="en">

<head>
    <!-- here we import the head. -->
    <?php require_once APPROOT . '/views/includes/head.php' ?>
</head>

<body>
    <header>
        <!-- here we import the navbar. -->
        <?php require_once APPROOT . '/views/includes/navbar.php' ?>
    </header>
    <main>
        <div class="container-center">
            <div class="container-col">
                <div class="card2-big">
                    <h2 class="card-title1">Information</h2>
                    <p>mvc-template</p>
                    <p>This is a simple php mvc framework for small projects.</p>
                    <p>Version: 1.2</p>
                </div>
            </div>
            <div class="card2-big">
                <h2 class="card-title1">Get started</h2>
                <div class="container-row">
                    <a href="http://localhost/phpmyadmin" class="card-link1">PHP myadmin</a>
                    <a href="http://localhost:80" class="card-link1">localhost</a>
                </div>
                <h2 class="card-title2">How to start?</h2>
                <p>
                    First: In the config.php file write your url,
                    The framework will not work otherwise.
                </p>
                <p>
                    Then: <a href="http://localhost/phpmyadmin" class="card-link2">Make a db</a> give it your prefered name.
                    then put your the db name in the config.php file.
                </p>
            </div>
        </div>
    </main>
    <footer>
        <!-- here we import the footer. -->
        <?php require_once APPROOT . '/views/includes/footer.php' ?>
    </footer>
</body>

</html>