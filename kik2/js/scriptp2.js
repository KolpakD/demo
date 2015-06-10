<script type="text/javascript">
function jifromijpre(n, m){
if (document.getElementById('i'+n+'j'+m).value!="")
if(isNaN(document.getElementById('i'+n+'j'+m).value))
			{
				alert ("Оценка должна входить в диапазон 0.1-9");
				document.getElementById('i'+n+'j'+m).value="";
                                document.getElementById('i'+m+'j'+n).value="";
				document.getElementById('i'+n+'j'+m).focus;
			}
			else
			{
				if (document.getElementById('i'+n+'j'+m).value<0.1)
					{
						alert ("Оценка должна входить в диапазон 0.1-9");
						document.getElementById('i'+n+'j'+m).value="";
	                                        document.getElementById('i'+m+'j'+n).value="";
						document.getElementById('i'+n+'j'+m).focus;
						
					}
				else if (document.getElementById('i'+n+'j'+m).value>9)
					{
						alert ("Оценка должна входить в диапазон 0.1-9");
						document.getElementById('i'+n+'j'+m).value="";
                                                document.getElementById('i'+m+'j'+n).value="";
						document.getElementById('i'+n+'j'+m).focus;
						
					}
				else
					{
						document.getElementById('i'+m+'j'+n).value=1/document.getElementById('i'+n+'j'+m).value;
					}
			}

					
	
}

function ijfromjipre(n, m){
	document.getElementById('i'+m+'j'+n).value=1/document.getElementById('i'+n+'j'+m).value;
	
}


   
   
   // проверяем поддерживает ли браузер file API
if(window.File && window.FileReader && window.FileList && window.Blob) {
  // если да, то как только страница загрузится
  onload = function () {
    // вешаем обработчик события, срабатывающий при изменении input'а
    document.querySelector('input').addEventListener('change', onFilesSelect1, false);
  }
// если нет, то предупреждаем, что работать не будет
} else {
  alert('К сожалению ваш браузер не поддерживает file API');
}
function onFilesSelect1(e){
   var files = e.target.files;
   var reader = new FileReader();
   var contents;
    
    file = files[0];
    reader.readAsText(file);
    
reader.onload = function(event) {
    contents = event.target.result;
    console.log("Содержимое файла: " + contents);
    <?php echo "var n =".$numOfСrit.";"; ?>
    var mas=new Array(n);
        for (var i=1; i<=n; i++) {
            mas[i]=new Array(n);}
        a = contents.split(' ');
        nr=0;
        for (i=1;i<=n;i++)
            for (j=1;j<=n;j++)
                mas[i][j]=a[nr++];
       for (i=1;i<=n;i++)
       for (j=1;j<=n;j++)
           if (i!=j)
           document.getElementById('i'+i+'j'+j).value=mas[i][j];
                
};
 



}
   
   
   
   
   
    
    function jifromij(){
	for (i=1;i<=<?php echo $numOfСrit ?>;i++)
	 {
		for (j=1;j<=<?php echo $numOfСrit ?>;j++)
                    if (i!=j)
			if(isNaN(document.getElementById('i'+i+'j'+j).value))
			{
				alert ("Оценка должна входить в диапазон 0.1-9");
				document.getElementById('i'+i+'j'+j).value="";
                                document.getElementById('i'+j+'j'+i).value="";
				return false;
			}
			else
			{
				if (document.getElementById('i'+i+'j'+j).value<0.1)
					{
						alert ("Оценка должна входить в диапазон 0.1-9");
						document.getElementById('i'+i+'j'+j).value="";
                                                document.getElementById('i'+j+'j'+i).value="";
						return false;
					}
				else if (document.getElementById('i'+i+'j'+j).value>9)
					{
						alert ("Оценка должна входить в диапазон 0.1-9");
						document.getElementById('i'+i+'j'+j).value="";
                                                document.getElementById('i'+j+'j'+i).value="";
						return false;
					}
				else
					{
						document.getElementById('i'+j+'j'+i).value=1/document.getElementById('i'+i+'j'+j).value;
					}
			}					
	 }
   }
   
 	function ijfromji(){
	for (i=1;i<=<?php echo $numOfСrit ?>;i++)
	 {
		for (j=i+1;j<=<?php echo $numOfСrit ?>;j++)
			if(isNaN(document.getElementById('i'+j+'j'+i).value))
			{
				alert ("Оценка должна входить в диапазон 0.12-9");
				document.getElementById('i'+j+'j'+i).value="";
				return false;
			}
			else
			{
			if (document.getElementById('i'+j+'j'+i).value<0.1)
				{
				alert ("Оценка должна входить в диапазон 0.12-9");
				document.getElementById('i'+j+'j'+i).value="";
				return false;
				}
				else if (document.getElementById('i'+j+'j'+i).value>9)
				{
				alert ("Оценка должна входить в диапазон 0.12-9");
				document.getElementById('i'+j+'j'+i).value="";
				return false;
				}
				else
				{
			     document.getElementById('i'+i+'j'+j).value=1/document.getElementById('i'+j+'j'+i).value;
				}
			}
	 }
   }
</script>