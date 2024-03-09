<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='style3.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="style3.css" rel="stylesheet">
    <title>Отзыв</title>
</head>

</head>
<body>
<header class="header_0">
        <div class='header'>
                <div class='header-line'>
                    <div class='nav'>
                        <a class='nav-item' href="index.html">Главная</a>
                        <a class='nav-item' href="mag.html">Магазин</a>
                        <a class='nav-item' href="feedback.html">Оставить отзыв</a>
                        <a class='nav-item' href="personal_page_connection.php">Личный кабинет</a>
                    </div>


                    <div class='btn'>
                        <a class='button' href='registration.html'>Регистрация</a>
                    </div>
                </div>
        </header>
        <div class="container2">
        <div class='container'>
            <div class="reviews">
                <div class="container">
                <div class="left-column">
                    <h1>Личный кабинет</h1>
                        <div class="row" id="real-estates-detail">
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <header class="panel-title">
                                            <div class="text-center">
                                        </div>
                                    </header>
                                </div>
                                <div class="panel-body">
                                <div class="text-center" id="author">
                                <img src="user.jpg" style="width: 100px; height: 100px;">
                                <h3>Контактная информация</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade" id="contact">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Ваше имя</label>
                                        <input type="text" class="form-control rounded" placeholder="Имя">
                                    </div>
                                        <div class="form-group">
                                             <label>Ваш E-mail адрес</label>
                                            <input type="text" class="form-control rounded" placeholder="Е-майл">
                                        </div>
                                     <div class="form-group">
                                        <label>Ваша контактная информация</label>
                                        <input type="email" class="form-control rounded" placeholder="Контактная информация">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
            
  <div class="cabinet">
            <div class="user-reviews">
                    <h1>Ваши отзывы</h1>
                    <div id="reviews-list">
                        <?php
                        $connection = new mysqli('localhost', 'root', '', 'my_project_3');

                        if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            exit();
                        }
                        $query = "SELECT * FROM отзывы";
                        $result = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div>";
                            echo "<strong>" . $row['venue'] . "</strong> ";
                            echo "(" . $row['feedback'] . "):<br>";
                            echo $row['created_at'];
                            echo "</div>";
                        }
                        mysqli_close($connection);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>                    
    <footer class="footer">
                <p class="container2">
                    &copy; Авторское право данного сайта закрепляется за Шминке Ярославом Даниловичем
                </p>
        </footer>
    </body>
</html>




