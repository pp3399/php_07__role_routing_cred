{extends file="main.tpl"}

{block name=footer}  <li>Treść stopki</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>{/block}

   {block name=wrapper} <h2>Zaloguj się</h2>   {/block}     
   
   
{block name=content}

    <section>

        <form method="post" action="{$conf->action_url}login">
            <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                    <label for="id_login">Login</label>
                    <input type="text" name="login" id="id_login" placeholder="Login" value="" />
                </div>
                <div class="col-6 col-12-xsmall">
                    <label for="id_pass">Hasło</label>
                    <input type="password" name="pass" id="id_pass" placeholder="Hasło"  />
                </div>



                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Zaloguj" class="primary" /></li>

                    </ul>
                </div>
            </div>
        </form>
    </section>

    {include file='messages.tpl'}
        
{/block}





















