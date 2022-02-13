<?php

class ajax_admin extends Controller {

	private $con;
	private $item_per_page = 16;

	function get_all_category(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['page']) && is_numeric($_POST['page']) && $_POST['page'] != ""){
			$page = $_POST['page'];
			$connection = $this->get_connection();
			$res = $connection->query("SELECT * FROM `category`");
			if ($res != null && $res->num_rows > 0){
				$all_category_number = $res->num_rows;
				$all_pages = ceil($all_category_number/$this->item_per_page);
				if ($page <= $all_pages){
					echo $all_pages."*";
					$start = ($page-1)*$this->item_per_page;

					$res2 = $connection->query("SELECT * FROM `category` LIMIT ".$start." , ".$this->item_per_page);
					if ($res2 != null && $res2->num_rows > 0){
						foreach ($res2 as $val){
							$name = $val['name'];
							$id = $val['id'];
							$res3 = $connection->query("SELECT COUNT(*) FROM `question` WHERE `category`='$id'");
							if ($res3 != null && $res3->num_rows > 0){
								$result = $res3->fetch_assoc();
								$numbers = $result['COUNT(*)'];
							}else{
								$numbers = 0;
							}

							echo "<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center all_category_item\">
									<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center all_category_item_div\">
									<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;\">
									<p class=\"name_for_category\">$name</p>
									</div>
									<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center line\"></div>
									<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center div_number_category\">
									<p class=\"number_for_category\">تعداد سوالات : <span class=\"user_price\">$numbers</span></p>
									</div>
									<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center section_category\">
									<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right\" style=\"height: 50px;\">
									<img src=\"static/images/edit.png\" alt=\"NOT FOUND\" class=\"edit_category_icon\" href=\"$id\">
									</div>
									<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left\" style=\"height: 50px;\">
									<img src=\"static/images/delete.png\" alt=\"NOT FOUND\" class=\"delete_category_icon\" href=\"$id\">
									</div>
									</div>
									</div>
									</div>";
						}
					}else{
						return false;
					}
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function get_category(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['id']) && is_numeric($_POST['id']) && $_POST['id'] != "" && strlen($_POST['id']) < 8){
			$connection = $this->get_connection();
			$id = $this->clear($connection,$_POST['id']);
			$res = $connection->query("SELECT * FROM `category` WHERE `id`='$id'");
			if ($res != null && $res->num_rows > 0){
				$result = $res->fetch_assoc();
				echo $result['name'];
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function delete_category(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['id']) && is_numeric($_POST['id']) && $_POST['id'] != "" && strlen($_POST['id']) < 8){
			$connection = $this->get_connection();
			$id = $this->clear($connection,$_POST['id']);
			if ($connection->query("DELETE FROM `category` WHERE `id`='$id'")){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function add_category(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['name_category_add']) && !is_numeric($_POST['name_category_add']) && strlen($_POST['name_category_add']) >= 3){
			$connection = $this->get_connection();
			$name = $this->clear($connection,$_POST['name_category_add']);

			if (is_uploaded_file($_FILES['file_category_add']['tmp_name'])){
				$picname=$_FILES['file_category_add']['name'];
				$array=explode(".",$picname);
				$ext=end($array);
				$new_name=rand(1,100000)."_img.".$ext;
				$from=$_FILES['file_category_add']['tmp_name'];
				$destination_path = getcwd().DIRECTORY_SEPARATOR;
				$to = $destination_path ."/static/images/category/". basename($new_name);
				$valid_extensions = array("jpg","jpeg","png","gif");
				$uploadOk = 1;
				if( !in_array(strtolower($ext),$valid_extensions) ) {
					$uploadOk = 0;
				}

				if($uploadOk == 0){
					return false;
				}else{
					if(move_uploaded_file($from,$to)){
						$img = $new_name;
					}else{
						$img = "";
					}
				}
			}else{
				$img = "";
			}


			echo $name."/".$img;
			if ($connection->query("INSERT INTO `category` (`name`,`img`) VALUES ('$name','$img')")){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function edit_category(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['id']) && is_numeric($_POST['id']) && $_POST['id'] != "" && strlen($_POST['id']) < 8 && isset($_POST['name']) && !is_numeric($_POST['name']) && strlen($_POST['name']) >= 3){

			$connection = $this->get_connection();
			$id = $this->clear($connection,$_POST['id']);
			$name = $this->clear($connection,$_POST['name']);
			$res = $connection->query("SELECT * FROM `category` WHERE `id`='$id'");
			if ($res != null && $res->num_rows > 0){
				$result = $res->fetch_assoc();
				if ($result['name'] != $name){
					if ($connection->query("UPDATE `category` SET `name`='$name' WHERE `id`='$id'")){
						return true;
					}else{
						return false;
					}
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function get_all_question(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['page']) && is_numeric($_POST['page']) && $_POST['page'] != ""){
			$page = $_POST['page'];
			$connection = $this->get_connection();
			$res = $connection->query("SELECT * FROM `question`");
			if ($res != null && $res->num_rows > 0){
				$all_question_number = $res->num_rows;
				$all_pages = ceil($all_question_number/$this->item_per_page);
				if ($page <= $all_pages){
					echo $all_pages."*";
					$start = ($page-1)*$this->item_per_page;

					$res2 = $connection->query("SELECT * FROM `question` LIMIT ".$start." , ".$this->item_per_page);
					if ($res2 != null && $res2->num_rows > 0){
						foreach ($res2 as $val){
							$id = $val['id'];
							$img = $val['img'];
							$level = $val['level'];
							$address_image = "";
							if ($img == ""){
								$address_image = "static/images/not-found.jpg";
							}else{
								$address_image = "static/images/question/".$img;
							}

							$background_color = "";
							$level_text = "";
							if ($level == "1"){
								$background_color = "green";
								$level_text = "آسان";
							}elseif ($level == "2"){
								$background_color = "yellow";
								$level_text = "متوسط";
							}else{
								$background_color = "red";
								$level_text = "سخت";
							}

							echo "<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center question_item\">
									<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center question_item_div\">
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;\">
											<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;\">
												<p class=\"question_number\">سوال شماره <span>$id</span></p>
											</div>
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 100px;padding: 0;\">
											<img src=\"$address_image\" alt=\"NOT FOUND\" style=\"height: 100px;width: 100px;margin-bottom: 5px;\">
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center line\"></div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;\">
											<p class=\"question_level\">سطح <span style='background-color: $background_color;color: black;'>$level_text</span></p>
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;margin-top: 20px;\">
											<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center\" style=\"height: 50px;\">
												<img src=\"static/images/detail.png\" alt=\"NOT FOUND\" class=\"detail_question_icon\" href=\"$id\">
											</div>
											<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center\" style=\"height: 50px;\">
												<img src=\"static/images/edit.png\" alt=\"NOT FOUND\" class=\"edit_question_icon\" href=\"$id\">
											</div>
											<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center\" style=\"height: 50px;\">
												<img src=\"static/images/delete.png\" alt=\"NOT FOUND\" class=\"delete_question_icon\" href=\"$id\">
											</div>
										</div>
									</div>
								</div>";
						}
					}else{
						return false;
					}
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function get_question(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['id']) && is_numeric($_POST['id']) && $_POST['id'] != "" && strlen($_POST['id']) < 8){
			$connection = $this->get_connection();
			$id = $this->clear($connection,$_POST['id']);
			$res = $connection->query("SELECT * FROM `question` WHERE `id`='$id'");
			if ($res != null && $res->num_rows > 0){
				$result = $res->fetch_assoc();


				$img = $result['img'];
				$level = $result['level'];
				$status = $result['status'];
				$category = $result['category'];
				$address_image = "";

				if ($img == ""){
					$address_image = "static/images/not-found.jpg";
				}else{
					$address_image = "static/images/question/".$img;
				}

				$background_color = "";
				$level_text = "";
				if ($level == "1"){
					$background_color = "green";
					$level_text = "آسان";
				}elseif ($level == "2"){
					$background_color = "yellow";
					$level_text = "متوسط";
				}else{
					$background_color = "red";
					$level_text = "سخت";
				}

				if ($status == "1"){
					$status = "در حال نمایش";
				}else{
					$status = "مخفی شده";
				}
				$cat_id = $result['category'];
				$res1 = $connection->query("SELECT * FROM `category` WHERE `id`='$cat_id'");
				if ($res1 != null && $res1->num_rows > 0){
					$result1 = $res1->fetch_assoc();
					$cat_name = $result1['name'];
					echo $address_image."*".$result['content']."*".$result['choose_1']."*".$result['choose_2']."*".$result['choose_3']."*".$result['choose_4']."*".$result['correct_choose']."*".$result['category']."*".$level_text."*".$status."*".$background_color."*".$result['correct_answer']."*".$result['mistake_answer']."*".$result['status']."*".$result['level']."*".$cat_name;
				}else {
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function add_question(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['content_question_add']) && isset($_POST['choose_1_question_add']) && isset($_POST['choose_2_question_add']) && isset($_POST['choose_3_question_add']) && isset($_POST['choose_4_question_add']) && isset($_POST['correct_choose_question_add']) && isset($_POST['category_question_add']) && isset($_POST['level_question_add']) && isset($_POST['status_question_add'])){
			$connection = $this->get_connection();
			if (is_uploaded_file($_FILES['file_question_add']['tmp_name'])){
				$picname=$_FILES['file_question_add']['name'];
				$array=explode(".",$picname);
				$ext=end($array);
				$new_name=rand(1,100000)."_img.".$ext;
				$from=$_FILES['file_question_add']['tmp_name'];
				$destination_path = getcwd().DIRECTORY_SEPARATOR;
				$to = $destination_path ."/static/images/question/". basename($new_name);
				$valid_extensions = array("jpg","jpeg","png","gif");

				$uploadOk = 1;
				if( !in_array(strtolower($ext),$valid_extensions) ) {
					$uploadOk = 0;
				}

				if($uploadOk == 0){
					return false;
				}else{
					if(move_uploaded_file($from,$to)){
						$img = $new_name;
					}else{
						$img = "";
					}
				}
			}else{
				$img = "";
			}


			$content = $this->clear($connection,$_POST['content_question_add']);
			$choose_1 = $this->clear($connection,$_POST['choose_1_question_add']);
			$choose_2 = $this->clear($connection,$_POST['choose_2_question_add']);
			$choose_3 = $this->clear($connection,$_POST['choose_3_question_add']);
			$choose_4 = $this->clear($connection,$_POST['choose_4_question_add']);
			$correct_choose = $this->clear($connection,$_POST['correct_choose_question_add']);
			$category = $this->clear($connection,$_POST['category_question_add']);
			$level = $this->clear($connection,$_POST['level_question_add']);
			$status = $this->clear($connection,$_POST['status_question_add']);

			if (is_numeric($content) || strlen($content) > 128 || strlen($content) < 3){
				return false;
			}
			if ($choose_1 == "" || $choose_2 == "" || $choose_3 == "" || $choose_4 == "" || !is_numeric($correct_choose) || ($correct_choose != "1" && $correct_choose != "2" && $correct_choose != "3" && $correct_choose != "4")){
				return false;
			}
			if (strlen($choose_2) > 128 || strlen($choose_2) < 1){
				return false;
			}
			if (strlen($choose_1) > 128 || strlen($choose_1) < 1){
				return false;
			}
			if (strlen($choose_3) > 128 || strlen($choose_3) < 1){
				return false;
			}
			if (strlen($choose_4) > 128 || strlen($choose_4) < 1){
				return false;
			}
			if (!is_numeric($category) || strlen($category) > 6 || strlen($category) < 1){
				return false;
			}
			if ($level != "1" && $level != "2" && $level != "3"){
				return false;
			}
			if ($status != "1" && $status != "0"){
				return false;
			}
			if ($connection->query("INSERT INTO `question` (`content`,`correct_choose`,`choose_1`,`choose_2`,`choose_3`,`choose_4`,`level`,`category`,`status`,`img`) VALUES ('$content','$correct_choose','$choose_1','$choose_2','$choose_3','$choose_4','$level','$category','$status','$img')")){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function edit_question(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['content_question_edit']) && isset($_POST['choose_1_question_edit']) && isset($_POST['choose_2_question_edit']) && isset($_POST['choose_3_question_edit']) && isset($_POST['choose_4_question_edit']) && isset($_POST['correct_choose_question_edit']) && isset($_POST['category_question_edit']) && isset($_POST['level_question_edit']) && isset($_POST['status_question_edit']) && isset($_POST['id']) && is_numeric($_POST['id'])){
			$connection = $this->get_connection();
			$id = $this->clear($connection,$_POST['id']);
			$content = $this->clear($connection,$_POST['content_question_edit']);
			$choose_1 = $this->clear($connection,$_POST['choose_1_question_edit']);
			$choose_2 = $this->clear($connection,$_POST['choose_2_question_edit']);
			$choose_3 = $this->clear($connection,$_POST['choose_3_question_edit']);
			$choose_4 = $this->clear($connection,$_POST['choose_4_question_edit']);
			$correct_choose = $this->clear($connection,$_POST['correct_choose_question_edit']);
			$category = $this->clear($connection,$_POST['category_question_edit']);
			$level = $this->clear($connection,$_POST['level_question_edit']);
			$status = $this->clear($connection,$_POST['status_question_edit']);

			$res = $connection->query("SELECT * FROM `question` WHERE `id`='$id'");
			if ($res != null && $res->num_rows > 0){
				if (is_numeric($content) || strlen($content) < 3 || strlen($content) > 128){
					return false;
				}
				if ($choose_1 == "" || $choose_2 == "" || $choose_3 == "" || $choose_4 == "" || !is_numeric($correct_choose) || ($correct_choose != "1" && $correct_choose != "2" && $correct_choose != "3" && $correct_choose != "4")){
					return false;
				}
				if (strlen($choose_2) > 128 || strlen($choose_2) < 1){
					return false;
				}
				if (strlen($choose_1) > 128 || strlen($choose_1) < 1){
					return false;
				}
				if (strlen($choose_3) > 128 || strlen($choose_3) < 1){
					return false;
				}
				if (strlen($choose_4) > 128 || strlen($choose_4) < 1){
					return false;
				}
				if (!is_numeric($category) || strlen($category) > 6 || strlen($category) < 1){
					return false;
				}
				if ($level != "1" && $level != "2" && $level != "3"){
					return false;
				}
				if ($status != "1" && $status != "0"){
					return false;
				}

				if (isset($_FILES['file_question_edit'])){
					if (is_uploaded_file($_FILES['file_question_edit']['tmp_name'])){
						$picname=$_FILES['file_question_edit']['name'];
						$array=explode(".",$picname);
						$ext=end($array);
						$new_name=rand(1,100000)."_img.".$ext;
						$from=$_FILES['file_question_edit']['tmp_name'];
						$destination_path = getcwd().DIRECTORY_SEPARATOR;
						$to = $destination_path ."/static/images/question/". basename($new_name);
						$valid_extensions = array("jpg","jpeg","png","gif");

						$uploadOk = 1;
						if( !in_array(strtolower($ext),$valid_extensions) ) {
							$uploadOk = 0;
						}

						if($uploadOk == 0){
							return false;
						}else{
							if(move_uploaded_file($from,$to)){
								$img = $new_name;
							}else{
								$img = "";
							}
						}
					}else{
						$result = $res->fetch_assoc();
						if ($result['img'] != ""){
							$img = $result['img'];
						}else{
							$img = "";
						}
					}
				}else{
					$result = $res->fetch_assoc();
					if ($result['img'] != ""){
						$img = $result['img'];
					}else{
						$img = "";
					}
				}

				if ($connection->query("UPDATE `question` SET `content`='$content',`correct_choose`='$correct_choose',`choose_1`='$choose_1',`choose_2`='$choose_2',`choose_3`='$choose_3',`choose_4`='$choose_4',`level`='$level',`category`='$category',`status`='$status',`img`='$img' WHERE `id`='$id'")){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
			}else{
				return false;
			}
	}
	function delete_question(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['id']) && is_numeric($_POST['id']) && $_POST['id'] != "" && strlen($_POST['id']) < 8){
			$connection = $this->get_connection();
			$id = $this->clear($connection,$_POST['id']);
			if ($connection->query("DELETE FROM `question` WHERE `id`='$id'")){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function search_question(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['search_item']) && isset($_POST['search_text']) && isset($_POST['page']) && is_numeric($_POST['page'])){
			$connection = $this->get_connection();
			$search_item = $this->clear($connection,$_POST['search_item']);
			$search_text = $this->clear($connection,$_POST['search_text']);
			$page = $this->clear($connection,$_POST['page']);
			if ($search_item != "content" && $search_item != "correct_choose" && $search_item != "level" && $search_item != "category" && $search_item != "status"){
				return false;
			}
			if ($search_item == "content" && (is_numeric($search_text) || strlen($search_text) < 3)){
				return false;
			}
			if ($search_item == "correct_choose" && ($search_text != "1" && $search_text != "2" && $search_text != "3" && $search_text != "4")){
				return false;
			}
			if ($search_item == "level" && ($search_text != "1" && $search_text != "2" && $search_text != "3")){
				return false;
			}
			if ($search_item == "category" && !is_numeric($search_text)){
				return false;
			}
			if ($search_item == "status" && ($search_text != "1" && $search_text != "0")){
				return false;
			}

			if ($search_item == "content"){
				$res = $connection->query("SELECT * FROM `question` WHERE `content` LIKE '%$search_text%'");
			}else{
				$res = $connection->query("SELECT * FROM `question` WHERE `$search_item`='$search_text'");
			}

			if ($res != null && $res->num_rows > 0){
				$all_question_number = $res->num_rows;
				$all_pages = ceil($all_question_number/$this->item_per_page);
				if ($page <= $all_pages){
					echo $all_pages."*";
					$start = ($page-1)*$this->item_per_page;

					if ($search_item == "content"){
						$res2 = $connection->query("SELECT * FROM `question` WHERE `content` LIKE '%$search_text%' LIMIT ".$start." , ".$this->item_per_page);
					}else{
						$res2 = $connection->query("SELECT * FROM `question` WHERE `$search_item`='$search_text' LIMIT ".$start." , ".$this->item_per_page);
					}
					if ($res2 != null && $res2->num_rows > 0){
						foreach ($res2 as $val){
							$id = $val['id'];
							$img = $val['img'];
							$level = $val['level'];
							$address_image = "";
							if ($img == ""){
								$address_image = "static/images/not-found.jpg";
							}else{
								$address_image = "static/images/question/".$img;
							}

							$background_color = "";
							$level_text = "";
							if ($level == "1"){
								$background_color = "green";
								$level_text = "آسان";
							}elseif ($level == "2"){
								$background_color = "yellow";
								$level_text = "متوسط";
							}else{
								$background_color = "red";
								$level_text = "سخت";
							}

							echo "<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center question_item\">
									<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center question_item_div\">
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;\">
											<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;\">
												<p class=\"question_number\">سوال شماره <span>$id</span></p>
											</div>
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 100px;padding: 0;\">
											<img src=\"$address_image\" alt=\"NOT FOUND\" style=\"height: 100px;width: 100px;margin-bottom: 5px;\">
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center line\"></div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;\">
											<p class=\"question_level\">سطح <span style='background-color: $background_color;color: black;'>$level_text</span></p>
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;margin-top: 20px;\">
											<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center\" style=\"height: 50px;\">
												<img src=\"static/images/detail.png\" alt=\"NOT FOUND\" class=\"detail_question_icon\" href=\"$id\">
											</div>
											<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center\" style=\"height: 50px;\">
												<img src=\"static/images/edit.png\" alt=\"NOT FOUND\" class=\"edit_question_icon\" href=\"$id\">
											</div>
											<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center\" style=\"height: 50px;\">
												<img src=\"static/images/delete.png\" alt=\"NOT FOUND\" class=\"delete_question_icon\" href=\"$id\">
											</div>
										</div>
									</div>
								</div>";
						}
					}else{
						return false;
					}
				}else{
					return false;
				}

			}else{
				return false;
			}

		}else{
			return false;
		}

	}
	function get_all_user(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['page']) && is_numeric($_POST['page']) && $_POST['page'] != ""){
			$page = $_POST['page'];
			$connection = $this->get_connection();
			$res = $connection->query("SELECT * FROM `user`");
			if ($res != null && $res->num_rows > 0){
				$all_user_number = $res->num_rows;
				$all_pages = ceil($all_user_number/$this->item_per_page);
				if ($page <= $all_pages){
					echo $all_pages."*";
					$start = ($page-1)*$this->item_per_page;

					$res2 = $connection->query("SELECT * FROM `user` LIMIT ".$start." , ".$this->item_per_page);
					if ($res2 != null && $res2->num_rows > 0){
						foreach ($res2 as $val){
							$coin = $val['coin'];
							$heart = $val['heart'];
							$name = $val['name'];
							$sum_buy = $val['sum_buy'];
							$level = $val['level'];
							$id = $val['id'];


							echo "<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center user_item\">
									<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center user_item_div\">
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;\">
											<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center\" style=\"height: 50px;\">
												<img src=\"static/images/heart.png\" alt=\"NOT FOUND\" class=\"img_heart_user\">
												<p class=\"heart_user\">$heart</p>
											</div>
											<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center\" style=\"height: 50px;\">
												<img src=\"static/images/coin.png\" alt=\"NOT FOUND\" class=\"img_coin_user\">
												<p class=\"coin_user\">$coin</p>
											</div>
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;\">
											<p class=\"name_user\">$name</p>
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center line\"></div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;\">
											<p class=\"sum_buy_user\">مجموع خرید : <span class=\"user_price\">$sum_buy </span> تومان</p>
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;\">
											<p class=\"level_user\">مرحله <span>$level</span></p>
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center section_user\">
											<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right\" style=\"height: 50px;\">
												<img src=\"static/images/detail.png\" alt=\"NOT FOUND\" class=\"detail_user_icon\" href=\"$id\">
											</div>
											<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left\" style=\"height: 50px;\">
												<img src=\"static/images/delete.png\" alt=\"NOT FOUND\" class=\"delete_user_icon\" href=\"$id\">
											</div>
										</div>
					
									</div>
								</div>";
						}
					}else{
						return false;
					}
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function get_user(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['id']) && is_numeric($_POST['id']) && $_POST['id'] != "" && strlen($_POST['id']) < 8){
			$connection = $this->get_connection();
			$id = $this->clear($connection,$_POST['id']);
			$res = $connection->query("SELECT * FROM `user` WHERE `id`='$id'");
			if ($res != null && $res->num_rows > 0){
				$result = $res->fetch_assoc();
				echo $result['correct_answer']."*".$result['mistake_answer']."*".$result['email']."*".$result['phone']."*".$result['ip']."*".$result['time_register'];
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function search_user(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['search_item']) && isset($_POST['search_text']) && isset($_POST['page']) && is_numeric($_POST['page'])){
			$connection = $this->get_connection();
			$search_item = $this->clear($connection,$_POST['search_item']);
			$search_text = $this->clear($connection,$_POST['search_text']);
			$page = $_POST['page'];
			if ($search_item != "name" && $search_item != "phone" && $search_item != "email" && $search_item != "ip" && $search_item != "level"){
				return false;
			}
			if ($search_item == "name" && (is_numeric($search_text) || strlen($search_text) < 3)){
				return false;
			}
			if ($search_item == "phone" && (!is_numeric($search_text) || strlen($search_text) > 11 || strlen($search_text) < 3)){
				return false;
			}
			if ($search_item == "level" && (!is_numeric($search_text) || strlen($search_text) > 6 || strlen($search_text) < 1)){
				return false;
			}
			if ($search_item == "email" && (is_numeric($search_text) || strlen($search_text) > 64 || strlen($search_text) < 3)){
				return false;
			}
			if ($search_item == "ip" && (strlen($search_text) > 32 || strlen($search_text) < 3)){
				return false;
			}

			if ($search_item == "name" || $search_item == "phone" || $search_item == "email" || $search_item == "ip"){
				$res = $connection->query("SELECT * FROM `user` WHERE `$search_item` LIKE '%$search_text%'");
			}else{
				$res = $connection->query("SELECT * FROM `user` WHERE `$search_item`='$search_text'");
			}

			if ($res != null && $res->num_rows > 0){
				$all_user_number = $res->num_rows;
				$all_pages = ceil($all_user_number/$this->item_per_page);
				if ($page <= $all_pages){
					echo $all_pages."*";
					$start = ($page-1)*$this->item_per_page;


					if ($search_item == "name" || $search_item == "phone" || $search_item == "email" || $search_item == "ip"){
						$res2 = $connection->query("SELECT * FROM `user` WHERE `$search_item` LIKE '%$search_text%' LIMIT ".$start." , ".$this->item_per_page);
					}else{
						$res2 = $connection->query("SELECT * FROM `user` WHERE `$search_item`='$search_text' LIMIT ".$start." , ".$this->item_per_page);
					}

					if ($res2 != null && $res2->num_rows > 0){
						foreach ($res2 as $val){
							$coin = $val['coin'];
							$heart = $val['heart'];
							$name = $val['name'];
							$sum_buy = $val['sum_buy'];
							$level = $val['level'];
							$id = $val['id'];


							echo "<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center user_item\">
									<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center user_item_div\">
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;\">
											<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center\" style=\"height: 50px;\">
												<img src=\"static/images/heart.png\" alt=\"NOT FOUND\" class=\"img_heart_user\">
												<p class=\"heart_user\">$heart</p>
											</div>
											<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center\" style=\"height: 50px;\">
												<img src=\"static/images/coin.png\" alt=\"NOT FOUND\" class=\"img_coin_user\">
												<p class=\"coin_user\">$coin</p>
											</div>
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;\">
											<p class=\"name_user\">$name</p>
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center line\"></div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;\">
											<p class=\"sum_buy_user\">مجموع خرید : <span class=\"user_price\">$sum_buy </span> تومان</p>
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;\">
											<p class=\"level_user\">مرحله <span>$level</span></p>
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center section_user\">
											<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right\" style=\"height: 50px;\">
												<img src=\"static/images/detail.png\" alt=\"NOT FOUND\" class=\"detail_user_icon\" href=\"$id\">
											</div>
											<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left\" style=\"height: 50px;\">
												<img src=\"static/images/delete.png\" alt=\"NOT FOUND\" class=\"delete_user_icon\" href=\"$id\">
											</div>
										</div>
					
									</div>
								</div>";
						}
					}else{
						return false;
					}
				}else{
					return false;
				}

			}else{
				return false;
			}

		}else{
			return false;
		}
	}
	function delete_user(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['id']) && is_numeric($_POST['id']) && $_POST['id'] != "" && strlen($_POST['id']) < 8){
			$connection = $this->get_connection();
			$id = $this->clear($connection,$_POST['id']);
			if ($connection->query("DELETE FROM `user` WHERE `id`='$id'")){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function get_all_lottery(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['page']) && is_numeric($_POST['page']) && $_POST['page'] != ""){
			$page = $_POST['page'];
			$connection = $this->get_connection();
			$res = $connection->query("SELECT * FROM `lottery`");
			if ($res != null && $res->num_rows > 0){
				$all_lottery_number = $res->num_rows;
				$all_pages = ceil($all_lottery_number/$this->item_per_page);
				if ($page <= $all_pages){
					echo $all_pages."*";
					$start = ($page-1)*$this->item_per_page;

					$res2 = $connection->query("SELECT * FROM `lottery` LIMIT ".$start." , ".$this->item_per_page);
					if ($res2 != null && $res2->num_rows > 0){
						foreach ($res2 as $val){
							$time = $val['time'];
							$id = $val['id'];
							$week = $val['week'];

							echo "<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center lottery_item\">
									<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center lottery_item_div\">
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;margin-top: 25px;font-weight: bold;color: black;\">
											<p class=\"week_lootery\">$week</p>
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center line\"></div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;padding: 0;\">
											<p class=\"time_lottery\">$time</p>
										</div>
										<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center section_lottery\">
											<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\" style=\"height: 50px;\">
												<img src=\"static/images/detail.png\" alt=\"NOT FOUND\" class=\"detail_lottery_icon\" href=\"$id\">
											</div>
										</div>
									</div>
								</div>";
						}
					}else{
						return false;
					}
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function get_lottery(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['id']) && is_numeric($_POST['id']) && $_POST['id'] != "" && strlen($_POST['id']) < 8){
			$connection = $this->get_connection();
			$id = $this->clear($connection,$_POST['id']);
			$res = $connection->query("SELECT * FROM `lottery` WHERE `id`='$id'");
			if ($res != null && $res->num_rows > 0){
				$result = $res->fetch_assoc();
				$winner_id_1 = $result['winner_1'];
				$winner_id_2 = $result['winner_2'];
				$winner_id_3 = $result['winner_3'];


				$res1 = $connection->query("SELECT * FROM `user` WHERE `id`='$winner_id_1'");
				$res2 = $connection->query("SELECT * FROM `user` WHERE `id`='$winner_id_2'");
				$res3 = $connection->query("SELECT * FROM `user` WHERE `id`='$winner_id_3'");
				if ($res1 != null && $res1->num_rows > 0 && $res2 != null && $res2->num_rows > 0 && $res3 != null && $res3->num_rows > 0){
					$result1 = $res1->fetch_assoc();
					$result2 = $res2->fetch_assoc();
					$result3 = $res3->fetch_assoc();
					echo $result['week'];
					echo "*";
					echo $result['time'];
					echo "*";
					echo $result1['name']." - ".$result1['phone'];
					echo "*";
					echo $result2['name']." - ".$result2['phone'];
					echo "*";
					echo $result3['name']." - ".$result3['phone'];
				}

			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function do_lottery(){
	    if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['week'])){
			$connection = $this->get_connection();
			$week = $this->clear($connection,$_POST['week']);
			$time = $this->get_time();
			$res1 = $connection->query("SELECT * FROM `lottery` WHERE `week`='$week'");
			if ($res1 != null && $res1->num_rows > 0){
				return false;
			}


			$res = $connection->query("SELECT * FROM `user` ORDER BY `level`");
			$number_of_user = $res->num_rows;
			$number_1 = rand(1,$number_of_user);
			$number_2 = rand(1,$number_of_user);
			$number_3 = rand(1,$number_of_user);
			$winner_1 = "";
			$winner_2 = "";
			$winner_3 = "";
			if ($number_1 != $number_2 && $number_2 != $number_3) {
				for ($i = 1; $i <= $number_of_user; $i++) {
					$result = $res->fetch_assoc();
					if ($i == $number_1) {
						$winner_1 = $result['id'];
					}
					if ($i == $number_2) {
						$winner_2 = $result['id'];
					}
					if ($i == $number_3) {
						$winner_3 = $result['id'];
					}
				}
			}else{
				$number_1 = rand(1,$number_of_user);
				$number_2 = rand(1,$number_of_user);
				$number_3 = rand(1,$number_of_user);
				for ($i = 1; $i <= $number_of_user; $i++) {
					$result = $res->fetch_assoc();
					if ($i == $number_1) {
						$winner_1 = $result['id'];
					}
					if ($i == $number_2) {
						$winner_2 = $result['id'];
					}
					if ($i == $number_3) {
						$winner_3 = $result['id'];
					}
				}
			}
			if ($winner_1 != $winner_2 && $winner_2 != $winner_3){
				if ($connection->query("INSERT INTO `lottery` (`week`,`time`,`winner_1`,`winner_2`,`winner_3`) VALUES ('$week','$time','$winner_1','$winner_2','$winner_3')")){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
        }else{
	    	return false;
		}

	}
	function get_all_setting(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin'){
			$connection = $this->get_connection();
			$res = $connection->query("SELECT * FROM `setting` WHERE `id`='1'");
			if ($res != null && $res->num_rows > 0){
				$result = $res->fetch_assoc();
				echo $result['address']."*".$result['phone']."*".$result['delete_one_choose']."*".$result['delete_two_choose']."*".$result['go_to_next_level']."*".$result['coin_100']."*".$result['coin_500']."*".$result['coin_1000']."*".$result['coin_2000']."*".$result['heart_3']."*".$result['heart_5']."*".$result['heart_10']."*".$result['heart_20'];
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function edit_setting(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin' && isset($_POST['address_setting']) && isset($_POST['phone_setting']) && isset($_POST['delete_one_choose_setting']) && isset($_POST['delete_two_choose_setting']) && isset($_POST['go_to_next_level_setting']) && isset($_POST['coin_100_setting']) && isset($_POST['coin_500_setting']) && isset($_POST['coin_1000_setting']) && isset($_POST['coin_2000_setting']) && isset($_POST['heart_3_setting']) && isset($_POST['heart_5_setting']) && isset($_POST['heart_10_setting']) && isset($_POST['heart_20_setting'])){
			$connection = $this->get_connection();

			$res = $connection->query("SELECT * FROM `setting` WHERE `id`='1'");
			$result = array();
			if ($res != null && $res->num_rows > 0){
				$result = $res->fetch_assoc();
			}else{
				return false;
			}

			$address = $this->clear($connection,$_POST['address_setting']);
			$phone = $this->clear($connection,$_POST['phone_setting']);
			$delete_one_choose = $this->clear($connection,$_POST['delete_one_choose_setting']);
			$delete_two_choose = $this->clear($connection,$_POST['delete_two_choose_setting']);
			$go_to_next_level = $this->clear($connection,$_POST['go_to_next_level_setting']);
			$coin_100 = $this->clear($connection,$_POST['coin_100_setting']);
			$coin_500 = $this->clear($connection,$_POST['coin_500_setting']);
			$coin_1000 = $this->clear($connection,$_POST['coin_1000_setting']);
			$coin_2000 = $this->clear($connection,$_POST['coin_2000_setting']);
			$heart_3 = $this->clear($connection,$_POST['heart_3_setting']);
			$heart_5 = $this->clear($connection,$_POST['heart_5_setting']);
			$heart_10 = $this->clear($connection,$_POST['heart_10_setting']);
			$heart_20 = $this->clear($connection,$_POST['heart_20_setting']);


			if (is_numeric($address) || strlen($address) > 64 || strlen($address) < 3){
				return false;
			}
			if (strlen($phone) > 32 || strlen($phone) < 3){
				return false;
			}
			if (!is_numeric($go_to_next_level) || !is_numeric($delete_one_choose) || !is_numeric($delete_two_choose)){
				return false;
			}
			if (strlen($go_to_next_level) < 1 || strlen($go_to_next_level) > 6){
				return false;
			}
			if (strlen($delete_two_choose) < 1 || strlen($delete_two_choose) > 6){
				return false;
			}
			if (strlen($delete_one_choose) < 1 || strlen($delete_one_choose) > 6){
				return false;
			}

			if ($coin_100 == "" || $coin_500 == "" || $coin_1000 == "" || $coin_2000 == "" || strlen($coin_100) > 6 || strlen($coin_500) > 6 || strlen($coin_1000) > 6 || strlen($coin_2000) > 6){
				return false;
			}
			if (!is_numeric($coin_100) || !is_numeric($coin_500) || !is_numeric($coin_1000) || !is_numeric($coin_2000)){
				return false;
			}
			if ($heart_3 == "" || $heart_5 == "" || $heart_10 == "" || $heart_20 == "" || strlen($heart_3) > 6 || strlen($heart_5) > 6 || strlen($heart_10) > 6 || strlen($heart_20) > 6){
				return false;
			}
			if (!is_numeric($heart_3) || !is_numeric($heart_5) || !is_numeric($heart_10) || !is_numeric($heart_20)){
				return false;
			}


			if ($connection->query("UPDATE `setting` SET `address`='$address',`phone`='$phone',`delete_one_choose`='$delete_one_choose',`delete_two_choose`='$delete_two_choose',`go_to_next_level`='$go_to_next_level',`coin_100`='$coin_100',`coin_500`='$coin_500',`coin_1000`='$coin_1000',`coin_2000`='$coin_2000',`heart_3`='$heart_3',`heart_5`='$heart_5',`heart_10`='$heart_10',`heart_20`='$heart_20'")){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function text_analytics(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin'){
			$connection = $this->get_connection();
			$res1 = $connection->query("SELECT COUNT(*) FROM `category`");
			if ($res1 != null && $res1->num_rows > 0){
				$result1 = $res1->fetch_assoc();
				$number_of_category = $result1['COUNT(*)'];
			}else{
				$number_of_category = 0;
			}

			$res2 = $connection->query("SELECT COUNT(*) FROM `question`");
			if ($res2 != null && $res2->num_rows > 0){
				$result2 = $res2->fetch_assoc();
				$number_of_question = $result2['COUNT(*)'];
			}else{
				$number_of_question = 0;
			}


			$res3 = $connection->query("SELECT COUNT(*) FROM `user`");
			if ($res3 != null && $res3->num_rows > 0){
				$result3 = $res3->fetch_assoc();
				$number_of_user = $result3['COUNT(*)'];
			}else{
				$number_of_user = 0;
			}

			$res4 = $connection->query("SELECT SUM(`amount_pay`) FROM `pay`");
			if ($res4 != null && $res4->num_rows > 0){
				$result4 = $res4->fetch_assoc();
				$sum_pay = $result4['SUM(`amount_pay`)'];
			}else{
				$sum_pay = 0;
			}

			echo $number_of_category."*".$number_of_question."*".$number_of_user."*".$sum_pay;
		}
	}
	function get_top_soccer(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin'){
			$connection = $this->get_connection();

			$top_users = array();
			$m = 0;
			$res5 = $connection->query("SELECT * FROM `user` ORDER BY `level` DESC");
			if ($res5 != null && $res5->num_rows > 0){
				foreach ($res5 as $val){
					if ($m == 10){
						break;
					}
					$top_users[$m] = $val['name'].'/'.$val['level'];
					$m++;
				}
			}else{
				$top_users = array();
			}

			for ($o = 0; $o < sizeof($top_users); $o++){
				if ($o == sizeof($top_users)-1){
					echo $top_users[$o];
				}else{
					echo $top_users[$o]."*";
				}
			}
		}else{
			return false;
		}
	}
	function get_analytics(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin'){
			$connection = $this->get_connection();

			$s = $this->get_days_in_week();
			$days = explode("*",$s);
			$one = $days[0];
			$res6 = $connection->query("SELECT * FROM `view` WHERE `date`='$one'");

			$views = array();

			if ($res6 != null && $res6->num_rows > 0){
				$result6 = $res6->fetch_assoc();
				$views[0] = $result6['view_count'];
			}else{
				$views[0] = 0;
			}

			$two = $days[1];
			$res6 = $connection->query("SELECT * FROM `view` WHERE `date`='$two'");
			if ($res6 != null && $res6->num_rows > 0){
				$result6 = $res6->fetch_assoc();
				$views[1] = $result6['view_count'];
			}else{
				$views[1] = 0;
			}

			$three = $days[2];
			$res6 = $connection->query("SELECT * FROM `view` WHERE `date`='$three'");
			if ($res6 != null && $res6->num_rows > 0){
				$result6 = $res6->fetch_assoc();
				$views[2] = $result6['view_count'];
			}else{
				$views[2] = 0;
			}

			$four = $days[3];
			$res6 = $connection->query("SELECT * FROM `view` WHERE `date`='$four'");
			if ($res6 != null && $res6->num_rows > 0){
				$result6 = $res6->fetch_assoc();
				$views[3] = $result6['view_count'];
			}else{
				$views[3] = 0;
			}

			$five = $days[4];
			$res6 = $connection->query("SELECT * FROM `view` WHERE `date`='$five'");
			if ($res6 != null && $res6->num_rows > 0){
				$result6 = $res6->fetch_assoc();
				$views[4] = $result6['view_count'];
			}else{
				$views[4] = 0;
			}

			$six = $days[5];
			$res6 = $connection->query("SELECT * FROM `view` WHERE `date`='$six'");
			if ($res6 != null && $res6->num_rows > 0){
				$result6 = $res6->fetch_assoc();
				$views[5] = $result6['view_count'];
			}else{
				$views[5] = 0;
			}

			$seven = $days[6];
			$res6 = $connection->query("SELECT * FROM `view` WHERE `date`='$seven'");
			if ($res6 != null && $res6->num_rows > 0){
				$result6 = $res6->fetch_assoc();
				$views[6] = $result6['view_count'];
			}else{
				$views[6] = 0;
			}

			echo $views[0]."&".$views[1]."&".$views[2]."&".$views[3]."&".$views[4]."&".$views[5]."&".$views[6];

		}else{
			return false;
		}
	}
	function get_categorys_select(){
		if (isset($_POST['is_admin']) && $_POST['is_admin'] == 'admin'){
			$connection = $this->get_connection();
			$res = $connection->query("SELECT * FROM `category`");
			if ($res != null && $res->num_rows > 0){
				foreach ($res as $val){
					$name = $val['name'];
					$id = $val['id'];
					echo "<option value='$id'>$name</option>";
				}
			}else{
				return false;
			}
		}
	}
	function clear($con,$param){
		$param = trim($param);
		$param = htmlspecialchars($param);
		$param = mysqli_real_escape_string($con,$param);
		return $param;
	}
	function get_connection(){
		if ($this->con == null){
			$this->con = new mysqli("localhost","root","","quiz");
			mysqli_set_charset($this->con,"utf8");
		}
		return $this->con;
	}
	function get_time(){
		include_once 'calender.php';
		$dat = new persian_calendar();
		$date = $dat->date("Y/m/d");
		$tim=new DateTime("now",new DateTimeZone('Asia/Tehran'));
		$time=$tim->format('H:i:s');
		return $date." _ ".$time;
	}
	function get_date(){
		include_once 'calender.php';
		$dat = new persian_calendar();
		$date = $dat->date("Y/m/d");
		return $date;
	}
	function get_days_in_week(){
		$one = '';
		$two = '';
		$three = '';
		$four = '';
		$five = '';
		$six = '';
		$seven = '';
		$s = explode("/",$this->get_date());
		$today = (int)$s[2];
		$this_month = (int)$s[1];
		$year = $s[0];
		if (($this_month-1) >= 1 && ($this_month-1) <= 6){
			if ($today >= 7){
				$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
				$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
				$three = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-2);
				$four = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-3);
				$five = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-4);
				$six = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-5);
				$seven = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-6);
			}else{
				switch ($today){
					case 6:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
						$three = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-2);
						$four = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-3);
						$five = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-4);
						$six = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-5);
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."31";
						break;
					case 5:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
						$three = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-2);
						$four = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-3);
						$five = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-4);
						$six = $year."/".sprintf("%02d",$this_month-1)."/"."31";
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."30";
						break;
					case 4:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
						$three = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-2);
						$four = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-3);
						$five = $year."/".sprintf("%02d",$this_month-1)."/"."31";
						$six = $year."/".sprintf("%02d",$this_month-1)."/"."30";
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."29";
						break;
					case 3:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
						$three = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-2);
						$four = $year."/".sprintf("%02d",$this_month-1)."/"."31";
						$five = $year."/".sprintf("%02d",$this_month-1)."/"."30";
						$six = $year."/".sprintf("%02d",$this_month-1)."/"."29";
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."28";
						break;
					case 2:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
						$three = $year."/".sprintf("%02d",$this_month-1)."/"."31";
						$four = $year."/".sprintf("%02d",$this_month-1)."/"."30";
						$five = $year."/".sprintf("%02d",$this_month-1)."/"."29";
						$six = $year."/".sprintf("%02d",$this_month-1)."/"."28";
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."27";
						break;
					case 1:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month-1)."/"."31";
						$three = $year."/".sprintf("%02d",$this_month-1)."/"."30";
						$four = $year."/".sprintf("%02d",$this_month-1)."/"."29";
						$five = $year."/".sprintf("%02d",$this_month-1)."/"."28";
						$six = $year."/".sprintf("%02d",$this_month-1)."/"."27";
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."26";
						break;
				}
			}
		}elseif (($this_month-1) == 12){
			if ($today >= 7){
				$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
				$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
				$three = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-2);
				$four = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-3);
				$five = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-4);
				$six = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-5);
				$seven = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-6);
			}else{
				switch ($today){
					case 6:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
						$three = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-2);
						$four = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-3);
						$five = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-4);
						$six = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-5);
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."29";
						break;
					case 5:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
						$three = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-2);
						$four = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-3);
						$five = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-4);
						$six = $year."/".sprintf("%02d",$this_month-1)."/"."29";
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."28";
						break;
					case 4:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
						$three = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-2);
						$four = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-3);
						$five = $year."/".sprintf("%02d",$this_month-1)."/"."29";
						$six = $year."/".sprintf("%02d",$this_month-1)."/"."28";
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."27";
						break;
					case 3:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
						$three = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-2);
						$four = $year."/".sprintf("%02d",$this_month-1)."/"."29";
						$five = $year."/".sprintf("%02d",$this_month-1)."/"."28";
						$six = $year."/".sprintf("%02d",$this_month-1)."/"."27";
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."26";
						break;
					case 2:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
						$three = $year."/".sprintf("%02d",$this_month-1)."/"."29";
						$four = $year."/".sprintf("%02d",$this_month-1)."/"."28";
						$five = $year."/".sprintf("%02d",$this_month-1)."/"."27";
						$six = $year."/".sprintf("%02d",$this_month-1)."/"."26";
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."25";
						break;
					case 1:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month-1)."/"."29";
						$three = $year."/".sprintf("%02d",$this_month-1)."/"."28";
						$four = $year."/".sprintf("%02d",$this_month-1)."/"."27";
						$five = $year."/".sprintf("%02d",$this_month-1)."/"."26";
						$six = $year."/".sprintf("%02d",$this_month-1)."/"."25";
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."24";
						break;
				}
			}
		}elseif (($this_month-1) > 6 && ($this_month-1) < 12){
			if ($today >= 7){
				$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
				$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
				$three = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-2);
				$four = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-3);
				$five = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-4);
				$six = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-5);
				$seven = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-6);
			}else{
				switch ($today){
					case 6:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
						$three = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-2);
						$four = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-3);
						$five = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-4);
						$six = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-5);
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."30";
						break;
					case 5:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
						$three = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-2);
						$four = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-3);
						$five = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-4);
						$six = $year."/".sprintf("%02d",$this_month-1)."/"."30";
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."29";
						break;
					case 4:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
						$three = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-2);
						$four = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-3);
						$five = $year."/".sprintf("%02d",$this_month-1)."/"."30";
						$six = $year."/".sprintf("%02d",$this_month-1)."/"."29";
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."28";
						break;
					case 3:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
						$three = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-2);
						$four = $year."/".sprintf("%02d",$this_month-1)."/"."30";
						$five = $year."/".sprintf("%02d",$this_month-1)."/"."29";
						$six = $year."/".sprintf("%02d",$this_month-1)."/"."28";
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."27";
						break;
					case 2:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today-1);
						$three = $year."/".sprintf("%02d",$this_month-1)."/"."30";
						$four = $year."/".sprintf("%02d",$this_month-1)."/"."29";
						$five = $year."/".sprintf("%02d",$this_month-1)."/"."28";
						$six = $year."/".sprintf("%02d",$this_month-1)."/"."27";
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."26";
						break;
					case 1:
						$one = $year."/".sprintf("%02d",$this_month)."/".sprintf("%02d",$today);
						$two = $year."/".sprintf("%02d",$this_month-1)."/"."30";
						$three = $year."/".sprintf("%02d",$this_month-1)."/"."29";
						$four = $year."/".sprintf("%02d",$this_month-1)."/"."28";
						$five = $year."/".sprintf("%02d",$this_month-1)."/"."27";
						$six = $year."/".sprintf("%02d",$this_month-1)."/"."26";
						$seven = $year."/".sprintf("%02d",$this_month-1)."/"."25";
						break;
				}
			}
		}

		return $one."*".$two."*".$three."*".$four."*".$five."*".$six."*".$seven;
	}
    
}

?>
