<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="header clearfix">
        	<h2>Книжный магазин</h2>
            <h4 class = "text-muted">
                <?php
                echo '<a href="./">Главная</a> &#187';
                echo '<a href="books">Книги</a>';
                if (!empty($book['bookname'])) echo'&#187'.$book['bookname'];
                ?>
            </h4>
        </div>
        <div id="content" style = "padding-top:20px;">
        <?php
            echo $content;
        ?>


    </div>
    <footer class="footer">
        <p>&copy; Year Design <i class = "fa fa-child"></i></p>
    </footer>
    </div>
</body>
</html>