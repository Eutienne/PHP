var x = 0;

function ToDoFunction() {
	var to_do = prompt("What do you want to add");
	var Elem = $("<div id=" + x + " onclick=removeElement(this.id)>" + to_do + "</div>");
	x++;
	if (!to_do)
		return ;
	$("#ft_list").prepend(Elem);
	document.cookie = to_do + "=to_do";
}

function removeElement(id) {
	// Removes an element from the document
	if (confirm("Do you want remove this"))
	{
		var element = $("#" + id);
		document.cookie = element.text() + "=to_do; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
		$(element).remove();
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
			var Elem = $("<div id=" + x + " onclick=removeElement(this.id)>" + cook[0] + "</div>");
			x++;
			$("#ft_list").prepend(Elem);
		}
		i++;
	}

}
