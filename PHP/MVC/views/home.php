
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { 
            background-color: #fff5e6; 
            padding: 2rem;
        }
        .content { 
            text-align: center; 
            max-width: 800px;
            margin: 0 auto;
        }
        .table-container { 
            margin: 2rem auto;
        }
        .footer {
            background: transparent;
            padding: 2rem;
        }
        .footer-icons {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
        }
        a { color: #363636; }
        a:hover { color: #000; }
        .navbar {
            background: transparent;
            margin-bottom: 3rem;
        }
        .navbar-item {
            color: #4a4a4a;
        }
        .navbar-item:hover {
            background: transparent !important;
            color: #000;
        }
        .navbar-start .navbar-item {
            font-size: 1rem;
        }
        .navbar-end .navbar-item {
            font-size: 1.2rem;
            padding: 0.5rem;
        }
    </style>
    <title>Document</title>
</head>
<body>
<?php include './views/layout/navbar.php'; ?>
    <div class="content">
        <h1 class="title">Products</h1>
        <p class="subtitle" style="color: #4a4a4a">
            Some Text
        </p>
        
        <div class="table-container">
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>Project Name</th>
                        <th>Technology</th>
                        <th>Status</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Project 1</td>
                        <td>React</td>
                        <td>Active</td>
                        <td><a href="#"><i class="fab fa-github"></i></a></td>
                    </tr>
                    <tr>
                        <td>Project 2</td>
                        <td>Node.js</td>
                        <td>Completed</td>
                        <td><a href="#"><i class="fab fa-github"></i></a></td>
                    </tr>
                </tbody>
            </table>
            </div>

            <div class="buttons is-centered">
                <a href="./index.php?action=create" class="button is-primary">
                    <span class="icon">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span>Add Product</span>
                </a>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="content has-text-centered">
            <p style="color: #4a4a4a">© 2024 Super Footer. All rights reserved.</p>
            <div class="footer-icons">
                <a class="icon-link"><i class="far fa-envelope"></i></a>
                <a class="icon-link"><i class="fas fa-rss"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>