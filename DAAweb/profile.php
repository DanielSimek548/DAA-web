<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
require_once('database.php');
include('./parts/header.php');
include('./script/profile_script.php');
?>

<?php foreach ($users as $user) : ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }
    </style>

    <div class="card">
        <img src="./images/<?php echo $user["avatar"] ?>" alt="<?php echo $user["username"] ?>" style="width:100%">
        <h1><?php echo $user["username"] ?></h1>
        <p class="title"><?php echo $user["date"] ?></p>
    </div>

    <div class="card">
        <a href="avatar_change.php"><i class="fa fa-image"></i> Change avatar</a>
        <a href="#"><i class="fa fa-user"></i> Change username</a>
        <a href="#"><i class="fa fa-lock"></i> Change password</a>
        <a href="./script/delete_script.php?id=<?php echo $user["id"]; ?>"><i class='fa fa-remove'> Delete user</i></a>
    </div>    

<?php endforeach ?>

<?php include('./parts/footer.php'); ?>