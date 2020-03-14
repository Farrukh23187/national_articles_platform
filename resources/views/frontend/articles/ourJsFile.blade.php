<script>
    $(document).ready(function(){
        $("#findBtn").click(function(){
            var cat = $("#categoryId").val();

            var author = $('#authors').val();

            var key_words = $('#key_words').val();

            $.ajax({
                type: 'get',
                dataType: 'html',
                url: '{{url('/filterArticles')}}',
                data: 'cat_id=' + cat + '&key_words=' + key_words + '&authors=' + author,
                success:function(response){
                    console.log(response);
                    $("#productData").html(response);
                }
            });
        });
    });
</script>