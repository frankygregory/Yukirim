
</div>
<!-- /#wrapper -->

<script>
    $(document).ready(function() {
        var removeButton = "<input type='button' id='remove' class='btn btn-danger' value='Remove'>";
        $('#additems').click(function() {
            $('div.items:last').after($('div.items:first').clone());
            $('div.items:last').append(removeButton);
        });

        $('#remove').click(function() {
            $(this).closest('div.items').remove();
        });
    });
</script>
</body>

</html>
