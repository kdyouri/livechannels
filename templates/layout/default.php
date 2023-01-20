<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <?= $this->Html->css('custom.css') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <div class="col-lg-8 mx-auto p-3 py-md-5">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-6 mb-2 mb-md-0 text-dark text-decoration-none">
                <i class="bi bi-sort-up me-2" style="font-size: 2em;"></i>
                <span class="fs-4">Live Channels Manager</span>
            </a>
            <div class="col-md-6 text-end">
                <a href="<?= $this->Url->build('/users/logout') ?>" class="btn btn-primary">Logout</a>
            </div>
        </header>

        <main>
            <?= $this->Flash->render() ?>

            <div id="content">
                <?= $this->fetch('content') ?>
            </div>
        </main>
        <footer class="pt-5 my-5 text-muted border-top">
            Created by KDYOU &copy; <?= date('Y') ?>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <?= $this->fetch('script') ?>
</body>
</html>
