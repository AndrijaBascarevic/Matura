function Pusti(a)
{
    var s="audio" + a;
    var audio=document.getElementById(s);
    audio.currentTime = 8;
    audio.play();
}
function Zaustavi(a)
{
    var s="audio" + a;
    var audio=document.getElementById(s);
    audio.pause();
    audio.currentTime = 0;
}
function Opis(a)
{
    if(a=="madj")
    {
        let newWin = window.open("about:blank", "Drzave", "width=200,height=200");
        newWin.document.write("<h1> Madjarska </h1> <p> Tekst </p>");
    }
    if(a=="hrv")
    {
        let newWin = window.open("about:blank", "Drzave", "width=200,height=200");
        newWin.document.write("<h1> Hrvatska </h1> <p> Tekst </p>");
    }
    if(a=="rum")
    {
        let newWin = window.open("about:blank", "Drzave", "width=200,height=200");
        newWin.document.write("<h1> Rumunija </h1> <p> Tekst </p>");
    }
    if(a=="srb")
    {
        let newWin = window.open("about:blank", "Drzave", "width=200,height=200");
        newWin.document.write("<h1> Srbija </h1> <p> Tekst </p>");
    }
    if(a=="bih")
    {
        let newWin = window.open("about:blank", "Drzave", "width=200,height=200");
        newWin.document.write("<h1> Bosna i Hercegovina </h1> <p> Tekst </p>");
    }
    if(a=="bug")
    {
        let newWin = window.open("about:blank", "Drzave", "width=200,height=200");
        newWin.document.write("<h1> Bugarska </h1> <p> Tekst </p>");
    }
    if(a=="cg")
    {
        let newWin = window.open("about:blank", "Drzave", "width=200,height=200");
        newWin.document.write("<h1> Crna Gora </h1> <p> Tekst </p>");
    }
    if(a=="alb")
    {
        let newWin = window.open("about:blank", "Drzave", "width=200,height=200");
        newWin.document.write("<h1> Albanija </h1> <p> Tekst </p>");
    }
    if(a=="mak")
    {
        let newWin = window.open("about:blank", "Drzave", "width=200,height=200");
        newWin.document.write("<h1> Makedonija </h1> <p> Tekst </p>");
    }
}