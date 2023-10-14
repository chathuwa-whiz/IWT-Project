//--------------------------------------------------------- Navod's js----------------------------------------------------------------
function toggleDarkMode() {
    const body = document.querySelector('body');
    body.classList.toggle('dark-mode');
    console.log(body.classList);
}


//--------------------------------------------------------- yasitha's js--------------------------------------------------------------
function onFormsubmit(){
    alert("payment successfull");
    // readFormdata();
}
function readFormdata(){
    var formdata ={};
    formdata["First Name"]=document.getElementById("firstname").value;
    formdata["last name"]=document.getElementById("lastanme").value;
    formdata["email"]=document.getElementById("email").value;
    formdata["address"]=document.getElementById("address").value;
    formdata["City"]=document.getElementById("City").value;
    formdata["State"]=document.getElementById("State").value;
    formdata["ZIP CODE"]=document.getElementById("zipcode").value;
    formdata["Name of the card"]=document.getElementById("cardtype").value;
    formdata["exp month "]=document.getElementById("month").value;
    formdata["exp year"]=document.getElementById("year").value;
    formdata["CVV"]=document.getElementById("CVV").value;
    return formdata;
}

 function insertnewrecord(data){
    var table = document.getElementById("paymentlist").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML =data.firsname;
    cell2 = newRow.insertCell(0);
    cell2.innerHTML =data.lastname;
    cell3 = newRow.insertCell(0);
    cell3.innerHTML =data.email;
    cell4 = newRow.insertCell(0);
    cell4.innerHTML =data.address;
    cell5 = newRow.insertCell(0);
    cell5.innerHTML =data.City;
    cell6 = newRow.insertCell(0);
    cell6.innerHTML =data.State;
    cell7 = newRow.insertCell(0);
    cell7.innerHTML =data.zipcode;
    cell8 = newRow.insertCell(0);
    cell8.innerHTML =data.cardtype;
    cell9 = newRow.insertCell(0);
    cell9.innerHTML =data.month;
    cell10 = newRow.insertCell(0);
    cell10.innerHTML =data.year;
    cell11 = newRow.insertCell(0);
    cell11.innerHTML =data.CVV;
    
 }