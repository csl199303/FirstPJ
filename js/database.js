function loadXmlFile(xmlFile){
var xmlDoc = null;
if (window.ActiveXObject){
    xmlDoc = new ActiveXObject("Microsoft.XMLDOM");
    //xmlDom.loadXML(xmlFile);//����õ���XML�ַ���
    xmlDoc.load(xmlFile);//����õ���xml�ļ���
}else if (document.implementation && document.implementation.createDocument){
    var xmlhttp = new window.XMLHttpRequest();
    xmlhttp.open("GET", xmlFile, false);
    xmlhttp.send(null);	
    xmlDoc = xmlhttp.responseXML;
}else{
    xmlDoc = null;
	alert("����������������������ļ������л�������ģʽ�����߸��������");
}
return xmlDoc;

}

function show_answer(id)
{
document.getElementById(id).style.display="inline"
}



 
  
