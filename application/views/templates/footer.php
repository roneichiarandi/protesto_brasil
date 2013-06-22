
<div class="navbar navbar-fixed-bottom">
  <div class="navbar-inner">
  	<div class='hashs'>
  	<?php foreach($hash as $hashtag): ?>
  		<a href="<?php echo base_url("hashtag/{$hashtag}") ?>" class="text-info">#<?php echo $hashtag ?><a>
  	<?php endforeach; ?>
  </div>
  </div>
</div>
</body>
</html>