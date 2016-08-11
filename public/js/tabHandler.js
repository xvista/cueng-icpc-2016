(function() {
    var url = document.location.toString();
    var splitted = url.split('#');
    if (splitted.length > 1) {
        var tab = splitted[1];
        if (tab === 'member1-form' || tab === 'member2-form' || tab === 'member3-form') {
            tab = 'registration';
        }
        var tabSelector = '.nav-pills a[href="#' + tab + '"]';
        $(tabSelector).tab('show');
    }

    $(document).on('shown.bs.tab', function (e) {
        var baseUrl = window.location.href.split('#')[0];
        window.location.replace(baseUrl + e.target.hash);
    });

})();