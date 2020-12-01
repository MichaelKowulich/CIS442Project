function validateShop() {
    var checkboxs=document.querySelectorAll('[id=box]');;
    var okay=false;
    for(var i=0,l=checkboxs.length;i<l;i++)
    {
        if(checkboxs[i].checked)
        {
            okay=true;
            break;
        }
    }
    if(okay) {return true;}
    else {alert("Please check a checkbox"); return false;}
}