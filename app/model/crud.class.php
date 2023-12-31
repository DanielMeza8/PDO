<?php

    class Crud {

        private $conexion;
        private $host = "localhost";
        private $username = "root";
        private $pass = "123Yandari"; 
        private $bd = "agenda";

        public function __construct()
        {
            $this->conexion= new PDO("mysql:host=$this->host;dbname=$this->bd", $this->username, $this->pass); //nos permite conectarnos a diferentes SGBD SQL
        }

        //INSERT INTO `agenda`.`contactos` (`nombre`, `email`, `telefono`, `idCategoria`, `creadopor`) VALUES ('prueba2', 'prueba2@gmail.com', '6578987649', '1', '2');

        public function read($id){
            $query = "SELECT * FROM dataagenda WHERE creadopor=:creadopor";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":creadopor", $id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }
        
        public function readCategorias(){
            $query = "SELECT * FROM categorias";
            $stmt = $this->conexion->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }

        public function create($data){
            $query = "INSERT INTO `contactos` (nombre, telefono, email, idCategoria, creadopor) Values (:nombre, :telefono, :email, :idCategoria, :creadopor)";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":nombre", $data["nombre"]);
            $stmt->bindParam(":telefono", $data["telefono"]);
            $stmt->bindParam(":email", $data["email"]);
            $stmt->bindParam(":idCategoria", $data["idCategoria"]);
            $stmt->bindParam(":creadopor", $data["creadopor"]);
            $stmt->execute();
            unset($this->conexion);
            return json_encode($stmt);
        }

        public function createCategoria($data){
            $query = "INSERT INTO `categorias` (nombre, descripcion) VALUES (:nombre, :descripcion)";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":nombre", $data["nombre"]);
            $stmt->bindParam(":descripcion", $data["descripcion"]);
            $stmt->execute();
            unset($this->conexion);
            return json_encode($stmt);
        }

        public function updateCategoria($data){
            $query = "UPDATE categorias SET nombre=:nombre, descripcion=:descripcion WHERE id=:id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":id", $data["id"]);
            $stmt->bindParam(":nombre", $data["nombre"]);
            $stmt->bindParam(":descripcion", $data["descripcion"]);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;

        }

        public function update($data){
            $query = "UPDATE contactos SET nombre=:nombre, email=:email, telefono=:telefono, idCategoria=:idCategoria
                        WHERE id=:id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":id", $data["id"]);
            $stmt->bindParam(":nombre", $data["nombre"]);
            $stmt->bindParam(":telefono", $data["telefono"]);
            $stmt->bindParam(":email", $data["email"]);
            $stmt->bindParam(":idCategoria", $data["idCategoria"]);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }

        //UPDATE `agenda`.`contactos` SET `nombre` = 'Romeo', `email` = 'a.cch@gmail.com', `telefono` = '5626370114', `idCategoria` = '3' WHERE (`id` = '18');
        //UPDATE `agenda`.`contactos` SET `nombre` = 'maria', `email` = 'jo@gmail.com', `telefono` = '5546432244', `idCategoria` = '3' WHERE (`id` = '22');

        public function deleteCategoria($data) {
            $query = "DELETE FROM categorias WHERE id=:id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":id", $data["id"]);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }


        public function delete($data) {
            $query = "DELETE FROM contactos WHERE id=:id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":id", $data["id"]);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }

        public function show($id){
            $query = "SELECT * FROM contactos WHERE id=:id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":id", $id);
            $result = $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }

        public function showCategoria($id){
            $query = "SELECT * FROM categorias WHERE id=:id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":id", $id);
            $result = $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }

        public function login($email, $password){
            $query = "SELECT * FROM registro_usuario WHERE email=:email AND password=:password";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);
            $stmt->execute();
            // $numrows = $stmt->fetchColumn();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            unset($this->conexion);
            if ($result) {
                $_SESSION['usuario'] = $result["id"];
                header("location:../../../read");
            } else { ?>
                <script>
                    alert("EL usuario o el password son incorrectos");
                    window.location.assign("../../../login");
                </script>
            <?php 
            }

        }


        public function registro($email,$password){
            $query = "INSERT INTO `registro_usuario` (email, password) VALUES (:email, :password)";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);
            $stmt->execute();
            unset($this->conexion);
            return json_encode($stmt);

        }
    }

?>