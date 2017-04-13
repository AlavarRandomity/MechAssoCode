<script language="JavaScript">
function chcefunc(){
ndiam=0; nvel=0; nf=0; ct=0; ctX=0; mnct=0;

<!-- D I A M E T E R -------------------------------------------------------------- -->
if (chc==1){ct=12;while (ct<48){document.outbox[box[ct]].value="";ct=ct+1}

<!-- nvel is the velocity index -->
nvel=eval(document.inboxes.velmenu.options[document.inboxes.velmenu.selectedIndex].value);
nvel=nvel-201;nvel=(nvel*3 + 18)+1;
svel = (document.inboxes.vel.value)*(mn[nvel]);
<!-- nf is the flow rate index -->
nf=eval(document.inboxes.flowmenu.options[document.inboxes.flowmenu.selectedIndex].value);
nf=nf-300; nf=(nf*3 + 88);
sf = (document.inboxes.flow.value)*(mn[nf]);
s=sf/svel;
s=Math.sqrt(4*s/Math.PI);
}

<!-- V E L O C I T Y ------------------------------------------------------------------ -->
if (chc==2)
{
ndiam=eval(document.inboxes.diammenu.options[document.inboxes.diammenu.selectedIndex].value);
ndiam=ndiam-101; ndiam=(ndiam*3 + 1);
sdiam = (document.inboxes.diam.value)*(mn[ndiam]);
area=sdiam*sdiam*Math.PI/4;

<!-- nf is the flow rate index for converting input to cc per sec -->
nf=eval(document.inboxes.flowmenu.options[document.inboxes.flowmenu.selectedIndex].value);
nf=nf-300; nf=(nf*3 + 88);
sf = (document.inboxes.flow.value)*(mn[nf]);
s=sf/area;
}

<!-- F L O W   R A T E -------------------------------------------------------------- -->
if (chc==3){
ndiam=eval(document.inboxes.diammenu.options[document.inboxes.diammenu.selectedIndex].value);
ndiam=ndiam-101; ndiam=(ndiam*3 + 1);
sdiam = (document.inboxes.diam.value)*(mn[ndiam]);
area=sdiam*sdiam*Math.PI/4;

<!-- nvel is the velocity index -->
nvel=eval(document.inboxes.velmenu.options[document.inboxes.velmenu.selectedIndex].value);
nvel=nvel-201;nvel=(nvel*3 + 18)+1;
svel = (document.inboxes.vel.value)*(mn[nvel]);
s=area*svel;
}

sv=0;
if (chc==1)    {ctstart=0;ctlimit=12};
if (chc==2)    {ctstart=12;ctlimit=60};
if (chc==3)    {ctstart=60;ctlimit=108};
if (sw==0) {alert("You First Must Choose Diameter, Velocity or Flow Rate")};
if (sw==1) {<!-- sw=1 means the "Radio Buttons" Were Clicked-->
ct=1;ctX=0;
sigfig=(document.boxrnd.brnd.value-1);
while(ctX<ctlimit)
{X[ctX]=s/mn[ct];
if(apswt==0){if(sigfig>-1){X[ctX]=X[ctX].toExponential(sigfig);}
if (X[ctX]>.001 && X[ctX]<1000){X[ctX]=X[ctX]*1}X[ctX]=" "+X[ctX]};
X[ctX+1]=mn[ct+1];
ct=ct+3;ctX=ctX+2;
}}
ct=0;
while (ct<ctlimit-ctstart){
document.outbox[box[ct]].value=X[ct+ctstart];
ct=ct+1}
n=0;
}
</script>