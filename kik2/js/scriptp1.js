<script type="text/javascript">
	function unikNameCrit(){
	var i,j;
	for (i=1;i<=<?php echo $numOf�rit ?>;i++)
	{
		for (j=i+1;j<=<?php echo $numOf�rit ?>;j++)
			if(document.getElementById('C'+i).value!="")
				if(document.getElementById('C'+i).value==document.getElementById('C'+j).value)
				{
					alert("������ �������� ��������!");
					document.getElementById('C'+j).value="";
                                        document.getElementById('C'+j).focus();
				}
	}
	
   }
   
   	function unikNameProv(){
	var i,j;
	for (i=1;i<=<?php echo $numOfProv ?>;i++)
	{
		for (j=i+1;j<=<?php echo $numOfProv ?>;j++)
			if(document.getElementById('P'+i).value!="")
				if(document.getElementById('P'+i).value==document.getElementById('P'+j).value)
				{
					alert("������ �������� ����������!");
					document.getElementById('P'+j).value="";
                                        document.getElementById('P'+j).focus();
				}
	}
	
   }
</script>