$(document).ready(function(){
    $("#register-form").submit(function(e){
        e.preventDefault();

        var email = $("input[name='email']").val();
        var phone = $("input[name='phone']").val();
        var password = $("input[name='password']").val();
        var confirm_password = $("input[name='confirm_password']").val();

        if (email == "" || phone == "" || password == "" || confirm_password == "") {
            alert("Please fill all fields!");
            return false;
        } else if (password != confirm_password) {
            alert("Passwords do not match!");
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "register.php",
                data: { email: email, phone: phone, password: password },
                success: function(data){
                    alert(data);
                    window.location.href = "login.html";
                }
            });
        }
    });
});
