<?php 

namespace App\Controllers;

use App\Models\Usuario;

class Home extends BaseController
{
    


    public function about()
    {
        return view('about');
    }


    public function appointment () {
        return view("appointment");
    }


 public function cita()
    {
       $database = "barberia";
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = MySQLi_connect($servername, $username, $password);

        mysqli_select_db($conn, $database) or die ("Ninguna base de datos");
        
        if (isset($_POST["first_name"]) == TRUE) {
            $nombre = $_POST["first_name"];
            $apellido= $_POST["last_name"];
            $correo = $_POST["email"];
            $telefono = $_POST["phone"];
            $hora = $_POST["tiempo"];
           

            $accion = "INSERT INTO cita (nombre,apellido,correo,telefono,hora) values ('$nombre','$apellido','$correo',' $telefono','$hora')";
            MySQLi_query($conn, $accion) or die(mysql_error());

            return redirect()->to(base_url().route_to('appointment'));
        }

    }


public function barbers()
    {
        return view('barbers');
    }

    public function entrar()
    {
        $database = "barberia";
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = MySQLi_connect($servername, $username, $password);

        mysqli_select_db($conn, $database) or die ("Ninguna base de datos");
        
        if (isset($_POST["first_name"]) == TRUE) {
            $nombre = $_POST["first_name"];
            $apellido= $_POST["last_name"];
            $correo = $_POST["email"];
            $telefono = $_POST["phone"];
            


            $accion = "INSERT INTO contacto (nombre,apellido,correo,telefono) values ('$nombre','$apellido','$correo',' $telefono' )";
            MySQLi_query($conn, $accion) or die(mysql_error());

            return redirect()->to(base_url().route_to('contact'));
        }

        
    }

          
        
 public function logi()
     
     {
        return view('logi', );

        
    
    }
   
    public function services()
    {
        return view('services');
    }

   public function index()
    {
        return view('index');
    }
 public function contact()
    {
        return view('contact');
    }


 public function ingresar()
    
    {}
public function ingresa()
    {
        return view('ingresa');
    }

}


