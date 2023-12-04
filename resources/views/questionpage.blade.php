<p>
{{$data['question']['id']}} - {{$data['question']['question']}}
</p>
@foreach($data['question']['answeres'] as $answere)
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="{{$answere['id']}}">
  <label class="form-check-label" for="{{$answere['id']}}">
    {{$answere['answere']}}
  </label>
</div>

@endforeach
@if($data['total'] != $data['question']['id'])
<button type="button" class="btn btn-primary btn-lg" onclick="test.submit_answere({{$data['question']['id']}})">Next</button>
@else
<button type="button" class="btn btn-primary btn-lg" onclick="test.calculate_result({{$data['question']['id']}})">Submit</button>
@endif