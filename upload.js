 $(document).ready(function(){
      $("#upload").click(function(){
          var image = $("#image").val();
          var text = $("#text").val();
         
          
          var datastring = '&image1='+ image + '&text1='+ text;
          
          if(image==''||text==''){
              $("#display").html("Please Fill All The Required* Fields!");
          }
          
          else{
              $.ajax({
                  type: "POST",
                  url: "uploading.php",
                  data: datastring,
                  cache: false,
                  success: function(result){
                      $("#display").html(result);
                      
                  }
              });
          }
          return false;
      });
      });  
    