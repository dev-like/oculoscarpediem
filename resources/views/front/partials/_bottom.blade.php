
      <!-- Footer Type-1 -->
      <footer class="footer footer-type-1 bg-dark">
        <div class="container">
          <div class="footer-widgets pb-mdm-20">
            <div class="row">

              <div class="col-md-3 col-sm-6 col-xs-12">

                <div class="widget footer-about-us">
                  <a href="#">
                      <img src="{{url('/')}}/assets/img/logo-rodape.png" alt="Footer logo" />
                  </a>
                  <p class="mb-0">A Carpe Diem, é uma empresa brasileira, que atua no ramo óptico, teve seu início em março de 2015, priorizando sempre um excelente atendimento e ofertando os melhores produtos aos clientes.</p>
                </div>
              </div> <!-- end about us -->

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget footer-get-in-touch">
                  <h5 class="widget-title uppercase">CONTATO</h5>

                  <p>{!!$quemsomos->telefone1!!}</p>
                  <p>{!!$quemsomos->email!!}</p>

                </div>
              </div> <!-- end stay in touch -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget footer-get-in-touch">
                  <h5 class="widget-title uppercase">ENDEREÇO</h5>

                  <address class="footer-address" style="margin-bottom:0px">Imperial Shopping (2º piso), Rodovia BR 010, n° 100  - Jardim São Luís, Imperatriz - MA</address>

                </div>
              </div> <!-- end stay in touch -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget footer-get-in-touch">
                  <h5 class="widget-title uppercase">TRABALHE CONOSCO</h5>
                <div class="contact-list" style="color:#fff;">
                  <ul>
                      <li style="margin-bottom: 42px;">
                          <span>Especificar no assunto do e-mail e a vaga pretendida.</span>
                      </li>
                      <a style="color:#fff; font-weight:bold;" href="mailto:atendimento@oculoscarpediem.com.br">
                        <li class="enviar-arquivo" style="padding: 5px 10px;background-color: #050505; font-weight:500">
                          Enviar Currículo
                      </li>
                      </a>
                  </ul>
                </div>
              </div>
            </div>



            </div>
          </div>
        </div> <!-- end container -->

        <div class="bottom-footer">
          <div class="container">
            <div class="row">

              <div class="col-sm-12 copyright sm-text-center" style="text-align:center">
                <span>
                  Copyright © <?php echo date("Y"); ?> CARPE DIEM. Todos os direitos reservados.</a>
                </span>
              </div>



            </div>
          </div>
        </div> <!-- end bottom footer -->
      </footer> <!-- end footer -->
