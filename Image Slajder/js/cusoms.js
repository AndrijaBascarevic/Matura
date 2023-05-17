var i=2;
function Promena()
{
    var img=document.getElementById("slika");
    var element=document.getElementById("main");
    element.classList.remove("slike")
    element.offsetWidth
    element.classList.add("slike")
    img.src="./images/slika"+i+".jpg";
    var naz=document.getElementById("naziv");
    if(i==1)
    {
        naz.innerHTML= "Zena koja place";
    } else
    {
        if(i==2)
        {
            naz.innerHTML= "Devojka pred ogledalo";
        } else
        {
            if(i==3)
            {
                naz.innerHTML= "Gernika";
            } else
            {
                if(i==4)
                {
                    naz.innerHTML= "Picaso portret";
                } else
                {
                    if(i==5)
                    {
                        naz.innerHTML= "Stari gitarista";
                    }
                }
            }
        }
    }
    document.getElementById(i).classList.add("aktivan");
    if(i==1)
    {
        document.getElementById(i+4).classList.remove("aktivan");
    } else
    {
        document.getElementById(i-1).classList.remove("aktivan");
    }
    if(i==5)
    {
        i=1;
    } else
    {
        i++;
    }
    
    
}
function Load()
{
    setInterval(Promena,3000);
}
