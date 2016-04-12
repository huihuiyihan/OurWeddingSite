<?php
$num = 0;
$s = explode("\r", @file_get_contents('list.txt'));
$num = count($s);
// $post = array ( 'username' => '龙五', 'firends' => '男方亲友', 'people' => '1', 'type' => '待定', );
$post = $_POST;
if ($post) {
	if (strlen($post['username']) == 2) {
		$post['username'] = $post['username']."  ";
	}
	$str = "{$num}：{$post['username']},  {$post['firends']},  {$post['people']}人,  {$post['type']}";
	file_put_contents('list.txt', $str."\r",FILE_APPEND);
}

?>
<meta charset="utf-8">
<script type="text/javascript">
	alert('谢谢，我们恭候您的光临!');
	window.history.go(-1);
</script>