<script src="https://cdn.tiny.cloud/1/3t7ccwcsjg5fzawtofteih5g1nmne0niezwd9ncn875ymu68/tinymce/5/tinymce.min.js"></script> 
<script>
    tinymce.init({
    selector: 'textarea',
    height: 400,
    menubar: false,
    plugins: [
        'advlist autolink lists link image charmap print preview anchor textcolor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code help wordcount'
    ],
    toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
    content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css']
    });
    jQuery('.mydatepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
    $(".select2").select2();
</script>
                                        
