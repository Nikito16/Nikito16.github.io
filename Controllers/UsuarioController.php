<?php
require_once 'Models/Usuario.php';
require_once 'configuracion.php';

class UsuarioController {

    private $accionesPublicas = ['login','registro', 'save'];

    public function __construct() {
        // Obtener la acción actual de la URL
        $accionActual = isset($_GET['accion']) ? $_GET['accion'] : '';
        
        // Verificar si necesita autenticación
        if (!in_array($accionActual, $this->accionesPublicas)) {
            // Si la acción no es pública y no hay sesión, redirigir al login
            if (!isset($_SESSION['usuario'])) {
                header("Location: " . base_url . "login.php");
                exit();
            }
        }
    }
    
    public function index() {
        $usuario = new Usuario();
        $usuarios = $usuario->getAll(); 
        require_once 'Views/Usuarios/listar.php'; 
    }

    
    public function registro() {
        require_once 'Views/Usuarios/registro.php'; 
    }
    
    
    public function save() {
        if (isset($_POST)) {
            $usuario = new Usuario();
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellidos($_POST['apellido']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            
            $save = $usuario->save(); 

            
            if ($save) {
                $_SESSION['register'] = "complete"; 
            } else {
                $_SESSION['register'] = "failed"; 
            }
        } else {
            $_SESSION['register'] = "failed"; 
        }

        
        header("Location:" . base_url . 'indexCRUD.php?controlador=UsuarioController&accion=index');
    }

    
    public function edit() {
        if (isset($_GET['id'])) {
            $usuario = new Usuario();
            $usuario->setId($_GET['id']);
            $usuarioData = $usuario->getOne(); 
            require_once 'Views/Usuarios/editar.php'; 
        } else {
            header("Location:" . base_url . 'indexCRUD.php?controlador=UsuarioController&accion=index'); 
        }
    }

    
    public function update() {
        if (isset($_POST)) {
            $usuario = new Usuario();
            $usuario->setId($_POST['id']);
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellidos($_POST['apellido']);
            $usuario->setEmail($_POST['email']);
            
            $update = $usuario->update(); 
            if ($update) {
                $_SESSION['update'] = "complete"; 
            } else {
                $_SESSION['update'] = "failed"; 
            }
        } else {
            $_SESSION['update'] = "failed"; 
        }

        
        header("Location:" . base_url . 'indexCRUD.php?controlador=UsuarioController&accion=index');
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $usuario = new Usuario();
            $usuario->setId($_GET['id']);
            $delete = $usuario->delete(); 

            
            if ($delete) {
                $_SESSION['delete'] = "complete"; 
            } else {
                $_SESSION['delete'] = "failed"; 
            }
        } else {
            $_SESSION['delete'] = "failed"; 
        }

        
        header("Location:" . base_url . 'indexCRUD.php?controlador=UsuarioController&accion=index');
    }

    public function login() {
        if (isset($_POST)) {
            $usuario = new Usuario(); 
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
    
            
            $identificacion = $usuario->login();
    
            if ($identificacion && is_object($identificacion)) {
                $_SESSION['usuario'] = $identificacion; 
    
                header("Location: " . base_url . "indexCRUD.php?controlador=UsuarioController&accion=index");
            } else {
                $_SESSION['error_login'] = "Credenciales inválidas.";
                header("Location: " . base_url . "login.php"); 
            }
        }
    }

    public function logout() {
        if (isset($_SESSION['usuario'])) {
            unset($_SESSION['usuario']);
        }

        header("Location: " . base_url . "login.php");
    }
}
?>