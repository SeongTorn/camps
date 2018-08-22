@extends('template')

@section('main')

@include('topspace')
@include('topspace')

<section class="mbr-section info1 cid-qZCLOV2j2S">
  {!! Form::open(['url'=>'capms/all-children', 'method'=>'post']) !!}
  <div class="container">
    {!! Form::hidden('parent_id', $parent->id) !!}
    <div class="row justify-content-center content-row">
      <div class="media-container-column col-12 col-lg-3 col-md-4">
        <div class="mbr-section-btn align-right py-4"></div>
      </div>
      <div class="col-md-12" data-for="name">
        <h2 class="align-center mbr-bold mbr-fonts-style display-2">Child Details</h2><br>
      </div>
      <div class="col-md-6" data-for="name">
        <div class="form-group">
          {!! Form::label('First Name*', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
          {!! Form::text('first_name', '', ['class'=>'form-control', 'placeholder'=>'Johnny', 'required']) !!}
        </div>
      </div>
      <div class="col-md-6" data-for="name">
        <div class="form-group">
          {!! Form::label('Last Name*', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
          {!! Form::text('last_name', '', ['class'=>'form-control', 'placeholder'=>'Sample', 'required']) !!}
        </div>
      </div>
      <div class="col-md-12" data-for="name">
        {!! Form::label('Date of Birth:*', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
      </div>
      <div class="col-md-4" data-for="name">
        <div class="form-group">
          {!! Form::label('Day*', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
          <select class="form-control" name="date_year" data-form-field="Name" required="">
            <option value="" disabled>--- Please Select ---</option>
            @for($i = 1; $i <= 31; $i++)
              <option value="{{ $i }}">{{ $i }}st</option>
            @endfor
          </select>
        </div>
      </div>
      <div class="col-md-4" data-for="name">
        <div class="form-group">
          {!! Form::label('Month*', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
          {!! Form::selectMonth('date_month', 1, ['class'=>'form-control', 'required']); !!}
        </div>
      </div>
      <div class="col-md-4" data-for="name">
        <div class="form-group">
          {!! Form::label('Year*', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
          <select class="form-control" name="date_day" data-form-field="Name" required="">
            <option value="" disabled>--- Please Select ---</option>
            @for($i = 2000; $i <= date('Y'); $i++)
              <option value="{{ $i }}">{{ $i }}</option>
            @endfor
          </select>
        </div>
      </div>
      <div class="col-md-12" data-for="name">
        <div class="form-group">
          {!! Form::label('School*', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
          {!! Form::text('school', '', ['class'=>'form-control', 'placeholder'=>'Sample Public School', 'required']) !!}
        </div>
      </div>
      <div class="col-md-12" data-for="name">
        <div class="form-group">
          {!! Form::label('Allergies (if applicable)', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
          {!! Form::textarea('allergies', '', ['class'=>'form-control', 'rows'=>2]) !!}
        </div>
      </div>
      <div class="col-md-12" data-for="name">
        <div class="form-group">
          {!! Form::label('Learning Difficulties (if applicable)', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
          {!! Form::textarea('learning_difficulties', '', ['class'=>'form-control', 'rows'=>2]) !!}
        </div>
      </div>
      <div class="col-md-12" data-for="name">
        <div class="form-group">
          <br>
          <span class="input-group-btn">
            {!! Form::button('Next', ['class' => 'btn btn-primary btn-form display-4', 'type' => 'submit']) !!}
          </span>
          <br><br><br>
        </div>
      </div>
    </div>
  </div>
  {!! Form::close() !!}
</section>
@include('safety')
@include('bottomspace')
@endsection