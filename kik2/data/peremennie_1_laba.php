<?php
// Первоначальные данные, для выполнения первой лабы, потом автоматизировать.
$n_=3; //Количество сравниваемых элементов
$A_[1][1]; //Матрица попарных сравнений
$W_[1]; //Собственный вектор
$l_0[1]; //Начальное приближение
$l_k[1]; //k-ое приближение
$l_k1[1]; //k+1-ое приближение
$l_k1_nor[1]; //Нормированное k+1-ое приближение
$A_lE[1][1]; //Матрица A-E
$opredel; //Определитель матрицы A-E
$l_max; //Максимальное собственное число
$I_S; //Индекс согласованности
$S_index; //Случайный индекс
$O_S; //Отношение согласованности
$A_k[1][1]; //Ak – k-ая степень матрицы A
$Aw_[1]; //Произведение Ak
$l_w[1]; //Произведение max
$Aw_lw[1]; //Разность векторов A-max
$eps; //Максимальный элемент вектора A-max
$S_aij; //Сумма элементов матрицы Ak
$A_k1[1][1]; //Ak+1 – k+1-ая степень матрицы A
$Adress_A_lE; //Диапазон ячеек матрицы A-E
//случайый индекс (СИ) для разного количества сравниваемых элементов
$sl_in[1] = 0;
$sl_in[2] = 0;
$sl_in[3] = 0.58;
$sl_in[4] = 0.9;
$sl_in[5] = 1.12;
$sl_in[6] = 1.24;
$sl_in[7] = 1.32;
$sl_in[8] = 1.41;
$sl_in[9] = 1.45;
$sl_in[10] = 1.49;
$sl_in[11] = 1.51;
$sl_in[12] = 1.48;
$sl_in[13] = 1.56;
$sl_in[14] = 1.57;
$sl_in[15] = 1.59;
?>