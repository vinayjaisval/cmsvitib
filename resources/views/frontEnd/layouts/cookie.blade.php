
@if(Helper::GeneralWebmasterSettings("cookie_policy_status"))
    <div class="cookies-accept fixed-bottom p-2 shadow-lg " style="display: none; background:#0E404C; z-index: 9999;">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center text-white">
            <p class="mb-2 mb-md-0">
                {!! __("frontend.cookiesAcceptMessage") !!}
                <?php $Policy = Helper::Topic(3); ?>
                @if(!empty($Policy))
                    <a href="{{ Helper::topicURL(3) }}" class="text-info ml-1"><i class="fa-solid fa-shield-halved"></i> {{ $Policy->{"title_" . @Helper::currentLanguage()->code} }}</a>
                @endif
            </p>
            <button type="button" id="cookies-accept-btn" class="btn btn-primary ml-md-3 border-0"><i class="fa fa-check"></i> {!! __("frontend.cookiesAcceptBtn") !!}</button>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Show the cookies bar if not accepted
            if (document.cookie.indexOf('cookie_notice_accepted') === -1) {
                $(".cookies-accept").fadeIn("slow");
            }

            // On accept click
            $("#cookies-accept-btn").on('click', function () {
                var d = new Date();
                d.setTime(d.getTime() + (365*24*60*60*1000));
                document.cookie = 'cookie_notice_accepted=true; expires=' + d.toGMTString() + '; path=/';
                $(".cookies-accept").fadeOut("slow");
            });
        });
    </script>
@endif
