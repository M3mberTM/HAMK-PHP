<?php
$title = "PHP Exercise 3";
$description = "A simple PHP exercise for HAMK";
$keywords = "PHP, exercise";

include 'header.php' ?>
    <div class="row">
        <h3>1. Create a file (ex3.php): Create a file named ex3.php in your exercise folder. Ensure that it uses the
            same
            layout as your other pages and that your navigation bar includes a link to this exercise.</h3>
    </div>
    <div class="row">
        <h3>
            2. Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo
            statement
            to
            print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.</h3>

        <form action="ex3-form.php" method="post">
            <div class="form-group">
                <label for="inputFName">First name</label>
                <input type="text" class="form-control" id="inputFName" aria-describedby="emailHelp"
                       placeholder="First name" name="fName">
            </div>
            <div class="form-group">
                <label for="inputLName">Last name</label>
                <input type="text" class="form-control" id="inputLName" placeholder="Last name" name="lName">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="row">
        <h3>Bootstrap Styling: Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your
            <head> tag.
        </h3>
    </div>
    <div class="row">
        <h3>HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a
            table in Exercise 1. If you wish, you can use the same table.</h3>

        <?php # Copied the table from assignment 1
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;
        ?>
        <table class="table table-dark">
            <thead>
            <tr>
                <th>S.n.</th>
                <th>Name</th>
                <th>Grade</th>
            </tr>
            </thead>
            <tbody>
            <tr>

                <td>1</td>
                <td>John</td>
                <td><?php echo $g1 ?></td>
            </tr>
            <tr>

                <td>2</td>
                <td>Alice</td>
                <td><?php echo $g2 ?></td>
            </tr>
            <tr>

                <td>3</td>
                <td>Bob</td>
                <td><?php echo $g3 ?></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="row">
        <h3>String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join
            them together and print the length of the string.</h3>

        <?php
        $str1 = "Hello";
        $str2 = "World";
        $str3 = $str1 . $str2;
        echo strlen($str3);
        ?>
    </div>

    <div class="row">
        <h3>Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers
            and an echo statement to output your answer.</h3>

        <?php
        $num1 = 298;
        $num2 = 234;
        $num3 = 46;

        echo($num3 + $num2 + $num1);
        ?>
    </div>

    <div class="row">
        <h3>Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use
            predefined variables: $_SERVER)</h3>
        <?php
        $browserAgent = $_SERVER['HTTP_USER_AGENT'];
        echo $browserAgent;
        ?>
    </div>

    <div class="row">
        <h3>File Modification Time: Write a PHP script in the footer section of your universal footer to display the
            last modification time of a file. Hint: Use predefined variable $_SERVER, basename function to get the
            filename , filetime function to get the last modified time & date function to print the date and time</h3>
    </div>
<?php include 'footer.php'; ?>