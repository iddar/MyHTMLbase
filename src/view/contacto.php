<?php $this->include_tpl("header.php"); ?>
            
            <article>
                <h2>Contactanos</h2>
                <div>
                    <p>
                        En SACITEC estamos para escuccharte. Envia un mensage describiendo tu proyecto, dudas, ideas etc.
                        No olvides dejarnos todos tus datos asi nos sera mas facil ponernos en contacto.
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
