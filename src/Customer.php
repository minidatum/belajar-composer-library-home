<?php 
namespace minidatum\belajar{

    class Customer{

        function __construct(private string $name){

        }

        function haloCustomer(string $name="Tamu"){
            echo "Halo $name, Saya $this->name!";
        }
    }
}










?>