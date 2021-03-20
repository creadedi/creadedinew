<?php

return array(
	'version' => '0.9.4.1',
	'cluster.messagebus.debug' => false,
	'cluster.messagebus.enabled' => false,
	'cluster.messagebus.sns.region' => '',
	'cluster.messagebus.sns.api_key' => '',
	'cluster.messagebus.sns.api_secret' => '',
	'cluster.messagebus.sns.topic_arn' => '',
	'dbcache.debug' => false,
	'dbcache.enabled' => false,
	'dbcache.engine' => 'file',
	'dbcache.file.gc' => 3600,
	'dbcache.file.locking' => false,
	'dbcache.lifetime' => 180,
	'dbcache.memcached.persistant' => true,
	'dbcache.memcached.servers' => array(
		0 => '127.0.0.1:11211',
	),
	'dbcache.reject.cookie' => array(
	),
	'dbcache.reject.logged' => true,
	'dbcache.reject.sql' => array(
		0 => 'gdsr_',
		1 => 'wp_rg_',
		2 => '_wp_session_',
	),
	'dbcache.reject.uri' => array(
	),
	'dbcache.reject.words' => array(
		0 => '^\\s*insert\\b',
		1 => '^\\s*delete\\b',
		2 => '^\\s*update\\b',
		3 => '^\\s*replace\\b',
		4 => '^\\s*create\\b',
		5 => '^\\s*alter\\b',
		6 => '^\\s*show\\b',
		7 => '^\\s*set\\b',
		8 => '\\bautoload\\s+=\\s+\'yes\'',
		9 => '\\bsql_calc_found_rows\\b',
		10 => '\\bfound_rows\\(\\)',
		11 => '\\bw3tc_request_data\\b',
	),
	'objectcache.enabled' => false,
	'objectcache.debug' => false,
	'objectcache.engine' => 'file',
	'objectcache.file.gc' => 3600,
	'objectcache.file.locking' => false,
	'objectcache.memcached.servers' => array(
		0 => '127.0.0.1:11211',
	),
	'objectcache.memcached.persistant' => true,
	'objectcache.groups.global' => array(
		0 => 'users',
		1 => 'userlogins',
		2 => 'usermeta',
		3 => 'user_meta',
		4 => 'site-transient',
		5 => 'site-options',
		6 => 'site-lookup',
		7 => 'blog-lookup',
		8 => 'blog-details',
		9 => 'rss',
		10 => 'global-posts',
	),
	'objectcache.groups.nonpersistent' => array(
		0 => 'comment',
		1 => 'counts',
		2 => 'plugins',
	),
	'objectcache.lifetime' => 180,
	'objectcache.purge.all' => false,
	'fragmentcache.enabled' => false,
	'fragmentcache.debug' => false,
	'fragmentcache.engine' => 'file',
	'fragmentcache.file.gc' => 3600,
	'fragmentcache.file.locking' => false,
	'fragmentcache.memcached.servers' => array(
		0 => '127.0.0.1:11211',
	),
	'fragmentcache.memcached.persistant' => true,
	'fragmentcache.lifetime' => 180,
	'fragmentcache.groups' => array(
	),
	'pgcache.enabled' => false,
	'pgcache.comment_cookie_ttl' => 1800,
	'pgcache.debug' => false,
	'pgcache.engine' => 'file_generic',
	'pgcache.file.gc' => 3600,
	'pgcache.file.nfs' => false,
	'pgcache.file.locking' => false,
	'pgcache.lifetime' => 3600,
	'pgcache.memcached.servers' => array(
		0 => '127.0.0.1:11211',
	),
	'pgcache.memcached.persistant' => true,
	'pgcache.check.domain' => false,
	'pgcache.cache.query' => true,
	'pgcache.cache.home' => true,
	'pgcache.cache.feed' => false,
	'pgcache.cache.nginx_handle_xml' => false,
	'pgcache.cache.ssl' => false,
	'pgcache.cache.404' => false,
	'pgcache.cache.flush' => false,
	'pgcache.cache.headers' => array(
		0 => 'Last-Modified',
		1 => 'Content-Type',
		2 => 'X-Pingback',
		3 => 'P3P',
	),
	'pgcache.compatibility' => false,
	'pgcache.remove_charset' => false,
	'pgcache.accept.uri' => array(
		0 => 'sitemap(_index)?\\.xml(\\.gz)?',
		1 => '([a-z0-9_\\-]+)?sitemap\\.xsl',
		2 => '[a-z0-9_\\-]+-sitemap([0-9]+)?\\.xml(\\.gz)?',
	),
	'pgcache.accept.files' => array(
		0 => 'wp-comments-popup.php',
		1 => 'wp-links-opml.php',
		2 => 'wp-locations.php',
	),
	'pgcache.accept.qs' => array(
	),
	'pgcache.reject.front_page' => false,
	'pgcache.reject.logged' => true,
	'pgcache.reject.logged_roles' => false,
	'pgcache.reject.roles' => array(
	),
	'pgcache.reject.uri' => array(
		0 => 'wp-.*\\.php',
		1 => 'index\\.php',
	),
	'pgcache.reject.ua' => array(
	),
	'pgcache.reject.cookie' => array(
		0 => 'wptouch_switch_toggle',
	),
	'pgcache.reject.request_head' => false,
	'pgcache.purge.front_page' => false,
	'pgcache.purge.home' => true,
	'pgcache.purge.post' => true,
	'pgcache.purge.comments' => false,
	'pgcache.purge.author' => false,
	'pgcache.purge.terms' => false,
	'pgcache.purge.archive.daily' => false,
	'pgcache.purge.archive.monthly' => false,
	'pgcache.purge.archive.yearly' => false,
	'pgcache.purge.feed.blog' => true,
	'pgcache.purge.feed.comments' => false,
	'pgcache.purge.feed.author' => false,
	'pgcache.purge.feed.terms' => false,
	'pgcache.purge.feed.types' => array(
		0 => 'rss2',
	),
	'pgcache.purge.postpages_limit' => 10,
	'pgcache.purge.pages' => array(
	),
	'pgcache.purge.sitemap_regex' => '([a-z0-9_\\-]*?)sitemap([a-z0-9_\\-]*)?\\.xml',
	'pgcache.prime.enabled' => false,
	'pgcache.prime.interval' => 900,
	'pgcache.prime.limit' => 10,
	'pgcache.prime.sitemap' => '',
	'pgcache.prime.post.enabled' => false,
	'minify.enabled' => false,
	'minify.auto' => true,
	'minify.debug' => false,
	'minify.engine' => 'file',
	'minify.file.gc' => 86400,
	'minify.file.nfs' => false,
	'minify.file.locking' => false,
	'minify.memcached.servers' => array(
		0 => '127.0.0.1:11211',
	),
	'minify.memcached.persistant' => true,
	'minify.rewrite' => true,
	'minify.options' => array(
	),
	'minify.symlinks' => array(
	),
	'minify.lifetime' => 86400,
	'minify.upload' => true,
	'minify.html.enable' => false,
	'minify.html.engine' => 'html',
	'minify.html.reject.feed' => false,
	'minify.html.inline.css' => false,
	'minify.html.inline.js' => false,
	'minify.html.strip.crlf' => false,
	'minify.html.comments.ignore' => array(
		0 => 'google_ad_',
		1 => 'RSPEAK_',
	),
	'minify.css.enable' => true,
	'minify.css.engine' => 'css',
	'minify.css.combine' => false,
	'minify.css.strip.comments' => false,
	'minify.css.strip.crlf' => false,
	'minify.css.imports' => '',
	'minify.css.groups' => array(
	),
	'minify.js.enable' => true,
	'minify.js.engine' => 'js',
	'minify.js.combine.header' => false,
	'minify.js.header.embed_type' => 'blocking',
	'minify.js.combine.body' => false,
	'minify.js.body.embed_type' => 'blocking',
	'minify.js.combine.footer' => false,
	'minify.js.footer.embed_type' => 'blocking',
	'minify.js.strip.comments' => false,
	'minify.js.strip.crlf' => false,
	'minify.js.groups' => array(
	),
	'minify.yuijs.path.java' => 'java',
	'minify.yuijs.path.jar' => 'yuicompressor.jar',
	'minify.yuijs.options.line-break' => 5000,
	'minify.yuijs.options.nomunge' => false,
	'minify.yuijs.options.preserve-semi' => false,
	'minify.yuijs.options.disable-optimizations' => false,
	'minify.yuicss.path.java' => 'java',
	'minify.yuicss.path.jar' => 'yuicompressor.jar',
	'minify.yuicss.options.line-break' => 5000,
	'minify.ccjs.path.java' => 'java',
	'minify.ccjs.path.jar' => 'compiler.jar',
	'minify.ccjs.options.compilation_level' => 'SIMPLE_OPTIMIZATIONS',
	'minify.ccjs.options.formatting' => '',
	'minify.csstidy.options.remove_bslash' => true,
	'minify.csstidy.options.compress_colors' => true,
	'minify.csstidy.options.compress_font-weight' => true,
	'minify.csstidy.options.lowercase_s' => false,
	'minify.csstidy.options.optimise_shorthands' => 1,
	'minify.csstidy.options.remove_last_;' => false,
	'minify.csstidy.options.case_properties' => 1,
	'minify.csstidy.options.sort_properties' => false,
	'minify.csstidy.options.sort_selectors' => false,
	'minify.csstidy.options.merge_selectors' => 2,
	'minify.csstidy.options.discard_invalid_properties' => false,
	'minify.csstidy.options.css_level' => 'CSS2.1',
	'minify.csstidy.options.preserve_css' => false,
	'minify.csstidy.options.timestamp' => false,
	'minify.csstidy.options.template' => 'default',
	'minify.htmltidy.options.clean' => false,
	'minify.htmltidy.options.hide-comments' => true,
	'minify.htmltidy.options.wrap' => 0,
	'minify.reject.logged' => false,
	'minify.reject.ua' => array(
	),
	'minify.reject.uri' => array(
	),
	'minify.reject.files.js' => array(
	),
	'minify.reject.files.css' => array(
	),
	'minify.cache.files' => array(
		0 => 'https://ajax.googleapis.com',
	),
	'cdn.enabled' => false,
	'cdn.debug' => false,
	'cdn.engine' => 'maxcdn',
	'cdn.uploads.enable' => true,
	'cdn.includes.enable' => true,
	'cdn.includes.files' => '*.css;*.js;*.gif;*.png;*.jpg;*.xml',
	'cdn.theme.enable' => true,
	'cdn.theme.files' => '*.css;*.js;*.gif;*.png;*.jpg;*.ico;*.ttf;*.otf,*.woff,*.less',
	'cdn.minify.enable' => true,
	'cdn.custom.enable' => true,
	'cdn.custom.files' => array(
		0 => 'favicon.ico',
		1 => '{wp_content_dir}/gallery/*',
		2 => '{wp_content_dir}/uploads/avatars/*',
		3 => '{plugins_dir}/wordpress-seo/css/xml-sitemap.xsl',
		4 => '{plugins_dir}/wp-minify/min*',
		5 => '{plugins_dir}/*.js',
		6 => '{plugins_dir}/*.css',
		7 => '{plugins_dir}/*.gif',
		8 => '{plugins_dir}/*.jpg',
		9 => '{plugins_dir}/*.png',
	),
	'cdn.import.external' => false,
	'cdn.import.files' => false,
	'cdn.queue.interval' => 900,
	'cdn.queue.limit' => 25,
	'cdn.force.rewrite' => false,
	'cdn.autoupload.enabled' => false,
	'cdn.autoupload.interval' => 3600,
	'cdn.canonical_header' => false,
	'cdn.ftp.host' => '',
	'cdn.ftp.user' => '',
	'cdn.ftp.pass' => '',
	'cdn.ftp.path' => '',
	'cdn.ftp.pasv' => false,
	'cdn.ftp.domain' => array(
	),
	'cdn.ftp.ssl' => 'auto',
	'cdn.s3.key' => '',
	'cdn.s3.secret' => '',
	'cdn.s3.bucket' => '',
	'cdn.s3.cname' => array(
	),
	'cdn.s3.ssl' => 'auto',
	'cdn.cf.key' => '',
	'cdn.cf.secret' => '',
	'cdn.cf.bucket' => '',
	'cdn.cf.id' => '',
	'cdn.cf.cname' => array(
	),
	'cdn.cf.ssl' => 'auto',
	'cdn.cf2.key' => '',
	'cdn.cf2.secret' => '',
	'cdn.cf2.id' => '',
	'cdn.cf2.cname' => array(
	),
	'cdn.cf2.ssl' => '',
	'cdn.rscf.user' => '',
	'cdn.rscf.key' => '',
	'cdn.rscf.location' => 'us',
	'cdn.rscf.container' => '',
	'cdn.rscf.cname' => array(
	),
	'cdn.rscf.ssl' => 'auto',
	'cdn.azure.user' => '',
	'cdn.azure.key' => '',
	'cdn.azure.container' => '',
	'cdn.azure.cname' => array(
	),
	'cdn.azure.ssl' => 'auto',
	'cdn.mirror.domain' => array(
	),
	'cdn.mirror.ssl' => 'auto',
	'cdn.netdna.alias' => '',
	'cdn.netdna.consumerkey' => '',
	'cdn.netdna.consumersecret' => '',
	'cdn.netdna.authorization_key' => '',
	'cdn.netdna.domain' => array(
	),
	'cdn.netdna.ssl' => 'auto',
	'cdn.netdna.zone_id' => 0,
	'cdn.maxcdn.authorization_key' => '',
	'cdn.maxcdn.domain' => array(
	),
	'cdn.maxcdn.ssl' => 'auto',
	'cdn.maxcdn.zone_id' => 0,
	'cdn.cotendo.username' => '',
	'cdn.cotendo.password' => '',
	'cdn.cotendo.zones' => array(
	),
	'cdn.cotendo.domain' => array(
	),
	'cdn.cotendo.ssl' => 'auto',
	'cdn.akamai.username' => '',
	'cdn.akamai.password' => '',
	'cdn.akamai.email_notification' => array(
	),
	'cdn.akamai.action' => 'invalidate',
	'cdn.akamai.zone' => 'production',
	'cdn.akamai.domain' => array(
	),
	'cdn.akamai.ssl' => 'auto',
	'cdn.edgecast.account' => '',
	'cdn.edgecast.token' => '',
	'cdn.edgecast.domain' => array(
	),
	'cdn.edgecast.ssl' => 'auto',
	'cdn.att.account' => '',
	'cdn.att.token' => '',
	'cdn.att.domain' => array(
	),
	'cdn.att.ssl' => 'auto',
	'cdn.reject.admins' => false,
	'cdn.reject.logged_roles' => false,
	'cdn.reject.roles' => array(
	),
	'cdn.reject.ua' => array(
	),
	'cdn.reject.uri' => array(
	),
	'cdn.reject.files' => array(
		0 => '{uploads_dir}/wpcf7_captcha/*',
		1 => '{uploads_dir}/imagerotator.swf',
		2 => '{plugins_dir}/wp-fb-autoconnect/facebook-platform/channel.html',
	),
	'cdn.reject.ssl' => false,
	'cdncache.enabled' => false,
	'varnish.enabled' => false,
	'varnish.debug' => false,
	'varnish.servers' => array(
	),
	'browsercache.enabled' => true,
	'browsercache.no404wp' => false,
	'browsercache.no404wp.exceptions' => array(
		0 => 'robots\\.txt',
		1 => '[a-z0-9_\\-]*sitemap[a-z0-9_\\-]*\\.(xml|xsl|html)(\\.gz)?',
	),
	'browsercache.cssjs.last_modified' => true,
	'browsercache.cssjs.compression' => true,
	'browsercache.cssjs.expires' => false,
	'browsercache.cssjs.lifetime' => 31536000,
	'browsercache.cssjs.nocookies' => false,
	'browsercache.cssjs.cache.control' => false,
	'browsercache.cssjs.cache.policy' => 'cache_public_maxage',
	'browsercache.cssjs.etag' => false,
	'browsercache.cssjs.w3tc' => false,
	'browsercache.cssjs.replace' => false,
	'browsercache.html.compression' => true,
	'browsercache.html.last_modified' => true,
	'browsercache.html.expires' => false,
	'browsercache.html.lifetime' => 3600,
	'browsercache.html.cache.control' => false,
	'browsercache.html.cache.policy' => 'cache_public_maxage',
	'browsercache.html.etag' => false,
	'browsercache.html.w3tc' => false,
	'browsercache.html.replace' => false,
	'browsercache.other.last_modified' => true,
	'browsercache.other.compression' => true,
	'browsercache.other.expires' => false,
	'browsercache.other.lifetime' => 31536000,
	'browsercache.other.nocookies' => false,
	'browsercache.other.cache.control' => false,
	'browsercache.other.cache.policy' => 'cache_public_maxage',
	'browsercache.other.etag' => false,
	'browsercache.other.w3tc' => false,
	'browsercache.other.replace' => false,
	'browsercache.timestamp' => '',
	'browsercache.replace.exceptions' => array(
	),
	'mobile.enabled' => false,
	'mobile.rgroups' => array(
		'high' => array(
			'theme' => '',
			'enabled' => false,
			'redirect' => '',
			'agents' => array(
				0 => 'acer\\ s100',
				1 => 'android',
				2 => 'archos5',
				3 => 'bada',
				4 => 'bb10',
				5 => 'blackberry9500',
				6 => 'blackberry9530',
				7 => 'blackberry9550',
				8 => 'blackberry\\ 9800',
				9 => 'cupcake',
				10 => 'docomo\\ ht\\-03a',
				11 => 'dream',
				12 => 'froyo',
				13 => 'googlebot-mobile',
				14 => 'htc\\ hero',
				15 => 'htc\\ magic',
				16 => 'htc_dream',
				17 => 'htc_magic',
				18 => 'iemobile/7.0',
				19 => 'incognito',
				20 => 'ipad',
				21 => 'iphone',
				22 => 'ipod',
				23 => 'kindle',
				24 => 'lg\\-gw620',
				25 => 'liquid\\ build',
				26 => 'maemo',
				27 => 'mot\\-mb200',
				28 => 'mot\\-mb300',
				29 => 'nexus\\ one',
				30 => 'nexus\\ 7',
				31 => 'opera\\ mini',
				32 => 's8000',
				33 => 'samsung\\-s8000',
				34 => 'series60.*webkit',
				35 => 'series60/5\\.0',
				36 => 'sonyericssone10',
				37 => 'sonyericssonu20',
				38 => 'sonyericssonx10',
				39 => 't\\-mobile\\ mytouch\\ 3g',
				40 => 't\\-mobile\\ opal',
				41 => 'tattoo',
				42 => 'touch',
				43 => 'webmate',
				44 => 'webos',
			),
		),
		'low' => array(
			'theme' => '',
			'enabled' => false,
			'redirect' => '',
			'agents' => array(
				0 => '2\\.0\\ mmp',
				1 => '240x320',
				2 => 'alcatel',
				3 => 'amoi',
				4 => 'asus',
				5 => 'au\\-mic',
				6 => 'audiovox',
				7 => 'avantgo',
				8 => 'benq',
				9 => 'bird',
				10 => 'blackberry',
				11 => 'blazer',
				12 => 'cdm',
				13 => 'cellphone',
				14 => 'danger',
				15 => 'ddipocket',
				16 => 'docomo',
				17 => 'dopod',
				18 => 'elaine/3\\.0',
				19 => 'ericsson',
				20 => 'eudoraweb',
				21 => 'fly',
				22 => 'haier',
				23 => 'hiptop',
				24 => 'hp\\.ipaq',
				25 => 'htc',
				26 => 'huawei',
				27 => 'i\\-mobile',
				28 => 'iemobile',
				29 => 'iemobile/7',
				30 => 'iemobile/9',
				31 => 'j\\-phone',
				32 => 'kddi',
				33 => 'konka',
				34 => 'kwc',
				35 => 'kyocera/wx310k',
				36 => 'lenovo',
				37 => 'lg',
				38 => 'lg/u990',
				39 => 'lge\\ vx',
				40 => 'midp',
				41 => 'midp\\-2\\.0',
				42 => 'mmef20',
				43 => 'mmp',
				44 => 'mobilephone',
				45 => 'mot\\-v',
				46 => 'motorola',
				47 => 'msie\\ 10\\.0',
				48 => 'netfront',
				49 => 'newgen',
				50 => 'newt',
				51 => 'nintendo\\ ds',
				52 => 'nintendo\\ wii',
				53 => 'nitro',
				54 => 'nokia',
				55 => 'novarra',
				56 => 'o2',
				57 => 'openweb',
				58 => 'opera\\ mobi',
				59 => 'opera\\.mobi',
				60 => 'p160u',
				61 => 'palm',
				62 => 'panasonic',
				63 => 'pantech',
				64 => 'pdxgw',
				65 => 'pg',
				66 => 'philips',
				67 => 'phone',
				68 => 'playbook',
				69 => 'playstation\\ portable',
				70 => 'portalmmm',
				71 => '\\bppc\\b',
				72 => 'proxinet',
				73 => 'psp',
				74 => 'qtek',
				75 => 'sagem',
				76 => 'samsung',
				77 => 'sanyo',
				78 => 'sch',
				79 => 'sch\\-i800',
				80 => 'sec',
				81 => 'sendo',
				82 => 'sgh',
				83 => 'sharp',
				84 => 'sharp\\-tq\\-gx10',
				85 => 'small',
				86 => 'smartphone',
				87 => 'softbank',
				88 => 'sonyericsson',
				89 => 'sph',
				90 => 'symbian',
				91 => 'symbian\\ os',
				92 => 'symbianos',
				93 => 'toshiba',
				94 => 'treo',
				95 => 'ts21i\\-10',
				96 => 'up\\.browser',
				97 => 'up\\.link',
				98 => 'uts',
				99 => 'vertu',
				100 => 'vodafone',
				101 => 'wap',
				102 => 'willcome',
				103 => 'windows\\ ce',
				104 => 'windows\\.ce',
				105 => 'winwap',
				106 => 'xda',
				107 => 'xoom',
				108 => 'zte',
			),
		),
	),
	'referrer.enabled' => false,
	'referrer.rgroups' => array(
		'search_engines' => array(
			'theme' => '',
			'enabled' => false,
			'redirect' => '',
			'referrers' => array(
				0 => 'google\\.com',
				1 => 'yahoo\\.com',
				2 => 'bing\\.com',
				3 => 'ask\\.com',
				4 => 'msn\\.com',
			),
		),
	),
	'common.support' => '',
	'common.install' => 0,
	'common.tweeted' => false,
	'config.check' => true,
	'config.path' => '',
	'widget.latest.items' => 3,
	'widget.latest_news.items' => 5,
	'widget.pagespeed.enabled' => true,
	'widget.pagespeed.key' => '',
	'notes.wp_content_changed_perms' => true,
	'notes.wp_content_perms' => true,
	'notes.theme_changed' => false,
	'notes.wp_upgraded' => false,
	'notes.plugins_updated' => false,
	'notes.cdn_upload' => false,
	'notes.cdn_reupload' => false,
	'notes.need_empty_pgcache' => false,
	'notes.need_empty_minify' => false,
	'notes.need_empty_objectcache' => false,
	'notes.root_rules' => true,
	'notes.rules' => true,
	'notes.pgcache_rules_wpsc' => true,
	'notes.support_us' => true,
	'notes.no_curl' => true,
	'notes.no_zlib' => true,
	'notes.zlib_output_compression' => true,
	'notes.no_permalink_rules' => true,
	'notes.browsercache_rules_no404wp' => true,
	'timelimit.email_send' => 180,
	'timelimit.varnish_purge' => 300,
	'timelimit.cache_flush' => 600,
	'timelimit.cache_gc' => 600,
	'timelimit.cdn_upload' => 600,
	'timelimit.cdn_delete' => 300,
	'timelimit.cdn_purge' => 300,
	'timelimit.cdn_import' => 600,
	'timelimit.cdn_test' => 300,
	'timelimit.cdn_container_create' => 300,
	'timelimit.domain_rename' => 120,
	'timelimit.minify_recommendations' => 600,
	'minify.auto.filename_length' => 150,
	'minify.auto.disable_filename_length_test' => false,
	'common.instance_id' => 30505792,
	'common.force_master' => true,
	'newrelic.enabled' => false,
	'newrelic.api_key' => '',
	'newrelic.account_id' => '',
	'newrelic.application_id' => 0,
	'newrelic.appname' => '',
	'newrelic.accept.logged_roles' => true,
	'newrelic.accept.roles' => array(
		0 => 'contributor',
	),
	'newrelic.use_php_function' => true,
	'notes.new_relic_page_load_notification' => true,
	'newrelic.appname_prefix' => 'Child Site - ',
	'newrelic.merge_with_network' => true,
	'newrelic.cache_time' => 5,
	'newrelic.enable_xmit' => false,
	'newrelic.use_network_wide_id' => false,
	'pgcache.late_init' => false,
	'newrelic.include_rum' => true,
	'extensions.settings' => array(
		'genesis.theme' => array(
			'wp_head' => '0',
			'genesis_header' => '1',
			'genesis_do_nav' => '0',
			'genesis_do_subnav' => '0',
			'loop_front_page' => '1',
			'loop_terms' => '1',
			'flush_terms' => '1',
			'loop_single' => '1',
			'loop_single_excluded' => '',
			'loop_single_genesis_comments' => '0',
			'loop_single_genesis_pings' => '0',
			'sidebar' => '0',
			'sidebar_excluded' => '',
			'genesis_footer' => '1',
			'wp_footer' => '0',
			'reject_logged_roles' => '1',
			'reject_logged_roles_on_actions' => array(
				0 => 'genesis_loop',
				1 => 'wp_head',
				2 => 'wp_footer',
			),
			'reject_roles' => array(
				0 => 'administrator',
			),
		),
		'feedburner' => array(
			'urls' => '',
		),
	),
	'extensions.active' => array(
	),
	'plugin.license_key' => '',
	'plugin.type' => '',
);