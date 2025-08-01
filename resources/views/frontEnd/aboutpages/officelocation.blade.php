@php
    $language_code = \Helper::currentLanguage()->code;
    $heading = App\Models\Topic::where(['webmaster_id' => 29, 'row_no' => 11, 'status' => 1])->first();
    $cartds = App\Models\Topic::where(['webmaster_id' => 29, 'status' => 1])->whereIn('row_no', [12, 13, 14,15])->get();
    $activeTab = request()->has('tab') ? request('tab') : 'block_a';
    @endphp

<section>
    <div class="emplacement-main mt-5" id="emplacement-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="emplacement-head">
                        <div class="child-head">
                            <h2 class="fw-bold text-uppercase">{{ $heading->{"title_$language_code"} ?? '' }}</h2>
                        </div>
                        <div class="tabs-click">
                            <div class="d-flex justify-content-center align-items-center ">
                                <div class="card p-3 " style="max-width: 600px;">
                                    <nav>
                                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                            <a class="nav-link {{ $activeTab === 'block_a' ? 'active' : '' }}" href="#block_a" role="tab" data-bs-toggle="tab" data-bs-target="#block_a">Block A</a>
                                            <a class="nav-link {{ $activeTab === 'block_b' ? 'active' : '' }}" href="#block_b" role="tab" data-bs-toggle="tab" data-bs-target="#block_b">Block B</a>
                                            <a class="nav-link {{ $activeTab === 'block_c' ? 'active' : '' }}" href="#block_c" role="tab" data-bs-toggle="tab" data-bs-target="#block_c">Block C</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                                        <div class="tab-pane fade {{ $activeTab === 'block_a' ? 'active show' : '' }}" id="block_a" role="tabpanel">
                                            <p>{!! $cartds->where('row_no', 12)->first()->{"details_$language_code"} ?? '' !!}</p>
                                        </div>

                                        <div class="tab-pane fade {{ $activeTab === 'block_b' ? 'active show' : '' }}" id="block_b" role="tabpanel">
                                            <p>{!! $cartds->where('row_no', 13)->first()->{"details_$language_code"} ?? '' !!}</p>
                                        </div>

                                        <div class="tab-pane fade {{ $activeTab === 'block_c' ? 'active show' : '' }}" id="block_c" role="tabpanel">
                                            <p>{!! $cartds->where('row_no', 13)->first()->{"details_$language_code"} ?? '' !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    @foreach($cartds as $items) 
                    <div class="global-empoerment">
                        <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
