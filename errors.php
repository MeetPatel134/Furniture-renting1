<?php  if (count($errors) > 0) : ?>
	<style>.popup-box p {
    font-size: 1em;
    margin-bottom: 10px;
}</style>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>