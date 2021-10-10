function update()
{
var today = new Date();
var time = today.getHours() + " : " + today.getMinutes() + " : " + today.getSeconds();
document.getElementById('time').innerHTML = time;
}

setInterval(update, 1000);







function openform() {
	document.body.classList.add("showLoginForm");
}
function closeform() {
	document.body.classList.remove("showLoginForm");
}



// development codes delete this after degbugging 

// console.clear();
// setTimeout("location.reload(true);", 5000);