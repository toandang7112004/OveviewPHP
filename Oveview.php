<?php
/*
=========================Các kiểu dữ liệu trong php=========================== 
       -Kiểu số thực float:phân tách phần nguyên và phần thập phân bằng dấu . hoặc ,
       -boolean:Kiểu số logic boolean (True,Fasle)
       -string:tập hợp các ký tự tạo thành dòng chữ, dòng text, văn bản.
       -array: là một loại biến đặc biệt, trong nó giữ nhiều giá trị
       -object: là thực thể do PHP sinh ra từ các định nghĩa lớp,
        thực thể này có thể chứa trong nó dữ liệu và các hàm thi hành
       -callable: Tham chiếu tới đối tượng có thể gọi thực thi, gọi là các callback
       -iterable:là kiểu có thề dùng với vòng lặp foreach
*/
    //kiểu số nguyên int:Kiểu số nguyên 
    $number = 2233;
    echo $number;
    //Kiểu số thực float
    $PI = 3.14;
    echo $PI;
    //kiểu string
    $name = 'Hoàng đăng toàn';
    echo $name;
    //boolean false
    $int = (bool)0 ;//dữ liệu = 0
    $int = (bool)'0' ;//chuôi = 0
    $int = (bool)null;//dữ liệu = null
    $int = (bool)null;//dữ liệu = null
    $arr = [];
    $int = (bool)$arr;//dữ liệu mảng rỗng 
    var_dump($int);
    //Mảng tuần tự là mảng có key tự động tạo bắt đầu từ 0
    $arr = ['A','B','C','D'];
    echo '<pre>';
    var_dump($arr);
    echo '</pre>';
    //Mảng không tuần tự là mảng có key mà bạn tự định nghĩa 
    $arr1 = [
        'a' => 'abd',
        '1' => '234',
    ];
    echo '<pre>';
    var_dump($arr1);
    echo '</pre>';
    //Mảng đa chiều là là mảng có chứa ít nhất một mảng khác trong nó.
    $arr2 = [
        ['Hoàng'],
        ['Đăng'],
        ['Toàn']
    ];
    echo '<pre>';
    var_dump($arr2[0]);//in ra Hoàng
    echo '</pre>';
    //callback
    function tinhtoan($pheptinh, $a, $b) {
        $pheptinh($a, $b);//callback
    }
    
    tinhtoan('phepcong', 5,5); // in ra 10