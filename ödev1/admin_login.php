
<?php

$databaseFile = 'db.db';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $db = new SQLite3($databaseFile);

   
    $query = "SELECT * FROM admin_login WHERE mail = :username AND pass=:password";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':username', $username, SQLITE3_TEXT);
    $stmt->bindValue(':password', $password, SQLITE3_TEXT);
    $result = $stmt->execute();

    
    if ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        
        header("Location:admin_page.php");

    } else {
        echo "Kullanıcı bulunamadı!";
    }

    
    $db->close();
}
?>


<form  method="POST">
    <link rel="stylesheet" type="text/css" href="style.css">
    <table align="center">
        <tr>
            <td>Kullanici Adi</td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Sifre</td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" style="background:pink" value="Giris"></td>
        </tr>
    </table>
</form>
