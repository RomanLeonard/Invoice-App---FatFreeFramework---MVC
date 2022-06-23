$(document).ready(function(){
    // util. -> get URL parameter
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    };
    // util. -> UNIVERSAL SEARCH
    $('#universal-search-btn').on('click', function(){
        var query = $('#universal-search').val();
        window.location = '?query=' + query + '&page=1';
    })

    /*




    */

    // code...
})