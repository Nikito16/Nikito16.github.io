<?php
require_once 'Db.php';


// Definición de la clase Usuario que representa a un usuario en el sistema
class Usuario {
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $db;

    // Constructor que establece la conexión a la base de datos
    public function __construct() {
        $this->db = Database::connect(); // Se asume que existe una clase Database que maneja la conexión
    }

    // Métodos getter y setter para cada atributo
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $this->db->real_escape_string($id);
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $this->db->real_escape_string($email);
    }

    public function getPassword() {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['COST' => 4]);
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    // Método para guardar un nuevo usuario en la base de datos
    public function save() {
        $sql = "INSERT INTO usuarios (nombre, apellidos, email, password) 
                VALUES ('{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}');";
        $save = $this->db->query($sql);
        return $save ? true : false;
    }

    // Método para obtener todos los usuarios
    public function getAll() {
        $usuarios = $this->db->query("SELECT * FROM usuarios;");
        return $usuarios; // Retorna el resultado de la consulta
    }

    // Método para obtener un usuario por ID
    public function getOne() {
        $sql = "SELECT * FROM usuarios WHERE id = '{$this->getId()}';";
        $usuario = $this->db->query($sql);
        return $usuario->fetch_object(); // Retorna el objeto del usuario
    }

    // Método para actualizar un usuario
    public function update() {
        $sql = "UPDATE usuarios SET nombre='{$this->getNombre()}', apellidos='{$this->getApellidos()}', email='{$this->getEmail()}' WHERE id='{$this->getId()}';";
        $update = $this->db->query($sql);
        return $update ? true : false;
    }

    // Método para eliminar un usuario
    public function delete() {
        $sql = "DELETE FROM usuarios WHERE id='{$this->getId()}';";
        $delete = $this->db->query($sql);
        return $delete ? true : false;
    }

    public function emailExists($email) {
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = $this->db->query($sql);
        return $result->num_rows > 0;
    }

    public function login() {
        $resultado = false;
        $email = $this->email;
        $password = $this->password;
    
        // Comprobar si el usuario existe.
        $sql = "SELECT * FROM usuarios WHERE email='$email'";
        $login = $this->db->query($sql);
    
        if ($login && $login->num_rows == 1) {
            // Identificar y verificar contraseña.
            $usuario = $login->fetch_object();
            if (password_verify($password, $usuario->password)) {
                $resultado = $usuario;
            }
        }
    
        return $resultado; // Devuelve el objeto usuario o false si no coincide.
    }
    
}
?>