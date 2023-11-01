@if(session()->has('success'))
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                @lang('main.callback_info')

                @if (isset($services) && !empty($services))
                    <h5 class="title mt-2">@lang('main.h5')</h5>

                    @foreach ($services as $item)
                        @if ($item->id != $service->id)
                            <a href="{{ route('service_single', ['lang'=>app()->getLocale(), 'slug'=>$item->slug]) }}" class="custom-btn"> {{ $item->title }} <i class="icon-Group-2361 ml-2"></i></a> <br>
                        @endif
                    @endforeach
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn--base">@lang('main.callback_close')</button>
            </div>
        </div>
        </div>
    </div>
@endif
