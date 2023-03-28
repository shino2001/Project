<hr>
<div class="col-12">
    <div class="row gx-3 row-cols-4">
        <div class="col">
            
        </div>
        <div class="col">
            
        </div>
        <div class="col">
            
        </div>
        <div class="col">
            
        </div>
    </div>
</div>
<script>
    $(function(){
        $('.restock').click(function(){
            uni_modal('Add New Stock for <span class="text-primary">'+$(this).attr('data-name')+"</span>","manage_stock.php?pid="+$(this).attr('data-pid'))
        })
        $('table#inventory').dataTable()
    })
</script>