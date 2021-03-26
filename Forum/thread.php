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
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `threads` WHERE thread_id = $id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_user_id = $row['thread_user_id'];

        //Query the users table to find out the original poster
        $sql2 = "SELECT `user_email` FROM `users` WHERE `sno` = '$thread_user_id'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        $posted_by = $row2['user_email'];
    }
    ?>
    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        //insert thread into db
        $th_comment = $_POST['comment'];
        //sanitize our inputs taaki db mein tags,scripts ya sensitive characters as a string store naa hoo pr alternative hoga store taki woh html mein script ya html tags ke injection se bacha le
        // XSS attack mein koi external script tumhare website page ka hissa bnati hai
        $th_comment = str_replace("<", "&lt", $th_comment);
        $th_comment = str_replace(">", "&gt", $th_comment);
        $sno = $_POST["sno"];
        $sql = "INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES (NULL, '$th_comment', '$id', '$sno', CURRENT_TIMESTAMP);";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if ($showAlert) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You have commented successfully
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
    }
    ?>
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $title; ?> Forum</h1>
            <p class="lead"><?php echo $desc; ?> </p>
            <hr class="my-4">
            <p> No Spam / Advertising / Self-promote in the forums. ...
                Do not post copyright-infringing material. ...
                Do not post “offensive” posts, links or images. ...
                Do not cross post questions. ...
                Do not PM users asking for help. ...
                Remain respectful of other members at all times.
            </p>
            <p>Posted By: <em><?php echo $posted_by; ?></em></p>
            <p class="lead">
                <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>

    <!-- Agar koi banda login krke iss site ka method aur action url bnale toh woh dusri site se form create krke and sand comment iss url mein hit krake discussion daal skta hai bina iss site min login kiye kyunki humne url ke acess ko authenticate nhi kiya -->
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

        echo '<div class="container">
        <h1>Post a Comment</h1>
        <form method="post" action="' . $_SERVER['REQUEST_URI'] . '">

            <div class="form-group">
                <label for="comment">Type your Comment</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                <input type="hidden" name="sno" value="' . $_SESSION['sno'] . '">
            </div>
            <button type="submit" class="btn btn-success">Post Comment</button>
        </form>
    </div>';
    } else {
        echo '<div class="container">
        <h1>Post a Comment</h1>
                <p class="lead">You are not logged in. Plzz log in to post Comment</p>
              </div>';
    }
    ?>
    <!-- Ismein xss attack ho skta hai jisse ki script inject krdega aur aapka frontend kharab krdega jaise yha add kroge nye comments toh show hona band ho jayenge due to script toh aapko isse manually escape krana hoga jaise user ne comment mein galti se script tag daal diya toh usse baki ke comments dikhne band ho jyenge isliye aapko aise injections se bachne ke liye inhe escape krna padega taki woh isse as a string consider krre naki tag -->

    <div class="container mb-5" id="ques">
        <h1 class="py-2">Discussions</h1>
        <!-- Use loop to iterate content -->
        <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `comments` WHERE thread_id = $id";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $id = $row['comment_id'];
            $content = $row['comment_content'];
            $comment_time = $row['comment_time'];
            $comment_by = $row['comment_by'];
            $sql2 = "SELECT `user_email` FROM `users` WHERE `sno` = '$comment_by'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);


            echo '<div class="media my-3">
            <img class="mr-3" src="./img/userDefaultImage.png" width="40px" alt="Generic placeholder image">
            <div class="media-body">
                <p class="font-weight-bold my-0">' . $row2['user_email'] . ' at ' . $comment_time . '</p>
                ' . $content . '
            </div>
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