<?php
header("Content-Type: text/plain");
$post = $_GET['p'];
setlocale(LC_ALL, 'en_US.utf8');
putenv('LC_ALL=en_US.utf8');
echo(exec("python3 ../../steemapi-python/postGetTitle.py $post")."\n"."\n");
exec("python3 ../../steemapi-python/getPostBody.py $post", $output);
foreach($output as $line) {
	echo $line."\n";
}
echo "\n";
echo(exec("python3 ../../steemapi-python/postGetTags.py $post"));
?>