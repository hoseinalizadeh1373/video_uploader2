
<script type="text/javascript"> 

$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
    }

var files;
var len=0;
let aa = document.getElementById('file_id');
$("#file_id").change(function(e){
     files =$("#file_id")[0].files;
    len = files.length;
});     
$(function () {
            $(document).ready(function () {
       
                $('#fileUploadForm').ajaxForm({
                
                    beforeSend: function () {
                        var percentage = '0';
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                    
                        if(len!=0){                      
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage+'%', function() {
                          return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                    }
                        
                    },
                    complete: function (xhr) {
                    
                    
                    if(len==0 || xhr.hasOwnProperty("responseJSON")){
                     printErrorMsg(xhr['responseJSON'].errors);
                         }
                         else if(len>0 && !xhr.hasOwnProperty("responseJSON")){
                            window.location.href = "{{URL::to('/')}}";
                         }
                        
                    }
                
                
                });
            
            });
        
        });

    
    function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
    }


    $(document).on("click", "#btn_show", function () {
     var myvideo = $(this).data('id');
     var myurl = $(this).data('url');
  
     $("#title").text( myvideo['title'] );
     $("#desc_video").text(myvideo['desc']);
     let vid = document.getElementById("video_play");
     vid.src = myurl;
    
});


var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})



</script>
</body>
</html>