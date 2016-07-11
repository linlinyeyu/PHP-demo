<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
<?php 
function createFolder($path) {
	if (!file_exists($path)) {
		createFolder(dirname($path));
		mkdir($path,0777);
	}
}
createFolder("aa/bb/cc");
?>