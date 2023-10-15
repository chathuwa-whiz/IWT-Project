//--------------------------------------------------------- Navod's js----------------------------------------------------------------
function deleteVehicleConfirm(id) {
    if(confirm("Are you sure you want to delete this record?")) {
        window.location.href = 'deleteVehicle.php?deleteVehicleId='+id;
    } else {
        window.location.href = 'adminVehicleDashboard.php';
    }
}

function deleteUserConfirm(id) {
    if(confirm("Are you sure you want to delete this record?")) {
        window.location.href = 'deleteUser.php?deleteUserId='+id;
    } else {
        window.location.href = 'adminUserDashboard.php';
    }
}


//--------------------------------------------------------- yasitha's js--------------------------------------------------------------
function payButton() {
    if(confirm("Payment Successfull")) {
        window.location.href = '../index.php';
    } else {
        window.location.href = '../index.php';
    }
}