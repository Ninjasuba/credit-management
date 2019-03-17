<html>
<head>
    <title>Credit Transfer</title>
    <style>
        .snake{
            background-image: url(https://wallpaperplay.com/walls/full/1/c/7/71467.jpg);
        }
        #b1,#b2,#b3{
                                background-color:black;
                                 border: none;
                                 color: white;
                                 padding: 15px 15px;
                                text-align: center;
                                 text-decoration: none;
                                    display: inline-block;
                                font-size: 16px;
                                 
                                cursor: pointer;
                                 }
                                  .grid{
                  background-color: RGBA(0,2,0,0.36);
                  margin: 30px,50px,30px,50px;
                  border:2px solid black;
                                  }
       
              .popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.popup .popuptext {
  visibility: hidden;
  width: 260px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

    </style>
</head>
<body class="snake">
<center>
    <form action="suma.php" method="post">
        <br>
        <br>
        <br>
       <div class="grid"> 
    <h1 style="color:green">Credit Transfer</h1>
    <label>User</label>
    <input type="text" name="firstid" value="<?php echo isset($_POST['firstid']) ? $_POST['firstid'] : '' ?>">
    
    <label>Selected User</label>
    <input type="text" name="secondid" value="<?php echo isset($_POST['secondid']) ? $_POST['secondid'] : '' ?>"><br>
    <br>
    <input id="b1" type="submit" name="submit" value="Check">
    <br>
    <br>
     


<?php
$servername = "localhost";
$username = "id6924673_root";
$password = "12345678";
$dbname = "id6924673_student";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST["submit"])){
$sql1 = "SELECT Credit FROM data where ID='{$_POST['firstid']}' ";
$result1 = $conn->query($sql1);

$sql2 = "SELECT Credit FROM data where ID='{$_POST['secondid']}' ";
$result2 = $conn->query($sql2);

 if ($result1->num_rows > 0) {
   while($row = $result1->fetch_assoc()) {
    echo "Credit" . $row["Credit"].  "<br>";
}
 while($row = $result2->fetch_assoc()) {
    echo "Credit" . $row["Credit"].  "<br>";
}

   } else {
echo "0 results";
}
}
if(isset($_POST["acct"])){
    $sql1 = "SELECT Credit FROM data where ID='{$_POST['firstid']}' ";
$result1 = $conn->query($sql1);

$sql2 = "SELECT Credit FROM data where ID='{$_POST['secondid']}' ";
$result2 = $conn->query($sql2);
$entered=$_POST['trans'];

 if ($result1->num_rows > 0) {
   while($row = $result1->fetch_assoc()) {
       $cred1=$row["Credit"]-$entered;
    echo "Credit" . $cred1.  "<br>";
}
 while($row = $result2->fetch_assoc()) {
     $cred2=$row["Credit"]+$entered;
    echo "Credit" .$cred2.  "<br>";
    }} else {
echo "0 results";
}
}
if(isset($_POST["update"])){
    $sql1 = "SELECT Credit FROM data where ID='{$_POST['firstid']}' ";
$result1 = $conn->query($sql1);

$sql2 = "SELECT Credit FROM data where ID='{$_POST['secondid']}' ";
$result2 = $conn->query($sql2);
$entered=$_POST['trans'];

 if ($result1->num_rows > 0) {
   while($row = $result1->fetch_assoc()) {
       $cred1=$row["Credit"]-$entered;
       $sql3 = "UPDATE data ". "SET Credit = $cred1 ". 
               "WHERE ID = '{$_POST['firstid']}'" ;
$result3 = $conn->query($sql3);
    
 }
 while($row = $result2->fetch_assoc()) {
     $cred2=$row["Credit"]+$entered;
     $sql4 = "UPDATE data ". "SET Credit = $cred2 ". 
               "WHERE ID = '{$_POST['secondid']}'" ;
$result4 = $conn->query($sql4);}
    }
    else {
    echo "0 results";}
$sql5="INSERT INTO record(User1,User2,Trans,acct1,acct2) VALUES('$_POST[firstid]','$_POST[secondid]','$_POST[trans]',$cred1,$cred2)";
     $result5 = $conn->query($sql5);        
}
?>

<h2>Transfer Credits</h2>
    <br>
    <input type="text" name="trans" value="<?php echo isset($_POST['trans']) ? $_POST['trans'] : '' ?>">
    <input id="b2" type="submit" name="acct" value="Transfer"><br>
    <br>
    <input id="b3" type="submit" name="update" value="Update" onClick="conf()">
    <br>
    <h3>Instruction to transfer credits</h3>
    <h3 class="popup" onclick="myFunction()" style="color:green;">Click me!
        <span class="popuptext" id="myPopup">Step 1:Enter your user id and the recepient's user id<br>Step 2:Check available credits<br>Step 3: Enter the number of credits to be transfer<br>Step 4: Once the transfer button is clicked you can know the credits after transformation<br>Step 4:Click the update button to complete your transaction.</span>
                    </h3>
    
 <script language="javascript">

function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
function conf()
{
var con=confirm("Your transaction has been completed Successfully");
}
</script>
    </form>
</center>
</div>
</body>
</html>
