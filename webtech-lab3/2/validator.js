function validateForm(){
    let idnumber = document.forms["myForm"]["idnum"].value;
    let fname = document.forms["myForm"]["firstName"].value;
    let sname = document.forms["myForm"]["lastName"].value;
    let address = document.forms["myForm"]["address"].value;
    let tumbon = document.forms["myForm"]["Tum"].value;
    let um = document.forms["myForm"]["um"].value;
    let postal = document.forms["myForm"]["idh"].value;
    let phonenum = document.forms["myForm"]["callnum"].value;
    let sth = '';

    var num1 = 0;
    var num2 = 0;
    for (i = 0; i < address.length; i++){
        if (address[i] == '\n'){
            num1 += 1;
        }
        else if (num1 == 1){
            num2 += 1;
        }
    }

    if (isNaN(idnumber) || idnumber.length != 13){
        sth += "- ID number must be number and has 13 characters\n";
    }
    
    if (20 < fname.length || fname.length < 2){
        sth += "- Firstname must has 2-20 characters\n";
    }

    if (30 < sname.length || sname.length < 2){
        sth += "- Lastname must has 2-30 characters\n";
    }
    
    if (address.length - num2 - num1 < 5 || num1 != 1 || num2 < 5){
        sth += "- Address must has 2 lines and more than 4 characters in each line\n";
    }

    if (tumbon.length < 2){
        sth += "- Sub-district must has more than 1 character\n";
    }

    if (um.length == 0){
        sth += "- District must filled in\n";
    }

    if (isNaN(postal) || postal.length != 5){
        sth += "- Postal code must be number and has 5 characters\n"
    }

    if (isNaN(phonenum) || (phonenum.length != 9 && phonenum.length != 10)){
        sth += "- Phone number must be number and has 9-10 characters\n"
    }

    if (sth != ''){
    alert(sth);
    return false;
    }
}
