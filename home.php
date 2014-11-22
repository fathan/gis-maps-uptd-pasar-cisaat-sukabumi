<!-- <script type="text/javascript">
	function changeValue(){
	    var option=document.getElementById('filter').value;

	    if(option=="Buah-Buahan"){
	        document.getElementById('field').value="Mangga, Apel, jeruk";
	    }else if(option=="Sayuran"){
	        document.getElementById('field').value="Waluh, Kol, Cecim";
	    }
}
</script>

<form action ='#' method = 'post'>
	<select name="filter" id="filter" onchange="changeValue();">
		<option id="Buah-Buahan" value="Buah-Buahan">Buah-Buahan</option>
		<option id="Sayuran" value="Sayuran">Sayuran</option>
	</select>
	<input type ='text' name="key" id ="field" placeholder="Tampil data">
	<input type ='submit' value = 'Search'>
</form> -->

<SCRIPT TYPE="text/javascript">
<!-- 
function orderTotal(oform, prefix)
{
// set references to fields
var qty = oform[prefix + "_qty"];
var stHold = oform[prefix + "_stHold"];
var price = oform[prefix + "_price"];
var stVis = oform[prefix + "_stVis"];

// only bother if the field has contents
if (qty == "")return;

// if the with is not a number (NaN)
// or is zero or less
// everything goes blank
if(isNaN(qty.value) || (qty.value <= 0))
   {
   qty.value = "";
   stHold.value = "";
   }
   
// else the field is a valid number, so calculate the 
// total order cost and put that value in the 
// hidden subtotal field
else
   stHold.value = (Math.round(qty.value * price.value * 100))/100;

// call the routine which checks if the 
// visible subtotal is correct
visTotal(oform, prefix);
}

// checks if the visible subtotal is correct
// ie, if it equals the hidden subtotal field
function visTotal(oform, prefix)
{
var stHold = oform[prefix + "_stHold"];
var stVis = oform[prefix + "_stVis"];

if (stVis.value != stHold.value)
   stVis.value = stHold.value;
}
// -->
</SCRIPT>

<FORM ACTION="../cgi-bin/mycgi.pl">
<TABLE BORDER CELLPADDING=3>
<!-- table titles -->
<TR BGCOLOR="#99CCFF">
   <TH>item</TD>
   <TH>quantity</TD>
   <TH>price</TD>
   <TH>total</TD>
   </TR>

<!-- v-neck sweater -->
<TR BGCOLOR="#FFFFCC">
   <TD>v-neck sweater</TD>
   <TD><INPUT 
         TYPE=TEXT 
         NAME="vn_qty" 
         SIZE=3 
         onChange="orderTotal(this.form, 'vn')" 
         ></TD>
   <TD><INPUT TYPE=HIDDEN NAME="vn_price" VALUE="33.95">$33.95</TD>
   <TD ALIGN=RIGHT>
      <INPUT TYPE=HIDDEN NAME="vn_stHold">
      <INPUT 
         TYPE=TEXT 
         NAME="vn_stVis" 
         SIZE=10 
         onChange="visTotal(this.form, 'vn')" 
         ></TD>
   </TR>

<!-- JoAnn style blazer -->
<TR BGCOLOR="#FFFFCC">
   <TD>JoAnn style blazer</TD>
   <TD><INPUT 
         TYPE=TEXT 
         NAME="ja_qty" 
         SIZE=3 
         onChange="orderTotal(this.form, 'ja')" 
         ></TD>
   <TD><INPUT TYPE=HIDDEN NAME="ja_price" VALUE="99.95">$99.95</TD>
   <TD ALIGN=RIGHT>
      <INPUT TYPE=HIDDEN NAME="ja_stHold">
      <INPUT 
         TYPE=TEXT 
         NAME="ja_stVis" 
         SIZE=10 
         onChange="visTotal(this.form, 'ja')" 
         ></TD>
   </TR>

</TABLE>

<P><INPUT TYPE=SUBMIT VALUE="submit">
</FORM>