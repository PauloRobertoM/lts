<?php include 'components/header.php'; ?>

      <section class="topo2">
         <div class="container">
            <h1>Contato</h1>

            <ol class="breadcrumb">
               <li><a href="#">Início</a></li>
               <li class="active">Contato</li>
            </ol>
         </div><!-- .container -->
      </section><!-- .topo2 -->

      <section class="interna contato">
         <div class="container">
            <form>
              <div class="form-group">
                 <label>Nome</label>
                 <input type="text" name="nome" id="nome" class="form-control" value="" />
              </div><!-- .form-group -->
              
              <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                       <label>E-mail</label>
                       <input type="text" name="email" id="email" class="form-control" value="" />
                    </div><!-- .form-group -->
                 </div><!-- .md-6 -->
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                       <label>Telefone</label>
                       <input type="text" name="telefone" id="telefone" class="form-control" value="" />
                    </div><!-- .form-group -->
                 </div><!-- .md-6 -->
              </div><!-- .row -->

              <div class="form-group">
                 <label>Mensagem</label>
                 <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
              </div><!-- .form-group -->

              <input type="submit" class="botao" value="Enviar" />
           </form>
         </div><!-- .container -->
      </section><!-- .interna-blog -->
      
      <section class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.250956661829!2d-35.221911584865026!3d-5.820189495782684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b2555e7b4c62eb%3A0x280efb69a63bae6!2sL%C3%BAcio+Teixeira+dos+Santos+Advogados!5e0!3m2!1spt-BR!2sbr!4v1506432440424" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section><!-- .mapa -->

      <?php include 'components/conheca-nossa-estrutura.php'; ?>

<?php include 'components/footer.php'; ?>