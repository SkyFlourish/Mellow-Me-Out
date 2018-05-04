var counter = 0;

function LeftArrow() /* Increment counter*/
{
    counter--;
    
    if (counter <0)
        {
            counter = 3;
            alert("The counter is: "+counter);
            
        }
    else
        {
            alert("The counter is: "+counter);
           
        }
}

function RightArrow() /* Decrement counter*/
{
    counter++;
    if (counter >3)
        { 
            counter = 0;
            alert("The counter is: "+counter);
           
        }
    else
        { 
            alert("The counter is: "+counter);
           
        }
}





