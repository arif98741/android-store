<?php 
    include 'config/helper.php';
    include 'config/config.php';
    $link   = connection();
    if (isset($_GET['action']) && $_GET['action'] == 'getsubcategories') {
    	$category = validation($_GET['category']);
    	$stmt = $link->prepare("select sc.id,sc.subcategory_name from category c join subcategory sc on sc.category_id = c.id where c.id = :id order by sc.subcategory_name asc");
    	$stmt->bindParam(":id",$category);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_OBJ);
        $data = '<option value="" class="text-muted">Select a category</option>';

        foreach ($categories as $category) {
        	$data .= '<option value="'.$category->id.'" class="text-muted">'.$category->subcategory_name.'</option>';
        }
        echo $data;
    }
    else{
    	return false;
    }
?>