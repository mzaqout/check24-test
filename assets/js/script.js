$(document).ready(function (message) {
    $('.delete_comment').on('click', function(e) {
        e.preventDefault()

        if( confirm('Are you sure you want to delete this comment?') == true) {
            var comment_id = $(this).data('id')
            var url = $(this).data('url')
            $.ajax({
                url: url,
                type: 'POST',

                data: {
                    comment_id: comment_id
                },
                success: function(data) {
                    if($.parseJSON(data).success) {
                        $('#comment_' + comment_id).remove()
                    }
                }
            })
        }
    })

    $('.author_link').on('click', function(e) {

    })
});