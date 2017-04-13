<?php

  if ($_SERVER['REQUEST_METHOD']=="POST"){
//Variables.

$user_name = $_REQUEST['fullName'];
$user_company = $_REQUEST['Company'];

$user_address = $_REQUEST['Address1'];
$user_city = $_REQUEST['City'];
$user_state = $_REQUEST['stateProvinces'];
$user_zip = $_REQUEST['ZIPPostalCode'];

$user_phone = $_REQUEST['Phone'];
$user_email = $_REQUEST['email'];

$user_Quote = $_REQUEST['quoteDue'];

$user_gateNum = $_REQUEST['gateNumReq'];
$user_gateMat = $_REQUEST['material'];
$user_gateType = $_REQUEST['gateType'];
$user_gateShape = $_REQUEST['gateShape'];

$user_gateWidth1 = $_REQUEST['gateWidth1'];
$user_gateHeight2 = $_REQUEST['gateHeight2'];
$user_gateWidth3 = $_REQUEST['gateWidth3'];
$user_gateHeight4 = $_REQUEST['gateHeight4'];
$user_gateDiameter1 = $_REQUEST['gateDiameter1'];
$user_gateDiameter = $_REQUEST['gateDiameter2'];

$hoiReq = $_REQUEST['hoiReq'];
$hoiTy = $_REQUEST['hoiTyp'];
$stCov = $_REQUEST['stCov'];
$stTy = $_REQUEST['stType'];

$user_OFE = $_REQUEST['OFE'];
$user_InOpFl = $_REQUEST['InOpFl'];
$user_InEl = $_REQUEST['InEl'];
$user_OSH = $_REQUEST['OSH'];
$user_OUH = $_REQUEST['OUH'];

$user_gateMountType = $_REQUEST['gateMountType'];
$user_designSHead = $_REQUEST['designSHead'];
$user_designUHead = $_REQUEST['designUHead'];

$user_comments = $_REQUEST['comments'];

// TO-DO List: <---------------------------- <---------------------------- <---------------------------- <---------------------------- <---------------------------- <----------------------------
//   - Add multiple gate info fields
//   - If (gate number required > 1) { for i=1, i<GNR, ++i } ( createNewForm + type in additional gate information ) + (code form) + (php form) + (validation);
//   - Upload drawings/specs for quote
//   - Finish quotationForm.php
//   - Upload files
//   - ???
//   - Profit

$user_check = stripos("$user_email","@");

//Body of the email to be sent.
$body_mail = "Hello Mechanical Associates, someone wants a quote. Details:
Name: $user_name
Email: $user_email
Company: $user_company
Phone: $user_phone

Address: $user_address
City: $user_city
State: $user_state
ZIP/Postal Code: $user_zip

Quote is due: $user_Quote

Number of gates desired:  $user_gateNum
Type of gate: $user_gateType
Gate material type: $user_gateMat
Gate Shape (if a Flap Gate): $user_gateShape
Note: Ignore Gate Shape if Flap Gate is not chosen

Gate Width: $user_gateWidth1
Gate Height: $user_gateHeight2
Mud Valve Gate Diameter: $user_gateDiameter1


<---------------------- This information pertains to Flap Gates. Use this information if quote asks for Flap Gates. ---------------------->
Flap Gate Width: $user_gateWidth3
Flap Gate Height: $user_gateHeight4
Gate Diameter: $user_gateDiameter2
<---------------------- This information pertains to Flap Gates. Use this information if quote asks for Flap Gates. ---------------------->

Hoist required: $hoiReq
Hoist type: $hoiTy
Stem cover: $stCov
Stem type: $stTy

Operating Floor Elevation: $user_OFE
INV. to OPER. FL.: $user_InOpFl
Invert Elevation: $user_InEl
Operating Seating Head: $user_designSHead
Operating Unseating Head: $user_designUHead

Comments, Suggestions, Etc.: $user_comments";

//Everything okay? send the e-mail.
mail("sales@mechanical-associates.com",'Mechanical Associates Quote Request',"$body_mail","from:Mechanical Associates");
    echo "Your email was sent! Thank you.";
}
?>
