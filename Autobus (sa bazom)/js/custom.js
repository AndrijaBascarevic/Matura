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
$(document).ready(function(){	
	$("#forma").submit(function(event){
		submitForm();
		return false;
	});
});
function submitForm()
{
    $.ajax({
		type: "POST",
		url: "register.php",
		cache:false,
		data: $('form#forma').serialize(),
		success: function(response){
			$("#formaa").html(response)
			$("#myModal").modal('hide');
		},
		error: function(){
			alert("Error");
		}
	});
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