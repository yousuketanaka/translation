<!-- Comments Form -->
<div class="well">
    <h4><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>Leave a Comment</h4>
    <?php
    $comments_args = array(
      'title_reply' => '',
      'title_reply_before' => '',
      'title_reply_after' => '',
      'comment_notes_before' => 'メールアドレスは必須ですが公開はされません',
      'comment_notes_after' => '',
      'label_submit' => 'COMMENT',
    );
    comment_form($comments_args);
    ?>
</div>

<hr>

<!-- Posted Comments -->
<?php if( have_comments() ): //コメントがあったらコメントリストを表示する ?>
	<ol class="commets-list">
		<?php wp_list_comments( 'avatar_size=74' ); ?>
	</ol>
<?php endif; ?>