<p><textarea rows="6" cols="50" name="answers[<?php echo $questionKey; ?>][]"><?php if (!empty($givenAnswer)) { echo stripcslashes(current($givenAnswer)); }?></textarea></p>
<?php if ( isset($question['hint']) && $question['hint'] != "" ) : ?>
<p>- <a href="#" class="show_hide_hint">Show/Hide Hint</a></p>
  				<div class="hint">
						<h5>Hint</h5>
						<p style="background-color : #c9c9c9;padding : 5px;"><?php echo nl2br(esc_html(stripslashes($question['hint']))); ?></p>
					</div>
<?php endif;?>