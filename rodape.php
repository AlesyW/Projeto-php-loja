<?php 

require_once("conexao.php");
$query = $pdo->query("SELECT * FROM alertas where data >= curDate() and ativo = 'Sim' order by id limit 1");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
  $titulo = $res[0]['titulo_alerta'];
  $titulo_mensagem = $res[0]['titulo_mensagem'];
  $mensagem = $res[0]['mensagem'];
  $link = $res[0]['link'];
  $imagem = $res[0]['imagem'];


 ?>

  <div class="row">
      <a data-toggle="modal" href="#modalPromocoes">
      <div class="alert alert-danger fixed-bottom col-md-2" role="alert">
        <small><?php echo $titulo ?></small>
      </div>
      </a>

   </div>

<?php } ?>

<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li><?php echo $endereco_loja ?></li>
                        <li>Telefone: <?php echo $telefone ?></li>
                        <li>Email: <?php echo $email ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Principais Links</h6>
                    <ul>
                        <li><a href="contatos.php">Contatos</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                        <li><a href="carrinho.php">Carrinho</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="lista-produtos">Lista de Produtos</a></li>
                        <li><a href="categorias.php">Categorias</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Ainda não possui Cadastro?</h6>
                    <p>Insira seu email para se cadastrar em nosso site!!</p>
                    <form action="sistema/index.php" method="get">
                        <input type="email" name="email_rodape" placeholder="Insira seu Email" required>
                        <button type="submit" class="site-btn">Cadastre-se</button>
                    </form>
                    <div class="footer__widget__social">
                        <a target="_blank" title="Ir para página do Facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"><i class="fa fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p>
                      <?php echo $copyright ?> Desenvolvido por: <a class="text-success" href="" target="_blank">Alesy Willian</a>

                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                      <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                  </div>
              </div>
          </div>
      </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Js Plugins -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/mixitup.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

  <script src="js/mascara.js"></script>




</body>

</html>




<div class="modal" id="modalPromocoes" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo @$titulo ?> - <?php echo $titulo_mensagem ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <span class="text-muted"><i><?php echo $mensagem ?> 
              <?php if($link != ""){ ?>
              clique <a class="text-danger" href="<?php echo $link ?>" target="_blank"> aqui</a> para ir para ver!!
            <?php } ?>
            </i></span>

            <div class="mt-3">
            <img src="img/alertas/<?php echo $imagem ?>" width="100%">
           </div>

                <div align="center" id="mensagem_excluir" class="">

                </div>

            </div>
            
        </div>
    </div>
</div>

