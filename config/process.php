<?php 
    session_start();

    include_once "connection.php";
    include_once "url.php";

    $id;

    function getProjects($connection){

        $projetos = [];

        $query = "SELECT * FROM projetos";

        $stmt = $connection->prepare($query);

        $stmt -> execute();

        return $stmt->fetchAll();
    }

    function findByTitle($connection, $nome){
        $projetos = [];

        $query = "SELECT * FROM projetos WHERE nome_projeto LIKE :nome_projeto";

        $stmt = $connection->prepare($query);

        $stmt -> bindValue(":nome_projeto", '%' .$nome. '%');

        $stmt -> execute();

        return $stmt->fetchAll();
    }

    
    function filterByCategory($connection, $search = null){
        // Inicializa os valores como "falsos" por padrão
        $all_check = false;
        $front_check = false;
        $back_check = false;
    
        // Inicializa a query base
        $query = "SELECT * FROM projetos";
        $conditions = [];
    
        // Verifica o método GET
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
    
            // Verifica se "all" está marcado
            if (isset($_GET['all'])) {
                $all_check = true;
                $front_check = true;
                $back_check = true;
                // Se "all" estiver marcado, não é necessário adicionar filtros de categoria
            } else {
                // Se "all" não estiver marcado, verifica individualmente por "front" e "back"
                if(isset($_GET['front']) && isset($_GET['back'])){
                    $conditions[] = "categoria IN ('frontend', 'backend')";
                    $all_check = true;
                    $front_check = true;
                    $back_check = true;
                }

                if (isset($_GET['front'])) {
                    $conditions[] = "categoria = 'frontend'";
                    $front_check = true;
                }
    
                if (isset($_GET['back'])) {
                    $conditions[] = "categoria = 'backend'";
                    $back_check = true;
                }
            }
    
            // Verifica se há um termo de busca e adiciona à query
            if ($search) {
                $conditions[] = "nome_projeto LIKE :search";
            }
    
            // Adiciona as condições à query caso haja filtros
            if (!empty($conditions)) {
                $query .= " WHERE " . implode(" AND ", $conditions);
            }
        }
    
        // Executa a query e obtém os resultados
        $stmt = $connection->prepare($query);
    
        // Se há um termo de busca, o valor é atribuído à consulta
        if ($search) {
            $stmt->bindValue(':search', '%' . $search . '%');
        }
    
        $stmt->execute();
        $projetos = $stmt->fetchAll();
    
        // Retorna os projetos e o estado dos checkboxes
        return [
            'projetos' => $projetos,
            'all_check' => $all_check,
            'front_check' => $front_check,
            'back_check' => $back_check
        ];
    }
        

    function getFilterQuery($connection, $query){
        $stmt = $connection -> prepare($query);

        $stmt -> execute();

        return $stmt -> fetchAll();
    }
?>