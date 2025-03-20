<?php

include_once( plugin_dir_path( __FILE__ ) . 'quiz.php' );
?>
<style>
<?php
  $qz_bg = '#fff';
  $qz_color = '#4285f4';
  $qz_text = '#000';
  $qz_heading = '36px';
  $qz_general = '15px';

  // Get option values from our custom options
  $options = get_option('snoring_test_options', array());

  if(!empty($options['background_color'])){
    $qz_bg = $options['background_color'];
  }
  if(!empty($options['icons_color'])){
    $qz_color = $options['icons_color'];
  }
  if(!empty($options['text_color'])){
    $qz_text = $options['text_color'];
  }

  if(!empty($options['heading'])){
    $qz_heading = $options['heading']."px";
  }
  if(!empty($options['general'])){
    $qz_general = $options['general']."px";
  }
?>
    .quiz-wrapper{
        --qz-bg:  <?php echo $qz_bg;?>;
        --qz-color:  <?php echo $qz_color;?>;
        --qz-text:  <?php echo $qz_text;?>;
        --qz-heading: <?php echo $qz_heading;?>;
        --qz-general: <?php echo $qz_general;?>;
    }
</style>