<?php $this->include_tpl("header.php"); ?>
            
            <article>
                <h2>Soporte</h2>
                <div>
                    <p>
                        
                    </p>
                <fieldset class="fiel-class">
                <legend>Formulario de contacto</legend>
                    <form method="post" action="soporte-user" id="soporte">
                        <div class="campo-texto col">
                            <img src="static/img/soporte.jpg">
                        </div> 
                        <div class="datos col">
                            <label for="usuario">Nombre:</label>
                            <input id="usuario" name="usuario" value="" type="text" placeholder="Escribe tu usuario" required="required" pattern="cliente" /><br />

                            <label for="pass">Contraseña:</label>
                            <input id="pass" name="pass" value="" type="password" placeholder="Escribe tu contraseña" required="required" pattern="abc123" /><br />
                            <input type="submit" value="Iniciar sesión" name="enviar" class="block right">
                        </div> 
                    </form>
                </fieldset>
                </div>
                <div id="loading"></div>
                <div id="result"></div>
            </article>
            
<?php $this->include_tpl("footer.php"); ?>