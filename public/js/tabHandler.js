(function() {
    var url = document.location.toString();
    var splitted = url.split('#');
    if (splitted.length > 1) {
        var tab = splitted[1];
        var tabSelector = '.nav-pills a[href="#' + tab + '"]';
        $(tabSelector).tab('show');
    }

    $(document).on('shown.bs.tab', function (e) {
        window.location.hash = e.target.hash;
    });

})();