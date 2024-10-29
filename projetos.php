<?php 
    include_once("templates/header.php");
    

    // Verifica se há um termo de busca
    $search = filter_input(INPUT_GET, "search");

    // Aplicamos os filtros de categoria e armazenamos o resultado
    $filter_boxes = filterByCategory($conn, $search);

    // Checagem dos filtros para manter os checkboxes marcados
    $all_check = $filter_boxes['all_check'];
    $front_check = $filter_boxes['front_check'];
    $back_check = $filter_boxes['back_check'];

    // Projetos filtrados de acordo com busca e categorias
    $projetos = $filter_boxes['projetos'];

    
    
?>
<main class="projects-main">
    <div class="container-xl">
        <div class="row">
            <div class="col-12 projects-title">
                <h1>PROJETOS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">Você buscou por "<?=$search?>"</div>
        </div>
        <div class="row">
            <div class="col-6">Veja o que foi encontrado!</div>
        </div>
        <hr>
    </div>
    <div class="container-xl">
        <div class="row">
            <div class="col-12">
                <form action="<?= $BASE_URL ?>projetos.php" method="GET" class="projects-form d-flex justify-content-start align-items-center">
                    <div class="contact-checkbox d-flex mt-3 me-5">
                        <input type="checkbox" name="all" id="all" <?php if($all_check == true) echo 'checked' ?> class="me-3">
                        <label for="all">Todos</label>
                    </div>
                    <div class="contact-checkbox d-flex mt-3 me-5">
                        <input type="checkbox" name="front" id="front" <?php if($front_check == true) echo 'checked'?> class="me-3">
                        <label for="front">Front-end</label>
                    </div>
                    <div class="contact-checkbox d-flex mt-3 me-5">
                        <input type="checkbox" name="back" id="back" <?php if($back_check == true) echo 'checked'?> class="me-3">
                        <label for="back">Back-end</label>
                    </div>
                    <div class="select-input mt-3 me-5">
                        <select name="" id="">
                            <option value="recent">Mais recentes</option>
                            <option value="antigos">Mais antigos</option>
                        </select>
                    </div>
                    <button type="submit">filtrar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container-xl mt-5">
        <div class="row">
            <?php if (!empty($projetos)):?>
            <?php foreach ($projetos as $projeto): ?>
                <div class="col-3">
                    <a href="<?= $BASE_URL ?>single-proj.php?id=<?= $projeto["id"] ?>" style="text-decoration: none;">
                        <div class="projects-post">
                            <div class="projects-post-img position-relative">
                                <img src="<?=$projeto['imagem']?>">
                                <span class="project-name"><?=$projeto['nome_projeto']?></span>
                            </div>
                            <div class="projects-post-desc d-flex flex-column">
                                <p><?=$projeto['descricao']?></p>
                                <span>
                                    Saiba mais
                                    <i class="bi bi-plus-lg"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12">
                    <h2>Nenhum projeto encontrado!</h2>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php include_once("templates/footer.php") ?>