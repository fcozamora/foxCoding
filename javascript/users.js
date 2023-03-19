<script>
    function tableCall(){
        $.ajax({url:"../Models/adminTableModel.php", success:function(result){$("div").text(result);}
        })
    }
</script>