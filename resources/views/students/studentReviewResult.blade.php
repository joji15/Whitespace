@extends('layouts.studentapp')

@section('title','Quiz Review Result')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content">
	<div class="container-fluid contentMargin">
	<br />
	<p class="h2" style="font-family: Segoe UI Light; font-weight: lighter;">
		<span class="oi oi-star text-yellow" title="quiz_result" aria-hidden="true"></span>
		Quiz Review Result
	</p>

	<div class="row">
		@foreach ($qTitle as $qT)
		<div class="col-12 mt-3 mb-2">
			<div class="card border-blue-grey">
				<p class="d-none">{{$ct = 1}}</p>
				<div class="card-header border-blue-grey bg-blue-grey text-white h4">
					<p class="d-none m-0 ">{{$ct++}}</p>
						@if($ct >! 1)
							<p class="card-title mb-0">
							<span class="oi oi-check" aria-hidden=" true"></span> {{$qT->quiz_title}}
							</p>
						@else
							@break
						@endif
					@endforeach
				</div>
				@foreach($reviewQuestions as $rQ)
				<div class="card-body bg-lights border-blue-grey">
					<div class="col-12">
							<div class="list-group-item list-group-item-secondary lead" style="font-family:Segoe UI Light;">
										{{$rQ->question}}
							</div>
							<input type="hidden" name="{{$rQ->correct_ans}}" value="{{$rQ->correct_ans}}">
							<div id="choice_A" class="list-group-item list-group-item lead" style="font-family:Segoe UI Light;">
										A. {{$rQ->choice_A}}
							</div>
							<input type="hidden" name="{{$rQ->correct_ans}}" value="{{$rQ->correct_ans}}">
							<div id="choice_B" class="list-group-item list-group-item- lead" style="font-family:Segoe UI Light;">
										B. {{$rQ->choice_B}}
							</div>
							<input type="hidden" name="{{$rQ->correct_ans}}" value="{{$rQ->correct_ans}}">
							<div id="choice_C" class="list-group-item list-group-item lead" style="font-family:Segoe UI Light;">
										C. {{$rQ->choice_C}}
							</div>
							<input type="hidden" name="{{$rQ->correct_ans}}" value="{{$rQ->correct_ans}}">
							<div id="choice_D" class="list-group-item list-group-item lead" style="font-family:Segoe UI Light;">
										D. {{$rQ->choice_D}}
							</div>
							<div id="correct" class="list-group-item list-group-item-success lead" style="font-family:Segoe UI Light;">
										@if (substr($rQ->correct_ans,7) == "A")
										Correct Answer: {{substr($rQ->correct_ans,7)}}: {{$rQ->choice_A}}
										@elseif (substr($rQ->correct_ans,7) == "B")
										Correct Answer: {{substr($rQ->correct_ans,7)}}: {{$rQ->choice_B}}
										@elseif (substr($rQ->correct_ans,7) == "C")
										Correct Answer: {{substr($rQ->correct_ans,7)}}: {{$rQ->choice_C}}
										@elseif (substr($rQ->correct_ans,7) == "D")
										Correct Answer: {{substr($rQ->correct_ans,7)}}: {{$rQ->choice_D}}
										@endif
							</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	</div>
</div>

@endsection