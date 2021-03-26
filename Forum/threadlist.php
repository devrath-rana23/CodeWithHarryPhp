<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        #ques {
            min-height: 433px;
        }
    </style>
    <title>Welcome to iDiscuss - Coding Forums</title>
</head>

<body>
    <?php include "partials/_dbconnect.php"; ?>
    <?php include "partials/_header.php"; ?>
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE category_id = $id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }
    ?>
    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        //insert thread into db
        $th_title = $_POST['title'];
        $th_desc = $_POST['desc'];
        //Sanitizing
        $th_title = str_replace("<", "&lt", $th_title);
        $th_title = str_replace(">", "&gt", $th_title);
        $th_desc = str_replace("<", "&lt", $th_desc);
        $th_desc = str_replace(">", "&gt", $th_desc);
        $sno = $_POST["sno"];
        $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '$sno', CURRENT_TIMESTAMP)";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if ($showAlert) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your thread has been added! Please wait for community to respond
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
    }
    ?>
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname; ?> Forum</h1>
            <p class="lead"><?php echo $catdesc; ?> </p>
            <hr class="my-4">
            <p> No Spam / Advertising / Self-promote in the forums. ...
                Do not post copyright-infringing material. ...
                Do not post “offensive” posts, links or images. ...
                Do not cross post questions. ...
                Do not PM users asking for help. ...
                Remain respectful of other members at all times.
            </p>
            <p class="lead">
                <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>

    <!--$_SERVER['REQUEST_URI'] same page pe post krne ke liye hai aur ismein ? baad ka parameters bhi accept hoga pr agar $_SERVER['PHP_SELF'] use krenge toh ? ke baad ka truncate ho jyega-->
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

        echo '<div class="container">
                    <h1>Start a Discussion</h1>
                    <form method="post" action="' . $_SERVER['REQUEST_URI'] . '">
                    <div class="form-group">
                    <label for="title">Problem Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter title">
                    <small id="emailHelp" class="form-text text-muted">Keep your title as short as possible</small>
                    </div>
                    <input type="hidden" name="sno" value="' . $_SESSION['sno'] . '">
                    <div class="form-group">
                    <label for="desc">Elaborate yout problem</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>';
    } else {
        echo '<div class="container">
                <h1>Start a Discussion</h1>
                <p class="lead">You are not logged in. Plzz log in to start Discussion</p>
              </div>';
    }
    ?>
    <div class="container mb-5" id="ques">
        <h1 class="py-2">Browse Questions</h1>
        <!-- Use loop to iterate content -->
        <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `threads` WHERE thread_cat_id = $id";
        $result = mysqli_query($conn, $sql);
        $noResult = true; //to track ki while loop ke andar gusa bhi ya nhi
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $id = $row['thread_id'];
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $thread_time = $row['timestamp'];
            $thread_user_id = $row['thread_user_id'];
            $sql2 = "SELECT `user_email` FROM `users` WHERE`sno` = '$thread_user_id'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);


            echo '<div class="media my-3">
            <img class="mr-3" src="./img/userDefaultImage.png" width="40px" alt="Generic placeholder image">
            <div class="media-body">
            
                <h5 class="mt-0"><a class="text-dark" href="thread.php?threadid=' . $id . '">' . $title . '</a></h5>
                ' . $desc . '</div><div><p class="font-weight-bold my-0">Asked By: ' . $row2['user_email'] . ' at ' . $thread_time . '</p></div>
        </div>';
        }
        // echo var_dump($noResult);
        if ($noResult) {
            echo '<div class="jumbotron jumbotron-fluid">
            <div class="container">
              <p class="display-4">No Results Found</h1>
              <p class="lead"><b> Be the first person to ask a question</p>
            </div>
          </div>';
            echo "";
        }
        ?>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <?php include "partials/_footer.php"; ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>