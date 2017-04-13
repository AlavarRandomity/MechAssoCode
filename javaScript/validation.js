// Validate Form
       function validating() {
var reason = "";

  reason += validatefullName(fullName);
  reason += validateCompany(Company);
  reason += validateAddress1(Address1);
  reason += validateCity(City);
  reason += validateState(State);
  reason += validateZIPPostalCode(ZIPPostalCode);
  reason += validatePhone(phone);
  reason += validateEmail(email);
  reason += validateGateNumber(gateNumReq);
  reason += validateGateMats();
  reason += validateGateType(gateType);
  reason += validateGateShape(gateShape);
  reason += validateGateWidth(gateSize1);
  reason += validateGateHeight(gateSize2);
  reason += validateGateWidth2(gateSize3);
  reason += validateGateHeight2(gateSize4);
  reason += validateGateDiameter(gateDiameter1);
  reason += validateGateDiameter2(gateDiameter2);

  if (reason != "") {
    alert("Some fields need to be fixed:\n\n" + reason);
    return false;
  }

  return true;
}

  function validateEmpty(fld) {
    var error = "";

    if (fld.value.length == 0) {
        fld.style.background = 'Yellow';
        error = "The required field has not been filled in.\n"
    } else {
        fld.style.background = 'White';
    }
    return error;
}

function validatefullName(fld) {
    var error = "";
    var illegalChars = /^[A-Za-z\d ]+$/; // allow letters, numbers, and underscores

    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter a name.\n";
    } else if (!fld.value.match(illegalChars)) {
        fld.style.background = 'Yellow';
        error = "Your name contains illegal characters. (i.e.: ?!@#$^%&) \n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}

function validateCompany(fld) {
    var error = "";
    var illegalChars = /\W/; // allow letters, numbers, and underscores

    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter a company name.\n\n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}

function validateAddress1(fld) {
    var error = "";
    var illegalChars = /\W/; // allow letters, numbers, and underscores

    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter an address.\n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}

function validateCity(fld) {
    var error = "";
    var illegalChars = /\W/; // allow letters, numbers, and underscores

    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter a city.\n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}

function validateState(fld) {
    var error = "";
    var illegalChars = /\W/; // allow letters, numbers, and underscores

    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter a state.\n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}

function validateZIPPostalCode(fld) {
    var error = "";
    var legitNumbers = /^[0-9]+$/;

    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter a ZIP/Postal Code.\n\n";
    } else if ((fld.value.length < 5) || (fld.value.length > 5)) {
        fld.style.background = 'Yellow';
        error = "The ZIP/Postal Code is the wrong length.\n\n";
    } else if (!fld.value.match(legitNumbers)) {
        fld.style.background = 'Yellow';
        error = "Please input numerical values in ZIP code.\n\n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}

function validatePhone(fld) {
    var error = "";
    var legitPhone = /^(()?\d{3}())?(-|\s)?\d{3}(-|\s)?\d{4}$/;

    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter a phone number.\n";
    } else if ((fld.value.length < 10) || (fld.value.length > 10)) {
        fld.style.background = 'Yellow';
        error = "The phone number is the wrong length.\n";
    } else if (!fld.value.match(legitPhone)) {
        fld.style.background = 'Yellow';
        error = "Please input numerical values in your phone number.\n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}

function validateEmail(fld) {
    var error = "";
    var x = document.forms["validGate"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");

    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter an email address.\n";
    } else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        error = "Not a valid e-mail address.\n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}

function validateGateNumber(fld) {
    var error = "";
    var legitGates = /^[0-9]+$/; // allows numbers only

    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter how much gates you needed.\n\n";
    } else if (!fld.value.match(legitGates)) {
        fld.style.background = 'Yellow';
        error = "Please input a number for how many gates.\n\n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}

function validateGateMats() {
    var error = "";
        if ($('input[name=material]:checked').length <= 0) {
            error = "Please choose the desired gate material. \n";
        }
        return error;
    }

function validateGateType(fld) {
    var error = "";

    if (fld.value == "") {
       error = "Please select a gate type. \n";
    } else {
       fld.style.background = 'White';
    }
    return error;
}

function validateGateShape(fld) {
    var error = "";

    if ((fld.value == "") & ($("#gateShape").is(":visible"))) {
       error = "Please select a gate shape. \n";
    } else {
       fld.style.background = 'White';
    }
    return error;
}

function validateGateWidth(fld) {
    var error = "";

    if ((fld.value == "") & ($("#gateSize1").is(":visible"))){
       error = "Please input the width of the gate. \n";
    }
    return error;
}

function validateGateHeight(fld) {
    var error = "";

    if ((fld.value == "") & ($("#gateSize2").is(":visible"))){
       error = "Please input the height of the gate. \n";
    }
    return error;
}

function validateGateWidth2(fld) {
    var error = "";

    if ((fld.value == "") & ($("#gateSize3").is(":visible"))){
       error = "Please input the width of the gate. \n";
    }
    return error;
}

function validateGateHeight2(fld) {
    var error = "";

    if ((fld.value == "") & ($("#gateSize4").is(":visible"))){
       error = "Please input the height of the gate. \n";
    }
    return error;
}

function validateGateDiameter(fld) {
    var error = "";

    if ((fld.value == "") & ($("#gateDiameter1").is(":visible"))){
       error = "Please input the diameter of the gate. \n";
    }
    return error;
}

function validateGateDiameter2(fld) {
    var error = "";

    if ((fld.value == "") & ($("#gateDiameter2").is(":visible"))){
       error = "Please input the diameter of the gate. \n";
    }
    return error;
}
