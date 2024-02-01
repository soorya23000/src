<?php include 'header.php'; ?>
<div class="container">
    <div class="row">


<body>


    <div class="container mt-5">

        <!-- If-Else: Voting Eligibility -->
        <div class="mb-4">
            <h3>If-Else: Voting Eligibility</h3>
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
                $name = $_POST['name'];
                $age = $_POST['age'];

                if ($age >= 18) {
                    echo "<p>$name, you are eligible for voting.</p>";
                } else {
                    echo "<p>$name, you are not eligible for voting.</p>";
                }
            }
            ?>
        </div>

        <!-- Switch Case: Check if it's August -->
        <div class="mb-4">
            <h3>Switch Case: Check if it's August</h3>
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

        <!-- For Loop: Multiplication Table -->
        <div class="mb-4">
            <h3>For Loop: Multiplication Table</h3>
            <?php
            $numberForTable = 5; // Change this to the desired number
            for ($i = 1; $i <= 10; $i++) {
                $result = $numberForTable * $i;
                echo "<p>$numberForTable x $i = $result</p>";
            }
            ?>
        </div>

        <!-- While Loop: Print numbers from 1 to n -->
        <div class="mb-4">
            <h3>While Loop: Print Numbers from 1 to n</h3>
            <?php
            $n = 7; // Change this to the desired number
            $counter = 1;
            while ($counter <= $n) {
                echo "<p>$counter</p>";
                $counter++;
            }
            ?>
        </div>

        <!-- Foreach Loop: Print Elements of an Array -->
        <div class="mb-4">
            <h3>Foreach Loop: Print Elements of an Array</h3>
            <?php
            $arrayExample = array("Apple", "Banana", "Orange", "Grapes");
            foreach ($arrayExample as $element) {
                echo "<p>$element</p>";
            }
            ?>
        </div>

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
