<?php
        require './aerolinea.php';
        session_start();

        if(!isset($_SESSION['airlines'])){
            $_SESSION['airlines'] = [
            ];
        }

        $airlines = $_SESSION['airlines'];
        
        if(isset( $_POST['id'],$_POST['name'],$_POST['aeroType'],$_POST['planes'])){
            $mensajito = $_POST;
            $name = $_POST['name'];
            $id = $_POST['id'];
            $aeroType = $_POST['aeroType'];
            $planes = $_POST['planes'];

            $airline = new Airline($id,$name,$aeroType,$planes);

            array_push($airlines,$airline);

            $_SESSION['airlines'] = $airlines;
        }
        
        if(count($airlines) > 0){
            $arrayjito = $airlines;
        }

        // Delete ALL elements
        // Check if the delete session button was clicked
        if (isset($_POST['delete_session'])) {
            // Destroy the session
            session_unset();  // Remove session variables
            session_destroy();  // Destroy the session itself

            // Optionally, redirect to a different page after session deletion
            header("Location: /AeroPHP/");
            exit();
        }

        //Delete one by one
        if(isset($_GET['delete'])) {
            $id = $_GET['delete'];
            //print($id);

            foreach($airlines as $key => $airline){
                if($airline->id == $id){
                    //print_r($airline);
                    //print_r($key);
                    unset($airlines[$key]);

                    $_SESSION['airlines'] = $airlines;

                    header("Location: /AeroPHP/");
                    break;
                }
            }
        }

        //Search for an specific airline
        function getAirlineByID($id, $airlines){
            foreach($airlines as $airline){
                if($airline->id == $id){
                    return $airline;
                }
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AeroPHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
</head>
<body>
<section class="container">
<h1 class="title">Hola Vuela</h1>
<div class="columns">
    <div class="column is-two-fifths">
    <?php if(isset($_GET['edit'])){ 
            $editAirline = getAirlineByID($_GET['edit'],$airlines);
            //print_r($editAirline);
    ?>
            <form method="POST" action="">
                <div class="field">
                    <label class="label">ID</label>
                    <div class="control">
                        <input class="input" type="text" name="id" value="<?php echo $editAirline->id ?>">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Airline Name</label>
                    <div class="control">
                        <input class="input" type="text" name="name" value="<?php echo $editAirline->name ?>">
                    </div>
                </div>
                
                <div class="field">
                    <label class="label">Number of Planes</label>
                    <div class="control">
                        <input class="input" type="text" name="planes" value="<?php echo $editAirline->planes ?>">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Airline Type</label>
                    <div class="control">
                        <input class="input" type="text" name="aeroType" value="<?php echo $editAirline->aeroType ?>">
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-primary is-light" type="submit">Update</button>
                    </div>
                </div>       
            </form>
    <?php } else { ?>
            <form method="POST" action="">
                <div class="field">
                    <label class="label">ID</label>
                    <div class="control">
                        <input class="input" type="text" name="id">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Airline Name</label>
                    <div class="control">
                        <input class="input" type="text" name="name">
                    </div>
                </div>
                
                <div class="field">
                    <label class="label">Number of Planes</label>
                    <div class="control">
                        <input class="input" type="text" name="planes">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Airline Type</label>
                    <div class="control">
                        <div class="select">
                            <select name="aeroType">
                                <option value="Commercial">Commercial</option>
                                <option value="VIP">VIP</option>
                                <option value="Cargo">Cargo</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-primary is-light" type="submit">Register</button>
                    </div>
                </div>       
            </form>
        <?php } ?>
    </div>
    <div class="column is-half">
        <table class="table is-fullwidth mr-2 ml-2">
            <thead>
                <tr>
                <th>ID</th>
                <th>Airline</th>
                <th>Planes</th>
                <th>Type</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($airlines as $airline): ?>
                <tr>
                    <th><?php echo $airline->id ?></th>
                    <td><?php echo $airline->name ?></td>
                    <td><?php echo $airline->planes ?></td>
                    <td><?php echo $airline->aeroType ?></td>
                    <td><a href="?edit=<?php echo $airline->id ?>" class="button is-link is-light">Edit</a> <a href="?delete=<?php echo $airline->id ?>" class="button is-danger is-light">Delete</a></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <form method="POST" action="">
            <button class="button is-light is-danger" type="submit" name="delete_session">Delete All</button>
        </form>
    </div>
</section>
<section class="container">
    <h2><strong>POST Content</strong></h2>
    <pre><code><?php print_r($mensajito); ?></code></pre>
</section>

<section class="container">
    <h2><strong>ARRAY Content</strong></h2>
    <pre><code><?php print_r($arrayjito); ?></code></pre>
</section>

<footer class="container">
    <p>Airlines PHP</p>
</footer>
</div>
<!-- SOLUTION
 1 - https://stackoverflow.com/a/2010515
 2 - Check if doable https://stackoverflow.com/a/1173769
 -->
</body>
</html>
