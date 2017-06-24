/**
 * Created by armandofm on 6/22/17.
 */
$(document).ready( function () {
    $(".button-collapse").sideNav();

    $('select').material_select();

    $('select').on('contentChanged', function() {
        // re-initialize (update)
        $(this).material_select();
    });
})
