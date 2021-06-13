<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Playball&family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image" href="https://img.icons8.com/color/2x/best_of_both_words.png">
    <style>
    *{
    	margin: 0;
    	padding: 0;
    	box-sizing: border-box;
    }
    
    body{
    	background-image: linear-gradient(135deg, rgba(142,45,226,0.6), rgba(74,0,224,0.6)) , url("https://images.unsplash.com/photo-1518458028785-8fbcd101ebb9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80");
    	height: 100vh;
    	background-size: cover;
    	background-position: center;
    	background-repeat: no-repeat;
    	background-attachment: fixed;
    }
    .nav{
    	display: flex;
    	padding: 5px 50px;
    	align-items: center;
    	justify-content: flex-end;
    	background: rgba(0, 0, 0, 1.0);
    	position: sticky;
    	top: 0;
    }
    
    heading{
    	margin-right: auto;
    	font-family: 'Playball', cursive;
    	color: white;
    	font-size: 32px;
    	text-shadow: 2px 2px 5px black;
    	border: 5px solid white;
    	padding: 5px 10px;
    	border-radius: 10px;
    	text-align: center;
    }
    li{
    	display: inline-block;
    }
    
    li a{
    	text-decoration: none;
    	color: white;
    	font-family: 'Open Sans', sans-serif;
    	margin-left: 70px;
    	transition: 0.5s;
    	font-size: 18px;
    	padding-bottom: 5px;
    }
    li a:hover{
    	color: #fbff00;
    }
    .current{
        border-bottom: 3px solid yellow;
    }
    p{
        background: rgba(0,0,0,0.4);
    }
    .title{
        color: white;
        font-family: 'Open Sans', sans-serif;
        text-align: center;
        margin: 50px;
        padding: 10px;
        font-size: 28px;
    }
    .tabcenter{
        display: flex;
        justify-content: center;
        padding-bottom: 200px;
    }
    
    table, th, td{
        border: 2px solid white;
        border-collapse: collapse;
        font-family: 'Open Sans', sans-serif;
        padding: 10px 25px;
        font-size:26px;
        background: rgba(0,0,0,0.8);
        color: white;
    }
    th{
       color: yellow;
    }
    
    </style>
</head>

<body>
    
    <div class="nav">
		<heading>ARMS Bank</heading>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="transfer.php">Transfer Money</a></li>
			<li><a href="transferhistory1.php" class="current">Transaction History</a></li>
			<li><a href="index.php#about">About us</a></li>
			<li><a href="index.php#contact">Contact</a></li>
		</ul>
	</div>


	<div class="container">
        <p class="title">Transfer History</p>
        
       
       <div class="tabcenter">
    <table>
            <tr>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
                
            </tr>
        <tbody>
            
        <?php

$servername = "localhost";
$username = "id16916636_arshad123";
$password = "}-muS2HKta0okWC/";
$database = "id16916636_arshad12";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
           
                </tr>
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>