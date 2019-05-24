<?php 

    /*
    !---------------------------------
    ! data validation
    !---------------------------------
    */
    function validation($data)
    {
      $data = htmlspecialchars($data);
      $data = stripcslashes($data);
      $data = trim($data);
      return $data;
  }

    /*
    !---------------------------------
    ! base url
    !---------------------------------
    */
    function base_url()
    {
        $base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url .= "://". @$_SERVER['HTTP_HOST'];
        $base_url .=     str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
        // echo rtrim($base_url,'/'); die;
        return $base_url;
    }

	/*------------------------------------------------
    !dynamic page title
    !-------------------------------------------------
    */
    function dynamicPageTitle()
    {
    	$path_array = $_SERVER['PHP_SELF'];
        //return $path_array;
    	$explode = explode('/', $path_array);
    	//echo '<pre>';
    	//print_r($_SERVER); die;
        unset($explode[0]); //delete empty array value

        $path_array = $explode;
        if (count($explode) == 2 ) {
        	if ($path_array[2] == 'index.php') {
        		return "Home | ";
        	} else {
        		$string = $path_array[2];
        		$str_replace = str_replace('.php', '', $string);
        		$path = ucfirst($str_replace);

        		if (strpos($path, '_') !== false) {
        			$string = explode('_',$path);
        			$path = '';
        			for ($i = 0; $i <count($string) ; $i++) {
        				if ($i == count($string) - 1) {
        					$path .= ucfirst($string[$i])." ";
        				} else {
        					$path .= ucfirst($string[$i])." | ";
        				}
        			}
        			return $path." | ";
        		}else{
        			return ucfirst($str_replace)." | ";
        		}
        	}
        }elseif(count($explode)  == 3){
        	if ($path_array[3] == 'index.php') {
        		return "Admin Dashboard";
        	} else {
        		$string = $path_array[3];
        		$str_replace = str_replace('.php', '', $string);
        		$path = ucfirst($str_replace);

        		if (strpos($path, '_') !== false) {
        			$string = explode('_',$path);
        			$path = '';
        			for ($i = 0; $i <count($string) ; $i++) {
        				if ($i == count($string) - 1) {
        					$path .= ucfirst($string[$i])." ";
        				} else {
        					$path .= ucfirst($string[$i])." | ";
        				}
        			}
        			return $path." | ";
        		}else{
        			return ucfirst($str_replace)." | "."Admin";
        		}
        	}
        }
    }

    // total cart
    function totalCart()
    {
        global $link;
        $total = 0;
        if(isset($_SESSION['customerlogin'])){
            $sql  = "select c.id from carts c where c.customer_id=:customer_id and c.cart_status=:cart_status";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':customer_id',$_SESSION['customerid']);
            $stmt->bindValue(':cart_status','pending');
            $stmt->execute();
            $products = $stmt->fetchAll(PDO::FETCH_OBJ);
            $total =  $stmt->rowCount();                         
        }
        return $total;
    }

    // total cart balance tk
    function totalcartBalance()
    {
        $link = connection();
        $total = 0; 
        if(isset($_SESSION['product_id'])) {
            $sql  = "select c.*,p.product_name,p.sale_price,p.fea_image1 from carts c join products p on p.id = c.product_id where c.customer_id=:customer_id and c.cart_status=:cart_status";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':customer_id',$_SESSION['customerid']);
            $stmt->bindValue(':cart_status','pending');
            $stmt->execute();
            $products = $stmt->fetchAll(PDO::FETCH_OBJ);
            $total = 0;
            foreach ($products as $product) {

                $total += $product->quantity * $product->sale_price;
            }
        }

        return $total; 
    }   

    // total cart balance tk
    function totalOrderCustomer()
    {
        $link = connection();
        $total = 0; 
        $sql  = "select count(id) as total_order from orders where customer_id=:customer_id";
        if(isset($_SESSION['customerid']))
        {
            $customer_id = $_SESSION['customerid'];
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':customer_id',$customer_id);
            $stmt->execute();
            $product = $stmt->fetch(PDO::FETCH_OBJ);

            if ($stmt->rowCount() > 0) {
                $total =  $product->total_order;
            }
        }
        return $total;
    }  

    //total order 
    function totalPage()
    {
        global $link;
        if (empty($date) && empty($status)) {
            $sql  = "select count(id) as total_page from pages";
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_OBJ);
            return  $data->total_page;
        }

    } 


 //total order 
    function totalRegistration($status='')
    {
        global $link;
        $sql  = "select id from registration where status=:status";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(":status",$status);
        $stmt->execute();
        return $stmt->rowCount();
        
    } 

    

    /*
    !-------------------------------------
    ! Send message to user
    !-------------------------------------
    */
    function sendMessage($mobile,$message)
    {
        $url   = "http://sms.greenweb.com.bd/api.php";
        $data = array(
            'to'        => $mobile,
            'message'   => $message,
            'token'     => "96979d14b9e508729a99812648c1fe13"
        ); // Add parameters in key value
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch); //execute statement to send sms
        

    }

    /*
    !-------------------------------------
    ! String Formatting
    ! Remove &lt; and &gt;
    !-------------------------------------
    */
    function stringFormat($value)
    {
        $value = str_replace("&lt;", "<", $value);
        $value = str_replace("&gt;", ">", $value);
        $value = htmlspecialchars_decode($value);
        return $value;
    }
    ?>