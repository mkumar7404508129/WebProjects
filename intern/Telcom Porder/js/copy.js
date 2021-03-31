function url(data)
{  
    var el = document.getElementById('url');
    el.select(); 
    document.execCommand('copy');
    alert("Link Copied");
}
