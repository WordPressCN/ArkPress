<?php
/**
 * About This Version administration panel.
 *
 * @package ArkPress
 * @subpackage Administration
 */

/** ArkPress Administration Bootstrap */
require_once __DIR__ . '/admin.php';

// Used in the HTML title tag.
/* translators: Page title of the About WordPress page in the admin. */
$title = _x( 'About', 'page title' );

list( $display_version ) = explode( '-', get_bloginfo( 'version' ) );

require_once ABSPATH . 'wp-admin/admin-header.php';
?>
	<div class="wrap about__container">

		<div class="about__header">
			<div class="about__header-title">
				<h1>
					ArkPress
					<span class="screen-reader-text"><?php echo $display_version; ?></span>
				</h1>
			</div>

			<div class="about__header-text">
                No Gutenberg（古腾堡）!
			</div>

			<nav class="about__header-navigation nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu' ); ?>">
				<a href="about.php" class="nav-tab nav-tab-active" aria-current="page"><?php _e( 'What&#8217;s New' ); ?></a>
				<a href="credits.php" class="nav-tab"><?php _e( 'Credits' ); ?></a>
				<a href="freedoms.php" class="nav-tab"><?php _e( 'Freedoms' ); ?></a>
				<a href="privacy.php" class="nav-tab"><?php _e( 'Privacy' ); ?></a>
			</nav>
		</div>

		<hr class="is-large" />

		<div class="about__section">
			<h2 class="aligncenter">
                ArkPress 已经从底层完全剔除了古腾堡编辑器！
			</h2>
			<p class="aligncenter is-subheading">
				我们知道你只是写博客，用不上那些讨厌的区块，所以我们为你移除了它们。
			</p>
		</div>

		<hr />

		<hr class="is-large" />

		<div class="about__section">
			<h2 class="aligncenter" style="margin-bottom:0;">
				<?php
				printf(
					/* translators: %s: Version number. */
					__( 'WordPress %s for developers' ),
					$display_version
				);
				?>
			</h2>
		</div>

		<div class="about__section has-gutters has-2-columns">
			<div class="column is-edge-to-edge">
				<h3>
					新的后台配色
				</h3>
				<p>
					红色象征着喜庆，在这皆大欢喜的日子，我们为你的后台换上了Sunrise（日出）配色。当然，你也可以在个人资料处修改为你喜欢的配色。
				</p>
			</div>
			<div class="column is-edge-to-edge">
				<h3>
					剔除古腾堡
				</h3>
				<p>
					通过删除古腾堡编辑器及其附加组件，ArkPress 的安装包大小大幅缩减，现在，你在整个 ArkPress 都看不到区块的踪影！
				</p>
			</div>
		</div>
		<div class="about__section has-gutters has-2-columns">
			<div class="column is-edge-to-edge">
				<h3>
					长期更新支持
				</h3>
				<p>
					ArkPress 将长期维护更新，以保证兼容最新版本的 PHP 和 Database，并保持同步 WordPress 提供的安全更新。我们保证，绝不引入区块相关的功能。
				</p>
			</div>
			<div class="column is-edge-to-edge">
				<h3>
					问题与支持
				</h3>
				<p>
					ArkPress 由 LitePress 团队负责维护，有关 ArkPress 的问题均可在 <a target="_blank" href="https://litepress.cn/forums">LitePress社区</a> 发帖咨询，我们将竭力予以解答。
				</p>
			</div>
		</div>

		<hr />

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>">
					<?php is_multisite() ? _e( 'Go to Updates' ) : _e( 'Go to Dashboard &rarr; Updates' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? _e( 'Go to Dashboard &rarr; Home' ) : _e( 'Go to Dashboard' ); ?></a>
		</div>
	</div>

<?php require_once ABSPATH . 'wp-admin/admin-footer.php'; ?>

<?php

// These are strings we may use to describe maintenance/security releases, where we aim for no new strings.
return;

__( 'Maintenance Release' );
__( 'Maintenance Releases' );

__( 'Security Release' );
__( 'Security Releases' );

__( 'Maintenance and Security Release' );
__( 'Maintenance and Security Releases' );

/* translators: %s: WordPress version number. */
__( '<strong>Version %s</strong> addressed one security issue.' );
/* translators: %s: WordPress version number. */
__( '<strong>Version %s</strong> addressed some security issues.' );

/* translators: 1: WordPress version number, 2: Plural number of bugs. */
_n_noop(
	'<strong>Version %1$s</strong> addressed %2$s bug.',
	'<strong>Version %1$s</strong> addressed %2$s bugs.'
);

/* translators: 1: WordPress version number, 2: Plural number of bugs. Singular security issue. */
_n_noop(
	'<strong>Version %1$s</strong> addressed a security issue and fixed %2$s bug.',
	'<strong>Version %1$s</strong> addressed a security issue and fixed %2$s bugs.'
);

/* translators: 1: WordPress version number, 2: Plural number of bugs. More than one security issue. */
_n_noop(
	'<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bug.',
	'<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bugs.'
);

/* translators: %s: Documentation URL. */
__( 'For more information, see <a href="%s">the release notes</a>.' );
