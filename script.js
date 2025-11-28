$(document).ready(function() {

    $("#submitBtn").click(function() {

        let phone = $("#phone").val();

        // Phone number validation
        if (phone.length != 10 || isNaN(phone)) {
            alert("Phone number must be 10 digits.");
            return false;
        }

        return true;
    });

});
