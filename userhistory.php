<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"crossorigin="anonymous">
    
    <title>TSF Bank - Customer's Transaction History</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Roboto:wght@300&display=swap');
    </style>
</head>

<body>

<?php
  include 'navbar.php';
?>

	<div class="container">
        <h3 class="text-center pt-4">Customer's Transaction History</h3>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : white;" class="table-dark">
            <tr>
                <th class="text-center">Transaction ID</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Status</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'config.php';

            //print_r($_GET);
            $sid1 = $_GET["name"];
            $sid = trim($sid1);
            $query = "SELECT * FROM `transaction` where sender='$sid' OR receiver='$sid' ";
            $result = mysqli_query($conn,$query);
            if(!$result)
            {
                echo "Error : ".$query."<br>".mysqli_error($conn);
            }
            while($rows = mysqli_fetch_assoc($result))
            { 
        ?>
                <?php if($rows['sender'] == $sid){
                     $status = 'Debit';
                     //echo "in if loop";
                 }
                 else{
                    $status = 'Credit';
                     //echo "in else loop";
                 }
                ?>
                <tr>
                <td class="py-2"><?php echo $rows['sno']; ?></td>
                <td class="py-2"><?php echo $rows['sender']; ?></td>
                <td class="py-2"><?php echo $rows['receiver']; ?></td>
                <td class="py-2"><?php echo $rows['balance']; ?></td>
                <td class="py-2"><?php echo $status; ?> </td>
                <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                </tr>

        <?php  
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

<!-- Footer -->
<footer class="footer text-center mt-5 py-2 " id="footer" style="position:absolute; bottom:0; width:100%;">
    <h2 class="heading" style="padding-top:10px; margin:10px;">Contact</h2>
    <p>Made by <b><a href='https://www.linkedin.com/in/roshan-desale/'>Roshan Desale</a></b> <br>Web Developer Intern at GRIP @TSF
      <br class="text-copy">
      Copyright &copy; 2021 All rights reserved
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>

</body>
</html>