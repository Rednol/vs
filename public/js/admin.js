$(function () {

    $("li").click(function () {
        $('.active').removeClass('active');
        $(this).addClass('active');

        if (this.id == "student") {
            $('.student').css("display", "block");
        } else {
            $('.student').css("display", "none");
        }

        if (this.id == "docent") {
            $('.docent').css("display", "block");
        } else {
            $('.docent').css("display", "none");
        }

        if (this.id == "coach") {
            $('.coach').css("display", "block");
        } else {
            $('.coach').css("display", "none");
        }

    });
});