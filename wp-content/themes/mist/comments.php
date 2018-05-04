<?php
/**
 * Comments Template
 *
 * This template file used to display comments, pingbacks, trackbacks and comment form.
 *
 * @package Zozothemes
 */

// Do not delete these lines
if( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) { 
	die ( esc_html__( 'Please do not load this page directly. Thanks!', 'zozothemes' ) ); 
}
 
if( post_password_required() ) { ?>
	<p class="zozo-no-comments">
		<?php esc_html_e( 'This post is password protected. Enter the password to view comments.', 'zozothemes' ); ?>
	</p>
	<?php return;	
} ?>

<div id="comments" class="comments-section">

	<?php if ( have_comments() ) {
		$post_id = get_the_ID(); ?>
	
		<div class="comments-title">
			<h3><?php printf( _n( '1 Comentário', '%1$s Comentários', get_comments_number(), 'zozothemes' ), number_format_i18n( get_comments_number() ) ); ?></h3>
			
			<?php if ( !is_user_logged_in() ) {
			echo '<p class="comment-login-msg">' . sprintf( __('You are not signed in. <a href="%s">Sign in</a> to post comments.', 'zozothemes'), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>';
		} ?>
		</div>
			
		<ul class="zozo-all-comments list-unstyled">
			<?php
				wp_list_comments( array(
					'style'       => 'li',					
					'avatar_size' => 75,
					'callback'    => 'zozo_custom_comments'
				) );
			?>
		</ul><!-- .comment-list -->
		
		<?php // Comment pagination.
		 	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>
			<div class="navigation comment-nav">
				<ul class="pager comment-pager">
					<li class="previous"><?php previous_comments_link( __( '&larr; Comentários anteriores', 'zozothemes' ) ); ?></li>
                	<li class="next"><?php next_comments_link( __( 'Comentários novos &rarr;', 'zozothemes' ) ); ?></li>
				</ul>				
			</div><!-- .navigation -->
		<?php } ?>	
		
	<?php } // have_comments()

	else { 
	
		if ( comments_open() ) {
			// Comments are open ?>
			<h3 class="no-comments"><?php esc_html_e( 'Nenhum comentário.', 'zozothemes' ); ?></h3>
		 <?php } else { 
			// Comments are closed ?>
			<!--<h3 class="no-comments"><?php // esc_html_e('Comments are closed.', 'zozothemes'); ?></h3>-->
	
		<?php }
		
	} ?>
		
</div><!-- #comments -->

<?php

$commenter = '';
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
$required_text = '';

$args = array(
  'id_form'           => 'commentform',
  'id_submit'         => 'submit',
  'title_reply'       => esc_html__( 'Fazer um comentário', 'zozothemes' ),
  'title_reply_to'    => esc_html__( 'Responda à %s', 'zozothemes' ),
  'cancel_reply_link' => esc_html__( 'Cancelar comentário', 'zozothemes' ),
  'label_submit'      => esc_html__( 'Enviar comentário', 'zozothemes' ),
  
  'comment_field' =>  '<div class="comment-form-comment form-group">'.
    '<textarea id="comment" class="form-control" name="comment" cols="45" rows="5" placeholder="'. __('Seu comentário', 'zozothemes') .'" aria-required="true">' .
    '</textarea></div>',

  'must_log_in' => '<p class="must-log-in">' .
    sprintf(
      __( 'Você deve estar <a href="%s">logado</a> para comentar nesta postagem.', 'zozothemes' ),
      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
    ) . '</p>',

  'logged_in_as' => '<p class="logged-in-as">' .
    sprintf(
    __( 'Logado como <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Sair?</a>', 'zozothemes' ),
      admin_url( 'profile.php' ),
      $user_identity,
      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    ) . '</p>',

  'comment_notes_before' => '<p class="comment-notes">' .
    esc_html__( 'Seu email não será publicado.', 'zozothemes' ) . ( $req ? $required_text : '' ) .
    '</p>',

  'comment_notes_after' => '',

  'fields' => apply_filters( 'comment_form_default_fields', array(

    'author' =>
      '<div class="comment-form-author form-group"><div class="input-group"><input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" placeholder="'. __('Seu nome', 'zozothemes') . ( $req ? ' *' : '' ).'" size="30"' . $aria_req . ' /></div></div>',

    'email' =>
      '<div class="comment-form-email form-group"><div class="input-group"><input id="email" class="form-control" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="'. __('Seu email', 'zozothemes') . ( $req ? ' *' : '' ).'" size="30"' . $aria_req . ' /></div></div>',

    'url' =>
      '<div class="comment-form-url form-group"><div class="input-group"><input id="url" class="form-control" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" placeholder="'. __('Website', 'zozothemes') .'" size="30" /></div></div>'
    )
  ),
);

comment_form( $args ); ?>