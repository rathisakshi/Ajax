$(document).ready(function() {
    // Submit form via Ajax
    $('#add-item-form').submit(function(event) {
      event.preventDefault();
      var form = $(this);
      var url = form.attr('action');
      var method = form.attr('method');
      var data = form.serialize();
  
      $.ajax({
        url: url,
        type: method,
        data: data,
        success: function(response) {
          console.log(response);
          $('#item-table tbody').append(response);
          form[0].reset();
        },
        error: function(xhr, textStatus, errorThrown) {
          console.log(xhr.responseText);
        }
    
      });
    });
});
  
    // Delete item via Ajax
//     $(document).on('click', '.delete-item', function() {
//       var row = $(this).closest('tr');
//       var id = row.data('id');
//       var url = 'delete.php';
  
//       $.ajax({
//         url: url,
//         type: 'POST',
//         data: { id: id },
//         success: function(response) {
//           console.log(response);
//           row.remove();
//         },
//         error: function(xhr, textStatus, errorThrown) {
//           console.log(xhr.responseText);
//         }
//       });
//     });
//   });
  