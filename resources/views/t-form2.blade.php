@extends('layouts.master')
@section('head')
  @if(Request::is('*/rgb-hex-converter') | Request::is('rgb-hex-converter'))
  <title> {{__('app.RGB_HEX_converter')}} | Egim.io</title>
  <meta name="Description" content="{{__('des.RGB_HEX_converter')}}">
  <meta name="Keywords" content="{{__('key.RGB_HEX_converter')}}">
  @elseif(Request::is('*/slug-maker') | Request::is('slug-maker'))
  <title> {{__('app.Slug_maker')}} | Egim.io</title>
  <meta name="Description" content="{{__('des.Slug_maker')}}">
  <meta name="Keywords" content="{{__('key.Slug_maker')}}">
  @elseif(Request::is('*/border-radius-generator') | Request::is('border-radius-generator'))
  <title>{{__('app.Border_radius_maker')}} | Egim.io</title>
  <meta name="Description" content="{{__('des.Border_radius_maker')}}">
  <meta name="Keywords" content="{{__('key.Border_radius_maker')}}">
  <style media="screen" id="boradstyle">
    .sdwpic, .shaddow-div{border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;}
  </style>
  @elseif(Request::is('*/image-cropper') | Request::is('image-cropper'))
  <title>{{__('app.Image_cropper')}} | Egim.io</title>
  <meta name="Description" content="{{__('des.Image_cropper')}}">
  <meta name="Keywords" content="{{__('key.Image_cropper')}}">
  <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/css/crping.css" rel="stylesheet">
  @else
  <title> {{__('app.Color_picker')}} | Egim.io</title>
  <meta name="Description" content="{{__('des.Color_picker')}}">
  <meta name="Keywords" content="{{__('key.Color_picker')}}">
  <style type="text/css" id="cpickres">
    .shaddow-div{background-color: hsl(224, 100%, 50%);} .col-sl-red {background: linear-gradient(to right, hsl(0, 100%, 50%) 0%, hsl(57, 100%, 50%) 17%, hsl(110, 100%, 50%) 40%,hsl(236, 100%, 50%) 60% , hsl(305, 100%, 50%) 80%, hsl(0, 100%, 50%) 100%);opacity: 1;}
    .col-sl-green{background: linear-gradient(to right,hsl(0, 0%, 50%) 0%, hsl(224, 100%, 50%) 100%);} .col-sl-blue{background: linear-gradient(to right,hsl(0, 0%, 0%) 0%, hsl(224, 99%, 46%) 50%, hsl(0, 0%, 100%) 100%);} .col-sl-alpha{background: linear-gradient(to right,hsl(0, 0%, 100%) 0%, hsl(224, 100%, 50%) 100%);}
  </style>
  @endif
@endsection
@section('body')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">@if(Request::is('*/rgb-hex-converter') | Request::is('rgb-hex-converter')){{__('app.RGB_HEX_converter')}} @elseif(Request::is('*/image-cropper') | Request::is('image-cropper')) {{__('app.Image_cropper')}} @elseif(Request::is('*/border-radius-generator') | Request::is('border-radius-generator')) {{__('app.Border_radius_maker')}} @elseif(Request::is('*/slug-maker') | Request::is('slug-maker')) {{__('app.Slug_maker')}} @else {{__('app.Color_picker')}} @endif</h4>
                  <p class="card-category">@if(Request::is('*/rgb-hex-converter') | Request::is('rgb-hex-converter')){{__('app.RGB_HEX_converter')}} @elseif(Request::is('*/image-cropper') | Request::is('image-cropper')) {{__('app.Image_cropper')}} @elseif(Request::is('*/border-radius-generator') | Request::is('border-radius-generator')) {{__('app.Border_radius_maker')}} @elseif(Request::is('*/slug-maker') | Request::is('slug-maker')) {{__('app.Slug_maker')}} @else {{__('app.Color_picker')}} @endif</p>
                </div>
                <div class="card-body">
                  @if(Request::is('*/rgb-hex-converter') | Request::is('rgb-hex-converter'))
                  <div class="table-responsive">
                    <table class="table"><tbody><tr><center><div class="div5" id="div5"></div></center></tr></tbody></table>
                    <div class="cvnsec form-group">
                      <label for="hex-convert">HEX</label> 
                      <input type="text" class="form-control" maxlength="7" value="#399EE6" id="hex" placeholder="HEX">
                      <a class="clone-code" onclick="copyhexcode()" title="{{__('app.Copy_it')}}"><i class="fa fa-clone"></i> </a>
                    </div>
                    <div class="cvnsec form-group">
                      <label for="rgb-convert">HSL </label> 
                      <input type="text" class="form-control" id="hsl" value="hsl(57,78%,56%)" readonly>
                      <a class="clone-code" onclick="copyhlscode()" title="{{__('app.Copy_it')}}"><i class="fa fa-clone"></i> </a>
                    </div>
                    <div class="cvnsec form-group">
                      <label for="rgb-convert">RGB</label> 
                      <input type="text" class="form-control" id="rgb" value="rgb(57,158,230)" readonly>
                      <a class="clone-code" onclick="copyrgbcode()" title="{{__('app.Copy_it')}}"><i class="fa fa-clone"></i> </a>
                    </div>
                  </div>
                  @elseif(Request::is('*/color-picker') | Request::is('color-picker'))
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                            <td>
                              <div class="form-group">
                                <label>Rgb</label>
                                <input type="text" class="form-control" value="rgb(0,68,255)" id="rgbres" placeholder="RGB" readonly>
                                <a class="clone-code" onclick="cpikcer_code_copy()" title="{{__('app.Copy_it')}}"><i class="fa fa-clone"></i> </a>
                              </div>
                            </td>
                            <td>
                              <div class="form-group">
                                 <label>Hsla</label>
                                <input type="text" class="form-control" value="hsla(224, 100%, 50%, 1)" id="hslres" placeholder="Hsla" readonly>
                                <a class="clone-code" onclick="hcpikcer_code_copy()" title="{{__('app.Copy_it')}}"><i class="fa fa-clone"></i> </a>
                              </div>
                            </td>
                            <td>
                              <div class="form-group">
                                <label>Hex</label>
                                <input type="text" class="form-control" value="#0044ff" id="hexres" placeholder="HEX" readonly>
                                <a class="clone-code" onclick="hexcpikcer_code_copy()" title="{{__('app.Copy_it')}}"><i class="fa fa-clone"></i> </a>
                             </div>
                           </td>
                         </tr>
                          <tr>
                          <center>
                              <div class="shaddow-div"><b>
                                {{__('app.Div_example')}} <br>
                                  <img src="/img/sample.png" width="150"></b>
                              </div>
                          </center>
                        </tr>
                      </tbody>
                    </table>
                    <div class="col-slcontainer">
                      <p>{{__('app.Hue')}}: <span id="hueres">224</span> </p>
                      <input type="range" min="0" max="359" oninput="color_picker_func()" value="224" class="col-sl-red" id="hue">
                    </div>
                    <div class="col-slcontainer">
                      <p>{{__('app.Saturation')}}: <span id="saturationres">100%</span> </p>
                      <input type="range" min="0" max="100" oninput="color_picker_func()" value="100" class="col-sl-green" id="saturation">
                    </div>
                    <div class="col-slcontainer">
                      <p>{{__('app.Lightness')}}: <span id="lightnessres">50%</span> </p>
                      <input type="range" min="0" max="100" oninput="color_picker_func()" value="50" class="col-sl-blue" id="lightness">
                    </div>
                    <div class="col-slcontainer">
                      <p>{{__('app.Alpha')}}: <span id="alphares">1</span> </p>
                      <input type="range" min="0" max="100" oninput="color_picker_func()" value="100" class="col-sl-alpha" id="alpha">
                    </div>
                  </div>
                  @elseif(Request::is('*/border-radius-generator') | Request::is('border-radius-generator'))
                  <table class="table">
                    <tbody>
                      <tr>
                        <center>
                          <div class="shaddow-div"><b>{{__('app.Div_example')}}
                            <img src="/img/sample.png" class="sdwpic"></b>
                          </div>
                        </center>
                        <a class="right" data-toggle="collapse" id="cvb" data-target="#code-show">
                          <b id="viewcode">{{__('app.View_code')}}</b>
                          <b id="hidecode" style="display:none;">{{__('app.Hide_code')}}</b>
                        </a><br>
                        <div id="code-show" class="collapse">
                            <pre id="borad-result">.example-div{<br>border-radius: 20px 20px 20px 20px;<br>-moz-border-radius: 20px 20px 20px 20px;<br>-webkit-border-radius: 20px 20px 20px 20px;<br>}</pre>
                        </div>
                      </tr><hr>
                      <tr>
                          <div class="form-group">
                            <label for="lefttop">{{__('app.All_corners')}}: <input type="text" id="alcrs" class="sm-form" value="20" oninput="allboradcreate2()" onkeypress='validate(event)'><b>px</b> </label>
                            <input type="range" min="0" max="150" value="20" class="percentslider" id="allcorns" oninput="allboradcreate()">
                          </div>
                          <div class="form-group">
                            <label for="lefttop">{{__('app.Left_top_corner')}}: <input type="text" maxlength="3" id="rlt" class="sm-form" value="20" oninput="boradcreate2()" onkeypress='validate(event)'><b>px</b> </label>
                            <input type="range" min="0" max="150" value="20" class="percentslider" id="lefttop" oninput="boradcreate()">
                          </div>
                         <div class="form-group">
                            <label for="righttop">{{__('app.Right_top_corner')}}: <input maxlength="3" type="text" id="rrt" class="sm-form" value="20" oninput="boradcreate2()" onkeypress='validate(event)'><b>px</b> </label>
                            <input type="range" min="0" max="150" value="20" class="percentslider" id="righttop" oninput="boradcreate()">
                          </div>
                          <div class="form-group">
                            <label for="leftbottom">{{__('app.Left_bottom_corner')}}: <input maxlength="3" type="text" id="rlb" class="sm-form" value="20" oninput="boradcreate2()" onkeypress='validate(event)'><b>px</b> </label>
                            <input type="range" min="0" max="150" value="20" class="percentslider" id="leftbottom" oninput="boradcreate()">
                          </div>
                         <div class="form-group">
                            <label for="rightbottom">{{__('app.Right_bottom_corner')}}: <input maxlength="3" type="text" id="rrb" class="sm-form" value="20" oninput="boradcreate2()" onkeypress='validate(event)'><b>px</b> </label>
                            <input type="range" min="0" max="150" value="20" class="percentslider" id="rightbottom" oninput="boradcreate()">
                          </div>
                        </tr>
                    </tbody>
                  </table>
                  @elseif(Request::is('*/slug-maker') | Request::is('slug-maker'))
                  <table class="table">
                    <tbody>
                      <tr>
                        <div class="form-group">
                          <label for="">{{__('app.Text')}}</label>
                          <input type="text" class="form-control" id="slugin" placeholder="{{__('app.Enter_text')}}...">
                        </div>
                      </tr>
                      <tr>
                        <div class="form-group">
                          <label for="">{{__('app.Select_separator_type')}}</label>
                          <select class="form-control" id="sepin">
                              <option value="_">{{__('app.Underline')}}: "_"</option>
                              <option value="-">{{__('app.Dash')}}: "-"</option>
                          </select>
                        </div>
                      </tr>
                      <tr>
                        <button type="button" class="btn btn-primary right" onclick="make_slug_func()" name="button">{{__('app.Make')}}</button>
                      </tr>
                    </tbody>
                  </table>
                  @elseif(Request::is('*/image-cropper') | Request::is('image-cropper'))
                  <div class="container cropper">
                    <div class="row">
                      <div class="col-md-9">
                        <div class="img-container">
                          <img id="image" src="/img/sample.png" alt="{{__('app.Sample_image')}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="docs-preview clearfix">
                          <div class="img-preview preview-lg" style="width: 218px"></div>
                          <div class="img-preview preview-md"></div>
                          <div class="img-preview preview-sm"></div>
                          <div class="img-preview preview-xs"></div>
                        </div>
                        <div class="docs-data">
                          <div class="input-group input-group-sm">
                            <label class="input-group-addon" for="dataX">X</label>
                            <input type="text" class="form-control" id="dataX" placeholder="x">
                            <span class="input-group-addon">px</span>
                          </div>
                          <div class="input-group input-group-sm">
                            <label class="input-group-addon" for="dataY">Y</label>
                            <input type="text" class="form-control" id="dataY" placeholder="y">
                            <span class="input-group-addon">px</span>
                          </div>
                          <div class="input-group input-group-sm">
                            <label class="input-group-addon" for="dataWidth">{{__('app.Width')}}</label>
                            <input type="text" class="form-control" id="dataWidth" placeholder="width">
                            <span class="input-group-addon">px</span>
                          </div>
                          <div class="input-group input-group-sm">
                            <label class="input-group-addon" for="dataHeight">{{__('app.Height')}}</label>
                            <input type="text" class="form-control" id="dataHeight" placeholder="height">
                            <span class="input-group-addon">px</span>
                          </div>
                          <div class="input-group input-group-sm">
                            <label class="input-group-addon" for="dataRotate">{{__('app.Rotate')}}</label>
                            <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                            <span class="input-group-addon">{{__('app.degree')}}</span>
                          </div>
                          <div class="input-group input-group-sm">
                            <label class="input-group-addon" for="dataScaleX">{{__('app.Scale_X')}}</label>
                            <input type="text" class="form-control" id="dataScaleX" placeholder="{{__('app.Scale_X')}}">
                          </div>
                          <div class="input-group input-group-sm">
                            <label class="input-group-addon" for="dataScaleY">{{__('app.Scale_Y')}}</label>
                            <input type="text" class="form-control" id="dataScaleY" placeholder="{{__('app.Scale_Y')}}">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-9 docs-buttons">
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="{{__('app.Move')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Move')}}">
                              <span class="fa fa-arrows"></span>
                            </span>
                          </button>
                          <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="{{__('app.Crop')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Crop')}}">
                              <span class="fa fa-crop"></span>
                            </span>
                          </button>
                        </div>

                        <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="{{__('app.Zoom_in')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Zoom_in')}}">
                              <span class="fa fa-search-plus"></span>
                            </span>
                          </button>
                          <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="{{__('app.Zoom_out')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Zoom_out')}}">
                              <span class="fa fa-search-minus"></span>
                            </span>
                          </button>
                        </div>

                        <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="{{__('app.Move_left')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Move_left')}}">
                              <span class="fa fa-arrow-left"></span>
                            </span>
                          </button>
                          <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="{{__('app.Move_right')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Move_right')}}">
                              <span class="fa fa-arrow-right"></span>
                            </span>
                          </button>
                          <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="{{__('app.Move_up')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Move_down')}}">
                              <span class="fa fa-arrow-up"></span>
                            </span>
                          </button>
                          <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="{{__('app.Move_up')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Move_down')}}">
                              <span class="fa fa-arrow-down"></span>
                            </span>
                          </button>
                        </div>

                        <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="{{__('app.Rotate_left')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Rotate_left')}}">
                              <span class="fa fa-rotate-left"></span>
                            </span>
                          </button>
                          <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="{{__('app.Rotate_right')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Rotate_right')}}">
                              <span class="fa fa-rotate-right"></span>
                            </span>
                          </button>
                        </div>

                        <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="{{__('app.Flip_horizontal')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Flip_horizontal')}}">
                              <span class="fa fa-arrows-h"></span>
                            </span>
                          </button>
                          <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="{{__('app.Flip_vertical')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Flip_vertical')}}">
                              <span class="fa fa-arrows-v"></span>
                            </span>
                          </button>
                        </div>

                        <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-method="crop" title="{{__('app.Crop')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Crop')}}">
                              <span class="fa fa-check"></span>
                            </span>
                          </button>
                          <button type="button" class="btn btn-primary" data-method="clear" title="{{__('app.Clear')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Clear')}}">
                              <span class="fa fa-remove"></span>
                            </span>
                          </button>
                        </div>

                        <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-method="disable" title="{{__('app.Disable')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Disable')}}">
                              <span class="fa fa-lock"></span>
                            </span>
                          </button>
                          <button type="button" class="btn btn-primary" data-method="enable" title="{{__('app.Enable')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Enable')}}">
                              <span class="fa fa-unlock"></span>
                            </span>
                          </button>
                        </div>

                        <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-method="reset" title="{{__('app.Reset')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Reset')}}">
                              <span class="fa fa-refresh"></span>
                            </span>
                          </button>
                          <label class="btn btn-primary btn-upload" for="inputImage" title="{{__('app.Upload_image')}}">
                            <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Upload_image')}}">
                              <span class="fa fa-upload"></span>
                            </span>
                          </label>
                          <button type="button" class="btn btn-primary" data-method="destroy" title="{{__('app.Destroy')}}">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Destroy')}}">
                              <span class="fa fa-power-off"></span>
                            </span>
                          </button>
                        </div>

                        <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="getCroppedCanvasTitle">{{__('app.Cropped')}}</h4>
                              </div>
                              <div class="modal-body"></div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">{{__('app.Close')}}</button>
                                <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.png">{{__('app.Download')}}</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button type="button" class="btn btn-primary" data-method="getData" data-option data-target="#putData">
                          <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Get_data')}}">
                            {{__('app.Get_data')}}
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="setData" data-target="#putData">
                          <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Set_data')}}">
                            {{__('app.Set_data')}}
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="getImageData" data-option data-target="#putData">
                          <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Get_image_data')}}">
                            {{__('app.Get_image_data')}}
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="getCanvasData" data-option data-target="#putData">
                          <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Get_Canvas_data')}}">
                            {{__('app.Get_Canvas_data')}}
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="setCanvasData" data-target="#putData">
                          <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Set_Canvas_data')}}">
                            {{__('app.Set_Canvas_data')}}
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="getCropBoxData" data-option data-target="#putData">
                          <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Get_crop_box_data')}}">
                            {{__('app.Get_crop_box_data')}}
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="setCropBoxData" data-target="#putData">
                          <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Set_crop_box_data')}}">
                            {{__('app.Set_crop_box_data')}}
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="moveTo" data-option="0">
                          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)">
                            0,0
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="zoomTo" data-option="1">
                          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)">
                            100%
                          </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-method="rotateTo" data-option="180">
                          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)">
                            180°
                          </span>
                        </button>
                        <input type="text" class="form-control" id="putData" placeholder="{{__('app.Get_data_here_text')}}">
                      </div>
                      <div class="col-md-3 docs-toggles">
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                          <label class="btn btn-primary active">
                            <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Ratio')}}: 16 / 9">
                              16:9
                            </span>
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Ratio')}}: 4 / 3">
                              4:3
                            </span>
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Ratio')}}: 1 / 1">
                              1:1
                            </span>
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Ratio')}}: 2 / 3">
                              2:3
                            </span>
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
                            <span class="docs-tooltip" data-toggle="tooltip" title="{{__('app.Ratio')}}: NaN">
                              {{__('app.Free')}}
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
@section('foot')
@if(Request::is('*/image-cropper') | Request::is('image-cropper'))
<script src="/assets/jquery.min.js"></script>
<script src="/assets/bootstrap.min.js"></script>
<script src="/assets/cropper.min.js"></script>
<script src="/assets/custom.min.js"></script>
@endif
@endsection
