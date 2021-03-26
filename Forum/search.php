<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        #ques {
            min-height: 433px;
        }

        .container {
            min-height: 84vh;
        }
    </style>
    <title>Welcome to iDiscuss - Coding Forums</title>
</head>

<body>
    <?php include "partials/_dbconnect.php"; ?>
    <?php include "partials/_header.php"; ?>

    <!-- Search result starts here -->
    <div class="container my-3">
        <h1>Search results for <em>"<?php echo $_GET['search']; ?>"</em></h1>
        <?php
        $search = $_GET['search'];
        $sql = "SELECT * FROM threads WHERE MATCH (`thread_title`,`thread_desc`) against ('$search')";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $thread_id = $row['thread_id'];
            $url = "thread.php?threadid=" . $thread_id;
            //  Display the search result
            echo ' <div class="result">
                        <h3><a href="' . $url . '" class="text-dark">' . $title . '</a></h3>
                        <p>' . $desc . '</p>
                   </div>';
        }
        if ($noResult) {
            echo '<div class="jumbotron jumbotron-fluid">
                   <div class="container">
                     <p class="display-4">No Results Found</h1>
                     <p class="lead"><b>Not match suggestions</p>
                   </div>
                 </div>';
        }
        ?>
    </div>

    <?php include "partials/_footer.php"; ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>