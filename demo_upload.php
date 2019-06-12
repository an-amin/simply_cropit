<pre>
<?php 
var_dump($_FILES);

var_dump($_REQUEST);

?>
</pre>


<img src="<?=$_REQUEST['image-data'];?>" alt="">

<p>Image size: <?=round(strlen($_REQUEST['image-data'])/8/1024,2);?> kB</p>