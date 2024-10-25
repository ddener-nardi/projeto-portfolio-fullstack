<?php 
    include_once ("templates/header.php");
?>
<main>
    <div class="container-xl ">
        <div class="row mt-100">
            <div class="col-8">
                <p class="mt-5 mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque deleniti tenetur quos ad, error, esse pariatur architecto inventore sint veniam officia aut consequatur molestiae illo aspernatur quisquam nostrum et recusandae! Nam possimus nulla ipsam mollitia provident dignissimos eius earum tempore! Enim corporis eligendi sequi. Earum voluptas blanditiis odio. Totam aspernatur nobis alias nisi, ullam rerum quisquam repellat rem perspiciatis iste provident non aliquam aperiam! Corrupti beatae magnam deleniti amet, excepturi inventore pariatur doloribus nemo. Dignissimos molestias consequatur quo at recusandae minus unde quis ex aliquid sequi. Id quae, molestiae necessitatibus tenetur vitae eum consectetur enim sunt repudiandae blanditiis. Minima, fuga? Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, doloribus iusto eius eligendi voluptatem quam voluptatibus suscipit autem. Unde iure ut nulla, nisi, facilis atque aperiam minus culpa commodi at ratione quas ipsam numquam labore. Laboriosam omnis neque, eligendi quo unde totam voluptatibus possimus illum quis enim illo eaque, eum ipsam harum sequi, quia vitae doloribus. Illum laudantium minima ipsam ratione ea placeat suscipit eveniet quae numquam quisquam dolorum ducimus in totam sit est, magni vero officia neque incidunt quam, cumque expedita molestiae amet. Rem dolores ipsa ipsum. Autem reprehenderit neque ipsam accusantium harum ex eius consequatur dolorum esse sint!</p>
            </div>
            <div class="col-4">
                <div class="projects-card">
                    <div class="card-img">
                        <img src="<?=$projeto['imagem']?>">
                    </div>
                    <div class="card-info">
                        <p><?=$projeto['nome_projeto']?></p>
                        <p>Tecnologias utilizadas: <?=$projeto['tecnologias']?></p>
                        <p>Descrição: <?=$projeto['descricao']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php 
    include_once ("templates/footer.php");
?>