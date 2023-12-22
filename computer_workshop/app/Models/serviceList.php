<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class serviceList extends Model
{
    protected $table = 'service_lists';
    protected $guarded = false;
    public string $carName;
    public string $serviceType;
    public int $time;
    public int $price;
    public static function getCount(int $min,int $max,string $name,string $car)
    {
        $hostname = "localhost";
        $username = "root";
        $password = "password";
        $databaseName = "laravel";
        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        $res = $connect->query("SELECT DISTINCT COUNT(*) FROM services WHERE services.serviceName LIKE '%$name%'and services.price >= '$min' and services.price < '$max' and services.avto LIKE '%$car%'");
        $row = $res->fetch_row();
        $count = $row[0];
        return $count;
    }
    public static function getNumber(int $i, int $min,int $max,string $name,string $car)
    {
        $hostname = "localhost";
        $username = "root";
        $password = "password";
        $databaseName = "laravel";
        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        $res = $connect->query("SELECT id FROM services WHERE services.serviceName LIKE '%$name%'and services.price >= '$min' and services.price < '$max' and services.avto LIKE '%$car%'");
        if ($res->num_rows > 0)
        {
            for($j=0; $j <=$i; $j++)
            {
                $row = $res->fetch_assoc();
                $number = $row["id"];
            }
            return $number;
        }
        $connect->close();
        return "Error";
    }
    public static function AllList()
    {
        $hostname = "localhost";
        $username = "root";
        $password = "password";
        $databaseName = "laravel";
        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        $res = $connect->query("SELECT id, serviceName, mainInfo, allInfo, price, image, avto, services.time FROM services");
        while($row = $res->fetch_assoc())
        {
            $stringArray[] = $row;
        }
        file_put_contents('services.json',json_encode($stringArray, JSON_UNESCAPED_UNICODE));
        $connect->close();
    }
    public static function FilterList($min, $max,$selectedServiceType,$AutoType)
    {
        $hostname = "localhost";
        $username = "root";
        $password = "password";
        $databaseName = "laravel";
        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        $res = $connect->query("SELECT id, serviceName, mainInfo, allInfo, price, image, avto, services.time FROM services Where price >= '$min' and price < '$max' and services.type LIKE '%$selectedServiceType%' and services.avto LIKE '%$AutoType%'");
        while($row = $res->fetch_assoc())
        {
            $stringArray[] = $row;
        }
        file_put_contents('services.json',json_encode($stringArray, JSON_UNESCAPED_UNICODE));
        $connect->close();
    }
    public static function SearchService($name)
    {
        $hostname = "localhost";
        $username = "root";
        $password = "password";
        $databaseName = "laravel";
        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        $res = $connect->query("SELECT id, serviceName, mainInfo, allInfo, price, image, avto, services.time FROM services Where serviceName LIKE '%$name%'");
        while($row = $res->fetch_assoc())
        {
            $stringArray[] = $row;
        }
        file_put_contents('services.json',json_encode($stringArray, JSON_UNESCAPED_UNICODE));
        $connect->close();
    }
}
