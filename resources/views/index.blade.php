@extends('layouts.app')

@section('content')
<style>
	#list-gallery h4 {
		margin-top: 0px;
	}
	#list-gallery .album-box {
		position: relative;
	}
	#list-gallery .control-group {
		position: absolute;
		top: -11px;
		right: -9px;
	}
	.gall-description {
		max-height: 65px;
		overflow: hidden;
	}
</style>

<div id="list-gallery" class="row col-md-6 col-md-offset-3">

	@foreach ($reportTypes as $reportType)
	<h2>{{$reportType->description}}</h2>
	<div class="row">

		@foreach ($reports as $report)
		<div class="col-md-4">
			<div class="img">
				<div class="pull-left">
					<h4>
						@if (count($report->photos) > 0)
							<a href="/images/{{$report->photos()->first()->filename}}">
						@else
							<a href="/images/default-person.jpg">
						@endif
						{{$report->title}}
						</a>
					</h4>
				</div>

				<div class="clearfix">
				</div>

				<p><small>
					<img alt="avatar" src="http://www.gravatar.com/avatar/0e5ebb439b354f1d1e55cd539e6b3984?s=22&amp;d=identicon" align="absmiddle">

					By: <img src="/media/mint/icons/16/status-offline.png" rel="tooltip" data-original-title="Offline" align="absmiddle">
					<a href="/entities/{{$report->userid}}>  See all reports" rel="tooltip">{{$report->userid}}</a>
					On: {{$report->date}}
				</small></p>


				<a href="/reports/{{$report->id}}">
					@if (count($report->photos) > 0)
						<img class="thumbnail" src="/images/{{$report->photos->first()->filename}}" width="200" height="200">
					@else
						<img class="thumbnail" src="/images/default-person.jpg" width="200" height="200">
					@endif

					<img src="/images/cobalt_thumbs/image/586/bfe9eb3196a2c411ffb1f80208cbeaba.jpg" class="img-polaroid" alt="{{$report->title}}" title={{$report->title}} vspace="0" hspace="0"></a>
x
				<div class="clearfix">
				</div>

				<div class="gall-description" style="margin-top: 5px;">{{$report->description}}}
				</div>

				<div class="clearfix"></div>
			</div>
		</div>
		@endforeach
	</div>
	@endforeach
</div>
@endsection