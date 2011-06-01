<div class="container">
	<div class="row">
    <?php if ($logo): ?>
      <div class="fourcol"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a></div>
    <?php endif; ?>  
  		<div class="eightcol last">
	  	  <ul id="nav">
	  <?php if (isset($main_menu)) : ?>
    <?php print theme('links', array('links' => $main_menu, 'attributes' => array('class' => 'links main-menu'))) ?>
  <?php endif; ?>
  <?php if (isset($secondary_menu)) : ?>
    <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('class' => 'links secondary-menu'))) ?>
  <?php endif; ?>         
  		  </ul>
	  	</div> 
	</div> 
</div>
<div class="row" id="content"> 
<div class="eightcol">
		 <?php if ($title): ?><h1 class='page-title'><?php print $title ?></h1><?php endif; ?>
         <?php print render($page['content']) ?>
        </div> 
        <div class="fourcol last"> 
          <h3>Level 3 Heading</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sapien magna, sodales et feugiat vehicula, luctus vitae ipsum. Nullam eu lorem erat, nec dignissim odio. Suspendisse eget nisi eget felis mattis fringilla. Duis a nibh non magna lobortis congue quis ut massa. Sed volutpat commodo libero, eu porttitor quam euismod a. Curabitur non sapien in lacus egestas venenatis. </p>
          <h3>Level 3 Heading</h3>
        <p>Sed volutpat commodo libero, eu porttitor quam euismod a. Curabitur non sapien in lacus egestas venenatis. Ut vel est dolor. Maecenas mollis nisi risus, ultricies tristique nulla. Aliquam ac risus purus, vel placerat nibh. Phasellus vulputate nulla sit amet lectus sollicitudin dignissim. Suspendisse potenti.
          <img src="img/penguin-chick.jpg" width="404" height="500" alt="penguino"></p>   
	  	</div>
</div> 



</body>

</html>