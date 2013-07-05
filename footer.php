                <section class="block turquoise" id="contacts">
                    <div class="block-holder">
                        <h2>Contato</h2>
                        <form name="form" method="post" action="<?php echo get_template_directory_uri(); ?>/send_contact.php" class="contact-form">
                            <fieldset>
                                <input name="name" id="name" type="text" placeholder="Nome..." required>
                                <input name="customer_mail" id="customer_mail" type="email" placeholder="Email..." required>
                                <textarea name="message" id="message" placeholder="Mensagem..." cols="30" rows="10" required></textarea>
                                <input type="submit" name="Submit" value="Enviar">
                            </fieldset>

                        </form>
                        <div class="contact-holder">
                            <div class="map">
                                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=pt&amp;geocode=&amp;q=Tarumirim+-+Minas+Gerais,+Brazil&amp;aq=0&amp;oq=tar&amp;sll=37.0625,-95.677068&amp;sspn=38.638819,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Tarumirim+-+Minas+Gerais,+Brasil&amp;t=m&amp;ll=-19.244709,-41.999359&amp;spn=0.113448,0.145912&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=pt&amp;geocode=&amp;q=Tarumirim+-+Minas+Gerais,+Brazil&amp;aq=0&amp;oq=tar&amp;sll=37.0625,-95.677068&amp;sspn=38.638819,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Tarumirim+-+Minas+Gerais,+Brasil&amp;t=m&amp;ll=-19.244709,-41.999359&amp;spn=0.113448,0.145912&amp;z=12&amp;iwloc=A" style="color:#0000FF;text-align:left">Ver mapa maior</a></small>
                            </div>
                            <div class="contact-columns">
                                <div class="col">
                                    <p class="hidden fn"><?php echo bloginfo( 'name' ); ?></p>
                                    <p>Email: <a class="mail" href="mailto:gudesouzalima@gmail.com">gudesouzalima@gmail.com</a></p>
                                    <p class="tel">Telefone: <span class="hidden type">trabalho</span> (31) 8779-4711</p>
                                    <p>Website: <a class="url" href="http://gustavosouzalima.com.br/" title="http://gustavosouzalima.com.br">http://gustavosouzalima.com.br</a></p>
                                </div>
                                <div class="col">
                                    <address>
                                    CEP: <span class="postal-code">35140-000</span><br>
                                    Cidade: <span class="region">Tarumirim - MG</span></span><br>
                                    <!-- Rua: <span class="street-address">Corrego do Pati</span><br> -->
                                    <!-- Office:  2nd Floor, 44 -->
                                    </address>
                                </div>
                            </div>
                            <ul class="social-networks">
                                <li><a href="https://www.facebook.com/gustavo.w4lker" target="_blank"><img alt="facebook" src="<?php echo get_template_directory_uri(); ?>/img/facebook.png"></a></li>
                                <li><a href="https://twitter.com/dodilei" target="_blank"><img alt="twitter" src="<?php echo get_template_directory_uri(); ?>/img/twitter.png"></a></li>
                                <li><a href="https://plus.google.com/111405739393810430313" target="_blank"><img alt="google+" src="<?php echo get_template_directory_uri(); ?>/img/google%2b.png"></a></li>
                                <!-- <li><a href="#"><img alt="dribbble" src="<?php echo get_template_directory_uri(); ?>/img/dribbble.png"></a></li> -->
                                <!-- <li><a href="#"><img alt="flickr" src="<?php echo get_template_directory_uri(); ?>/img/flickr.png"></a></li> -->
                                <li><a href="http://lnkd.in/mWUnTs" target="_blank"><img alt="linkedin" src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png"></a></li>
                            </ul>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>
</body>
</html>