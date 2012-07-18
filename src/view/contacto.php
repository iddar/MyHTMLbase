<?php $this->include_tpl("header.php"); ?>
            
            <article>
                <h2>Contactanos</h2>
                <div>
                    <p>
                        Donec quis ipsum erat, nec ornare nunc. Donec porta, dolor vitae facilisis accumsan, mi erat malesuada lorem, eget vulputate ligula odio ac tortor. Phasellus non nulla orci, sed placerat ipsum. Suspendisse potenti. In hac habitasse platea dictumst. Morbi sed pellentesque nulla. Nullam hendrerit, tellus id tristique euismod, neque est pharetra nibh, feugiat vestibulum ante felis eget arcu. Ut in massa nec augue interdum cursus ac ac felis. Pellentesque eu est ante, ac dapibus nisl. Vivamus metus purus, pharetra ut dapibus in, lobortis ut tortor. 
                    </p>
                <fieldset class="fiel-class">
                <legend>Formulario de contacto</legend>
                    <form method="post" action="enviar" id="correos">
                        <div class="datos col">
                            <label for="nombre">Nombre:</label>
                            <input id="nombre" name="nombre" value="" type="text" placeholder="Escribe tu Nombre" required="required"/><br />
                            <label for="empresa">Empresa:</label>
                            <input id="empresa" name="empresa" value="" type="text" placeholder="El nombre de tu empresa" required="required"/><br />
                            <label for="telefono">Telefono:</label>
                            <input id="telefono" name="telefono" value="" type="tel" placeholder="Num. Telefonico" autocomplete="off"/><br />
                            <label for="email">Email:</label>
                            <input id="email" name="email"  value="" type="email" autocomplete="off" placeholder="Correo electrionico" required="required"/>
                        </div>
                        <div class="campo-texto col">
                            <label for="mensaje">Mensaje:</label>
                            <textarea id="mensaje" name="mensaje" value="" id="Mensaje" rows="4" cols="10" name="Mensaje"></textarea>
                        <input type="submit" value="Enviar Mensaje" name="enviar">
                        </div>  
                    </form>
                </fieldset>
                </div>
                <div id="loading"></div>
                <div id="result"></div>
            </article>
            
<?php $this->include_tpl("footer.php"); ?>
