<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>HCC First Timer</h3>
            </div>
            <div class="row">
<p>
                    <a href="create.php" class="btn btn-success">Create</a>
                </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>First Name</th>
<th>Initial</th>
<th>Surname</th>
<th>Email</th>
<!--<th>Marital Status</th>
<th>Gender</th>
<th>Age Group</th>
<th>Number of Children</th>
<th>Receive Message</th>
<th>Phone Number</th>
<th>Facebook Name</th>
<th>Twitter Handle</th>
<th>How you heard about us</th>
<th>What you look out for in a church?</th>
<th>What is Your First Impression of Our Church?</th>
<th>What you didn't about our church?</th>-->
<th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM firstTimer ORDER BY id DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['firstName'] . '</td>';
                            echo '<td>'. $row['middleInitial'] . '</td>';
                            echo '<td>'. $row['lastname'] . '</td>';

                            echo '<td>'. $row['emailAddress'] . '</td>';
                            /*echo '<td>'. $row['status'] . '</td>';

                            echo '<td>'. $row['gender'] . '</td>';
                            echo '<td>'. $row['ageGroup'] . '</td>';

                            echo '<td>'. $row['numberOfChildren'] . '</td>';
                            echo '<td>'. $row['beNotified'] . '</td>';
echo '<td>'. $row['phoneNumber'] . '</td>';
                            echo '<td>'. $row['facebookName'] . '</td>';
                            echo '<td>'. $row['twitterHandle'] . '</td>';
echo '<td>'. $row['howDidYouHear'] . '</td>';
                            echo '<td>'. $row['importantThing'] . '</td>';
                            echo '<td>'. $row['firstImpression'] . '</td>';
echo '<td>'. $row['dislike'] . '</td>';*/
echo '<td><a class="btn" href="read.php?id='.$row['id'].'">Read</a></td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>
