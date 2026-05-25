"use strict";
$(document).ready(function() {
    $("nav > ul > li > ul > li:first-child").click( function() {
        $(this).parent().parent().siblings().children().children("li:not(:first-child)").hide();
        $(this).siblings().toggle();
    })
});
