<?php
	


if($_POST['action'] == "AddProduct")
{
	// echo "<pre>"; print_r($_POST); echo "</pre>";

	// echo "<pre>"; print_r($_FILES); echo "</pre>";

	$unrelated_info = array("action","product_id");

	// $file_input = array("product_image","brochure","image_1");

	$column_data = "";	

	foreach ($_POST as $key => $value) {

		// echo $key." - ".$value."<br>";

		if(!in_array($key, $unrelated_info) && !empty($value))
		{
			if($column_data != "")
			{
				$column_data .= ", ";
			}

			$data = $mysqli -> real_escape_string($_POST[$key]);
			$column_data .= $key." = '".$data."'";
		}
	}

	//store file & images
	foreach ($_FILES as $key => $value) {
		if(in_array($key, array("brochure")))
		{
			$target_dir = "./brochure/";
			$target_file = $target_dir.basename($_FILES[$key]["name"]);
		}
		elseif(in_array($key, array("product_image","image_1")))
		{
			$target_dir = "./images/";
			$target_file = $target_dir.basename($_FILES[$key]["name"]);
		}

		if (move_uploaded_file($_FILES[$key]["tmp_name"], $target_file)) {
		    // echo "The file ". htmlspecialchars( basename( $_FILES[$key]["name"])). " has been uploaded.<br>";

			if($column_data != "")
			{
				$column_data .= ", ";
			}

		    $data = $mysqli -> real_escape_string(basename($_FILES[$key]["name"]));
			$column_data .= $key." = '".$data."'";

		} else {
		    // echo "Sorry, there was an error uploading your file.<br>";
		}
	}

	$query = "INSERT INTO products SET ".$column_data;

	// echo $query;

	// exit();

	if ($mysqli->query($query) === TRUE) {
	  header("Location: ./index.php?module=product_crud&message_type=1");		  
	} else {
	  header("Location: ./index.php?module=product_crud&message_type=2");	
	}
}

//edit product
if(isset($_GET['product_id']))
{
	$sql = "SELECT * FROM products WHERE product_id = ".$_GET['product_id'];
	$result = $mysqli -> query($sql);

	// Fetch  product info
	$product = $result -> fetch_array(MYSQLI_ASSOC);

	// Free result set
	$result -> free_result();

	// $mysqli -> close();

	// print_r($product);

	$body->assign("product", $product);
}
else{	

	$body->assign("open", $_GET['open']);
	$body->assign("message_type", $_GET['message_type']);
}

$body->assign("products", $products);

?>