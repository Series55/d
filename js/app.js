



$(function () {
/*$('.login-btn').click(function () {
    alert("click");
    return false;
 });*/
 $('.login-form').submit(function (e) {
      e.preventDefault();
      var formData=$(this).serializeArray();
     //console.log(formData);

   $.ajax({
    url:"ajax.php",
    type:"post",
    dataType:"json",
    data:formData,
    success:function(response) {
        console.log(response);
        alert(response.email + " - " + response.password);
    }
    
    
    });





  });



});
