$(document).ready(function () {

    /*
     * Generate canonical name for news/event name
     */
    $('#newsevents-title').keyup(function () {
        var name = slug($(this).val());
        $('#newsevents-canonical_name').val(name);
    });
    /*
     * Generate canonical name for sevice name
     */
    $('#services-service_title').keyup(function () {
        var name = slug($(this).val());
        $('#services-canonical_name').val(name);
    });
    /*
     * Generate canonical name for product name
     */
    $('#products-product_title').keyup(function () {
        var name = slug($(this).val());
        $('#products-canonical_name').val(name);
    });

});
var slug = function (str) {
    var $slug = '';
    var trimmed = $.trim(str);
    $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
            replace(/-+/g, '-').
            replace(/^-|-$/g, '');
    return $slug.toLowerCase();
}


