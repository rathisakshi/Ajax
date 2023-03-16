$(document).ready(function() {
    $('#submit-button').click(function() {
      var file = $('#image-file')[0].files[0];//represents the selected image file
      if (!file || !file.type.match(/^image\//)) {
        alert('Please select an image file.');
        return;
      }
  
      var formData = new FormData();
      formData.append('image', file);//selected image file appended to it
  
      $.ajax({
        url: '4.php',
        type: 'POST',
        data: formData ,
        contentType: false,
        processData: false,
        success: function(response) {
          $('#image-container').html('<img src="' + response + '">');//response has the url of uplaoded image
        }
      });
    });
  });
  
// this code is without validation
// $(document).ready(function() {
//     $('#submit-button').click(function() {
//       var formData = new FormData();
//       formData.append('image', $('#image-file')[0].files[0]);
  
//       $.ajax({
//         url: '4.php',
//         type: 'POST',
//         data: formData,
//         contentType: false,
//         processData: false,
//         success: function(response) {
//           // handle response from server
//           $('#image-container').html('<img src="uploads/' + response + '">');
//         }
//       });
//     });
//   });
  