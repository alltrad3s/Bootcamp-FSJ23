<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #fff5e6; padding: 2rem; }
        .content { max-width: 800px; margin: 0 auto; }
        .navbar { background: transparent; margin-bottom: 3rem; }
        .navbar-item { color: #4a4a4a; }
        .navbar-item:hover { background: transparent !important; color: #000; }
        .form-container { max-width: 500px; margin: 2rem auto; }
    </style>
</head>
<body>
    <?php include './views/layouts/navbar.php'?>
    <?php print($product['id']);?>
    <div class="content">
        <h1 class="title has-text-centered">Edit <?php print($product['id']);?></h1>
        <p class="subtitle has-text-centered" style="color: #4a4a4a">
            Add a new product to your inventory with its details
        </p>

        <hr>

        <form class="form-container" action="./index.php?action=update&id=<?php echo($product['id']);?>" method="POST">
            <div class="field">
                <label class="label">Nombre</label>
                <div class="control">
                    <input class="input" type="text" name="nombre" value=<?php echo $product['nombre'];?>>
                </div>
            </div>

            <div class="field">
                <label class="label">Precio</label>
                <div class="control">
                    <input class="input" type="text" name="precio" value=<?php echo $product['precio'];?>>
                </div>
            </div>

            <div class="field">
                <label class="label">Descuento</label>
                <div class="control">
                    <input class="input" type="text" name="descuento" value=<?php echo $product['descuento'];?> >
                </div>
            </div>

            <div class="field">
                <label class="label">Cantidad</label>
                <div class="control">
                    <input class="input" type="text" name="cantidad" value=<?php echo $product['cantidad'];?>>
                </div>
            </div>

            <div class="field">
                <div class="control has-text-centered">
                    <button class="button is-primary">
                        <span class="icon">
                            <i class="fas fa-save"></i>
                        </span>
                        <span>Save Product</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>