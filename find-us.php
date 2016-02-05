<?php

/*Template Name: Find-Us Page*/

get_header();

?>


<?php

  $telephone                  = get_field('telephone_number', 'option'); 

  $address1                   = get_field('address_line1', 'option');
  $address2                   = get_field('address_line2', 'option');
  $address3                   = get_field('address_line3', 'option'); 

  $opening_times_1            = get_field('opening_times_1');
  $opening_times_2            = get_field('opening_times_2');
  $opening_times_3            = get_field('opening_times_3');
  $find_us_top_section_image  = get_field('find_us_top_section_image');

  $find_us_bottom_image       = get_field('find_us_bottom_image'); 

?>


  <section class="u-displayTable [ top-section-wrapper ] [ amberBorder ]">
    
    <div class="top-section top-section--skin top-section--bkg top-section--bkg-findUs " style="background-image: url('<?php echo get_bloginfo('template_directory');?>/images/illustration.png');">
      <h2 class="u-margin-t-flush  [ page-title ]">FIND US</h2>
      <p class="[ u-textCapitalize ]">
        <?php echo $address1; ?><br>
        <?php echo $address2; ?><br>
        <?php echo $address3; ?><br>
        <span class="find-us-phone"><?php echo $telephone; ?></span>
        <a class="find-us-mobile-phone u-inlineBlock" href="tel://<?php echo str_replace(' ', '', $telephone); ?>"><?php echo $telephone; ?></a>
      </p>
      
      <p>
        For events enquiries, please contact our lovely reservationist, Amy, at <a class="u-textBreak" href="mailto:info@princessvictoria.co.uk?subject=Princess Victoria Event Enquiry">info@princessvictoria.co.uk</a> 
      </p>
      <p>
        For press and marketing enquiries, please contact Sophie at <a class="u-textBreak" href="mailto:sophie@affinitybarsandrestaurants.co.uk?subject=Princess Victoria Press Enquiry">sophie@affinitybarsandrestaurants.co.uk</a> 
      </p>

      

      <p><strong>Monday – Thursday:</strong><br>
        <?php echo $opening_times_1; ?>
      </p>

      <p><strong>Friday - Saturday:</strong><br>
        <?php echo $opening_times_2; ?>
      </p>
      <p><strong>Sunday:</strong><br>
        <?php echo $opening_times_3; ?>
      </p>

    </div>

    <div class="cover [ img-top-section ]" style="background-image: url('<?php echo $find_us_top_section_image['sizes']['386x543']; ?>')"></div>
    
  </section>


  
  <div class="[ grid-element ] magicBox magicBox--fancy-zoom [ amberBorder ]">
    <div class="cover fancy-zoom" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/images/find-us/find-us-map.jpg')"></div>
    
    <div class="magicBox-overlay magicBox-overlay__black center-parent u-textCenter">
      <div class="lotOfCopy center-child">
         <h3 class="magicBox__title">VIEW MAP</h3> 
      </div>
    </div>

    <a href="https://goo.gl/maps/PE5Eg" target="_blank"></a>
  </div>
  


  <div class="[ grid-element ] magicBox desktop-hidden [ amberBorder ]">
    <div class="cover" style="background-image: url('<?php echo $find_us_bottom_image['sizes']['386x340']; ?>')"></div>
  </div>


  <div class="[ grid-element--rect ] magicBox lap-mob-hidden [ amberBorder ]">
    <div class="cover" style="background-image: url('<?php echo $find_us_bottom_image['sizes']['785x340']; ?>')"></div>
  </div>












<?php get_footer(); ?>