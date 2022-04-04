{extends file="main.tpl"}

{block name=footer}  <li>Treść stopki</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>{/block}

{block name=wrapper} <h2>Kalkulator kredytowy</h2>
    <p>Wylicz ratę kredytu</p> {/block}     

    {block name=content}


        <p> użytkownik: {$user->login}, rola: {$user->role}</p>
        
        <section>

            <form method="post" action="{$conf->action_url}calcCompute">
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <label for="amount">Kwota</label>
                        <input type="text" name="amt" id="amt" value="{$form->amt}"  />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="years">Liczba lat</label>
                        <input type="text" name="yrs" id="yrs" value="{$form->yrs}"  />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="rate">Oprocentowanie (w %)</label>
                        <input type="text" name="rt" id="rt" value="{$form->rt}"  />
                    </div>


                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Oblicz" class="primary" /></li>

                        </ul>
                    </div>
                </div>
            </form>
        </section>

        <section>
            <ul class="actions">
                <li><a href="{$conf->action_url}showPage1"  class="button">Ultra TAJNA strona</a></li>
                <li><a href="{$conf->action_url}logout"  class="button">Wyloguj się</a></li>
            </ul>


        </section>


        {include file='messages.tpl'}
        
        <p> </p>

        {if isset($res->result)}
            <div class="res">
                Wynik: {$res->result} zł
            </div>
        {/if}

    {/block}





















