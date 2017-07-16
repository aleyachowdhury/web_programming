function report()
       {
           
           var pay_hour = 15; //pay rate per hour
          
          
           var em_data = new Array();  //this array is created to hold all employees data
           var i=0, num_hours;
           var total_pay = 0;
          
           
           num_hours = parseInt(prompt(" Please Enter Number of Hours Worked ")); //The user enters the (integer) number of hours worked
          
           
           while(num_hours != -1)  //-1 to indicate that there are no more employees to enter. 
           {
               
               em_data[i] = num_hours;
               i++;
              
             
               num_hours = parseInt(prompt(" Please Enter Number of Hours Worked"));
           }
          
          
           var paytable= "<table border=2><tr><td style='width: 150px; color: black; background-color: #B0C4DE; text-align: center;'> Index </td>";
           paytable+= "<td style='width: 180px;  color: black; background-color: #B0C4DE; text-align: center;'> Number of hours worked </td>";
           paytable+="<td style='width: 180px; color: black; background-color: #B0C4DE; text-align: center;'> Employee's Pay </td></tr>";
          
           
           for(var k=0; k<em_data.length; k++)
           {
               var em_pay = 0;
              
               
               if(em_data[k] >= 40) //when working hour is over 40 hours
                   em_pay = parseFloat((40 * pay_hour) + ((em_data[k] - 40) * 1.5 * pay_hour));
               
               else
                   em_pay = parseFloat(em_data[k] * pay_hour); //when working hour is less than 40 hours
              
               
               total_pay += em_pay;
              
               
               paytable += "<tr><td style='width: 150px; color: black; background-color: #C0C0C0; text-align: center;'>" + (k+1) + " </td>";
               paytable += "<td style='width: 180px; color: black; background-color: #F0FFFF;text-align: center;'> " + em_data[k] + " </td>";
               paytable += "<td style='width: 180px; color: black; background-color: #FFE4E1; text-align: center;'> $ " + em_pay + " </td></tr>"
           }
  
           paytable += "</table>";
          
          
           document.getElementById("ptable").innerHTML = paytable;
         
           document.getElementById("ptotal").innerHTML = "Total pay of all employees: $ " + total_pay;
       }