<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once APPROOT . '/views/includes/head.php' ?>
</head>

<body>
    <header>
        <?php require_once APPROOT . '/views/includes/navbar.php' ?>
    </header>
    <main>
        <div><?= $data['html'] ?></div>
    </main>
    <footer>
        <?php require_once APPROOT . '/views/includes/footer.php' ?>
    </footer>
</body>

</html>