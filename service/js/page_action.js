function submit_req(id)
{
    var arr=['profile',
             'sub_req',
             'ser_status',
             'ch_pass',
             'tec',
             'req',
             'sell_rep',
             'a_ch_pass',
             'work_rep'];
    var i;
    for(i=0;i<arr.length;i++)
    {
        if(arr[i]==id)
        {
            var rightside=document.getElementById(id);
            rightside.style.backgroundColor='red';
    
        }
        else{
            var rightside=document.getElementById(arr[i]);
            rightside.style.backgroundColor='skyblue';
    
        }
    }
       
    

}