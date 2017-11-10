function ajax(){
	
	try{
		var xmlHttp = new XMLHttpRequest();
	}

	catch(e)
	{
		alert("Browser not supported");
	}

	var x = document.searchform.search_text.value;
	xmlHttp.open("GET","process_search.php?search="+x , true);
	xmlHttp.onreadystatechange = displayResult;
	xmlHttp.send(null);

	function displayResult(){
		if ((xmlHttp.readyState == 4) && (xmlHttp.status == 200))
		{
			document.getElementById('search-result').innerHTML = xmlHttp.responseText;
		}
	}
}