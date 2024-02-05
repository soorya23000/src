<?php
$title = "Exercise 4: Control flow and loops-Soorya Rasandi";
include 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="container mt-5">
     <h4>4.2 If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age,
             decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form
             to get user input).</h4>

        <div class="mb-4">
                <form method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="number" class="form-control" id="age" name="age" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Check Eligibility</button>
                </form>

                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $name = isset($_POST['name']) ? $_POST['name'] : '';
                    $age = isset($_POST['age']) ? $_POST['age'] : '';

                    if ($age >= 18) {
                        echo "<p>$name, you are eligible for voting.</p>";
                    } else {
                        echo "<p>$name you are not eligible for voting.You must be at least 18 years old to vote</p>";
                    }
                }
                ?>
            </div>


        <h4>4.3 Switch Case: Write a PHP script that gets the current month and prints one of the
            following responses, depending on whether it's August or not:</h4>

            <div class="mb-4">
           
            <?php
            $currentMonth = date("F");
            switch ($currentMonth) {
                case 'August':
                    echo "<p>It's August, so it's still holiday.</p>";
                    break;
                default:
                    echo "<p>Not August, this is $currentMonth so I don't have any holidays.</p>";
            }
            ?>
        </div>

       
        <div class="mb-4">



           

    <h4>4.4 For Loop: Write a PHP script that will print the multiplication table of a number
        (n, use form to get user input).</h4>

    <form method="POST">
        <div class="form-group">
            <label for="numberForTable">Enter a number for the multiplication table:</label>
            <input type="number" class="form-control" id="numberForTable" name="numberForTable" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate Table</button>
    </form>


    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numberForTable = isset($_POST['numberForTable']) ? (int)$_POST['numberForTable'] : 0;
        for ($i = 1; $i <= 10; $i++) {
            $result = $numberForTable * $i;
            echo "<p>$numberForTable x $i = $result</p>";
        }
    }
    ?>
</div>


    <div class="mb-4">
   <h4>4.5 While Loop: Write a PHP script that will print all the numbers from 1 to n.
       (use form to get user input)</h4>

        <form method="POST">
            <div class="form-group">
                <label for="nForWhileLoop">Enter a number (n) to print numbers from 1 to n:</label>
                <input type="number" class="form-control" id="nForWhileLoop" name="nForWhileLoop" required>
            </div>
                    <button type="submit" class="btn btn-primary">Print Numbers</button>
                </form>


                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $nForWhileLoop = isset($_POST['nForWhileLoop']) ? $_POST['nForWhileLoop'] : '';
                    $counter = 1;
                    while ($counter <= $nForWhileLoop) {
                        echo "<p>$counter</p>";
                        $counter++;
                    }
                }
                ?>
            </div>

            <div class="mb-4">
    <h4>4.6 Foreach Loop: Write a PHP script that will print all the elements of an array.
        $myarray=("HTML", "CSS", "PHP", "JavaScript").</h4>

                <?php
                $arrayExample = array("HTML", "CSS", "PHP", "JavaScript");
                foreach ($arrayExample as $element) {
                    echo "<p>$element</p>";
                }
                ?>

            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>