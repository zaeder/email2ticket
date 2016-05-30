jQuery(function($){
    $(document).ready(function(){
        var installUrl = window.location.href.replace(/app(_dev)?.php/, 'install/composerInstall.php');
        $('#retry').hide();
        $('#next').hide();
        $('#loader').show();
        $.post( installUrl, function() {
            $('#loader').hide();
            $('#next').show();
        }).fail(function(data) {
            $('#loader').hide();
            alert(data.responseText);
            $('#retry').show();
        });
    });
});