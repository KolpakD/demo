<script type="text/javascript">
    
    function jifromijpre(k, n, m){

if (document.getElementById('k'+k+'i'+n+'j'+m).value!="")
if(isNaN(document.getElementById('k'+k+'i'+n+'j'+m).value))
			{
				alert ("������ ������ ������� � �������� 0.1-9");
				document.getElementById('k'+k+'i'+n+'j'+m).value="";
                                document.getElementById('k'+k+'i'+m+'j'+n).value="";
				document.getElementById('k'+k+'i'+n+'j'+m).focus;
				return false;
			}
			else
			{
				if (document.getElementById('k'+k+'i'+n+'j'+m).value<0.1)
					{
						alert ("������ ������ ������� � �������� 0.1-9");
						document.getElementById('k'+k+'i'+n+'j'+m).value="";
	                                        document.getElementById('k'+k+'i'+m+'j'+n).value="";
						document.getElementById('k'+k+'i'+n+'j'+m).focus;
						return false;
					}
				else if (document.getElementById('k'+k+'i'+n+'j'+m).value>9)
					{
						alert ("������ ������ ������� � �������� 0.1-9");
						document.getElementById('k'+k+'i'+n+'j'+m).value="";
                                                document.getElementById('k'+k+'i'+m+'j'+n).value="";
						document.getElementById('k'+k+'i'+n+'j'+m).focus;
						return false;
					}
				else
					{
						document.getElementById('k'+k+'i'+m+'j'+n).value=1/document.getElementById('k'+k+'i'+n+'j'+m).value;
					}
			}

	
}

    
      
   // ��������� ������������ �� ������� file API
if(window.File && window.FileReader && window.FileList && window.Blob) {
  // ���� ��, �� ��� ������ �������� ����������
  onload = function () {
    // ������ ���������� �������, ������������� ��� ��������� input'�
    <?php
    for ($i=1;$i<=$numOf�rit;$i++)
    echo "document.getElementById('".$i."').addEventListener('change', onFilesSelect".$i.", false);";
    ?>
  }
// ���� ���, �� �������������, ��� �������� �� �����
} else {
  alert('� ��������� ��� ������� �� ������������ file API');
}


<?php
for ($i=1;$i<=$numOf�rit;$i++)
{
echo "function onFilesSelect".$i."(e){
   var k = ".$i.";
   var files = e.target.files;
   var reader = new FileReader();
   var contents;
    
    file = files[0];
    reader.readAsText(file);
    
reader.onload = function(event) {
    contents = event.target.result;
    console.log('���������� ����� ".$i.": ' + contents);";
    echo "var n =".$numOfProv.";"; 
   echo " var mas=new Array(n);
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
           document.getElementById('k'+k+'i'+i+'j'+j).value=mas[i][j];
                
};
 



}";
}
?>
    
    
    
	function jifromij(){
	for(k=1;k<=<?php echo $numOf�rit ?>;k++)
		for (i=1;i<=<?php echo $numOfProv ?>-1;i++)
		{
			for (j=i+1;j<=<?php echo $numOfProv ?>;j++)
			if(isNaN(document.getElementById('k'+k+'i'+i+'j'+j).value))
			{
				alert ("������ ������ ������� � �������� 0-9");
				document.getElementById('k'+k+'i'+i+'j'+j).value="";
			}
			else
			{
					if (document.getElementById('k'+k+'i'+i+'j'+j).value<=0)
					{
						alert ("������ ������ ������� � �������� 0-9");
						document.getElementById('k'+k+'i'+i+'j'+j).value="";
					}
					else if (document.getElementById('k'+k+'i'+i+'j'+j).value>9)
					{
						alert ("������ ������ ������� � �������� 0-9");
						document.getElementById('k'+k+'i'+i+'j'+j).value="";
					}
					else
					{
						document.getElementById('k'+k+'i'+j+'j'+i).value=1/document.getElementById('k'+k+'i'+i+'j'+j).value;
					}	 
			}
	 }
   }
   
 	function ijfromji(){
	for(k=1;k<=<?php echo $numOf�rit ?>;k++)
		for (i=1;i<=<?php echo $numOfProv ?>;i++)
		{
			for (j=1;j<=<?php echo $numOfProv ?>;j++)
                        if (i!=j)
			if(isNaN(document.getElementById('k'+k+'i'+j+'j'+i).value))
			{
				alert ("������ ������ ������� � �������� 0.12-9");
				document.getElementById('k'+k+'i'+j+'j'+i).value="";
                                document.getElementById('k'+k+'i'+i+'j'+j).value="";
                                return false;
			}
			else
			{
				if (document.getElementById('k'+k+'i'+j+'j'+i).value<0.1)
					{
					alert ("������ ������ ������� � �������� 0.12-9");
					document.getElementById('k'+k+'i'+j+'j'+i).value="";
                                        document.getElementById('k'+k+'i'+i+'j'+j).value="";
                                        return false;
					}
				else if (document.getElementById('k'+k+'i'+j+'j'+i).value>9)
					{
					alert ("������ ������ ������� � �������� 0.12-9");
					document.getElementById('k'+k+'i'+j+'j'+i).value="";
                                        document.getElementById('k'+k+'i'+i+'j'+j).value="";
                                        return false;
					}
				else
					{
					document.getElementById('k'+k+'i'+i+'j'+j).value=1/document.getElementById('k'+k+'i'+j+'j'+i).value;
					}
			}
	 }
   }
</script>