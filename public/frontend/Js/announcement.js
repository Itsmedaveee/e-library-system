$(document).ready(function () {
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $('#top-news-div').html('');
    $('#more-news').html('');

    $('#loading-news').removeClass('hidden');
    $.ajax({
        type: "POST",
        url: "ajax/get-news.php",
        data: "tag=0",
        success: function (response) {
            $('#top-news-div').html(response);
            $('#loading-news').addClass('hidden');

        }
    });

    $('#loading-more-news').removeClass('hidden');

    $.ajax({
        type: "POST",
        url: "ajax/get-news.php",
        data: "tag=0&show_more=true",
        success: function (response) {
            $('#more-news').html(response);
            $('#loading-more-news').addClass('hidden');
            $('#view-news-archive').removeClass('hidden');
        }
    });

    $('#procurement-list').html('');
    //PROCUREMENT
    $.ajax({
        type: "POST",
        url: "ajax/get-procurement.php",
        success: function (response) {
            $('#procurement-list').append(response);
        }
    });

    $('#announcements-list').html('');
    //PROCUREMENT
    $.ajax({
        type: "POST",
        url: "ajax/get-announcements.php",
        success: function (response) {
            $('#announcements-list').append(response);
        }
    });

    $('#events-list').html('');
    //PROCUREMENT
    $.ajax({
        type: "POST",
        url: "ajax/get-events-list.php",
        success: function (response) {
            $('#events-list').append(response);
        }
    });
});

$(window).load(function () {
    //$(".start-div").fadeOut("slow");
});