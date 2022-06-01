<!DOCTYPE html>
<html lang="en">
    <head>
        <link http-equip="Content-Type" cotent="register.html; charset-UTF-8">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>My page</title>
    </head>
    <body>
        <?php
        include('./parts/header.php');
        require_once('database.php');
        include('./script/getUsers.php');
        ?>

        <main class="container">
            <h1 class="m-4 text-uppercase">Users</h1>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action active d-flex row">
                    <span class="col-1"> ID.</span>
                    <span class="col-2"> Avatar</span>
                    <span class="col-2"> Username</span>
                    <span class="col-2"> Date</span>
                    <span class="col-2"> Akcia</span>
                </li>
            </ul>
            <?php foreach ($users as $user) : ?>
                <li class="list-group-item list-group-item-action d-flex row align-items-center">     
                    <span class="text-danger col-1"> <?php echo $user["id"] ?></span>
                    <div class="col-2">
                        <img src="./images/<?php echo $user["avatar"] ?>" alt="<?php echo $user["username"] ?>" style="width: 30px">
                    </div>
                    <span class="col-2"> <?php echo $user["username"] ?></span>
                    <span class="col-2"> <?php echo $user["date"] ?></span>
                    <div class="col-2 d-flex justify content-center">
                        <a style="margin-right: 5px" href="profile.php<?php echo "?user=" . $user["id"]; ?>"class="btn btn-success">Profil</a>
                    </div>
                </li>

            <?php endforeach ?>

        </main>

        <?php include('./parts/footer.php'); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
