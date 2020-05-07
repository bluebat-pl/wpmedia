<?php

/**
 * Plugin Name: Wp Media Crawler
 * Plugin URI: https://gitlab.com/Bluebat/wp-media
 * Description: Site map crawler
 * Version: 1.0
 * Author: Ratajszczak Witold
 * Author URI: http://bluebat.pl
 */


add_action('admin_menu', 'wpMediaCrawlerInit');
add_action('wp_ajax_my_action', 'runCrawler');
add_action('crawlerCronHook', 'runCrawler');

add_filter('cron_schedules', 'crawlerCronInterval');

wp_schedule_event(time(),'Crawler cron interval', 'crawlerCronHook');
if (!wp_next_scheduled( 'crawlerCronHook')) {
    wp_schedule_event(time(),'everyHour','crawlerCronHook');
}

function wpMediaCrawlerInit()
{
    add_menu_page(
        'Wp Media Crawler Preferences',
        'Wp Media Crawler',
        'administrator',
        __FILE__,
        'wpMediaSettingsPage',
        'dashicons-admin-generic'
    );
}

function wpMediaSettingsPage()
{
    include_once 'views' . DIRECTORY_SEPARATOR . 'crawlerAdminSettings.html';
}

function runCrawler()
{
    include_once 'app' . DIRECTORY_SEPARATOR . 'Storage.php';
    include_once 'app' . DIRECTORY_SEPARATOR . 'Crawler.php';
    echo (new Crawler(new Storage()))->crawl();
    wp_die();
}

function crawlerCronInterval($schedules)
{
    $schedules['everyHour'] = [
        'interval' => 3600,
        'display'  => esc_html__( 'Crawler cron interval' ),
    ];

    return $schedules;
}