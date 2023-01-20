<?php
/**
 * @var \App\View\AppView $this
 */

$this->autoLayout = false;
?>
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
    <?= $this->Html->css(['login.css', 'custom.css']) ?>
    <?= $this->fetch('css') ?>
</head>
<body class="text-center">
    <main class="form-signin">
        <?= $this->Form->create() ?>
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <?= $this->Flash->render() ?>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">Created by KDYOU &copy; <?= date('Y') ?></p>
        <?= $this->Form->end() ?>
    </main>
</body>
</html>
