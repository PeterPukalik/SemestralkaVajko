$(document).ready(function(){
    $('reviewform').submit(function(e){
        e.preventDefault(); // Prevent the form from submitting normally
        var formData = $(this).serialize(); // Get all the form data as an object

        var valid = true;
        $('input').each(function() {
            if($(this).val() === '') {
                valid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });

        if(valid) {
            $.ajax({
                type: 'POST',
                url: '?c=review&a=add',
                data: formData,
                success: function(response) {
                    if(response == true) {
                        alert('Form submitted successfully');
                        // Redirect to another page or show a success message

                    } else {
                        alert('Form submission failed. Please check the inputs and try again.');
                    }
                }
            });
        } else {
            alert('Please fill in all the form inputs');
        }
    });
});