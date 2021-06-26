@include("admin::form._header")

        <div class="row" style="width: 370px">
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-text"><i class="icon-calendar"></i></span>
                    <input type="text" name="{{$name['start']}}" value="{{ old($column['start'], $value['start'] ?? null) }}" class="form-control {{$class['start']}}" autocomplete="off" style="width: 150px" {!! $attributes !!} />
                </div>
            </div>

            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-text"><i class="icon-calendar"></i></span>
                    <input type="text" name="{{$name['end']}}" value="{{ old($column['end'], $value['end'] ?? null) }}" class="form-control {{$class['end']}}" autocomplete="off" style="width: 150px" {!! $attributes !!} />
                </div>
            </div>
        </div>
@include("admin::form._footer")