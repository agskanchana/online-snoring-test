<?php
// Function to replace get_field('call_action_button_link', 'option')
function get_snoring_test_option($field_key) {
    $options = get_option('snoring_test_options', array());
    return isset($options[$field_key]) ? $options[$field_key] : '';
}

// Check if block is defined (it will be defined when called from Gutenberg, but not from shortcode)
if (!isset($block) || empty($block['id'])) {
    // Generate a random ID for shortcode usage
    $random_id = 'q' . uniqid();
    $id = "quiz-" . $random_id;
} else {
    $id = "quiz-" . $block['id'];
}
?>
<div class="quiz-wrapper">
      <form action="#">

           <div class="quiz quiz-data quiz-data-<?php echo $id;?> quiz-1 quiz-<?php echo $id;?> active" data-id="q1">
             <h2 class="q1 q1_<?php echo $id;?>">Q1: Are you Male or Female? </h2>


                            <div class="male-female quiz-row">
                <div class="male">
                     <input data-value="1" type="radio" id="male_<?php echo $id;?>" name="q1_<?php echo $id;?>" value="male">
                  <label for="male_<?php echo $id;?>">
                    <span class="gender-icon gender-icon-<?php echo $id;?>">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="male" class="svg-inline--fa fa-male fa-w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M96 0c35.346 0 64 28.654 64 64s-28.654 64-64 64-64-28.654-64-64S60.654 0 96 0m48 144h-11.36c-22.711 10.443-49.59 10.894-73.28 0H48c-26.51 0-48 21.49-48 48v136c0 13.255 10.745 24 24 24h16v136c0 13.255 10.745 24 24 24h64c13.255 0 24-10.745 24-24V352h16c13.255 0 24-10.745 24-24V192c0-26.51-21.49-48-48-48z"></path></svg>
                    </span>
                    Male
                  </label>
                </div>
                <div class="female">

                    <input data-value="0" type="radio" id="female_<?php echo $id;?>" name="q1_<?php echo $id;?>" value="female">
                    <label for="female_<?php echo $id;?>">
                        <span class="gender-icon gender-icon-<?php echo $id;?>">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="female" class="svg-inline--fa fa-female fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M128 0c35.346 0 64 28.654 64 64s-28.654 64-64 64c-35.346 0-64-28.654-64-64S92.654 0 128 0m119.283 354.179l-48-192A24 24 0 0 0 176 144h-11.36c-22.711 10.443-49.59 10.894-73.28 0H80a24 24 0 0 0-23.283 18.179l-48 192C4.935 369.305 16.383 384 32 384h56v104c0 13.255 10.745 24 24 24h32c13.255 0 24-10.745 24-24V384h56c15.591 0 27.071-14.671 23.283-29.821z"></path></svg>
                        </span>
                        Female
                    </label>
                </div>
              </div>

        </div>



           <div class="quiz quiz-data-<?php echo $id;?> quiz-data quiz-<?php echo $id;?> quiz-2" data-id="q2">
             <h2 class="q2 q2_<?php echo $id;?>">Q2: I’ve been told that I snore </h2>


                            <div class="radio">
               <input data-value="1" type="radio" id="q2_true_<?php echo $id;?>" name="q2_<?php echo $id;?>" value="true">
              <label class="radio-label" for="q2_true_<?php echo $id;?>"><span>True</span></label>
              </div>
              <div class="radio">
              <input data-value="0" type="radio" id="q2_false_<?php echo $id;?>" name="q2_<?php echo $id;?>" value="false">
              <label class="radio-label" for="q2_false_<?php echo $id;?>"><span>False</span></label>
              </div>

        </div>



           <div class="quiz quiz-data-<?php echo $id;?>  quiz-data quiz-<?php echo $id;?>  quiz-3   " data-id="q3">
             <h2 class="q3 q3_<?php echo $id;?>">Q3: I’ve been told that I stop breathing while I sleep, although I don’t remember this when I wake up </h2>


                            <div class="radio">
               <input data-value="1" type="radio" id="q3_true_<?php echo $id;?>" name="q3_<?php echo $id;?>" value="true">
              <label class="radio-label" for="q3_true_<?php echo $id;?>"><span>True</span></label>
              </div>
              <div class="radio">
              <input data-value="0" type="radio" id="q3_false"_<?php echo $id;?> name="q3_<?php echo $id;?>" value="false">
              <label class="radio-label" for="q3_false_<?php echo $id;?>"><span>False</span></label>
              </div>

        </div>



           <div class="quiz quiz-data-<?php echo $id;?>  quiz-data quiz-<?php echo $id;?>  quiz-4   " data-id="q4">
             <h2 class="q4 q4_<?php echo $id;?>">Q4: I have high blood pressure </h2>


                            <div class="radio">
               <input data-value="1" type="radio" id="q4_true_<?php echo $id;?>" name="q4_<?php echo $id;?>" value="true">
              <label class="radio-label" for="q4_true_<?php echo $id;?>"><span>True</span></label>
              </div>
              <div class="radio">
              <input data-value="0" type="radio" id="q4_false_<?php echo $id;?>" name="q4_<?php echo $id;?>" value="false">
              <label class="radio-label" for="q4_false_<?php echo $id;?>"><span>False</span></label>
              </div>

        </div>



           <div class="quiz quiz-data-<?php echo $id;?>  quiz-data quiz-<?php echo $id;?>  quiz-5   " data-id="q5">
             <h2 class="q5 q5_<?php echo $id;?>">Q5: My friends and family say they have noticed changes in my personality </h2>


                            <div class="radio">
               <input data-value="1" type="radio" id="q5_true_<?php echo $id;?>" name="q5_<?php echo $id;?>" value="true">
              <label class="radio-label" for="q5_true_<?php echo $id;?>"><span>True</span></label>
              </div>
              <div class="radio">
              <input data-value="0" type="radio" id="q5_false_<?php echo $id;?>" name="q5_<?php echo $id;?>" value="false">
              <label class="radio-label" for="q5_false_<?php echo $id;?>"><span>False</span></label>
              </div>

        </div>



           <div class="quiz quiz-data-<?php echo $id;?>  quiz-data  quiz-<?php echo $id;?> quiz-6   " data-id="q6">
             <h2 class="q6 q6_<?php echo $id;?>">Q6: I am gaining weight </h2>


                            <div class="radio">
               <input data-value="1" type="radio" id="q6_true_<?php echo $id;?>" name="q6_<?php echo $id;?>" value="true">
              <label class="radio-label" for="q6_true_<?php echo $id;?>"><span>True</span></label>
              </div>
              <div class="radio">
              <input data-value="0" type="radio" id="q6_false_<?php echo $id;?>" name="q6_<?php echo $id;?>" value="false">
              <label class="radio-label" for="q6_false_<?php echo $id;?>"><span>False</span></label>
              </div>

        </div>



           <div class="quiz quiz-data-<?php echo $id;?>  quiz-data quiz-<?php echo $id;?>  quiz-7   " data-id="q7">
             <h2 class="q7 q7_<?php echo $id;?>">Q7: I sweat excessively during the night </h2>


                            <div class="radio">
               <input data-value="1" type="radio" id="q7_true_<?php echo $id;?>" name="q7_<?php echo $id;?>" value="true">
              <label class="radio-label" for="q7_true_<?php echo $id;?>"><span>True</span></label>
              </div>
              <div class="radio">
              <input data-value="0" type="radio" id="q7_false_<?php echo $id;?>" name="q7_<?php echo $id;?>" value="false">
              <label class="radio-label" for="q7_false_<?php echo $id;?>"><span>False</span></label>
              </div>

        </div>



           <div class="quiz quiz-data-<?php echo $id;?>  quiz-data quiz-8  quiz-<?php echo $id;?>   " data-id="q8">
             <h2 class="q8 q8_<?php echo $id;?>">Q8: I have noticed my heart pounding or beating irregularly during the night </h2>


                            <div class="radio">
               <input data-value="1" type="radio" id="q8_true_<?php echo $id;?>" name="q8_<?php echo $id;?>" value="true">
              <label class="radio-label" for="q8_true_<?php echo $id;?>"><span>True</span></label>
              </div>
              <div class="radio">
              <input data-value="0" type="radio" id="q8_false_<?php echo $id;?>" name="q8_<?php echo $id;?>" value="false">
              <label class="radio-label" for="q8_false_<?php echo $id;?>"><span>False</span></label>
              </div>

        </div>



           <div class="quiz quiz-data quiz-data-<?php echo $id;?>  quiz-9  quiz-<?php echo $id;?>   " data-id="q9">
             <h2 class="q9 q9_<?php echo $id;?>">Q9: I get morning headaches </h2>


                            <div class="radio">
               <input data-value="1" type="radio" id="q9_true_<?php echo $id;?>" name="q9_<?php echo $id;?>" value="true">
              <label class="radio-label" for="q9_true_<?php echo $id;?>"><span>True</span></label>
              </div>
              <div class="radio">
              <input data-value="0" type="radio" id="q9_false_<?php echo $id;?>" name="q9_<?php echo $id;?>" value="false">
              <label class="radio-label" for="q9_false_<?php echo $id;?>"><span>False</span></label>
              </div>

        </div>



           <div class="quiz quiz-data  quiz-data-<?php echo $id;?> quiz-10 quiz-<?php echo $id;?>    " data-id="q10">
             <h2 class="q10 q10_<?php echo $id;?>">Q10: I have trouble sleeping when I have a cold </h2>


                            <div class="radio">
               <input data-value="1" type="radio" id="q10_true_<?php echo $id;?>" name="q10_<?php echo $id;?>" value="true">
              <label class="radio-label" for="q10_true_<?php echo $id;?>"><span>True</span></label>
              </div>
              <div class="radio">
              <input data-value="0" type="radio" id="q10_false_<?php echo $id;?>" name="q10_<?php echo $id;?>" value="false">
              <label class="radio-label" for="q10_false_<?php echo $id;?>"><span>False</span></label>
              </div>

        </div>



           <div class="quiz quiz-data  quiz-data-<?php echo $id;?> quiz-11   quiz-<?php echo $id;?>  " data-id="q11">
             <h2 class="q11 q11_<?php echo $id;?>">Q11: I suddenly wake up gasping for breath during the night </h2>


                            <div class="radio">
               <input data-value="1" type="radio" id="q11_true_<?php echo $id;?>" name="q11_<?php echo $id;?>" value="true">
              <label class="radio-label" for="q11_true_<?php echo $id;?>"><span>True</span></label>
              </div>
              <div class="radio">
              <input data-value="0" type="radio" id="q11_false_<?php echo $id;?>" name="q11_<?php echo $id;?>" value="false">
              <label class="radio-label" for="q11_false_<?php echo $id;?>"><span>False</span></label>
              </div>

        </div>



           <div class="quiz quiz-data quiz-data-<?php echo $id;?>  quiz-12  quiz-<?php echo $id;?>   " data-id="q12">
             <h2 class="q12 q12_<?php echo $id;?>">Q12: I am overweight </h2>


                            <div class="radio">
               <input data-value="1" type="radio" id="q12_true_<?php echo $id;?>" name="q12_<?php echo $id;?>" value="true">
              <label class="radio-label" for="q12_true_<?php echo $id;?>"><span>True</span></label>
              </div>
              <div class="radio">
              <input data-value="0" type="radio" id="q12_false_<?php echo $id;?>" name="q12_<?php echo $id;?>" value="false">
              <label class="radio-label" for="q12_false_<?php echo $id;?>"><span>False</span></label>
              </div>

        </div>



           <div class="quiz quiz-data  quiz-data-<?php echo $id;?> quiz-13  quiz-<?php echo $id;?>   " data-id="q13">
             <h2 class="q13 q13_<?php echo $id;?>">Q13: I seem to be losing my sex drive </h2>


                            <div class="radio">
               <input data-value="1" type="radio" id="q13_true_<?php echo $id;?>" name="q13_<?php echo $id;?>" value="true">
              <label class="radio-label" for="q13_true_<?php echo $id;?>"><span>True</span></label>
              </div>
              <div class="radio">
              <input data-value="0" type="radio" id="q13_false_<?php echo $id;?>" name="q13_<?php echo $id;?>" value="false">
              <label class="radio-label" for="q13_false_<?php echo $id;?>"><span>False</span></label>
              </div>

        </div>



           <div class="quiz quiz-data  quiz-data-<?php echo $id;?> quiz-14  quiz-<?php echo $id;?>   " data-id="q14">
             <h2 class="q14 q14_<?php echo $id;?>">Q14: I feel sleepy during the day even though I have slept through the night </h2>


                            <div class="radio">
               <input data-value="1" type="radio" id="q14_true_<?php echo $id;?>" name="q14_<?php echo $id;?>" value="true">
              <label class="radio-label" for="q14_true_<?php echo $id;?>"><span>True</span></label>
              </div>
              <div class="radio">
              <input data-value="0" type="radio" id="q14_false_<?php echo $id;?>" name="q14_<?php echo $id;?>" value="false">
              <label class="radio-label" for="q14_false_<?php echo $id;?>"><span>False</span></label>
              </div>

        </div>



        <div class="quiz quiz-email" data-id="q999">

<div class="svg-loader svg-loader-<?php echo $id;?>">

<!-- Loader 2 -->

<svg version="1.1" id="L2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
<circle fill="none" stroke="#444" stroke-width="4" stroke-miterlimit="10" cx="50" cy="50" r="48"></circle>
<line fill="none" stroke-linecap="round" stroke="#444" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="85" y2="50.5">
  <animateTransform attributeName="transform" dur="2s" type="rotate" from="0 50 50" to="360 50 50" repeatCount="indefinite"></animateTransform>
</line>
<line fill="none" stroke-linecap="round" stroke="#444" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="49.5" y2="74">
  <animateTransform attributeName="transform" dur="15s" type="rotate" from="0 50 50" to="360 50 50" repeatCount="indefinite"></animateTransform>
</line>
</svg><span>Calculating your score.. </span>


</div>

<div class="result-container result-container-<?php echo $id;?>">

     <h2>Your Score: <span id="quiz_result_score_<?php echo $id;?>"></span></h2>
     <div class="btn-container quiz-btn-container">
      <?php
        if(get_snoring_test_option('call_action_button_link')):
      ?>
     <a class="quiz-btn" href="<?php echo  get_snoring_test_option('call_action_button_link');?>">
     <span class="quiz-btn-wrapper">
      <span class="quiz-btn-svg">
       <svg height="464pt" viewBox="0 0 464 464" width="464pt" xmlns="http://www.w3.org/2000/svg"><path d="m208 80h40v32l37.105469-32h50.894531c8.839844 0 16-7.160156 16-16v-48c0-8.839844-7.160156-16-16-16h-128c-8.839844 0-16 7.160156-16 16v48c0 8.839844 7.160156 16 16 16zm112-48h16v16h-16zm-80 0h64v16h-64zm-32 0h16v16h-16zm0 0"/><path d="m296 400v64h47.160156l-6.398437-64zm0 0"/><path d="m296 368v16h80c22.054688 0 40-17.945312 40-40v-88h-16v72c0 22.054688-17.945312 40-40 40zm0 0"/><path d="m72 352h24v16h-24v80h-72v16h91.054688l16-32h137.890624l16 32h19.054688v-96h-168v-16h168v-16h-208zm0 0"/><path d="m368 224.96875c0-4.945312-4.023438-8.96875-8.96875-8.96875-2.359375 0-4.671875.953125-6.34375 2.625l-53.375 53.375h-75.3125c-4.414062 0-8 3.585938-8 8s3.585938 8 8 8h84.6875l56.6875-56.6875c1.671875-1.671875 2.625-3.984375 2.625-6.34375zm0 0"/><path d="m320 152v16c0 17.648438 14.351562 32 32 32s32-14.351562 32-32v-16c0-17.648438-14.351562-32-32-32s-32 14.351562-32 32zm0 0"/><path d="m296 352h64c13.230469 0 24-10.769531 24-24v-99.054688c0-.578124-.160156-1.113281-.230469-1.664062-.546875 5.75-2.984375 11.246094-7.082031 15.34375l-56.6875 56.6875v36.6875h-24zm0 0"/><path d="m116.945312 448-8 16h134.109376l-8-16zm0 0"/><path d="m56 304h248v16h-248zm0 0"/><path d="m200 280c0-13.230469 10.769531-24 24-24h7.648438c-.855469-6.199219-5.128907-11.527344-11.257813-13.28125l-32.957031-9.414062c-4.632813 6.046874-13.664063 14.695312-27.433594 14.695312s-22.800781-8.648438-27.441406-14.703125l-32.957032 9.414063c-6.824218 1.960937-11.601562 8.28125-11.601562 15.394531v29.894531h113.472656c-.898437-2.511719-1.472656-5.183594-1.472656-8zm0 0"/><path d="m160 200c17.648438 0 32-14.351562 32-32v-16c0-17.648438-14.351562-32-32-32s-32 14.351562-32 32v16c0 17.648438 14.351562 32 32 32zm0 0"/><path d="m144 213.199219v8.59375c1.984375 3.0625 7.496094 10.207031 16 10.207031s14.015625-7.144531 16-10.207031v-8.59375c-5.015625 1.777343-10.382812 2.800781-16 2.800781s-10.984375-1.023438-16-2.800781zm0 0"/><path d="m373.558594 448-4.796875-48h-15.921875l6.398437 64h104.761719v-16zm0 0"/></svg>
      </span>
       <span class="quiz-btn-text" style="font-size: 22px !important;">Book Me</span>
     </span>
     </a>
     <?php else:?>
     <a class="quiz-btn" href="https://snorer.com/stop-snoring-see-your-pharmacist/#find-a-sleep-trained-pharmacist">
      <span class="quiz-btn-wrapper">
            <span class="quiz-btn-svg">
                  <svg height="464pt" viewBox="0 0 464 464" width="464pt" xmlns="http://www.w3.org/2000/svg"><path d="m208 80h40v32l37.105469-32h50.894531c8.839844 0 16-7.160156 16-16v-48c0-8.839844-7.160156-16-16-16h-128c-8.839844 0-16 7.160156-16 16v48c0 8.839844 7.160156 16 16 16zm112-48h16v16h-16zm-80 0h64v16h-64zm-32 0h16v16h-16zm0 0"/><path d="m296 400v64h47.160156l-6.398437-64zm0 0"/><path d="m296 368v16h80c22.054688 0 40-17.945312 40-40v-88h-16v72c0 22.054688-17.945312 40-40 40zm0 0"/><path d="m72 352h24v16h-24v80h-72v16h91.054688l16-32h137.890624l16 32h19.054688v-96h-168v-16h168v-16h-208zm0 0"/><path d="m368 224.96875c0-4.945312-4.023438-8.96875-8.96875-8.96875-2.359375 0-4.671875.953125-6.34375 2.625l-53.375 53.375h-75.3125c-4.414062 0-8 3.585938-8 8s3.585938 8 8 8h84.6875l56.6875-56.6875c1.671875-1.671875 2.625-3.984375 2.625-6.34375zm0 0"/><path d="m320 152v16c0 17.648438 14.351562 32 32 32s32-14.351562 32-32v-16c0-17.648438-14.351562-32-32-32s-32 14.351562-32 32zm0 0"/><path d="m296 352h64c13.230469 0 24-10.769531 24-24v-99.054688c0-.578124-.160156-1.113281-.230469-1.664062-.546875 5.75-2.984375 11.246094-7.082031 15.34375l-56.6875 56.6875v36.6875h-24zm0 0"/><path d="m116.945312 448-8 16h134.109376l-8-16zm0 0"/><path d="m56 304h248v16h-248zm0 0"/><path d="m200 280c0-13.230469 10.769531-24 24-24h7.648438c-.855469-6.199219-5.128907-11.527344-11.257813-13.28125l-32.957031-9.414062c-4.632813 6.046874-13.664063 14.695312-27.433594 14.695312s-22.800781-8.648438-27.441406-14.703125l-32.957032 9.414063c-6.824218 1.960937-11.601562 8.28125-11.601562 15.394531v29.894531h113.472656c-.898437-2.511719-1.472656-5.183594-1.472656-8zm0 0"/><path d="m160 200c17.648438 0 32-14.351562 32-32v-16c0-17.648438-14.351562-32-32-32s-32 14.351562-32 32v16c0 17.648438 14.351562 32 32 32zm0 0"/><path d="m144 213.199219v8.59375c1.984375 3.0625 7.496094 10.207031 16 10.207031s14.015625-7.144531 16-10.207031v-8.59375c-5.015625 1.777343-10.382812 2.800781-16 2.800781s-10.984375-1.023438-16-2.800781zm0 0"/><path d="m373.558594 448-4.796875-48h-15.921875l6.398437 64h104.761719v-16zm0 0"/></svg>
            </span>

      <span class="quiz-btn-text">Consult a sleep-trained pharmacist</span>
      </span>
     </a>
     <?php endif;?>
</div>
 <div class="score-content">
     <p>Your snoring test result indicates you should consult a sleep-trained pharmacist or your GP to be:</p>
<ul>
<li>Screened for sleep apnoea (OSA)</li>
<li>Signposted to the most appropriate treatment for you (with a review of your medical history)</li>
<li>Get help addressing the underlying reasons why you snore</li>
</ul>
<p>If you scored 7 or more you show symptoms of Obstructive Sleep Apnoea (OSA), a life-threatening disorder that causes you to stop breathing repeatedly – often several hundred times per night – during your sleep.</p>
 </div>

</div>

        </div>

        </form>

      <div class="quiz-nav-wrapper quiz-nav-wrapper-<?php echo $id;?>">
     <a class="quiz-nav quiz-btn quiz-prev quiz-prev-<?php echo $id;?> q-hide" href="javascript:;">Prev</a>
      <a class="quiz-nav  quiz-btn quiz-next next-<?php echo  $id;?>" href="javascript:;">Next</a>
      <span class="quiz-progress">
          <span class="quiz-nav-number quiz-nav-number-<?php echo $id;?>">1</span> of 14      </span>
      </div>
      <div class="poweredby-snoerer">
        <small>Powered by <a target="_blank" href="https://www.snorer.com">snorer.com</a></small>
      </div>
    </div>
<script type="text/javascript">
document.querySelector(".next-<?php echo $id;?>").addEventListener("click", function(){
  var NextQ = document.querySelector(".quiz-<?php echo $id;?>.active");
  NextQ = NextQ.nextElementSibling;
  var LastQ = document.querySelector(".quiz-<?php echo $id;?>.active").nextElementSibling.getAttribute("data-id");
  var CurrentQ = NextQ.previousElementSibling;
  var DataID = CurrentQ.getAttribute('data-id');

  if (Qvalidate(DataID)) {
    document.querySelector(".quiz-prev-<?php echo $id;?>").classList.remove("q-hide");

    // Smoother transition
    CurrentQ.classList.remove("active");
    setTimeout(function() {
      NextQ.classList.add('active');
    }, 10);

    var Qnumber = NextQ.getAttribute("data-id");
    Qnumber = Qnumber.replace("q", "");
    document.querySelector(".quiz-nav-number-<?php echo $id;?>").innerHTML = Qnumber;

    // Update the Next/Finish button text based on question number
    if (Qnumber == 14) {
      document.querySelector(".next-<?php echo $id;?>").innerHTML = "Finish";
    } else {
      document.querySelector(".next-<?php echo $id;?>").innerHTML = "Next";
    }
  }
});

document.querySelector(".quiz-prev-<?php echo $id;?>").addEventListener("click", function(){
  var PrevQ = document.querySelector(".quiz-<?php echo $id;?>.active").previousElementSibling;
  var CurrentQ = document.querySelector(".quiz-<?php echo $id;?>.active");

  var Qnumber = PrevQ.getAttribute("data-id");
  Qnumber = Qnumber.replace("q", "");
  document.querySelector(".quiz-nav-number-<?php echo $id;?>").innerHTML = Qnumber;

  // Smoother transition
  CurrentQ.classList.remove("active");
  setTimeout(function() {
    PrevQ.classList.add('active');
  }, 10);

  // Update the Next button text
  document.querySelector(".next-<?php echo $id;?>").innerHTML = "Next";

  // Hide prev button on first question
  if (Qnumber == 1) {
    document.querySelector(".quiz-prev-<?php echo $id;?>").classList.add("q-hide");
  }
})

function Qvalidate(El) {
  var RDVlue = El + '<?php echo "_".$id;?>';

  if (isOneChecked(RDVlue)) {
    document.querySelector("."+El+"<?php echo "_".$id;?>").classList.remove("q-error");
    var Last2Q = document.querySelector(".quiz-<?php echo $id;?>.active").nextElementSibling.getAttribute("data-id");
    if (Last2Q == 'q999') {
      showResults();
      document.querySelector(".quiz-nav-wrapper-<?php echo $id;?>").style.display = "none";
    }
    return true;
  } else {
    var Cheading = document.querySelector("."+El+"<?php echo "_".$id;?>");
    Cheading.classList.add("q-error");
    return false;
  }
}

var genderIcon = document.querySelectorAll(".gender-icon-<?php echo $id;?>");

genderIcon.forEach(function(gIcon){
  gIcon.addEventListener("click", function(el){
    document.querySelectorAll(".gender-icon-<?php echo $id;?>").forEach(function(El){
      El.classList.remove('active');
    })
    this.classList.add('active');

    // Also check the associated radio button
    var radioId = this.closest('label').getAttribute('for');
    document.getElementById(radioId).checked = true;
  })
})

function isOneChecked(El) {
  var chx = document.querySelectorAll("input[name='"+El+"']");
  for (var i=0; i<chx.length; i++) {
    if (chx[i].checked) {
      return true;
    }
  }
  return false;
}

function showResults() {
  document.querySelector(".svg-loader-<?php echo $id;?>").style.display='block';
  var quizScore = 0;

  document.querySelectorAll(".quiz-data-<?php echo $id;?>").forEach(function(quizItem){
    var DataID = quizItem.getAttribute('data-id');
    var DataID = DataID + '<?php echo "_".$id;?>';
    var checkedInput = document.querySelector("input[name='"+DataID+"']:checked");
    if (checkedInput) {
      var DataScore = checkedInput.getAttribute("data-value");
      DataScore = Number(DataScore);
      quizScore += DataScore;
    }
  })

  setTimeout(function(){
    document.querySelector(".svg-loader-<?php echo $id;?>").style.display='none';
    document.querySelector("#quiz_result_score_<?php echo $id;?>").innerHTML = quizScore;
    document.querySelector(".result-container-<?php echo $id;?>").style.display="block";

    // Scroll to results
    document.querySelector(".result-container-<?php echo $id;?>").scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  }, 1500);
}

// Enhance radio button interactions
document.querySelectorAll('.radio').forEach(function(radio) {
  radio.addEventListener('click', function() {
    var input = this.querySelector('input[type="radio"]');
    if (input) {
      input.checked = true;
    }
  });
});
</script>
<script>
// Convert hex to RGB for CSS variables
function hexToRgb(hex) {
    // Remove # if present
    hex = hex.replace('#', '');

    // Parse the hex values
    var r = parseInt(hex.substring(0, 2), 16);
    var g = parseInt(hex.substring(2, 4), 16);
    var b = parseInt(hex.substring(4, 6), 16);

    // Return RGB values
    return r + ', ' + g + ', ' + b;
}

// Get the primary color
var primaryColor = getComputedStyle(document.documentElement)
    .getPropertyValue('--qz-color').trim();

// Set the RGB version
if (primaryColor && primaryColor.startsWith('#')) {
    document.documentElement.style.setProperty('--qz-color-rgb', hexToRgb(primaryColor));
} else if (primaryColor) {
    // Try to handle non-hex colors approximately
    var tempDiv = document.createElement('div');
    tempDiv.style.color = primaryColor;
    document.body.appendChild(tempDiv);
    var rgbColor = getComputedStyle(tempDiv).color;
    document.body.removeChild(tempDiv);

    // Extract RGB values from rgb(r, g, b) format
    if (rgbColor.startsWith('rgb')) {
        var rgbOnly = rgbColor.match(/\d+, \d+, \d+/)[0];
        document.documentElement.style.setProperty('--qz-color-rgb', rgbOnly);
    }
}
</script>