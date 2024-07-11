document.addEventListener('DOMContentLoaded', function () {
    var elem = document.querySelector('#posts');
    var infScroll = new InfiniteScroll( elem, {
        path: function() {
            return '/fetch-posts?page=' + ( this.loadCount + 2 );
        },
        append: '.post',
        history: false,
        status: '#loader',
    });

    infScroll.on( 'append', function( body, path, items, response ) {
        if (!response) {
            document.querySelector('#loader').style.display = 'none';
        }
    });
});
