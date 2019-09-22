<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Injection</title>
    </head>
    <body>
        <div class="container">
            <h1>Movie Search</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="movietitle">Movie Title</label>
                    <input type="text" class="form-control" id="movietitle" name="movietitle" placeholder="Movie Title">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php
                if($_POST) {
                    $movietitle = $_POST['movietitle'];
                    // Connect to SQLite3 db: https://stackoverflow.com/questions/16728265/how-do-i-connect-to-an-sqlite-database-with-php
                    class MyDB extends SQLite3 {
                        function __construct() {
                            $this->open('movies.db');
                        }
                    }
                    $db = new MyDB();
                    if(!$db) {
                        echo $db->lastErrorMsg();
                    } else {
                        $query = "SELECT * FROM movies WHERE movietitle = '" . $movietitle . "' COLLATE NOCASE;";
                        $result = $db->query($query);
                        echo "<br>";
                        echo "<h2>Results</h2>";
                        echo "<table class='table'><thead><tr><th>Movie Title</th><th>Review</th></tr></thead><tbody>";
                        while($row = $result->fetchArray(SQLITE3_ASSOC) ) {
                            echo "<tr><td>". $row['movietitle'] . "</td>";
                            echo "<td>" . $row['review'] . "</td></tr>";
                        }
                        echo "</tbody></table><br>";
                    $db->close();
                    }
                }
                ?>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </div>
    </body>
</html>
