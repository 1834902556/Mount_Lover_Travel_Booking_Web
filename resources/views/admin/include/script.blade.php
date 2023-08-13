        <script src="{{asset('/')}}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/')}}admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('/')}}admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{asset('/')}}admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('/')}}admin/assets/libs/node-waves/waves.min.js"></script>

        <script src="{{asset('/')}}admin/assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="{{asset('/')}}admin/assets/js/pages/dashboard.init.js"></script>

        <script src="{{asset('/')}}admin/assets/js/app.js"></script>
        <script src="{{asset('/')}}admin/assets/js/dropify.min.js"></script>
        <script>
            $(document).ready(function() {
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove: 'Supprimer',
                        error: 'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element) {
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element) {
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element) {
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e) {
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
</script>
<script>
    $(function(){
        $(document).on('change','#placeId',function(){
            var placeId = $(this).val();
            $.ajax({
                type:"GET",
                url:"{{url('/tour/get-spots-by-place')}}",
                data:{id:placeId},
                dataType:"JSON",
                success: function (response) {
                    var spotId = $('#spotId');
                    spotId.empty();
                    var option = '';
                    option += '<option selected disabled>Select Spot</option>';
                    $.each(response,function(key,value){
                         option += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                    spotId.append(option);
                }
            });
        });
    })
</script>
