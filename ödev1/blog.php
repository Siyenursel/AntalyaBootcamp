<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    
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
    <div class="blog-post-wrapper">
        <div class="container mt-4">
            <div class="blog-post-container">
                <div class="blog-post-top-title">
                    Blog
                </div>
                <div class="blog-post-row">
                    <div class="row">
                        <?php
                    
                        $db = new SQLite3('db.db');

                     
                        $result = $db->query('SELECT * FROM blog');

                       
                        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                            $title = $row['title'];
                            $description = $row['description'];
                            $date = $row['date'];
                            $readingTime = $row['reading_time'];
                            $author = $row['author'];
                            $id = $row['id'];

                            echo '<div class="blog-post col-md-6">';
                            echo '<a href="blog-text.php?id='.$id.'">';
                            echo '<div class="blog-post-thumbnail">';
                            echo '<img src="assets/img/thumbnail.png" alt="" srcset="">';
                            echo '</div>';
                            echo '<div class="blog-post-text">';
                            echo '<div class="blog-post-title">';
                            echo $title;
                            echo '</div>';
                            echo '<div class="blog-post-description">';
                            echo $description;
                            echo '</div>';
                            echo '<div class="blog-post-meta-info">';
                            echo '<ul>';
                            echo '<li>';
                            echo '<div class="blog-post-date">';
                            echo $date;
                            echo '</div>';
                            echo '<div class="blog-post-meta-dot">';
                            echo '·';
                            echo '</div>';
                            echo '<div class="blog-post-reading-time">';
                            echo $readingTime;
                            echo '</div>';
                            echo '<div class="blog-post-meta-dot">';
                            echo '·';
                            echo '</div>';
                            echo '<div class="blog-post-author">';
                            echo $author;
                            echo '</div>';
                            echo '</li>';
                            echo '</ul>';
                            echo '</div>';
                            echo '</div>';
                            echo '</a>';
                            echo '</div>';
                        }

                       
                        $db->close();
                        ?>

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