jQuery(document).ready(function($) {
    jQuery('#crawlerResult').hide();
});

function runCrawler()
{
    var data = {
        'action': 'my_action'
    };

    jQuery.get(ajaxurl, data, function(response) {
        jQuery('#crawlerSiteMap').html(response);
        jQuery('#crawlerResult').show();
    });
}
