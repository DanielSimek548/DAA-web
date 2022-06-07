<!DOCTYPE html>
<html lang="en">
    <head>
        <link http-equip="Content-Type" cotent="register.html; charset-UTF-8">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <?php include('./parts/header.php');
        require_once('connection.php'); ?>
        <main class="container">

            <?php
            $page = isset($_GET["page"]) ? $_GET["page"] : "";
            if ($page < 1) {
                $page = 1;
            }

            for ($i = 0; $i < $page; $i++) {
                $x = 0 + 12 * $i;
                $y = 11 + 12 * $i;
            }

            $last = $conn->query("SELECT MAX(id) AS novy FROM clanok");
            while ($newest = $last->fetch_assoc()) {
                $j = $newest["novy"] - $x;
                $i = $newest["novy"] - $y;
                $query1 = $conn->query("SELECT * FROM `clanok` WHERE `id` BETWEEN '$i' AND '$j' ORDER BY `datum` DESC");
            }
            ?>

            <div class="card">
                <div class="row align-items-center">
                    <?php
                    while ($row1 = $query1->fetch_assoc()) {
                        ?>

                        <div class="col-md-4 col-sm-5 col-xs-7" style="text-align: center">
                            
                            <img src="./parts/<?php echo $row1["cover"] ?>" alt="<?php echo $row1["nazov"] ?>" style="width:100%">

                            <p class="title">Title:</span> <?php echo $row1["nazov"] ?> Autor:</span> <?php echo $row1["autor"] ?>
                            <p><?php echo $row1["text"] ?>
                        </div>

                        <?php
                    }
                    ?>
                </div>
            </div>


            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="index.php<?php echo "?page=" . $page - 1; ?>" aria-label="Previous Page">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="index.php<?php echo "?page=" . $page + 1; ?>" aria-label="Next Page">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </main>
    <?php include('./parts/footer.php'); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
