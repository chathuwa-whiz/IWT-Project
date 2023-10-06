// admin pages
function vehicleDelete() {
    if(confirm("Operation Successful!")) {
        window.open('../src/adminDashboard.php');
    } else {
        txt = '';
    }
}