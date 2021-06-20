<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $query = "SELECT * from users where id=$from";
    $result = mysqli_query($conn,$query);
    $sql1 = mysqli_fetch_array($result); // returns array or output of user from which the amount is to be transferred.

    $query = "SELECT * from users where id=$to";
    $result = mysqli_query($conn,$query);
    $sql2 = mysqli_fetch_array($result);


    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }
  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    
    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }

    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $query = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$query);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $query = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$query);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $query = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $result=mysqli_query($conn,$query);

                if($result){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>TSF Bank - Customer Detail</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <style type="text/css">
	    button:hover{
			transform: scale(1.1);
        }
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Roboto:wght@300&display=swap');
    </style>
</head>

<body>
 
<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4">Transaction</h2>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $query = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$query);
                if(!$result)
                {
                    echo "Error : ".$query."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                <tr style="color : white;" class="table-dark">
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                    <th scope="col" class="text-center py-2">Operation</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                    <td><a class="brand-text" href="userhistory.php?name= <?php echo $rows['name'] ;?>"> <button type="button" class="btn btn-outline-dark btn">View Transaction History</button></a></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label>Transfer To:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $query = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$query);
                if(!$result)
                {
                    echo "Error ".$query."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn btn-outline-dark btn mt-3" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
        </form>
            </div>

<!-- Footer -->
<footer class="text-center mt-5 py-2" id="footer">
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