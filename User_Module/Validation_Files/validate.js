
$("#address").click(function()
{
//alert("Kindly Enter Your address Details");
var province_name=$("#Province").val();
var Domicile_name=$("#Domicile").val();
var house_no =$("#house_no").val();
var street_no =$("#Street_No").val();
var city =$("#city").val();
if(province_name == "")
{
alert("Please Select Your Province");
return false;	
}
else if(Domicile_name =="")
{
	alert("Select Your Domicile");
	return false;
}
else if(city =="")
{
	alert("Provide City Name");
	return false;
}
else if(province_name != Domicile_name)
{
	alert("Province and Domicile must be same");
	return false;
}
else if(house_no == "")
{
	alert("Provide house Number");
	return false;
} else if(street_no=="")
{
	alert("Please Enter Your Street No");
	return false;
}
else 
{
	return true;
}
});
$("#fee_payment").click(function()
{
var challan_no=$("#challan_no").val();
var fee_amount=$("#fee_amount").val();
var challan_date=$("#date_challan").val();
if(challan_no == "")
{
	alert("Provide Bank Challan Number!");
	return false;
}
else if(fee_amount == 0)
{
	alert("Provide Fee Amount");
	return false;
}

else if( fee_amount!= 1000)
{
	alert("Please Enter Valid Fee Amount!");
	return false;
}
else if(challan_date == "")
{
	alert("Provide Challan Date!");
	return false;
}
else
{
	return true;
}
});
});