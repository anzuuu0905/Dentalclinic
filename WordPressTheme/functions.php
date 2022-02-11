<?php
/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
// function my_menu_init() {
// 	register_nav_menus(
// 		array(
// 			'global'  => 'ヘッダーメニュー',
// 			'utility' => 'ユーティリティメニュー',
// 			'drawer'  => 'ドロワーメニュー',
// 		)
// 	);
// }
// add_action( 'init', 'my_menu_init' );
/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */


/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
// function my_widget_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => 'サイドバー',
// 			'id'            => 'sidebar',
// 			'before_widget' => '<div id="%1$s" class="p-widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<div class="p-widget__title">',
// 			'after_title'   => '</div>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'my_widget_init' );


/**
 * アーカイブタイトル書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_archive_title( $title ) {

	if ( is_home() ) { /* ホームの場合 */
		$title = 'ブログ';
	} elseif ( is_category() ) { /* カテゴリーアーカイブの場合 */
		$title = '' . single_cat_title( '', false ) . '';
	} elseif ( is_tag() ) { /* タグアーカイブの場合 */
		$title = '' . single_tag_title( '', false ) . '';
	} elseif ( is_post_type_archive() ) { /* 投稿タイプのアーカイブの場合 */
		$title = '' . post_type_archive_title( '', false ) . '';
	} elseif ( is_tax() ) { /* タームアーカイブの場合 */
		$title = '' . single_term_title( '', false );
	} elseif ( is_search() ) { /* 検索結果アーカイブの場合 */
		$title = '「' . esc_html( get_query_var( 's' ) ) . '」の検索結果';
	} elseif ( is_author() ) { /* 作者アーカイブの場合 */
		$title = '' . get_the_author() . '';
	} elseif ( is_date() ) { /* 日付アーカイブの場合 */
		$title = '';
		if ( get_query_var( 'year' ) ) {
			$title .= get_query_var( 'year' ) . '年';
		}
		if ( get_query_var( 'monthnum' ) ) {
			$title .= get_query_var( 'monthnum' ) . '月';
		}
		if ( get_query_var( 'day' ) ) {
			$title .= get_query_var( 'day' ) . '日';
		}
	}
	return $title;
};
add_filter( 'get_the_archive_title', 'my_archive_title' );


/**
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'my_excerpt_length', 999 );


/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more( $more ) {
	return '...';

}
add_filter( 'excerpt_more', 'my_excerpt_more' );

function loginpage_edit() {?>

	<style>	
	/* ロゴを変更する場合は以下5行分を貼り付けます */
.login #login h1 a {
	background : none;
}
	/* 背景画像を変更する場合は以下4行分を貼り付けます */
	.login {
	background-image: url("<?php echo get_template_directory_uri() ?>/assets/img/common/mv1.jpg");
	background-size: cover;
	background-repeat: no-repeat;
	width: ;100%;
	height: 66%;
	}

	#login{
		position: absolute;
		top:400px;
		left:50%
	}

	</style>
	<?php }
	add_action( 'login_enqueue_scripts', 'loginpage_edit' );


	add_action( 'wp_footer', 'add_thanks_page' );
	function add_thanks_page() {
	echo <<< EOD
	<script>
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		location = 'http://hirodentalcrinic.local//thanks/'; /* 遷移先のURL */
	}, false );
	</script>
	EOD;
	}






	
// 最下部に記載 START
function my_delete_local_jquery() {
wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'my_delete_local_jquery' );
// 最下部に記載　END

/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
	// style.cssの読み込み
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array('style'), '1.8.1', 'all' );
	wp_enqueue_style( 'slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array('slick'), '1.8.1', 'all' );

	// jQueryの読み込み
	// wp_enqueue_style( 'jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js', array('slick-theme'), '3.6.0', 'all' );
	// wp_enqueue_script( 'jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js', array('slick-theme'), '3.6.0', 'all' );

	wp_enqueue_script( 'jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js', array(), '3.6.0', true );
	wp_enqueue_script( 'jquery-min', home_url( '/' ) . 'wp-includes/js/jquery/jquery-migrate.min.js', array(), '3.3.2', true );
	
	// javascriptの読み込み
	wp_enqueue_script( 'my', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery-min' ), '1.0.1' , true);


	// slickの読み込み
	// wp_enqueue_style( 'slick-min', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), '1.0.1', 'all' );
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * ソートオプションを取得
 * indentは出力されるソースのインデントを行うため、処理には影響なし
 * @param int $indent
 * @return string
 */
function get_sort_options($indent = 0) {
	$out = '';
	// sortに適切な内容がセットされているか
	$input = filter_input(INPUT_GET, 'sort', FILTER_SANITIZE_STRING);
	$options = [
			'modified' => '更新日順',
			'item'    => '品名順',
			'comment' => '新着コメント順',
	];
	foreach ($options as $value => $option) {
		// 選択している値の場合は、selected="selected"をセットする
			$selected = ($value === $input) ? ' selected="selected"' : '';
			if ($option !== reset($options)) {
					$out .= str_repeat(' ', $indent * 2);
			}
			$out .= '<option value="' . $value . '"' . $selected .'>';
			$out .= $option . '</option>' . PHP_EOL;
	}
	return $out;
}

/**
 * メインクエリーの取得条件を更新
 * 商品アーカイブの場合に実行
 */
add_action('pre_get_posts', function ($query) {
	if (is_admin() || !$query->is_main_query()) {
			return;
	}
	if (is_post_type_archive('products')) {
			$query->set('posts_per_page', '6');
			_set_order_condition($query);
	}
});

/**
 * 並び順の条件をセット
 * @param object $query
 */
function _set_order_condition($query) {
	$sort = filter_input(INPUT_GET, 'sort', FILTER_SANITIZE_STRING);
	if ($sort === 'item') {
			$query->set('orderby', 'title');
			$query->set('order', 'ASC');
	}
	elseif ($sort === 'comment') {
			$query->set('meta_key', 'latest_comment_timestamp');
			$query->set('meta_type', 'NUMERIC');
			$query->set('orderby', 'meta_value_num');
			$query->set('order', 'DESC');
	}
	else {
			$query->set('orderby', 'modified');
			$query->set('order', 'DESC');
	}
}

/**
 * 指定したコメントIDが属している投稿の
 * コメント最終更新タイムスタンプフィールドを更新
 * @param int $comment_id
 */
function update_latest_comment_timestamp($comment_id) {
	$comment = get_comment($comment_id);
	$post_id = $comment->comment_post_ID;
	$field_name = 'latest_comment_timestamp';
	$timestamp = strtotime(wp_date('YmdHis'));
	update_post_meta($post_id, $field_name, $timestamp);
}
/**
 * コメントが投稿・もしくは修正されたタイミングでカスタムフィールドを更新
 */
add_action('comment_post', 'update_latest_comment_timestamp');
add_action('edit_comment', 'update_latest_comment_timestamp');


