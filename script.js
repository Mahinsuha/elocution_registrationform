

    alert("JavaScript is working!");
$(document).ready(function() {
    $('#submit-btn').click(function(e) {
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var topic = $('#topic').val();

        if (name === "" || email === "" || phone === "" || topic === "") {
            alert("Please fill in all fields.");
            return false;
        }

        $.ajax({
            type: 'POST',
            url: 'process.php',
            data: {
                name: name,
                email: email,
                phone: phone,
                topic: topic
            },
            success: function(response) {
                $('#response').html(response);
            }
        });
    });
});

