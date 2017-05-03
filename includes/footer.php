
</div><br><br>
<div class="col-md-12 text-center" id="footer">&copy 2017 Project by Daniel, Jonathan, Ryan, & Charlie</div>

<script>
    function detailsmodal(id){
        var data = {"id":id};
        jQuery.ajax({
            url:'/DatabaseGroupwork/includes/detailsModal.php',
            method:"post",
            data:data,
            success: function (data) {
                jQuery('body').append(data);
                jQuery('#details-modal').modal('toggle');
            },
            error: function () {
                alert("Somethings not working pal.")
            }
        });
    }
</script>
</body>
</html>