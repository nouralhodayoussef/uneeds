function validation(){
    
    if((document.Formfill.fname.value="") && (document.Formfill.lname.value="")){
        document.getElementById("result").innerHTML="Enter your first name and your last name."
    }
    else if(document.Formfill.fname.value=""){
        document.getElementById("result").innerHTML="Enter your first name.";
    }
    else if(document.Formfill.lname.value=""){
        document.getElementById("result").innerHTML="Enter your last name."
    }
}