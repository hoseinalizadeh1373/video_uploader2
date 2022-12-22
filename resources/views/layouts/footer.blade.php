
<script type="text/javascript"> 

let sss =$('#file_id').val(); 

if( sss!=''){
$(function () {
            $(document).ready(function () {

                $('#fileUploadForm').ajaxForm({
                
                    beforeSend: function () {
                        var percentage = '0';
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        // let sss =  document.getElementById("file_id").value;
                                          
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage+'%', function() {
                          return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                        
                    },
                    complete: function (xhr) {
                        // let s = xhr['responseJSON'].message;
                        // if(s.length==0){
                     // window.location.href = "{{URL::to('/')}}";
                        // }
                        
                    }
                
                
                });
            
            });
        
        });
    }
    

    $(document).on("click", "#btn_show", function () {
     var myvideo = $(this).data('id');
     var myurl = $(this).data('url');
  console.log(myurl);
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