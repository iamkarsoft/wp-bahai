<section class="blog-wrapper" >
<section class="container">

   <section class="row">

<section class="jumbotron">  <?php 
$slideid = get_field('slider_id');
    echo do_shortcode("[metaslider id=$slideid]"); 
?></section>

</section>
<?php 

$images = get_field('image_gallery');

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
          <div class="col-lg-3  col-sm-6 gallery-thumbnail" type="columns" size="medium">
       
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" class="img-thumbnail"/>
                </a>
                <p class="gallery-caption caption"><?php echo $image['caption']; ?></p>

          </div>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
  
</section>
  



</section>