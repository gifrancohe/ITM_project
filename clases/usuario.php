<?php 
include("../Conexion/config.php");
//Definimos la clase
class Usuario {
    //Atributos
    public $nombre;
    public $apellido;
    public $cedula;
    public $username;
    public $password;
    public $direccion;
    public $telefono;
    public $email;
    public $municipio_id;
    public $tipo_usuario_id;

    //Contructor
    public function __construct($nombre, $apellido, $cedula, $username, $password, $direccion, $telefono, $email, $municipio_id, $tipo_usuario_id) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cedula = $cedula;
        $this->username = $username;
        $this->password = $password;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->municipio_id = $municipio_id;
        $this->tipo_usuario_id = $tipo_usuario_id;
    }

    //Getters and Setters
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email
    }

    public function getMunicipio_id() {
        return $this->municipio_id;
    }

    public function setMunicipio_id($municipio_id) {
        $this->municipio_id = $municipio_id
    }

    public function getTipo_usuario_id() {
        return $this->tipo_usuario_id;
    }

    public function setTipo_usuario_id($tipo_usuario_id) {
        $this->tipo_usuario_id = $tipo_usuario_id
    }

    public function crearUsuario() {
        $sql = "INSERT INTO municipio (municipio_id, tipo_usuario_id, nombre, apellido, cedula, username, password, direccion, telefono, email)
        VALUES ($this->municipio_id, $this->tipo_usuario_id, '$this->nombre', '$this->apellido', '$this->cedula', '$this->username', '$this->password', '$this->direccion', '$this->telefono', '$this->email)";
        $result = mysqli_query($db,$sql);
        return $result=mysqli_affected_rows($cid);
    }
}