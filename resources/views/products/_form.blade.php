
<div class="panel panel-default">
    <div class="panel-heading"><h3>Add product</h3></div>
    <div class="panel-body">
        <form id="add-product">
            <div class="input-group">
                <label for="name">Name: </label><input name="name" type="text"/>
            </div>
            <div class="input-group">
                <label for="quantity">Starting Qty: </label><input name="quantity" type="text"/>
            </div>
            <div class="input-group">
                <label for="price">Price: </label><input name="price" type="text"/>
            </div>
            <input type="submit" value="Submit"/>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Set form submit handler
        $("#add-product").submit(function() {
            var datastring = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "/products",
                data: datastring,
                dataType: "json",
                success: function(data) {

                },
                error: function(ee) {
                    console.log(ee);
                }
            });
            return false;
        });
    })
</script>