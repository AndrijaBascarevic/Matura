function Pokreni(a)
{
    var s="audio" + a;
    var audio=document.getElementById(s);
    audio.play();
}
function Zaustavi(a)
{
    var s="audio" + a;
    var audio=document.getElementById(s);
    audio.pause();
    audio.currentTime = 0;
}
function Open(a)
{
    if(a=="git")
    {
        let newWin = window.open("about:blank", "Instrumenti", "width=200,height=200");
        newWin.document.write("<h1> Gitara </h1> <p> Tekst </p>");
    }
    if(a=="vio")
    {
        let newWin = window.open("about:blank", "Instrumenti", "width=200,height=200");
        newWin.document.write("<h1> Violina </h1> <p> Tekst </p>");
    }
    if(a=="bub")
    {
        let newWin = window.open("about:blank", "Instrumenti", "width=200,height=200");
        newWin.document.write("<h1> Bubnjevi </h1> <p> Tekst </p>");
    }
    if(a=="kla")
    {
        let newWin = window.open("about:blank", "Instrumenti", "width=200,height=200");
        newWin.document.write("<h1> Klavir </h1> <p> Tekst </p>");
    }
    if(a=="kon")
    {
        let newWin = window.open("about:blank", "Instrumenti", "width=200,height=200");
        newWin.document.write("<h1> Kontrafagot </h1> <p> Tekst </p>");
    }
    if(a=="har")
    {
        let newWin = window.open("about:blank", "Instrumenti", "width=200,height=200");
        newWin.document.write("<h1> Harmonika </h1> <p> Tekst </p>");
    }
}
function Wiki(a)
{
    if(a=="git")
    {
        window.open('https://sr.wikipedia.org/wiki/%D0%93%D0%B8%D1%82%D0%B0%D1%80%D0%B0');
    }
    if(a=="vio")
    {
        window.open('https://sr.wikipedia.org/wiki/%D0%92%D0%B8%D0%BE%D0%BB%D0%B8%D0%BD%D0%B0');
    }
    if(a=="bub")
    {
        window.open('https://sr.wikipedia.org/wiki/%D0%91%D1%83%D0%B1%D1%9A%D0%B5%D0%B2%D0%B8');
    }
    if(a=="kla")
    {
        window.open('https://sr.wikipedia.org/wiki/%D0%9A%D0%BB%D0%B0%D0%B2%D0%B8%D1%80');
    }
    if(a=="kon")
    {
        window.open('https://sr.wikipedia.org/wiki/%D0%9A%D0%BE%D0%BD%D1%82%D1%80%D0%B0%D1%84%D0%B0%D0%B3%D0%BE%D1%82');
    }
    if(a=="har")
    {
        window.open('https://sr.wikipedia.org/wiki/%D0%A5%D0%B0%D1%80%D0%BC%D0%BE%D0%BD%D0%B8%D0%BA%D0%B0');
    }
}