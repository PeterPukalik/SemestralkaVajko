//<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

$(document).ready(function(){
    $('#reviewform').submit(function(e){
        e.preventDefault(); // Prevent the form from submitting normally
        var formData = $(this).serialize(); // Get all the form data as an object

        var valid = true;
        $('input').each(function() {
            console.log($(this).val())
            if($(this).val() === '') {
                valid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });

        if(valid) {
           // alert("here");
            console.log(formData)
            $.ajax({
                type: 'POST',
                url: '?c=review&a=add',
                data: formData,
                success: function(response){}
            });
            document.getElementById("reviewform").reset();
        } else {
            alert('Please fill in all the form inputs');
        }
    });
});