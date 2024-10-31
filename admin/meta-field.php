<p class="howto">This is only necessary if you have a specific Retargetting Campaign for this Page/Post</p>
<div class="rb-meta-fields">
	<section>
		<label>Google</label>
		<textarea name="remarketingboss[google]"><?php echo htmlspecialchars_decode( stripslashes( get_post_meta( $post->ID, 'rb_google', true ) ) ); ?></textarea>
	</section>
	<section>
		<label>Facebook</label>
		<textarea name="remarketingboss[facebook]"><?php echo htmlspecialchars_decode( stripslashes( get_post_meta( $post->ID, 'rb_facebook', true ) ) ); ?></textarea>
	</section>
	<section>
		<label>Bing</label>
		<textarea name="remarketingboss[bing]"><?php echo htmlspecialchars_decode( stripslashes( get_post_meta( $post->ID, 'rb_bing', true ) ) ); ?></textarea>
	</section>
	<section>
		<label>Adroll</label>
		<textarea name="remarketingboss[adroll]"><?php echo htmlspecialchars_decode( stripslashes( get_post_meta( $post->ID, 'rb_adroll', true ) ) ); ?></textarea>
	</section>
	<section>
		<label>Perfect Audience</label>
		<textarea name="remarketingboss[perfectaudience]"><?php echo htmlspecialchars_decode( stripslashes( get_post_meta( $post->ID, 'rb_perfectaudience', true ) ) ); ?></textarea>
	</section>
	<section>
		<label>ReTargeter</label>
		<textarea name="remarketingboss[retargeter]"><?php echo htmlspecialchars_decode( stripslashes( get_post_meta( $post->ID, 'rb_retargeter', true ) ) ); ?></textarea>
	</section>
	<section>
		<label>Google Analytics</label>
		<textarea name="remarketingboss[googleanalytics]"><?php echo htmlspecialchars_decode( stripslashes( get_post_meta( $post->ID, 'rb_googleanalytics', true ) ) ); ?></textarea>
	</section>
	<section>
		<label>Other</label>
		<textarea name="remarketingboss[other]"><?php echo htmlspecialchars_decode( stripslashes( get_post_meta( $post->ID, 'rb_other', true ) ) ); ?></textarea>
	</section>
</div>