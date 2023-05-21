    <script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".like-btn-submit").click(function(e){

        e.preventDefault();

        $.ajax({
            type:'POST',
            url:"{{ route('api_likes_post') }}",
            data:{article_id:{{ $article->id }}},
            success:function(data){
                alert(data.message);
                document.location.replace("{{ route('article', $article) }}");
            }
        });

    });
</script>
