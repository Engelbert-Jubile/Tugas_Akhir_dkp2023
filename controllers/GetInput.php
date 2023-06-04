<?php 

// Class getinput untuk mendapatkan hasil input di halaman utama
class GetInput {
    // Variabel private static yang dimana di akses dengan syntax $class::property
    private static $name;

    // Fungsi getter setter static yang di akses dengan syntax $class::method

    // Getter
    public static function get_name() {
        return self::$name;
    }

    // Setter
    public static function set_name($name) {
        self::$name = $name;
    }
}

