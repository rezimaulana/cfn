    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
    function action_confirm(){
        if($('.checkbox:checked').length > 0){
            var result = confirm("Are you sure to perform this operation?");
            if(result){
                return true;
            }else{
                return false;
            }
        }else{
            alert('Please select at least 1 record to perform this operation!');
            return false;
        }
    }

    $(document).ready(function(){
        $('#mstable').DataTable();
        $('#select_all').on('click',function(){
            if(this.checked){
                $('.checkbox').each(function(){
                    this.checked = true;
                });
            }else{
                $('.checkbox').each(function(){
                    this.checked = false;
                });
            }
        });
        $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#select_all').prop('checked',true);
            }else{
                $('#select_all').prop('checked',false);
            }
        });
    });
    </script>