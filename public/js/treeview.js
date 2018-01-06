$(function () {
    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > span').on('click', function (e) {
        if($(this).hasClass("oi-plus").toString() == 'true'){
            $(this).removeClass("oi-plus");
            $(this).addClass("oi-minus");
        }
        else{
            $(this).removeClass("oi oi-minus");
            $(this).addClass("oi oi-plus");
        }
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');

        } else {
            children.show('fast');
        }
        e.stopPropagation();
    });
});
