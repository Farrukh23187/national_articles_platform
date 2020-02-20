<script>
    $(document).ready(function(){
        $("#findBtn").click(function(){
            var cat = $("#CategoryId").val();

            var author = $('#AuthorId').val();

            var key_words = $('#key_words').val();

            $.ajax({
                type: 'get',
                dataType: 'html',
                url: '{{url('/filterArticles')}}',
                data: 'cat_id=' + cat + '&key_words=' + key_words + '&author_id=' + author,
                success:function(response){
                    console.log(response);
                    $("#productData").html(response);
                }
            });
        });
    });
</script>