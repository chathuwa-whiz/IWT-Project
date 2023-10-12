// admin pages
function vehicleDelete() {
    if(confirm("Operation Successful!")) {
        window.open('../src/adminDashboard.php');
    } else {
        txt = '';
    }
}

function loginCredentials() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    
    alert("Username: " + username + "\nPassword: " + password);
}