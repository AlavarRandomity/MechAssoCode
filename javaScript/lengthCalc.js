// <!-- Script by hscripts.com -->
<script type="text/javascript">
  function checnum(as)
  {
  var dd = as.value;

  if(isNaN(dd))
  {
  dd = dd.substring(0,(dd.length-1));
  as.value = dd;
  }
  } function inchconv(val){
  with(document.conv){
  cm.value = (Math.round(inch.value*2.54)).toFixed(2);
  feet.value=(Math.round(inch.value/12)).toFixed(2);
  var tmp=(inch.value* 2.54)*Math.pow(10,-5);
  kilo.value=((inch.value* 2.54)*Math.pow(10,-5)).toFixed(2);
  miles.value=((inch.value*1.58)*Math.pow(10,-5)).toFixed(2);
  } }
  function feetconv(val){
  with(document.conv){
  cm.value=(Math.round(feet.value*30.48)).toFixed(2);
  inch.value=(Math.round(feet.value*12)).toFixed(2);
  kilo.value=((feet.value* 3.05)*Math.pow(10,-4)).toFixed(2);
  miles.value==((feet.value*1.8900000000000001)*Math.pow(10,-4)).toFixed(2);
  } } function cmconv(val){
  with(document.conv){
  feet.value = (Math.round(cm.value/30.84)).toFixed(2);
  inch.value = (Math.round(cm.value/2.54)).toFixed(2);
  kilo.value=((cm.value*1)*Math.pow(10,-5)).toFixed(2);
  miles.value==((cm.value*6.21)*Math.pow(10,-6)).toFixed(2);
  } } function kiloconv(val){
  with(document.conv){
  feet.value = ((kilo.value*3.28)*Math.pow(10,3)).toFixed(2);
  inch.value = ((kilo.value*3.94)*Math.pow(10,4)).toFixed(2);
  cm.value=((kilo.value*1)*Math.pow(10,5)).toFixed(2);
  miles.value=((kilo.value* 0.621)).toFixed(2);
  } } function milesconv(val){
  with(document.conv){
  feet.value =((miles.value* 5.28)*Math.pow(10,3)).toFixed(2);
  inch.value = ((miles.value*6.34)*Math.pow(10,4)).toFixed(2);
  cm.value=((miles.value*1.61)*Math.pow(10,5)).toFixed(2);
  kilo.value=((miles.value*1.61)).toFixed(2);
  } }
</script>
// <!-- Script by hscripts.com -->
