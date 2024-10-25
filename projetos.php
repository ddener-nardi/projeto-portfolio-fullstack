<?php 
    include_once("templates/header.php");
    
    $search = filter_input(INPUT_GET, "search");
    // $projetos = getProjects($conn);
    $projetos = findByTitle($conn, $search)
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
                <form action="" class="projects-form d-flex justify-content-start align-items-center">
                    <div class="contact-checkbox d-flex mt-3 me-5">
                        <input type="checkbox" name="all" id="all" class="me-3">
                        <label for="all">Todos</label>
                    </div>
                    <div class="contact-checkbox d-flex mt-3 me-5">
                        <input type="checkbox" name="front" id="front" class="me-3">
                        <label for="front">Front-end</label>
                    </div>
                    <div class="contact-checkbox d-flex mt-3 me-5">
                        <input type="checkbox" name="back" id="back" class="me-3">
                        <label for="back">Back-end</label>
                    </div>
                    <div class="select-input mt-3 me-5">
                        <select name="" id="">
                            <option value="recent">Mais recentes</option>
                            <option value="antigos">Mais antigos</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-xl mt-5">
        <div class="row">
            <?php foreach ($projetos as $projeto): ?>
                <div class="col-3">
                    <a href="<?php $BASE_URL ?>single-proj.php?id=<?= $projeto["id"] ?>">
                        <div class="projects-post">
                            <div class="projects-post-img position-relative">
                                <img src="<?=$projeto['imagem']?>">
                                <span class="project-name"><?=$projeto['nome_projeto']?></span>
                            </div>
                            <div class="projects-post-desc">
                                <p><?=$projeto['descricao']?></p>
                                <a href="<?php $BASE_URL ?>single-proj.php?id=<?= $projeto["id"] ?>">
                                    Saiba mais
                                    <i class="bi bi-plus-lg"></i>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php include_once("templates/footer.php") ?>