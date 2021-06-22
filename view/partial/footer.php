</div>
<script>
    $(document).ready(function () {
        //  $("button").click(function(){
        $.get("main", function (data) {
            $('#resultHead').html(data);
            getapi()
            $('.active').trigger('click');
        });
    });

    function getapi() {
        $("button").click(function () {
            $('.active').removeClass('active')
            const data_url = $(this).attr('data-url');
              getPage(data_url);
            $(this).addClass('active')
        });
    }

    function getPage(pageId) {
        $.get(pageId, function (data) {
            $('#result').html(data);
        });
    }
</script>

</body>
</html>
