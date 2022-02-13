<?php
/**
 * Core Administration API
 *
 * @package ArkPress
 * @subpackage Administration
 * @since 2.3.0
 */

if ( ! defined( 'WP_ADMIN' ) ) {
	/*
	 * This file is being included from a file other than wp-admin/admin.php, so
	 * some setup was skipped. Make sure the admin message catalog is loaded since
	 * load_default_textdomain() will not have done so in this context.
	 */
	load_textdomain( 'default', WP_LANG_DIR . '/admin-' . get_locale() . '.mo' );
}

/**  ArkPress Administration Hooks */
require_once ABSPATH . 'wp-admin/includes/admin-filters.php';

/**  ArkPress Bookmark Administration API */
require_once ABSPATH . 'wp-admin/includes/bookmark.php';

/**  ArkPress Comment Administration API */
require_once ABSPATH . 'wp-admin/includes/comment.php';

/**  ArkPress Administration File API */
require_once ABSPATH . 'wp-admin/includes/file.php';

/**  ArkPress Image Administration API */
require_once ABSPATH . 'wp-admin/includes/image.php';

/**  ArkPress Media Administration API */
require_once ABSPATH . 'wp-admin/includes/media.php';

/**  ArkPress Import Administration API */
require_once ABSPATH . 'wp-admin/includes/import.php';

/**  ArkPress Misc Administration API */
require_once ABSPATH . 'wp-admin/includes/misc.php';

/**  ArkPress Misc Administration API */
require_once ABSPATH . 'wp-admin/includes/class-wp-privacy-policy-content.php';

/**  ArkPress Options Administration API */
require_once ABSPATH . 'wp-admin/includes/options.php';

/**  ArkPress Plugin Administration API */
require_once ABSPATH . 'wp-admin/includes/plugin.php';

/**  ArkPress Post Administration API */
require_once ABSPATH . 'wp-admin/includes/post.php';

/**  ArkPress Administration Screen API */
require_once ABSPATH . 'wp-admin/includes/class-wp-screen.php';
require_once ABSPATH . 'wp-admin/includes/screen.php';

/**  ArkPress Taxonomy Administration API */
require_once ABSPATH . 'wp-admin/includes/taxonomy.php';

/**  ArkPress Template Administration API */
require_once ABSPATH . 'wp-admin/includes/template.php';

/**  ArkPress List Table Administration API and base class */
require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
require_once ABSPATH . 'wp-admin/includes/class-wp-list-table-compat.php';
require_once ABSPATH . 'wp-admin/includes/list-table.php';

/**  ArkPress Theme Administration API */
require_once ABSPATH . 'wp-admin/includes/theme.php';

/**  ArkPress Privacy Functions */
require_once ABSPATH . 'wp-admin/includes/privacy-tools.php';

/**  ArkPress Privacy List Table classes. */
// Previously in wp-admin/includes/user.php. Need to be loaded for backward compatibility.
require_once ABSPATH . 'wp-admin/includes/class-wp-privacy-requests-table.php';
require_once ABSPATH . 'wp-admin/includes/class-wp-privacy-data-export-requests-list-table.php';
require_once ABSPATH . 'wp-admin/includes/class-wp-privacy-data-removal-requests-list-table.php';

/**  ArkPress User Administration API */
require_once ABSPATH . 'wp-admin/includes/user.php';

/**  ArkPress Site Icon API */
require_once ABSPATH . 'wp-admin/includes/class-wp-site-icon.php';

/**  ArkPress Update Administration API */
require_once ABSPATH . 'wp-admin/includes/update.php';

/**  ArkPress Deprecated Administration API */
require_once ABSPATH . 'wp-admin/includes/deprecated.php';

/**  ArkPress Multisite support API */
if ( is_multisite() ) {
	require_once ABSPATH . 'wp-admin/includes/ms-admin-filters.php';
	require_once ABSPATH . 'wp-admin/includes/ms.php';
	require_once ABSPATH . 'wp-admin/includes/ms-deprecated.php';
}
