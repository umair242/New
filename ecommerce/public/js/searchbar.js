/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//$(document).ready(function(){
//    jQuery('#searchBtn').click(function(){
//        event.preventDefault();
//        alert();
//    });
//});


function getSearchProducts() {

    var searchText = $('#searchText').val();
    var data = {};

    data.searchData = searchText;

    $.ajax({
        method: 'POST',
        url: base_url + "/getSearchProducts",
        data: data,
        success: function(res) {
            var produts = JSON.parse(res);
            var html = "";
            if (produts.status == 200) {
                var productsData = produts.result;
                $.each(productsData, function(k, v) {
                    html += "<li>";

                    html += "<img src='" + base_url + '/products/' + v.name + '/' + v.image + "' alt='" + v.name + "'>";

                    html += "<div class='title'>" + v.name + "</div>";
                    html += "<div class='price'>" + v.wstart + "</div>";

                    html += "</li>";
                });
                $('#search_products').html(html);
//                console.log(html);

            }
        },
        errors: function() {

        }
    });

    console.log();
}