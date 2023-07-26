<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Text</title>

    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="header-wrapper mt-5">
                <div class="row header-content">
                    <div class="header-title col-md-8">
                        <a href="index.html">Blog Title</a>
                    </div>
                    <div class="header-menu col-md-4">
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="blog.html" style="opacity: 100%;">Blog</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="blog-wrapper">
        <div class="container mt-4">
            <div class="blog-container">
                <div class="blog-top-title">
                    Blog
                </div>
                <div class="blog-container-text">
                    <?php
                    
                    $db = new SQLite3('db.db');

                    
                    $blogID = $_GET['id'] ?? 1; 

                    
                    $result = $db->query("SELECT * FROM blog WHERE id = $blogID");

                    
                    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                        $date = $row['date'];
                        $readingTime = $row['reading_time'];
                        $author = $row['author'];
                        $title = $row['title'];
                        $text = $row['description'];

                        echo '<div class="blog-text-meta-info">';
                        echo '<ul>';
                        echo '<li>';
                        echo '<div class="blog-text-date">';
                        echo $date;
                        echo '</div>';
                        echo '<div class="blog-text-meta-dot">';
                        echo '·';
                        echo '</div>';
                        echo '<div class="blog-text-reading-time">';
                        echo $readingTime;
                        echo '</div>';
                        echo '<div class="blog-text-meta-dot">';
                        echo '·';
                        echo '</div>';
                        echo '<div class="blog-text-author">';
                        echo $author;
                        echo '</div>';
                        echo '</li>';
                        echo '</ul>';
                        echo '</div>';

                        echo '<div class="blog-text-title">';
                        echo $title;
                        echo '</div>';

                        echo '<div class="blog-text">';
                        echo $text;
                        echo '</div>';
                    }

                    
                    $db->close();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid mt-5"></div>
            <hr>
        </div>
        <div class="container text-center mt-5 mb-5" >
            <div class="copyright">
                © 2021 All rights reserved.
            </div>   
        </div>
        
    </footer>

</body>

</html>