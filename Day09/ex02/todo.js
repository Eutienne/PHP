var x = 0;

function ToDoFunction() {
	var to_do = prompt("What do you want to add");
	var firstDiv = document.querySelector('div');
	var Elem = document.createElement("div");
	Elem.id = x;
	x++;
	Elem.setAttribute("onclick", "removeElement(this.id)");
	var note = document.createTextNode(to_do);
	if (!to_do)
		return ;
	Elem.appendChild(note);
	firstDiv.insertBefore(Elem, firstDiv.firstChild);
	document.cookie = to_do + "=to_do";
}

function removeElement(id) {
	// Removes an element from the document
	if (confirm("Do you want remove this"))
	{
		var element = document.getElementById(id);
		document.cookie = element.textContent + "=to_do; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
		document.getElementById("ft_list").removeChild(element);
	}
}
window.onload = function() {
	var cookie = document.cookie.split(";");
	i = 0;
	while (cookie[i])
	{
		var cook = cookie[i].split("=")
		if (cook[1] == "to_do")
		{
			var firstDiv = document.querySelector('div');
			var Elem = document.createElement("div");
			Elem.id = x;
			x++;
			Elem.setAttribute("onclick", "removeElement(this.id)");
			var note = document.createTextNode(cook[0]);
			Elem.appendChild(note);
			firstDiv.insertBefore(Elem, firstDiv.firstChild);
		}
		i++;
	}

}
