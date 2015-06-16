@extends('frontend.layouts.master')

@section('content')
	<div class="row">

		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
            <div class="panel-heading"><i class="fa fa-gear fa-spin font-s-16"></i> <a href="{{ url('/lazy') }}">{{ env('APP_URL') }}/lazy</a></div>

				<div class="panel-body">
					<p>
                        Hej Wictor!
                        <br>
                        Här är de klasser som jag själv byggt upp för att underlätta allt html-arbete.
                        Jag har mina <code>lazy-color-classes</code> och mina <code>lazy-font-size-classes</code>
                        <br>
                        Samtliga gör att man enkelt, genom att bara lägga till en class på ett objekt, enkelt
                        men kraftfullt kan ge objekt färger/font-size på ett enkelt och bootstrap-liknande sätt.
                        De är alltså de klasser som jag tycker att Bootstrap redan borde ha installerade.
                    </p>
				</div>
			</div><!-- panel -->
            <div class="panel panel-success">
                <div class="panel-heading"><i class="fa fa-paint-brush"></i> My lazy color classes</div>

                <div class="panel-body">
                    <h5><code>resources/assets/less/frontend/lazy-stuff/lazy-stuff/lazy-color.less</code></h5>
                    <p>
                        Detta är mina egna färgklasser som jag gjort för att underlätta skapandet av
                        html-kod. Detta gör det enkelt att ändra färger på unika object.
                    </p>
                    <div class="row">
                        <h4>text-color <small>endast namnet på färg-typen</small></h4>
                        <pre class="primary col-xs-3">class="primary"</pre>
                        <pre class="success col-xs-3">class="success"</pre>
                        <pre class="info col-xs-3">class="info"</pre>
                        <pre class="warning col-xs-3">class="warning"</pre>
                        <pre class="danger col-xs-3">class="danger"</pre>
                    </div>
                    <div class="row">
                        <h4>background-color <small>namnet på färg-typen *-bg</small></h4>
                        <pre class="primary-bg col-xs-3">class="primary-bg"</pre>
                        <pre class="success-bg col-xs-3">class="success-bg"</pre>
                        <pre class="info-bg col-xs-3">class="info-bg"</pre>
                        <pre class="warning-bg col-xs-3">class="warning-bg"</pre>
                        <pre class="danger-bg col-xs-3">class="danger-bg"</pre>
                    </div>
                    <div class="row">
                        <h4>border-color <small>namnet på färg-typen *-border, border-width sätts med less-variabel i</small></h4>
                        <pre class="primary-border col-xs-3">class="primary-border"</pre>
                        <pre class="success-border col-xs-3">class="success-border"</pre>
                        <pre class="info-border col-xs-3">class="info-border"</pre>
                        <pre class="warning-border col-xs-3">class="warning-border"</pre>
                        <pre class="danger-border col-xs-3">class="danger-border"</pre>
                    </div>

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
                        for($n = 35; $n <= 80; $n += 5){
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
@endsection
