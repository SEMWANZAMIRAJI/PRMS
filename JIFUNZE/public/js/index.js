
// START => JS FOR PASSWORD CONFIRM
var newpass = document.getElementById('newpassword');
var confirmpass = document.getElementById('confirmpassword');
var cerror = document.getElementById('confirmerror');

confirmpass.addEventListener('keyup', function() {
    var valuenewpass = newpass.value;
    var valueconfirmpass = confirmpass.value;

    if(valuenewpass == '')
    {
        cerror.innerHTML("New Password is Empty");
        // newpass.style.border = "1px solid red";
    }
    else
    {
        if(valuenewpass == valueconfirmpass)
        {
            cerror.innerHTML("Password match");
            confirmpass.style.border = "1px solid green";
            cerror.classList.remove('text-danger');
            cerror.classList.add('text-success');
        }
        else
        {
            cerror.innerHTML("Password's dont match");
            confirmpass.style.border = "1px solid red";
            cerror.classList.add('text-danger');
            cerror.classList.remove('text-success');
        }
    }
});