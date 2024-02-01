<?php include 'header.php'; ?>
<div class="container">
    <div class="row">


<body>

<h3> 02.Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement
    to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3.
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>


    <div class="container mt-5">

        <!-- Form Section -->
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Enter your First Name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Enter your Last Name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <!-- Display Hello Message -->
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    echo "<h3>Hello $firstname $lastname, You are welcome to my site.</h3>";
                }
                ?>
            </div>

            <!-- Table Section -->
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Header 1</th>
                            <th scope="col">Header 2</th>
                            <th scope="col">Header 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Row 1, Col 1</td>
                            <td>Row 1, Col 2</td>
                            <td>Row 1, Col 3</td>
                        </tr>
                        <tr>
                            <td>Row 2, Col 1</td>
                            <td>Row 2, Col 2</td>
                            <td>Row 2, Col 3</td>
                        </tr>
                        <tr>
                            <td>Row 3, Col 1</td>
                            <td>Row 3, Col 2</td>
                            <td>Row 3, Col 3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- PHP String Variables -->
        <?php
        $str1 = "Hello";
        $str2 = "World";
        $joinedString = $str1 . ' ' . $str2;
        echo "<p>Joined String: $joinedString</p>";
        echo "<p>Length of the String: " . strlen($joinedString) . "</p>";
        ?>

        <!-- PHP Number Addition -->
        <?php
        $num1 = 298;
        $num2 = 234;
        $num3 = 46;
        $sum = $num1 + $num2 + $num3;
        echo "<p>Sum of Numbers: $sum</p>";
        ?>

        <!-- PHP Browser Detection -->
        <?php
        $browser = $_SERVER['HTTP_USER_AGENT'];
        echo "<p>Browser: $browser</p>";
        ?>

    </div>

    <!-- Universal Footer with File Modification Time -->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <?php
            $filename = basename(__FILE__);
            $lastModified = filemtime(__FILE__);
            echo "<p>Last modified: " . date("F d Y H:i:s.", $lastModified) . " (File: $filename)</p>";
            ?>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>

     
        </div>
    </div>
    <?php include 'footer.php'; ?>  
        