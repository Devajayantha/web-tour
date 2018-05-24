
{{--rating star  --}}
<div class="row">
    <div class="col-sm-3">
        <div class="rating-block">
                <h4>Average user rating</h4>
                <h2 class="bold padding-bottom-7">{{ number_format($array['rating'], 1) }}<small>/ 5</small></h2>
                @if($array['rating'] >= 4.5)
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
            @elseif($array['rating'] >= 3.5)
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
            @elseif($array['rating'] >= 2.5)
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
            @elseif($array['rating']>= 1.5)
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
            @else
                <span class="fas fa-star checked"></span>
            @endif

        </div>
    </div>
    <div class="col-sm-3">
        <h4>Rating breakdown</h4>
        <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">5 <span class="fas fa-star checked"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width:{{ $array['value_rating5'] }}%">
                                <span class="sr-only">50% Complete (danger)</span>
                            </div>
                        </div>
                </div>
                <div class="pull-right" style="margin-left:10px;">{{ $array['stars5'] }}</div>
        </div>
        <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">4 <span class="fas fa-star checked"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width:{{ $array['value_rating4'] }}%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                </div>
                <div class="pull-right" style="margin-left:10px;">{{ $array['stars4'] }}</div>
        </div>
        <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">3 <span class="fas fa-star checked"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: {{ $array['value_rating3'] }}%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                </div>
                <div class="pull-right" style="margin-left:10px;">{{ $array['stars3'] }}</div>
        </div>
        <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">2 <span class="fas fa-star checked"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: {{ $array['value_rating2'] }}%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                </div>
                <div class="pull-right" style="margin-left:10px;">{{ $array['stars2'] }}</div>
        </div>
        <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">1 <span class="fas fa-star checked"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: {{ $array['value_rating1'] }}%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                </div>
                <div class="pull-right" style="margin-left:10px;">{{ $array['stars1'] }}</div>
        </div>
    </div>			
    </div>			
    <div class="row">
    <div class="col-sm-7">
        <hr/>
        @if(count($paket))
        @foreach($paket as $pk)
        <div class="review-block">
                <div class="row">
                        <div class="col-sm-3">
                            @if (isset( $pk->profilepic))
                                <img src="/upload/profile/{{ $pk->profilepic }}"  class="img-rating">
                            @else
                                <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded"> 
                            @endif
                                {{-- <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded"> --}}
                                <div class="review-block-date">{{date('F j \, Y',strtotime($pk->updated_at))}}<br>{{date('h:i:s A',strtotime($pk->updated_at))}}</div>
                        </div>
                        <div class="col-sm-9">
                                <div class="review-block-rate">
                                    @if($pk->stars == 5)
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                    @elseif($pk->stars == 4)
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                    @elseif($pk->stars == 3)
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                    @elseif($pk->stars == 2)
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                    @elseif($pk->stars == 1)
                                        <span class="fas fa-star checked"></span>
                                    @else
                                        <span>Please review our paket</span>
                                    @endif
                                </div>
                                <div class="review-block-title">{{$pk->name}}</div>
                                <div class="review-block-description">{{$pk->message}}</div>
                        </div>
                </div>
        </div>
        @endforeach
        @endif
    </div>
    </div>
    {{-- rating --}}