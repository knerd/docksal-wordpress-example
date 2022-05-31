<?php
  use knerd\WP_Config;
  require_once( __DIR__ . '/vendor/knerd/wp-config/class.php' );


  $table_prefix = 'wp_';

  /**
   * WP_Config
   * add any WordPress Constant to the array below.
   * quickly set your content and wp dir using the WP_DIR and and WP_CONTENT options
   */

  new WP_Config([
    // CONFIG SCHEME & FILE STRUCTURE
      'SITE_SCHEME'           => 'http',       //* WORDPRESS SITE SCHEME
      'DIR'                   => __DIR__,       //* Current Directory
      'DOCROOT'               => 'public',      //* PUBLIC DIRECTORY
      'WP_CONTENT'            => 'wp-content',  //* WORDPRESS CONTENT DIRECTORY
      'WP_DIR'                => '',            //* BLANK UNLESS WORDPRESS IS IN SUB DIRECTORY
    // OFFICIAL WORDPRESS CONSTANTS
      // DB SETTINGS
      'DB_CHARSET'            => 'utf8',
      'DB_COLLATE'            => '',
      // DEFAULT DB CREDENTIALS
      'DB_HOST'               => 'db',
      'DB_NAME'               => 'default',
      'DB_USER'               => 'user',
      'DB_PASSWORD'           => 'user',
      'DB_PREFIX'             => $table_prefix,
      // Speed & Security
      'COMPRESS_SCRIPTS'      => true,
      'COMPRESS_CSS'          => true,
      'ENFORCE_GZIP'          => true,
      // 'FORCE_SSL_LOGIN'       => true,
      // 'FORCE_SSL_ADMIN'       => true,
      'WP_DEBUG'              => true,
      'WP_CACHE'              => false,
      'WPLANG'                => '',
      'WP_MEMORY_LIMIT'       => '128M',
      'WP_MAX_MEMORY_LIMIT'   => '256M',
      'WP_POST_REVISIONS'     => 20,
    // END: OFFICIAL

    // THIRD PARTIES
      // Configure Redis host
      'WP_REDIS_HOST'         => 'redis',
      // Migrate Pro License 
      'WPMDB_LICENCE'         => ''
  ]);

  /* That's all, stop editing! Happy blogging. */