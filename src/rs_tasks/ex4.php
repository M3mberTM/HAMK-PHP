<?php
$title = "PHP Exercise 4";
$description = "A simple PHP exercise for HAMK";
$keywords = "PHP, exercise";

include 'header.php' ?>
    <!--Content-->
    <div class="row ">
        <h3>1. Create a file (ex4.php): Create a file named ex4.php in your exercise folder. Ensure that it uses the
            same
            layout as your other pages and that your navigation bar includes a link to this exercise.</h3>
    </div>

<?php
$name = $age = '';
?>

    <div class="row">
        <h3>2. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if
            he/she is eligible for voting. (18 or more than 18 years is eligible for voting).</h3>
        <form action="ex4-form.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                       placeholder="Your name" name="name">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" placeholder="Age" name="age">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="row">
        <h3>3. Switch Case: Write a PHP script that gets the current month and prints one of the following responses,
            depending on whether it's August or not:

            It's August, so it's still holiday.
            Not August, this is Month-name so I don't have any holidays</h3>
        <?php
        $month = date("F");
        if ($month == 'August') {
            echo 'It\'s August, so it\'s still holiday.';
        } else {
            echo "Not August, this is {$month} so I don't have any holidays";
        }
        ?>
    </div>

    <div class="row">
        <h3>4. For Loop: Write a PHP script that will print the multiplication table of a number (n).</h3>
        <?php
        $n = 0;
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="number">Give number:</label>
                <input type="number" class="form-control" id="number" placeholder="Number" name="n">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <table class="table table-dark">
            <thead>
            <tr>
                <th>#</th>
                <?php
                if (!empty($_POST["n"])){
                    $n = $_POST["n"];
                }

                for ($i = 1; $i <= $n; $i++) {
                    echo "<th>" . $i . "</th>";
                }
                echo "</tr></thead><tbody>";

                for ($i = 1; $i <= $n; $i++) {
                    echo "<tr> <th>" . $i. "</th>";
                    for ($j = 1; $j <= $n; $j++) {
                       echo "<td>" . ($i*$j). "</td>";
                    }
                    echo "</tr>";
                }
                echo "</tbody></table>";
                ?>


    </div>


<div class="row">
    <h3>5. While Loop: Write a PHP script that will print all the numbers from 1 to n.</h3>
    <?php
    $num = 0;
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="while_num">Give number:</label>
            <input type="number" class="form-control" id="while_num" placeholder="Number" name="num">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    $i = 0;
    if (!empty($_POST["num"])){
        $num = $_POST["num"];
    }
    $final_result = "";
    while ($i < $num){
        $final_result .= "{$i},";
        $i++;
    }
    ?>
    <p style="word-wrap: break-word"><?php echo $final_result?></p>
</div>

<div class="row">

    <h3>Foreach Loop: Write a PHP script that will print all the elements of an array.</h3>
    <?php
    $arr = array("Hello", " ", "World", "!");

    foreach ($arr as $value) {
        echo $value;
    }
    ?>
</div>


<?php include 'footer.php'; ?>