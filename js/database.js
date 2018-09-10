function loadXmlFile(xmlFile){
var xmlDoc = null;
if (window.ActiveXObject){
    xmlDoc = new ActiveXObject("Microsoft.XMLDOM");
    //xmlDom.loadXML(xmlFile);//如果用的是XML字符串
    xmlDoc.load(xmlFile);//如果用的是xml文件。
}else if (document.implementation && document.implementation.createDocument){
    var xmlhttp = new window.XMLHttpRequest();
    xmlhttp.open("GET", xmlFile, false);
    xmlhttp.send(null);	
    xmlDoc = xmlhttp.responseXML;
}else{
    xmlDoc = null;
	alert("您的浏览器不能正常加载文件。请切换到兼容模式，或者更换浏览器");
}
return xmlDoc;

}

function show_answer(id)
{
document.getElementById(id).style.display="inline"
}



 
  
