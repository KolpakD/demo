<?php 
//������� ������� ����� ������� arr ��� ��������
//� ��������� ������ im ������� jm
function M($m, $im, $jm, $arr)
{
    $i;
	$j;
    $ret[1][1];
	
	for($i = 1; $i <= $m; $i++)
    {
        if($i != $im)
        {
            for($j = 1; $j <= $m; $j++)
            {
                if($j != $jm)
                {
                    if($i < $im)
                    {
                        if($j < $jm)
                            $ret[$i][$j] = $arr[$i][$j];
                        else
                            $ret[$i][$j-1] = $arr[$i][$j];
                    }
                    else
                    {
                        if($j < $jm)
                            $ret[$i-1][$j] = $arr[$i][$j];
                        else
                            $ret[$i-1][$j-1] = $arr[$i][$j];
                    }
                }
            }
        }
    }
    return $ret;
}
 
//������� ���������� ����������� �������
function Det($m, $arr)
{
    $i=0;
	$j = 0;
    $ret = 0;
    $A;
    $_arr[1][1];
	
	
    if($m == 2) //� ������� 2�2 ��������� ����������� �����
    {
        $ret=$arr[1][1]*$arr[2][2] - $arr[2][1]*$arr[1][2];       
    }
	
    else //����� ������� ����������� ����������
		//����� �������������� ���������� ��������
    {
        for($j = 1; $j<=$m; $j++)
        {
            $_arr = M($m, 1, $j, $arr);
			$A = ($arr[1][$j])*pow(-1,$j)*Det($m - 1, $_arr);
			$ret = $ret+$A;
        }
    }
    return $ret;
}
 
 

 ?>