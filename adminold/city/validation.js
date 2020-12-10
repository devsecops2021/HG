// Validation Functions for create, update and delete modal starts
function create_validation(){
    var input = document.getElementById("create_modal").value;
    var input1 = document.getElementById("create_modal_input1").value;
    var input2 = document.getElementById("create_modal_input2").value;
    // var input3 = document.getElementById("create_modal_input3").value;
    if(input === ''){
        alert("Country input field is empty");
        create_modal.style.border = "solid 3px red";
        return false;
    }
    else if(input1 === ''){
        alert("State input field is empty");
        create_modal_input1.style.border = "solid 3px red";
        return false;
    }
    else if(input2 === ''){
        alert("City input field is empty");
        create_modal_input2.style.border = "solid 3px red";
        return false;
    }
    else{
        return confirm("Do you want to create this record?");
    }
}

function update_validation(){
    var input = document.getElementById("update_modal").value;
    var input1 = document.getElementById("update_modal_input1").value;
    var input2 = document.getElementById("update_modal_input2").value;
        if(input === ''){
        alert("Country input field is empty");
        update_modal.style.border = "solid 3px red";
        return false;
    }
    else if(input1 === ''){
        alert("State input field is empty");
        update_modal_input1.style.border = "solid 3px red";
        return false;
    }
    else if(input2 === ''){
        alert("City input field is empty");
        update_modal_input2.style.border = "solid 3px red";
        return false;
    }
    else{
        return confirm("Do you want to update this record?");
    }
}

function delete_validation(){
    var input = document.getElementById("delete_modal").value;
        if(input === ''){
        alert("Country input field is empty");
        delete_modal.style.border = "solid 3px red";
        return false;
    }
    else{
        return confirm("Do you want to delete this record?");
    }
}
// Validation Functions for create, update and delete modal ends