<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".comment-btn-submit").click(function (e){

        e.preventDefault();

        const subject = $("#subject").val();
        const body = $("#body").val();

        $.ajax({
            type:'POST',
            url:"{{ route('api_comments_post') }}",
            data:{"article_id": {{ $article->id }}, "subject":subject, "body":body},
            success:function(data){
                alert(data.message)
                document.location.replace("{{ route('article', $article) }}");
            }
        });

    });
</script>
