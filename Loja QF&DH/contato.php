<form action="https://www.linkli.com">
             <label> Nome
                <br>
                <input type="text" name="nome" placeholder="Nome Completo">
                <br>
             </label>
             <br>
             <label> Telefone
                <br>
                <input type="number" name="telefone" placeholder="+55(11)99000-0000">
                <br>
             </label>
             <br>
             <label> Email
                <br>
                <input type="email" name="email" placeholder="seuemail@mail.com">
                <br>
             </label>
                <br>
             <Label> Motivo do Contato  
                <select>
                    <option>Selecione um assunto</option>
                    <option value="Entrega">Entrega</option>
                    <option value="Pagamento">Pagamento</option>
                    <option value="Devolução">Devolução</option>
                    <option value="Outros">Outros</option>
                </select>
             </Label>
             <br>
             <br>
             <label>Mensagem
                <br>
                <textarea class="tamanhoCaixaTexto" name=”Mensagem”> </textarea>
             </label>
             <br>
             <br>
             <label> Aceito receber novidades
                <Input type="checkbox" name="opt in">
                </Input>  
             </label>
             <br>
             <br>
             <button type="reset">Limpar</button>
             <button type="submit">Enviar</button>
        </form>