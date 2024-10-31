<div class="wrap remakerting-boss">
	<h2>ReMarketing - Like a BOSS !!!</h2>

	<?php if( isset($_GET['settings-updated']) ) { ?>
	    <div id="message" class="updated">
	        <p><strong><?php _e('Settings saved.') ?></strong></p>
	    </div>
	<?php } ?>

	<table>
		<tr>
			<td width="600">
	<form style="margin-top: 20px;" method="post" action="options.php">
		<?php
	    	settings_fields( 'remakerting-boss' );
	    	do_settings_sections( 'remakerting-boss' );
	    ?>
	    <table>
		    <tr>
		    	<th valign="top">Google:</th>
		    	<td valign="top"><textarea name="rb_google" cols="50" rows="3"><?php echo htmlspecialchars_decode( stripslashes( get_option('rb_google') ) ); ?></textarea></td>
		    	<td valign="top"></td>
		    </tr>
		    <tr>
		    	<th valign="top">Facebook:</th>
		    	<td valign="top"><textarea name="rb_facebook" cols="50" rows="3"><?php echo htmlspecialchars_decode( stripslashes( get_option('rb_facebook') ) ); ?></textarea></td>
		    	<td valign="top"></td>
		    </tr>
		    <tr>
		    	<th valign="top">Bing:</th>
		    	<td valign="top"><textarea name="rb_bing" cols="50" rows="3"><?php echo htmlspecialchars_decode( stripslashes( get_option('rb_bing') ) ); ?></textarea></td>
		    	<td valign="top"></td>
		    </tr>
		    <tr>
		    	<th valign="top">Adroll:</th>
		    	<td valign="top"><textarea name="rb_adroll" cols="50" rows="3"><?php echo htmlspecialchars_decode( stripslashes( get_option('rb_adroll') ) ); ?></textarea></td>
		    	<td valign="top"></td>
		    </tr>
		    <tr>
		    	<th valign="top">ReTargeter:</th>
		    	<td valign="top"><textarea name="rb_retargeter" cols="50" rows="3"><?php echo htmlspecialchars_decode( stripslashes( get_option('rb_retargeter') ) ); ?></textarea></td>
		    	<td valign="top"></td>
		    </tr>
		    <tr>
		    	<th valign="top">Perfect Audience:</th>
		    	<td valign="top"><textarea name="rb_perfectaudience" cols="50" rows="3"><?php echo htmlspecialchars_decode( stripslashes( get_option('rb_perfectaudience') ) ); ?></textarea></td>
		    	<td valign="top"></td>
		    </tr>
		    <tr>
		    	<th valign="top">Google Analytics:</th>
		    	<td valign="top"><textarea name="rb_googleanalytics" cols="50" rows="3"><?php echo htmlspecialchars_decode( stripslashes( get_option('rb_googleanalytics') ) ); ?></textarea></td>
		    	<td valign="top"></td>
		    </tr>
		    <tr>
		    	<th valign="top">Other:</th>
		    	<td valign="top"><textarea name="rb_other" cols="50" rows="3"><?php echo htmlspecialchars_decode( stripslashes( get_option('rb_other') ) ); ?></textarea></td>
		    	<td valign="top"></td>
		    </tr>
	    </table>

	    <?php submit_button(); ?>

	</form>
			</td>
			<td width="400">
				<table>
					<tr>
						<td height="200"><a target="_blank" href="http://themeforest.net/?ref=kingjdub01"><img src="<?php echo REMARKETING_URL.'/assets/images/banner1.jpg'; ?>"></a></td>
					</tr>
					<tr>
						<td height="30"></td>
					</tr>
					<tr>
						<td height="200"><a target="_blank" href="http://www.longtailpro.com/#a_aid=kingjdub"><img src="<?php echo REMARKETING_URL.'/assets/images/banner2.png'; ?>"></a></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

</div>