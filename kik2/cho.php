<script type="text/javascript">
function choFile()
{
document.getElementById('hz').className='viss';
document.getElementById("hz").setAttribute('required','required');
document.getElementById("sf").action="afterinputFromFile.php";
}

function choHand()
{
document.getElementById('hz').className='diss';
document.getElementById("hz").removeAttribute ('required');
document.getElementById("sf").action="inputName.php";
}

// // ��������� ������������ �� ������� file API
// if(window.File && window.FileReader && window.FileList && window.Blob) {
  // // ���� ��, �� ��� ������ �������� ����������
  // onload = function () {
    // // ������ ���������� �������, ������������� ��� ��������� input'�
    // document.querySelector('input').addEventListener('change', onFilesSelect1, false);
  // }
// // ���� ���, �� �������������, ��� �������� �� �����
// } else {
  // alert('� ��������� ��� ������� �� ������������ file API');
// }
// function onFilesSelect1(e){
   // var files = e.target.files;
   // var reader = new FileReader();
   // var contents;
    
    // file = files[0];
    // reader.readAsText(file);
    
// reader.onload = function(event) {
    // contents = event.target.result;
    // console.log("���������� �����: " + contents);
                
// };
 




//}

</script>  
  <head>
        
        <title>������ ����� ������</title>
		<link rel="stylesheet" href="css/style.css">
		<meta charset="windows-1251">
    </head>
<form action="inputName.php" method="POST" onkeypress='if (event.keyCode ==13) return false;' id="sf" enctype="multipart/form-data" >
<?php
$numOf�rit=$_POST["firstLevel"];
$numOfProv=$_POST["secondLevel"];
echo "<a>������ �� ����� <input type='radio' name='cho' id='cho1' value='1' onClick='choFile()'></a><br>";?>

<div id='hz' class='diss'><BR>������ � ��������� ��������� �� �����<input name="userfile" type="file" /><br></div>

<?php echo "<a>������ ������� <input type='radio' name='cho' id='cho2' value='2' checked = 'cheked' onClick='choHand()'></a><br>";
echo "<input type='hidden' name='firstLevel' value='".$numOf�rit."'>";
echo "<input type='hidden' name='secondLevel' value='".$numOfProv."'>";
echo "<input type='hidden' name='MAX_FILE_SIZE' value='30000' />";
echo "<input type='submit' value='�����' onCLick='isF();'>";	
?>
</form>