function populate(s1,s2)
{
    var s1=document.getElementById(s1);
    var s2=document.getElementById(s2);
    s2.innerHTML="";
    if(s1.value == "Maharashtra"){
        var optionArray = ["|","Ahmednagar|Ahmednagar","Aurangabad|Aurangabad","Jalgaon|Jalgaon","Kolhapur|Kolhapur","Mumbai|Mumbai","Nagpur|Nagpur","Nasik|Nasik","Navimumbai|Navi Mumbai","Pune|Pune","Solapur|Solapur"];
    } 
    else if(s1.value == "Gujarat")
    {
        var optionArray = ["|","Ahmedabad|Ahmedabad","Anand|Anand","Ankleshwar|Ankleshwar","Bharuch|Bharuch","Bhavnagar|Bhavnagar","Bhuj|Bhuj","Gandhinagar|Gandhinagar","Gir|Gir","Jamnagar|Jamnagar","Kandla|Kandla","Porbandar|Porbandar","Rajkot|Rajkot","Surat|Surat","Vadodara|Vadodara/Baroda","Valsad|Valsad","Vapi|Vapi"];
    }
    for(var option in optionArray){
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }



}

