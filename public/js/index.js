/**
 * Created by feng on 17-8-27.
 */
$.get('/comment', function (data) {
    $('#comments').html(data);
})