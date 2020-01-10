/*
Template Name: Admin Pro Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function() {
    "use strict";

    // ==============================================================
    // Our Visitor
    // ==============================================================

    var chart = c3.generate({
        bindto: '#visitor',
        data: {
            columns: [
                ['Embarques Completados', 45],
                ['Embarques en Proceso', 27],
                ['Pendientes', 2]
            ],

            type: 'donut',
            onclick: function(d, i) { console.log("onclick", d, i); },
            onmouseover: function(d, i) { console.log("onmouseover", d, i); },
            onmouseout: function(d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
            },
            title: "75%",
            width: 25,
        },

        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
        color: {
            pattern: ['#40c4ff', '#2961ff', '#ff821c']
        }
    });

    var sparkResize;

    $(window).resize(function(e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 500);
    });
    sparklineLogin();

});
