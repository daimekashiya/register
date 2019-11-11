@foreach( $LkpCategories as $category )
<div class="form-group col-md-3">
    <input type="checkbox" name="categories[]" value="{{$category->id}}"
        @isset($company)
            @if( $company != null)
                @if( $company->lkp_categories->count() > 0)
                    {{ $company->lkp_categories->where('id',$category->id)->count() == 1 ? 'checked' : null }}
                @endif
            @endif
        @endisset
    >  
    <label>{{$category->description}}</label>
</div>
@endforeach
@error('categories[]')
<span class="invalid-feedback" role="alert">
    <strong style="color:red">{{ $message }}</strong>
</span>
@enderror
