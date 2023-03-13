<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= css("bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= css("style.css") ?>">
    <title><?= $title ?></title>
</head>
<body>

    <header>
        <?= $this->insert('../components/navbar') ?>
    </header>

    <main>
        <?= $this->section("content") ?>
    </main>

    <footer style="padding: 5rem;" class="text-center bg-dark text-white mt-5">Rodrigo Tutz - 2023</footer>

    <script src="<?= js('bootstrap.bundle.min.js') ?>"></script>
</body>
</html>