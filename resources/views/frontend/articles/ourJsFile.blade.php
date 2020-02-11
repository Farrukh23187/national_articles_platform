<script>
    $(document).ready(function(){
        $("#findBtn").click(function(){
            var cat = $("#CategoryId").val();
            // var price = $('#priceID').val();
alert(cat);
            $.ajax({
                type: 'get',
                dataType: 'html',
                url: '{{url('/filterArticles')}}',
                data: 'cat_id=' + cat,
                success:function(response){
                    console.log(response);
                    $("#productData").html(response);
                }
            });
        });
    });
</script>