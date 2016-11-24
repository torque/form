function setTheDate() {
    var element = document.getElementById('studate');
    var dt = new Date();
    var day = dt.getDate();
    var month = parseInt(dt.getMonth()) + 1;
    var year = dt.getFullYear();
    if(element.type == 'text') {
        var val = month+"/"+day+"/"+year;
        document.getElementById('studate').value = val;
        return;
    }
    if(element.type == 'date') {
        var val = year+"-"+month+"-"+day;
        document.getElementById('studate').value = val;
    }
}
function setName(id) {
    checkLetters(id);
    var fname = document.getElementById('first_name').value;
    var lname = document.getElementById('last_name').value;
    document.getElementById('stusign').value = fname+" "+lname;
}
function engrCheck() {
    var val = parseInt(document.getElementById('total').value);
    if(isNaN(val)) {
        val = 0;
    }
    if(document.getElementById('engineerTotal').checked) {
        document.getElementById('total').value = val + 150;
        document.getElementById('engineerTotal').value = "true";
    } else {
        document.getElementById('engineerTotal').value = "false";
        if(val > 150) {
            document.getElementById('total').value -= "150";
        } else {
            document.getElementById('total').value = "";
        }
    }
}
function yesnoCheck() {
    if (document.getElementById('RA').checked) {
    	document.getElementById('RAYes').style.display = 'block';
        document.getElementById('TAYes').style.display = 'none';
        document.getElementById("is_ra").value="true";
    } else {
        document.getElementById('RAYes').style.display = 'none';
        document.getElementById('TAYes').style.display = 'block';
        document.getElementById("is_ra").value="false";
    }
}
function checkId(id,len) {
    var val = document.getElementById(id).value;
    var prev_val = "";
    for(var i = 0; i < val.length; i++) {
        if(i < len) {
            if(!isNaN(val[i])) {
                prev_val += val[i];
            } else {
                break;
            }
        } else {
            break;
        }
    }
    document.getElementById(id).value = prev_val;
}
function checkDate(id) {
    var val = document.getElementById(id).value;
    var prev_val = "";
    var regex = /[^0-9/]/
    for(var i = 0; i < val.length; i++) {
        if(regex.test(val[i])) {
            break;
        } else {
            prev_val += val[i];
        }
    }
    document.getElementById(id).value = prev_val;
}
function checkLetters(id,space=false) {
    var val = document.getElementById(id).value;
    var prev_val = "";
    if(space) {
        var regex = /[^a-zA-Z ]/
    } else {
        var regex = /[^a-zA-Z]/
    }
    for(var i = 0; i < val.length; i++) {
        if(regex.test(val[i])) {
            break;
        } else {
           prev_val += val[i];
        }
    }
    document.getElementById(id).value = prev_val;
}
function checkAlphaNumeric(id,space=false) {
    var val = document.getElementById(id).value;
    var prev_val = "";
    if(space) {
        var regex = /[^a-zA-Z0-9 ]/
    } else {
        var regex = /[^a-zA-Z0-9]/
    }
    for(var i = 0; i < val.length; i++) {
        if(regex.test(val[i])) {
            break;
        } else {
           prev_val += val[i];
        }
    }
    document.getElementById(id).value = prev_val;
}
function findTotal(){
    if(document.getElementById('ta_option').value == "Full Time") {
        document.getElementById('cred_max').value = 8;
    } else if(document.getElementById('ta_option').value == "2/3 Time") {
        document.getElementById('cred_max').value = 5;
    } else {
        document.getElementById('cred_max').value = 2;
    }
    var array = document.querySelectorAll('.cc');
    var total = 0;
    for(var i = 0; i < array.length; i++) {
        var target = "credit".concat(i + 1);
        var val = parseInt(array[i].value);
        var temp = "cval".concat(i+1);
        if(!isNaN(val)) {
            var oldval = parseInt(document.getElementById(temp).value);
            if(0 < val && val < 5) {
                total += val;
                document.getElementById(target).value = val;
                document.getElementById(temp).value = val;
            } else {
                total += oldval;
                if(oldval == 0) {
                    document.getElementById(target).value = "";
                } else {
                    document.getElementById(target).value = oldval;
                }
            }
        } else {
            document.getElementById(target).value = "";
            document.getElementById(temp).value = 0;
        }
    }
    document.getElementById('cred_total').value = total;
    if(total > parseInt(document.getElementById('cred_max').value)) {
        total = parseInt(document.getElementById('cred_max').value);
    }
    if(document.getElementById('engineerTotal').checked) {
        document.getElementById('total').value = (total * 925) + 150;
    } else {
        if(total == 0) {
            document.getElementById('total').value = "";
        } else {
            document.getElementById('total').value = total * 925;
        }
    }
}
function addClass() {
    var number = parseInt(document.getElementById('course_val').value);
    if(number < 8) {
        number += 1;
        if(document.getElementById('class_'+number).style.display = "none") {
            if(!isNaN(document.getElementById('credit'+(number-1)).value)) {
                if(document.getElementById('cred_total').value < document.getElementById('cred_max').value) {
                    document.getElementById('class_'+number).style.display = "block";
                    document.getElementById('class_'+number+'_break').style.display = "block";
                    document.getElementById('course_val').value = number;
                }
            }
        }
    }
}
function removeClass() {
    var number = parseInt(document.getElementById('course_val').value);
    if(number > 1) {
        if(document.getElementById('class_'+number).style.display == "block") {
            document.getElementById('course_val').value = number - 1;
            document.getElementById('class_'+number).style.display = "none";
            document.getElementById('cid'+number).value='';
            document.getElementById('ctitle'+number).value="";
            document.getElementById('credit'+number).value="";
            document.getElementById('class_'+number+'_break').style.display = "none";
            findTotal();
        }
    }
}
