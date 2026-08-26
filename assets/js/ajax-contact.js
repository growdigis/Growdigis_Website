// $(function(){
//     var form=$('#contact-form');
//     const apiURL = 'https://script.google.com/macros/s/AKfycbzK60F3eAJD_QSoNdeobcVAAOho-AEBI6diRuM4G-lr-PQIPXBMVTwe02exhDPYSuqYaQ/exec';
//     var formMessages=$('.form-message');
//     $(form).submit(function(e){
//         // $.ajax({
//         //     url:'https://api.apispreadsheets.com/data/19432/',
//         //     type:'post',
//         //     data:$("#contact-form").serializeArray(),
//         //     success: function(){
//         //       console.log('done')
//         //       alert("Form Data Submitted :)")
//         //     },
//         //     error: function(){
//         //         console.log('err')
//         //       alert("There was an error :(")
//         //     }
//         // });
//         e.preventDefault();
//         var formData=$(form).serialize();
//         console.log(formData, form)
//         $.ajax({
//             type:'POST',
//             url: apiURL,
//             data: new FormData(form)
//         })
//         .done(function(response){
//             $(formMessages).removeClass('error');
//             $(formMessages).addClass('success');
//             $(formMessages).text(response);
//             $('#contact-form input,#contact-form textarea').val('');
//         }).fail(function(data){
//             $(formMessages).removeClass('success');
//             $(formMessages).addClass('error');
//             if(data.responseText!==''){
//                 $(formMessages).text(data.responseText);
//             }else{
//                 $(formMessages).text('Oops! An error occured and your message could not be sent.');
//             }
//         });
//     });
// });


// let submitBtn = document.getElementById('Submit');
  
// // Adding event listener to form submit button 
// submitBtn.addEventListener('click', (event) => {
  
//     // Preventing form to submit
//     event.preventDefault();
      
//     // Fetching Form data
//     let name = document.getElementById('name').value;
//     let email = document.getElementById('email').value;
//     let service = document.getElementById('service').value;
  
//     // jQuery Ajax Post Request
//     $.post('../components/submit.php', {
  
//         // Sending Form data
//         name : name,
//         email : email,
//         service : service
//     }, (response) => {
  
//         // Response from PHP back-end
//         console.log(response);
//     });
// });