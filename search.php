<?php
require './xs_sdk/lib/XS.php';   //  引入 xunsearch sdk
$keyword = trim($_POST['keyword']);
if($keyword){
	$xs = new xs('test');  // test  为项目名称，配置文件是：$sdk/app/test.ini
	$search = $xs->search;
	$search->setLimit(20);
	$docs = $search->setQuery($keyword)->search();
	echo "<ul>";
	foreach($docs as $key=>$doc){
		$id = $doc->id;
		$desc = $doc->desc;
		$title = $search->highlight($doc->title);
		echo "<li><b>{$id}:{$title}</b><br/>描述:<br/>{$desc}</li>";
	}
	echo "</ul>";
}