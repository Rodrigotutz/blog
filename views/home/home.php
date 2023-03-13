<?php $this->layout("../components/_theme") ?>

<div class="container mt-5">
    <div class="row">
    <h2 class="text-center">Últimas Notícias</h2>
        <div class="col-10">
            <div class="row">
                <?php for($i = 0; $i < 6; $i++) : ?>
                    <div class="col-12 mb-5">                        
                        <div class="mt-5">
                            <img class="w-100 rounded-1" src="https://www.pontotel.com.br/wp-content/uploads/2022/05/imagem-corporativa.webp">
                            <div class="pt-1 pb-5">
                                <h4>Prédios de São Paulo</h4>
                                <a href="">Publicado por: Rodrigo Tutz / 13 de Março de 2023</a>
                            </div>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis harum asperiores similique vel optio quaerat unde. Quas provident aut repellat animi velit! Aut repudiandae quos atque eum in sint incidunt!
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis harum asperiores similique vel optio quaerat unde. Quas provident aut repellat animi velit! Aut repudiandae quos atque eum in sint incidunt!
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis harum asperiores similique vel optio quaerat unde. Quas provident aut repellat animi velit! Aut repudiandae quos atque eum in sint incidunt!
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis harum asperiores similique vel optio quaerat unde. Quas provident aut repellat animi velit! Aut repudiandae quos atque eum in sint incidunt!
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis harum asperiores similique vel optio quaerat unde. Quas provident aut repellat animi velit! Aut repudiandae quos atque eum in sint incidunt!
                            </p>

                            <button class="btn btn-primary">Ler Mais</button>
                            <hr>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="col-2 mt-5">
            <ul>
                <li><a href="">Últimas Notícias</a></li>
                <li><a href="">Todos os casos</a></li>
                <li><a href="">Denúncias</a></li>
                <li><a href="">Palestras</a></li>
                <li><a href="">Novidades</a></li>
            </ul>
        </div>
    </div>
</div>