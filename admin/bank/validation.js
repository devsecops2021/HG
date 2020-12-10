// Validation Functions for create, update and delete modal starts
    var input_length = document.getElementById("create_modal").value.length; 

function create_validation(){
    var input = document.getElementById("create_modal").value;
    var input_branch = document.getElementById("create_modal_input1").value;
    var input_ro = document.getElementById("create_modal_input2").value;
    alert(input_length);
    // var input_address = document.getElementById("create_modal_input3").value;
    if(input === ''){
        alert("Bank name input field is empty");
        create_modal.style.border = "solid 3px red";
        return false;
    }
    else if(input_branch === ''){
        alert("Branch name input field is empty");
        create_modal_input1.style.border = "solid 3px red";
        return false;
    }
    else if(input_ro === '0'){
        alert("RO name input field is empty");
        create_modal_input2.style.border = "solid 3px red";
        return false;
    }
    else{
        return confirm("Do you want to create this record?");
    }
}

// function update_validation(){
//     var input = document.getElementById("update_modal").value;
//         if(input == ''){
//         alert("Department input field is empty");
//         update_modal.style.border = "solid 3px red";
//         return false;
//     }
//     else{
//         return confirm("Do you want to update this record");
//     }
// }

// function delete_validation(){
//     var input = document.getElementById("delete_modal").value;
//         if(input == ''){
//         alert("Department input field is empty");
//         delete_modal.style.border = "solid 3px red";
//         return false;
//     }
//     else{
//         return confirm("Do you want to delete this record");
//     }
// }
// Validation Functions for create, update and delete modal ends