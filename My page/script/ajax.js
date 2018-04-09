$('document').ready(function () {

    var info = {
        content: 'home',
    }

    $('.navItem').click(function () {
        var $content = $(this).attr('data-content');
        loadContent($content);
        
    })

    initialContent(info.content);

    function initialContent(content) {
        loadContent(content);
        greeting()
    }

    function loadContent(content) {

        $.ajax({
            url: 'loader.php',
            type: 'post',
            data: {
                Content: content
            },
            success: function (response) {
                $('.content').html(response);
                info.content = content;

            }
        })
    }

});