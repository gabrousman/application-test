<?php
	$people = array(
	   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
	   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
	   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
	   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
	   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
	);
?>
<!doctype html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html>
<body>
<table>
	<?php
	$fullInfo	=	"";
	foreach ($people as $person) {
		
		$fullInfo	=	$person["first_name"]." ".$person["last_name"]." ".$person["email"];
	?>
	<tr>
		<td><?=$person["first_name"]?></td>
		<td><?=$person["last_name"]?></td>
		<td><?=$person["email"]?></td>
		<td><input type="button" name="" value="Show" onclick="alert('<?=$fullInfo?>');"></td>
	</tr>
	<?php
	}
	?>
</table>
</body>
</html>
