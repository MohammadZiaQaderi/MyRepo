<!DOCTYPE html>
<html lang="en">
<head>
  <title>user details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container " mt-3>
  <h2>User Details</h2>
  <p></p>            
  <table class="table">
    <thead>
      <tr>
        <th>User Name</th>
        <th>Mobile Number</th>
        <th>Email</th>
        <th>Date Of Birth</th>
        <th>Graduation</th>
        <th>Year of passing</th>
        <th>Present Address</th>
        <th>Permanent Address</th>
      </tr>
    </thead>
    <tbody>
     <?php

        $servername = "localhost";
        $databaseUsername = "root";
        $databasePassword  = "";
        $dbname = "AddmisionEnquiry";

        // Create connection
        $conn = new mysqli($servername, $databaseUsername, $databasePassword , $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM AddmisionEnquiry";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"]. "</td> <td> " . $row["mobile"]. "</td><td>" . $row["email"] . " </td> <td>" . $row["date_of_birth"] . "</td><td>" . $row["graduation"] . "</td><td>" . $row["year_of_passing"] . "</td><td>" . $row["present_address"] . "</td><td>" . $row["permanent_address"] . "</td></tr>";
          }
         
        } else {
          echo "0 results";
        }
        $conn->close();        

     ?>
    </tbody>
  </table>

    <div class="w-50 mx-auto">
        <a for="link" href="index.php" class="form-label"><h1>submit Another form</h1></a>
    </div>   
  </div>
</body>
</html>
