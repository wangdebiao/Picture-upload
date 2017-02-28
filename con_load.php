 <?php
$fileinfo=$_FILES["file"];
//date_default_timezone_set("Asia/Shanghai");
if(is_uploaded_file($fileinfo["tmp_name"])){
	if(!file_exists("../images")){
		mkdir("../images",0777,true);
	};
	$dirname=date("y-m-d");
	if(!file_exists("../images/".$dirname)){
		mkdir("../images/".$dirname,0777,true);
	};
	$filename=time().$fileinfo["name"];
	$path="../images/".$dirname."/".$filename;
	move_uploaded_file($fileinfo["tmp_name"],$path);
	$url="http://127.0.0.1/myhtxy/images/".$dirname."/".$filename;
	echo $url;
};
?>