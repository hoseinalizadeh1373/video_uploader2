
<script type="text/javascript"> 

$(function () {
            $(document).ready(function () {
                $('#fileUploadForm').ajaxForm({
                    beforeSend: function () {
                        var percentage = '0';
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage+'%', function() {
                          return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                    },
                    complete: function (xhr) {
                        window.location.href = "{{URL::to('/')}}"
                    }
                });
            });
        });


    $(document).on("click", "#btn_show", function () {
     var myvideo = $(this).data('id');
     var myurl = $(this).data('url');
  console.log(myurl);
     $("#title").text( myvideo['title'] );
     $("#desc_video").text(myvideo['desc']);
     let vid = document.getElementById("video_play");
     let source = document.getElementById("src_video");
     vid.src = myurl;
    //  $("#video_play > source").attr("src", myurl);​
});
// document.getElementById("btn_show").addEventListener('click',function(){
// alert("s");
// });

var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})



</script>
</body>
</html>