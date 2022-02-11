<div id="comments" class="comments">
	<?php if( have_comments() ): //コメントがあったらコメントリストを表示する ?>
	<h3>コメント</h3>
	<ol class="commets-list">
		<?php wp_list_comments( 'avatar_size=80' ); ?>
	</ol>
	<?php endif; ?>
	<?php $args = array(
		'title_reply' => 'コメントする',
		'label_submit' => 'コメントを送信'
	);
	?>
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

		<div class="comments-nav" role="navigation">
			<?php previous_comments_link( __( '< 前のコメント', 'rams' ) ); ?>
			<?php next_comments_link( __( '新しいコメント >', 'rams' ) ); ?>
		</div><!-- .comment-nav-below -->

	<?php endif; ?>

	<? comment_form( $args ); ?>
</div><!-- #comments -->