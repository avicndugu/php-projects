<?php 
	$persons=["Shanley", "Carlos", "Arnold", "Cetrix"];
	$date=[30,19,21,24];
	// echo $output;

	$strings="This is a string";
	// echo $strings;
	define('USERT','Crazy goat');
	// echo USERT;
?>
<?php 
	$persons1=["Shanley", "Carlos", "Arnold", "Cetrix"];
	$date1=[30,19,21,24];
	// echo $output;

	$strings="This is a string";
	// echo $strings;
	define('USERT','Crazy goat');
	// echo USERT;
?>
<head>
	<style>
		table{
			font-size: 20px;
		}
		td{
			border:solid 1px #000;
		}
	</style>
</head>
<!-- First go at php and html creating tables -->
<table>
	<tr>
		<td><?php echo $persons[0] ?></td>
		<td><?php echo $date[0] ?></td>
	</tr>
	<tr>
		<td><?php echo $persons[1] ?></td>
		<td><?php echo $date[1] ?></td>
	</tr>
	<tr>
		<td><?php echo $persons[2] ?></td>
		<td><?php echo $date[2] ?></td>
	</tr>
	<tr>
		<td><?php echo $persons[3] ?></td>
		<td><?php echo $date[3] ?></td>
	</tr>
</table>
<!-- Second attempt using using html inside  -->
<table>
<?php echo "<td> $persons[0] </td>"	?>
<?php echo "<td> $date[0] </td>"	?>
<!-- another method -->
<?php echo "
<tr>
	<td> $persons[1] </td> 
	<td> $date[1] </td>
</tr>
<tr>
	<td> $persons[2] </td> 
	<td> $date[2] </td>
</tr>
<tr>
	<td> $persons[3] </td> 
	<td> $date[3] </td>
</tr>
"?>
</table>

<!-- Using loops in php -->
<table>
	<?php 
		for ($n=0;$n<=count($persons);$n++){
			// This is a test to ensure the loop is working.
			// echo 1;

			// Generate the table with rows and collumns.
			echo  
			"<tr>
				<td> $persons[$n] </td> 
				<td> $date[$n] </td>
			  </tr>";
		}
	 ?>
</table>
<!-- http://php.net/manual/en/faq.html.php -->
<!-- https://www.tutorialspoint.com/php/php_loop_types.htm    for loops -->
<!-- search:php for loop -->