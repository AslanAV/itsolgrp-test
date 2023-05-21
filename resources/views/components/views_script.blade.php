    <script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".view-btn-submit-{{ $article->id }}").click(function(e){

        e.preventDefault();

        $.ajax({
            type:'POST',
            url:"{{ route('api_views_post') }}",
            data:{article_id:{{ $article->id }}},
            success:function(data){
                document.location.replace("{{ route('article', $article) }}");
            }
        });

    });
</script>
