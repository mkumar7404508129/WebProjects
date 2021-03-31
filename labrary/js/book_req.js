function book_req()
{
    var val=document.getElementById('select').value;
    if(val == "book_bank")
    {
       document.getElementById('semster').style.display='block';
       document.getElementById('other').style.display='none';
    }
    else{
        document.getElementById('other').style.display='block';
        document.getElementById('semster').style.display='none';
    }
        document.getElementById("submit").style.display='block';

}