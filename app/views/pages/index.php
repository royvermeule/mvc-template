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
        <!-- here we echo the html comming from the controllers. -->
        <div><?= $data['html'] ?></div>
    </main>
    <footer>
        <!-- here we import the footer. -->
        <?php require_once APPROOT . '/views/includes/footer.php' ?>
    </footer>
</body>

</html>