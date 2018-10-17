function viewfile(id)
  {
      var t=document.getElementById(id);
  		var Children=t.children;
  		Children[0].removeAttribute("hidden");

  }
  function showfilearea(id)
  {
		  alert("inside eidt function js");
  		var t=document.getElementById(id);
  		var Children=t.children;

		  Children[2].name="edit"
		  Children[2].innerHTML="save";
  		Children[1].removeAttribute("hidden");
  		Children[2].removeAttribute("style");
  		var x=Children[0].value;
  		Children[1].innerHTML=x;
  		Children[1].style.height="250px";
  }
  function showfileareaerase(id)
  {

  	alert("inside append function js");
  	var t=document.getElementById(id);
  	var Children=t.children;
  	Children[1].style.height="50px";
  	
  	Children[1].innerHTML=" ";
  	Children[2].name="append"
  	Children[2].innerHTML="append";

  	Children[1].removeAttribute("hidden");
  	Children[2].removeAttribute("style");
  }

  function searchFile(id)
  {
     alert("inside search function js");
  	 var t=document.getElementById(id);
  	 var Children=t.children;
  	 Children[1].style.height="50px";
  	
	   Children[1].innerHTML=" ";
	   Children[2].name="search";
	   Children[2].innerHTML="search";
	  	
  	 Children[1].removeAttribute("hidden");
     Children[2].removeAttribute("style");
  }
  function settarget(id,input)
  {
  	alert("inside setarget js");
  	document.getElementById("myform".id).action=input;
  }