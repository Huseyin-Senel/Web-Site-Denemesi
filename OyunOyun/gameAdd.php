<?php
include_once 'database.php';

$isim="";
$aciklama="";
$fiyat="";
$resim1="";
$resim2="";
$resim3="";
$resim4="";
$resim5="";
$resim6="";
$resim7="";
$resim8="";
$resim9="";
$resim10="";


function getpost(){
	$posts=array();
	$posts[0]=$_POST['isim'];
	$posts[1]=$_POST['aciklama'];
	$posts[2]=$_POST['fiyat'];
	$posts[3]=$_FILES['resim1']['name'];
	$posts[4]=$_FILES['resim2']['name'];
	$posts[5]=$_FILES['resim3']['name'];
	$posts[6]=$_FILES['resim4']['name'];
	$posts[7]=$_FILES['resim5']['name'];
	$posts[8]=$_FILES['resim6']['name'];
	$posts[9]=$_FILES['resim7']['name'];
	$posts[10]=$_FILES['resim8']['name'];
	$posts[11]=$_FILES['resim9']['name'];
	$posts[12]=$_FILES['resim10']['name'];

	return $posts;
}

if(isset($_POST['search']))
{
	$data = getpost();
	$SearchQuery = "SELECT * FROM games WHERE isim = $data[0]";
	$SearchResult = mysqli_query($link,$SearchQuery);

	if($SearchResult)
	{
		if(mysqli_num_rows($SearchResult))
		{
			while($row=mysqli_fetch_array($SearchResult))
			{
				$isim=$row['isim'];
				$aciklama=$row['aciklama'];
				$fiyat=$row['fiyat'];
				$resim1=$row['resim1'];
				$resim2=$row['resim2'];
				$resim3=$row['resim3'];
				$resim4=$row['resim4'];
				$resim5=$row['resim5'];
				$resim6=$row['resim6'];
				$resim7=$row['resim7'];
				$resim8=$row['resim8'];
				$resim9=$row['resim9'];
				$resim10=$row['resim10'];
			}
		}
		else
		{
			echo 'No data for this id';
		}
	}
	else
	{
		echo 'Result ERROR';
	}
}


if(isset($_POST['insert']))
{
	$data = getpost();
	$InsertQuery = "INSERT INTO games (isim, aciklama, fiyat, resim1, resim2, resim3, resim4, resim5, resim6, resim7, resim8, resim9, resim10) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]','$data[12]')";
	$InsertResult = mysqli_query($link,$InsertQuery);

	if($InsertResult)
	{
		move_uploaded_file($_FILES['resim1']['tmp_name'], "$data[3]");
		move_uploaded_file($_FILES['resim2']['tmp_name'], "$data[4]");
		move_uploaded_file($_FILES['resim3']['tmp_name'], "$data[5]");
		move_uploaded_file($_FILES['resim4']['tmp_name'], "$data[6]");
		move_uploaded_file($_FILES['resim5']['tmp_name'], "$data[7]");
		move_uploaded_file($_FILES['resim6']['tmp_name'], "$data[8]");
		move_uploaded_file($_FILES['resim7']['tmp_name'], "$data[9]");
		move_uploaded_file($_FILES['resim8']['tmp_name'], "$data[10]");
		move_uploaded_file($_FILES['resim9']['tmp_name'], "$data[11]");
		move_uploaded_file($_FILES['resim10']['tmp_name'], "$data[12]");
	}
    
}


if(isset($_POST['delete']))
{
	$data = getpost();
	$DeleteQuery = "DELETE FROM games WHERE isim = $data[0]";
	$DeleteResult = mysqli_query($link,$DeleteQuery);
}



if(isset($_POST['update']))
{
	$data = getpost();
	$UpdateQuery = "UPDATE games SET isim='$data[0]', aciklama ='$data[1]', fiyat='$data[2]', resim1='$data[3]', resim2='$data[4]', resim3='$data[5]', resim4='$data[6]', resim5='$data[7]', resim6='$data[8]', resim7='$data[9]', resim8='$data[10]', resim9='$data[11]', resim10='$data[12]' WHERE isim = $data[0]";
	$UpdateResult = mysqli_query($link,$UpdateQuery);
}

?>




<html>
<head>
	<title>php insert/update/delete</title>
</head>

<body>

	<form method="post" action="gameadd.php" id="form1" enctype="multipart/form-data">
		<div class="box">
			<input type="text" name="isim" placeholder="İsim" value="<?php echo $isim; ?>" class="input" maxlength="50" ><br>
			<input type="text" name="aciklama" placeholder="Açıklama" value="<?php echo $aciklama; ?>" class="input" maxlength="2000" ><br>
			<input type="text" name="fiyat" placeholder="Fiyat" value="<?php echo $fiyat; ?>" class="input" ><br>
			<input type="file" name="resim1" id="resim1"><br>
			<input type="file" name="resim2" id="resim2"><br>
			<input type="file" name="resim3" id="resim3"><br>
			<input type="file" name="resim4" id="resim4"><br>
			<input type="file" name="resim5" id="resim5"><br>
			<input type="file" name="resim6" id="resim6"><br>
			<input type="file" name="resim7" id="resim7"><br>
			<input type="file" name="resim8" id="resim8"><br>
			<input type="file" name="resim9" id="resim9"><br>
			<input type="file" name="resim10" id="resim10"><br>
			<div>
				<button type="submit" name="insert" class="button">ADD</button>
				<button type="submit" name="update" class="button">UPDATE</button>
				<button type="submit" name="delete" class="button">DELETE</button>
				<button type="submit" name="search" class="button">SEARCH</button>
			</div>
		</div>
	</form>

</body>

</html>