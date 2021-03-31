
function form(data)
{   
    var http;
    if(window.XMLHttpRequest)
    {   
        http= new XMLHttpRequest;
    }   
    else
    {
        http= new ActiveXObject;
    }
    http.open('GET',"./include/search.php?name="+data);
    http.send();
    http.onreadystatechange=function()
    {      
      if(this.readyState==4 && this.status==200)
      {   
         if(this.responseText=='1')
         {
            document.getElementById("name").style.background="green";
            document.getElementById("submit").disabled=false;
         }
         else{
            document.getElementById("name").style.background="red";
            alert("!!!Check your name In Card");
            document.getElementById("submit").disabled=true;
         }
      }
    }
}
function login()
{   
    var n=document.getElementById('name').value;
    form(n);    
}