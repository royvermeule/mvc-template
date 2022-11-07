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
        <div class="flex-ccc">
            <div class="banner">
                <img src="/public/styles/img/banner.jpg" alt="">
            </div>
            <section>
                <div class="textarea1">
                    <h2 class="area-title">Title</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <!-- here we import the footer. -->
        <?php require_once APPROOT . '/views/includes/footer.php' ?>
    </footer>
</body>

</html>