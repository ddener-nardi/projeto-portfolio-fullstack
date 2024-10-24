<?php include_once("templates/header.php") ?>
<main>
    <section class="main-container-section">
        <div class="container-xl main-container pt-5">
            <div class="row pt-5">
            <div class="title-wrapper d-flex justify-content-start">
                <h2 class="ms-0">Formulário de contato:</h2>
            </div>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-6">
                        <div class="inputs-contact-page">
                            <div class="contact-input d-flex flex-column">
                                <label for="name">Nome:</label>
                                <input type="text" id="fullname" name="fullname">
                            </div>
                            <div class="contact-input d-flex flex-column">
                                <label for="name">Endereço:</label>
                                <input type="text" id="fullname" name="fullname">
                            </div>
                            <div class="contact-input d-flex flex-column">
                                <label for="name">Email:</label>
                                <input type="text" id="fullname" name="fullname">
                            </div>
                            <div class="contact-input d-flex flex-column">
                                <label for="name">Telefone:</label>
                                <input type="text" id="fullname" name="fullname">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="contact-textarea d-flex flex-column">
                            <label for="message">Insira sua mensagem:</label>
                            <textarea name="message" id="message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="contact-checkbox d-flex mt-3">
                        <input type="checkbox" name="agree" id="agree" class="me-3">
                        <label for="agree">I agre with condition terms...</label>
                    </div>
                </div>
                <div class="row">
                    <div class="send-inputs">
                        <button class="enviar-btn">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
<?php include_once("templates/footer.php") ?>