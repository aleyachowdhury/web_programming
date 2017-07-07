  


 function Calculatedate(){

today=new Date()
var newyear=new Date(today.getFullYear(), 12, 31) 
if (today.getMonth()==12 && today.getDate()>31) 
    newyear.setFullYear(newyear.getFullYear()+1) 
var day=1000*60*60*24
 
 document.write("Today is " +today) 
 document.write("<br>") ;
document.write(Math.floor((newyear.getTime()-today.getTime())/(day))+
" days to go for New Year!")


}