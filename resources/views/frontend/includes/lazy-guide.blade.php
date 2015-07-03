    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <h1 class="text-gray-light">Uppdaterad: 2015-07-03</h1>
            <div class="panel panel-default">
            <div class="panel-heading"><i class="fa fa-gear fa-spin font-s-16"></i> <a href="{{ url('/lazy') }}">{{ env('APP_URL') }}/lazy</a></div>

                <div class="panel-body">
                    <h4>lazy-stuff</h4>
                    <p>
                        Här är de klasser som jag själv byggt upp för att underlätta allt html-arbete.
                        Jag har mina <code>lazy-color-classes</code> och mina <code>lazy-font-size-classes</code>
                        <br>
                        Samtliga gör att man enkelt, genom att bara lägga till en class på ett objekt, enkelt
                        men kraftfullt kan ge objekt färger/font-size på ett enkelt och bootstrap-liknande sätt.
                        De är alltså de klasser som jag tycker att Bootstrap redan borde ha installerade.
                        Jag har byggt ut bootstraps egna <code>text-"color"</code> till de grå nyanserna
                    </p>
                    <br>
                    <p>filerna ligger i mappen <code>resources/assets/less/frontend/lazy-stuff/lazy-stuff/</code></p>
                    <p>Allt hämtas till filen <code>all-my-lazy-stuff.less</code> som sedan importeras (<code>@import</code>) till <code>main.less</code></p>
                </div>
            </div><!-- panel -->
            <div class="panel panel-default">
            <div class="panel-heading">Mixins</div>
                <div class="panel-body">
                    <h4><code>lazy-stuff/mixins.less</code></h4>
                    <p>
                        Här har jag lagt mina mixins som skapar de olia färg-classerna/storleks-classerna på ett snyggt och effektivt sätt.
                    </p>
                </div>
            </div><!-- panel -->

            <div class="panel panel-info">
            <div class="panel-heading">Hover</div>
                <div class="panel-body">
                    <h3>Hover-funktioner</h3>
                    <p>
                        <h4><code>element-färg-hover</code></h4>
                        Skriv elementet-färgen-hover. t.ex <span class="text-danger bg-warning-hover">&lt;class="text-danger bg-warning-hover"&gt;</span>
                    </p>
                    <h4>Parent nesting</h4>
                    <p>
                        Men ofta kanske man bara vill ha en hoover effekt med <code>darken(@color, 10%)</code>.
                        <br>
                        Därför kan du på ett element skriva: <code>element-färg element-hover</code>
                    </p>
                    <pre class="text-primary text-hover col-xs-12 col-sm-6 col-md-4">class="text-primary text-hover"</pre>
                    <pre class="bg-danger bg-hover col-xs-12 col-sm-6 col-md-4">class="text-primary text-hover"</pre>
                    <pre class="border-warning border-hover col-xs-12 col-sm-6 col-md-4">class="text-primary text-hover"</pre>
                    <h4 class="col-xs-12">Maxat exempel</h4>
                    <pre class="text-gray-light text-white-hover bg-gray-lighter bg-hover border-success border-danger-hover col-xs-12 col-sm-12">class="text-gray-light text-white-hover bg-gray-lighter bg-hover border-success border-danger-hover"</pre>
                </div>
            </div><!-- panel -->


            <div class="panel panel-success">
                <div class="panel-heading"><i class="fa fa-paint-brush"></i> My lazy color classes</div>

                <div class="panel-body">
                    <h5><code>resources/assets/less/frontend/lazy-stuff/lazy-stuff/</code></h5>
                    <h5><code>bg-color.less</code></h5>
                    <h5><code>border-color.less</code></h5>
                    <h5><code>text-color.less</code></h5>

                    <p>
                        Detta är mina egna färgklasser som jag gjort för att underlätta skapandet av
                        html-kod. Detta gör det enkelt att ändra färger på unika object.
                        <br>
                        <br>
                        T.ex <code>&lt;div class="primary danger-border warning-bg"&gt;text i rutan&lt;div&gt;</code> ger följande utseende:
                        <div class="primary danger-border warning-bg">text i rutan</div>
                        <br><br>
                        För alla exempel så har den aktuella klassen lagts till objektet <code>&lt;pre&gt;</code>
                    </p>
                        <h3 class="col-xs-12">text-color <small>endast namnet på färg-typen</small></h3>
                        <pre class="text-primary col-xs-12 col-sm-6 col-md-3">class="text-primary"</pre>
                        <pre class="text-success col-xs-12 col-sm-6 col-md-3">class="text-success"</pre>
                        <pre class="text-info col-xs-12 col-sm-6 col-md-3">class="text-info"</pre>
                        <pre class="text-warning col-xs-12 col-sm-6 col-md-3">class="text-warning"</pre>
                        <pre class="text-danger col-xs-12 col-sm-6 col-md-3">class="text-danger"</pre>
                        <pre class="text-white col-xs-12 col-sm-6 col-md-3">class="text-white"</pre>
                        <pre class="text-gray-lighter col-xs-12 col-sm-6 col-md-3">class="text-gray-lighter"</pre>
                        <pre class="text-gray-light col-xs-12 col-sm-6 col-md-3">class="text-gray-light"</pre>
                        <pre class="text-gray col-xs-12 col-sm-6 col-md-3">class="text-gray"</pre>
                        <pre class="text-gray-dark col-xs-12 col-sm-6 col-md-3">class="text-gray-dark"</pre>
                        <pre class="text-gray-darker col-xs-12 col-sm-6 col-md-3">class="text-gray-darker"</pre>

                        <h3 class="col-xs-12">background-color <small>namnet på färg-typen *-bg</small></h3>
                        <pre class="bg-primary col-xs-12 col-sm-6 col-md-3">class="bg-primary"</pre>
                        <pre class="bg-success col-xs-12 col-sm-6 col-md-3">class="bg-success"</pre>
                        <pre class="bg-info col-xs-12 col-sm-6 col-md-3">class="bg-info"</pre>
                        <pre class="bg-warning col-xs-12 col-sm-6 col-md-3">class="bg-warning"</pre>
                        <pre class="bg-danger col-xs-12 col-sm-6 col-md-3">class="bg-danger"</pre>
                        <pre class="bg-white col-xs-12 col-sm-6 col-md-3">class="bg-white"</pre>
                        <pre class="bg-gray-lighter col-xs-12 col-sm-6 col-md-3">class="bg-gray-lighter"</pre>
                        <pre class="bg-gray-light col-xs-12 col-sm-6 col-md-3">class="bg-gray-light"</pre>
                        <pre class="bg-gray col-xs-12 col-sm-6 col-md-3">class="bg-gray"</pre>
                        <pre class="bg-gray-dark col-xs-12 col-sm-6 col-md-3">class="bg-gray-dark"</pre>
                        <pre class="bg-gray-darker col-xs-12 col-sm-6 col-md-3">class="bg-gray-darker"</pre>

                        <h3 class="col-xs-12">border-color <small>namnet på färg-typen *-border, border-width sätts med less-variabel i <code>lazy-color.less</code></small></h3>
                        <pre class="border-primary col-xs-12 col-sm-6 col-md-3">class="border-primary"</pre>
                        <pre class="border-success col-xs-12 col-sm-6 col-md-3">class="border-success"</pre>
                        <pre class="border-info col-xs-12 col-sm-6 col-md-3">class="border-info"</pre>
                        <pre class="border-warning col-xs-12 col-sm-6 col-md-3">class="border-warning"</pre>
                        <pre class="border-danger col-xs-12 col-sm-6 col-md-3">class="border-danger"</pre>
                        <pre class="border-white col-xs-12 col-sm-6 col-md-3">class="border-white"</pre>
                        <pre class="border-gray-lighter col-xs-12 col-sm-6 col-md-3">class="border-gray-lighter"</pre>
                        <pre class="border-gray-light col-xs-12 col-sm-6 col-md-3">class="border-gray-light"</pre>
                        <pre class="border-gray col-xs-12 col-sm-6 col-md-3">class="border-gray"</pre>
                        <pre class="border-gray-dark col-xs-12 col-sm-6 col-md-3">class="border-gray-dark"</pre>
                        <pre class="border-gray-darker col-xs-12 col-sm-6 col-md-3">class="border-gray-darker"</pre>

                </div>
            </div><!-- panel -->
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-font"></i> My lazy font sizes</div>

                <div class="panel-body">
                    <h5><code>resources/assets/less/frontend/lazy-stuff/lazy-stuff/lazy-color.less</code></h5>
                    <p>Desa är mina lazy-font-size classes som jag har för att enkelt kunna styra fritt över text-storlekar</p>
                    <pre>font-size: *pt; //6->30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80</pre>
                    <?php
                        for($n = 6; $n <= 30; $n++){
                            echo '<p class="font-s-'. $n.'">class="font-s-'. $n.'"</p>';
                        }
                        for($n = 35; $n <= 90; $n += 5){
                            echo '<p class="font-s-'. $n.'">class="font-s-'. $n.'"</p>';
                        }

                     ?>
                </div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->

        @role('Administrator')
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> Role Based</div>

                    <div class="panel-body">
                        You can see this because you have the role of 'Administrator'!
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endrole

    </div><!-- row -->
