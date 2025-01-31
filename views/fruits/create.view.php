<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<a href="/">Back home</a>
<h1>Create a Fruit</h1>

<form method="POST">
    <label>Fruit name:
        <input name="name" value="<?= $_POST["name"] ?? "" ?>" />
        <?php if (isset($errors["name"])) { ?>
            <p class="invalid-data"><?= $errors["name"] ?></p>
        <?php } ?>
    </label>
    <br />
    <label>Calories:
        <input name="calories" value="<?= $_POST["calories"] ?? "" ?>" />
        <?php if (isset($errors["calories"])) { ?>
            <p class="invalid-data"><?= $errors["calories"] ?></p>
        <?php } ?>
    </label>
    <button>Save</button>
</form>

<?php require "views/components/footer.php" ?>