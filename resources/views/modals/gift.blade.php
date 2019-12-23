
<div class="modal fade" id="giftModal" tabindex="-1" role="dialog" aria-labelledby="productModal"
     aria-hidden="true">
    <div class="modal-dialog modal modal-dialog-centered" role="document">
        <!--Content-->
        <div class="modal-content" style="background-image: url({{ asset('images/gift.png') }}); background-size: cover;">
            <!--Header-->
            <div class="modal-body p-4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>

                <h2 class="gift-title cg-bold">
                    Дарим подарки при покупке платья
                </h2>

                <div class="gift-points pt-2 pb-5">
                    <div class="d-flex gift-point pt-2">
                        <img class="mr-3" src="{{ asset('svg/gift.svg') }}" alt=""><span class="gift-desc rw-medium">Второе платье для гулянки</span>
                    </div>
                    <div class="d-flex gift-point pt-2">
                        <img class="mr-3" src="{{ asset('svg/gift.svg') }}" alt=""><span class="gift-desc rw-medium">Свадебный макияж и прическа</span>
                    </div>
                    <div class="d-flex gift-point pt-2">
                        <img class="mr-3" src="{{ asset('svg/gift.svg') }}" alt=""><span class="gift-desc rw-medium">Подарочная фата</span>
                    </div>
                    <div class="d-flex gift-point pt-2">
                        <img class="mr-3" src="{{ asset('svg/gift.svg') }}" alt=""><span class="gift-desc rw-medium">Украшения, аксессуары</span>
                    </div>
                    <div class="d-flex gift-point pt-2">
                        <img class="mr-3" src="{{ asset('svg/gift.svg') }}" alt=""><span class="gift-desc rw-medium">Фотосессия «Утро невесты» в нашем уютном и красивом салоне (предоставляем локацию);</span>
                    </div>
                    <div class="d-flex gift-point pt-2">
                        <img class="mr-3" src="{{ asset('svg/gift.svg') }}" alt=""><span class="gift-desc rw-medium">Реставрация , подгонка и подготовка (услуга отпаривания и отглаживания ) свадебного платья</span>
                    </div>
                    <div class="d-flex gift-point pt-2">
                        <img class="mr-3" src="{{ asset('svg/gift.svg') }}" alt=""><span class="gift-desc rw-medium">Пижамный пеньюар для съёмки</span>
                    </div>
                </div>
            </div>


            {{--<a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>--}}
        </div>
        <!--/.Content-->
    </div>
</div>
