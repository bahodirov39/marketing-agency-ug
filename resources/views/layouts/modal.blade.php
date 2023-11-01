@if(session()->has('success'))
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                @lang('main.callback_info')
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn--base">@lang('main.callback_close')</button>
            </div>
        </div>
        </div>
    </div>
@endif
