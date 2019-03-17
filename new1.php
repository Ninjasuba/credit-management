<?php
$db_host = 'localhost'; 
$db_user = 'id6924673_root';
$db_pass = '12345678'; 
$db_name = 'id6924673_student'; 

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM data';
$query = mysqli_query($conn, $sql);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body { 
                        background-image:url(http://pofc.info/wp-content/uploads/2016/02/light-wood-grain-background-and-cherry-wood-texture-brown-wooden-pattern-wooden-floor-texture-wooden-17.jpg);	
                        font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		
		.data-table thead th {
			background-color: #A2511B;
			color: #FFFFFF;
			border-color: #AD521B !important;
			text-transform: uppercase;
		}

		
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
                button {
                                background-color:#A2511B ;
                                 border: none;
                                 color: white;
                                 padding: 15px 32px;
                                text-align: center;
                                 text-decoration: none;
                                    display: inline-block;
                                font-size: 16px;
                                 margin-left:30%;
                                cursor: pointer;
                                 
                      }
	</style>
</head>
<body>
    <h1><strong>USER TABLE</strong></h1>
	<table class="data-table">
		<caption class="title">List of people and their corresponding credits</caption>
		<thead>
			<tr>
                           
				<th>ID</th>
				<th>Name</th>
				<th>D.O.B</th>
				<th>Nationality</th>
				<th>Email</th>
                                <th>Credit</th>
                                
			</tr>
		</thead>
		<tbody>
		<?php
		
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					
					<td>'.$row['ID'].'</td>
					<td>'.$row['Name'].'</td>
					<td>' .$row['D.O.B'].'</td>
                                        <td>' .$row['Nationality'].'</td>
                                        <td>' .$row['Email'].'</td>  
                                        <td>' .$row['Credit'].'</td>
                                                 
                
              <tr>';}
                 ?>
                   
                    
		</tbody>
		</table>
        <div>
            <h1><strong>VIEW USER PROFILE</strong></h1>
        <br>
        <a href="one.html"><button style="margin-left:300px " type="button">1000</button></a>
        <a href="two.html"><button style="margin-left:200px " type="button">1001</button></a>
        <a href="three.html"><button style="margin-left:200px " type="button">1002</button></a>
        <br>
        <br>
        <a href="four.html"><button style="margin-left:450px " type="button">1003</button></a>
        <a href="five.html"><button style="margin-left:200px " type="button">1004</button></a>
        <br>
        <br>
        <a href="six.html"><button style="margin-left:300px " type="button">1005</button></a>
        <a href="seven.html"><button style="margin-left:200px " type="button">1006</button></a>
        <a href="eight.html"><button style="margin-left:200px " type="button">1007</button></a>
        <br>
        <br>
        <a href="nine.html"><button style="margin-left:450px " type="button">1008</button></a>
        <a href="ten.html"><button style="margin-left:200px " type="button">1009</button></a>
        <br>
        </div>
</body>
</html>