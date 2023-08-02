<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- bootstrap jss -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Login page</title>
</head>

<body>
    <div class="container">
        <di class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 mt-5 ">

                <form action="index.php" method="post">

                    <div>
                        <label for="">Name</label>

                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="your_name" required>
                        <br><br>

                        <label for="">Password</label>

                        <input type="password" class="form-control" placeholder="password" aria-label="Username" aria-describedby="addon-wrapping" name="your_password" required>

                    </div>
                    <br><br>
                    <div>
                        <button class="btn btn-info" type="reset">reset</button>
                        <button class="btn btn-success" type="submit">submit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">

            </div>

    </div>
    </div>

   
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // old value
            $myPassword = "3595";
            $myName = "Jack";
          
            // new value
            $newPassword = $_REQUEST["your_password"];
            $newName = $_REQUEST["your_name"];

            if ($newName == $myName && $newPassword == $myPassword ) {
                header("location: about.php");
                exit();
            } else {
                echo "Your name or password didn't match ";
            }
        }
        ?>


    </div>


</body>

</html>