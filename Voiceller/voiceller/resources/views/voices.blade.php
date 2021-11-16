@extends('layouts.guest')

@section('css')
	<!-- Green Audio Player CSS -->
	<link href="{{ URL::asset('plugins/audio-player/green-audio-player.css') }}" rel="stylesheet" />
@endsection

@section('content')

    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="section-title">
                    <!-- SECTION TITLE -->
                    <div class="text-center mb-9 mt-9" id="contact-row">

                        <div class="title">
                            <h6>{{ __('All') }} <span>{{ __('Voices') }}</span></h6>
                            <p>{{ __('Checkout the voice qualities and pick the best options for yourself.') }}</p>
                        </div>

                    </div> <!-- END SECTION TITLE -->
                </div>
            </div>
        </div>
    </div>

    <section id="voices-wrapper">
        
        <div class="container-fluid" id="curve-container">
            <div class="curve-box">
                <div class="overflow-hidden curve">
                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="#fff"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="container pt-8">          
            
            <div class="row">                

                <div class="col-md-12">
                    <div class="card-body pt-5">
                        <div class="accordion" id="accordionVoiceList">
    
                            <!-- Afrikaans -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#afrikaans" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-za"></i> Afrikaans (South Africa)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="afrikaans" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/iminathi.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Iminathi <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->									
                                  </div>
                                </div>
                              </div>
    
                            <!-- Arabic -->
                            <div class="card">
                                  <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#arabic" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="flag flag-sa"></i> Arabic
                                          </button>
                                    </h2>
                                  </div>					  
                                  <div id="arabic" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                    <div class="card-body mb-2">
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/aws/zeina-aws.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Zeina <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                        </div><!-- END VOICE AUDIO FILE -->	
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/ahmad.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Ahmad <span class="text-muted font-weight-normal fs-12">(M)</span></span>								
                                        </div><!-- END VOICE AUDIO FILE -->	
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/abdulla.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Abdulla <span class="text-muted font-weight-normal fs-12">(M)</span></span>								
                                        </div><!-- END VOICE AUDIO FILE -->	
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/saniya.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Saniya <span class="text-muted font-weight-normal fs-12">(F)</span></span>								
                                        </div><!-- END VOICE AUDIO FILE -->	
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/amina-nrl.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Amina <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                            <p class="neural-voice">Neural</p>								
                                        </div><!-- END VOICE AUDIO FILE -->	
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/ahmad-nrl.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Ahmad <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                            <p class="neural-voice">Neural</p>								
                                        </div><!-- END VOICE AUDIO FILE -->	
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/abdulla-nrl.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Abdulla <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                            <p class="neural-voice">Neural</p>								
                                        </div><!-- END VOICE AUDIO FILE -->
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/saniya-nrl.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Saniya <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                            <p class="neural-voice">Neural</p>								
                                        </div><!-- END VOICE AUDIO FILE -->		
                                        <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/omar.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Omar <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->		
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hoda.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hoda <span class="text-muted font-weight-normal fs-12">(F)</span></span>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/naayf.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Naayf <span class="text-muted font-weight-normal fs-12">(M)</span></span>										
                                    </div><!-- END VOICE AUDIO FILE -->		
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/salma.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Salma <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->		
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/shakir.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Shakir <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/zariyah.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Zariyah <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hamed.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hamed <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->		
                                    </div>
                                  </div>
                            </div>
    
                            <!-- Bengali -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#bengali" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-in"></i> Bengali (India)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="bengali" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/aarya.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Aarya <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/achintya.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Achintya <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/aarya-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Aarya <span class="text-muted font-weight-normal fs-12">(F)</span></span>	
                                        <p class="neural-voice">Neural</p>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/achintya-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Achintya <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->									
                                  </div>
                                </div>
                              </div>
    
                            <!-- Bulgarian -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#bulgaria" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-bg"></i> Bulgarian (Bulgaria)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="bulgaria" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/maria.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Maria <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->	
                                      <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/ivan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ivan <span class="text-muted font-weight-normal fs-12">(M)</span></span>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/kalina.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Kalina <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->		
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/borislav.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Borislav <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->						
                                  </div>
                                </div>
                              </div>
    
                            <!-- Catalan -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#catalan" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-es"></i> Catalan (Spain)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="catalan" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/martina.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Martina <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->	
                                      <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/herena.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Herena <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/alba.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Alba <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/joanna.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Joanna <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->		
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/enric.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Enric <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->				
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Chinese (China) -->
                            <div class="card">
                                  <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#chinese" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="flag flag-cn"></i> Chinese (China)
                                        </button>
                                    </h2>
                                  </div>
                                  <div id="chinese" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionVoiceList">
                                    <div class="card-body mb-2">
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/aws/zhiyu-aws.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Zhiyu <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                        </div><!-- END VOICE AUDIO FILE -->
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/changying.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Changying <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                        </div><!-- END VOICE AUDIO FILE -->
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/boqin.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Boqin <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                        </div><!-- END VOICE AUDIO FILE -->
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/delun.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Delun <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                        </div><!-- END VOICE AUDIO FILE -->
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/tyantyan.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">TyanTyan <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                        </div><!-- END VOICE AUDIO FILE -->
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/changying-nrl.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Changying <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                            <p class="neural-voice">Neural</p>											
                                        </div><!-- END VOICE AUDIO FILE -->
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/boqin-nrl.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Boqin <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                            <p class="neural-voice">Neural</p>											
                                        </div><!-- END VOICE AUDIO FILE -->
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/delun-nrl.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Delun <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                            <p class="neural-voice">Neural</p>											
                                        </div><!-- END VOICE AUDIO FILE -->
                                        <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/tyantyan-nrl.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">TyanTyan <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                            <p class="neural-voice">Neural</p>											
                                        </div><!-- END VOICE AUDIO FILE -->
                                        <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/lina.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">LiNa <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/wangwei.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">WangWei <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/zhangjing.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">ZhangJing <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/danny.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Danny <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/tracy.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Tracy <span class="text-muted font-weight-normal fs-12">(F)</span></span>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hiugaai.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">HiuGaai <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hiumaan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">HiuMaan <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/wanlung.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">WanLung <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/huihui.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Huihui <span class="text-muted font-weight-normal fs-12">(F)</span></span>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/kangkang.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Kangkang <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/yaoyao.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Yaoyao <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                                
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/xiaoxiao.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Xiaoxiao <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/xiaoyou.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Xiaoyou <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/xiaomo.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Xiaomo <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/xiaoxuan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Xiaoxuan <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/xiaohan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Xiaohan <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/xiaorui.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Xiaorui <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/yunyang.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Yunyang <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/yunye.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Yunye <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/yunxi.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Yunxi <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hanhan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">HanHan <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/yating.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Yating <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/zhiwei.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Zhiwei <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hsiaochen.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">HsiaoChen <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hsiaoyu.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">HsiaoYu <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/yunjhe.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">YunJhe <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    </div>
                                  </div>
                            </div>
    
                            <!-- Chinese (Hong Kong) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#hongkong" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-hk"></i> Chinese (Hong Kong)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="hongkong" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/sonia.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Sonia <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/wing.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Wing <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/bonnie.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Bonnie <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/chi.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Chi <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->										
                                  </div>
                                </div>
                              </div>
    
                            <!-- Croatia -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#croatia" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-hr"></i> Croatian (Croatia)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="croatia" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/matej.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Matej <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                                
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/gabrijela.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Gabrijela <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/srecko.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Srecko <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Czeck -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#czeck" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-cz"></i> Czeck (Czeck Republic)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="czeck" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/eliska.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Eliska <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->	
                                      <!-- VOICE AUDIO FILE -->
                                        <div class="voice-player mb-6">
                                            @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                            <div class="text-center player">
                                                <audio class="voice-audio" preload="none">
                                                    <source src="{{ URL::asset('voices/gcp/eliska-nrl.mp3') }}" type="audio/mpeg">
                                                </audio>	
                                            </div>
                                            <span class="voice-name">Eliska <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                            <p class="neural-voice">Neural</p>											
                                        </div><!-- END VOICE AUDIO FILE -->		
                                        <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/jakub.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Jakub <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                                
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/vlasta.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Vlasta <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->					
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/antonin.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Antonin <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Danish -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#danish" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-dk"></i> Danish (Denmark)
                                      </button>
                                  </h2>
                                </div>
                                <div id="danish" class="collapse" aria-labelledby="headingThree" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/naja-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Naja <span class="text-muted font-weight-normal fs-12">(F)</span></span>								
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/mads-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Mads <span class="text-muted font-weight-normal fs-12">(M)</span></span>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/ida.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ida <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/morten.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Morten <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/freja.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Freja <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/josefine.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Josefine <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/ida-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ida <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/morten-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Morten <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/freja-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Freja <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/josefine-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Josefine <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/helle.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Helle <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/christel.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Christel <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/jeppe.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Jeppe <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Dutch (Netherlands) -->
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#dutch" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-nl"></i> Dutch (Netherlands)
                                      </button>
                                  </h2>
                                </div>
                                <div id="dutch" class="collapse" aria-labelledby="headingFour" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/lotte-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Lotte <span class="text-muted font-weight-normal fs-12">(F)</span></span>							
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/ruben-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ruben <span class="text-muted font-weight-normal fs-12">(M)</span></span>							
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/mila.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Mila <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/arend.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Arend <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/christiaan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Christiaan <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/lotte.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lotte <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/fenna.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Fenna <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/mila-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Mila <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/arend-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Arend <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/christiaan-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Christiaan <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/lotte-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lotte <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/fenna-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Fenna <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/emma.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Emma <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/liam.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Liam <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/dena.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dena <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/arnaud.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Arnaud <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hanna.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hanna <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/colette.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Colette <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/fenna.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Fenna <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/maarten.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Maarten <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- English (Australia) -->
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#english-australia" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-au"></i> English (Australia)
                                      </button>
                                  </h2>
                                </div>
                                <div id="english-australia" class="collapse" aria-labelledby="headingFive" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/nicole-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Nicole <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/olivia-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Olivia <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/russell-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Russell <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/charlotte.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Charlotte <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/noah.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Noah <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/amelia.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Amelia <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/oliver.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Oliver <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/charlotte-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Charlotte <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/noah-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Noah <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/amelia-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Amelia <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/oliver-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Oliver <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/craig.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Craig <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/madison.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Madison <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/catherine.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Catherine <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hayley.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hayley <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/natasha.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Natasha <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/william.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">William <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- English (Canada) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#english-canada" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-ca"></i> English (Canada)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="english-canada" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/heather.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Heather <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                                
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/linda.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Linda <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                                
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/clara.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Clara <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/liam.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Liam <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- English (Hongkong) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#hongkong-en" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-hk"></i> English (Hongkong)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="hongkong-en" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/yan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Yan <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/sam.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sam <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>						
    
                            <!-- English (India) -->
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#english-in" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-in"></i> English (India)
                                      </button>
                                  </h2>
                                </div>
                                <div id="english-in" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/aditi-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Aditi <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/raveena-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Raveena <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/saanvi.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Saanvi <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/sai.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sai <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/veer.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Veer <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/prisha.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Prisha <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/saanvi-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Saanvi <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/sai-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sai <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/veer-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Veer <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/prisha-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Prisha <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/heera.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Heera <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                                
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/priya.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Priya <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                    
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/ravi.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ravi <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/neerja.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Neerja <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/prabhat.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Prabhat <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- English (Ireland) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#ireland-en" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-ie"></i> English (Ireland)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="ireland-en" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/sean.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sean <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/emily.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Emily <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/connor.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Connor <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- English (New Zealand) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#newzealand" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-nz"></i> English (New Zealand)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="newzealand" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/molly.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Molly <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/mitchell.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Mitchell <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- English (Philippines) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#philippines-en" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-ph"></i> English (Philippines)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="philippines-en" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/rosa.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Rosa <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/james.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">James <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- English (Singapore) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#singapore-en" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-sg"></i> English (Singapore)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="singapore-en" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/luna.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Luna <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/wayne.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Wayne <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- English (South Africa) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#southafrica-en" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-za"></i> English (South Africa)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="southafrica-en" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/leah.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Leah <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/luke.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Luke <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- English (UK) -->
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#english-uk" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-gb"></i> English (UK)
                                      </button>
                                  </h2>
                                </div>
                                <div id="english-uk" class="collapse" aria-labelledby="headingSix" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/amy-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Amy <span class="text-muted font-weight-normal fs-12">(F)</span></span>									 
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/emma-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Emma <span class="text-muted font-weight-normal fs-12">(F)</span></span>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/brian-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Brian <span class="text-muted font-weight-normal fs-12">(M)</span></span>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/amy-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Amy <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/emma-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Emma <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/brian-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Brian <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/poppy.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Poppy <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/charles.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Charles <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/elsie.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Elsie <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/harry.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Harry <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/nancy.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Nancy <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/poppy-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Poppy <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/charles-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Charles <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/elsie-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Elsie <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/harry-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Harry <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/nancy-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Nancy <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/charlotte.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Charlotte <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/james.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">James <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/kate.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Kate <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/george.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">George <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hazel.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hazel <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/susan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Susan <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/libby.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Libby <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/mia.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Mia <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/ryan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ryan <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- English (USA) -->
                            <div class="card">
                                <div class="card-header" id="headingEight">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#english-us" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-us"></i> English (US)
                                      </button>
                                  </h2>
                                </div>
                                <div id="english-us" class="collapse" aria-labelledby="headingEight" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/ivy-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Ivy <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/joanna-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Joanna <span class="text-muted font-weight-normal fs-12">(F)</span></span>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/kendra-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Kendra <span class="text-muted font-weight-normal fs-12">(F)</span></span>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/kimberly-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Kimberly <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/salli-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Salli <span class="text-muted font-weight-normal fs-12">(F)</span></span>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/joey-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Joey <span class="text-muted font-weight-normal fs-12">(M)</span></span>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/justin-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Justin <span class="text-muted font-weight-normal fs-12">(M)</span></span>								
                                    </div><!-- END VOICE AUDIO FILE -->								
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/matthew-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Matthew <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/ivy-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ivy <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/joanna-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Joanna <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/kendra-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Kendra <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/kimberly-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Kimberly <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/Salli-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Salli <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/joey-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Joey <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/justin-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Justin <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/matthew-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Matthew <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/kevin-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Kevin <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/bush.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Bush <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/dick.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dick <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/caroline.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Caroline <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/trump.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Trump <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/suzan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Suzan <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/kimberly.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Kimberly <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/ellen.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ellen <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/teresa.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Teresa <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/oscar.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Oscar <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/obama.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Obama <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/dick-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dick <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/bush-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Bush <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/caroline-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Caroline <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/trump-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Trump <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/susan-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Susan <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/kimberly-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Kimberly <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/ellen-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ellen <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/teresa-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Teresa <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/oscar-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Oscar <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/obama-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Obama <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/allison.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Allison <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/emily.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Emily <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/henry.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Henry <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/kevin.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Kevin <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/lisa.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lisa <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/michael.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Michael <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/olivia.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Olivia <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/benjamin.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Benjamin <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/guy.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Guy <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/aria.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Aria <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/zira.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Zira <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                            
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/aria.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Aria <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/jenny.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Jenny <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/guy.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Guy <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- English (wales) -->
                            <div class="card">
                                <div class="card-header" id="headingNine">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#english-welsh" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-gb-wls"></i> English (Wales)
                                      </button>
                                  </h2>
                                </div>
                                <div id="english-welsh" class="collapse" aria-labelledby="headingNine" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/geraint-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Geraint <span class="text-muted font-weight-normal fs-12">(M)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Estonia -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#estonian" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-ee"></i> Estonian (Estonia)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="estonian" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/anu.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Anu <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/kert.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Kert <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Filipino -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#filipino" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-ph"></i> Filipino (Philippines)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="filipino" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/princess.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Princess <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->		
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/andrea.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Andrea <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/angel.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Angel <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/nathaniel.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Nathaniel <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/princess-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Princess <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/angel-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Angel <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/andrea-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Andrea <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/nathaniel-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Nathaniel <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Finnish -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#finnish" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-fi"></i> Finnish (Finland)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="finnish" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/enni.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Enni <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->		
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/enni-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Enni <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/heidi.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Heidi <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/noora.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Noora <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/selma.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Selma <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/harri.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Harri <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Frech (Belgium) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#french-bg" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-be"></i> French (Belgium)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="french-bg" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/charline.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Charline <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/gerard.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Gerard <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- French (France) -->
                            <div class="card">
                                <div class="card-header" id="headingTen">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#french" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-fr"></i> French (France)
                                      </button>
                                  </h2>
                                </div>
                                <div id="french" class="collapse" aria-labelledby="headingTen" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/celine-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Celine <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/lea-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lea <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/mathieu-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Mathieu <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/mathilde.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Mathilde <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/foucauld.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Foucauld <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/louise.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Louise <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/florent.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Florent <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/alice.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Alice <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/mathilde-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Mathilde <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/foucauld-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Foucauld <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/louise-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Louise <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/florent-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Florent <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/alice-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Alice <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/nicolas.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Nicolas <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/renee.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Renee <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hortense.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hortense <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                    
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/julie.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Julie <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                    
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/paul.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Paul <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                    
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/denise.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Denise <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/henri.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Henri <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- French (Canada) -->
                            <div class="card">
                                <div class="card-header" id="heading11">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#french-ca" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-ca"></i> French (Canada)
                                      </button>
                                  </h2>
                                </div>
                                <div id="french-ca" class="collapse" aria-labelledby="heading11" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/chantal-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Chantal <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/gabrielle-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Gabrielle <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/emma.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Emma <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/thomas.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Thomas <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/lea.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lea <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/william.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">William <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/emma-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Emma <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/thomas-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Thomas <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/lea-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lea <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/william-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">William <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/caroline.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Caroline <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/harmonie.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Harmonie <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/sylvie.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sylvie <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/antonie.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Antonie <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/jean.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Jean <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Frech (Switzerlnad) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#switzerland-fr" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-ch"></i> French (Switzerland)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="switzerland-fr" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/guillaume.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Guillaume <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/ariane.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ariane <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/fabrice.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Fabrice <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- German (Austria) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#german-at" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-at"></i> German (Austria)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="german-at" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/michael.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Michael <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/ingrid.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ingrid <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/jonas.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Jonas <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- German (Germany) -->
                            <div class="card">
                                <div class="card-header" id="heading12">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#german" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-de"></i> German (Germany)
                                      </button>
                                  </h2>
                                </div>
                                <div id="german" class="collapse" aria-labelledby="heading12" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/marlene-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Marlene <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/vicky-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Vicky <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/hans-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hans <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/eva.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Eva <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/wilhelm.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Wilhelm <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/hannah.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hannah <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/alfred.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Alfred <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/werner.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Werner <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/merkel.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Merkel <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/eva-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Eva <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/wilhelm-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Wilhelm <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/hannah-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hannah <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/alfred-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Alfred <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/werner-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Werner <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/merkel-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Merkel <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/birgit.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Birgit <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/dieter.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dieter <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/erika.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Erika <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hedda.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hedda <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                    
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/stefan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Stefan <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                    
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/katja.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Katja <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/conrad.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Conrad <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- German (Switzerland) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#switzerland-gr" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-ch"></i> German (Switzerland)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="switzerland-gr" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/karsten.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Karsten <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/leni.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Leni <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/jan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Jan <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Greek -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#greek" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-gr"></i> Greek (Greece)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="greek" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/eleni.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Eleni <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->		
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/eleni-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Eleni <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/stefanos.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Stefanos <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                                
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/athina.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Athina <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/nestoras.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Nestoras <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Gujarati (India) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#gujarati" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-in"></i> Gujarati (India)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="gujarati" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/inika.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Inika <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->	
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/jhinuk.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Jhinuk <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/inika-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Inika <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/jhinuk-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Jhinuk <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/dhwani.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dhwani <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/niranjan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">niranjan <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Hebrew -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#israel" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-il"></i> Hebrew (Israel)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="israel" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/asaf.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Asaf <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hila.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hila <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/avri.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Avri <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Hindi (India) -->
                            <div class="card">
                                <div class="card-header" id="heading13">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#hindi" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-in"></i> Hindi (India)
                                      </button>
                                  </h2>
                                </div>
                                <div id="hindi" class="collapse" aria-labelledby="heading13" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/aditi-in-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Aditi <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/arunima.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Arunima <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/ayaan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ayaan <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/keshav.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Keshav <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->		
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/bhavna.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Bhavna <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/arunima-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Arunima <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/ayaan-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ayaan <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/keshav-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Keshav <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/bhavna-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Bhavna <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hila.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hila <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hemant.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hemant <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/kalpana.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Kalpana <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/swara.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Swara <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/madhur.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Madhur <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Hungarian -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#hungarian" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-hu"></i> Greek (Greece)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="hungarian" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/lena.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Lena <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->		
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/lena-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lena <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/szabolcs.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Szabolcs <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/noemi.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Noemi <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/tamas.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Tamas <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Icelandic -->
                            <div class="card">
                                <div class="card-header" id="heading14">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#icelandic" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-is"></i> Icelandic (Iceland)
                                      </button>
                                  </h2>
                                </div>
                                <div id="icelandic" class="collapse" aria-labelledby="heading14" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/dora-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Dora <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/karl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Karl <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/helga.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Helga <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                  </div>
                                </div>
                              </div>
    
                            <!-- Indonesian -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#indonesian" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-id"></i> Indonesian (Indonesia)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="indonesian" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/aulia.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Aulia <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/arief.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Arief <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/fadhlan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Fadhlan <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/dewi.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dewi <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/aulia-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Aulia <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/arief-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Arief <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/fadhlan-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Fadhlan <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/dewi-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dewi <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/andika.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Andika <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/gadis.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Gadis <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/ardi.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ardi <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Irish -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#irish" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-ie"></i> Irish (Ireland)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="irish" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/orla.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Orla <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/colm.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Colm <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Italian -->
                            <div class="card">
                                <div class="card-header" id="heading15">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#italian" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-it"></i> Italian (Italy)
                                      </button>
                                  </h2>
                                </div>
                                <div id="italian" class="collapse" aria-labelledby="heading15" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/carla-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Carla <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/bianca-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Bianca <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/giorgio-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Giorgio <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/federica.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Federica <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/bella.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Bella <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/luca.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Luca <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/matteo.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Matteo <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/federica-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Federica <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/bella-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Bella <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/luca-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Luca <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/matteo-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Matteo <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/francesca.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Francesca <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/cosimo.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Cosimo <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/lucia.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lucia <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/elsa.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Elsa <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/isabella.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Isabella <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/diego.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Diego <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Japanese -->
                            <div class="card">
                                <div class="card-header" id="heading16">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#japanese" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-jp"></i> Japanese (Japan)
                                      </button>
                                  </h2>
                                </div>
                                <div id="japanese" class="collapse" aria-labelledby="heading16" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/mizuki-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Mizuki <span class="text-muted font-weight-normal fs-12">(F)</span></span>									 
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/takumi-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Takumi <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/manami.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Manami <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/sakura.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sakura <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/sensei.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sensei <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/takuya.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Takuya <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/manami-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Manami <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/sakura-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sakura <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/sensei-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sensei <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/takuya-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Takuya <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/emi.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Emi <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/ayumi.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ayumi <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                    
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/haruka.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Haruka <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                    
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/ichiro.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ichiro <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                    
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/nanami.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Nanami <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/keita.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Keita <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Kannada -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#kannada" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-in"></i> Kannada (India)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="kannada" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/aarushi.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Aarushi <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/arjun.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Arjun <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->		
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/aarushi-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Aarushi <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/arjun-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Arjun <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Korea -->
                            <div class="card">
                                <div class="card-header" id="heading17">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#korean" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-kr"></i> Korean (South Korea)
                                      </button>
                                  </h2>
                                </div>
                                <div id="korean" class="collapse" aria-labelledby="heading17" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/seoyeon-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Seoyeon <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/seoyeon-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Seoyeon <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/yong.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Yong <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/eun-kyong.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Eun-Kyong <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/beom-soo.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Beom-Soo <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/byung-joon.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Byung-Joon <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/yong-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Yong <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/eun-kyung-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Eun-Kyung <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/beom-soo-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Beom-Soo <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/byung-joon-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Byung-Joon <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/hyunjun.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hyunjun <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/siwoo.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">SiWoo <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/youngmi.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Youngmi <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/yuna.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Yuna <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/heami.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Heami <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                    
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/sunhi.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">SunHi <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/injoon.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">InJoon <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Latvia -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#latvian" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-lv"></i> Latvian (Latvia)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="latvian" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/andris.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Andris <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->	
                                      <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/everita.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Everita <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/nils.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Nils <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Lithuania -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#lithuania" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-lt"></i> Lithuanian (Lithuania)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="lithuania" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/ona.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ona <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/leonas.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Leonas <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Malay -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#malay" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-my"></i> Malay (Malaysia)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="malay" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/rizwan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Rizwan <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/yasmin.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Yasmin <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/osman.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Osman <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Maltese -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#malta" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-mt"></i> Maltese (Malta)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="malta" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/grace.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Grace <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/joseph.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Joseph <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Marathi -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#marathi" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-in"></i> Marathi (India)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="marathi" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/aarohi.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Aarohi <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/mahonar.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Manohar <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Malayalam -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#malayalam" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-in"></i> Malayalam (India)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="malayalam" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/abha.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Abha <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/akhil.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Akhil <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/abha-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Abha <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->		
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/akhil-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Akhil <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Norwegian -->
                            <div class="card">
                                <div class="card-header" id="heading18">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#norwegian" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-no"></i> Norwegian (Norway)
                                      </button>
                                  </h2>
                                </div>
                                <div id="norwegian" class="collapse" aria-labelledby="heading18" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/liv-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Liv <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/chin.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Chin <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/bjorn.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Bjorn <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/inger.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Inger <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->		
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/dag.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dag <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/janne.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Janne <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/chin-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Chin <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/bjorn-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Bjorn <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/inger-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Inger <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/dag-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dag <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/janne-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Janne <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hulda.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hulda <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/iselin.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Iselin <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/pernille.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Pernille <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/finn.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Finn <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Polish -->
                            <div class="card">
                                <div class="card-header" id="heading19">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#polish" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-pl"></i> Polish (Poland)
                                      </button>
                                  </h2>
                                </div>
                                <div id="polish" class="collapse" aria-labelledby="heading19" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/ewa-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">EWA <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/maja-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Maja <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/jan-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Jan <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/jacek-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Jacek <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/sara.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sara <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/jan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Jan <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/jacob.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Jacob <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/lena.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lena <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/zofia.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Zofia <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/sara-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sara <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/jan-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Jan <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/jacob-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Jacob <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/lena-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lena <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/zofia-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Zofia <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/paulina.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Paulina <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/agnieszka.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Agnieszka <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/zofia.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Zofia <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/marek.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Marek <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Portuguese (Brazil) -->
                            <div class="card">
                                <div class="card-header" id="heading20">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Portuguese" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-br"></i> Portuguese (Brazil)
                                      </button>
                                  </h2>
                                </div>
                                <div id="Portuguese" class="collapse" aria-labelledby="heading20" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/camila-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Camila <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/victoria-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Victoria <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/ricardo-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ricardo <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/camila-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Camila <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/francisca.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Francisca <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/francisca-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Francisca <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/daniel.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Daniel <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/heloisa.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Heloisa <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/francisca.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Francisca <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/antonio.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Antonio <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Portuguese (Portugal) -->
                            <div class="card">
                                <div class="card-header" id="heading21">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Portuguese-pt" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-pt"></i> Portuguese (Portugal)
                                      </button>
                                  </h2>
                                </div>
                                <div id="Portuguese-pt" class="collapse" aria-labelledby="heading21" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/ines-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Inês <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/cristiano-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Cristiano <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/beatriz.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Beatriz <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/ronaldo.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ronaldo <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/lisboa.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lisboa <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/mariana.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Mariana <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/beatriz-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Beatriz <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/ronaldo-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ronaldo <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/lisboa-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lisboa <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/mariana-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Mariana <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/helia.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Helia <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/fernanda.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Fernanda <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/raquel.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Raquel <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/duarte.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Duarte <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Romanian -->
                            <div class="card">
                                <div class="card-header" id="heading22">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Romanian" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-ro"></i> Romanian (Romania)
                                      </button>
                                  </h2>
                                </div>
                                <div id="Romanian" class="collapse" aria-labelledby="heading22" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/carmen-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Carmen <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/mihaela.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Mihaela <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/mihaela-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Mihaela <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>											
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/andrei.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Andrei <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/alina.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Alina <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/emil.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Emil <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Russian -->
                            <div class="card">
                                <div class="card-header" id="heading23">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Russian" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-ru"></i> Russian (Russia)
                                      </button>
                                  </h2>
                                </div>
                                <div id="Russian" class="collapse" aria-labelledby="heading23" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/tatyana-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Tatyana <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/maxim-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Maxim <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/oksana.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Oksana <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/vlad.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Vlad <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/veronika.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Veronika <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/dapohui.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dapohui <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/svetlana.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Svetlana <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/oksana-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Oksana <span class="text-muted font-weight-normal fs-12">(F)</span></span>	
                                        <p class="neural-voice">Neural</p>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/vlad.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Vlad <span class="text-muted font-weight-normal fs-12">(M)</span></span>	
                                        <p class="neural-voice">Neural</p>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/veronika-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Veronika <span class="text-muted font-weight-normal fs-12">(F)</span></span>	
                                        <p class="neural-voice">Neural</p>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/dapohui-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dapohui <span class="text-muted font-weight-normal fs-12">(M)</span></span>	
                                        <p class="neural-voice">Neural</p>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/svetlana-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Svetlana <span class="text-muted font-weight-normal fs-12">(F)</span></span>	
                                        <p class="neural-voice">Neural</p>								
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/ekaterina.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ekaterina <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                    
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/irina.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Irina <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                    
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/pavel.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Pavel <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/dariya.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dariya <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/svetlana.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Svetlana <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/dmitry.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dmitry <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Serbian -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#serbian" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-rs"></i> Serbian (Serbia)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="serbian" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/olga.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Olga <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->		
                                  </div>
                                </div>
                              </div>
    
                            <!-- Slovak -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#slovak" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-sk"></i> Slovak (Slovakia)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="slovak" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/anna.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Anna <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->	
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/olga-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Olga <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/filip.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Filip <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                                
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/viktoria.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Viktoria <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/lukas.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lukas <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Slovak -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#slovenia" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-si"></i> Slovenian (Slovenia)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="slovenia" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/lado.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lado <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                                
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/petra.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Petra <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/rok.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Rok <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Spanish (Argentina) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#argentina" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-ar"></i> Spanish (Argentina)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="argentina" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/elena.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Elena <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/tomas.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Tomas <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Spanish (Colombia) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#colombia" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-co"></i> Spanish (Colombia)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="colombia" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/salome.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Salome <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/gonzalo.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Gonzalo <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Spanish (Spain) -->
                            <div class="card">
                                <div class="card-header" id="heading24">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Spanish" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-es"></i> Spanish (Spain)
                                      </button>
                                  </h2>
                                </div>
                                <div id="Spanish" class="collapse" aria-labelledby="heading24" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/conchita-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Conchita <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/lucia-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lucia <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/enrique-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Enrique <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/hector.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hector <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/vanessa.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Vanessa <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/laura.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Laura <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/isabella.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Isabella <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/hector-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hector <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/vanessa-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Vanessa <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/laura-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Laura <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/enrique.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Enrique <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/laura.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Laura <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/helena.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Helena <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/laura.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Laura <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/pablo.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Pablo <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                    
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/elvira.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Elvira <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/alvaro.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Alvaro <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Spanish (Mexico) -->
                            <div class="card">
                                <div class="card-header" id="heading25">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Spanish-mx" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-mx"></i> Spanish (Mexico)
                                      </button>
                                  </h2>
                                </div>
                                <div id="Spanish-mx" class="collapse" aria-labelledby="heading25" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/mia-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Mia <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/sofia.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sofia <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hilda.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hilda <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/raul.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Raul <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/dalia.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dalia <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/jorge.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Jorge <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Spanish (USA) -->
                            <div class="card">
                                <div class="card-header" id="heading26">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Spanish-usa" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-us"></i> Spanish (USA)
                                      </button>
                                  </h2>
                                </div>
                                <div id="Spanish-usa" class="collapse" aria-labelledby="heading26" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/lupe-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Lupe <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/penelope-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Penélope <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/miguel-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Miguel <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/aws/lupe-nrl-aws.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Lupe <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/mia.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Mia <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/pedro.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Pedro <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/sanches.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sanches <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/isabella-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Isabella <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/pedro-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Pedro <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/sanches-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sanches <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/ibm-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/ibm/sofia-us.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sofia <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/paloma.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Paloma <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/alonso.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Alonso <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Swahili -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#swahili" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-ke"></i> Swahili (Kenya)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="swahili" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/zuri.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Zuri <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/rafiki.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Rafiki <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Swedish -->	
                            <div class="card">
                                <div class="card-header" id="heading27">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Swedish" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-se"></i> Swedish (Sweden)
                                      </button>
                                  </h2>
                                </div>
                                <div id="Swedish" class="collapse" aria-labelledby="heading27" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/astrid-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Astrid <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/karin.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Karin <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/karin-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Karin <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hedvig.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hedvig <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hillev.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Hillev <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/sofie.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Sofie <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/mattias.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Mattias <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Tamil (India) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#tamil" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-in"></i> Tamil (India)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="tamil" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/aarushi.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Aarushi <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->	
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/aadhish.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Aadhish <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/oarushi-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Oarushi <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/aadhish-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Aadhish <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/valluvar.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Valluvar <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                        
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/pallavi.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Pallavi <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/valluvar-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Valluvar <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Telugu (India) -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#telugu" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-in"></i> Telugu (India)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="telugu" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/aasthika.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Aasthika <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->	
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/aadhavan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Aadhavan <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/chitra.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Chitra <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                            
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/shruti.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Shruti <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/mohan.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Mohan <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Thai -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#thai" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-th"></i> Thai (Thailand)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="thai" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/busaba.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Busaba <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->	
                                      <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/pattara.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Pattara <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                                                            
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/achara.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Achara <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/premwadee.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Premwadee <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/niwat.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Niwat <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
                            <!-- Turkish -->
                            <div class="card">
                                <div class="card-header" id="heading28">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Turkish" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-tr"></i> Turkish (Turkey)
                                      </button>
                                  </h2>
                                </div>
                                <div id="Turkish" class="collapse" aria-labelledby="heading28" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/filiz-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Filiz <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/zeynep.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Zeynep <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/oktay.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Oktay <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/fatima.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Fatima <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/gulchatay.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Gulchatay <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/yanar.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Yanar <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/zeynep-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Zeynep <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/oktay-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Oktay <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/fatima-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Fatima <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/gulchatay-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Gulchatay <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/yanar-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Yanar <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/seda.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Seda <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                        
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/emel.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Emel <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/ahmet.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ahmet <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Ukraine -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#ukraine" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-ua"></i> Ukrainian (Ukraine)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="ukraine" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/oksana.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Oksana <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->	
                                       <!-- VOICE AUDIO FILE -->
                                       <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/oksana-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Oksana <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/polina.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Polina <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/ostap.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Ostap <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Urdu -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#urdu" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-pk"></i> Urdu (Pakistan)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="urdu" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                    
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/uzma.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Uzma <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/asad.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Asad <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                            <!-- Vietnamese -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#vietnam" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="flag flag-vn"></i> Vietnamese (Vietnam)
                                        </button>
                                  </h2>
                                </div>					  
                                <div id="vietnam" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/gcp/chau.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Chau <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/dung.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dung <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/cam.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Cam <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/duy.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Duy <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
                                    </div><!-- END VOICE AUDIO FILE -->
                                       <!-- VOICE AUDIO FILE -->
                                       <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/chau-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Chau <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/dung-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Dung <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/cam-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Cam <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/gcp-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/gcp/duy-nrl.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Duy <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->	
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/an.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">An <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                                                        
                                    </div><!-- END VOICE AUDIO FILE -->		
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/hoaimy.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">HoaiMy <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/namminh.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">NamMinh <span class="text-muted font-weight-normal fs-12">(M)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
    
                              <!-- Welsh -->
                              <div class="card">
                                <div class="card-header" id="heading29">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Welsh" aria-expanded="false" aria-controls="collapseTwo">
                                          <i class="flag flag-gb-wls"></i> Welsh (Wales)
                                      </button>
                                  </h2>
                                </div>
                                <div id="Welsh" class="collapse" aria-labelledby="heading29" data-parent="#accordionVoiceList">
                                  <div class="card-body mb-2">
                                      <!-- VOICE AUDIO FILE -->
                                      <div class="voice-player mb-6">
                                          @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt=""> @endif																	
                                          <div class="text-center player">
                                              <audio class="voice-audio" preload="none">
                                                  <source src="{{ URL::asset('voices/aws/gwyneth-aws.mp3') }}" type="audio/mpeg">
                                              </audio>	
                                          </div>
                                          <span class="voice-name">Gwyneth <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
                                      </div><!-- END VOICE AUDIO FILE -->
                                      <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player mb-6">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/nia.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Nia <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                    <!-- VOICE AUDIO FILE -->
                                    <div class="voice-player">
                                        @if (config('tts.vendor_logos') == 'show') <img src="{{ URL::asset('img/csp/azure-ssm.png') }}" alt=""> @endif																	
                                        <div class="text-center player">
                                            <audio class="voice-audio" preload="none">
                                                <source src="{{ URL::asset('voices/azure/aled.mp3') }}" type="audio/mpeg">
                                            </audio>	
                                        </div>
                                        <span class="voice-name">Aled <span class="text-muted font-weight-normal fs-12">(F)</span></span>
                                        <p class="neural-voice">Neural</p>										
                                    </div><!-- END VOICE AUDIO FILE -->
                                  </div>
                                </div>
                              </div>
                            
    
                          </div>
                    </div>
                </div>                   
                
            </div>
        
        </div>

    </section>
@endsection

@section('js')
	<!-- Green Audio Player JS -->
	<script src="{{ URL::asset('plugins/audio-player/green-audio-player.js') }}"></script>
	<script src="{{ URL::asset('js/audio-player.js') }}"></script>
@endsection

