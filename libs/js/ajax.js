// $(function() {
//     // Get the form.
//     var form = $('#point_submit_form');
//
//
//     // Set up an event listener for the contact form.
//     $(form).submit(function(event) {
//         // Stop the browser from submitting the form.
//         event.preventDefault();
//         // Serialize the form data.
//         var formData = $(form).serialize();
//
//         // Submit the form using AJAX.
//         $.ajax({
//             type: 'POST',
//             url: 'judgePost.php',
//             data: formData
//         })
//
//         .done(function(response) {
//             // Make sure that the formMessages div has the 'success' class.
//             // Set the message text.
//
//             // Clear the form.
//             $('#point_value').placeholder('Submitted');
//         })
//     });
// });

// $(function() {
//     $(".button").click(function() {
//         // validate and process form here
//         $.ajax({
//             type: "POST",
//             url: "bin/process.php",
//             data: dataString,
//             success: function() {
//                 $('#contact_form').html("<div id='message'></div>");
//                 $('#message').html("<h2>Contact Form Submitted!</h2>")
//                     .append("<p>We will be in touch soon.</p>")
//                     .hide()
//                     .fadeIn(1500, function() {
//                         $('#message').append("<img id='checkmark' src='images/check.png' />");
//                     });
//             }
//         });
//         return false;
//
//     });
// });