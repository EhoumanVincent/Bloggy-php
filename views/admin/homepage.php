    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administration</title>
        <link rel="stylesheet" href="./assets/css/home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>

    <!-- <header class="home-header">
        <div class="navigation">
            <a href="./index.php" class="logo">ADMIN</a>

            <nav>
                <label for="mobile">Menu &nbsp;<i class="fa fa-bars"></i></label>
                <input type="checkbox" id="mobile">

                <ul class="mobile-menu">

    
                        <li><a href="#"><?= $_SESSION["user"]["name"] ?></a></li>
                        <li><a href="index.php?controller=logout">Se déconnecter</a></li>



                </ul>
            </nav>
        </div>

        <div class="banner">
            <h1>Bloggy</h1>
            <p>Welcome to my beautiful blog</p>
        </div>
    </header> -->


        <h1>Tous les articles</h1>
        
        <a class="create-link " href="views/admin/create.php">Créer un nouvel article</a>
        <a class="create-link " href="index.php?controller=logout">Se déconnecter</a>

<br>
<br>
        <div class="container">
            <table style="width: 100%;">
                <thead>
                    <th>#Id</th>
                    <th>Titre</th>
                    <th>Actions</th>
                </thead>
                <?php foreach ($articles as $article) : ?>
                    <tr>
                        <td><?= $article->id; ?></td>
                        <td><?= $article->title; ?></td>
                        <td>
                            <a href="index.php?controller=admin_edit&id=<?=$article->id; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="index.php?controller=admin_delete&id=<?= $article->id; ?>"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </body>

    </html>


  