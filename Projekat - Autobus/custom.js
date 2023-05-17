// autobus sa random brojem zauzetih i slobodnih seditsa
function Grad()
{
    document.querySelectorAll('.sediste').forEach(item => {
        if(Math.round(Math.random())==1)
        { 
            if(item.classList.contains('zauzeto'))
            {
                item.classList.remove('zauzeto');
            }
            item.classList.add('slobodno');
        } else
        {
            if(item.classList.contains('slobodno'))
            {
                item.classList.remove('slobodno');
            }
            item.classList.add('zauzeto');
        }
        document.getElementById('con1').style.display='block';
        document.getElementById('con').style.display='flex';
    })
}
var br;// promenjljiva koja kupi koje sediste je kliknuto radi menjanja njegove klase
// pravljene za svaki div jedna click event koji otvara modal ili ne otvara 
document.querySelectorAll('.sediste').forEach(item => {
    item.addEventListener('click', event => {
        if(item.classList.contains('zauzeto'))
        {
            alert('Sediste je zauzeto');
        } else
        {
            $(item).ready(function(){
                $(".slobodno").click(function(){
                    $("#myModal").modal();
                });
            });
            document.getElementById('br').value=item.getAttribute('id');
            br=item;
        }
    })
})
// funkcija za potvrdjivanje dal je forma dobro popunjena
function Potvrda()
{
    var p=/^[A-Za-z]|[\s]$/;//ime
    var p1=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;//mail
    var a=document.getElementById("ime");
    var d = a.value;
    var i = d.search(p);//provera za ime
    if(i<0)//provera za ime
    {
        alert("Pogresno uneto ime!");//netacna uneto ime
        return false;
    } else
    {
        var a1=document.getElementById("mail");//provera maila
        var d1 = a1.value;
        var i1=d1.search(p1);//provera maila
        if(i1<0)//provera maila
        {
            alert("Pogresno unet e-mail!");//netacno unet mail
            return false;
        } else
        {
            alert("Uspesno prijavljivanje!");
            br.classList.remove('slobodno');
            br.classList.add('zauzeto');
            $(br).unbind();
            return true;
        }
    }
}
// funkcije koje sluze za pojavljivanje informacije o autorima
function funkcija1()
{
    $("#ab").fadeOut();// da se zatvori informacija
}
function funkcija2()
{
    $("#ab").fadeIn();// da se otvori
}   
function funkcija3()
{
    $("#sv").fadeOut();
}
function funkcija4()
{
    $("#sv").fadeIn();
}  