$(document).ready(function(){
 
  // console.log(filename);
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data != '')
    {
      console.log(form_data);
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(x)
   {
    $('#display_comment').html(x);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  // console.log(comment_id_value);
  var comment_id_serialize = 'id='+comment_id;
  $('#comment_content').focus();
  //document.getElementById("comment_content").document.getElementById().scrollIntoView();
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   data:comment_id_serialize,
   success:function(comment)
   {
    $('#display_comment').html(comment);
   }
  })
 });

 $(document).on('click','#submit_reply',function(e){
  e.preventDefault();
  
  $.ajax({
    type: "POST",
    url: "add_comment.php",
    data: { 
        comment_name: $("#comment_name").val(),
        comment_content: $('#comment_content').val(),
        comment_id: $('#comment_id').val(),
        blog_name: $('#blog_name').val(),
    },
    success:function(x){

      
    }
  })
  
  alert("hello world");

  
});
 
});