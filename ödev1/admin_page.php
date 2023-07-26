<!DOCTYPE html>
<html>
<head>
    <title>Admin Paneli</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Admin Paneli</h1>

        <div class="messages">
            <h2>Gönderilen İletiler</h2>
            <ul>
            <?php
                
                $db = new SQLite3('db.db'); 

                
                $query = "SELECT * FROM contact";
                $result = $db->query($query);

                while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                    echo '<li>';
                    echo '<strong>' . $row['fname'] . ':</strong> ' . $row['message'];
                    echo '</li>';
                }

               
                $db->close();
                ?>
            </ul>
        </div>
    </div>
 
</body>
</html>